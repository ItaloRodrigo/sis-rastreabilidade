<script>
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
    }
  }
}
</script>

<template>
  <base-layout>
    <button class="btn btn-primary" @click="clicked()">Click {{counter}}</button>
  </base-layout>
</template>
