<template>
    <div><h4 class="mt-0 mb-4">Select your desired vaccine center</h4>
        <form class="form" @submit.prevent="saveData">
            <div>
                <label for="vac_center_id">Vaccine Center</label>
                <select name="vac_center_id" id="vac_center_id" v-model="form.vac_center_id">
                    <option value="" disabled selected>Select vaccine center</option>
                    <option v-for="vacCenter in vacCenters" :value="vacCenter.id">{{ vacCenter.name }}</option>
                </select>
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
    name: "VacCenter",
    data() {
        return {
            form: {
                vac_center_id: "",
            },
            error: {
                form: "",
            },
            vacCenters: [],
        };
    },
    methods: {
        saveData() {
            this.$http.post("/api/account/vac-center", this.form)
                .then(() => this.$router.push("/account/document"))
                .catch((err) => {
                    this.error.form = err.response.data.message;
                });
        },
        loadVacCenter() {
            this.$http.get("/api/account/vac-center")
                .then(({data}) => this.vacCenters = data.vac_centers);
        },
        loadData() {
            this.$http.get("/api/scope/user")
                .then(({data}) => this.form.vac_center_id = data.vac_center_id)
                .catch(() => {
                    localStorage.removeItem("token");
                    localStorage.removeItem("role");
                    localStorage.removeItem("user");
                    this.$router.push("/");
                })
        },
    },
    mounted() {
        this.loadVacCenter();
        this.loadData();
    }
}
</script>

<style scoped>

</style>
