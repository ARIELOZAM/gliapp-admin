<template>
    <div id="admin">
        <div class="d-flex" id="wrapper">
            <Sidebar />
            <!-- Page content wrapper-->
            <div id="page-content-wrapper">
                <Navbar />
                <!-- Page content-->
                <div class="container-fluid px-0">
                    <b-breadcrumb :items="breadcrumbs"></b-breadcrumb>
                    <div id="admin-list" class="mostrar">
                        <h3>Administadores de Consola</h3>
                    <b-table responsive :items="items" id="myTable">
                        <template #cell(Administradores)="data">
                            <span v-html="data.value"></span>
                        </template> 
                        <template #cell(Estatus)="data">
                            <span v-html="data.value"></span>
                        </template>   
                        <template #cell(Detalles)="data">
                            <span v-html="data.value"></span>
                        </template>   
                        <template #cell(checkbox)="data">
                            <span v-html="data.value"></span>
                        </template> 
                    </b-table>   
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Eliminar Administrador</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <p>¿Estas Seguro de Eliminar a este admnistrador?</p>
        <div class="media">
  <img src="https://via.placeholder.com/64" class="rounded-circle mr-3" alt="...">
  <div class="media-body">
    <h5 class="mt-0">Gustavo Korsgaard</h5>
    <p>correo@gmail.com</p>
  </div>
</div>
      </div>
      <div class="modal-footer mx-auto">
        <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-success">Eliminar</button>
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
            href: '#'
          },
          {
            text: 'Administradores',
            href: '#'
          },
          
        ],
        items: [
          {
            checkbox: '<input type="checkbox" aria-label="Checkbox for following text input">',
            Administradores: '<img src="https://via.placeholder.com/32" class="rounded-circle" alt="..."> Gustavo Korsgaard',
            Área: 'Recursos Humanos',
            Correo: 'correo@gmail.com',
            Estatus: '<span class="badge badge-success">Activo</span>',
            Detalles: '<a href="/administradores/edit"><i class="far fa-edit"></i></a>' + ' <a href="#" data-toggle="modal" data-target="#exampleModal"><i class="far fa-trash-alt"></i></a>' + ' <a href="/administradores/view"><i class="far fa-eye"></i></a>'
          },
          {
            checkbox: '<input type="checkbox" aria-label="Checkbox for following text input">',
            Administradores: '<img src="https://via.placeholder.com/32" class="rounded-circle" alt="..."> Maria Dias',
            Área: 'Recursos Humanos',
            Correo: 'correo@gmail.com',
            Estatus: '<span class="badge badge-success">Activo</span>',
            Detalles: '<a href="/administradores/edit"><i class="far fa-edit"></i></a>' + ' <a href="#" data-toggle="modal" data-target="#exampleModal"><i class="far fa-trash-alt"></i></a>' + ' <a href="/administradores/view"><i class="far fa-eye"></i></a>'
            
          },
          {
            checkbox: '<input type="checkbox" aria-label="Checkbox for following text input">',
            Administradores: '<img src="https://via.placeholder.com/32" class="rounded-circle" alt="..."> Maren Staton',
            Área: 'Recursos Humanos',
            Correo: 'correo@gmail.com',
            Estatus: '<span class="badge badge-danger">Inactivo</span>',
            Detalles: '<a href="/administradores/edit"><i class="far fa-edit"></i></a>' + ' <a href="#" data-toggle="modal" data-target="#exampleModal"><i class="far fa-trash-alt"></i></a>' + ' <a href="/administradores/view"><i class="far fa-eye"></i></a>'
          }
        ]
        
    }
    
    },

    methods: {
        

        //Data tables
        dataTables() {
           
            $(document).ready( function () {
                $('#myTable').DataTable({  
                    "language": {
                        "lengthMenu": "Mostrar _MENU_ por página",
                        "zeroRecords": "No hay resultados",
                        "info": "Pagina _PAGE_ de _PAGES_",
                        "infoEmpty": "No records available",
                        "infoFiltered": "(filtered from _MAX_ total records)"
                    }      
                });

            } );
        },

        
    },

    mounted() {
        //this.toggleMenu();
        this.dataTables();
        //this.editAdmin();
    }
}
</script>
<style scoped>

</style>