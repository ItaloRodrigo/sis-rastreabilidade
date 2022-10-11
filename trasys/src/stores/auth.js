import { defineStore } from "pinia";

export default defineStore({
  id: "auth",
  state: () => ({
    user: null,
    counter: 0
  }),
  getters: {
    isAuth(state) {
      return state.user != null;
    },
    getName(state) {
      if (state.user != null)
        return state.user.first_name + " " + state.user.last_name;
      return "";
    },
    getId(state){
      if (state.user != null)
        return state.user.id;
      return "";
    },
    token(state) {
      // return state.user != null ? "Bearer " + state.user.access : "";
      return state.user != null ? "Token " + state.user.token : "";
    },
    getCounter(state){
      return state.counter;
    }
  },
  actions: {
    async login(user) {
      
    },
    increment (){
      this.counter = this.counter +1;
    }
  }
});
