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
    mounted(){
        // alert("teste");
    }
}
</script>

<style src="./styles.scss">

</style>

<template>

    <main class="main-content position-relative max-height-vh-100 h-100 mb-10" style="background-color: #eee;">
    <!-- <main id="main" style="background-color: #eee;"> -->

        <!-- Cabeçalho da base layout -->

        <Header></Header>
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-lg-12 m-0">
                    <div class="card border-0">
                        <div class="card-header">
                            <h5 class="text-dark">
                                <span class="fw-bold">{{ titlecard }}</span>
                            </h5>
                        </div>
                        <div class="card-body">
                            <!-- inicio do slot corpo da página -->
                            <slot class=""></slot>
                            <!-- fim do slot corpo da página -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Rodapé -->
        <!-- <Footer></Footer> -->
    </main>

</template>
