<template>
    <div class="index-page container">
        <element-board :products="products"/>
    </div>
</template>

<script>
    import ElementBoard from './elements/Board';

    export default {
        components:{
            ElementBoard
        },
        data:()=>({
                products:[]
        }),
        beforeRouteEnter(to,from,next){
            axios.get('/api/products').then(responce =>next(vm => vm.products=responce.data))
        },
    }
</script>

