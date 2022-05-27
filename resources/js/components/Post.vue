<template>
    <div class="col-4">
        <div class="card mb-3" style="width: 18rem;">
            <img :src="post.image" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{post.title}}</h5>
                <p class="card-text">{{post.description}}</p>
            </div>
    </div>
    </div>
</template>

<script>
export default {
    name: 'Post',
    props: ['post']
}
</script>

<style lang="scss" scoped>

</style>
