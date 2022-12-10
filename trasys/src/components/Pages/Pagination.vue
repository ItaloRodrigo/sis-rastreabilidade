<script>
export default {
    name: "Pagination",
    props: [
        'pages', 'loadList'
    ],
    data() {
        return {
            clicked: 2,
            total: 1
        }
    },
    mounted(){
        // this.total = parseInt(this.pages/10);
        // console.log(this.total);
    },
    methods: {
        go_to_page(i) {
            this.clicked = i;
            this.loadList(i);
            console.log(i);
        }
    },
}
</script>

<template>
    <div class="container-fluid py-2">
        <nav aria-label="..." class="">
            <ul class="pagination pagination-md justify-content-end m-0">
                <template v-for="i in parseInt(this.pages/10)" :key="i" >
                    <!-- go_to_page -->
                    
                    <li class="page-item active" aria-current="page" @click="go_to_page(i)" v-if="(i == clicked)">
                        <span class="page-link">{{ i }}</span>
                    </li>
                    <!-- go_to_page(i) -->
                    <li class="page-item" v-else @click="go_to_page(i)"><a class="page-link" href="#">{{ i }}</a></li>
                </template>
            </ul>
        </nav>
    </div>
</template>