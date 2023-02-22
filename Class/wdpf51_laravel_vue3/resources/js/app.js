require("./bootstrap");

import { createApp } from "vue";
import Front from "./Front.vue";

const app = createApp();
app.component("front-page", Front);
app.mount("#app");
