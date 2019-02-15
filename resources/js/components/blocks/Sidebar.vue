<template>
    <div class="row">
        <nav class="col-md-2 d-none d-md-block sidebar">
            <div class="sidebar-sticky r-bg-third">
                <div v-for="page in pages">
                    <h4 class="r-text-green font-nunuito">{{ page.tag.toUpperCase() }}</h4>
                    <div class="sidebar-section">
                        <ul class="sidebar-list">
                            <li v-for="link in page.children">
                                <a class="sidebar-item r-text-white" v-if="link.type === 'link'"
                                   v-bind:href="link.link">
                                    {{ link.text }}
                                </a>
                                <router-link class="r-text-white" v-else-if="link.type === 'route'"
                                             v-bind:to="{ name: link.route }">{{ link.text }}
                                </router-link>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</template>

<script>
    export default {
        data: () => {
            return {
                pages: {
                    'infopages': {
                        tag: 'infopages',
                        children: [
                            {route: 'us.home', text: 'Home', type: 'route'},
                            {route: 'us.about', text: 'About', type: 'route'}
                        ]
                    },
                    'apis': {
                        tag: 'apis',
                        children: [
                            {route: 'apis.league', text: 'League of Legends', type: 'route'}
                        ]
                    },
                    'platform': {
                        tag: 'platform',
                        children: [
                            {route: 'platform.login', text: 'Login', type: 'route'},
                            {route: 'platform.register', text: 'Register', type: 'route'}
                        ]
                    }
                }
            }
        }
    }
</script>

<style>
    .sidebar-list {
        font-size: 16px;
    }

    .sidebar-section {
        padding-left: 1.2rem;
    }

    .sidebar {
        position: fixed;
        top: 0;
        left: 0;
        padding: 0;
    }

    .sidebar-sticky {
        padding: 1rem;
        position: fixed;
        left: 0;
        top: 56.22px;
        width: calc(100vw - 85vw);
        height: calc(100vh - 56.22px);
        overflow-x: hidden;
        overflow-y: hidden;
    }
</style>
