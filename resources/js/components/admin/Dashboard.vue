<template>
    <div>
        <div class="sidebar" :class="{active: sidebarActive}">
            <img src="/svg/logo-black.svg" alt="logo">
            <ul>
                <li>
                    <router-link to="/admin">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                        </svg>
                        <h4>Dashboard</h4>
                    </router-link>
                </li>
                <li>
                    <router-link to="/admin/news">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"/>
                        </svg>
                        <h4>News</h4>
                    </router-link>
                </li>
                <li>
                    <router-link to="/admin/vac-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                        </svg>
                        <h4>Vaccine Center</h4>
                    </router-link>
                </li>
                <li>
                    <router-link to="/admin/vaccine">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 512.002 512.002">
                            <path d="M505.201,64.484L446.947,6.229c-8.304-8.304-21.771-8.306-30.077,0c-8.306,8.304-8.306,21.771,0,30.077l14.659,14.659
			            l-75.01,75.012l-46.643-46.643c-8.304-8.306-21.771-8.306-30.077,0c-8.306,8.306-8.306,21.771,0,30.077l8.95,8.95L65.055,342.051
			            c-3.557,3.557-5.738,8.259-6.156,13.271l-6.207,74.48l-45.89,45.892c-8.306,8.304-8.306,21.771,0,30.077
			            c4.153,4.153,9.596,6.23,15.038,6.23c5.442,0,10.886-2.077,15.038-6.23l45.89-45.89l74.48-6.207
			            c5.012-0.418,9.715-2.599,13.271-6.156l223.693-223.693l8.948,8.948c4.153,4.153,9.596,6.23,15.038,6.23s10.886-2.076,15.038-6.23
			            c8.306-8.306,8.306-21.771,0-30.077l-46.643-46.643l75.01-75.01L475.12,94.56c4.153,4.153,9.596,6.23,15.038,6.23
			            s10.886-2.077,15.038-6.23C513.507,86.256,513.507,72.79,505.201,64.484z M145.953,411.931l-49.429,4.119l4.119-49.429
			            l158.786-158.787l45.312,45.312L145.953,411.931z M334.817,223.068l-45.312-45.312l29.32-29.32l45.312,45.312L334.817,223.068z"/>
                        </svg>
                        <h4>Vaccine</h4>
                    </router-link>
                </li>
                <li>
                    <router-link to="/admin/stock">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4"/>
                        </svg>
                        <h4>Vaccine Stock</h4>
                    </router-link>
                </li>
                <li>
                    <router-link to="/admin/schedule">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        <h4>Schedule</h4>
                    </router-link>
                </li>
                <li>
                    <router-link to="/admin/status">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        <h4>Status</h4>
                    </router-link>
                </li>
                <li>
                    <router-link to="user">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                        </svg>
                        <h4>User</h4>
                    </router-link>
                </li>
                <li>
                    <a href="#" @click.prevent="logout">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"/>
                        </svg>
                        <h4>Logout</h4>
                    </a>
                </li>
            </ul>
        </div>
        <div class="topbar">
            <div class="sidebar-toggler" :class="{active: sidebarActive}" @click="toggleSidebar">
                <div class="hamburger-arrow"></div>
            </div>
            <div class="user">
                <span>{{ user.username }}</span>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" height="32" fill="currentColor">
                    <path fill-rule="evenodd"
                          d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z"
                          clip-rule="evenodd"/>
                </svg>
            </div>
        </div>
        <div class="content">
            <router-view></router-view>
        </div>
    </div>
</template>

<script>

export default {
    name: "Dashboard",
    data() {
        return {
            sidebarActive: true,
            user: {},
        };
    },
    methods: {
        toggleSidebar() {
            this.sidebarActive = !this.sidebarActive;
            localStorage.setItem("sidebar_active", this.sidebarActive ? "true" : "false");
        },
        loadData() {
            this.$http.get("/api/scope/admin")
                .then(({data}) => this.user = data)
                .catch(() => this.$router.push("/admin/login"));
        },
        logout() {
            localStorage.removeItem("token");
            localStorage.removeItem("role");
            localStorage.removeItem("user");
            this.$router.push("/");
        }
    },
    mounted() {
        this.sidebarActive = localStorage.getItem("sidebar_active") === "true";
        this.loadData();
    },
}
</script>

