import homePageComponent from './components/homePageComponent.js';  
import formPageComponent from './components/formPageComponent.js'; 
/*import adminLoginComponent from './components/adminLoginComponent.js';  
import adminHomepageComponent from './components/adminHomepageComponent.js';  
import adminCreateuserComponent from './components/adminCreateuserComponent.js';  
import adminEdituserComponent from './components/adminEdituserComponent.js';  
import adminDeleteuserComponent from './components/adminDeleteuserComponent.js';*/

const routes = [
    { path: "/", name: "homepage", component: homePageComponent },
    { path: "/form", name: "form", component: formPageComponent },
    /*{ path: "/admin_login", name: "adminLogin", component: adminLoginComponent },
    { path: "/admin_homepage", name: "adminHomepage", component: adminHomepageComponent },
    { path: "/admin_createuser", name: "adminCreateuser", component: adminCreateuserComponent },
    { path: "/admin_edituser", name: "adminEdituser", component: adminEdituserComponent },
    { path: "/admin_deleteuser", name: "adminDeleteuser", component: adminDeleteuserComponent }*/
];

const router = new VueRouter({

    routes

});

const vm = new Vue({

    router: router
    
}).$mount("#app");