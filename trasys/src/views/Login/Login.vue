<script>
export default {
  name:"Login",
  data(){
    return {
      texto:""
    }
  },
  mounted() {
    this.texto = "initial";
  },
  methods:{
    login(){
      this.texto = 'teste';
    }
  }
}
</script>

<template>
  <base-fulllayout>
    <div clas="row">
      <div class="col-lg-12">
        {{texto}}
        <button class="btn btn-primary" @click="login">Login</button>
      </div>
    </div>
  </base-fulllayout>
</template>
