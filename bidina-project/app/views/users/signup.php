<?php require APPROOT . '/views/inc/header.php'; ?>
<main>
    <div class="container-fluid p-0 text-center">
        <div class="signin container-fluid">
            <h2 class="">CREATE ACCOUNT</h2>
            <div class="list">
                <ul class="list-all p-0">
                    <li class="list-a"><a href="<?= URLROOT; ?>">home </a></li>
                    <li class="list-a">/</li>
                    <li class="list-a list-b"> signup</li>
                </ul>
            </div>
        </div>
    </div>
    <div class=" card border-0 p-4 m-5 col-lg-5 col-md-6 col-sm-7 mx-auto">
        <div class="signin-a card-body row">
            <form action="<?= URLROOT; ?>/users/signup" method="POST">
                <div class="mb-3">
                    
                        <label for="fullName" class="form-label ">Full Name <span class="text-danger fs-5">*</span></label>
                        <input type="text" name="fullName" placeholder="Enter Full Name" class="form-control <?= (!empty($data['fullName_err'])) ? 'is-invalid' : ''; ?>" value="<?= $data['fullName']; ?>">
                        <span class="invalid-feedback"><?php echo $data['fullName_err']; ?></span>
                  
                   
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label ">Email <span class="text-danger fs-5">*</span></label>
                    <input type="email" name="email"   placeholder="Enter your email" class="form-control <?= (!empty($data['email_err'])) ? 'is-invalid' : ''; ?>"  value="<?= $data['email']; ?>">
                    <span class="invalid-feedback"><?= $data['email_err'] ?></span>
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label ">Phone <span class="text-danger fs-5">*</span></label>
                    <input type="text"  name="phone" placeholder="Enter your Phone" class="form-control <?= (!empty($data['phone_err'])) ? 'is-invalid' : ''; ?>"  value="<?= $data['phone']; ?>">
                    <span class="invalid-feedback"><?= $data['phone_err'] ?></span>
                </div>
                <div class="mb-3">
                    <label for="adress" class="form-label ">Adress <span class="text-danger fs-5">*</span></label>
                    <input type="text"  name="adress" placeholder="Enter your adress" class="form-control <?= (!empty($data['adress_err'])) ? 'is-invalid' : ''; ?>"  value="<?= $data['adress']; ?>">
                    <span class="invalid-feedback"><?= $data['adress_err'] ?></span>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label ">Password <span class="text-danger fs-5">*</span></label>
                    <input type="password"  name="password" placeholder="Enter your password" class="form-control <?= (!empty($data['password_err'])) ? 'is-invalid' : ''; ?>"  value="<?= $data['password']; ?>">
                    <span class="invalid-feedback"><?= $data['password_err'] ?></span>
                </div>
                <div class="mb-3">
                    <label for="confirm_password'" class="form-label ">Confirm Password <span class="text-danger fs-5">*</span></label>
                    <input type="password"  name="confirm_password" placeholder="Confirm Password" class="form-control <?= (!empty($data['confirm_password_err'])) ? 'is-invalid' : ''; ?>"  value="<?= $data['confirm_password']; ?>">
                    <span class="invalid-feedback"><?= $data['confirm_password_err'] ?></span>
                </div>
                
                <input class="buton btn btn-lg w-100 text-white mt-4" type="submit" name="submit" value="Sign Up">
                <div class="buton-a d-flex flex-column flex-lg-row flex-md-column justify-content-between py-3">
                    <a class=" udme udme-a d-inline-block w-100" href="<?= URLROOT; ?>/users/signin">Already have a account?</a>
                </div>
            </form>
            <!-- bay bay alert confirmation form -->
            <script>
                if(window.history.replaceState) {
                window.history.replaceState(null , null ,window.location.href);
                 }
            </script>
        </div>
    </div>
</main>
<?php require APPROOT . '/views/inc/footer.php'; ?>