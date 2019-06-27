<template>
    <v-container class="my-4">
        <v-card flat>
            <v-layout row wrap class="pa-3 mt-2">
                <v-flex xs1 md1 class="mt-2">
                    <v-avatar color="indigo">
                        <v-icon dark>account_circle</v-icon>
                    </v-avatar>
                </v-flex>
                <v-flex xs9 md9 class="mt-4">
                    {{question.user}}
                </v-flex>
                <v-flex xs2 md2 class="mt-4">
                    <v-icon>watch_later</v-icon> &nbsp;{{ question.created_at}}
                </v-flex>
            </v-layout>
            <v-layout row wrap>
                <v-flex xs12 md11 offset-md1>
                    <h3>{{question.name}}</h3>
                </v-flex>
            </v-layout>
            <v-layout row wrap>
                <v-flex xs12 md11 offset-md1>
                    <v-chip color="green" text-color="white">{{question.catagory['title']}}</v-chip>
                </v-flex>
            </v-layout>
            <v-layout row wrap>
                <v-flex xs12 md11 offset-md1>
                    <v-divider></v-divider>
                </v-flex>
            </v-layout>
            <v-layout row wrap>
                <v-flex xs12 md11 offset-md1>
                    <p>{{question.body}}</p>
                </v-flex>
            </v-layout>
        </v-card>
    </v-container>
</template>

<script>
import Avatar from 'vue-avatar'
export default {
    components:{
        Avatar
    },
    data(){
        return{
            question:{}
        }
    },
    created(){
        axios.get(`/api/question/${this.$route.params.slug}`).
        then( res => this.question = res.data.data)
    }
}
</script>

<style>

</style>
