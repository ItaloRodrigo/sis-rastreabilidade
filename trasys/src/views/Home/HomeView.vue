<script scoped>
export default {
  name:"Home",
  data(){
    return {
      counter: this.$auth.counter
    }
  },
  methods:{
    clicked(){
      this.$auth.increment();
      this.counter = this.$auth.getCounter;
      console.log("teste");
      // this.$auth.persist.storage.setItem("counter",this.counter);
    }
  }
}
</script>

<template>
  <base-layout titlecard="teste">
  <button class="btn btn-primary" @click="clicked()">Click {{counter}}</button>
    
  </base-layout>
</template>
