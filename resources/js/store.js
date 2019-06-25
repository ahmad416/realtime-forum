import Vue from 'vue'
import Vuex from 'vuex'
import Axios from 'axios'
Vue.use(Vuex)

export default new Vuex.Store({
    state:{
        loading: false,
        token: localStorage.getItem('token') || '',
        user: localStorage.getItem('user') || ''
    },
    getters:{
        loadingSpinner: state => {
           return  state.loading
        },
        isLoggedIn(state) {
            if(state.token != ''){
                return true
            }else{
                return false
            }
        },
        userName: state =>{
            return state.user
        }
    },
    mutations:{
        auth_request(state){
            state.loading= true
        },
        auth_success(state){
            state.loading= false
            
        },
        token_add(state, token){
            state.token = token
        },
        logout(state){
            state.token = ''
        },
        user_name(state, user){
            state.user = user
        }
    },
    actions:{
        login({commit},user){
           return new Promise((resolve,reject)=> {
               commit('auth_request')
               Axios({ url: 'api/auth/login', data: user, method: 'POST'}).
               then( resp => {
                   const token= resp.data.access_token
                   const user= resp.data.user
                   localStorage.setItem('token', token)
                   localStorage.setItem('user', user)
                   commit('auth_success')
                   commit('token_add', token)
                   commit('user_name', user)
                   resolve(resp)
               }).catch( err => {
                console.log(err)
                localStorage.removeItem('token')
                localStorage.removeItem('user')
                reject(err)
               })
           })
        },
        logout({commit}){
            return new Promise((resolve,reject) => {
                commit('logout')
                localStorage.removeItem('token')
                localStorage.removeItem('user')
                delete Axios.defaults.headers.common['Authorization']
                resolve()
            })
        }
    }
})