<?php require APPROOT . '/views/inc/header.php'; ?>
    <div class="container-fluid p-0 text-center ">
        <div class="signin container-fluid">
            <h2 class="">CONTACT US</h2>
            <div class="list">
                <ul class="list-all p-0">
                    <li class="list-a"><a href="<?= URLROOT; ?>">home </a></li>
                    <li class="list-a">/</li>
                    <li class="list-a list-b"> contact</li>
                </ul>
            </div>
        </div>
    </div>

    <div class=" card border-0 p-4 m-5 col-lg-5 col-md-6 col-sm-7 mx-auto">
        <div class="signin-a card-body row">
            <form action="<?= URLROOT; ?>/pages/contact" method="POST">
                <div class="name mb-3 d-flex flex-column justify-content-between flex-md-row flex-lg-row">
                    <div class="mb-3">
                        <label for="yourName" class="form-label ">Your Name <span class="text-danger fs-5">*</span></label>
                        <input type="text" name="yourName" placeholder="Enter Your Name" class="form-control <?= (!empty($data['yourName_err'])) ? 'is-invalid' : ''; ?>" value="<?= $data['yourName']; ?>">
                        <span class="invalid-feedback"><?php echo $data['yourName_err']; ?></span>
                    </div>
                    <div class="mb-3">
                        <label for="subject" class="form-label ">Subject <span class="text-danger fs-5">*</span></label>
                        <input type="text" name="subject" placeholder="Enter your subject" class="form-control <?= (!empty($data['subject_err'])) ? 'is-invalid' : ''; ?>" value="<?= $data['subject']; ?>">
                        <span class="invalid-feedback"><?= $data['subject_err'] ?></span>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label ">Email <span class="text-danger fs-5">*</span></label>
                    <input type="email" name="email" placeholder="Enter your email" class="form-control <?= (!empty($data['email_err'])) ? 'is-invalid' : ''; ?>" value="<?= $data['email']; ?>">
                    <span class="invalid-feedback"><?= $data['email_err'] ?></span>
                </div>
                <div class="w-100">
                    <label for="message" class="form-label ">Message <span class="text-danger fs-5">*</span></label>
                    <textarea name="message" id="message" rows="4" placeholder="Enter Your Message" class="form-control <?= (!empty($data['message_err'])) ? 'is-invalid' : ''; ?>" value="<?= $data['message']; ?>"></textarea>
                    <span class="invalid-feedback"><?= $data['message_err'] ?></span>
                </div>


                <input class="buton btn btn-lg w-100 text-white mt-4" type="submit" name="submit" value="Envoyer">

            </form>
            <!-- bay bay alert confirmation form -->
            <script>
                if (window.history.replaceState) {
                    window.history.replaceState(null, null, window.location.href);
                }
            </script>
        </div>
    </div>

<?php require APPROOT . '/views/inc/footer.php'; ?>