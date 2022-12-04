<script scoped>
export default {
  name: "ListUsuarios",
  data() {
    return {
      usuarios:null
    }
  },
  mounted(){

  },
  methods: {

  }
}
</script>

<template>
    <base-layout titlecard="Usuários">
        <div class="row">
          <div class="container-fluid py-4">
            <div class="row justify-content-end ">
              <div class="col-lg-3 col-sm-12 col-md-6">
                <div class="input-group flex-nowrap">
                  <span class="input-group-text" id="search">
                    <i class="bi bi-search"></i>
                  </span>
                  <input type="search" class="form-control" placeholder="search" aria-label="search" aria-describedby="search">
                </div>
              </div>
            </div>
            <table class="table table-striped">
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
                <tr>
                  <th>1</th>
                  <td>001</td>
                  <td>Ítalo</td>
                  <td>italo.computation@gmail.com</td>
                  <td><span class="badge rounded-pill text-white text-bg-primary">Logado</span></td>
                  <td>03-12-2022</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
    </base-layout>
</template>
