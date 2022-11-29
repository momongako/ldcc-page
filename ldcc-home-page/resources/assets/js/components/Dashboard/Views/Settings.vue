<template>
  <div class="row">
    <div class="col-md-12">
      <div class="row">
      </div>
    </div>
    <div class="col-md-12">
      <div class="row">
        <div class="col-md-12">
          <div class="row">
            <div class="col-md-10">
              <ul class=" config_list_tab">
                <li v-for="(tabConfig,index) in tabConfigs" :class="{ active: activeId == tabConfig.id }" >
                  <a href="javascript:void(0)" @click.prevent="changeTab(tabConfig)" >
                    {{tabConfig.name}}
                  </a>
                </li>
              </ul>
            </div>
            <div class="col-md-2" style="text-align: right;">
              <router-link :to="{name: 'createSetting',params: {tab_id: currentTab.id}}" class="btn btn-success border-btn">
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
                    <th>Key</th>
                    <th>Value</th>
                    <th>Description</th>
                    <th>Edit</th>
                    <th class="disable_delete hidden">Delete</th>
                  </thead>
                  <tbody>
                  <tr v-for="(config,index) in configs">
                    <td>{{index + 1}}</td>
                    <td>{{config.key}}</td>
                    <td v-if="config.value_type == 1">{{config.value}}</td>
                    <td v-if="config.value_type == 2">The html format needs attention when editing</td>
                    <td v-html="config.description"></td>
                    <td>
                      <router-link :to="{name: 'editSetting', params: {id: config.id}}">
                        <i class="ti-pencil"></i>
                      </router-link>
                    </td>
                    <td class="disable_delete hidden">
                      <a href="#"
                      v-on:click="deleteEntry(config.id, index)">
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
        configs: [],
        tabConfigs: [],
        currentTab: '',
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
      this.getAllTabs();
    },
    methods: {
      getAllTabs: function(){
        axios.get('/admin/configTabs').then((response) => {
          this.tabConfigs =  response.data.data.data;
          this.currentTab =  this.tabConfigs[0];
          this.activeId = this.currentTab.id;
          this.getVueItems(this.pagination.current_page);
        });
      },
      changeTab: function(config) {
        this.activeId = this.activeId === config.id ? null : config.id
        this.currentTab = config;
        this.filterConfig();
      },
      changeTab2: function(event) {
        // console.log(event.target.value);
        var currentTabselect = {id:event.target.value}
        this.currentTab = currentTabselect;
        this.filterConfig();
      },
      deleteEntry(id, index) {
        if (confirm("Are you sure ?")) {
          var app = this;
          axios.delete('/admin/configs/delete/' + id)
                  .then(function (resp) {
                    //app.customers.splice(index, 1);
                    //app.customers[index].status = 2;
                    app.notifyVue('success',resp.data.message);
                    app.filterConfig();
                  })
                  .catch(function (resp) {
                    alert("Could not delete setting");
                  });
        }
      },
      getVueItems: function(page){
        var url = this.getFillterUrl();
        axios.get(url+'&page='+page).then((response) => {
          this.configs =  response.data.data.data;
          this.pagination = response.data.pagination;
        });
      },
      changePage: function (page) {
        this.pagination.current_page = page;
        this.getVueItems(page);
      },
      getFillterUrl:function () {
        var url = '/admin/configs?tab_id='+this.currentTab.id;
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


</style>
