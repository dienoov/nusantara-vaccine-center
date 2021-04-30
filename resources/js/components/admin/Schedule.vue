<template>
    <div>
        <div class="d-flex align-items-center justify-content-between mb-4">
            <h1 class="m-0">Schedule</h1>
            <button class="btn btn-pill btn-blue btn-center btn-add d-flex align-items-center" @click="createData">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" height="32"
                     fill="currentColor">
                    <path fill-rule="evenodd"
                          d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                          clip-rule="evenodd"/>
                </svg>
                <span>New</span>
            </button>
        </div>
        <div class="table-responsive">
            <table class="table">
                <thead>
                <tr>
                    <th>Vaccine Center</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                <tr v-for="schedule in schedules">
                    <td>{{ schedule.vac_center.name }}</td>
                    <td>{{ schedule.date }}</td>
                    <td>{{ schedule.time }}</td>
                    <td>
                        <button class="btn" @click="updateData(schedule)">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" height="20"
                                 fill="currentColor">
                                <path
                                    d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"/>
                            </svg>
                        </button>
                        <button class="btn" @click="deleteData(schedule.id)">
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
                <h2 class="m-0">{{ action }} Schedule</h2>
                <button class="btn close" @click="toggleModal">&times;</button>
            </div>
            <div class="body">
                <form class="form-admin" @submit.prevent="saveData">
                    <div>
                        <label for="vac_center_id">Vaccine Center</label>
                        <select name="vac_center_id" id="vac_center_id" v-model="form.vac_center_id">
                            <option value="" disabled selected>Select vaccine center</option>
                            <option v-for="vacCenter in vacCenters" :value="vacCenter.id">{{ vacCenter.name }}</option>
                        </select>
                    </div>
                    <div>
                        <label for="date">Date</label>
                        <input type="date" name="date" id="date" v-model="form.date" placeholder="Schedule date"
                               required>
                    </div>
                    <div>
                        <label for="time">Time</label>
                        <input type="time" name="time" id="time" v-model="form.time" placeholder="Schedule time"
                               required>
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
    name: "Schedule",
    data() {
        return {
            form: {
                id: 0,
                vac_center_id: "",
                date: "",
                time: "",
                contact: "",
            },
            schedules: [],
            modalActive: false,
            action: "",
            vacCenter: [],
        };
    },
    methods: {
        loadData() {
            this.$http.get("/api/schedule")
                .then(({data}) => this.schedules = data.schedules);
        },
        toggleModal() {
            this.modalActive = !this.modalActive;
        },
        createData() {
            this.action = "New";
            this.form = {
                id: 0,
                vac_center_id: "",
                date: "",
                time: "",
                contact: "",
            };
            this.toggleModal();
        },
        updateData(schedule) {
            this.action = "Edit";
            this.form = {
                id: schedule.id,
                vac_center_id: schedule.vac_center_id,
                date: schedule.date,
                time: schedule.time,
                contact: schedule.contact,
            };
            this.toggleModal();
        },
        saveData() {
            const req = this.form.id === 0 ?
                this.$http.post("/api/schedule", this.form) :
                this.$http.post(`/api/schedule/${this.form.id}`, this.form);
            req.then(() => {
                this.loadData();
                this.toggleModal();
            });
        },
        deleteData(id) {
            this.$http.delete(`/api/schedule/${id}`)
                .then(() => this.loadData());
        },
        loadVacCenter() {
            this.$http.get("/api/vac-center")
                .then(({data}) => this.vacCenters = data.vac_centers);
        },
    },
    mounted() {
        this.loadData();
        this.loadVacCenter();
    },
}
</script>

<style scoped>

</style>
