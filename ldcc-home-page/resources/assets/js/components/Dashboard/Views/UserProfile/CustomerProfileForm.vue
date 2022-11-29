<template>
  <div class="card">
    <div class="header">
      <h4 class="title">Edit Profile</h4>
    </div>
    <div class="content">
      <form>
        <div class="row">
          <div class="col-md-12">
            <fg-input type="email"
                      label="Email"
                      placeholder="Email"
                      v-model="user.email">
            </fg-input>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6">
            <fg-input type="text"
                      label="Họ"
                      placeholder="Họ"
                      v-model="user.firstName">
            </fg-input>
          </div>
          <div class="col-md-6">
            <fg-input type="text"
                      label="Tên"
                      placeholder="Tên"
                      v-model="user.lastName">
            </fg-input>
          </div>
        </div>

        <div class="row">
          <div class="col-md-12">
            <fg-input type="text"
                      label="Số điện thoại"
                      placeholder=""
                      v-model="user.phone">
            </fg-input>
          </div>
        </div>

        <div class="row">
          <div class="col-md-12">
            <fg-input type="text"
                      label="Địa chỉ"
                      placeholder="Home Address"
                      v-model="user.address">
            </fg-input>
          </div>
        </div>

        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
              <label>Mô tả</label>
              <textarea rows="5" class="form-control border-input"
                        placeholder="Here can be your description"
                        v-model="user.aboutMe">

              </textarea>
            </div>
          </div>
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
  export default {
    data () {
      return {
        user: {
          company: 'Paper Dashboard',
          username: 'michael23',
          email: '',
          lastName: 'Faker',
          address: 'Melbourne, Australia',
          city: 'melbourne',
          postalCode: '',
          aboutMe: `Oh so, your weak rhyme. You doubt I'll bother, reading into it.I'll probably won't, left to my own devicesBut that's the difference in our opinions.`
        }
      }
    },
    methods: {
      updateProfile () {
        alert('Your data: ' + JSON.stringify(this.user))
      }
    }
  }

</script>
<style>

</style>
