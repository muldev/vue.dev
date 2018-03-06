<template id="post-list">

    <div class="row has-space-m-top-20">
        <animated-flip>
            <div class="pull-right">

            <router-link class="button is-primary" v-bind:to="{path: '/cms/add-post'}">
                <span class="glyphicon glyphicon-plus"></span>
                Add new Post
            </router-link>

            </div>
        </animated-flip>
        <table class="table is-hoverable is-striped is-bordered">
            <thead>
            <tr id="post-header">
                <th>#</th>
                <th>Post Title</th>
                <th>Post Body</th>
                <th>Created At</th>
                <th>Updated At</th>
                <th class="col-md-2">Actions</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="(post, index) in filteredPosts">
                <td>{{ index + 1 }}</td>
                <td>{{ post.title }}</td>
                <td v-html="post.body"></td>
                <td>{{ post.created_at }}</td>
                <td>{{ post.updated_at }}</td>
                <td>
                    <router-link class="button is-info" v-bind:to="{name: 'Viewpost', params: {id: post.id}}"><i class="fa fa-eye has-width-fa" aria-hidden="true"></i> Show</router-link>
                    <router-link class="button is-warning" v-bind:to="{name: 'Editpost', params: {id: post.id}}"><i class="fa fa-pencil has-width-fa" aria-hidden="true"></i> Edit</router-link>
                    <router-link class="button is-danger" v-bind:to="{name: 'Deletepost', params: {id: post.id}}"><i class="fa fa-trash-o has-width-fa" aria-hidden="true"></i> Delete</router-link>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
    import AnimatedVue from 'animated-vue';
    Vue.use(AnimatedVue);
    export default {
        components: {AnimatedVue},
        data:function(){
            return {posts: ''};
        },
        created: function() {
            let uri = 'http://vue.dev/posts/';
            Axios.get(uri).then((response) => {
                this.posts = response.data;
        });
        },
        computed: {
            filteredPosts: function(){
                if(this.posts.length) {
                    return this.posts;
                }
            }
        }
    }
</script>