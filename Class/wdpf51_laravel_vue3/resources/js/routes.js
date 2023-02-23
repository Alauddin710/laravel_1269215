// pages
import HomePage from "./pages/Home.vue";
import ShopPage from "./pages/Shop.vue";

// Routing
import { createRouter, createWebHistory } from "vue-router";
const routes = [
    { path: "/", component: HomePage },
    { path: "/shop", component: ShopPage }
];

const router = createRouter({
    history: createWebHistory(),
    routes, // short for `routes: routes`
    linkActiveClass: "active"
});

export default router;
