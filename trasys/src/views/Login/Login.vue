<script>
export default {
  name: "Login",
  data() {
    return {
      texto: ""
    }
  },
  mounted() {
    this.texto = "initial";
  },
  methods: {
    login() {
      this.texto = 'teste';
    }
  }
}
</script>

<template>
  <base-fulllayout>
    <div class="container border border-primary">
      <div clas="row align-items-center">
        <div class="col border border-dark align-self-center">
          {{ texto }}
          dsgjsldgkjslkg
          dsgjsldgkjslkg
          dsgjsldgkjslkg
          dsgjsldgkjslkg
          dsgjsldgkjslkg
          dsgjsldgkjslkg
          
          <button class="btn btn-primary" @click="login">Login</button>
        </div>
      </div>
    </div>
  </base-fulllayout>
</template>
