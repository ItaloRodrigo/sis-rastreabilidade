<script scoped>
import { api, except } from "../../api";
export default {
  name: "ListUsuarios",
  data() {
    return {
      usuarios: null
    }
  },
  mounted() {
    this.listaUsuarios();
  },
  methods: {
    async listaUsuarios() {
      await api(this)
        .get("user/listusuarios",{})
        .then((res) => {
          this.usuarios = res.usuarios;
        })
        .catch((e) => console.log(this, e));
    },
    addUser() {
      // alert(this);
      console.log(this)
    },
    buscaUser() {
      // alert("teste");
    }
  }
}
</script>

<template>
  <base-layout titlecard="Usuários">
    <div class="row">
      <div class="container-fluid py-4">
        <!-- Botão adicionar -->
        <div class="row justify-content-end ">
          <div class="col-lg-9 col-sm-12 col-md-6 p-0">
            <button class="p-0 btn btn-primary float-end" @click="addUser">
              <i class="bi bi-person-add px-2" style="font-size: 1.5rem; "></i>
            </button>
          </div>
          <!-- Campo de busca -->
          <div class="col-lg-3 col-sm-12 col-md-6">
            <div class="input-group flex-nowrap">
              <span class="input-group-text" id="search">
                <i class="bi bi-search"></i>
              </span>
              <input type="search" @keyup="buscaUser" class="form-control" placeholder="search" aria-label="search"
                aria-describedby="search">
            </div>
          </div>
        </div>
        <!-- tabela de usuários -->
        <table class="table table-striped table-lg ">
          <thead>
            <tr>
              <th>#</th>
              <th>Matrícula</th>
              <th>Nome</th>
              <th>Email</th>
              <th>Status</th>
              <th>Criado em</th>
            </tr>
          </thead>
          <tbody>
            <tr v-for="item in this.usuarios" :key="item.id">
              <th>{{item.id}}</th>
              <td>{{item.matricula}}</td>
              <td>{{item.name}}</td>
              <td>{{item.email}}</td>
              <td><span class="badge rounded-pill text-white text-bg-primary">Logado</span></td>
              <td>{{item.created_at}}</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </base-layout>
</template>
