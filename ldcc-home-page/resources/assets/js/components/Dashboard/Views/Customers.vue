<template>
  <div class="row">
    <div class="col-md-12">
      <div class="content">
        <div class="col-md-4">
          <input class="form-control border-input ti-filter" placeholder="Search" v-on:keypress.13="filterCustomer" v-model="keyword" name="keyword" type="text">
        </div>
        <div class="col-md-2">
          Trạng thái:
          <div>
            <label class="checkbox-inline">
              <input type="checkbox" value="1" v-model="searchStatus" v-on:change="filterCustomer">Active
            </label>
          </div>
          <div>
            <label class="checkbox-inline">
              <input type="checkbox"  value="2" v-model="searchStatus" v-on:change="filterCustomer">InActive
            </label>
          </div>
        </div>
        <div class="col-md-4" style="text-align: right">
          <router-link :to="{name: 'createCustomer'}" class="btn btn-success border-btn">
            <i class="ti-user"></i><span>Tạo người dùng</span>
          </router-link>
        </div>
      </div>
    </div>
    <div class="col-md-12" style="margin-bottom: 10px"></div>
    <div class="col-md-12">
      <div class="card">
        <div>
          <div class="content table-responsive table-full-width">
            <table class="table table-striped" style="font-size:12px" >
              <thead>
                <th>ID</th>
                <th>Name</th>
                <th>Age</th>
                <th>Sex</th>
                <th>Email</th>
                <th>Status</th>
                <th>Created at</th>
                <th></th>
              </thead>
              <tbody>
              <tr v-for="(customer,index) in customers">
                <td>{{index + 1}}</td>
                <td>{{customer.first_name + ' ' +customer.last_name}}</td>
                <td>{{today.getFullYear() - customer.year_of_birth}}</td>
                <td>{{getGender(customer.gender)}}</td>
                <td>{{customer.email}}</td>
                <td>{{getStatus(customer)}}</td>
                <td>{{customer.created_at}}</td>
                <td>
                  <router-link :to="{name: 'customerProfile', params: {id: customer.id}}">
                    <i class="ti-pencil"></i>
                  </router-link>
                  <a v-if="customer.status != 2" href="#"
                     v-on:click="deleteEntry(customer.id, index)">
                    <i class="ti-trash"></i>
                  </a>
                  <a href="#" v-if="customer.status == 2" v-on:click="backDelete(customer.id)">
                    <i class="ti-back-right"></i>
                  </a>
                  <a v-if="! customer.email_verified_at" href="#" v-on:click="senConfirmMail(customer.id)"><i class="ti-email"></i></a>
                </td>
              </tr>
              </tbody>
            </table>
            <div class="content">
              <nav>
                <ul class="pagination">
                  <li v-if="pagination.current_page > 1">
                    <a href="#" aria-label="Previous"
                       @click.prevent="changePage(pagination.current_page - 1)">
                      <span aria-hidden="true">«</span>
                    </a>
                  </li>
                  <li v-for="page in pagesNumber" v-bind:class="[ page == isActived ? 'active' : '']">
                    <a href="#" @click.prevent="changePage(page)">{{ page }}</a>
                  </li>
                  <li v-if="pagination.current_page < pagination.last_page">
                    <a href="#" aria-label="Next" @click.prevent="changePage(pagination.current_page + 1)">
                      <span aria-hidden="true">»</span>
                    </a>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
  import PaperNotification from './../../../components/UIComponents/NotificationPlugin/Notification.vue'
  export default {
    data: function () {
      return {
        email_verified_at: '',
        searchStatus: ['1'],
        subscribe_flag: ['0','1'],
        keyword:'',
        customers: [],
        pagination: {
          total: 0,
          per_page: 2,
          from: 1,
          to: 0,
          current_page: 1
        },
        today : new Date(),
        offset: 4,
      }
    },
    components: {
      PaperNotification
    },
    mounted() {
      var app = this;
      this.getVueItems(this.pagination.current_page);
    },
    methods: {
      exportCustomer: function () {
        var url = '/customer/export?'+ 'status='+JSON.stringify(this.searchStatus);
        url += '&subscribe_flag=' + JSON.stringify(this.subscribe_flag);
        url += '&email_verified_at=' + JSON.stringify(this.email_verified_at);
        if (this.keyword) {
          url += '&keyword='+this.keyword;
        }
        window.location.href = url;
      },
      getYear (time) {
        if (time) {
          var date = new Date(time);
          return date.getFullYear()+'/'+(date.getMonth() + 1)+ '/' + date.getDate();
        }
        return '';
      },
      deleteEntry(id, index) {
        if (confirm("Want to delete this user?")) {
          var app = this;
          axios.delete('/admin/customer/delete/' + id)
                  .then(function (resp) {
                    //app.customers.splice(index, 1);
                    //app.customers[index].status = 2;
                    app.filterCustomer();
                  })
                  .catch(function (resp) {
                    alert("Could not delete customer");
                  });
        }
      },
      backDelete(id) {
        if (confirm("Want to activate this user?")) {
          var app = this;
          axios.put('/admin/customer/backDelete/' + id)
                  .then(function (resp) {
                    //app.customers.splice(index, 1);
                    //app.customers[index].status = 2;
                    app.filterCustomer();
                  })
                  .catch(function (resp) {
                    alert("Could not delete customer");
                  });
        }
      },
      senConfirmMail(id) {
        if (confirm("Want to send confirmation email?")) {
          var app = this;
          axios.put('/admin/customer/confirmMail/' + id)
                  .then(function (resp) {
                    if (resp.data.success == 1) {
                      app.notifyVue('success',resp.data.message);
                      app.filterCustomer();
                    } else {
                      app.notifyVue('danger',resp.data.message);
                    }
                  })
                  .catch(function (resp) {
                    alert("An error occurred, please try again");
                  });
        }
      },
      getVueItems: function(page){
        var url = this.getFillterUrl();
        axios.get(url+'&page='+page).then((response) => {
          this.customers =  response.data.data.data;
          this.pagination = response.data.pagination;
        });
      },
      changePage: function (page) {
        this.pagination.current_page = page;
        this.getVueItems(page);
      },
      getFillterUrl:function () {
        var url = '/admin/customers?'+ 'status='+JSON.stringify(this.searchStatus);
        url += '&subscribe_flag=' + JSON.stringify(this.subscribe_flag);
        url += '&email_verified_at=' + this.email_verified_at;
        if (this.keyword) {
          url += '&keyword='+this.keyword;
        }
        return url;
      },
      filterCustomer () {
        var url = this.getFillterUrl();
        axios.get(url).then((response) => {
          this.customers =  response.data.data.data;
          this.pagination = response.data.pagination;
        });
      },
      getStatus: function (customer) {
        if (customer.email_verified_at) {
          return (customer.status==1)?'Active' :' InActive';
        } else {
          return 'Error'
        }
      },
      getGender: function(gender) {
        if (gender == 1) {
          return 'Nam';
        }
        if (gender == 2) {
          return 'Nữ';
        }
        return '';
      },
      getSubscribed : function (subscribed) {
        if (subscribed == 1) {
          return 'する';
        }
        return 'しない';
      },
      notifyVue (type, message) {
        this.$notifications.notify(
                {
                  message: message,
                  icon: 'ti-bell',
                  horizontalAlign: 'center',
                  verticalAlign: 'top',
                  type: type
                });
      },
    },

    computed: {
      isActived: function () {
        return this.pagination.current_page;
      },
      pagesNumber: function () {
        if (!this.pagination.to) {
          return [];
        }
        var from = this.pagination.current_page - this.offset;
        if (from < 1) {
          from = 1;
        }
        var to = from + (this.offset * 2);
        if (to >= this.pagination.last_page) {
          to = this.pagination.last_page;
        }
        var pagesArray = [];
        while (from <= to) {
          pagesArray.push(from);
          from++;
        }
        return pagesArray;
      }
    },

  }
</script>
<style>
  .border-btn {
    border-radius: 5px;
  }
</style>
