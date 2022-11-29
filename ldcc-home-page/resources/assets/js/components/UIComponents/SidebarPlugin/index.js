import Sidebar from './SideBar.vue'

const SidebarStore = {
    showSidebar: false,
    sidebarLinks: [{
            name: 'Users',
            icon: 'ti-lock',
            vaitro: 1,
            path: '/users'
        },
        {
            name: 'CMS',
            icon: 'ti-write',
            path: 'sub',
            children: [{
                    name: 'Categories',
                    path: '/categories',

                },
                {
                    name: 'Posts',
                    path: '/posts',
                },
            ]
        },
        // {
        //     name: 'Menus',
        //     icon: 'ti-layout-slider-alt',
        //     path: '/menus'
        // },
        {
            name: 'Career',
            icon: 'ti-layout-slider-alt',
            path: '/career'
        },
        {
            name: 'Contact Us',
            icon: 'ti-layout-slider-alt',
            path: '/contact-us'
        },
        {
            name: 'Settings',
            icon: 'ti-settings',
            vaitro: 1,
            path: 'sub',
            children: [{
                    name: 'Settings',
                    path: '/settings'

                },
                {
                    name: 'Nhóm Settings',
                    path: '/tab_settings',
                },

            ]
        }
    ],
    displaySidebar(value) {
        this.showSidebar = value
    }
};

const SidebarPlugin = {

    install(Vue) {
        Vue.mixin({
            data() {
                return {
                    sidebarStore: SidebarStore
                }
            }
        })

        Object.defineProperty(Vue.prototype, '$sidebar', {
            get() {
                return this.$root.sidebarStore
            }
        })
        Vue.component('side-bar', Sidebar)
    }
}

export default SidebarPlugin