<template>
    <div class="r-content">
        <div class="r-padding-1">
            <main-title title="Login"></main-title>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card r-border-green">
                            <div class="card-header r-bg-third r-text-green">Login</div>
                            <div class="card-body r-bg-main">
                                <form v-on:submit.prevent="submit" method="POST">
                                    <div class="form-group row">
                                        <label class="col-md-4 col-form-label text-md-right r-text" for="email">E-mail
                                            {{ email }}
                                            Address</label>
                                        <div class="col-md-6">
                                            <input type="email" id="email" class="form-control r-bg-main r-border-green"
                                                   v-model="email" required autofocus>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-md-4 col-form-label text-md-right r-text" for="password">Password
                                            {{ password }}</label>
                                        <div class="col-md-6">
                                            <input type="password" id="password"
                                                   class="form-control r-bg-main r-border-green" v-model="password"
                                                   required>
                                        </div>
                                    </div>

                                    <div class="form-group row mb-0">
                                        <div class="col-md-8 offset-md-4">
                                            <button type="submit" class="btn r-text r-border-green r-bg-main">
                                                Login
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data: () => {
            return {
                email: '',
                password: ''
            }
        },
        methods: {
            submit: () => {
                window.axios.post('/api/v1/user/login', {
                    maxRedirects: 0
                })
                    .then((res) => {
                        console.log(res)
                    })
                    .catch((err) => {
                        console.log(err)
                    })
            }
        }
    }
</script>
