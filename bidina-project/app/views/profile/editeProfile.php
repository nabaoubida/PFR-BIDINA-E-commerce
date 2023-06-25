<?php require_once APPROOT . "/views/inc/head.php" ?>
<main>
    <div class=" card border-0 p-4 m-5 col-lg-5 col-md-6 col-sm-7 mx-auto">
        <div class="signin-a card-body row">
            <form action="<?= URLROOT; ?>/profile/editeProfile/<?= $data['id'] ?>" method="POST" onsubmit="validate()">
                <div class="mb-3">
                    <label for="fullName" class="form-label ">Full Name <span class="text-danger fs-5">*</span></label>
                    <input type="text" id="name" name="fullName" placeholder="Enter Full Name" class="form-control" value="<?php echo $data['fullName']; ?>">
                    <span id="name_err"></span>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label ">Email <span class="text-danger fs-5">*</span></label>
                    <input type="email" id="email" name="email" placeholder="Enter your email" class="form-control" value="<?php echo $data['email']; ?>">
                    <span id="email_err"></span>
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label ">Phone <span class="text-danger fs-5">*</span></label>
                    <input type="text" id="phone" name="phone" placeholder="Enter your Phone" class="form-control" value="<?php echo $data['phone']; ?>">
                    <span id="phone_err"></span>
                </div>
                <div class="mb-3">
                    <label for="adress" class="form-label ">Adress<span class="text-danger fs-5">*</span></label>
                    <input type="text" id="adress" name="adress" placeholder="Enter Last Name" class="form-control" value="<?php echo $data['adress']; ?>">
                    <span id="adress_err"></span>
                </div>
                <div class="d-flex justify-content-around align-items-center">
                    <div class="">
                        <input class="buton btn btn-lg text-white fs-5 valide" type="submit" id="submit" name="submit" value="Valide">
                    </div>
                    <div class="buton-a py-3">
                        <a class=" udme udme-a d-inline-block" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Back to the list" href="<?= URLROOT; ?>/profile/profile"><i class="fas fa-home"></i></a>
                    </div>
                </div>
            </form>
            <!-- bay bay alert confirmation form -->

        </div>
    </div>
</main>
<!-- <script src="<?= URLROOT; ?>/js/main.js"></script> -->
<?php require_once APPROOT . "/views/inc/footerDash.php" ?>