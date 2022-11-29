<template>
  <div :class="sidebarClasses"
       :data-background-color="backgroundColor"
       :data-active-color="activeColor">
    <div class="sidebar-wrapper" id="style-3">
      <div class="logo">
        <a href="#" class="simple-text">

          <img style="width: 40px;
    display: inline-block;
    height: 40px;
    margin-left: 0px;
    margin-right: 10px;
    background: white;
    border-radius: 40px;
    text-align: center;" v-if="this.user_curent_info.thumbnail === null || this.user_curent_info.thumbnail === ''"  alt="">
          <img style="width: 40px;
    display: inline-block;
    height: 40px;
    margin-left: 0px;
    margin-right: 10px;
    background: white;
    border-radius: 40px;
    text-align: center;" v-if="this.user_curent_info.thumbnail !== null && this.user_curent_info.thumbnail !== ''" :src="urlImg+this.user_curent_info.thumbnail" alt="">
          <span>{{this.user_curent_info.name}}</span>
        </a>

      </div>
      <slot>

      </slot>
      <ul :class="navClasses">
        <!--By default vue-router adds an active class to each route link. This way the links are colored when clicked-->
        <router-link v-for="(link,index) in sidebarLinks" :to="editPath(link.path)" :class="{ 'submenu' : link.path == 'sub'}" tag="li" :ref="link.name" :key="link.name + index" >
          <!-- <template v-show="link.vaitro == user_curent_info.type"> -->
            <div v-if="link.path == 'sub'" class="submenu_div" v-on:click.prevent="showSubmenu('submenu_div_'+index, 'submenu_div_icon_'+index)">
              <i :class="link.icon"></i>
              <p style="position: relative;">{{getLinkName(link.name)}} <i class="text-right ti-angle-right" :class="'submenu_div_icon_'+index"></i></p>
            </div>
            <ul v-if="link.path == 'sub'" :class="'submenu_div_'+index" class="submenu_ul hidden">
                <router-link v-for="(item,index) in link.children" :to="item.path" tag="li" :ref="item.name" :key="item.name + index">
                  <a><p>{{getLinkName(item.name)}}</p></a>
                </router-link>
            </ul>


            <a v-else>
              <i :class="link.icon"></i>
              <p>{{getLinkName(link.name)}}</p>
            </a>
          <!-- </template> -->
        </router-link>
      </ul>
      <!-- <moving-arrow :move-y="arrowMovePx">

      </moving-arrow> -->
    </div>
  </div>
