<template>
  <div class="card">
    <div class="header">
      <h4 class="title">Edit Profile</h4>
    </div>
    <div class="content">
      <form>
        <div class="row">
          <div class="col-md-12"></div>
          <div class="col-md-12">
            <fg-input type="text"
                      label="Email"
                      :disabled="true"
                      placeholder="Email"
                      v-model="user.email">
            </fg-input>
          </div>
          <div class="col-md-12">

            <fg-input type="text"
                      label="Tên*"
                      placeholder="Name"
                      v-model="user.name">
            </fg-input>
          </div>
          <div class="col-md-12">
            <fg-input type="password"
                      label="Mật khẩu"
                      placeholder="Mật khẩu"
                      v-model="user.password">
            </fg-input>
            <span class="text-danger error-validate" v-if="hasError('password')">{{getError('password')}}</span>
          </div>
          <div class="col-md-12">
            <fg-input type="password"
                      label="Nhập lại mật khẩu"
                      placeholder="Nhập lại mật khẩu"
                      v-model="user.confirm_password">
            </fg-input>
            <span class="text-danger error-validate" v-if="hasError('password')">{{getError('password')}}</span>
          </div>
          <div class="col-md-12"></div>
        </div>
        <div class="text-center">
          <button type="submit" class="btn btn-info btn-fill btn-wd" @click.prevent="updateProfile">
            Update Profile
          </button>
        </div>
        <div class="clearfix"></div>
      </form>
    </div>
  </div>
</template>
<script>
  import PaperNotification from './../../../../components/UIComponents/NotificationPlugin/Notification.vue'
  export default {
    data () {
      return {
        errors:[],
        messageError:[],
        step: 'create',
        notifications: {
          topCenter: false
        },
        user: {
          name: '',
          email: '',
          password: '',
          confirm_password: ''
        }
      }
    },
    mounted() {
      let app = this;
      axios.get('/admin/profile')
              .then(function (resp) {
                app.user = resp.data;
                app.user.password = '';
                app.user.confirm_password = '';
              })
              .catch(function () {
                alert("Could not load auth")
              });
    },
    methods: {
      // updateProfile () {
      //   alert('Your data: ' + JSON.stringify(this.user))
      // },
      confirmForm: function(e) {
        if(this.checkForm(e)){
          this.step = 'confirm';
        }
      },
      checkForm: function (e) {
        this.errors = [];
        this.messageError = [];
        //Validate name
        if (!this.user.name) {
          this.errors['name'] = 'Cần nhập đầy đủ tên';
          this.messageError.push('Cần nhập đầy đủ tên');
        }
        //validate password
        if (this.user.password.length > 0) {
        }
        //validate email
        if (!this.user.email) {
          this.errors['email'] = 'Cần nhập Email';
          this.messageError.push('Cần nhập Email');
        }  else {
          if (!this.validEmail(this.user.email)) {
            this.errors['email'] = 'Định dạng email không đúng';
            this.messageError.push('Định dạng email không đúng');
          } else if(!this.checkMailUnix(this.user.email)) {
            this.errors['email'] = 'Email đã tồn tại';
            this.messageError.push('Email đã tồn tại');
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
      updateProfile() {
        event.preventDefault();
        var app = this;
        var newUser = app.user;
        if(this.checkForm()){
          axios.put('/admin/profile', newUser)
                  .then(function (resp) {
                    if (resp.data.success) {
                      app.notifyVue('success',resp.data.message);
                    } else {
                      app.notifyVue('danger',resp.data.message);
                    }
                  })
                  .catch(function (resp) {
                    app.notifyVue('danger',"Could not update your user");
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
