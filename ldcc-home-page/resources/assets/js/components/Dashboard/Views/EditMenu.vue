<template>
    <div class="row admin_category">
        <div class="col-md-6">
            <div class="card" style="min-height: 278px;">
                <ul>
                    <li v-for='(item,index) in multipleCategory' :key="index">{{item.name}}
                        <ul>
                            <children-category :items="item.children_categories"></children-category>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-md-6 card">
            <div class="content">
                <form v-on:submit="saveForm()">
                    <div class="form-create" v-if=" step == 'create' ">
                        <div class="row">
                            <div class="col-md-12">
                                <fg-input id="name" type="text"
                                          label="Name*"
                                          placeholder="Name"
                                          v-model="category.name">
                                </fg-input>
                                <span class="text-danger error-validate" v-if="hasError('name')">{{getError('name')}}</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <fg-input id="link" type="text"
                                          label="Link*"
                                          placeholder="Link"
                                          v-model="category.link">
                                </fg-input>
                                <span class="text-danger error-validate" v-if="hasError('link')">{{getError('link')}}</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <fg-input id="sort_number" type="text"
                                          label="Order*"
                                          placeholder="Order"
                                          v-model="category.sort_number">
                                </fg-input>
                                <span class="text-danger error-validate" v-if="hasError('sort_number')">{{getError('sort_number')}}</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>
                                        Parent menu
                                    </label>
                                    <select class="form-control border-input"
                                            v-model="category.parent">
                                        <option value="null">-- Parent menu --</option>
                                        <option v-for="(parent,index) in listParents" v-bind:value="{id:parent.id,name:parent.name}">{{parent.name}}</option>
                                    </select>
                                </div>
                                <span class="text-danger error-validate" v-if="hasError('parent')">{{getError('parent')}}</span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-offset-4 form-group">
                            <div v-if="step =='create' ">
                                <button class="btn btn-success btn-update-form">Update</button>
                                <router-link to="/menus" class="btn btn-default">Cancel</router-link>
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
    import PaperNotification from './../../../components/UIComponents/NotificationPlugin/Notification.vue'
    export default {
        data: function () {
            return {
                multipleCategory:{},
                keyUnix:false,
                step: 'create',
                errors:[],
                messageError:[],
                category: {
                    name:'',
                    parent: '',
                    link:'',
                    sort_number:''
                },
                listParents: [],
                notifications: {
                    topCenter: false
                }
            }
        },
        mounted() {
            let app = this;
            let id = app.$route.params.id;
            this.getListPatent();
            this.getAllCategories();
            axios.get('/admin/menu/' + id)
                .then(function (resp) {
                    app.category = resp.data;
                })
                .catch(function () {
                    alert("Could not load your setting")
                });
        },
        methods: {
            getAllCategories(){
                axios.get("/admin/all/menus").then(item=>{
                    this.multipleCategory = item.data['multiple'];
                });
            },
            getListPatent: function(page){
                axios.get('/admin/list/menus').then((response) => {
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
                    this.errors['name'] = 'Enter menu name';
                    this.messageError.push('Enter menu name');
                }
                if (!this.category.link) {
                    this.errors['link'] = 'Enter the link';
                    this.messageError.push('Enter the link');
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
                    axios.put('/admin/menu/'+app.category.id, newCategory)
                        .then(function (resp) {
                            if (resp.data.success) {
                                app.notifyVue('success',resp.data.message);
                                app.$router.push({path: '/menus'});
                            } else {
                                app.notifyVue('danger',resp.data.message);
                            }
                        })
                        .catch(function (resp) {
                            app.notifyVue('danger',"Update error, please try again");
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
