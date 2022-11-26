<script scoped>
import Header from '../components/Header/header.vue';
import Footer from '../components/Footer/footer.vue';
export default {
    name: "BaseLayout",
    components: { Header, Footer },
    props: ['titlecard'],
    data() {
        return {};
    },

}
</script>

<style src="./styles.scss">

</style>


<template>
    <main class="h-100" style="background-color: #eee;">
        <!-- Cabeçalho da base layout -->
        <Header title="teste 2 de header"></Header>        
        <div class="container-fluid py-4 h-100">
            <div class="row h-100">
                <div class="col-lg-12 m-0">
                    <div class="card border-0">
                        <div v-if="this.$route.path == '/'" class="card-header">
                            <h5 class="text-dark">
                                <span class="fw-bold">{{ titlecard }}</span> 
                                <!-- - {{this.$route.path}} -->
                            </h5>
                        </div>
                        <div class="card-body">
                            <!-- slot conteúdo -->
                            <slot class="body h-100"></slot>
                            <!-- fim slot conteúdo -->
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Rodapé -->
        <Footer></Footer>
    </main>
</template>
