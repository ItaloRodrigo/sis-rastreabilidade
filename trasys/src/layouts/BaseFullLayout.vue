<script>
    export default {
        name: "BaseFullLayout",
        data() {
            return {};
        },
        
    }
</script>

<style src="./styles.scss"></style>

<template>
    <main>
        <!-- Cabeçalho da base layout -->
                
        <!-- Conteúdo de página -->
        <slot></slot>
        <!-- Rodapé -->
        
    </main>
</template>