<style scoped>
.sidebar {
    position: fixed;
    top: 1.5rem;
    left: 1.5rem;
    width: 5rem;
    background-color: white;
    height: calc(100vh - 3rem);
    padding: 1rem;
    color: var(--nvc-black);
    box-shadow: 0 0 2.5rem .5rem rgba(0, 0, 0, .01);
    border-radius: 2rem;
    overflow-x: hidden;
    overflow-y: auto;
    transition-property: width, padding;
    transition-duration: .5s;
    transition-timing-function: ease;
}

.sidebar.active {
    width: 20rem;
    padding: 2rem;
}

.sidebar ul {
    padding-inline-start: 0;
    margin: 0;
}

.sidebar li svg {
    color: var(--nvc-black);
    height: 2rem;
}

.sidebar.active li svg {
    margin-right: 1rem;
}

.sidebar li {
    list-style: none;
    border-radius: 2rem;
    transition: background-color 150ms ease;
}

.sidebar a {
    display: flex;
    align-items: center;
    padding: .5rem;
    color: var(--nvc-black);
    text-decoration: none;
}

.sidebar.active a {
    padding: .75rem 1.5rem;
}

.sidebar li h4 {
    margin: 0;
    display: none;
}

.sidebar.active li h4 {
    display: block;
}

.sidebar li:hover {
    cursor: pointer;
    background-color: var(--nvc-blue);
}

.sidebar li:hover svg, .sidebar li:hover a {
    color: white;
}

.sidebar img {
    height: 1rem;
    margin-left: auto;
    margin-right: auto;
    margin-bottom: 2.5rem;
    display: none;
}

.sidebar.active img {
    display: block;
}

.sidebar li + li {
    margin-top: .5rem;
}

.content {
    margin-left: 8rem;
    margin-top: 8rem;
    margin-right: 1.5rem;
    background-color: white;
    padding: 2rem;
    color: var(--nvc-black);
    box-shadow: 0 0 2.5rem .5rem rgba(0, 0, 0, .01);
    border-radius: 2rem;
    transition: margin-left .5s ease;
}

.sidebar.active ~ .content {
    margin-left: 23rem;
}

.topbar {
    position: absolute;
    top: 1.5rem;
    left: 8rem;
    width: calc(100% - 9.5rem);
    background-color: white;
    height: 5rem;
    padding: 1rem 2rem;
    color: var(--nvc-black);
    box-shadow: 0 0 2.5rem .5rem rgba(0, 0, 0, .01);
    border-radius: 2rem;
    display: flex;
    align-items: center;
    transition-property: left, width;
    transition-duration: .5s;
    transition-timing-function: ease;
    display: flex;
    justify-content: space-between;
}

.sidebar.active ~ .topbar {
    left: 23rem;
    width: calc(100% - 24.5rem);
}

.topbar .user {
    display: flex;
    align-items: center;
}

.topbar .user span {
    font-weight: 600;
    font-family: Montserrat, sans-serif;
    margin-right: .5rem;
}

.hamburger-arrow, .hamburger-arrow:before, .hamburger-arrow:after {
    background-color: var(--nvc-black);
    height: .2rem;
    width: 2rem;
    border-radius: .2rem;
    position: relative;
    transition-property: transform, width;
    transition-duration: .5s;
    transition-timing-function: ease;
}

.hamburger-arrow:before {
    content: "";
    position: absolute;
    top: -.5rem;
}

.hamburger-arrow:after {
    content: "";
    position: absolute;
    top: .5rem;
}

.sidebar-toggler.active .hamburger-arrow:before {
    transform: rotate(-45deg) translate(-.1rem);
    width: 1.25rem;
}

.sidebar-toggler.active .hamburger-arrow:after {
    transform: rotate(45deg) translate(-.1rem);
    width: 1.25rem;
}

.sidebar-toggler {
    width: 2rem;
    height: 5rem;
    padding-top: 2.5rem;
}

.sidebar-toggler:hover {
    cursor: pointer;
}

@media screen and (max-width: 768px) {
    .sidebar {
        transform: translate(-125%);
        transition-property: width, transform;
    }

    .sidebar.active {
        transform: translate(0);
        width: calc(100% - 3rem);
    }

    .topbar, .sidebar.active ~ .topbar {
        width: calc(100% - 3rem);
        left: 1.5rem;
    }

    .content, .sidebar.active ~ .content {
        width: calc(100% - 3rem);
        margin-left: 1.5rem;
    }
}
</style>
