<template>
    <div id="admin-edit">
        <div class="d-flex" id="wrapper">
            <Sidebar />
            <!-- Page content wrapper-->
            <div id="page-content-wrapper">
                <Navbar />
                <!-- Page content-->
                <div class="container-fluid px-0">
                    <b-breadcrumb :items="breadcrumbs"></b-breadcrumb>
                      <div class="container-fluid">
                          <div class="row">
                              <div class="col-md-12">
                                  <h3>Perfil del Administrador</h3>

                                  <div id="edit-admin">
                                      <div class="container">
                                        <div class="row">
                                          <div class="col-md-6">
                                            <img src="https://via.placeholder.com/64" alt="" class="img-fluid rounded-circle">
                                            <h5>Nombre Apellido</h5>
                                          </div>
                                        </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
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
        breadcrumbs: [
          {
            text: 'Inicio',
            href: '/'
          },
          {
            text: 'Administradores',
            href: '/administradores'
          },
          {
            text: 'View',
            href: '#'
          },

        ],
        selectedArea: null,
        areas: [
            {value: null, text: "Selecciona una opción"},
            {value: "1", text: "Recursos Humanos"},
            {value: "2", text: "Logistica"},
            {value: "3", text: "Cobranza"},
            {value: "4", text: "Ventas"}
        ],
        selectedStatus: null,
        status: [
            {value: null, text: "Selecciona una opción"},
            {value: "1", text: "Activo"},
            {value: "2", text: "Inactivo"},
            {value: "3", text: "Pendiente"}
        ],
}
    },

    methods: {
        getImageUploaded() {
            var getImageUploaded = document.querySelector("#imageUploaded").value;
            //var imagePlacehold = document.querySelector(".card-img-top");
            $(".card-img-top").attr("src", getImageUploaded);

        },

        goBack() {
                window.history.back();
        }
    },
    mounted() {

    }
}
</script>
<style scoped>

</style>
