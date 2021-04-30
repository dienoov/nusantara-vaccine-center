require('./bootstrap');

import Vue from "vue";
import VueRouter from "vue-router";

import App from "./components/App";
import router from "./router";

Vue.use(VueRouter);

Vue.prototype.$http = window.axios;

new Vue(Vue.util.extend(App, {router})).$mount("#app");
