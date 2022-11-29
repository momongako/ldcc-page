<template>
  <div class="row">
    <div class="col-md-12">
      <div class="row">

        <div class="col-md-12">
          <div class="row">
            <div class="col-md-12"><p></p></div>
            <div class="col-md-12">
              <div class="row">
                <div class="col-md-2">
                  <TreeSelect :options="options" :openOnClick="true" @select="changeCategory" placeholder="Categories"/>
                </div>
                <div class="col-md-2">
                  <input class="form-control border-input ti-filter" placeholder="Search" v-on:keypress.13="filterPost" v-model="filterData.keyword" name="keyword" type="text" />
                </div>
                <div class="col-md-6">
                  <div style="display: flex;">
                    <label style="margin-right: 20px;line-height: 35px;">Created at</label>
                    <Datepicker v-bind:format="customFormatter" :placeholder="labelStartDate" :input-class="dateInput" @closed="filterPost" v-model="filterData.start_publish_date"></Datepicker>
                      <p style="margin: 0px 20px;line-height: 35px;">~</p>
                    <Datepicker v-bind:format="customFormatter" :placeholder="labelEndDate" :input-class="dateInput" @closed="filterPost" v-model="filterData.end_publish_date"></Datepicker>
                  </div>
                </div>
                <div class="col-md-2" style="text-align: right;">
                  <router-link :to="{name: 'createPost'}" class="btn btn-success border-btn">
                    <i class="ti-settings"></i><span>Add new</span>
                  </router-link>
                </div>
              </div>
            </div>

          </div>
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
                <th>Title</th>
                <th>Category</th>
                <th>Status</th>
                <!-- <th>Thumbnail</th> -->

                <th>Author</th>
                <th>Created at</th>
                <th v-if="activeId == 0 || activeId == 1 || activeId == 3">Update</th>
                <th v-if="activeId == 0 || activeId == 1 || activeId == 3">Delete</th>
              </thead>
              <tbody>
              <tr v-for="(post,index) in posts">
                <td>{{index + 1}}</td>
                <td v-show="post.category_id ===1">
                  <router-link :to="{name: 'editPost', params: {id: post.id}}">
                    {{post.title}}
                  </router-link>
                </td>

                <td v-show="post.category_id ===2">
                  <router-link :to="{name: 'editPost', params: {id: post.id}}">
                    {{post.position}}
                  </router-link>
                </td>

                <td v-show="post.category_id ===3">
                  <router-link :to="{name: 'editPost', params: {id: post.id}}">
                    {{post.case_name}}
                  </router-link>
                </td>

                <td>{{(post.category) ? post.category.name:''}}</td>
                <td>
                  {{showStatus(post.status)}}
                </td>

                <td>{{post.author_name?post.author_name:''}}</td>
                <td>{{customFormatter(post.publish_date)}}</td>
                <td v-if="activeId == 0 || activeId == 1 || activeId == 3">
                  <router-link :to="{name: 'editPost', params: {id: post.id}}" v-if="post.status == 1 || post.status == 0 || post.status == 3">
                    <i class="ti-pencil" title="Update"></i>
                  </router-link>
                </td>
                <td v-if="activeId == 0 || activeId == 1 || activeId == 3">
                  <a href="#" v-on:click="deleteEntry(post.id, index)" v-if="post.status == 1 || post.status == 0 || post.status == 3">
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
</template>
<script>
  import PaperNotification from './../../../components/UIComponents/NotificationPlugin/Notification.vue'
  import Datepicker from 'vuejs-datepicker';
  import TreeSelect from '@riophae/vue-treeselect';
  // import the styles
  import '@riophae/vue-treeselect/dist/vue-treeselect.css';
  import moment from 'moment'
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
            'id': 3,
            'name': 'Save Drafts',
          },
          {
            'id': 2,
            'name': 'Deleted',
          },
        ],
        labelStartDate: 'From',
        labelEndDate: 'To',
        dateInput: 'form-control border-input ti-filter',
        listCategory: [],
        posts: [],
        filterData: {
          keyword:'',
          author_name:'',
          status: [1],
          category_id: '',
          start_publish_date: '',
          end_publish_date: ''
        },
        pagination: {
          total: 0,
          per_page: 2,
          from: 1,
          to: 0,
          current_page: 1
        },
        options:[],
        offset: 4,
      }
    },
    components: {
      PaperNotification,
      Datepicker,
      TreeSelect,
      moment
    },
    mounted() {
      var app = this;
      this.getVueItems(this.pagination.current_page);
      this.getListCategories();
      this.getTreeCategories();
    },
    methods: {
      getTreeCategories () {
          axios.get('/admin/tree-categories').then((response) => {
              this.options =  response.data;
          });
      },
      customFormatter(date) {
        if (date)
        return moment(date).format('DD-MM-YYYY');
        return '';
      },
      dateToYYYYMMDD (date) {
        // may have timezone caveats https://stackoverflow.com/a/29774197/1850609
        return moment(date).format('YYYY-MM-DD');
      },
      getListCategories(){
          axios.get('/admin/list/categories').then((response) => {
              this.listCategory =  response.data;
          });
      },
      changeCategory: function(node, instanceId) {
        this.filterData.category_id = node.id;
        this.filterPost();
      },
      changeTab: function(tab) {
        this.activeId = this.activeId === tab.id ? '1' : tab.id
        this.filterData.status = [tab.id];
        this.filterPost();
      },
      showStatus(status) {
        if(status == 0) return 'Pending';
        if(status == 1) return 'Published';
        if(status == 2) return 'Deleted';
        if(status == 3) return 'Save draft';
      },
      updatePublishPost(post, status) {
        let confirmMessage = post.status ?'You want to "Wait for Review" of this article?':'Want to "Publish" this article?';
        if(post.status == 0){
          let confirmMessage = 'Want to "Publish" this article?';
        }
        if(post.status == 1){
          let confirmMessage = 'Want to "Wait for Review" of this article?';
        }
        if(post.status == 2){
          let confirmMessage = 'Want to "Delete" this post?';
        }
        if (confirm(confirmMessage)) {
          var app = this;
          let formData = new FormData();
          formData.append("status", status);
          let header = {
            headers: {
              'Content-Type': 'multipart/form-data'
            }
          };
          axios.post('/admin/status-post/' + post.id,formData,header)
                  .then(function (resp) {
                    app.notifyVue('success',resp.data.message);
                    app.filterPost();
                  })
                  .catch(function (resp) {
                    alert("Update failed");
                  });
        }
      },
      deleteEntry(id, index) {
        if (confirm("Want to delete this information?")) {
          var app = this;
          axios.delete('/admin/posts/delete/' + id)
                  .then(function (resp) {
                    app.notifyVue('success',resp.data.message);
                    app.filterPost();
                  })
                  .catch(function (resp) {
                    alert("Could not delete setting");
                  });
        }
      },
      getVueItems: function(page){
        var url = this.getFillterUrl();
        axios.get(url+'&page='+page).then((response) => {
          this.posts =  response.data.data.data;
          this.pagination = response.data.pagination;
        });
      },
      changePage: function (page) {
        this.pagination.current_page = page;
        this.getVueItems(page);
      },
      getFillterUrl:function () {
        var url = '/admin/posts?';
        if (this.filterData.keyword) {
          url += '&keyword='+this.filterData.keyword;
        }
        if (this.filterData.author_name) {
          url += '&author_name='+this.filterData.author_name;
        }
        if (this.filterData.status) {
          url += '&status='+JSON.stringify(this.filterData.status);
        }
        if (this.filterData.category_id) {
          url += '&category_id='+JSON.stringify(this.filterData.category_id);
        }
        if (this.filterData.start_publish_date) {
          url += '&start_publish_date='+this.dateToYYYYMMDD(this.filterData.start_publish_date);
        }
        if (this.filterData.end_publish_date) {
          url += '&end_publish_date='+this.dateToYYYYMMDD(this.filterData.end_publish_date);
        }
        return url;
      },
      filterPost () {
        var url = this.getFillterUrl();
        axios.get(url).then((response) => {
          this.posts =  response.data.data.data;
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
  p{font-size: inherit;}
  .vdp-datepicker input {
    border: 1px solid #CCC5B9;
    background-color: #fffcf5;
    border: medium none;
    border-radius: 4px;
    color: #66615b;
    font-size: 13px;
    transition: background-color 0.3s ease 0s;
    padding: 7px 18px;
    height: 40px;
    -webkit-box-shadow: none;
    box-shadow: none;
  }
  .form-control[disabled], .form-control[readonly], fieldset[disabled] .form-control{
    background-color: #fffcf5;
    color: #66615b;
  }
</style>
