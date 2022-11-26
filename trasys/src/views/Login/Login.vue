<script scoped>
export default {
  name: "Login",
  data() {
    return {
      errors: [],
      user: {
        email: null,
        senha: null
      }
    }
  },
  mounted() {
    this.user.email = "initial";
  },
  methods: {
    validateEmail() {
      let arroba = -1;
      let pos = -1;
      let pre = -1;
      if (this.user.email != null) {
        arroba = this.user.email.indexOf('@');
        pos = this.user.email.substr(arroba, 1) ? this.user.email.substr(arroba, 1) : -1;
        pre = this.user.email.substr(0, arroba) ? this.user.email.substr(0, arroba) : -1;
      }
      /**
       * return [        
            arroba, // validação do arroba
            pos, // validação pós arroba
            pre // validação pré arroba
        ];
       * 
      */
      if ((arroba != -1) && (pos != -1) && (pre != -1)) {
        return true;
      }
      return false;
    },
    async autenticacao() {
      this.errors = [];
      if (this.validateEmail() && this.user.senha != null) {
        const vok = await this.$auth.login(this.user);
        if (vok) {
          this.$router.push("/");
        }
      } else {
        if (!this.validateEmail()) this.errors[0] = "Email inválido!";
        if ((this.user.senha == null) || (this.user.senha == "")) this.errors[1] = "Senha em branco!";
      }
    }
  }
}
</script>

<style src="./styles.scss" lang="scss" scoped>

</style>

<template>
  <base-fulllayout>
    <section class="h-100 gradient-form" style="background-color: #eee;">
      <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-xl-10">
            <div class="card rounded-3 text-black">
              <div class="row g-0">
                <div class="col-lg-6">
                  <div class="card-body p-md-5 mx-md-4">
                    <div class="text-center">
                      <img src="/assets/intelbras-logov.png" alt="Logo da Intelbras" style="width: 200px;">
                      <h5 class="mt-1 mb-5 pb-1 text-muted">traceability system</h5>
                    </div>
                    <form id="form-login" @submit.prevent="autenticacao">
                      <p class="text-muted">Por favor faça login com a sua conta</p>
                      <div class="form-floating mb-3">
                        <input type="email" @keyup.enter="autenticacao()" :class="{ 'is-invalid': errors.length > 0 }"
                          required v-model="user.email" class="form-control" id="email" placeholder="name@example.com">
                        <label for="email">Email address</label>
                      </div>
                      <div class="form-floating mb-3">
                        <input type="password" :class="{ 'is-invalid': errors.length > 0 }" required
                          @keyup.enter="autenticacao()" v-model="user.senha" class="form-control" id="senha"
                          placeholder="******">
                        <label for="senha">Senha</label>
                        <div class="invalid-feedback">
                          <ul>
                            <li v-for="(item) in errors" :key="item">
                              {{ item }}
                            </li>
                          </ul>
                        </div>
                      </div>


                      <div class="text-center pt-1 mb-5 pb-1">
                        <button @click="autenticacao()" class="btn btn-primary btn-block w-100 fa-lg mb-3"
                          type="button">Log
                          in</button>
                        <a class="text-muted" href="#!">Esqueceu a senha?</a>
                      </div>

                      <div class="d-flex align-items-center justify-content-center pb-4">
                        <p class="mb-0 me-2">Não tem uma conta?</p>
                        <button class="btn btn-outline-danger">Crie uma conta</button>
                      </div>
                    </form>

                  </div>
                </div>
                <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                  <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                    <h4 class="mb-4">Nós somos a melhor companhia da região Norte do Brasil</h4>
                    <p class="small mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                      exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </base-fulllayout>
</template>
