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
                                  <h3>Editar Administrador</h3>    

                                  <div id="edit-admin">
                                      <form action="../edit.php">
                                          <div class="card" style="width: 18rem;">
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
                                            <input type="name" class="form-control" id="nameInput" aria-describedby="name">
                                        </div>

                                        <div class="form-group">
                                            <label for="lastnameInput">Apellido</label>
                                            <input type="email" class="form-control" id="lastnameInput" aria-describedby="lastname">
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="emailInput">Correo</label>
                                            <input type="email" class="form-control" id="emailInput" aria-describedby="email">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Área</label>
                                            <b-form-select v-model="selected" :options="areas"></b-form-select>
                                        </div>

                                        <div class="form-group">
                                            <label for="statusInput">Estatus</label>
                                            <b-form-select v-model="selected" :options="status"></b-form-select>
                                        </div>

                                        <button type="button" @click="goBack()" class="btn btn-outline-primary">Cancelar</button>
                                        <button type="submit" class="btn btn-success">Guardar Cambios</button>
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
            text: 'View',
            href: '#'
          },
          
        ],
        selected: null,
        areas: [
            {value: null, text: "Selecciona una opción"},
            {value: "1", text: "Recursos Humanos"},
            {value: "2", text: "Logistica"},
            {value: "3", text: "Cobranza"},
            {value: "4", text: "Ventas"}
        ],
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