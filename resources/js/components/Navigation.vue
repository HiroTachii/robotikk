<template>
    <nav class="navbar navbar-expand-md bg-dark-second">
        <a class="navbar-brand theme-main-text" href="/">
            <img src="img/logo.png" class="d-inline-block align-top" alt="" width="30" height="30">
            Robotikk.org
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <!-- Left nav -->
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link theme-main-text" href="/">Home</a>
                </li>
            </ul>
            <!-- Right nav -->
        </div>
    </nav>
</template>

<script>
    export default {
        props: ['name', 'route'],
        data: () => {
            return {
                'csrf': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            }
        }
    }
</script>
