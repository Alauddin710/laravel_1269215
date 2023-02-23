require("./bootstrap");

import { createApp } from "vue";
import Front from "./Front.vue";
import Router from "./routes.js";

const app = createApp();
app.component("front-page", Front);
app.use(Router);
app.mount("#app");
