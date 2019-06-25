<template>
    <v-app dark="dark">
    <v-content>
      <v-container fill-height="fill-height">
        <v-layout align-center="align-center" justify-center="justify-center">
          <v-flex class="login-form text-xs-center"> 
            <div class="display-1 mb-3">
              <v-icon class="mr-2" large="large">forum</v-icon> User Login
            </div>
            <v-card light="light">
              <v-card-text>
                <div class="subheading">
                  <template>Log in to your account</template>
                </div>
                <v-form ref="form">
                  <v-text-field 
                  v-model="user.email" 
                  light="light" 
                  prepend-icon="email" 
                  label="Email" 
                  type="email"
                  :rules="emailRules"
                  required
                  >
                  </v-text-field>
                  <v-text-field 
                  v-model="user.password" 
                  light="light" 
                  prepend-icon="lock" 
                  label="Password" 
                  type="password"
                  :rules="passwordRules"
                  ></v-text-field>
                  <v-checkbox  light="light" label="Stay logged in?" hide-details="hide-details"></v-checkbox>
                  <v-btn  
                  color="primary" 
                  block="block" 
                  type="submit" 
                  @click.prevent="submit"
                  :loading="loadingSpinner"
                  >Sign in
                  </v-btn>
                </v-form>
              </v-card-text>
            </v-card>
            <div>Don't have an account?
              <v-btn light="light" @click="options.isLoggingIn = false">Sign up</v-btn>
            </div>
          </v-flex>
        </v-layout>
      </v-container>
    </v-content>
    <v-footer app="app">
      <v-flex class="text-xs-center">© 2018. All rights reserved.</v-flex>
    </v-footer>
  </v-app>
</template>

<script>
export default {
    data(){
        return{
          user:{
            email:'',
            password:''
           },
            emailRules: [
                v => !!v || 'E-mail is required',
                v => /.+@.+/.test(v) || 'E-mail must be valid'
            ],
            passwordRules: [
                v => !!v || 'Password is required',
                v => (v && v.length >= 6) || 'Password must be greater than 6 digits'
      ],
        }
    },
    computed:{
        loadingSpinner: function(){
          return this.$store.getters.loadingSpinner
        }
    },
    methods:{
       submit: function(){
         let data={
           email: this.user.email,
           password: this.user.password
         }
           if (this.$refs.form.validate()) {
             this.$store.dispatch('login', data).
             then(() => {
              // window.location.reload(this.$router.push('/')) 
              this.$router.push('/')
             })
        }
       } 
    }
}
</script>

<style scoped>
.login-form{
    max-width: 500px
}
  
</style>
