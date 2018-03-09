<template id="task">
    <div>
        <h3>{{ task.name }}</h3>
        <strong>Description : </strong>
        <div>
            {{ task.description }}
        </div>
        </br>
        <span class="glyphicon glyphicon-arrow-left"></span>
        <router-link v-bind:to="'/'">Back to task list</router-link>
    </div>
</template>

<script>
    export default {
        data: function () {
            return {task: {name: '', description: ''}}
        },
        created: function(){
            let uri = 'http://vue.dev/tasks/'+this.$route.params.id;
            Axios.get(uri).then((response) => {
                this.task = response.data;
        });
        }
    }
</script>