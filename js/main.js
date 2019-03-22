import homePageComponent from './components/homePageComponent.js';  
import formPageComponent from './components/formPageComponent.js'; 
import storiesPageComponent from './components/storiesPageComponent.js';
import storyPageComponent from './components/storyPageComponent.js';


const routes = [
    { path: "/", name: "homepage", component: homePageComponent },
    { path: "/form", name: "form", component: formPageComponent },
    { path: "/stories", name: "stories", component: storiesPageComponent },
    { path: "/story", name: "story", component: storyPageComponent },
];

var scrollBehavior = function(to, from, savedPosition) {
    if (to.hash) {
      return {
        selector: to.hash
      }
    } else {
      return {
        x: 0,
        y: 0
      }
    }
  };

const router = new VueRouter({

    routes,
    scrollBehavior: scrollBehavior

});

const vm = new Vue({

    router: router
    
}).$mount("#app");