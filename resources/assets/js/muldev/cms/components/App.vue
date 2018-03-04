<template>
    <div class="container">
            <router-link class="btn btn-xs btn-primary" v-bind:to="{path: '/cms/add-post'}">
                <span class="glyphicon glyphicon-plus"></span>
                Add new Post
            </router-link>
            </br></br>

        app.vue
        <router-link to="/">Home</router-link>

        <transition name="fade">
            <router-view></router-view>
        </transition>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }

</script>