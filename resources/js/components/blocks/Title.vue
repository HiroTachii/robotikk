<template>
    <div>
        <h6 class="r-text-green">{{ title }}</h6>
        <hr class="r-color-alt">
    </div>
</template>

<script>
    export default {
        props: ['title']
    }
</script>

<style>
    h6 {
        font-size: 24px;
    }
</style>
