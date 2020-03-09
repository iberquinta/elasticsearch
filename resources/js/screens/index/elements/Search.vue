<template>
    <md-autocomplete
        v-model="selectedProduct"
        :md-options="products"
        @input="search(selectedProduct)"
        md-layout="box"
        md-dense>
        <label>Products</label>
    </md-autocomplete>
</template>

<script>
    export default {
        data: () => ({
            selectedProduct: '',
            products: []
        }),
        methods: {
            search(value) {

                axios.get('/api/products/'+value).then(respounce=>{
                    this.$emit('input', respounce.data);
                })
            }
        }
    }
</script>

<style scoped>

</style>
