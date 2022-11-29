<template>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" :class="{toggled: $sidebar.showSidebar}" @click="toggleSidebar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar bar1"></span>
          <span class="icon-bar bar2"></span>
          <span class="icon-bar bar3"></span>
        </button>
        <a class="navbar-brand">{{getPageName(routeName)}}</a>
      </div>
      <div class="collapse navbar-collapse">
        <ul class="nav navbar-nav navbar-right">
           <drop-down v-bind:title="'Hi ' + getUsername()" icon="ti-settings">
             <li><a href="#" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Logout</a></li>
             <li><a href="#/stats">Profile</a></li>
           </drop-down>
        </ul>
      </div>

    </div>
  </nav>
</template>
<script>
  export default {
    computed: {
      routeName () {
        const {name} = this.$route
        return this.capitalizeFirstLetter(name)
      }
    },
    data () {
      return {
        activeNotifications: false
      }
    },
    methods: {
      getUsername(){
        return user_curent_info.name;
      },
      getPageName (name) {
        if (name == 'Customers') return 'Customers';
        if (name == 'Users') return 'Administrator';
        if (name == 'Stats') return 'Profile';
        if (name == 'CreateUser') return 'Create User';
        if (name == 'EditUser') return 'Edit User';
        if (name == 'Categories') return 'List Categories';
        if (name == 'CreateCategory') return 'Create Category';
        if (name == 'EditCategory') return 'Edit Category';
        if (name == 'Posts') return 'List Posts';
        if (name == 'EditPost') return 'Edit Post';
        if (name == 'CreatePost') return 'Create Post';
        if (name == 'Career') return 'List Career';
        if (name == 'Contact Us') return 'Contact Us';
        if (name == 'Settings') return 'List Settings';
        if (name == 'CreateSetting') return 'Create Setting';
        if (name == 'EditSetting') return 'Edit Setting';
        if (name == 'TabSettings') return 'List Setting Group';
        if (name == 'CreateTabSetting') return 'Create Setting Group';
        if (name == 'EditTab') return 'Edit Setting Group';
      },
      capitalizeFirstLetter (string) {
        return string.charAt(0).toUpperCase() + string.slice(1)
      },
      toggleNotificationDropDown () {
        this.activeNotifications = !this.activeNotifications
      },
      closeDropDown () {
        this.activeNotifications = false
      },
      toggleSidebar () {
        this.$sidebar.displaySidebar(!this.$sidebar.showSidebar)
      },
      hideSidebar () {
        this.$sidebar.displaySidebar(false)
      }
    }
  }

</script>
<style>

</style>
