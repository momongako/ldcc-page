<template>
    <div class="row admin_category">
       
        <div class="col-md-12 card">
            <div class="content">
                <form v-on:submit="saveForm()">
                    <div class="form-create" v-if=" step == 'create' ">
                        <div class="row row-input">
                            <div class="col-md-12">
                                <label for="content"></label>
                                <textarea id="content" class="form-control border-input" v-model="item.content">

                                </textarea>
                                <span class="text-danger error-validate" v-if="hasError('content')">{{getError('content')}}</span>
                            </div>
                        </div>
                        <div class="row row-input">
                            <div class="col-md-12">
                                <label for="status"></label>
                                <select class="form-control border-input" name="status" id="status" v-model="item.status">
                                    <option value="1">Hiện thị</option>
                                    <option value="0">Không hiện thị</option>
                                </select>
                            </div>
                        </div>
                        <div class="row row-input" v-if="item.post">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>
                                        Bài viết:
                                    </label>
                                    <router-link v-if="item.post" :to="{name: 'editPost', params: {id: item.post.id}}">
                                        {{item.post?showString(item.post.title):''}}
                                    </router-link>
                                </div>
                            </div>
                        </div>
                        <div class="row row-input" v-if="item.parent">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>
                                        Bình luận cha:
                                    </label>
                                    <router-link :to="{name: 'editComment', params: {id: item.id}}">
                                        {{showString(item.content,50)}}
                                    </router-link>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="confirm-value" v-if="step == 'confirm' ">
                        <div class="row-confirm">
                            <label>Nội dung:</label>
                            <p>{{item.content}}</p>
                        </div>
                        <div class="row-confirm">
                            <label>Trạng thái:</label>
                            <p>{{item.status?'Hiện thị':'Không hiện thị'}}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-offset-4 form-group">
                            <div v-if="step =='create' ">
                                <!-- <a class="btn btn-success btn-confirm-form"   v-on:click="confirmForm">Xác nhận</a>   -->
                                <button class="btn btn-success btn-update-form">Cập nhật</button>   
                                <router-link to="/comments" class="btn btn-default">Hủy bỏ</router-link>
                            </div>
                            <!-- <div v-if="step =='confirm' ">
                                <a class="btn btn-success btn-confirm-form"   v-on:click="function() {step='create'}" href="javascript:void (0)">Back</a>
                                <button class="btn btn-success btn-update-form">Cập nhật</button>
                            </div> -->
                            <!-- <div class="form-group" v-if="step=='create'">
                                <router-link to="/comments" class="btn btn-default">Hủy bỏ</router-link>
                            </div> -->
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-md-8 card" v-if="item.comments.length">
            <div class="content table-responsive table-full-width">
                <h3>Trả lời bình luận</h3>
                <table class="table table-striped" style="font-size:12px" >
                    <thead>
                    <th>ID</th>
                    <th>Nội dung</th>
                    <th>Trạng thái</th>
                    <th>Người dùng</th>
                    <th>Thời gian</th>
                    </thead>
                    <tbody>
                    <tr v-for="(comment,index) in item.comments">
                        <td>{{index + 1}}</td>
                        <td>
                            <router-link :to="{name: 'editComment', params: {id: comment.id}}">
                                {{showString(comment.content,50)}}
                            </router-link>
                        </td>
                        <td>{{(comment.status==1)?'Hiện thị':'Không hiện thị'}}</td>
                        <td>{{comment.ad_name}}</td>
                        <td>{{comment.created_at}}</td>
                    </tr>
                    </tbody>
                </table>
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
                item: {
                    content:'',
                    status:0,
                    parent: '',
                    post: '',
                    comments:''
                },
                notifications: {
                    topCenter: false
                }
            }
        },
        mounted() {
            let app = this;
            let id = app.$route.params.id;
            axios.get('/admin/comment/' + id)
                .then(function (resp) {
                    app.item = resp.data;
                })
                .catch(function () {
                    alert("Could not load your setting")
                });
        },
        methods: {
            showString (str,len = 30) {
                if (str.length > len) return str.substring(0,len)+ '...'
                return str;
            },
            confirmForm: function(e) {
                if(this.checkForm(e)){
                    this.step = 'confirm';
                }
            },
            checkForm: function (e) {
                this.errors = [];
                this.messageError = [];
                //validate key
                if (!this.item.content) {
                    this.errors['content'] = 'Cần nhập nội dung';
                    this.messageError.push('Cần nhập nội dung');
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
                var newItem = app.item;
                if(this.checkForm()){
                    axios.put('/admin/comment/'+app.item.id, newItem)
                        .then(function (resp) {
                            if (resp.data.success) {
                                app.notifyVue('success',resp.data.message);
                                app.$router.push({path: '/comments'});
                            } else {
                                app.notifyVue('danger',resp.data.message);
                            }
                        })
                        .catch(function (resp) {
                            app.notifyVue('danger',"Có lỗi, vui lòng thực hiện lại");
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
