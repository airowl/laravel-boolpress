<template>
    <main>
        <div class="container">
            <div class="row">
                <Post v-for="(post, index) in posts" :key="index" :post="post"/>
            </div>
        </div>
    </main>
</template>

<script>
import Post from './Post.vue';

export default {
    name: 'Main',
    components: {
        Post
    },
    data: function(){
        return {
            posts: []
        }
    },
    created() {
        this.getPosts();
    },
    methods: {
        getPosts(){
            axios.get('http://localhost:8000/api/posts')
            .then( (response) => {
                console.log(response.data.data);
                this.posts = response.data.data;
            });
        }
    }
}
</script>

<style lang="scss" scoped>

</style>
