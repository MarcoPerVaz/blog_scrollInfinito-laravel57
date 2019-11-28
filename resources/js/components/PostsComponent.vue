<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card mb-3 mt-3" v-for="item in list" :key="item.id">
                    <a class="card-header" v-bind:href="item.slug" v-text="item.title"></a>

                    <div class="card-body">
                        <p class="card-text" v-text="item.body"></p>
                    </div>
                </div>

                <!-- Componente vue-infinite-loading -->
                <infinite-loading @infinite="infiniteHandler"></infinite-loading>
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

                // Este método se va a conectar al servidor

            }

        }

    }
</script>
