<template>
  <div class="row">
    <div class="col-md-12">
      <div class="row">
        <div class="col-md-offset-10 col-md-2" style="text-align: right;">
          <router-link :to="{name: 'createUser'}" class="btn btn-success border-btn">
            <i class="ti-user"></i><span>Add new</span>
          </router-link>
        </div>
      </div>
    </div>
    <div class="col-md-12" style="margin-bottom: 10px"></div>
    <div class="col-md-12">
      <div class="card">
        <div>
          <div class="content table-responsive table-full-width">
            <table class="table table-striped">
              <thead>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Role</th>
                <th>Status</th>
                <th>Update</th>
                <th>Delete</th>
              </thead>
              <tbody>
              <tr v-for="(user,index) in users">
                <td>{{index + 1}}</td>
                <td>{{user.name}}</td>
                <td>{{user.email}}</td>
                <td>{{(user.type == 1)?'Admin':'Editor'}}</td>
                <td>{{user.status?'Active':'InActive'}}</td>
                <td>
                  <router-link :to="{name: 'editUser', params: {id: user.id}}">
                    <i class="ti-pencil"></i>
                  </router-link>
                </td>
                <td>
                  <a v-bind:class="[ this.user_curent_info.id != 1 ? 'disableDeleteUser' : '']" href="#"
                     v-on:click="deleteEntry(user.id, index)">
                    <i class="ti-trash"></i>
                  </a>
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
        users: [],
        pagination: {
          total: 0,
          per_page: 2,
          from: 1,
          to: 0,
          current_page: 1
        },
        offset: 4,
        user_curent_info: user_curent_info,
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
      deleteEntry(id, index) {
        if (confirm("Are you sure ?")) {
          var app = this;
          axios.delete('/admin/user/delete/' + id)
                  .then(function (resp) {
                    console.log(resp.data);
                    if (resp.data.success) {
                        app.notifyVue('success',resp.data.message);
                        app.filterUser();
                    } else {
                        app.notifyVue('danger',resp.message);
                    }
                  })
                  .catch(function (resp) {
                    alert("Could not delete user");
                  });
        }
      },
      getVueItems: function(page){
        var url = this.getFilterUrl();
        axios.get(url+'page='+page).then((response) => {
          this.users =  response.data.data.data;
          this.pagination = response.data.pagination;
        });
      },
      changePage: function (page) {
        this.pagination.current_page = page;
        this.getVueItems(page);
      },
      getFilterUrl: function () {
        var url = '/admin/users?';
        var listInput = $('.ti-filter');
        $.each(listInput,function () {
          var $this = $(this);
          if ($this.val().length > 0) {
            url += $this.attr('name') + '=' + $this.val() + '&';
          }
        });
        return url;
      },
      filterUser () {
        var url = this.getFilterUrl();
        axios.get(url).then((response) => {
          this.users =  response.data.data.data;
          this.pagination = response.data.pagination;
        });
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
      notifyVue (type, message) {
        this.$notifications.notify(
                {
                  message: message,
                  icon: 'ti-bell',
                  horizontalAlign: 'center',
                  verticalAlign: 'top',
                  type: type
                });
      }
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
  .disableDeleteUser{
    pointer-events: none;
    opacity: 0.4;
    cursor: not-allowed;
  }
</style>
