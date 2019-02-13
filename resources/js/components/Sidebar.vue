<template>
    <div class="row">
        <nav class="col-md-2 d-none d-md-block sidebar">
            <div class="sidebar-sticky">
                Some item
            </div>
        </nav>
    </div>
</template>

<script>
    export default {

    }
</script>

<style>
    .sidebar {
        position: fixed;
        top: 0;
        left: 0;
        padding: 0;
    }

    .sidebar-sticky {
        position: fixed;
        left: 0;
        top: 48px;
        height: calc(100vh - 48px);
        padding-top: 1rem;
        overflow-x: hidden;
        overflow-y: hidden;
    }
</style>
