<template>
  <div> 
    <v-navigation-drawer
      fixed
      :clipped="$vuetify.breakpoint.mdAndUp"
      app
      v-model="drawer"
    >
      <!-- <v-list dense>
        <template v-for="item in items">
          <v-layout
            row
            v-if="item.heading"
            align-center
            :key="item.heading"
          >
            <v-flex xs6>
              <v-subheader v-if="item.heading">
                {{ item.heading }}
              </v-subheader>
            </v-flex>
            <v-flex xs6 class="text-xs-center">
              <a href="#!" class="body-2 black--text">EDIT</a>
            </v-flex>
          </v-layout>
          <v-list-group
            v-else-if="item.children"
            v-model="item.model"
            :key="item.text"
            :prepend-icon="item.model ? item.icon : item['icon-alt']"
            append-icon=""
          >
            <v-list-tile slot="activator">
              <v-list-tile-content>
                <v-list-tile-title>
                  {{ item.text }}
                </v-list-tile-title>
              </v-list-tile-content>
            </v-list-tile>
            <v-list-tile
              v-for="(child, i) in item.children"
              :key="i"
            >
              <v-list-tile-action v-if="child.icon">
                <v-icon>{{ child.icon }}</v-icon>
              </v-list-tile-action>
              <v-list-tile-content>
                <v-list-tile-title>
                  {{ child.text }}
                </v-list-tile-title>
              </v-list-tile-content>
            </v-list-tile>
          </v-list-group>
          <v-list-tile v-else  :key="item.text">
            <v-list-tile-action>
              <v-icon>{{ item.icon }}</v-icon>
            </v-list-tile-action>
            <v-list-tile-content>
              <v-list-tile-title>
                {{ item.text }}
              </v-list-tile-title>
            </v-list-tile-content>
          </v-list-tile>
        </template>
      </v-list> -->
    </v-navigation-drawer>
    <v-toolbar
      color="#F8F9FB"
      flat
      app
      :clipped-left="$vuetify.breakpoint.mdAndUp"
      fixed
    >
      <v-toolbar-side-icon class="hidden-md-and-up" @click.stop="drawer = !drawer"></v-toolbar-side-icon>
      <v-toolbar-title class="ml-0 pl-3" style="width:300px">
        <router-link to="/" style="text-decoration:none; color:black"><b>Creative</b>Dezine</router-link>
      </v-toolbar-title>
      <v-btn
          flat
          to="/catagories"
          class="ml-0 hidden-sm-and-down"
        >
        Catagories
      </v-btn>
      <v-btn
          light
          flat
          to="/askquestion"
          class="ml-0 hidden-sm-and-down"
          v-if="isLoggedIn"
        >
          New
        </v-btn>
        <v-btn
          flat
          to="/trending"
          class="ml-0 hidden-sm-and-down"
        >
          Trending
        </v-btn>
      <v-text-field
        flat
        solo-inverted
        append-icon="search"
        label="Search"
        class="hidden-sm-and-down"
      ></v-text-field>
      <v-spacer></v-spacer>
        <v-btn v-if="isLoggedIn" class="mx-2" flat fab dark  color="primary">
          <v-icon dark>notifications</v-icon>
        </v-btn>
        <v-menu
          v-model="menu"
          v-if="isLoggedIn"
          :close-on-content-click="false"
          :nudge-width="200"
          offset-x
        >
      <template v-slot:activator="{ on }">
        <v-avatar v-on="on">
          <img
            src="https://cdn.vuetifyjs.com/images/john.jpg"
            alt="John"
          >
        </v-avatar>
      </template>
      <v-card>
        <v-list>
          <v-list-tile avatar>
            <v-list-tile-avatar>
              <img src="https://cdn.vuetifyjs.com/images/john.jpg" alt="John">
            </v-list-tile-avatar>
            <v-list-tile-content>
              <v-list-tile-title>{{ userName }}</v-list-tile-title>
              <v-list-tile-sub-title>Founder of Vuetify.js</v-list-tile-sub-title>
            </v-list-tile-content>

            <v-list-tile-action>
              <v-btn
                :class="fav ? 'red--text' : ''"
                icon
                @click="fav = !fav"
              >
                <v-icon>favorite</v-icon>
              </v-btn>
            </v-list-tile-action>
          </v-list-tile>
        </v-list>
        <v-divider></v-divider>
        <v-list>
          <v-list-tile
          @click=""
          >
            <v-list-tile-action>
              <v-icon>person</v-icon>
            </v-list-tile-action>
            <v-list-tile-content>
              <v-list-tile-title>View Profile</v-list-tile-title>
            </v-list-tile-content>
          </v-list-tile>
        </v-list>
        <v-list>
          <v-list-tile
          @click=""
          >
            <v-list-tile-action>
              <v-icon>settings</v-icon>
            </v-list-tile-action>
            <v-list-tile-content>
              <v-list-tile-title>Update Profile</v-list-tile-title>
            </v-list-tile-content>
          </v-list-tile>
        </v-list>
        <v-divider></v-divider>
        <v-list>
          <v-list-tile
          @click="logout"
          >
            <v-list-tile-action>
              <v-icon>exit_to_app</v-icon>
            </v-list-tile-action>
            <v-list-tile-content>
              <v-list-tile-title>Sign Out</v-list-tile-title>
            </v-list-tile-content>
          </v-list-tile>
        </v-list>
      </v-card>
    </v-menu>
        <v-btn
          flat
          to="/login"
          class="ml-0 hidden-sm-and-down"
          v-else
        >
          Login
        </v-btn>
        <v-btn
          color="primary"
          to="/login"
          class="ml-0 hidden-sm-and-down"
          v-if="!isLoggedIn"
        >
          Sign up
        </v-btn>
    </v-toolbar>
  </div>
</template>

<script>
export default {
    data(){
        return{
            dialog: false,
            drawer: false,
            fav: true,
      menu: false,
      message: false,
      hints: true
        }
    },
    computed:{
      isLoggedIn(){
        return this.$store.getters.isLoggedIn
      },
      userName(){
        return this.$store.getters.userName
      }
    },
    props: {
      source: String
    },
    methods:{
      logout: function(){
        this.$store.dispatch('logout').
        then(() => {
          // window.location(this.$router.push('/login'))
          this.$router.push('/login')
        })
      }
    }
}
</script>

<style>

</style>
