
<?php  
if($_SESSION['user_role'] == 'admin'){

?>
<?php require_once APPROOT . "/views/inc/headerDash.php" ?>

                <!-- Page content-->
                <div class="container">
                    <div class="row m-5">
                        <div class="col-12 col-lg-6 pb-sm-2">
                            <div class="categoris catego">
                                <div class="d-flex flex-column">
                                    <div class="categ-rr">
                                        <i class="fab fa-product-hunt fs-4"></i>
                                        <h5 class="pt-3">Produits</h5>
                                    </div>
                                    <div class="categ-rr">
                                        <h6 class="float-end fs-4"><?php echo $data['products']?></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6 pb-sm-2">
                            <div class="categoris catego">
                                <div class="d-flex flex-column">
                                    <div class="categ-rr">
                                        <i class="fas fa-user fs-4"></i>
                                        <h5 class="pt-3">Users</h5>
                                    </div>
                                    <div class="categ-rr">
                                        <h6 class="float-end fs-4"><?php echo $data['users']?></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6 pb-sm-2">
                            <div class="categoris catego">
                                <div class="d-flex flex-column">
                                    <div class="categ-rr">
                                        <i class="fas fa-comment fs-4"></i>
                                        <h5 class="pt-3">Message</h5>
                                    </div>
                                    <div class="categ-rr">
                                        <h6 class="float-end fs-4"><?php echo $data['messages']?></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6 pb-sm-2">
                            <div class="categoris catego">
                                <div class="d-flex flex-column">
                                    <div class="categ-rr">
                                        <i class="fas fa-dolly-flatbed fs-4"></i>
                                        <h5 class="pt-3">Commands</h5>
                                    </div>
                                    <div class="categ-rr">
                                        <h6 class="float-end fs-4"><?php echo $data['commands']?></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
       <?php require_once APPROOT . "/views/inc/footerDash.php" ; 
       
    }else{
        redirect('pages/index');
    }
       
       ?>