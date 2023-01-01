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
    teste
  </ModalDefaultVue>
</div>

</template>