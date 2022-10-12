import { createRouter, createWebHistory } from "vue-router";

import auth_store from "../stores/auth";

//--- routes from views
import home_routes from "../views/Home/routes.js";

const routes = [
  {
    path: "/about",
    name: "about",
    component: () => import("../views/AboutView.vue"),
  },
].concat(home_routes);

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes,
});

router.beforeEach((to, from, next) => {
  const store = auth_store();
  //---
  if (to.name != "login" && !store.isAuth) {
    next({
      name: "login",
    });
  } else {
    next();
  }
});

export default router;
