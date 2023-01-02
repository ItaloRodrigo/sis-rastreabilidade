<script scoped>
import { api, except } from "../../../api";
import ModalDefaultVue from '../../../components/Pages/ModalDefault.vue';
export default {
  components: {
    ModalDefaultVue
  },
  props: {
    owner:{
      default:this
    },
  },
  name: "ModalUsuarioVue",
  data() {
    return {
      form: {
        name: null,
        matricula: null,
        email: null,
        password: null
      },      
      response: "teste"
    }
  },
  methods: {
    openModal() {
      this.$refs.modal.openCloseFun();      
    },
    async salvar() {
      if (
        (this.form.name != null) &&
        (this.form.matricula != null) &&
        (this.form.email != null) &&
        (this.form.password != null)
      ) {
        // await api(this)
        //   .post("user/create",{
        //     name: this.form.name,
        //     matricula: this.form.matricula,
        //     email: this.form.email,
        //     password: this.form.password,
        //   })
        //   .then((res) => {
        //     this.response = res.data.user;
        //   })
        //   .catch((e) => console.log(this, e));
        //   console.log("deu tudo certo!");
        this.owner.$forceUpdate();
        this.$refs.modal.openCloseFun();
      }else{
        console.log("error");
      }      
    }
  }
}
</script>

<template>
  <!-- Modal -->
  <div>
    <ModalDefaultVue ref="modal" :visible="false" :title="'Cadastro de Usuário'">
      <div class="row g-2">
        <div class="col-9">
          <div class="form-floating mb-3">
            <input type="text" class="form-control" :class="[this.form.name ? '' : 'is-invalid']" id="name"
              placeholder="João" v-model="form.name" required>
            <label for="name">Nome Completo</label>
          </div>
        </div>
        <div class="col-3">
          <div class="form-floating mb-3">
            <input type="text" class="form-control" :class="[this.form.matricula ? '' : 'is-invalid']" id="matricula"
              placeholder="xxxxx" v-model="form.matricula" required>
            <label for="matricula">Matrícula</label>
          </div>
        </div>
      </div>
      <div class="row g-2">
        <div class="col-9">
          <div class="form-floating mb-3">
            <input type="email" class="form-control" :class="[this.form.email ? '' : 'is-invalid']" id="email"
              placeholder="xxx@email.com" v-model="form.email" required>
            <label for="email">Email</label>
          </div>
        </div>
        <div class="col-3">
          <div class="form-floating mb-3">
            <input type="password" class="form-control" :class="[this.form.password ? '' : 'is-invalid']" id="password"
              placeholder="*******" v-model="form.password" required>
            <label for="password">Senha</label>
          </div>
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="col-lg-12">
          <button type="button" class="btn btn-primary float-end" @click="salvar()">Salvar</button>
        </div>
      </div>
    </ModalDefaultVue>
  </div>

</template>