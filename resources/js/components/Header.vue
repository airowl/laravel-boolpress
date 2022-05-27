<template>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">MANGA</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <ul class="navbar-nav">
                    <li v-for="(link, index) in navLinks" :key="index">
                        <router-link class="nav-link" :to="{ name: link.routeName }">{{ link.label }}</router-link>
                    </li>
                </ul>
                </div>
            </div>
        </nav>
    </header>
</template>

<script>
export default {
    name: 'Header',
    data: function(){
        return{
            navLinks: [
                {
                    label: 'Home',
                    routeName: 'home'
                },
                {
                    label: 'Posts',
                    routeName: 'posts'
                }
            ]
        }
    }
}
</script>

<style>

</style>
