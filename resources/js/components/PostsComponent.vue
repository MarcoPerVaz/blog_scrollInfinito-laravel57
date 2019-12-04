<template>
    <div class="row">
        <div class="col-md-12">
            <div class="card mb-3 mt-3" v-for="item in list" :key="item.id">

                <router-link 
                    class="card-header"
                    :to="{name: 'post', params: {slug: item.slug}}"
                    v-text="item.title"
                >
                </router-link>

                <div class="card-body">
                    <p>ID: {{ item.id }}</p>
                    <p class="card-text" v-text="item.excerpt"></p>
                </div>
            </div>

            <!-- Componente vue-infinite-loading -->
            <infinite-loading @infinite="infiniteHandler">
                <div slot="no-more">--</div>
                <div slot="spinner">Cargando...</div>
                <div slot="no-results">Sin resultados</div>
            </infinite-loading>
            <!-- Nota <infinite-loading></infinite-loading> en app.js se puso como InfiniteLoading -->

        </div>
    </div>
</template>

<script>
    export default {
        
        data() {

            return {

                list: [],
                page: 0,

            }

        },

        methods: {

            infiniteHandler($state) {

                this.page++;
                // https://blog_scrollinfinito-laravel57-vuejs.it/api/posts?page=4
                let url = 'https://blog_scrollinfinito-laravel57-vuejs.it/api/posts?page=' + this.page

                /* Axios */
                axios.get( url ).then( response => {

                    let posts = response.data.data

                    if ( posts.length ) {
                        
                        this.list = this.list.concat( posts )
                        $state.loaded()

                    } else {

                        $state.complete()
                    }

                } );


            }

        }

    }
</script>
