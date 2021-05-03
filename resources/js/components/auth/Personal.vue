<template>
    <div><h4 class="mt-0 mb-4">Personal information</h4>
        <form class="form" @submit.prevent="saveData">
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
            <p>{{ error.form }}</p>
            <div>
                <button type="submit">Save</button>
            </div>
        </form>
    </div>
</template>

<script>
export default {
    name: "Personal",
    data() {
        return {
            form: {
                nik: "",
                name: "",
                dob: "",
                address: "",
                contact: "",
            },
            error: {
                nik: "",
                form: ""
            },
        };
    },
    methods: {
        saveData() {
            this.$http.post("/api/account/update", this.form)
                .then(() => this.loadData)
                .catch((err) => {
                    this.error.nik = err.response.data.errors.nik[0];
                    this.error.form = err.response.data.message;
                });
        },
        loadData() {
            this.$http.get("/api/scope/user")
                .then(({data}) => {
                    this.form.nik = data.nik;
                    this.form.name = data.name;
                    this.form.dob = data.dob;
                    this.form.address = data.address;
                    this.form.contact = data.contact;
                })
                .catch(() => {
                    localStorage.removeItem("token");
                    localStorage.removeItem("role");
                    localStorage.removeItem("user");
                    this.$router.push("/login");
                });
        },
    },
    mounted() {
        this.loadData();
    }
}
</script>

<style scoped>

</style>
