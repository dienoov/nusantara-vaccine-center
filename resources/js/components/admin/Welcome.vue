<template>
    <div>
        <h1>Good {{ time }}, <span class="text-light-blue">{{ user.name }}</span></h1>
        <p class="text-muted">Have a nice day at work</p>
    </div>
</template>

<script>
export default {
    name: "Welcome",
    data() {
        return {
            user: {},
            time: "",
        };
    },
    methods: {
        loadData() {
            this.$http.get("/api/admin")
                .then(({data}) => this.user = data)
                .catch(() => this.$router.push("/admin/login"));
        },
        loadTime() {
            const hours = new Date().getHours();

            if (hours < 12)
                this.time = "Morning";

            else if (hours < 18)
                this.time = "Afternoon";

            else
                this.time = "Evening";
        },
    },
    mounted() {
        this.loadData();
        this.loadTime();
    },
}
</script>

<style scoped>

</style>
