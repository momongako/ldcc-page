<template>
  <div class="row">
    
    <div class="col-md-12">
      <div class="row">
        <div class="col-md-12">
          <div class="row">
            <div class="col-md-10">
              <ul class=" config_list_tab">
                <li v-for="(tab,index) in tabFillter" :class="{ active: activeId == tab.id }" >
                  <a href="javascript:void(0)" @click.prevent="changeTab(tab)" >
                    {{tab.name}}
                  </a>
                </li>
              </ul>
            </div>
            <div class="col-md-2" style="text-align: right;">
              <input class="form-control border-input ti-filter" placeholder="Search comments" v-on:keypress.13="filterComment" v-model="filterData.keyword" name="keyword" type="text" />
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
                    <th>Content</th>
                    <th>Comment father</th>
                    <th>Posts</th>
                    <th>Status</th>
                    <th>Users</th>
                    <th>Time</th>
                    <th v-if="activeId == 0 || activeId == 1">Update</th>
                    <th v-if="activeId == 1">Destroy</th>
                    <th v-if="activeId == 2">Pending</th>
                    <th v-if="activeId == 0">Publish</th>
                    <th v-if="activeId == 0 || activeId == 1">Delete</th>
                    </thead>
                  <tbody>
                  <tr v-for="(item,index) in items">
                    <td>{{index + 1}}</td>
                    <td>
                      <router-link :to="{name: 'editComment', params: {id: item.id}}">
                        {{showString(item.content,50)}}
                      </router-link>
                    </td>
                    <td>
                      <router-link v-if="item.parent" :to="{name: 'editComment', params: {id: item.parent.id}}">
                        {{item.parent?showString(item.parent.content):''}}
                      </router-link>
                    </td>
                    <td>
                      <router-link v-if="item.post" :to="{name: 'editPost', params: {id: item.post.id}}">
                        {{item.post?showString(item.post.title):''}}
                      </router-link>
                    </td>
                    <td>{{(item.status==1)?'Published':'Pending'}}</td>
                    <td>{{item.ad_name}}</td>
                    <td>{{item.created_at}}</td>
                    <td v-if="activeId == 0 || activeId == 1">
                      <router-link :to="{name: 'editComment', params: {id: item.id}}" v-if="item.status == 1 || item.status == 0">
                        <i class="ti-pencil" title="Update"></i>
                      </router-link>
                    </td>

                    <td v-if="activeId == 1 || activeId == 2">
                      <a href="#" v-on:click="updateStatusEntry(item, index, 0)" v-if="item.status == 1 || item.status == 2">
                        <i v-bind:class="item.status?'ti-control-pause':'ti-eye'" v-if="item.status == 1" title="Destroy"></i>
                        <i v-bind:class="item.status?'ti-control-pause':'ti-eye'" v-if="item.status == 2" title="Pending"></i>
                      </a>
                    </td>

                    <td v-if="activeId == 0">
                      <a href="#" v-on:click="updateStatusEntry(item, index, 1)" v-if="item.status == 0">
                        <i v-bind:class="item.status?'ti-control-pause':'ti-eye'" title="Publish"></i>
                      </a>
                    </td>
                    
                    <td v-if="activeId == 0 || activeId == 1">
                      <a href="#" v-on:click="updateStatusEntry(item, index, 2)" v-if="item.status == 1 || item.status == 0">
                        <i class="ti-trash" title="Delete"></i>
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
        activeId: 1,
        tabFillter:[
          {
            'id': 1,
            'name': 'Published',
          },
          {
            'id': 0,
            'name': 'Pending',
          },
          {
            'id': 2,
            'name': 'Deleted',
          },
        ],
        items: [],
        keyword:'',
        filterData: {
          keyword:'',
          ad_name:'',
          status: ['1']
        },
        pagination: {
          total: 0,
          per_page: 2,
          from: 1,
          to: 0,
          current_page: 1
        },
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
      changeTab: function(tab) {
        this.activeId = this.activeId === tab.id ? '1' : tab.id
        this.filterData.status = [tab.id];
        this.filterComment();
      },
      showString (str,len = 30) {
        if (str.length > len) return str.substring(0,len)+ '...'
        return str;
      },
      updateStatusEntry(item, index, status) {        
        var confirmMessage = '';
        if(status == 0){
          if(item.status == 1){
            var confirmMessage = 'Want to "Unbrowse" this comment?';
          }else{
            var confirmMessage = 'Want to "Wait for approval" for this comment?';
          }
        }
        if(status == 1){
          var confirmMessage = 'Want to "Publish" this comment?';
        }
        if(status == 2){
          var confirmMessage = 'Want to "Delete" this comment?';
        }
        item.status = status;
        if (confirm(confirmMessage)) {
          var app = this;
          axios.put('/admin/comment/' + item.id,item)
                  .then(function (resp) {
                    app.notifyVue('success',resp.data.message);
                    app.filterComment();
                  })
                  .catch(function (resp) {
                    alert("Update failed !  ");
                  });
        }
      },
      getVueItems: function(page){
        var url = this.getFillterUrl();
        axios.get(url+'&page='+page).then((response) => {
          this.items =  response.data.data.data;
          this.pagination = response.data.pagination;
        });
      },
      changePage: function (page) {
        this.pagination.current_page = page;
        this.getVueItems(page);
      },
      getFillterUrl:function () {
        var url = '/admin/comments?';
        if (this.filterData.keyword) {
          url += '&keyword='+this.filterData.keyword;
        }
        if (this.filterData.ad_name) {
          url += '&ad_name='+this.filterData.ad_name;
        }
        if (this.filterData.status) {
          url += '&status='+JSON.stringify(this.filterData.status);
        }
        return url;
      },
      filterComment () {
        var url = this.getFillterUrl();
        axios.get(url).then((response) => {
          this.items =  response.data.data.data;
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
  .border-btn {
    border-radius: 5px;
  }
</style>
