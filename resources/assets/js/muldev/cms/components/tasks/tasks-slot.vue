<template>
    <div>
    <span class="mu-ico-checkbox-unchecked has-width-fa">
        Task: <slot></slot>
    </span>

        <button v-on:click="show = !show">
            Toggle
        </button>
        <transition name="fade">
            <p v-if="show">hello</p>
        </transition>

        <div class="columns">
            <div class="column">ID</div>
            <div class="column is-four-fifths">Task</div>
            <div class="column">WIP</div>
            <div class="column">Completed</div>
            <div class="column">Action</div>
        </div>
        <div class="columns"
             v-for="(task, index) in filteredTasks">
            <div class="column">{{ index + 1 }}</div>
            <div class="column is-four-fifths"
                 v-html="task.name"></div>
            <div class="column"
                 v-html="task.wip"></div>
            <div class="column"
                 v-html="task.completed"></div>
            <div class="column">
                <router-link class="button is-info" v-bind:to="{name: 'Viewpost', params: {id: post.id}}"><i class="fa fa-eye has-width-fa" aria-hidden="true"></i> Show</router-link>
                <router-link class="button is-warning" v-bind:to="{name: 'Editpost', params: {id: post.id}}"><i class="fa fa-pencil has-width-fa" aria-hidden="true"></i> Edit</router-link>
                <router-link class="button is-danger" v-bind:to="{name: 'Deletepost', params: {id: post.id}}"><i class="fa fa-trash-o has-width-fa" aria-hidden="true"></i> Delete</router-link>
            </div>

        </div>
    </div>
</template>

<script>
    import AnimatedVue from 'animated-vue';
    Vue.use(AnimatedVue);

    export default {
        components: {AnimatedVue},
        data:function(){
            return {tasks: ''};

        },
        created: function() {
            let uri = 'http://vue.dev/tasks/';
            Axios.get(uri).then((response) => {
                this.tasks = response.data;
        });
        },
        computed: {
            filteredPosts: function(){
                if(this.tasks.length) {
                    return this.tasks;
                }
            }
        }
    }

</script>