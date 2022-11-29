<template>
    <div class="row">
        <div class="col-md-12 card">
            <div class="content">
                <form v-on:submit="saveForm()">
                    <div class="form-create" v-if=" step == 'create' ">
                        <div class="row row-input">
                            <div class="col-md-12">
                                <fg-input id="name" type="text"
                                          label="Tab name*"
                                          placeholder="Tên tab"
                                          v-model="config.name">
                                </fg-input>
                                <span class="text-danger error-validate" v-if="hasError('name')">{{getError('name')}}</span>
                            </div>
                        </div>
                        <div class="row row-input">
                            <div class="col-md-12">
                                <fg-input type="text"
                                          label="Description*"
                                          placeholder="Description"
                                          v-model="config.description">
                                </fg-input>
                                <span class="text-danger error-validate" v-if="hasError('value')">{{getError('description')}}</span>
                            </div>
                        </div>
                    </div>
                    <div class="confirm-value" v-if="step == 'confirm' ">
                        <div class="row-confirm">
                            <label>Tab name:</label>
                            <p>{{config.name}}</p>
                        </div>
                        <div class="row-confirm">
                            <label>Description:</label>
                            <p>{{config.description}}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-offset-4 form-group">
                            <div v-if="step =='create' ">
                                <!-- <a class="btn btn-success btn-confirm-form"   v-on:click="confirmForm">Xác nhận</a> -->
                                <button class="btn btn-success btn-update-form">Create</button>
                                <router-link to="/tab_settings" class="btn btn-default">Cancel</router-link>
                            </div>
                            <div v-if="step =='confirm' ">
                                <a class="btn btn-success btn-confirm-form"   v-on:click="function() {step='create'}" href="javascript:void (0)">Back</a>
                                <button class="btn btn-success btn-update-form">Create</button>
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
                keyUnix:false,
                step: 'create',
                errors:[],
                messageError:[],
                config: {
                    name:'',
                    description:''
                },
                notifications: {
                    topCenter: false
                },
                today : new Date(),
            }
        },
        methods: {
            confirmForm: function(e) {
                if(this.checkForm(e)){
                    this.step = 'confirm';
                }
            },
            checkForm: function (e) {
                this.errors = [];
                this.messageError = [];
                //validate key
                if (!this.config.name) {
                    this.errors['name'] = 'Enter name';
                    this.messageError.push('Enter name');
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
                var newConfig = app.config;
                if(this.checkForm()){
                  app.$isLoading(true)
                    axios.post('/admin/configTab', newConfig)
                        .then(function (resp) {
                            if (resp.data.success) {
                                app.notifyVue('success',resp.data.message);
                                app.$router.push({path: '/tab_settings'});
                              app.$isLoading(false);
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
