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
            <div class="col-auto text-center" >
              <div class="card px-4 py-4 mx-5" style="width: 100px; height: 100px">
                <router-link :to="{ name: 'home' }">
                  <div class="
                      icon icon-shape
                      shadow
                      bg-gradient-success
                      text-center
                      border-radius-md
                      card-img-top
                    ">
                    <i class="ni ni-tag text-lg opacity-10 icon-shape" aria-hidden="true"></i>
                  </div>
                </router-link>
              </div>
              <span class="d-inline-block text-truncate font-weight-bolder" style="max-width: 200px">
                Teste
              </span>
            </div>
          </div>
        </div>
      </div>
    </div>

  </base-layout>
</template>
