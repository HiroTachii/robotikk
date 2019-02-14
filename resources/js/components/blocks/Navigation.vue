<template>
    <nav class="navbar navbar-expand-md r-bg-alt">
        <a class="navbar-brand r-text r-hover-green" v-bind:href="root">
            <img src="img/logo.png" class="d-inline-block align-top" alt="" width="30" height="30">
            Robotikk.org
        </a>
        <button class="navbar-toggler r-border" type="button" data-toggle="collapse" data-target="#navbar-main" aria-controls="navbar-main" aria-expanded="false" aria-label="Toggle navbar">
            <i class="fa fa-align-justify r-text-alt dropdown-toggler"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbar-main">
            <!-- Left nav -->
            <ul class="navbar-nav mr-auto">

            </ul>
            <!-- Right nav -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item r-hover-green">
                    <a target="_blank" href="//github.com/robotikk-org" class="nav-link r-text">GitHub</a>
                </li>
                <li class="nav-item r-hover-green">
                    <a target="_blank" href="//discord.gg/cXNynzh" class="nav-link r-text">Discord</a>
                </li>
            </ul>
        </div>
    </nav>
</template>

<script>
    export default {
        props: ['root'],
    }
</script>

<style>
    .dropdown-toggler {
        font-size: 30px;
    }
</style>
