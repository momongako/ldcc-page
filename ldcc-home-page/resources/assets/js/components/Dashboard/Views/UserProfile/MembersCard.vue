<template>
  <div class="card">
    <div class="header">
      <h4 class="title">{{title}}</h4>
    </div>
    <div class="content">
      <ul class="list-unstyled team-members">
        <li>
          <div class="row" v-for="member in members">
            <div class="col-xs-9">
              <a href="">- {{member.name}}</a>
              <br>
              <span :class="getStatusClass(member.status)">
                <small>{{member.status}}</small>
              </span>
            </div>

            <div class="col-xs-3 text-right">
              <button class="btn btn-sm btn-success btn-icon">
                <i class="ti-angle-double-right"></i>
              </button>
            </div>
          </div>
        </li>
      </ul>
    </div>
  </div>
</template>
<script>
  export default {
    data () {
      return {
        title: 'Danh sách bài viết',
        members: [
          {
            image: '/img/faces/face-0.jpg',
            name: 'I like the way you work it No diggity I wanna bag it up',
            status: 'Active'
          },
          {
            image: '/img/faces/face-1.jpg',
            name: 'I like the way you work it No diggity I wanna bag it up',
            status: 'Expired'
          },
          {
            image: '/img/faces/face-1.jpg',
            name: 'I like the way you work it No diggity I wanna bag it up',
            status: 'Close'
          }
        ]
      }
    },
    methods: {
      getStatusClass (status) {
        switch (status) {
          case 'Expired':
            return 'text-muted'
          case 'Available':
            return 'text-success'
          case 'Close':
            return 'text-danger'
          default:
            return 'text-success'
        }
      }
    }
  }

</script>
<style>

</style>
