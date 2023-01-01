<script scoped>
import ModalDefaultVue from '../../../components/Pages/ModalDefault.vue';
export default {
  components:{
    ModalDefaultVue
  },
  props:{
    
  },
  name: "ModalUsuarioVue",
  data() {
    return {
      
    }
  },
  methods:{
    openModal(){
      this.$refs.modal.openCloseFun();
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
          <input type="text" class="form-control" id="nome" placeholder="João">
          <label for="nome">Nome Completo</label>
        </div>
      </div>
      <div class="col-3">
        <div class="form-floating mb-3">
          <input type="text" class="form-control" id="matricula" placeholder="xxxxx">
          <label for="matricula">Matrícula</label>
        </div>
      </div>
    </div>
    <div class="row g-2">
      <div class="col-9">
        <div class="form-floating mb-3">
          <input type="email" class="form-control" id="email" placeholder="xxx@email.com">
          <label for="email">Email</label>
        </div>
      </div>
      <div class="col-3">
        <div class="form-floating mb-3">
          <input type="password" class="form-control" id="password" placeholder="*******">
          <label for="password">Senha</label>
        </div>
      </div>
    </div>
  </ModalDefaultVue>
</div>

</template>