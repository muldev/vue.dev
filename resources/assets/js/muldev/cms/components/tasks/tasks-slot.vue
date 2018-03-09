<template>
    <div>
    <span class="mu-ico-checkbox-unchecked has-width-fa">
        Task: <slot></slot>
    </span>

    </div>
</template>

<script>
    import AnimatedVue from 'animated-vue';
    Vue.use(AnimatedVue);

    export default {
        components: {AnimatedVue},
    }

</script>