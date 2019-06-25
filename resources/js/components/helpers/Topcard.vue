<template>
    <v-card flat class="mt-4 grey lighten-2">
        <v-layout row wrap class="pa-2">
            <v-flex xs12 md6>
                <h3>Topic</h3>
            </v-flex>
            <v-flex md2 class="hidden-sm-and-down">
                <h3>Catagory</h3>
            </v-flex>
            <v-flex md2 class="hidden-sm-and-down">
                <h3>Replies</h3>
            </v-flex>
            <v-flex md2 class="hidden-sm-and-down">
                <h3>Created At</h3>
            </v-flex>
        </v-layout>
    </v-card>
</template>

<script>
export default {

}
</script>

<style scoped>
h3{
    margin-left: 5%
}
</style>
