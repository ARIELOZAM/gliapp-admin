<template>
    <div id="sidebar">
        <!-- Sidebar-->
            <div class="border-right-0 bg-white" id="sidebar-wrapper">
                <div class="sidebar-heading border-bottom bg-light"><div class="text-center"><img src="/logo.png" class="img-fluid" alt="Logo Gli App"></div></div>
                <div class="list-group list-group-flush">
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!"><i class="far fa-user"></i> Administradores</a>
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
export default {}
</script>
<style>
#sidebar-wrapper {
  min-height: 100vh;
  margin-left: -15rem;
  transition: margin 0.25s ease-out;
}

#sidebar-wrapper .sidebar-heading {
  padding: 0.875rem 1.25rem;
  font-size: 1.2rem;
}

#sidebar-wrapper .list-group {
  width: 15rem;
}
body.sb-sidenav-toggled #wrapper #sidebar-wrapper {
  margin-left: 0;
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