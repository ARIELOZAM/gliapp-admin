<template>
    <div id="sidebar">
        <!-- Sidebar-->
            <div class="border-right-0 bg-white" id="sidebar-wrapper">
                <div class="sidebar-heading border-bottom bg-light"><div class="text-center py-3"><img src="/logo.png" class="img-fluid" alt="Logo Gli App"></div></div>
                <div class="list-group list-group-flush">
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="/administradores/"><i class="far fa-user"></i> Administradores</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!"><i class="far fa-newspaper"></i> Catalogos</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!"><i class="fas fa-users"></i> Líderes</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!"><i class="fas fa-shopping-bag"></i> Usuarios</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!"><i class="fas fa-users"></i> Mi Empresa</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!"><i class="fas fa-apple-alt"></i> Cursos</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!"><i class="fas fa-shopping-bag"></i> Recompensas</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!"><i class="far fa-calendar-alt"></i> Eventos</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!"><i class="fas fa-exclamation-triangle"></i> Notificaciones</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!"><i class="fas fa-chart-area"></i> Reportes</a>
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
        toggleMenu() {
            
    // Toggle the side navigation
    $('#sidebarToggle').click(function(){
        $('body').toggleClass('sb-sidenav-toggled');
    });

        },
    },

    mounted() {
        this.toggleMenu();
    },
}
</script>
<style>

</style>