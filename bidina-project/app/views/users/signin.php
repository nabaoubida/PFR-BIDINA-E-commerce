<?php require APPROOT . '/views/inc/header.php'; ?>
    
    <main>
        <div class="container-fluid p-0 text-center">
            <div class="signin container-fluid">
                <h2 class="">LOGIN</h2>
                <div class="list">
                    <ul class="list-all p-0">
                        <li class="list-a"><a href="<?= URLROOT; ?>">home </a></li>
                        <li class="list-a">/</li>
                        <li class="list-a list-b"> signin</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class=" card border-0 p-4 m-5 col-lg-5 col-md-6 col-sm-7 mx-auto">
        
            <div class="signin-a card-body row">
                <form action="<?= URLROOT; ?>/users/signin" method="POST">
                    <div class="mb-3">
                        <label for="email" class="form-label">Email <span class="text-danger fs-5">*</span></label>
                        <input type="text" name="email"  placeholder="Enter your email" class="form-control <?= (!empty($data['email_err'])) ? 'is-invalid' : ''; ?>" value="<?= $data['email'] ?>">
                        <span class="invalid-feedback"><?= $data['email_err'] ?></span>
                    </div>
                    <div class="mb-4">
                        <label for="password" class="form-label">Password <span class="text-danger fs-5">*</span></label>
                        <input type="password" name="password" placeholder="Enter your password" class="form-control <?= (!empty($data['password_err'])) ? 'is-invalid' : ''; ?>" value="<?= $data['password'] ?>">
                        <span class="invalid-feedback"><?= $data['password_err'] ?></span>
                    </div>
                    <div class="form-check mb-3">
                    <input class="form-check-input" name="checked" type="checkbox" value="" id="flexCheckDefault" style="width: 20px; height: 20px; ">
                    <label class="form-check-label" for="flexCheckDefault">
                        I've read and accept the Privacy Policy
                    </label>
                </div>
                    <input class="buton btn btn-lg w-100 text-white" type="submit" name="submit" value="Sign In">

                    <div class="buton-a d-flex flex-column flex-lg-row flex-md-column justify-content-between py-3">
                        <a class=" udme udme-a d-inline-block" href="<?= URLROOT; ?>/users/signup">Create a account</a>
                        <a class=" udme udme-b" href="#">Forget Password?</a> 
                    </div>
                </form>
            </div>
        </div>
    </main>
    
<?php require APPROOT . '/views/inc/footer.php'; ?>
    
