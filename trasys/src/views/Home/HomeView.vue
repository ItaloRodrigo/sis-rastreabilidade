<script scoped>
export default {
  name: "Home",
  data() {
    return {
      counter: this.$auth.counter
    }
  },
  methods: {

  }
}
</script>

<template>
  <base-layout titlecard="Home">

    <div class="row">
      <!-- vh-100 -->
      <div class="container-fluid py-4">
        <div class="col-lg-12">
          <div class="row">
            <!-- Usuários -->
            <div class="col-auto text-center">
              <div class="card mx-5 border border-primary">
                <router-link :to="{ name: 'usuarios' }">
                  <div class="px-3 py-2 ">
                    <i class="bi bi-people-fill" style="font-size: 3rem; color: green;"></i>
                  </div>
                </router-link>
              </div>
              <span class="d-inline-block text-truncate font-weight-bolder" style="max-width: 200px">
                Usuários
              </span>
            </div>
            <!-- Permissões -->
            <div class="col-auto text-center">
              <div class="card mx-5 border border-primary">
                <router-link :to="{ name: 'home' }">
                  <div class="px-3 py-2 ">
                    <i class="bi bi-key" style="font-size: 3rem; color: green;"></i>
                  </div>
                </router-link>
              </div>
              <span class="d-inline-block text-truncate font-weight-bolder" style="max-width: 200px">
                Permissões
              </span>
            </div>
            <!-- Permissões -->
            <div class="col-auto text-center">
              <div class="card mx-5 border border-primary">
                <router-link :to="{ name: 'home' }">
                  <div class="px-3 py-2 ">
                    <i class="bi bi-gear-fill" style="font-size: 3rem; color: green;"></i>
                  </div>
                </router-link>
              </div>
              <span class="d-inline-block text-truncate font-weight-bolder" style="max-width: 200px">
                Parâmetros
              </span>
            </div>
          </div>
        </div>
      </div>
    </div>

  </base-layout>
</template>
