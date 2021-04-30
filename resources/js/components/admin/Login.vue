<template>
    <div class="bg-white mx-auto w-lg-50 mt-8 p-4 shadow-md">
        <img src="/images/logo-black.png" alt="logo" class="logo-md">
        <p class="mt-3 text-muted">Welcome back!</p>
        <form class="mt-4" @submit.prevent="login">
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" name="username" id="username" class="form-control" placeholder="Username"
                       v-model="form.username" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="Password"
                       v-model="form.password" minlength="8" required>
            </div>
            <p class="text-danger font-weight-medium">{{ message.error }}</p>
            <div class="mb-3">
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

</style>
