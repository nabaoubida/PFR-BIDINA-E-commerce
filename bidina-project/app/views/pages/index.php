<?php require APPROOT . '/views/inc/header.php'; ?>
<?php require APPROOT . '/views/inc/navbar.php'; ?>

<main>

    <div id="carouselExampleIndicators" class="carousel slide d-flex align-items-center" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <!-- <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button> -->
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="container align-self-center">
                    <div class="row py-5">
                        <div class="col-lg-7 col-md-7 col-sm-7 align-self-center">
                            <div class="hero-slide-content slider-animated-1 animate__animated animate__backInDown">
                                <span class="fw-bold category">New Products</span>
                                <h2 class="title-1">Flexible Chair </h2>
                                <p class="w-75">Torem ipsum dolor sit amet, consectetur adipisicing elitsed do
                                    eiusmo tempor
                                    incididunt ut
                                    labore
                                    et dolore magna</p>
                                <a href="" class="btn btn-lg mt-5">Shop Now</a>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-5 col-sm-5 animate__animated animate__backInUp">
                            <div class="hero-slide-image">
                                <img class="w-100" src="<?= URLROOT; ?>/img/image-2/slider-2.png" alt="bidina">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container align-self-center">
                    <div class="row py-5">

                        <div class="col-lg-7 col-md-7 col-sm-7 align-self-center animate__animated animate__backInDown">
                            <div class="hero-slide-content slider-animated-1">
                                <span class="fw-bold category">New Products</span>
                                <h2 class="title-1">Flexible Chair </h2>
                                <p class="w-75">Torem ipsum dolor sit amet, consectetur adipisicing elitsed do
                                    eiusmo tempor
                                    incididunt ut
                                    labore
                                    et dolore magna</p>
                                <a href="" class="btn btn-lg mt-5">Shop Grid</a>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-5 col-sm-5 animate__animated animate__backInUp">
                            <div class="hero-slide-image">
                                <img class="w-100" src="<?= URLROOT; ?>/img/image-2/slider-1.png" alt="bidina">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev d-none d-lg-block" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next d-none d-lg-block" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div class="categ d-flex container justify-content-around flex-wrap">
        <div class="cat-item ">
            <div class="item-1">
                <img src="<?= URLROOT; ?>/img//image-2/1.png" alt="">
                <h6 class="py-3">Office Chair</h6>
            </div>
        </div>
        <div class="cat-item">
            <div class="item-1">
                <img src="<?= URLROOT; ?>/img//image-2/2.png" alt="">
                <h6 class="py-3">Book Shelf</h6>
            </div>
        </div>
        <div class="cat-item">
            <div class="item-1">
                <img src="<?= URLROOT; ?>/img//image-2/4.png" alt="">
                <h6 class="py-3">Reading Table</h6>
            </div>

        </div>
        <div class="cat-item">
            <div class="item-1">
                <img src="<?= URLROOT; ?>/img//image-2/5.png" alt="">
                <h6 class="py-3">Corner Table</h6>
            </div>
        </div>
    </div>

    <div class="mool">
        <div class="mool-1 text-center">
            <div class="sc-jlIlqL fFFrZj">
                <h2 class="titre-2">Our Products</h2>
                <p class="para-2">Lorem ipsum dolor sit amet, consectetur adipisicing elitsed do eiusmo tempor
                    incididunt ut labore</p>
            </div>
        </div>
        <div class="prud">
            <ul class="list-group list-group-flush flex-row justify-content-center py-4 list-unstyled">
                <li class=""><a class="text-decoration-none px-1 px-lg-4 px-3 text-dark " aria-current="true" href="#">New Arrival</a></li>
                <li class=""><a class="text-decoration-none px-1 px-lg-4 px-3 text-dark" href="#">Featured</a></li>
                <li class=""><a class="text-decoration-none px-1 px-lg-4 px-3 text-dark" href="#">On Sale</a></li>
                <li class=""><a class="text-decoration-none px-1 px-lg-4 px-3 text-dark" href="#">Tending</a></li>
            </ul>
        </div>

        <div class="row container-fluid">
            <?php
            foreach ($data['products'] as $product) :
            ?>
                <div class="col-md-3 col-sm-6">
                    <div class="product-grid">
                        <div class="product-image">
                            <a href="<?= URLROOT; ?>/productDet/productDet/<?= $product -> id_product ?>" class="image">
                                <!-- <span class="badge bg-success">Success</span> -->
                                <img class="img-1" style="width: 240px; height: 285px;" src="<?= URLROOT; ?>/public/img/imgProducts/<?= $product -> img; ?>">
                                <div class="kiaa position-absolute">
                                    <?php if (($product->remise) == '0') { ?>
                                        <span class="remise position-relative d-none"></span>
                                    <?php } else { ?>
                                        <span class="remise position-relative">-<?= $product->remise ?>%</span>
                                    <?php } ?>
                                    <?php if (($product->new) == 'new') { ?>
                                        <span class="position-relative new"><?= $product->new ?></span>
                                    <?php } else { ?>
                                        <span class="position-relative new d-none"></span>
                                    <?php } ?>
                                </div>
                            </a>
                            <ul class="product-links">
                                <!-- <li><a href="#"><i class="fas fa-shopping-cart"></i></a></li> -->
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="<?= URLROOT; ?>/productDet/productDet/<?= $product -> id_product ?>"><i class="fa fa-eye"></i></a></li>
                                <li>
                                    <button type="button " class="btn btn-secondary btn-exept batn d-none d-lg-block d-md-none">
                                        <a class="exept" href="<?= URLROOT; ?>/productDet/productDet/<?= $product -> id_product ?>">
                                            View Product
                                        </a>
                                    </button>
                                </li>
                            </ul>
                        </div>
                        <div class="product-content">
                            <h2 class="title"><?= $product->titre ?></h2>
                            <div class="price"><?= $product->sold ?> Dhs &emsp;<del class="text-secondary"><?= $product->allPrix ?></del> Dhs</div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
            <a href="<?= URLROOT ?>/pages/viewAll" class="batin view-all p-3 border-0 text-light">View All Products</a>
        </div>


        <div class="container mt-4">
            <div class="raw d-flex flex-column flex-lg-row flex-md-column slider-animated-1">
                <div class="azza animate__animated animate__backInLeft">
                    <a href="#">
                        <img class="phata w-100" src="<?= URLROOT; ?>/img/image-2/Capture.PNG" alt="" srcset="">
                    </a>
                </div>
                <div class="azza animate__animated animate__backInRight">
                    <a href="#">
                        <img class="phata w-100" src="<?= URLROOT; ?>/img/image-2/Capture1.PNG" alt="" srcset="">
                    </a>
                </div>
            </div>
        </div>

</main>


<?php require APPROOT . '/views/inc/footer.php'; ?>