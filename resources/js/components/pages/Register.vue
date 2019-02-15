<template>
    <div class="r-content">
        <div class="r-padding-1">
            <main-title title="Register"></main-title>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card r-border-green">
                            <div class="card-header r-bg-third r-text-green">Register</div>
                            <div class="card-body r-bg-main">
                                <form v-on:submit.prevent="submit" method="POST">
                                    <div class="form-group row">
                                        <label class="col-md-4 col-form-label text-md-right r-text" for="name">Username</label>
                                        <div class="col-md-6">
                                            <input type="text" id="name" class="form-control r-bg-main r-border-green"
                                                   v-model="name" required autofocus>
                                        </div>
                                    </div>

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
                                        <label class="col-md-4 col-form-label text-md-right r-text" for="password">Password</label>
                                        <div class="col-md-6">
                                            <input type="password" id="password"
                                                   class="form-control r-bg-main r-border-green" v-model="password"
                                                   required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-md-4 col-form-label text-md-right r-text" for="password_confirm">Confirm Password</label>
                                        <div class="col-md-6">
                                            <input type="password" id="password_confirm"
                                                   class="form-control r-bg-main r-border-green" v-model="password_confirm"
                                                   required>
                                        </div>
                                    </div>

                                    <div class="form-group row mb-0">
                                        <div class="col-md-8 offset-md-4">
                                            <button type="submit" class="btn r-text r-border-green r-bg-main">
                                                Register
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
                password: '',
                password_confirm: '',
                name: ''
            }
        },
        methods: {
            submit: () => {
                window.axios.post('/api/v1/user/register', {
                    data: {
                        email,
                        password,
                        password_confirm,
                        name
                    },
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
