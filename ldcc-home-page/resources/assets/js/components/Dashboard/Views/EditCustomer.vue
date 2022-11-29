<template>
    <div class="row">
        <!-- <div class="form-group" v-if="step=='create'">
            <router-link to="/customers" class="btn btn-default">Back</router-link>
        </div> -->
        <div class="col-lg-offset-3 col-lg-6 col-md-6 card">
            <div class="content">
                <form v-on:submit="saveForm()">
                    <div class="form-create" v-if=" step == 'create' ">
                        <div class="row row-input">
                            <div class="col-md-6">
                                <fg-input type="text"
                                          label="Họ*"
                                          placeholder=""
                                          v-model="customer.first_name">
                                </fg-input>
                                <span class="text-danger error-validate" v-if="hasError('first_name')">{{getError('first_name')}}</span>
                            </div>
                            <div class="col-md-6">
                                <fg-input type="text"
                                          label="Tên*"
                                          placeholder=""
                                          v-model="customer.last_name">
                                </fg-input>
                            </div>
                        </div>
                        <div class="row row-input">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>
                                        Giới tính*
                                    </label>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <input class="" type="radio" id="one" value="1" v-model="customer.gender">
                                            <label>Nam</label>
                                        </div>
                                        <div class="col-md-3">
                                            <input  type="radio" id="two" value="2" v-model="customer.gender">
                                            <label>Nữ</label>
                                        </div>
                                    </div>
                                </div>
                                <span class="text-danger error-validate" v-if="hasError('gender')">{{getError('gender')}}</span>
                            </div>
                        </div>
                        <div class="row row-input">
                            <div class="col-md-12">
                                <fg-input type="text"
                                          label="Email*"
                                          placeholder="Email"
                                          v-model="customer.email">
                                </fg-input>
                                <span class="text-danger error-validate" v-if="mailUnix">Email đã được đăng ký</span>
                                <span class="text-danger error-validate" v-if="hasError('email')">{{getError('email')}}</span>
                            </div>
                        </div>
                        <div class="row row-input">
                            <div class="col-md-12">
                                <fg-input type="password"
                                          label="Mật khẩu"
                                          placeholder="Mật khẩu"
                                          v-model="customer.password">
                                </fg-input>
                                <span class="text-danger error-validate" v-if="hasError('password')">{{getError('password')}}</span>
                            </div>
                        </div>
                        <div class="row row-input">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>
                                        Trạng thái*
                                    </label>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <input name="check_status" class="" type="radio" id="status-one" value="1" v-model="customer.check_status">
                                            <label>Active</label>
                                        </div>
                                        <div class="col-md-3">
                                            <input name="check_status" type="radio" id="status-two" value="2" v-model="customer.check_status">
                                            <label>InActive</label>
                                        </div>
                                    </div>
                                </div>
                                <span class="text-danger error-validate" v-if="hasError('gender')">{{getError('gender')}}</span>
                            </div>
                        </div>
                    </div>
                    <div class="confirm-value" v-if="step == 'confirm' ">
                        <div class="row-confirm">
                            <label>Họ tên:</label>
                            <p>{{customer.first_name + ' ' +customer.last_name}}</p>
                        </div>
                        <div class="row-confirm">
                            <label>Giới tính</label>
                            <p>{{getGender()}}</p>
                        </div>
                        <div class="row-confirm">
                            <label>Email</label>
                            <p>{{customer.email}}</p>
                        </div>
                        <div class="row-confirm">
                            <label>Trạng thái</label>
                            <p>{{getCheckStatus()}}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-offset-4 form-group">
                            <div v-if="step =='create' ">
                                <!-- <a class="btn btn-success btn-confirm-form"   v-on:click="confirmForm">Xác nhận</a> -->
                                <button class="btn btn-success btn-update-form">Cập nhật</button>  
                                <router-link to="/customers" class="btn btn-default">Hủy bỏ</router-link>
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
                oldEmail:'',
                mailUnix:false,
                step: 'create',
                errors:[],
                messageError:[],
                customer: {
                    first_name: '',
                    last_name: '',
                    password: '',
                    email: '',
                    phone: '',
                    status: 1,
                    year_of_birth: '',
                    gender: '',
                    subscribe_flag: '1',
                    province: '',
                    subscribe_at: '',
                    name: '',
                    check_status:'',
                },
                customerStatus:[
                    {id : '0', name: 'InActive'},
                    {id: '1', name: 'Active'},
                ],
                notifications: {
                    topCenter: false
                },
                today : new Date(),
            }
        },
        components: {
            PaperNotification
        },
        mounted() {
            let app = this;
            let id = app.$route.params.id;
            app.companyId = id;
            axios.get('/admin/customer/' + id)
                .then(function (resp) {
                    app.customer = resp.data;
                    app.oldEmail = resp.data.email;
                    app.customer.password = '';
                    if (app.customer.status == 2) {
                        app.customer.check_status = 2;
                    }
                    if (app.customer.status == 1) {
                        if (app.customer.email_verified_at) {
                            app.customer.check_status = 1;
                        } else {
                            app.customer.check_status = 3;
                        }
                    }
                })
                .catch(function () {
                    alert("Could not load your customer")
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
                this.mailUnix = false;
                //Validate first_name and last_name
                if (!this.customer.first_name || !this.customer.last_name) {
                    this.errors['first_name'] = 'Bạn cần nhập đầy đủ họ tên';
                    this.messageError.push('Bạn cần nhập đầy đủ họ tên');
                }
                //validate gender
                if (!this.customer.gender) {
                    this.errors['gender'] = 'Chọn giới tính';
                    this.messageError.push('Chọn giới tính');
                }
                //validate password
                if (this.customer.password) {
                }
                //validate email
                if (!this.customer.email) {
                    this.errors['email'] = 'Cần nhập email';
                    this.messageError.push('Cần nhập email');
                } else {
                    if (!this.validEmail(this.customer.email)) {
                        this.errors['email'] = 'Email đã không đúng định dạng';
                        this.messageError.push('Email đã không đúng định dạng');
                    } else  {
                        this.checkMailUnix(this.customer.email);
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
                var app = this;
                if (email != app.oldEmail) {
                    axios.get('/admin/check/' + email).then((response) => {
                        console.log(response.data.hasEmail);
                        if (response.data.hasEmail != 0) {
                            app.mailUnix = true;
                            app.messageError.push('Email đã tồn tại');
                            app.step = 'create';
                        }
                    });
                }
            },
            saveForm() {
                event.preventDefault();
                var app = this;
                var newCustomer = app.customer;
                if(this.checkForm()){
                    axios.put('/admin/customer/update/'+app.$route.params.id, newCustomer)
                        .then(function (resp) {
                            if (resp.data.success) {
                                app.notifyVue('success',resp.data.message);
                                app.step = 'create';
                            } else {
                                app.notifyVue('danger',resp.data.message);
                                app.step = 'create';
                            }
                        })
                        .catch(function (resp) {
                            app.notifyVue('danger',"Could not update customer");
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
            },
            getGender: function() {
                if (this.customer.gender == 1) {
                    return 'Nam';
                }
                if (this.customer.gender == 2) {
                    return 'Nữ';
                }
                return '';
            },
            getCheckStatus : function () {
                if (this.customer.check_status == 1) {
                    return 'Active';
                }
                if (this.customer.check_status == 2) {
                    return 'InActive';
                }
                return '';
            }
        }
    }
</script>
<style>
    
</style>
