<template>
  <div id="content">
    <div class="container py-5">
      <div class="row py-5">
        <div class="col-md-12 py-5">
          <div class="text-center">
            <h2>Cargando...</h2>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {

    }
    
  },
  methods: {
    redirect() {
      window.location.href = "/administradores/";

    }
  },
  mounted() {
    this.redirect();
  }

}
</script>
