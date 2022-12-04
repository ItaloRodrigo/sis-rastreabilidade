<script scoped>
import { api, except } from "../../api";
export default {
  name: "ListUsuarios",
  data() {
    return {
      usuarios: null,
      search:null
    }
  },
  mounted() {
    this.listaUsuarios(null);
    console.log(this.usuarios);
  },
  methods: {
    async listaUsuarios(texto) {
      await api(this)
        .get("user/listusuarios",{})
        .then((res) => {
          this.usuarios = res.data.usuarios;
        })
        .catch((e) => console.log(this, e));
    },
    addUser() {
      // alert(this);
      console.log(("$auth" in this)?this.$auth.user.token:false)
    },
    async buscaUser() {
      console.log(this.search);
      await api(this)
        .get("user/listusuarios",{
          params:{
            text: this.search
          }
        })
        .then((res) => {
          this.usuarios = res.data.usuarios;
          console.log(this.usuarios);
        })
        .catch((e) => console.log(this, e));
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
              <input type="search" v-model="search" @keyup="buscaUser" class="form-control" placeholder="search" aria-label="search"
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
              <th>...</th>
            </tr>
          </thead>
          <tbody >
            <tr v-for="item in usuarios" :key="item.id">
              <th>{{item.id}}</th>
              <td>{{item.matricula}}</td>
              <td>{{item.name}}</td>
              <td>{{item.email}}</td>
              <td><span class="badge rounded-pill text-white text-bg-primary">Logado</span></td>
              <td>{{item.created_at}}</td>
              <th>
                <div class="btn-group" role="group">
                  <button type="button" class="btn btn-sm btn-outline-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    Ações
                  </button>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Editar</a></li>
                    <li><a class="dropdown-item" href="#">Deletar</a></li>
                  </ul>
                </div>
              </th>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </base-layout>
</template>
