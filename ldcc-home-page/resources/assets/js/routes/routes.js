import DashboardLayout from '../components/Dashboard/Layout/DashboardLayout.vue'
// GeneralViews
import NotFound from '../components/GeneralViews/NotFoundPage.vue'

// Admin pages
import Overview from './../components/Dashboard/Views/Overview.vue'
import UserProfile from './../components/Dashboard/Views/UserProfile.vue'
import Notifications from './../components/Dashboard/Views/Notifications.vue'
import Icons from './../components/Dashboard/Views/Icons.vue'
import Maps from './../components/Dashboard/Views/Maps.vue'
import Typography from './../components/Dashboard/Views/Typography.vue'
import TableList from './../components/Dashboard/Views/TableList.vue'
import Emails from './../components/Dashboard/Views/Emails.vue'

import Settings from './../components/Dashboard/Views/Settings.vue'
import CreateSetting from './../components/Dashboard/Views/CreateConfig.vue'
import EditSetting from './../components/Dashboard/Views/EditConfig.vue'
import CreateTabSetting from './../components/Dashboard/Views/CreateTabConfig.vue'
import Categories from './../components/Dashboard/Views/Categories.vue'
import CreateCategory from './../components/Dashboard/Views/CreateCategory.vue'
import EditCategory from './../components/Dashboard/Views/EditCategory.vue'

import Menus from './../components/Dashboard/Views/Menus.vue'
import Career from './../components/Dashboard/Views/Career.vue'
import CreateMenu from './../components/Dashboard/Views/CreateMenu.vue'
import EditMenu from './../components/Dashboard/Views/EditMenu.vue'

import Posts from './../components/Dashboard/Views/Posts.vue'
import CreatePost from './../components/Dashboard/Views/CreatePost.vue'
import EditPost from './../components/Dashboard/Views/EditPost.vue'
import Banners from './../components/Dashboard/Views/Banners.vue'
import CreateBanner from './../components/Dashboard/Views/CreateBanner.vue'
import EditBanner from './../components/Dashboard/Views/EditBanner.vue'
import TabSettings from './../components/Dashboard/Views/TabConfigs.vue'
import EditTabSetting from './../components/Dashboard/Views/EditTabConfig.vue'
import Comments from './../components/Dashboard/Views/Comments.vue'
import EditComment from './../components/Dashboard/Views/EditComment.vue'

import CustomerProfile from './../components/Dashboard/Views/CustomerProfile.vue'

import Customers from './../components/Dashboard/Views/Customers.vue'
import CreateCustomer from './../components/Dashboard/Views/CreateCustomer.vue'
import CreateUser from './../components/Dashboard/Views/CreateUser.vue'
import EditCustomer from './../components/Dashboard/Views/EditCustomer.vue'
import Users from './../components/Dashboard/Views/Users.vue'
import EditUser from './../components/Dashboard/Views/EditUser.vue'
import ContactUs from "../components/Dashboard/Views/ContactUs";
//import CreateConfig from "../components/Dashboard/Views/CreateConfig";
const routes = [{
        path: '/',
        component: DashboardLayout,
        redirect: '/users'
    },
    {
        path: '/',
        component: DashboardLayout,
        redirect: '/stats',
        children: [{
                path: 'overview',
                name: 'overview',
                component: Overview
            },
            {
                path: 'users',
                name: 'users',
                component: Users
            },
            {
                path: 'user/create',
                name: 'createUser',
                component: CreateUser
            },
            {
                path: 'user/edit/:id',
                name: 'editUser',
                component: EditUser
            },
            {
                path: 'stats',
                name: 'stats',
                component: UserProfile
            },
            {
                path: 'categories',
                name: 'categories',
                component: Categories
            },
            {
                path: 'categories/create',
                name: 'createCategory',
                component: CreateCategory
            },
            {
                path: 'categories/edit/:id',
                name: 'editCategory',
                component: EditCategory
            },
            {
                path: 'posts',
                name: 'posts',
                component: Posts
            },
            {
                path: 'posts/create',
                name: 'createPost',
                component: CreatePost
            },
            {
                path: 'posts/edit/:id',
                name: 'editPost',
                component: EditPost
            },
            {
                path: 'banners',
                name: 'banners',
                component: Banners
            },
            {
                path: 'banners/create',
                name: 'createBanner',
                component: CreateBanner
            },
            {
                path: 'banners/edit/:id',
                name: 'editBanner',
                component: EditBanner
            },
            {
                path: 'emails',
                name: 'emails',
                component: Emails
            },
            {
                path: 'settings',
                name: 'settings',
                component: Settings
            },
            {
                path: 'tab_settings',
                name: 'tabSettings',
                component: TabSettings
            },
            {
                path: 'settings/create/:tab_id',
                name: 'createSetting',
                component: CreateSetting
            },
            {
                path: 'settings/edit/:id',
                name: 'editSetting',
                component: EditSetting
            },
            {
                path: 'tab_settings/createTab',
                name: 'createTabSetting',
                component: CreateTabSetting
            },
            {
                path: 'tab_settings/edit-tab/:id',
                name: 'editTab',
                component: EditTabSetting
            },
            {
                path: 'comments',
                name: 'comments',
                component: Comments
            },
            {
                path: 'comments/edit/:id',
                name: 'editComment',
                component: EditComment
            },
            {
                path: 'menus',
                name: 'menus',
                component: Menus
            },
              {
                path: 'career',
                name: 'career',
                component: Career
              },
            {
                path: 'contact-us',
                name: 'Contact Us',
                component: ContactUs
            },
            {
                path: 'menus/create',
                name: 'createMenu',
                component: CreateMenu
            },
            {
                path: 'menus/edit/:id',
                name: 'editMenu',
                component: EditMenu
            },
        ]
    },
    { path: '*', component: NotFound }
]

/**
 * Asynchronously load view (Webpack Lazy loading compatible)
 * The specified component must be inside the Views folder
 * @param  {string} name  the filename (basename) of the view to load.
 function view(name) {
   var res= require('../components/Dashboard/Views/' + name + '.vue');
   return res;
};**/

export default routes
