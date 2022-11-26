import LoginView from './Login.vue';
import LogoutView from './Logout.vue';

const routes = [
  {
    path: "/login",
    name: "login",
    component: LoginView,
  },
  {
    path: "/logout",
    name: "logout",
    component: LogoutView,
  }
];

export default routes;
