import VueRouter from "vue-router";

import Home from "./components/Home";
import Login from "./components/admin/Login";
import Dashboard from "./components/admin/Dashboard";
import Welcome from "./components/admin/Welcome";
import VacCenter from "./components/admin/VacCenter";
import Vaccine from "./components/admin/Vaccine";
import Stock from "./components/admin/Stock";
import Schedule from "./components/admin/Schedule";
import Status from "./components/admin/Status";

const router = new VueRouter({
    mode: "history",
    routes: [{
        path: "/",
        component: Home,
    }, {
        path: "/admin/login",
        component: Login,
    }, {
        path: "/admin",
        component: Dashboard,
        meta: {
            requireAdmin: true,
        },
        children: [{
            path: "",
            component: Welcome,
        }, {
            path: "vac-center",
            component: VacCenter,
        }, {
            path: "vaccine",
            component: Vaccine,
        }, {
            path: "stock",
            component: Stock,
        }, {
            path: "schedule",
            component: Schedule,
        }, {
            path: "status",
            component: Status,
        }],
    }],
});

router.beforeEach((to, from, next) => {
    const token = localStorage.getItem("token");
    if (to.matched.some((record) => record.meta.requireAdmin)) {
        if (!token)
            return next("/admin/login");
        if (localStorage.getItem("role") !== "admin")
            return next("/admin/login");
        window.axios.defaults.headers.common["Authorization"] = token;
    }
    if (to.matched.some((record) => record.meta.requireAuth)) {
        if (!token)
            return next("/login");
        window.axios.defaults.headers.common["Authorization"] = token;
    }
    return next();
});

export default router;
