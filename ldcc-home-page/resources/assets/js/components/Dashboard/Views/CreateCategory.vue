<template>
    <div class="row admin_category">
        <div class="col-md-12 card">
            <div class="content">
                <form v-on:submit="saveForm()">
                    <div class="form-create" v-if=" step == 'create' ">
                        <div class="row">
                            <div class="col-md-12">
                                <fg-input id="name" type="text"
                                          label="Name*"
                                          placeholder="Name"
                                          v-model="category.name" @keyup="slugConvert($event.target.value)">
                                </fg-input>
                                <span class="text-danger error-validate" v-if="keyUnix">Danh mục này đã được tạo</span>
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
                                    <!-- <select class="form-control border-input"
                                           v-model="category.parent">
                                        <option value="">-- Danh mục cha --</option>
                                        <option v-for="(parent,index) in listParents" v-bind:value="{id:parent.id,name:parent.name}">{{parent.name}}</option>
                                    </select> -->
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
                                <button class="btn btn-success btn-update-form">Create</button>
                                <router-link to="/categories" class="btn btn-default">Cancel</router-link>
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
                    name:'',
                    description:'',
                    parent: null,
                    slug: ''
                },
                listParents: [],
                options: [],
                notifications: {
                    topCenter: false
                },
                today : new Date(),
            }
        },
        components: {
            TreeSelect,
        },
        mounted() {
            this.getAllCategories();
            this.getListPatent();
            this.getTreeCategories();
        },
        methods: {
            slugConvert: function(str) {
                str = str.replace(/^\s+|\s+$/g, ''); // trim
                str = str.toLowerCase();

                // remove accents, swap ñ for n, etc
                var from = "ãàáäâẽèéëêìíïîõòóöôùúüûñç·/_,:;";
                var to   = "aaaaaeeeeeiiiiooooouuuunc------";
                for (var i=0, l=from.length ; i<l ; i++) {
                    str = str.replace(new RegExp(from.charAt(i), 'g'), to.charAt(i));
                }

                str = str.replace(/[^a-z0-9 -]/g, '') // remove invalid chars
                    .replace(/\s+/g, '-') // collapse whitespace and replace by -
                    .replace(/-+/g, '-'); // collapse dashes

                this.category.slug = str;
            },
            getTreeCategories () {
                axios.get('/admin/tree-categories').then((response) => {
                    this.options =  response.data;
                });
            },
            changeCategory: function(node, instanceId) {
                this.category.parent = node.id;
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
                }else {
                    this.checkKeyUnix(this.category.name);
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
            checkKeyUnix: function (key) {
                var app = this;
                axios.get('/admin/checkCategory/' + key).then((response) => {
                    if (response.data.hasKey != 0) {
                        app.keyUnix = true;
                        app.messageError.push('Directory has been registered.');
                        app.step = 'create';
                    }
                });
            },
            saveForm() {
                event.preventDefault();
                var app = this;
                var newCategory = app.category;
                if(this.checkForm()){
                  app.$isLoading(true)
                    axios.post('/admin/category', newCategory)
                        .then(function (resp) {
                            if (resp.data.success) {
                                app.notifyVue('success',resp.data.message);
                                app.$isLoading(false)
                                app.$router.push({path: '/categories'});
                            } else {
                                app.notifyVue('danger',resp.data.message);
                            }
                        })
                        .catch(function (resp) {
                            app.notifyVue('danger',"Could not create your setting");
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
