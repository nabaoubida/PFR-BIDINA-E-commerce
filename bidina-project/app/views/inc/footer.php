            <footer>
                <div class="row container-fluid mt-4 mx-auto fatal p-5">
                    <div class="col-12 col-md-12 col-lg-3 mb-4">
                        <h5 class="">ABOUT US</h5>
                        <p class="about-text">Lorem ipsum dolor sit amet cons adipisicing elit sed do eiusm tempor
                            incididunt ut labor et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
                        <ul class="list-group list-group-light d-flex flex-row ">
                            <li class="list-group-item border-0 bg-transparent"><a class="text-decoration-none tarif" href="#"><i class="fab fa-facebook"></i></a></li>
                            <li class="list-group-item border-0 bg-transparent"><a class="text-decoration-none tarif" href="#"><i class="fab fa-twitter"></i></a></li>
                            <li class="list-group-item border-0 bg-transparent"><a class="text-decoration-none tarif" href="#"><i class="fab fa-linkedin"></i></a></li>
                            <li class="list-group-item border-0 bg-transparent"><a class="text-decoration-none tarif" href="#"><i class="fab fa-youtube"></i></a></li>
                            <li class="list-group-item border-0 bg-transparent"><a class="text-decoration-none tarif" href="#"><i class="fab fa-pinterest"></i></a></li>
                        </ul>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3 mb-4">
                        <h5 class="">INFORMATION</h5>
                        <ul class="list-group list-group-light d-flex flex-column ">
                            <li class="list-group-item border-0 bg-transparent"><a class="text-decoration-none tarif" href="#">About Us</a></li>
                            <li class="list-group-item border-0 bg-transparent"><a class="text-decoration-none tarif" href="#">Manufactures</a></li>
                            <li class="list-group-item border-0 bg-transparent"><a class="text-decoration-none tarif" href="#">Tracking Order</a></li>
                            <li class="list-group-item border-0 bg-transparent"><a class="text-decoration-none tarif" href="#">Privacy & Policy</a></li>
                            <li class="list-group-item border-0 bg-transparent"><a class="text-decoration-none tarif" href="#">Terms & Conditions</a></li>
                        </ul>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3 mb-4">
                        <h5 class="">MY ACCOUNT</h5>
                        <ul class="list-group list-group-light d-flex flex-column">
                            <li class="list-group-item border-0 bg-transparent"><a class="text-decoration-none tarif" href="#">Login</a></li>
                            <li class="list-group-item border-0 bg-transparent"><a class="text-decoration-none tarif" href="#">My Cart</a></li>
                            <li class="list-group-item border-0 bg-transparent"><a class="text-decoration-none tarif" href="#">Compare</a></li>
                            <li class="list-group-item border-0 bg-transparent"><a class="text-decoration-none tarif" href="#">My Account</a></li>
                        </ul>
                    </div>

                    <div class="col-12 col-md-6 col-lg-3">
                        <h5 class="pb-2">NEWSLETTER</h5>
                        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                        <input class="tanput bg-transparent p-2 w-100 mb-4" type="email" name="email" id="email" placeholder="Enter E-mail Adheres">
                        <button class="batin p-3 border-0 text-light"><i class="fas fa-paper-plane"></i> Subscribe</button>
                        </form>
                    </div>
                </div> 
               

                <div class="contaner-fluid text-white footr d-flex justify-content-around flex-column-reverse flex-lg-row p-2">
                    <div class="">
                        <p>&#169; 2023, Bidina. Made With <i class="fas fa-heart texta"></i> by <span class="cas">Nouhaila</span>
                        </p>
                    </div>
                    <div class="phato mb-3">
                        <img src="<?= URLROOT; ?>/img/image-2/75.png" alt="card">
                    </div>
                </div>
            </footer>
            <script src="<?= URLROOT; ?>js/main.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

            </body>
            </html>
            <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    
    // Validate email address
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format";
    } else {
        // Save the email address to a file or database
        // Here, I'm just appending it to a file called "subscribers.txt"
        $file = fopen("subscribers.txt", "a");
        fwrite($file, $email . PHP_EOL);
        fclose($file);
        
        echo "Subscription successful!";
    }
}
?>


