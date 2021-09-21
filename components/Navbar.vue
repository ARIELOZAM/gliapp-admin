<template>
    <div id="menu">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
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
.sidebar {
    position: fixed;
    height: 100vh;
    border-right: 1px solid gray;
    box-shadow: 0px 10px 15px rgba(0,0,0,0.3);
}
</style>