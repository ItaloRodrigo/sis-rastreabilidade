<script>
export default {
    name: "Pagination",
    props: [
        'pages'
    ],
    data() {
        return {

        }
    },
    mounted() {

    },
    methods: {
        logout() {
            // alert("Logout");
        }
    },
}
</script>

<template>
    <div class="container-fluid">
        <nav aria-label="...">
            <ul class="pagination pagination-sm">
                <li class="page-item active" aria-current="page">
                    <span class="page-link">1</span>
                </li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
            </ul>
        </nav>
    </div>
</template>