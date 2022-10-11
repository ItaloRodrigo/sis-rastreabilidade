<script>
export default {
    name: "Header",
    props: [
        'title'
    ],
    data() {
        return {

        }
    }
}
</script>

<template>
    <main>
        <router-link to="/">Home</router-link>
        <router-link to="/about">About</router-link>
        <nav>
            Header {{title}}
        </nav>
    </main>
</template>