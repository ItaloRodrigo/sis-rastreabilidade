<script>
export default {
    name: "Header",
    props: [
        'title'
    ],
    data() {
        return {
            username:null
        }
    },
    mounted(){
        this.username = (this.$auth.isAuth)?this.$auth.getName:"-";
        console.log(this.$auth.isAuth);
    },
    methods: {
        logout() {
            alert("Logout");
        }
    },
}
</script>

<template>
    <section >
        <!-- <router-link to="/">Home</router-link>
        <router-link to="/about">About</router-link> -->
        <!-- 
            seção navbar
         -->
        <nav class="navbar bg-light mb-0" name="base-layout">
            <div class="container-fluid">
                <button class="navbar-toggler border border-primary" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!-- <button class="navbar-toggler p-3 border border-white" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <div class="sidenav-toggler-inner">
                        <i class="sidenav-toggler-line"></i>
                        <i class="sidenav-toggler-line"></i>
                        <i class="sidenav-toggler-line"></i>
                    </div>
                </button> -->

                <div class="col-2 offset-lg-4 offset-sm-3 offset-md-3 text-center">
                    <div class="navbar-header">
                        <router-link to="/" class="navbar-brand">
                            <figure class="figure p-0 m-0 text-center">
                                <img src="/assets/intelbras-logov.png" alt="Logo da Intelbras" style="width: 100px;">
                                <figcaption class="figure-caption text-muted " style="font-size:0.7em;">
                                    traceability system
                                </figcaption>
                            </figure>
                        </router-link>

                    </div>

                </div>

                <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-5 col-sm-5 col-12 mt-1">
                    <div class="row">
                        <div class="col-xl-12 col-xxl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-1">
                            <div class="btn-group float-end">
                                <!-- <button class="btn btn-primary shadow-none m-0 p-1 pt-4 rounded-0"
                                    v-for="locale in locales" :key="locale" @click="setLang(locale)">
                                    <img :src="'/static/lang/' + locale.toLowerCase() + '.png'"
                                        style="width: 20px; height: 16px;">
                                </button> -->
                                <router-link to="/" class="btn btn-primary shadow m-0 d-inline-flex">
                                    <i class="bi bi-person-circle me-2 text-white fw-bold"></i>
                                    <span class="d-none d-lg-block d-xl-block d-xxl-block fw-bold">
                                        {{username}}
                                    </span>
                                </router-link>
                                <router-link to="/logout" class="btn btn-white shadow m-0 d-inline-flex">
                                    <i class="bi bi-x-square-fill me-2"></i>
                                    <span class="d-none d-lg-block d-xl-block d-xxl-block">
                                        Logout
                                    </span>
                                </router-link>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <!-- 
            Seção de links botão retraído
         -->
        <div class="collapse" id="navbarToggleExternalContent" name="base-layout">
            <div class="bg-white py-2 px-1">
                <ul class="dropend nav nav-pills nav-pills-custom">
                    <li class="nav-item drophome">
                        <a class="nav-link drophome-toggle text-bolder" href="#" id="navbarDropdownMenuLink"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            {{ "Home" }}
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li class="nav-item">
                                <router-link to="/" class="dropdown-item nav-link text-bolder">
                                    {{ "Home" }}
                                </router-link>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item drophome">
                        <a class="nav-link drophome-toggle text-bolder" href="#" id="navbarDropdownMenuLink2"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            {{ "About" }}
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink2">
                            <li class="nav-item">
                                <router-link to="/about" class="dropdown-item nav-link text-bolder">
                                    {{ "About" }}
                                </router-link>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </section>
</template>