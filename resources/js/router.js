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
import User from "./components/admin/User";
import Auth from "./components/auth/Auth";
import UserLogin from "./components/auth/Login";
import Register from "./components/auth/Register";
import Account from "./components/auth/Account";
import Personal from "./components/auth/Personal";
import Password from "./components/auth/Password";
import Document from "./components/auth/Document";
import UserVacCenter from "./components/auth/VacCenter";
import News from "./components/admin/News";
import Staff from "./components/admin/Staff";
import StaffLogin from "./components/staff/Login";
import StaffDashboard from "./components/staff/Dashboard";
import StaffWelcome from "./components/staff/Welcome";
import StaffUser from "./components/staff/User";

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
            path: "news",
            component: News,
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
        }, {
            path: "user",
            component: User,
        }, {
            path: "staff",
            component: Staff,
        }],
    }, {
        path: "/login",
        component: Auth,
        children: [{
            path: "/login",
            component: UserLogin,
        }, {
            path: "/register",
            component: Register,
        }, {
            path: "/account",
            component: Account,
            meta: {
                requireAuth: true,
            },
            children: [{
                path: "",
                component: Personal,
            }, {
                path: "password",
                component: Password,
            }, {
                path: "document",
                component: Document,
            }, {
                path: "vac-center",
                component: UserVacCenter,
            }],
        }],
    }, {
        path: "/staff/login",
        component: StaffLogin,
    }, {
        path: "/staff",
        component: StaffDashboard,
        meta: {
            requireStaff: true,
        },
        children: [{
            path: "",
            component: StaffWelcome,
        }, {
            path: "user",
            component: StaffUser,
        }],
    }],
});

router.beforeEach((to, from, next) => {
    const token = localStorage.getItem("token");

    if (token)
        window.axios.defaults.headers.common["Authorization"] = token;

    if (to.matched.some((record) => record.meta.requireAdmin)) {
        if (!token)
            return next("/admin/login");
        if (localStorage.getItem("role") !== "admin")
            return next("/admin/login");
    }

    if (to.matched.some((record) => record.meta.requireAuth)) {
        if (!token)
            return next("/login");
    }

    if (to.matched.some((record) => record.meta.requireStaff)) {
        if (!token)
            return next("/staff/login");
        if (localStorage.getItem("role") !== "staff")
            return next("/staff/login");
    }

    return next();
});

export default router;
