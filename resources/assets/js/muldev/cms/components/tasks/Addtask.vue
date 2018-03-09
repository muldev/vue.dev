<template id="add-task">
    <div>
        <h3>Add new Post</h3>
        <form v-on:submit.prevent = "createTask">
            <div class="form-group">
                <label for="add-title">Title</label>
                <input id="add-title" v-model="task.title" class="form-control" required />
            </div>
            <div class="form-group">
                <label for="add-name">Body</label>
                <textarea class="form-control" rows="10" v-model="task.name"></textarea>
            </div>
            <button type="submit" class="btn btn-xs btn-primary">Create Task</button>
            <router-link class="btn btn-xs btn-warning" v-bind:to="'/'">Cancel</router-link>
        </form>
    </div>
</template>

<script>
    export default {
        data: function () {
            return {task: {title: '', name: ''}}
        },
        methods: {
            createTask: function() {
                let uri = 'http://vue.dev/tasks/';
                Axios.task(uri, this.task).then((response) => {
                    this.$router.push({name: 'task-list'})
            })
            }
        }
    }
</script>