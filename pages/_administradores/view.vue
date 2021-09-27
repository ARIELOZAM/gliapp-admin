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
                                            <h5>Cheyenne Korsgaard</h5>
                                          </div>
                                        </div>
                                        <div class="row pb-2">
                                          <div class="col-md-4">
                                            <span class="text-muted">
                                              Nombre
                                            </span>
                                            <br>
                                            <span><strong>Cheyenne</strong></span>
                                          </div>
                                          <div class="col-md-4">
                                            <span class="text-muted">
                                              Apellido
                                            </span>
                                            <br>
                                            <span><strong>Korsgaard</strong></span>
                                          </div>
                                          <div class="col-md-4">
                                            <span class="text-muted">
                                              Correo Electronico
                                            </span>
                                            <br>
                                            <span><strong>correo@gmail.com</strong></span>
                                          </div>
                                        </div>

                                        <div class="row pt-2">
                                          <div class="col-md-4">
                                            <span class="text-muted">
                                              Área
                                            </span>
                                            <br>
                                            <span><strong>
                                              Recursos Humanos
                                            </strong></span>
                                          </div>
                                          <div class="col-md-4">
                                            <span class="text-muted">
                                              Estatus
                                            </span>
                                            <br>
                                            <span><strong>Activo</strong></span>
                                          </div>
                                          <div class="col-md-4">

                                          </div>
                                        </div>
                                        <hr>
                                        <a href="/administradores/edit" class="btn btn-secondary">Editar información</a>
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
