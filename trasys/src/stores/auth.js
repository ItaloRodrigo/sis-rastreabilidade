import { defineStore } from "pinia";
import { api, except } from "../api";

export default defineStore({
  id: "auth",
  state: () => ({
    user: null,
    counter: 0,
  }),
  getters: {
    isAuth(state) {
      return state.user != null;
    },
    getUser(state) {
      return state.user.user;
    },
    getName(state) {
      if (state.user != null) return state.user.user.name;
      return "";
    },
    getId(state) {
      if (state.user != null) return state.user.user.id;
      return "";
    },
    token(state) {
      // return state.user != null ? "Bearer " + state.user.access : "";
      return state.user != null ? "Token " + state.user.current_token : "";
    },
    getCounter(state) {
      return state.counter;
    },
  },
  actions: {
    async login(user) {
      await api(this)
        .post("auth/login", user)
        .then((res) => {
          this.user = res.data;
        });
      return this.user;
    },
    async logout(ctx = {}) {
      let data = null;
      await api(ctx)
        .post("auth/logout", { id: this.user.user.id })
        .then((res) => {
          data = res.data;
        })
        .catch((e) => console.log(ctx, e));
      this.user = null;
      return data;
    },
    async isLoged(ctx = {}) {
      if (this.user.user != null) {
        let user = null;
        await api(ctx)
          .get("auth/isloged", {
            params: {
              id: this.user.user.id,
            },
          })
          .then((res) => {
            user = res.data;
          })
          .catch((e) => console.log(ctx, e));
        return user;
      }
      return false;
    },
    async refresh() {},
    increment() {
      this.counter = this.counter + 1;
    },
  },
  persist: true,
  // persist: {
  //   key: "auth",
  //   enable:true,
  //   storage: {
  //     getItem: (key) => Cookies.get(key),
  //     setItem: (key, value) => Cookies.set(key, value),
  //     removeItem: (key) => Cookies.remove(key),
  //   },
  // },
});
