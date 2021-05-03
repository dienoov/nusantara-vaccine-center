<template>
    <div class="auth d-flex align-items-center justify-content-center">
        <nav class="bg-light fixed-top shadow-md d-flex justify-content-between align-items-center p-4">
            <router-link to="/">
                <img src="/svg/logo-black.svg" alt="logo" height="24">
            </router-link>
            <div v-if="action === '/login'">
                <span>Don't have an account?</span>
                <router-link to="/register" class="text-light-blue px-2">
                    Register
                </router-link>
            </div>
            <div v-else-if="action === '/register'">
                <span>Already have an account?</span>
                <router-link to="/login" class="text-light-blue px-2">
                    Sign In
                </router-link>
            </div>
        </nav>
        <router-view></router-view>
    </div>
</template>

<script>
export default {
    name: "Layout",
    data() {
        return {
            action: this.$router.currentRoute.path,
        };
    },
    watch: {
        $route() {
            this.action = this.$router.currentRoute.path;
        },
    },
}
</script>

<style scoped>
.auth {
    min-height: 100vh;
    padding-top: 12vh;
}

.auth {
    background-image: linear-gradient(to right, rgba(11, 49, 174, .85), rgba(11, 49, 174, .85)), url("/images/AlGBeo.jpg");
}

nav {
    height: 8vh;
    width: 100%;
}

@media screen and (max-width: 576px) {
    nav img {
        height: 16px;
    }

    nav div span {
        display: none;
    }
}
</style>
