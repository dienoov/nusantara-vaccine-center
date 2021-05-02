<template>
    <div>
        <div class="d-flex align-items-center justify-content-between mb-4">
            <h1 class="m-0">User</h1>
        </div>
        <div class="table-responsive">
            <table class="table">
                <thead>
                <tr>
                    <th>NIK</th>
                    <th>Name</th>
                    <th>Contact</th>
                    <th>Vaccine Center</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                <tr v-for="user in users">
                    <td>{{ user.nik }}</td>
                    <td>{{ user.name }}</td>
                    <td>{{ user.contact }}</td>
                    <td>{{ user.vac_center.name }}</td>
                    <td>{{ user.user_vaccine.vac_status.status }}</td>
                    <td>
                        <button class="btn" @click="updateData(user)">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" height="20"
                                 fill="currentColor">
                                <path
                                    d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"/>
                            </svg>
                        </button>
                        <button class="btn" @click="deleteData(user.id)">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" height="20"
                                 fill="currentColor">
                                <path fill-rule="evenodd"
                                      d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                      clip-rule="evenodd"/>
                            </svg>
                        </button>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="modal-admin" :class="{active: modalActive}">
            <div class="title">
                <h2 class="m-0">{{ action }} User</h2>
                <button class="btn close" @click="toggleModal">&times;</button>
            </div>
            <div class="body">
                <form class="form-admin" @submit.prevent="saveData">
                    <div>
                        <label for="nik">NIK</label>
                        <input type="text" name="nik" id="nik" v-model="form.nik" placeholder="NIK" required>
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
                        <input type="text" name="address" id="address" v-model="form.address" placeholder="Address"
                               required>
                    </div>
                    <div>
                        <label for="contact">Contact</label>
                        <input type="text" name="contact" id="contact" v-model="form.contact" placeholder="Contact"
                               required>
                    </div>
                    <div>
                        <label for="vac_center_id">Vaccine Center</label>
                        <select name="vac_center_id" id="vac_center_id" v-model="form.vac_center_id">
                            <option value="" disabled selected>Select vaccine center</option>
                            <option v-for="vacCenter in vacCenters" :value="vacCenter.id">{{ vacCenter.name }}</option>
                        </select>
                    </div>
                    <div>
                        <label for="vaccine_id">Vaccine</label>
                        <select name="vaccine_id" id="vaccine_id" v-model="form.vaccine_id">
                            <option value="" disabled selected>Select vaccine</option>
                            <option v-for="vaccine in vaccines" :value="vaccine.id">{{ vaccine.brand }}</option>
                        </select>
                    </div>
                    <div>
                        <label for="vac_status_id">Status</label>
                        <select name="vac_status_id" id="vac_status_id" v-model="form.vac_status_id">
                            <option value="" disabled selected>Select status</option>
                            <option v-for="status in statuses" :value="status.id">{{ status.status }}</option>
                        </select>
                    </div>
                    <div>
                        <button class="btn btn-blue btn-rounded ml-auto d-block">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "User",
    data() {
        return {
            form: {
                id: 0,
                nik: "",
                name: "",
                dob: "",
                address: "",
                contact: "",
                vac_center_id: "",
                vaccine_id: "",
                vac_status_id: "",
            },
            users: [],
            modalActive: false,
            action: "",
            vacCenters: [],
            vaccines: [],
            statuses: [],
        };
    },
    methods: {
        loadData() {
            this.$http.get("/api/user")
                .then(({data}) => this.users = data.users);
        },
        toggleModal() {
            this.modalActive = !this.modalActive;
        },
        updateData(user) {
            this.action = "Edit";
            this.form = {
                id: user.id,
                nik: user.nik,
                name: user.name,
                dob: user.dob,
                address: user.address,
                contact: user.contact,
                vac_center_id: user.vac_center_id ?? "",
                vaccine_id: user.user_vaccine.vaccine_id ?? "",
                vac_status_id: user.user_vaccine.vac_status_id ?? "",
            };
            this.toggleModal();
        },
        saveData() {
            const req = this.form.id === 0 ?
                this.$http.post("/api/user", this.form) :
                this.$http.post(`/api/user/${this.form.id}`, this.form);
            req.then(() => {
                this.loadData();
                this.toggleModal();
            });
        },
        deleteData(id) {
            this.$http.delete(`/api/user/${id}`)
                .then(() => this.loadData());
        },
        loadVacCenter() {
            this.$http.get("/api/vac-center")
                .then(({data}) => this.vacCenters = data.vac_centers);
        },
        loadVaccine() {
            this.$http.get("/api/vaccine")
                .then(({data}) => this.vaccines = data.vaccines);
        },
        loadStatus() {
            this.$http.get("/api/status")
                .then(({data}) => this.statuses = data.statuses);
        },
    },
    mounted() {
        this.loadData();
        this.loadVacCenter();
        this.loadVaccine();
        this.loadStatus();
    },
}
</script>

<style scoped>

</style>
