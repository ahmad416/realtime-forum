<template>
    <div id="app">
        <v-app>
            <toolbar></toolbar>
            <router-view></router-view>
            <vue-progress-bar></vue-progress-bar>
        </v-app>
        
    </div>
</template>

<script>
import Toolbar from '../components/layout/Toolbar'
export default {
    components:{
       Toolbar 
    },
    
}
</script>

<style>

</style>
