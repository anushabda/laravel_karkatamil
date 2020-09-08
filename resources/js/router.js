import Vue from 'vue';
import VueRouter from 'vue-router';
import ExampleComponent from './components/user/layouts/ExampleComponent';
import Dashboard from './components/user/layouts/Dashboard';
import Profile from './components/user/layouts/Profile';
import Basics from './components/user/layouts/Basics';
import Suggestion from './components/user/layouts/Suggestion';

Vue.use(VueRouter);

export default new VueRouter({
   routes:[
      { path:'/example',name:'example',component:ExampleComponent},
      { path:'/dashboard',name:'dashboard',component:Dashboard},
      { path:'/profile',name:'profile',component:Profile},
      { path:'/suggestion',name:'suggestion',component:Suggestion},
      { path:'/basics/:category',name:'basics',component:Basics},
   
   ],
mode:'history'
});