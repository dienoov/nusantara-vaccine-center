<template>
    <div class="bg-light my-3 p-4 w-lg-40">
        <h4 class="mt-0 mb-4">Create your account</h4>
        <form class="form" @submit.prevent="register">
            <div>
                <label for="nik">NIK</label>
                <input type="text" name="nik" id="nik" v-model="form.nik" placeholder="NIK" minlength="16"
                       maxlength="16" required>
                <p>{{ error.nik }}</p>
            </div>
            <div>
                <label for="name">Name</label>
                <input type="text" name="name" id="name" v-model="form.name" placeholder="Name" required>
            </div>
            <div>
                <label for="dob">Date of Birth</label>
                <input type="date" name="dob" id="dob" v-model="form.dob" placeholder="Date of birth" required>
            </div>
            <div>
                <label for="address">Address</label>
                <input type="text" name="address" id="address" v-model="form.address" placeholder="Address" required>
            </div>
            <div>
                <label for="contact">Contact</label>
                <input type="text" name="contact" id="contact" v-model="form.contact" placeholder="Contact" required>
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
                <button type="submit">Register</button>
            </div>
        </form>
    </div>
</template>

<script>
export default {
    name: "Register",
    data() {
        return {
            form: {
                nik: "",
                name: "",
                dob: "",
                address: "",
                contact: "",
                password: "",
                password_confirmation: "",
            },
            error: {
                password: "",
                nik: "",
                form: "",
            },
        };
    },
    methods: {
        register() {
            this.$http.post("/api/auth/register", this.form)
                .then(({data}) => {
                    localStorage.setItem("token", `Bearer ${data.token}`);
                    localStorage.setItem("role", "user");
                    localStorage.setItem("user", JSON.stringify(data.user));
                    this.$router.push("/");
                })
                .catch((err) => {
                    this.error.password = err.response.data.errors.password[0];
                    this.error.nik = err.response.data.errors.nik[0];
                    this.error.form = err.response.data.message;
                });
        }
    }
}
</script>

<style scoped>

</style>
