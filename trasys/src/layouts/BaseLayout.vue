<script>
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
<template>
    <main>
        <!-- Cabeçalho da base layout -->
        <Header title="teste 2 de header"></Header>
        <!-- Conteúdo de página -->
        <slot></slot>
        <!-- Rodapé -->
        <Footer></Footer>
    </main>
</template>
