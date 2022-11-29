<template>
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">

                        <div class="col-md-6">
                            <input class="form-control border-input ti-filter" placeholder="Search" v-on:keypress.13="filterCategory" v-model="keyword" name="keyword" type="text">
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
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Position</th>
                                    <th>Message</th>
                                    <th>Attachment</th>
                                    </thead>
                                    <tbody>
                                    <tr v-for="(career,index) in careers">
                                        <td>{{index + 1}}</td>
                                        <td>{{career.name}}</td>
                                        <td>{{career.email}}</td>
                                        <td>{{career.phone}}</td>
                                        <td>{{career.position}}</td>
                                        <td>{{career.message}}</td>
                                        <td>
                                            <!--<a  :href="'/download-file/' + career.id">-->
                                                <!--{{career.file_name}}-->
                                            <!--</a>-->
                                            <a target="_blank"  :href="career.path">
                                                {{career.file_name}}
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
        careers: [],
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
      this.getVueItems(this.pagination.current_page);
    },
    methods: {
      getVueItems: function(page){
        var url = this.getFillterUrl();
        axios.get(url+'&page='+page).then((response) => {
          this.careers =  response.data.data.data;
          this.pagination = response.data.pagination;
        });
      },
      changePage: function (page) {
        this.pagination.current_page = page;
        this.getVueItems(page);
      },
      getFillterUrl:function () {
        var url = '/get-list-career?';
        if (this.keyword) {
          url += '&keyword='+this.keyword;
        }
        return url;
      },
      filterCategory () {
        var url = this.getFillterUrl();
        axios.get(url).then((response) => {
          this.careers =  response.data.data.data;
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
