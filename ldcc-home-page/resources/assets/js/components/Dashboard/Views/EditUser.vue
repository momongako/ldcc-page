<template>
    <div class="row">
        <div class="col-lg-offset-3 col-lg-6 col-md-6 card">
            <div class="content">
                <form v-on:submit="saveForm()">
                    <div class="form-create" v-if=" step == 'create' ">
                        <div class="row row-input">
                            <div class="col-md-12">
                                <fg-input type="text"
                                          label="Name*"
                                          placeholder=""
                                          v-model="customer.name">
                                </fg-input>
                                <span class="text-danger error-validate" v-if="hasError('name')">{{getError('name')}}</span>
                            </div>
                        </div>
                        <div class="row row-input">
                            <div class="col-md-12">
                                <fg-input type="text"
                                          label="Email*"
                                          placeholder="Email"
                                          v-model="customer.email">
                                </fg-input>
                                <span class="text-danger error-validate" v-if="hasError('email')">{{getError('email')}}</span>
                            </div>
                        </div>
                        <div class="row row-input">
                            <div class="col-md-12">
                                <fg-input type="password"
                                          label="Password"
                                          placeholder="Password"
                                          v-model="customer.password">
                                </fg-input>
                                <span class="text-danger error-validate" v-if="hasError('password')">{{getError('password')}}</span>
                            </div>
                        </div>
                        <div class="row row-input">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>
                                        Role*
                                    </label>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <input id="admin"   class="" type="radio"  value="1" v-model="customer.type">
                                            <label for="admin">Admin</label>
                                        </div>
                                        <div class="col-md-3">
                                            <input id="editor" type="radio" value="2" v-model="customer.type">
                                            <label for="editor">Editor</label>
                                        </div>
                                        <div class="col-md-3">
                                            <input id="hr"  type="radio" value="3" v-model="customer.type">
                                            <label for="hr">Hr</label>
                                        </div>
                                        <div class="col-md-3">
                                            <input id="sales"  type="radio" value="4" v-model="customer.type">
                                            <label for="sales">Sales</label>
                                        </div>
                                    </div>
                                </div>
                                <span class="text-danger error-validate" v-if="hasError('type')">{{getError('type')}}</span>
                            </div>
                        </div>
                        <div class="row row-input">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>
                                        Status*
                                    </label>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <input id="active" class="" type="radio" value="1" v-model="customer.status">
                                            <label for="active">Active</label>
                                        </div>
                                        <div class="col-md-3">
                                            <input id="inactive"  type="radio"  value="0" v-model="customer.status">
                                            <label for="inactive">InActive</label>
                                        </div>
                                    </div>
                                </div>
                                <span class="text-danger error-validate" v-if="hasError('status')">{{getError('status')}}</span>
                            </div>
                        </div>
                        <div class="row row-input">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="thumbnail">Avatar</label>
                                    <input type="file" name="thumbnail" class="form-control-file" id="thumbnail" @change="onFileChange" style="overflow: hidden;width: 88px;">
                                </div>
                                <div>
                                    <img v-bind:src="imagePreview" style="width: 100%;" v-show="showPreview"/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="confirm-value" v-if="step == 'confirm' ">
                        <div class="row-confirm">
                            <label>Name</label>
                            <p>{{customer.name}}</p>
                        </div>
                        <div class="row-confirm">
                            <label>Email</label>
                            <p>{{customer.email}}</p>
                        </div>
                        <div class="row-confirm">
                            <label>Role</label>
                            <p>{{(customer.type == 1)?'Admin':'Editor'}}</p>
                        </div>
                        <div class="row-confirm">
                            <label>Status</label>
                            <p>{{customer.status?'Active':'InActive'}}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-offset-4 form-group">
                            <div v-if="step =='create' ">
                                <!-- <a class="btn btn-success btn-confirm-form"   v-on:click="confirmForm">Xác nhận</a> -->
                                <button class="btn btn-success btn-update-form">Update</button>
                                <router-link to="/users" class="btn btn-default">Cancel</router-link>
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
                step: 'create',
                errors:[],
                messageError:[],
                imagePreview: null,
                showPreview: false,
                customer: {
                    name: '',
                    password: '',
                    email: '',
                    status: 1,
                    type: 1,
                    thumbnail: ''

                },
                customerStatus:[
                    {id : '0', name: 'InActive'},
                    {id: '1', name: 'Active'},
                ],
                notifications: {
                    topCenter: false
                }
            }
        },
        mounted() {
            let app = this;
            let id = app.$route.params.id;
            app.companyId = id;
            axios.get('/admin/user/' + id)
                .then(function (resp) {
                    app.customer = resp.data;
                    app.customer.password = '';
                    app.imagePreview = 'https://pronexus-media-files.s3-ap-southeast-1.amazonaws.com/public' + app.customer.thumbnail;
                    if (app.imagePreview) {
                        app.showPreview = true;
                    }
                })
                .catch(function () {
                    alert("Could not load your user")
                });
        },
        methods: {
            onFileChange(event){
                /*
                Set the local file variable to what the user has selected.
                */
                this.customer.thumbnail = event.target.files[0];

                /*
                Initialize a File Reader object
                */
                let reader  = new FileReader();

                /*
                Add an event listener to the reader that when the file
                has been loaded, we flag the show preview as true and set the
                image to be what was read from the reader.
                */
                reader.addEventListener("load", function () {
                    this.showPreview = true;
                    this.imagePreview = reader.result;
                }.bind(this), false);

                /*
                Check to see if the file is not empty.
                */
                if( this.customer.thumbnail ){
                    /*
                        Ensure the file is an image file.
                    */
                    if ( /\.(jpe?g|png|gif)$/i.test( this.customer.thumbnail.name ) ) {

                        console.log("here");
                        /*
                        Fire the readAsDataURL method which will read the file in and
                        upon completion fire a 'load' event which we will listen to and
                        display the image in the preview.
                        */
                        reader.readAsDataURL( this.customer.thumbnail );
                    }
                }
            },
            confirmForm: function(e) {
                if(this.checkForm(e)){
                    this.step = 'confirm';
                }
            },
            checkForm: function (e) {
                this.errors = [];
                this.messageError = [];
                //Validate name
                if (!this.customer.name) {
                    this.errors['name'] = 'The name field is required.';
                    this.messageError.push('The name field is required.');
                }
                //validate password
                if (this.customer.password.length > 0) {

                }
                //validate email
                if (!this.customer.email) {
                    this.errors['email'] = 'The email field is required.';
                    this.messageError.push('Cần nhập email');
                } else {
                    if (!this.validEmail(this.customer.email)) {
                        this.errors['email'] = 'The email field is required.';
                        this.messageError.push('The email field is required.');
                    } else if(!this.checkMailUnix(this.customer.email)) {
                        this.errors['email'] = 'The selected email is invalid.';
                        this.messageError.push('The selected email is invalid.');
                    }
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
            validEmail: function (email) {
                var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
                return re.test(String(email));
            },
            checkMailUnix: function (email) {
                return true;
            },
            saveForm() {
                event.preventDefault();
                var app = this;
                // var newCustomer = app.customer;

                let formData = new FormData();
                formData.append("name", app.customer.name);
                formData.append('password', app.customer.password);
                formData.append('email', app.customer.email);
                formData.append('status', app.customer.status);
                formData.append('type', app.customer.type);
                formData.append('thumbnail', app.customer.thumbnail);

                let header = {
                    headers: {
                        'Content-Type': 'multipart/form-data'
                    }
                };

                if(this.checkForm()){
                  app.$isLoading(true)
                    axios.post('/admin/user/'+app.customer.id, formData,header)
                        .then(function (resp) {
                            if (resp.data.success) {
                                app.notifyVue('success',resp.data.message);
                                app.$isLoading(false)
                                app.$router.push({path: '/users'});
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
