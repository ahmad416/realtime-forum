<template>
    <div class="dashboard">
        <v-container class="my-4">
            <topcard></topcard>
            <v-card flat v-for="questions in question" :key="questions.slug">
                <v-layout row wrap class="pa-3">
                    <v-flex xs2 sm4 md1>
                        <avatar :username="questions.user"></avatar>
                    </v-flex>
                    <v-flex xs10 md5>
                        <div class="mt-3">{{ questions.name}}</div>
                    </v-flex>
                    <v-flex class="xs12 sm4 md2 mt-3">
                        <div class="caption grey--text"></div>
                        <div>{{questions.catagory.title}}</div>
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
            question:[]
        }
    },
    created(){
        axios.get('/api/question').
        then(res => {
            this.question = res.data.data
        }).catch( err  => {
            console.log(err.data)
        })
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
</style>
