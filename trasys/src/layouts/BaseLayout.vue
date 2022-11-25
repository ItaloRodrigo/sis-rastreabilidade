<script scoped>
import Header from '../components/Header/header.vue';
import Footer from '../components/Footer/footer.vue';
export default {
    name: "BaseLayout",
    components: { Header, Footer },
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
        <!-- slot conteúdo -->
        <slot class="body h-100"></slot>
        <!-- fim slot conteúdo -->
        <!-- Rodapé -->
        <Footer></Footer>
    </main>
</template>
