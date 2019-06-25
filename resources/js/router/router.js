import Vue from 'vue'
import Router from 'vue-router'
Vue.use(Router)

/** Components **/
import Login from '../components/Login'
import Home from '../components/Home'
import Askquestion from '../components/Askquestion'
import Catagory from '../components/Catagory'
import store from '../store';
/** End Components **/

const router= new Router({
    mode:'history',
    routes:[
        {
            path:'/login',
            component: Login
        },
        {
            path:'/',
            name: 'home',
            component: Home
        },
        {
            path:'/askquestion',
            name: 'askquestion',
            component: Askquestion,
            meta: {
                requiredAuth : true
            }
        },
        {
            path: '/catagory',
            name: 'catagory',
            component: Catagory,
            meta: {
                requiredAuth : true
            }
        }
    ]
})
export default router

router.beforeEach((to, from, next) => {
    if(to.matched.some(record => record.meta.requiredAuth)){
        if(store.getters.isLoggedIn){
            next()
            return
        }
        next('/login')
    }else{
        next()
    }
})

