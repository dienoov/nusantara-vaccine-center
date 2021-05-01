<template>
    <div class="bg-white mx-auto w-lg-50 mt-8 login">
        <img src="/svg/logo-black.svg" alt="logo" class="logo-md">
        <p class="mt-3 text-muted">Welcome back!</p>
        <form class="form-admin mt-4" @submit.prevent="login">
            <div>
                <label for="username">Username</label>
                <input type="text" name="username" id="username" placeholder="Username"
                       v-model="form.username" required>
            </div>
            <div>
                <label for="password">Password</label>
                <input type="password" name="password" id="password" placeholder="Password"
                       v-model="form.password" minlength="8" required>
            </div>
            <p class="text-danger font-weight-medium">{{ message.error }}</p>
            <div>
                <button class="btn btn-blue btn-rounded ml-auto d-block">Login</button>
            </div>
        </form>
    </div>
</template>

<script>
export default {
    name: "Login",
    data() {
        return {
            form: {
                username: "",
                password: "",
            },
            message: {
                error: "",
            },
        };
    },
    methods: {
        login() {
            this.$http.post("/api/auth/admin", this.form)
                .then(({data}) => {
                    localStorage.setItem("token", `Bearer ${data.token}`);
                    localStorage.setItem("role", "admin");
                    this.$router.push("/admin");
                })
                .catch((err) => {
                    this.message.error = err.response.data.message;
                });
        }
    }
}
</script>

<style scoped>
.login {
    box-shadow: 0 0 2.5rem .5rem rgba(0, 0, 0, .01);
    border-radius: 2rem;
    padding: 2rem;
}
</style>
