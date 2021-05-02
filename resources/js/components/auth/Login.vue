<template>
    <div>
        <h4 class="mt-0 mb-4">Sign in to your account</h4>
        <form class="form" @submit.prevent="login">
            <div>
                <label for="nik">NIK</label>
                <input type="text" name="nik" id="nik" v-model="form.nik" placeholder="NIK" minlength="16"
                       maxlength="16"
                       required>
            </div>
            <div>
                <label for="password">Password</label>
                <input type="password" name="password" id="password" v-model="form.password" placeholder="Password"
                       minlength="8" required>
            </div>
            <p>{{ error.form }}</p>
            <div>
                <button type="submit">Sign In</button>
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
                nik: "",
                password: "",
            },
            error: {
                form: ""
            },
        };
    },
    methods: {
        login() {
            this.$http.post("/api/auth/user", this.form)
                .then(({data}) => {
                    localStorage.setItem("token", `Bearer ${data.token}`);
                    localStorage.setItem("role", "user");
                    this.$router.push("/");
                })
                .catch((err) => {
                    this.error.form = err.response.data.message;
                });
        },
    },
}
</script>

<style scoped>

</style>
