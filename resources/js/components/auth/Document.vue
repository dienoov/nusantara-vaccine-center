<template>
    <div><h4 class="mt-0 mb-4">Download or print your vaccination document</h4>
        <div class="form">
            <div>
                <button type="button" @click.prevent="registration">Registration Proof</button>
            </div>
            <div>
                <button type="button" @click.prevent="vaccination">Vaccination Card</button>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "Document",
    methods: {
        registration() {
            const user = JSON.parse(localStorage.getItem("user"));
            window.open(`/api/account/registration/${user.name.toLowerCase().replaceAll(" ", "-")}/${user.id}`);
        },
        vaccination() {
            const user = JSON.parse(localStorage.getItem("user"));
            window.open(`/api/account/vaccination/${user.name.toLowerCase().replaceAll(" ", "-")}/${user.id}`);
        }
    },
}
</script>

<style scoped>

</style>
