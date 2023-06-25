<?php require APPROOT . '/views/inc/header.php'; ?>
<?php require APPROOT . '/views/inc/navbar.php'; 
    // if(isset($_SESSION['']))
?>

<section class="my-5" style="background-color: #eee;">
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-4">
                <div class="card mb-4">
                    <div class="card-body text-center">
                        <img src="<?= URLROOT; ?>/img/image-2/3519275.jpg" alt="avatar" class="rounded-circle img-fluid" style="width: 150px;">
                        <!-- $$$$$$$$$$$$$$$$$$$$$$$$$  -->
                        <?php foreach($data['posts'] as $tab ) :  ?>
                        <h5 class="my-3 text-capitalize"><?php echo $tab -> fullName ?></h5>
                        <p class="text-muted mb-4"><?php echo $tab -> email; ?></p>
                        <div class="d-flex justify-content-center mb-2">
                            <button type="button" class="btn batin">Profile</button>
                            <a href="<?= URLROOT; ?>/profile/editeProfile/<?= $_SESSION['user_id'] ?>" type="button" class="btn ms-1" style="border: 1px solid #ee870d;">Edite Profile</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="card mb-4">
                    <div class="card-body p-0">
                        <div class="p-4" style="background-color: #ee870d;">
                            <p class="text-center">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Explicabo rem asperiores sunt deserunt quo placeat</p>
                        </div>
                        <div class="row p-2">
                            <div class="col-sm-3">
                                <p class="mb-0 ">First Name</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0 text-capitalize"><?php echo $tab -> fullName ; ?></p>
                            </div>
                        </div>
                        <hr>
                        <div class="row p-2">
                            <div class="col-sm-3">
                                <p class="mb-0">Email</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0"><?php echo $tab -> email ?></p>
                            </div>
                        </div>
                        <hr>
                        <div class="row p-2">
                            <div class="col-sm-3">
                                <p class="mb-0">Phone</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0"><?php echo $tab -> phone ?></p>
                            </div>
                        </div>
                        <hr>
                        <div class="row p-2">
                            <div class="col-sm-3">
                                <p class="mb-0 ">Adress</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0 text-capitalize"><?php echo $tab -> adress ?></p>
                            </div>
                        </div>
                        <hr>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach;?>
    </div>

   
</section>


<?php require_once APPROOT . "/views/inc/footerDash.php" ?>