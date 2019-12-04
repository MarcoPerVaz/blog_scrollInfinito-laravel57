import Vue from 'vue'
import Router from 'vue-router'

Vue.use( Router )

export default new Router ( {

  routes: [

    /* Ruta Home */
    {

      path: '/',
      name: 'home',
      component: require( './views/Home' ).default

    },

    /* Ruta Blog */
    {

      path: '/blog',
      name: 'blog',
      component: require( './views/Blog' ).default

    },

    /* Ruta Post */
    {

      path: ':slug',
      name: 'post',
      component: require( './views/Post' ).default,
      props: true

    },
    /* Ruta 404 */
    {

      path: '*',
      component: require( './views/404' ).default

    },

  ],

  mode: 'history' // Evita que aparezca #(hash) en la url

} )