<script scoped>
export default {
  props:{
    visible:Boolean
  },
  name: "ModalUsuario",
  data() {
    return {
      openClose: this.visible
    }
  },
  methods:{
    openCloseFun(){
      this.openClose = !this.openClose;
    }
  },
  watch:{
    visible: function(newVal,oldVal){
      this.openClose = newVal;
      console.log("newval="+newVal+"=="+oldVal);
    }
  }
}
</script>

<template>
<!-- Modal -->
<div>
  <div v-if="openClose" class="modal fade show" tabindex="-1" aria-labelledby="exampleModalLabel" aria-modal="true" role="dialog" style="display:block;">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
          <button type="button" class="btn-close" @click="openCloseFun()" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <slot></slot>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" @click="openCloseFun()">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
    
  </div>
  <!-- <button type="button" class="btn btn-secondary" @click="openCloseFun()">OpenModal</button> -->
</div>

</template>