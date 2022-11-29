<template>
  <div class="row">
    <div class="col-md-12">
      <div class="row">
        <div class="col-md-12">
          <div class="row">
            <div class="col-md-offset-10 col-md-2" style="text-align: right">
              <router-link :to="{name: 'createBanner'}" class="btn btn-success border-btn">
                <i class="ti-settings"></i><span>Add new</span>
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
                    <th>Image</th>
                    <th>Link</th>
                    <th>Description</th>
                    <th>Created at</th>
                    <th>Edit</th>
                    <th>Delete</th>
                  </thead>
                  <tbody>
                    <tr v-for="(banner,index) in banners">
                      <td>{{index + 1}}</td>
                      <td><img width="40" height="40" v-bind:src="banner.path" alt=""></td>
                      <td><a v-bind:href="banner.link">{{banner.link}}</a></td>
                      <td>{{banner.description}}</td>
                      <td>{{banner.created_at}}</td>
                      <td>
                        <router-link :to="{name: 'editBanner', params: {id: banner.id}}">
                          <i class="ti-pencil"></i>
                        </router-link>
                      </td>
                      <td>
                        <a href="#"
                          v-on:click="deleteEntry(banner.id, index)">
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
    </div>
  </div>
</template>
<script>
  import PaperNotification from './../../../components/UIComponents/NotificationPlugin/Notification.vue'
  export default {
    data: function () {
      return {
        banners: [],
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
          this.banners =  response.data.data.data;
          this.pagination = response.data.pagination;
        });
      },
      changePage: function (page) {
        this.pagination.current_page = page;
        this.getVueItems(page);
      },
      getFillterUrl:function () {
        var url = '/admin/banners?';
        if (this.keyword) {
          url += '&keyword='+this.keyword;
        }
        return url;
      },
      filterBanner () {
        var url = this.getFillterUrl();
        axios.get(url).then((response) => {
          this.banners =  response.data.data.data;
          this.pagination = response.data.pagination;
        });
      },
      deleteEntry(id, index) {
        if (confirm("Want to delete this information?")) {
          var app = this;
          axios.post('/admin/delete-banner/' + id)
                  .then(function (resp) {
                    app.filterBanner();
                  })
                  .catch(function (resp) {
                    alert("Could not delete setting");
                  });
        }
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
