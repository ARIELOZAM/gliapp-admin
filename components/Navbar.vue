<template>
    <div id="menu">
        <!-- Top navigation-->
                <nav class="navbar navbar-expand-lg navbar-green border-bottom">
                    <div class="container-fluid">
                       <button class="btn btn-light" id="sidebarToggle"><i class="fas fa-bars"></i></button>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ml-auto border-left border-light">
                                <li class="nav-item active">
                                    <div class="media">
                                    <img src="https://via.placeholder.com/40" class="align-self-center mx-3 border-radius" alt="...">
                                    <div class="media-body">
                                        <a class="nav-link" href="#!">
                                        <h6 class="mt-0">Nombre de usuario</h6>
                                        <p><small>Pocision del Usuario</small></p>
                                        
                                        </a>
                                    </div>
                                    <i class="fas fa-sign-out-alt"></i>
</div>
                                    </li>
                            </ul>
                        </div>
                    </div>
                </nav>
</div>
</template>

<script>


export default ({

})
</script>


<style>
.navbar-green {
    background-color: #4FB9BB;
    color: white;
}
.navbar-green a {
    color: white;
}

body a {
    color: #4FB9BB;
}
</style>