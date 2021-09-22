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

                    <div id="admin-edit" class="esconder">
            
                    </div>

                    <div id="admin-view" class="esconder">
                        
                    </div>

                    <div id="admin-add" class="esconder">
                        
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
            Detalles: '<a href="#!" class="editAdmin"><i class="far fa-edit"></i></span> <a href="#"><i class="far fa-trash-alt"></i></a> <a href="#"><i class="far fa-eye"></i></a>'
          },
          {
            checkbox: '<input type="checkbox" aria-label="Checkbox for following text input">',
            Administradores: '<img src="https://via.placeholder.com/32" class="rounded-circle" alt="..."> Maria Dias',
            Área: 'Recursos Humanos',
            Correo: 'correo@gmail.com',
            Estatus: '<span class="badge badge-success">Activo</span>',
            Detalles: '<a href="#"><i class="far fa-edit"></i></a> <a href="#"><i class="far fa-trash-alt"></i></a> <a href="#"><i class="far fa-eye"></i></a>'
            
          },
          {
            checkbox: '<input type="checkbox" aria-label="Checkbox for following text input">',
            Administradores: '<img src="https://via.placeholder.com/32" class="rounded-circle" alt="..."> Maren Staton',
            Área: 'Recursos Humanos',
            Correo: 'correo@gmail.com',
            Estatus: '<span class="badge badge-danger">Inactivo</span>',
            Detalles: '<a href="#"><i class="far fa-edit"></i></a> <a href="#"><i class="far fa-trash-alt"></i></a> <a href="#"><i class="far fa-eye"></i></a>'
          }
        ]
        
    }
    
    },

    methods: {
        toggleMenu() {
            
    // Toggle the side navigation
    $('#sidebarToggle').click(function(){
        $('body').toggleClass('sb-sidenav-toggled');
    });
        },

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

        editAdmin() {
            var getEditBtn = document.querySelector(".editAdmin");
            getEditBtn.addEventListener("click", function(){
                $("#admin-list").toggleClass("esconder");
                $("#admin-list").toggleClass("mostrar");
                $("#admin-edit").toggleClass("mostrar");
                $("#admin-edit").toggleClass("esconder");
            });
            
        }
    },

    mounted() {
        this.toggleMenu();
        this.dataTables();
        this.editAdmin();
    }
}
</script>
<style scoped>
#wrapper {
  overflow-x: hidden;
}

#page-content-wrapper {
  min-width: 100vw;
}

body.sb-sidenav-toggled #wrapper #sidebar-wrapper {
  margin-left: 0;
}
.esconder {
    display: none;
}

.mostrar {
    display: block;
}
@media (min-width: 768px) {
  #sidebar-wrapper {
    margin-left: 0;
  }

  #page-content-wrapper {
    min-width: 0;
    width: 100%;
  }

  body.sb-sidenav-toggled #wrapper #sidebar-wrapper {
    margin-left: -15rem;
  }
}
</style>