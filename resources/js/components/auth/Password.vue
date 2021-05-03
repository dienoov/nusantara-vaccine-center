<template>
    <div><h4 class="mt-0 mb-4">Change your password</h4>
        <form class="form" @submit.prevent="saveData">
            <div>
                <label for="old_password">Old Password</label>
                <input type="password" name="old_password" id="old_password" v-model="form.old_password"
                       placeholder="Old password" minlength="8" required>
            </div>
            <div>
                <label for="password">Password</label>
                <input type="password" name="password" id="password" v-model="form.password" placeholder="Password"
                       minlength="8" required>
            </div>
            <div>
                <label for="password_confirmation">Password Confirmation</label>
                <input type="password" name="password_confirmation" id="password_confirmation"
                       v-model="form.password_confirmation" placeholder="Password confirmation" minlength="8" required>
                <p>{{ error.password }}</p>
            </div>
            <p>{{ error.form }}</p>
            <div>
                <button type="submit">Save</button>
            </div>
        </form>
    </div>
</template>

<script>
export default {
    name: "Password",
    data() {
        return {
            form: {
                old_password: "",
                password: "",
                password_confirmation: "",
            },
            error: {
                password: "",
                form: "",
            },
        };
    },
    methods: {
        saveData() {
            this.$http.post("/api/account/password", this.form)
                .then(() => {
                    this.form.old_password = "";
                    this.form.password = "";
                    this.form.password_confirmation = "";
                })
                .catch((err) => {
                    this.error.password = err.response.data.errors.password[0];
                    this.error.form = err.response.data.message;
                });
        },
    },
}
</script>

<style scoped>

</style>
