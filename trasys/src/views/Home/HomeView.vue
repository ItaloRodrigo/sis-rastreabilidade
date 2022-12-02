<script scoped>
export default {
  name:"Home",
  data(){
    return {
      counter: this.$auth.counter
    }
  },
  methods:{

  }
}
</script>

<template>
  <base-layout titlecard="Home">
  
    <div class="row">
      <!-- vh-100 -->
      <div class="container-fluid py-4">

      </div>
    </div>
    
  </base-layout>
</template>
