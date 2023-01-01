<script scoped>
export default {
    props: {
        visible: Boolean,
        title:{
            type: String,
            default:"Modal Default Vue"
        }
    },
    name: "ModalDefaultVue",
    data() {
        return {
            openClose: this.visible
        }
    },
    methods: {
        openCloseFun() {
            this.openClose = !this.openClose;
        }
    },
    watch: {
        visible: function (newVal, oldVal) {
            this.openClose = newVal;
            console.log("newval=" + newVal + "==" + oldVal);
        }
    }
}
</script>

<template>
    <!-- Modal -->
    <div v-if="openClose" class="modal fade show" tabindex="-1" aria-labelledby="exampleModalLabel" aria-modal="true"
        role="dialog" style="display:block;">
        <div class="modal-dialog modal-xl"> 
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">{{title}}</h1>
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

</template>

<style scoped>
.modal .modal-header{
    background: linear-gradient(to right, #86ee24, #36d8af, #3cdd36, #6c9062);;
}
</style>