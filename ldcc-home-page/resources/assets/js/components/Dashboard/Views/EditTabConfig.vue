<template>
    <div class="row">
        <div class="col-md-12 card">
            <div class="content">
                <form v-on:submit="saveForm()">
                    <div class="form-create" v-if=" step == 'create' ">
                        <div class="row row-input">
                            <div class="col-md-12">
                                <fg-input id="name" type="text"
                                          label="Tag name*"
                                          placeholder="Tag name"
                                          v-model="tab.name">
                                </fg-input>
                                <span class="text-danger error-validate" v-if="hasError('name')">{{getError('name')}}</span>
                            </div>
                        </div>
                        <div class="row row-input">
                            <div class="col-md-12">
                                <label>Description</label>
                                <textarea rows="5" class="form-control border-input"
                                            placeholder="Mô tả"
                                            v-model="tab.description"  id="description">
                                </textarea>
                                <span class="text-danger error-validate" v-if="hasError('description')">{{getError('description')}}</span>
                            </div>
                        </div>
                    </div>
                    <div class="confirm-value" v-if="step == 'confirm' ">
                        <div class="row-confirm">
                            <label>Tag name:</label>
                            <p>{{tab.name}}</p>
                        </div>
                        <div class="row-confirm">
                            <label>Description:</label>
                            <p>{{tab.description}}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-offset-4 form-group">
                            <div v-if="step =='create' ">
                                <!-- <a class="btn btn-success btn-confirm-form"   v-on:click="confirmForm">Xác nhận</a> -->
                                <button class="btn btn-success btn-update-form">Cập nhật</button>  
                                <router-link to="/tab_settings" class="btn btn-default">Hủy bỏ</router-link>
                            </div>
                            <div v-if="step =='confirm' ">
                                <a class="btn btn-success btn-confirm-form"   v-on:click="function() {step='create'}" href="javascript:void (0)">Back</a>
                                <button class="btn btn-success btn-update-form">Cập nhật</button>
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
                tab: {
                    id:'',
                    name: '',
                    description: '',
                },
                notifications: {
                    topCenter: false
                }
            }
        },
        mounted() {
            let app = this;
            let id = app.$route.params.id;
            axios.get('/admin/configTab/' + id)
                .then(function (resp) {
                    app.tab = resp.data;
                })
                .catch(function () {
                    alert("Could not load your setting")
                });
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
                //Validate value
                if (!this.tab.name) {
                    this.errors['name'] = 'Need to enter name';
                    this.messageError.push('Need to enter name');
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
                var newTab = app.tab;
                if(this.checkForm()){
                  app.$isLoading(true)
                    axios.put('/admin/configTab/'+app.tab.id, newTab)
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
