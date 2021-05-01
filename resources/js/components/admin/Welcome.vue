<template>
    <div>
        <h1>Good Morning, <span class="text-light-blue">{{ user.name }}</span></h1>
        <p class="text-muted">Have a nice day at work</p>
    </div>
</template>

<script>
export default {
    name: "Welcome",
    data() {
        return {
            user: {},
        };
    },
    methods: {
        loadData() {
            this.$http.get("/api/admin")
                .then(({data}) => this.user = data)
                .catch(() => this.$router.push("/admin/login"));
        },
    },
    mounted() {
        this.loadData();
    },
}
</script>

<style scoped>

</style>
