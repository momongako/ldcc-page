<template>
  <div class="row">
    <div class="col-md-12">
      <div class="row">
        <div class="col-md-12">
          <div class="row">
            <div class="col-md-offset-10 col-md-2" style="text-align: right">
              <a class="btn btn-success border-btn" href="/admin/export-emails">
                <i class="ti-write"></i><span> Export</span>
              </a>
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
                    <th>Email</th>
                    <th>Name</th>
                    <th>Created at</th>
                  </thead>
                  <tbody>
                  <tr v-for="(email,index) in emails">
                    <td>{{index + 1}}</td>
                    <td>{{email.email}}</td>
                    <td>{{email.name}}</td>
                    <td>{{email.created_at}}</td>
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
    </div>
  </div>
</template>
<script>
  import PaperNotification from './../../../components/UIComponents/NotificationPlugin/Notification.vue'
  export default {
    data: function () {
      return {
        emails: [],
        keyword:'',
        pagination: {
          total: 0,
          per_page: 2,
          from: 1,
          to: 0,
          current_page: 1
        },
        offset: 4,
        activeId: null
      }
    },
    components: {
      PaperNotification
    },
    mounted() {
      var app = this;
      this.getVueItems(1);
    },
    methods: {
      getVueItems: function(page){
        var url = this.getFillterUrl();
        axios.get(url+'&page='+page).then((response) => {
          this.emails =  response.data.data.data;
          this.pagination = response.data.pagination;
        });
      },
      changePage: function (page) {
        this.pagination.current_page = page;
        this.getVueItems(page);
      },
      getFillterUrl:function () {
        var url = '/admin/emails?';
        if (this.keyword) {
          url += '&keyword='+this.keyword;
        }
        return url;
      },
      filterConfig () {
        var url = this.getFillterUrl();
        axios.get(url).then((response) => {
          this.configs =  response.data.data.data;
          this.pagination = response.data.pagination;
        });
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
  ul.config_list_tab{
    list-style: none;
    padding-left: 0;
    margin-bottom: 0;
    display: flex;
    flex-wrap: wrap;
  }
  ul.config_list_tab li{
    border-radius: 10px;
    background: #46ba86;
    margin-right: 5px;
  }
  ul.config_list_tab li a{
    width: 100%;
    float: left;
    border-radius: 10px;
    padding: 10px;
    font-weight: 700;
    font-size: 15px;
    color: #fff;
  }
  ul.config_list_tab li.active{
    background: #8609FD;
  }

</style>
