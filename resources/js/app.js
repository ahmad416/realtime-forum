

require('./bootstrap');
window.Vue = require('vue');

import Vue from 'vue'

/*** Vuetify Library ***/
import Vuetify from 'vuetify'
import 'vuetify/dist/vuetify.min.css'
Vue.use(Vuetify)
/*** End Vuetify Library ***/

/**Importing vue progressvbar */
import VueProgressBar from 'vue-progressbar'
Vue.use(VueProgressBar, {
  color: '#1976D2',
  failedColor: 'red',
  height: '5%'
})
/**End of importing vue progress bar */
/*** Font Awsome Library ***/
import { library } from '@fortawesome/fontawesome-svg-core'
import { faCoffee, faComments, faEnvelope, faKey } from '@fortawesome/free-solid-svg-icons'
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'
 //Add Font to the library to use
library.add(faCoffee,faComments,faEnvelope,faKey)
Vue.component('font-awesome-icon', FontAwesomeIcon)
Vue.use(Vuetify, {
    iconfont: 'md'
  })
/*** End Font Awsome Library ***/

/** Importing Routes File **/
import router from './router/router'
/** End Importing Routes File **/
import store from './store'
/** Main component Registration**/
import Main from './components/Main'
Vue.component('main-component', Main)
const app = new Vue({
    router,
    store,
    el: '#app'
});
