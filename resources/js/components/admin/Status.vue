<template>
    <div>
        <div class="d-flex align-items-center justify-content-between mb-4">
            <h1 class="m-0">Status</h1>
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
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                <tr v-for="status in statuses">
                    <td>{{ status.status }}</td>
                    <td>
                        <button class="btn" @click="updateData(status)">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" height="20"
                                 fill="currentColor">
                                <path
                                    d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"/>
                            </svg>
                        </button>
                        <button class="btn" @click="deleteData(status.id)">
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
                <h2 class="m-0">{{ action }} Status</h2>
                <button class="btn close" @click="toggleModal">&times;</button>
            </div>
            <div class="body">
                <form class="form-admin" @submit.prevent="saveData">
                    <div>
                        <label for="status">Status</label>
                        <input type="text" name="status" id="status" v-model="form.status"
                               placeholder="Status" required>
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
    name: "Status",
    data() {
        return {
            form: {
                id: 0,
                status: "",
                detail: "",
                contact: "",
            },
            statuses: [],
            modalActive: false,
            action: "",
        };
    },
    methods: {
        loadData() {
            this.$http.get("/api/status")
                .then(({data}) => this.statuses = data.statuses);
        },
        toggleModal() {
            this.modalActive = !this.modalActive;
        },
        createData() {
            this.action = "New";
            this.form = {
                id: 0,
                status: "",
            };
            this.toggleModal();
        },
        updateData(status) {
            this.action = "Edit";
            this.form = {
                id: status.id,
                status: status.status,
            };
            this.toggleModal();
        },
        saveData() {
            const req = this.form.id === 0 ?
                this.$http.post("/api/status", this.form) :
                this.$http.post(`/api/status/${this.form.id}`, this.form);
            req.then(() => {
                this.loadData();
                this.toggleModal();
            });
        },
        deleteData(id) {
            this.$http.delete(`/api/status/${id}`)
                .then(() => this.loadData());
        },
    },
    mounted() {
        this.loadData();
    },
}
</script>

<style scoped>

</style>
