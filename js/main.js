import homePageComponent from './components/HomePageComponent.js';   

const routes = [
    { path: "/", name: "homepage", component: homePageComponent }
];

const router = new VueRouter({

    routes

});

const vm = new Vue({

    router: router
    
}).$mount("#app");