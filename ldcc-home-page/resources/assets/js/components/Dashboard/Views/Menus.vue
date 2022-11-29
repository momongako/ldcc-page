<template>
  <div class="row">
    <div class="col-md-12">
      <div class="row">
        <div class="col-md-12">
          <div class="row">

            <div class="col-md-6">
              <input class="form-control border-input ti-filter" placeholder="Search" v-on:keypress.13="filterCategory" v-model="keyword" name="keyword" type="text">
            </div>
            <div class="col-md-6" style="text-align: right">
              <router-link :to="{name: 'createMenu'}" class="btn btn-success border-btn">
                <i class="ti-settings"></i><span>Add new</span>
              </router-link>
            </div>
          </div>
        </div>
        <div class="col-md-12" style="margin-bottom: 10px"></div>
        <div class="col-md-12">
          <div class="card">
            <ul>
              <li v-for='(item,index) in multipleCategory' :key="index">{{item.name}}
                <ul>
                  <children-category :items="item.children_categories"></children-category>
                </ul>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md-12">
          <div class="card">
            <div>
              <div class="content table-responsive table-full-width">
                <table class="table table-striped" style="font-size:12px" >
                    <thead>
                      <th>ID</th>
                      <th>Name</th>
                      <th>Link</th>
                      <th>Parent menu</th>
                      <th>Edit</th>
                      <th>Delete</th>
                    </thead>
                  <tbody>
                    <tr v-for="(category,index) in categories">
                      <td>{{index + 1}}</td>
                      <td>{{category.name}}</td>
                      <td>{{category.link}}</td>
                      <td>{{category.parent?category.parent.name:''}}</td>
                      <td>
                        <router-link :to="{name: 'editMenu', params: {id: category.id}}">
                          <i class="ti-pencil"></i>
                        </router-link>
                      </td>
                      <td>
                        <a href="#"
                          v-on:click="deleteEntry(category.id, index)">
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
        multipleCategory:{},
        categories: [],
        keyword:'',
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
      // this.getAllCategories();
      this.getVueItems(this.pagination.current_page);
    },
    methods: {
      getAllCategories(){
        axios.get("/admin/all/menus").then(item=>{
          this.multipleCategory = item.data['multiple'];
        });
      },
      deleteEntry(id, index) {
        if (confirm("Want to delete this information?")) {
          var app = this;
          axios.delete('/admin/menus/delete/' + id)
                  .then(function (resp) {
                    app.notifyVue('success',resp.data.message);
                    app.filterCategory();
                  })
                  .catch(function (resp) {
                    alert("Could not delete setting");
                  });
        }
      },
      getVueItems: function(page){
        var url = this.getFillterUrl();
        axios.get(url+'&page='+page).then((response) => {
          this.categories =  response.data.data.data;
          this.pagination = response.data.pagination;
        });
      },
      changePage: function (page) {
        this.pagination.current_page = page;
        this.getVueItems(page);
      },
      getFillterUrl:function () {
        var url = '/admin/menus?';
        if (this.keyword) {
          url += '&keyword='+this.keyword;
        }
        return url;
      },
      filterCategory () {
        var url = this.getFillterUrl();
        axios.get(url).then((response) => {
          this.categories =  response.data.data.data;
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
