<?php
include "./views/layouts/nav.php";
require "./url/url.php";
?>

<section class="welcome text-center d-flex flex-column align-items-center justify-content-center">
    <p>Bienvenido a <br><strong>SG Barber</strong></p>
    <a name="" id="" class="btn btn-primary" href="<?php $url ?>quienesSomos.php" role="button">¿Quienes somos?</a>
</section>

<section class="sectionServicios">

    <h3 class="text-center">SERVICIOS</h3>

    <div class="servicios">
        <div class="card">
            <img class="card-img-top imgServicios" src="./views/img/servicios/corteCabello.jpg" alt="Cortes">
            <div class="card-body">
                <h4 class="card-title">Cortes</h4>
                <a name="" id="" class="btn btn-primary" href="#" role="button">Ver mas...</a>
            </div>
        </div>
        <div class="card">
            <img class="card-img-top imgServicios" src="./views/img/servicios/tinturaCabello.jpg" alt="Tintes">
            <div class="card-body">
                <h4 class="card-title">Tintes</h4>
                <a name="" id="" class="btn btn-primary" href="#" role="button">Ver mas...</a>
            </div>
        </div>
        <div class="card">
            <img class="card-img-top imgServicios" src="./views/img/servicios/corteBarba.jpg" alt="Barba">
            <div class="card-body">
                <h4 class="card-title">Barba</h4>
                <a name="" id="" class="btn btn-primary" href="#" role="button">Ver mas...</a>
            </div>
        </div>
        <div class="card">
            <img class="card-img-top imgServicios" src="./views/img/servicios/cuidadoCara.jpg" alt="Rostro">
            <div class="card-body">
                <h4 class="card-title">Rostro</h4>
                <a name="" id="" class="btn btn-primary" href="#" role="button">Ver mas...</a>
            </div>
        </div>
    </div>

</section>

<section class="sectionTestimonios">
    <h3 class="text-center">TESTIMONIOS</h3>

    <div class="testimonios bg-testimonios">
        <!-- <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
            <ol class="carousel-indicators">
                <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active" aria-current="true" aria-label="First slide"></li>
                <li data-bs-target="#carouselId" data-bs-slide-to="1" aria-label="Second slide"></li>
                <li data-bs-target="#carouselId" data-bs-slide-to="2" aria-label="Third slide"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <img src="holder.js/900x500/auto/#777:#555/text:First slide" class="w-100 d-block" alt="First slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h3>Title</h3>
                        <p>Description</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="holder.js/900x500/auto/#666:#444/text:Second slide" class="w-100 d-block" alt="Second slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h3>Title</h3>
                        <p>Description</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="holder.js/900x500/auto/#666:#444/text:Third slide" class="w-100 d-block" alt="Third slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h3>Title</h3>
                        <p>Description</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div> -->
        <div class="card card-testimonio">
            <img class="card-img-top" src="holder.js/100x180/" alt="Title">
            <div class="card-body">
                <h4 class="card-title">Nombres</h4>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam ab libero corporis sed eveniet earum ad dolore repudiandae at voluptates. Sunt fugiat cumque dolores modi a amet magni voluptate doloremque?</p>
            </div>
        </div>
        <div class="card card-testimonio">
            <img class="card-img-top" src="holder.js/100x180/" alt="Title">
            <div class="card-body">
                <h4 class="card-title">Nombres</h4>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam ab libero corporis sed eveniet earum ad dolore repudiandae at voluptates. Sunt fugiat cumque dolores modi a amet magni voluptate doloremque?</p>
            </div>
        </div>
        <div class="card card-testimonio">
            <img class="card-img-top" src="holder.js/100x180/" alt="Title">
            <div class="card-body">
                <h4 class="card-title">Nombres</h4>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam ab libero corporis sed eveniet earum ad dolore repudiandae at voluptates. Sunt fugiat cumque dolores modi a amet magni voluptate doloremque?</p>
            </div>
        </div>

    </div>

</section>

<?php
include "./views/layouts/footer.php"
?>