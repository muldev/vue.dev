<template>
    <div>
        <div>
            <router-link :to="{name: 'createTask'}" class="btn btn-success">Add Task</router-link>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading">Tasks list</div>
            <div class="panel-body">
                <table class="table is-hoverable is-striped">
                    <thead>
                    <tr class="list-users">
                        <th id="task-name"><abbr title="Name">Name</abbr></th>
                        <th id="task-description"><abbr title="Description">Description</abbr></th>
                        <th id="task-Completed"><abbr title="Completed">Completed</abbr></th>
                        <th id="task-wip"><abbr title="WIP">WIP</abbr></th>
                        <th>Action&nbsp;</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th><abbr title="Name">Name</abbr></th>
                        <th><abbr title="Description">Description</abbr></th>
                        <th><abbr title="Completed">Completed</abbr></th>
                        <th><abbr title="WIP">WIP</abbr></th>
                        <th>Action</th>
                    </tr>
                    </tfoot>
                    <tbody>
                    <tr v-for="task in tasks">
                        <th>{{ task.name }}</th>
                        <td>{{ task.description }}</td>
                        <td>{{ task.completed }}</td>
                        <td>{{ task.wip }}</td>
                        <td>
                            <router-link class="button is-info" v-bind:to="{name: 'Viewtask', params: {id: task.id}}"><i class="fa fa-eye has-width-fa" aria-hidden="true"></i> Show</router-link>
                            <router-link class="button is-warning" v-bind:to="{name: 'Edittask', params: {id: task.id}}"><i class="fa fa-pencil has-width-fa" aria-hidden="true"></i> Edit</router-link>
                            <router-link class="button is-danger" v-bind:to="{name: 'Deletetask', params: {id: task.id}}"><i class="fa fa-trash-o has-width-fa" aria-hidden="true"></i> Delete</router-link>
                        </td>
                    </tr>

                    </tbody>
                </table>
                <!--<paginate-->
                        <!--:page-count="pageCount"-->
                        <!--:click-handler="fetch"-->
                        <!--:prev-text="'Previous'"-->
                        <!--:next-text="'Next'"-->
                        <!--:container-class="'pagination'">-->
                <!--</paginate>-->
                <pages>
                    total: :page-count,
                    per_page = 5,
                    from: 1,
                    to: 0,
                    current_page: 1
                </pages>

            </div>
        </div>
    </div>

</template>

<script>
    export default {
        name: "task-list",
        data() {
            return {
                tasks: [],
                pageCount: 1,
                endpoint: 'api/tasks?page='
            };
        },

        created() {
            this.fetch();
        },

        methods: {
            fetch(page = 1) {
                axios.get(this.endpoint + page)
                    .then(({data}) => {
                        this.tasks = data.data;
                        this.pageCount = data.meta.last_page;
                    });
            },
            removeTask(id) {
                this.tasks = _.remove(this.tasks, function (task) {
                    return task.id !== id;
                });
            }
        }
    }
</script>

<style scoped>

</style>