</template>
<script>
  import MovingArrow from './MovingArrow.vue'
  export default {
    props: {
      type: {
        type: String,
        default: 'sidebar',
        validator: (value) => {
          let acceptedValues = ['sidebar', 'navbar'];
          return acceptedValues.indexOf(value) !== -1
        }
      },
      backgroundColor: {
        type: String,
        default: 'black',
        validator: (value) => {
          let acceptedValues = ['white', 'black', 'darkblue']
          return acceptedValues.indexOf(value) !== -1
        }
      },
      activeColor: {
        type: String,
        default: 'success',
        validator: (value) => {
          let acceptedValues = ['primary', 'info', 'success', 'warning', 'danger']
          return acceptedValues.indexOf(value) !== -1
        }
      },
      sidebarLinks: {
        type: Array,
        default: () => []
      }
    },
    components: {
      MovingArrow
    },
    computed: {
      sidebarClasses () {
        if (this.type === 'sidebar') {
          return 'sidebar'
        } else {
          return 'collapse navbar-collapse off-canvas-sidebar'
        }
      },
      navClasses () {
        if (this.type === 'sidebar') {
          return 'nav'
        } else {
          return 'nav navbar-nav'
        }
      },
      /**
       * Styles to animate the arrow near the current active sidebar link
       * @returns {{transform: string}}
       */
      arrowMovePx () {
        return this.linkHeight * this.activeLinkIndex
      }
    },
    data () {
      return {
        linkHeight: 60,
        activeLinkIndex: 0,

        windowWidth: 0,
        isWindows: false,
        hasAutoHeight: false,
        listConfigAdmin: {
          WEB_NAME: '',
          WEB_LOGO: ''
        },
        user_curent_info: user_curent_info,
        urlImg: 'https://pronexus-media-files.s3-ap-southeast-1.amazonaws.com/public'
      }
    },
    methods: {
      getConfigAllAdmin: function(){
        // search keyword
        // var url = '/admin/configAdmin?tab_id=1&keyword=xxx';
        // search all tab id = 1
        var url = '/admin/configAdmin?tab_id=1&keyword=WEB_NAME';
        axios.get(url).then((response) => {
          this.listConfigAdmin.WEB_NAME =  response.data.data.data.length?response.data.data.data['0'].value:'';
        });
        var url = '/admin/configAdmin?tab_id=1&keyword=WEB_LOGO';
        axios.get(url).then((response) => {
          this.listConfigAdmin.WEB_LOGO =  response.data.data.data.length?response.data.data.data['0'].value:'';
        });
        console.log(this.listConfigAdmin)
      },
      editPath(path){
        if(path == 'sub'){
          return '';
        }else{
          return path;
        }
      },
      showSubmenu(classNameShowUl, classNameShowIcon){
        const elShowUl = document.getElementsByClassName(classNameShowUl)['0'];
        const elShowIcon = document.getElementsByClassName(classNameShowIcon)['0'];

        const elShowUl1 = document.getElementsByClassName(classNameShowUl)['1'];
        const elShowIcon1 = document.getElementsByClassName(classNameShowIcon)['1'];

        if(elShowUl.classList.contains("hidden")) {
          elShowUl.classList.add('display');
          elShowUl.classList.remove('hidden');
          elShowIcon.classList.add('ti-angle-down');
          elShowIcon.classList.remove('ti-angle-right');

          elShowUl1.classList.add('display');
          elShowUl1.classList.remove('hidden');
          elShowIcon1.classList.add('ti-angle-down');
          elShowIcon1.classList.remove('ti-angle-right');
        }else {
          elShowUl.classList.add('hidden');
          elShowUl.classList.remove('display');
          elShowIcon.classList.add('ti-angle-right');
          elShowIcon.classList.remove('ti-angle-down');

          elShowUl1.classList.add('hidden');
          elShowUl1.classList.remove('display');
          elShowIcon1.classList.add('ti-angle-right');
          elShowIcon1.classList.remove('ti-angle-down');
        }

      },
      getLinkName (name) {
        if (name == 'Customers') return 'Customers';
        if (name == 'Users') return 'Administrator';
        if (name == 'User Profile') return 'Profile';
        if (name == 'Categories') return 'Category';
        if (name == 'Posts') return 'Posts';
        if (name == 'Comments') return 'Comments';
        if (name == 'Emails') return 'Email registration';
        if (name == 'Banners') return 'Banner';
        if (name == 'Files') return 'Manage photos';
        if (name == 'Settings') return 'Setting';
        if (name == 'CMS') return 'CMS';
        if (name == 'Menus') return 'Menu';
        if (name == 'Career') return 'Career';
        if (name == 'Contact Us') return 'Contact Us';
        if (name == 'Settings') return 'Setting';
        if (name == 'Nhóm Settings') return 'Setting group';
      },
      findActiveLink () {
        this.sidebarLinks.find((element, index) => {
          // if (element && Array.isArray(element.children)) {
          //   this.children = element.children
          // } else if (element) {
          //   this.children = []
          // }

          let found = element.path === this.$route.path
          if (found) {
            this.activeLinkIndex = index
          }

          return found
        })
      }
    },
    mounted () {
      this.getConfigAllAdmin();
      this.findActiveLink()
    },
    watch: {
      $route: function (newRoute, oldRoute) {
        this.findActiveLink()
      }
    }
  }

</script>
<style>

</style>
