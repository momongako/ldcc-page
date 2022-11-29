<template>
    <div class="row">
        <div class="col-md-12 card">
            <div class="content">
                <form v-on:submit="saveForm()">
                    <div class="form-create" v-if=" step == 'create' ">
                        <div class="row row-input">
                            <div class="col-md-12">
                                <fg-input id="email" type="text"
                                          label="Key*"
                                          placeholder="Key"
                                          v-model="config.key">
                                </fg-input>
                                <span class="text-danger error-validate" v-if="hasError('key')">{{getError('key')}}</span>
                            </div>
                        </div>
                        <div class="row row-input">
                            <div class="col-md-12">
                                TEXT <input type="radio" v-on:change="changeValueType" value="1" v-model="config.value_type">
                                HTML <input type="radio" v-on:change="changeValueType" value="2" v-model="config.value_type">
                            </div>
                        </div>
                        <div class="row row-input">
                            <div class="col-md-12">
                                <fg-input type="text"
                                          label="Value*"
                                          placeholder="Value"
                                          v-model="config.value" id="config_value">
                                </fg-input>
                                <span class="text-danger error-validate" v-if="hasError('value')">{{getError('value')}}</span>
                            </div>
                        </div>
                        <div class="row row-input">
                            <div class="col-md-12">
                                <label>Description</label>
                                <textarea rows="5" class="form-control border-input"
                                            placeholder="Description"
                                            v-model="config.description"  id="config_description">
                                </textarea>
                                <span class="text-danger error-validate" v-if="hasError('value')">{{getError('value')}}</span>
                            </div>
                        </div>
                    </div>
                    <div class="confirm-value" v-if="step == 'confirm' ">
                        <div class="row-confirm">
                            <label>Key:</label>
                            <p>{{config.key}}</p>
                        </div>
                        <div class="row-confirm">
                            <label>Value:</label>
                            <p v-if="config.value_type == 1">{{config.value}}</p>
                            <p v-if="config.value_type == 2" v-html="config.value"></p>
                        </div>
                        <div class="row-confirm">
                            <label>Description:</label>
                            <p>{{config.description}}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-offset-4 form-group">
                            <div v-if="step =='create' ">
                                <button class="btn btn-success btn-update-form">Update</button>
                                <router-link to="/settings" class="btn btn-default">Cancel</router-link>
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
                config: {
                    id:'',
                    key: '',
                    value: '',
                    value_type : 1,
                    description: '',
                    tab_id: this.$route.params.tab_id,
                    status: 1
                },
                notifications: {
                    topCenter: false
                }
            }
        },
        mounted() {
            let app = this;
            let id = app.$route.params.id;
            axios.get('/admin/config/' + id)
                .then(function (resp) {
                    app.config = resp.data;
                    app.changeValueType();
                })
                .catch(function () {
                    alert("Could not load your setting")
                });
        },
        methods: {
            changeValueType: function () {
                if (this.config.value_type == 2) {
                    CKEDITOR.replace('config_value',{
                        startupMode : 'source'
                    });
                    CKEDITOR.instances['config_value'].setData(this.config.value)
                } else {
                    if (CKEDITOR.instances['config_value'])
                    CKEDITOR.instances['config_value'].destroy(true);
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
                //Validate value
                if (this.config.value_type == 2) this.config.value = CKEDITOR.instances['config_value'].getData();
                if (!this.config.value) {
                    this.errors['value'] = 'Need to enter information';
                    this.messageError.push('Need to enter information');
                }

                //validate email
                if (!this.config.key) {
                    this.errors['key'] = 'Need to enter key';
                    this.messageError.push('Need to enter key');
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
                if (newConfig.value_type == 2)
                    newConfig.value = CKEDITOR.instances['config_value'].getData();
                if(this.checkForm()){
                  app.$isLoading(true)
                    axios.put('/admin/config/'+app.config.id, newConfig)
                        .then(function (resp) {
                            if (resp.data.success) {
                                app.notifyVue('success',resp.data.message);
                                app.$isLoading(false)
                                app.$router.push({path: '/settings'});
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
