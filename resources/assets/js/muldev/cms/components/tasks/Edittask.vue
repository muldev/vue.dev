<template id="post-edit">
    <div>
        <h3>Add new Task</h3>
        <form v-on:submit.prevent = "updateTask">
            <div class="form-group">
                <label for="edit-title">Name</label>
                <input id="edit-title" v-model="task.title" class="form-control" required />
            </div>
            <div class="form-group">
                <label for="edit-name">Body</label>
                <textarea class="form-control" rows="10" v-model="task.name"></textarea>
            </div>
            <button type="submit" class="btn btn-xs btn-primary">Create Task</button>
            <router-link class="btn btn-xs btn-warning" v-bind:to="'/'">Cancel</router-link>
        </form>
    </div>
</template>

<script>
    export default{
        data: function () {
            return {task: {title: '', name: ''}}
        },
        created: function(){
            let uri = 'http://vue.dev/tasks/'+this.$route.params.id+'/edit';
            Axios.get(uri).then((response) => {
                this.task = response.data;
        });
        },
        methods: {
            updateTask: function() {
                let uri = 'http://vue.dev/tasks/'+this.$route.params.id;
                Axios.patch(uri, this.task).then((response) => {
                    this.$router.push({name: 'task-list'})
            })
            }
        }
    }
</script>