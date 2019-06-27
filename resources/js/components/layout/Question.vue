<template>
    <div class="dashboard">
        <v-container class="my-4">
            <topcard></topcard>
            <v-card flat class="mt-5 grey lighten-2" v-if="showCard" >
                <v-layout row wrap align-content-center justify-center fill-height>
                    <v-flex xs6>
                        <v-progress-linear
            color="deep-purple accent-4"
            indeterminate
            rounded
            height="6"
          ></v-progress-linear>
                    </v-flex>
                </v-layout>
            </v-card>
            <v-card flat v-for="questions in question" :key="questions.path">
                <v-layout row wrap class="pa-3">
                    <v-flex xs2 sm4 md1>
                        <avatar :username="questions.user"></avatar>
                    </v-flex>
                    <v-flex xs10 md5>
                        <router-link :to="`/question/${questions.path}`" class="router-style">
                            <div class="mt-3">{{ questions.name}}</div>
                        </router-link>
                    </v-flex>
                    <v-flex class="xs12 sm4 md2 mt-3">
                        <div class="caption grey--text"></div>
                        <v-chip :color="randomColor()" text-color="white">{{questions.catagory.title}}</v-chip>
                    </v-flex>
                    <v-flex class="hidden-sm-and-down md2 mt-3">
                        <div>{{questions.replies_count}}</div>
                    </v-flex>
                    <v-flex class="hidden-sm-and-down md2 mt-3">
                        <div>{{questions.created_at}}</div>
                    </v-flex>
                </v-layout>
            <v-divider></v-divider>
            </v-card>
        </v-container>
    </div>
</template>

<script>
import Avatar from 'vue-avatar'
import Topcard from '../helpers/Topcard'
export default {
    components:{
        Avatar, Topcard
    },
    data(){
        return{
            showCard: false,
            question:[]
        }
    },
    created(){
        this.showCard= true
        axios.get('/api/question').
        then(res => {
            if(res){
                this.showCard = false
                this.question = res.data.data
            }  
        }).catch( err  => {
            console.log(err.data)
        })
    },
    methods:{
        randomColor: function(){
            let color = Math.floor(Math.random() * 16777216).toString(16)
            return '#000000'.slice(0, -color.length) + color;
        }
    }
}
</script>

<style scoped>
    .question-bottom-margin{
        margin-bottom: 2%
    }
    .catagory{
        width: 50%;
        color: black;
        margin: 5%
    }
    .router-style{
        text-decoration: none;
        color: black
    }
    .router-style:hover{
        color: blue
    }
</style>
