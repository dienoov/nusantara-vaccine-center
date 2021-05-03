<template>
    <div class="bg-light my-3 p-4 w-lg-90">
        <div class="row no-gutters">
            <div class="col-lg-3 settings">
                <h3 class="mt-0 mb-4">My Account</h3>
                <ul class="account-menu">
                    <li>
                        <router-link to="/account">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                 stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M10 6H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V8a2 2 0 00-2-2h-5m-4 0V5a2 2 0 114 0v1m-4 0a2 2 0 104 0m-5 8a2 2 0 100-4 2 2 0 000 4zm0 0c1.306 0 2.417.835 2.83 2M9 14a3.001 3.001 0 00-2.83 2M15 11h3m-3 4h2"/>
                            </svg>
                            Personal Information
                        </router-link>
                    </li>
                    <li>
                        <router-link to="/account/vac-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                            </svg>
                            Vaccine Center
                        </router-link>
                    </li>
                    <li>
                        <router-link to="/account/document">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                 stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                            </svg>
                            Document
                        </router-link>
                    </li>
                    <li>
                        <router-link to="/account/password">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                 stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                            </svg>
                            Change Password
                        </router-link>
                    </li>
                </ul>
            </div>
            <div class="col-lg-9 settings-form">
                <router-view></router-view>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "Account",
}
</script>

<style scoped>
.settings {
    padding-right: 2rem;
    border-right: 1px solid var(--nvc-grey);
}

.settings-form {
    padding-left: 2rem;
}

@media screen and (max-width: 992px) {
    .settings {
        padding-right: 0;
        border-right: none;
        padding-bottom: 2rem;
    }

    .settings-form {
        padding-left: 0;
        padding-top: 2rem;
        border-top: 1px solid var(--nvc-grey);
    }
}

.account-menu {
    list-style: none;
    padding-inline-start: 0;
}

.account-menu li {
    padding: .75rem 1rem;
    margin: .5rem 0;
    font-weight: 500;
    border-radius: .2rem;
    transition: background-color 150ms ease;
}

.account-menu li:hover {
    background-color: var(--nvc-light-blue);
    cursor: pointer;
}

.account-menu li a {
    color: var(--nvc-black);
    text-decoration: none;
    display: flex;
    align-items: center;
    transition: color 150ms ease;
}

.account-menu li:hover a {
    color: var(--nvc-white);
}

.account-menu li svg {
    height: 1.5rem;
    margin-right: .75rem;
}
</style>
