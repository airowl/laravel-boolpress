<template>
    <main>
        <transition name="moveInUp">
            <router-view/>
        </transition>
    </main>
</template>

<script>


export default {
    name: 'Main',
}
</script>

<style lang="scss" scoped>
    main{
        .moveInUp-enter-active{
        animation: fadeIn 1s ease-in-out;
        }

        @keyframes fadeIn{
        0%{
            opacity: 0;
        }
        50%{
            opacity: 0.5;
        }
        100%{
            opacity: 1;
        }
        }
    }
</style>
