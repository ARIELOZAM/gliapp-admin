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
                          <div class="row px-5">
                              <div class="col-md-4 col-offset-8">
                                  <h3>Perfil de Administrador</h3>

                                  <div id="edit-admin">
                                      <form action="/">
                                          <div class="card">
                                        <img src="https://via.placeholder.com/128x80" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title"></h5>
                                            <p class="card-text">Arrastra tu archivo o</p>

                                    <div class="form-group inputDnD">
                                        <label class="sr-only" for="inputFile">File Upload</label>
                                        <input type="file" class="form-control-file text-primary font-weight-bold" id="inputFile" accept="image/*" onchange="readUrl(this)" data-title="Drag and drop a file">
                                        <br>
                                        <button type="button" class="btn btn-outline-primary btn-block" onclick="document.getElementById('inputFile').click()">Seleccionar</button>
                                        </div>
                                        </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="nameInput">Nombre (s)</label>
                                            <input type="text" class="form-control" id="nameInput" aria-describedby="name" placeholder="Nombre (s)">
                                        </div>

                                        <div class="form-group">
                                            <label for="lastnameInput">Apellido</label>
                                            <input type="text" class="form-control" id="lastnameInput" aria-describedby="lastname" placeholder="Apellidos">
                                        </div>

                                        <div class="form-group">
                                            <label for="emailInput">Correo</label>
                                            <input type="email" class="form-control" id="emailInput" aria-describedby="email" placeholder="Correo eléctronico">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Área</label>
                                            <b-form-select v-model="area" :options="areas"></b-form-select>
                                        </div>

                                        <div class="form-group">
                                            <label for="statusInput">Estatus</label>
                                            <b-form-select v-model="estatus" :options="status"></b-form-select>
                                        </div>

                                        <button type="button" @click="goBack()" class="btn btn-outline-primary">Cancelar</button>
                                        <button type="submit" class="btn btn-success">Agregar Administrador</button>
                                      </form>
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
            text: 'Añadir',
            href: '#'
          },

        ],
        area: null,
        areas: [
            {value: null, text: "Tipo de Área"},
            {value: "1", text: "Recursos Humanos"},
            {value: "2", text: "Logistica"},
            {value: "3", text: "Cobranza"},
            {value: "4", text: "Ventas"}
        ],
        estatus: null,
        status: [
            {value: null, text: "Estatus"},
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
.inputDnD .form-control-file {
  position: relative;
  width: 100%;
  height: 100%;
  min-height: 6em;
  outline: none;
  visibility: hidden;
  cursor: pointer;
  background-color: #c61c23;
  box-shadow: 0 0 5px solid currentColor;
}
.inputDnD .form-control-file:before {
  content: attr(data-title);
  position: absolute;
  top: 0.5em;
  left: 0;
  width: 100%;
  min-height: 6em;
  line-height: 2em;
  padding-top: 1.5em;
  opacity: 1;
  visibility: hidden;
  text-align: center;
  border: 0.25em dashed currentColor;
  transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
  overflow: hidden;
}
.inputDnD .form-control-file:hover:before {
  border-style: solid;
  box-shadow: inset 0px 0px 0px 0.25em currentColor;
}
</style>
