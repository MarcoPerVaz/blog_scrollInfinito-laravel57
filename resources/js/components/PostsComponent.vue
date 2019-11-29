<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card mb-3 mt-3" v-for="item in list" :key="item.id">
                    <a class="card-header" v-bind:href="item.slug" v-text="item.title"></a>

                    <div class="card-body">
                        <p>ID: {{ item.id }}</p>
                        <p class="card-text" v-text="item.body"></p>
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
