<template>
    <div id="menu">
        <!-- Top navigation-->
                <nav class="navbar navbar-expand-lg navbar-green border-bottom">
                    <div class="container-fluid">
                       <button class="btn btn-light" id="sidebarToggle"><i class="fas fa-bars"></i></button>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item">
                                    <a class="nav-link pt-3 pr-3" href="#!">
                                        <i class="fas fa-search"></i>
                                    </a>
                                </li>
                                <li class="nav-item border-left border-light">
                                    <a class="nav-link" href="#!">
                                    <div class="media">
                                    <img src="https://via.placeholder.com/40" class="align-self-center mx-3 rounded-circle" alt="...">
                                    <div class="media-body">
                                        
                                        <h6 class="mt-0">Adrian Stefan <br>
                                        <small>Recursos Humanos</small></h6>
                                        
                                        
                                    </div>
                                    <span class="px-3 py-2"><i class="fas fa-sign-out-alt"></i></span>
                                    </div>
                                    </a>
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