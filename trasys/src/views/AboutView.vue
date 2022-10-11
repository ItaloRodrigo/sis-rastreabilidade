<script>
export default {
  name: "About",
  data(){
    return {
      counter: this.$auth.getCounter
    }
  }
}
</script>

<template>
  <base-layout>
    <p>About View {{counter}}</p>
  </base-layout>
</template>
