<template id="task-delete">
    <div>
        <h3>Delete task {{ task.title  }}</h3>
        <form v-on:submit.prevent = "deleteTask">
            <p>The action cannot be undone</p>
            <button class="btn btn-xs btn-danger" type="submit" name="button">Delete</button>
            <router-link class="btn btn-xs btn-primary" v-bind:to="'/'">Back</router-link>
        </form>
    </div>
</template>

<script>
    export default {
        data: function () {
            return {task: {body: '', title: ''}}
        },
        created: function(){
            let uri = 'http://vue.dev/tasks/'+this.$route.params.id+'/edit';
            Axios.get(uri).then((response) => {
                this.task = response.data;
        });
        },
        methods: {
            deleteTask: function() {
                let uri = 'http://vue.dev/tasks/'+this.$route.params.id;
                Axios.delete(uri, this.task).then((response) => {
                    this.$router.push({name: 'task-list'})
            })
            }
        }
    }
</script>