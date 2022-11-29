<template>
    <div class="row admin_category">
        <div class="col-md-12 card">
            <div class="content">
                <form v-on:submit="saveForm()">
                    <div class="form-create" v-if=" step == 'create' ">
                        <div class="row">
                            <div class="col-md-12">
                                <fg-input id="email" type="text"
                                          label="Name*"
                                          placeholder="Name"
                                          v-model="category.name">
                                </fg-input>
                                <span class="text-danger error-validate" v-if="keyUnix">This category has been created</span>
                                <span class="text-danger error-validate" v-if="hasError('name')">{{getError('name')}}</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <fg-input id="description" type="text"
                                          label="Description"
                                          placeholder="Description"
                                          v-model="category.description">
                                </fg-input>
                                <span class="text-danger error-validate" v-if="hasError('description')">{{getError('description')}}</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <label for="slug">Path</label>
                                <div class="form-group">
                                    {{'/cat/'}}{{category.slug}}
                                    <input id="slug" type="text" class="form-control border-input" placeholder="Link" v-model="category.slug">
                                    <span class="text-danger error-validate" v-if="hasError('slug')">{{getError('slug')}}</span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>
                                        Parent Directory
                                    </label>
                                    <TreeSelect v-model="category.parent" :options="options" @select="changeCategory" placeholder="-- Parent Directory --" />
                                </div>
                                <span class="text-danger error-validate" v-if="hasError('parent')">{{getError('parent')}}</span>
                            </div>
                        </div>
                    </div>
                    <div class="confirm-value" v-if="step == 'confirm' ">
                        <div class="row-confirm">
                            <label>Name list:</label>
                            <p>{{category.name}}</p>
                        </div>
                        <div class="row-confirm">
                            <label>Description:</label>
                            <p>{{category.description}}</p>
                        </div>
                        <div class="row-confirm">
                            <label>Parent Directory:</label>
                            <p>{{category.parent.name}}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-offset-4 form-group">
                            <div v-if="step =='create' ">
                                <!-- <a class="btn btn-success btn-confirm-form"   v-on:click="confirmForm">Xác nhận</a> -->
                                <button class="btn btn-success btn-update-form">Update</button>
                                <router-link to="/categories" class="btn btn-default">Cancel</router-link>
                            </div>
                            <div v-if="step =='confirm' ">
                                <a class="btn btn-success btn-confirm-form"   v-on:click="function() {step='create'}" href="javascript:void (0)">Back</a>
                                <button class="btn btn-success btn-update-form">Update</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

        </div>

    </div>
</template>

<script>
    import PaperNotification from './../../../components/UIComponents/NotificationPlugin/Notification.vue';
    import TreeSelect from '@riophae/vue-treeselect';
    import '@riophae/vue-treeselect/dist/vue-treeselect.css'
    export default {
        data: function () {
            return {
                multipleCategory:{},
                keyUnix:false,
                step: 'create',
                errors:[],
                messageError:[],
                category: {
                    id:'',
                    name:'',
                    description:'',
                    slug: '',
                    parent: null
                },
                listParents: [],
                options: [],
                notifications: {
                    topCenter: false
                }
            }
        },
        components: {
            TreeSelect,
        },
        mounted() {
            let app = this;
            let id = app.$route.params.id;
            this.getListPatent();
            this.getAllCategories();
            this.getTreeCategories();
            axios.get('/admin/category/' + id)
                .then(function (resp) {
                    app.category = resp.data;              
                    if(resp.data.parent){
                        app.category.parent = resp.data.parent.id;
                    }else{
                        app.category.parent = null;
                    }
                    
                })
                .catch(function () {
                    alert("Could not load your setting")
                });
            
        },
        methods: {
            getTreeCategories () {
                axios.get('/admin/tree-categories').then((response) => {
                    this.options =  response.data;
                });
            },
            changeCategory: function(node, instanceId) {
                if(node.id){
                    this.category.parent = node.id;
                }else{
                    this.category.parent = '';
                }
                
            },
            getAllCategories(){
                axios.get("/admin/all/categories").then(item=>{
                    this.multipleCategory = item.data['multiple'];
                    this.multipleCategory.linkedit = '/admin#/categories/edit/';
                });
            },
            getListPatent: function(page){
                axios.get('/admin/list/categories').then((response) => {
                    this.listParents =  response.data;
                });
            },
            confirmForm: function(e) {
                if(this.checkForm(e)){
                    this.step = 'confirm';
                }
            },
            checkForm: function (e) {
                this.errors = [];
                this.messageError = [];
                this.keyUnix = false;
                //validate key
                if (!this.category.name) {
                    this.errors['name'] = 'The name field is required.';
                    this.messageError.push('The name field is required.');
                }
                if (!this.messageError.length) {
                    return true;
                }
            },
            getError: function(key) {
                return this.errors[key];
            },
            hasError: function(key) {
                return this.errors[key] != undefined ;
            },
            saveForm() {
                event.preventDefault();
                var app = this;
                var newCategory = app.category;
                if(this.checkForm()){
                  app.$isLoading(true)
                    axios.put('/admin/category/'+app.category.id, newCategory)
                        .then(function (resp) {
                          app.$isLoading(false)
                            if (resp.data.success) {
                                app.notifyVue('success',resp.data.message);
                                app.$router.push({path: '/categories'});
                            } else {
                                app.notifyVue('danger',resp.data.message);
                            }
                        })
                        .catch(function (resp) {
                            app.notifyVue('danger',"Could not update your setting");
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
            }
        }
    }
</script>
<style>
</style>
