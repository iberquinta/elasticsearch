<template>
    <div>
        <div class="mt-2">
            <element-search v-model="productsList"/>
        </div>
        <div class="container card-expansion">
            <md-card v-for="product in productsList" :key="product.id">
                <md-card-header>
                    <div class="md-title">{{product.title}}</div>
                </md-card-header>

                <md-card-content>
                    {{product.description}}
                </md-card-content>
            </md-card>
        </div>


    </div>
</template>

<script>
    import ElementSearch from './Search';

    export default {
        components: {
            ElementSearch
        },
        props: {
            products: {
                type: Array,
                require: true
            },
        },
        data: () => ({
            productsList: []
        }),
        watch: {
            products(val) {
                this.productsList = val;
            }
        }

    }
</script>


