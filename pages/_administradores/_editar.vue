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
}
    }
}
</script>
