<script>
    export default {
        name: "BaseFullLayout",
        data() {
            return {};
        },
        
    }
</script>
<template>
    <main>
        <!-- Cabeçalho da base layout -->
                
        <!-- Conteúdo de página -->
        <slot></slot>
        <!-- Rodapé -->
        
    </main>
</template>
