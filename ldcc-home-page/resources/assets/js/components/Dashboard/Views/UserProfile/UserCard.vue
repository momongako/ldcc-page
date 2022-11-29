<template>
  <div class="card card-user">
    <div class="image">
      <img src="/img/background.jpg" alt="...">
    </div>
    <div class="content">
      <div class="author">
        <img class="avatar border-white" src="/img/faces/face-2.jpg" alt="...">
        <h4 class="title">Lê Công Hưu
          <br>
          <a href="#">
            <small>@Advisor</small>
          </a>
        </h4>
      </div>
    </div>
    <hr>
    <div class="text-center">
      <div class="row">
        <div v-for="(info,index) in details" :class="getClasses(index)">
          <h5>{{info.title}}
            <br>
            <small>{{info.subTitle}}</small>
          </h5>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
  export default {
    data () {
      return {
        details: [
          {
            title: '3',
            subTitle: 'Bài viết'
          },
          {
            title: '36',
            subTitle: 'Comments'
          },
          {
            title: '3,5',
            subTitle: 'Ratings'
          }
        ]
      }
    },
    methods: {
      getClasses (index) {
        var remainder = index % 3
        if (remainder === 0) {
          return 'col-md-3 col-md-offset-1'
        } else if (remainder === 2) {
          return 'col-md-4'
        } else {
          return 'col-md-3'
        }
      }
    }
  }

</script>
<style>

</style>
