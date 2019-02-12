<template>
    <nav class="navbar navbar-expand-md bg-dark-second">
        <a class="navbar-brand theme-main-text" v-bind:href="root">
            <img src="img/logo.png" class="d-inline-block align-top" alt="" width="30" height="30">
            Robotikk.org
        </a>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <!-- Left nav -->
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <router-link :to="{ name: 'home' }" class="nav-link theme-main-text">Home</router-link>
                </li>
            </ul>
            <!-- Right nav -->
        </div>
    </nav>
</template>

<script>
    export default {
        props: ['root'],
    }
</script>
