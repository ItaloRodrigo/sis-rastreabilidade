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
    <main class="main-content position-relative max-height-vh-100 h-100 mb-10">
        <!-- <router-link to="/">Home</router-link>
        <router-link to="/about">About</router-link> -->
        <!-- 
            seção navbar
         -->
        <nav class="navbar bg-success mb-0" name="base-layout">
            <div class="container-fluid">
                <button class="navbar-toggler border border-white" type="button" data-bs-toggle="collapse"
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
                            <img src="/static/assets/logo.svg" alt="Logo da Intelbras" style="width: 65px;">
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
                                <router-link to="/"
                                    class="btn btn-success shadow m-0 d-inline-flex">
                                    <i class="fa fa-user pe-1"></i>
                                    <span class="d-none d-lg-block d-xl-block d-xxl-block">
                                        User
                                    </span>
                                </router-link>
                                <router-link to="/logout" class="btn btn-white shadow m-0 d-inline-flex">
                                    <i class="fa fa-sign-out pe-1"></i>
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
        <!-- 
        
        <div class="container-fluid bg-white mx-0 border-bottom border-success d-flex" name="base-layout">
            <nav aria-label="breadcrumb" class="d-flex align-items-center">
                <button id="id_voltar_button" class="btn btn-sm btn-primary mt-1 my-1" @click="selfback">
                    {{ $t('Voltar') }}
                </button>
                <slot name="breadcrumb">
                    <ol class="breadcrumb m-1 bg-white text-white rounded-0 text-dark ">
                        <li class="breadcrumb-item text-sm">
                            <a class="opacity-5 text-dark" href="">
                                {{ $t('Início') }}
                            </a>
                        </li>
                        <li class="breadcrumb-item text-sm text-dark active font-weight-bolder" aria-current="page">
                            {{ $t('Dashboard') }}
                        </li>
                    </ol>
                </slot>
            </nav>
        </div> -->
    </main>
</template>