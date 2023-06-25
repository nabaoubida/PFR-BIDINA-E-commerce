
    <header>
         <div class="into d-lg-flex justify-content-between align-items-center p-2 px-5 d-none">
            <div class="intro-para">
             <p class="m-0 fst-italic">Welcome to the best site for selling handicraft products</p> 
            </div>
            <!-- <form action="language.php" method="POST">
    <div class="select">
        <select class="form-select selectA" name="language" aria-label="Default select example">
            <option value="1">English</option>
            <option value="2">Français</option>
            <option value="3">Arabic</option>
        </select>
    </div>
</form> -->


        </div> 
        <nav class="navbar navbar-expand-lg navbar-light w-100" id="topp">
            <div class="container-fluid">
            <div class="row row-cols-lg-2 justify-content-around align-items-center m-0 w-100 flex-wrap">
                <div class="col">
                    <a class="img " href="<?php echo URLROOT; ?>">
                        <img class=" image py-3" src="<?php echo URLROOT ?>/img/image-2/logo11.png" alt="logo bidina"></a>
                </div>
                <div class="col item-A">
                     <div class="icon d-flex align-items-center py-3 justify-content-around">
                     <button class="d-lg-none d-md-block d-block btn border-0 " type="button"
                            data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop"><i class="fas fa-search px-2 iconat"></i></button>
                        <div class="offcanvas offcanvas-top " tabindex="-1" id="offcanvasTop"
                            aria-labelledby="offcanvasTopLabel">
                            <div class="offcanvas-header justify-content-end">
                                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                            </div>
                            
                            <div class="offcanvas-body">
                                <div class="input-group">
                                    <input class="form-control border-end-0 border rounded-pill" type="text" placeholder="search" id="search">
                                    <span class="input-group-append">
                                        <button class="btn border-0 " type="button" id="btn">
                                            <i class="fas fa-search px-2 iconat"></i>
                                        </button>
                                    </span>
                                </div>
                            </div>
                        </div>
                        
                        
                        <div class="fs-6 user_button nav-item btn border-0"><i class="fas fa-user iconat"></i>
                            <div class="bg-user-down navbar-a p-3 ">
                                <ul class=" user_down  list-unstyled">
                                    <?php if(isset($_SESSION['user_id'])): ?>
                                    <li><a class="dropdown-item px-2 py-2 user-item" href="<?= URLROOT; ?>/profile/profile">profile</a></li>
                                        <li><a class="dropdown-item px-2 py-2 user-item" href="<?= URLROOT; ?>/users/logout">logout</a></li>
                                    <?php else :?>
                                        <li><a class="dropdown-item px-2 py-2 user-item" href="<?= URLROOT; ?>/users/signin">Sign In</a></li>
                                        <li><a class="dropdown-item px-2 py-2 user-item" href="<?= URLROOT; ?>/users/signup">Sign Up</a></li>
                                    <?php endif ?>
                                </ul>
                            </div>
                        </div>
                        <!-- panier -->
                        <a href="<?= URLROOT; ?>/pages/panier" class="btn border-0 position-relative" type="button">
                            <i class="fas fa-shopping-cart iconat"></i>
                            <span class="position-absolute top-0 translate-middle badge rounded-pill" style="z-index: 9999;"><?php echo (!isset($data['panier'])) ? ($data['paniers']) : '0' ?></span>
                        </a>
                    </div>
                </div>
                <div class="col d-lg-none d-block">
                    <button class="btn float-end" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
                        <span class="fa fa-bars"></span>
                    </button>
                </div>
                <div class="offcanvas offcanvas-start w-100" tabindex="-1" id="offcanvasExample"
                    aria-labelledby="offcanvasExampleLabel">
                    <div class="offcanvas-header">
                        <img class="w-25 image py-3" src="<?php echo URLROOT ?>/img/image/logo.png" alt="logo bidina">
                        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <div class="col p-lg-0 w-100">
                            <ul class="items p-3 d-flex align-lg-items-center justify-content-start justify-content-lg-center flex-column flex-lg-row list-unstyled">
                                <li class="item"><a href="<?= URLROOT; ?>" class="nav-item nav-link navbar-a  list-inline text-light">Home</a></li>
                                <li class="item"><a href="<?= URLROOT; ?>" class="nav-item nav-link navbar-a  text-light ">About Us</a></li>
                                <li class="item"><a href="<?= URLROOT; ?>/pages/gallery" class="nav-item nav-link navbar-a  text-light">Gallery</a></li> 
                                <li> <a href="<?= URLROOT; ?>/pages/contact" class="nav-item nav-link navbar-a  text-light">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </nav>
    </header>



