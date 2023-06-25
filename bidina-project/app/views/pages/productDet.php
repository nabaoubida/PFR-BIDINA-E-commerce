<?php require APPROOT . '/views/inc/header.php'; ?>
<?php require APPROOT . '/views/inc/navbar.php'; ?>

<div class="container  single-product my-5">
    <div class="row justify-content-center align-items-center">
        <div class="col-lg-6 col-sm-8 ">
            <img src="<?= URLROOT; ?>/public/img/imgProducts/<?= $data['products']->img; ?>" class="border p-3 border-dark border-2" style="width: 20rem; height: 25rem;" id="ProductImg">
        </div>

        <div class="col-lg-4 col-sm-8" style="padding-left: 40px;">
            <h1 class="fontliv"><?= $data['products']->titre; ?></h1>
            <h4 class="fonts text-secondary fw-lighter fonts" style="font-size: 17px;">All Prix</h4>
            <del class="fonts line" style="font-size: 17px;"><?= $data['products']->allPrix; ?> Dhs</del>
            <h4 class="fonts text-secondary fw-lighter fonts">Sold</h4>
            <h3 class="fonts"><?= $data['products']->sold; ?> Dhs</h3>

           

            <!-- crate form hiden -->
            <form method="post" action="<?= URLROOT; ?>/paniers/addToPanier">
                <input type="hidden" name="titre" value="<?= $data['products']->titre; ?>">
                <input type="hidden" name="img" value="<?= $data['products']->img; ?>">
                <input type="hidden" name="allPrix" value="<?= $data['products']->allPrix; ?>">
                <input type="hidden" name="sold" id="solde" value="<?= $data['products']->sold; ?>">
                <input type="hidden" name="id_product" value="<?= $data['products']->id_product; ?>">
                <input type="hidden" name="id_user" value="<?= $data['products']->id_user ?>">
                <div class="coun d-flex justify-content-around" style="margin: 18px 12px;">
                    <div class="btns btn" id="decrement" style="border: 1px solid #6c757d; background: #ee870d; color: #fff;">-</div>
                    <input id="counter" type="text" value="1" class="mt-1" name="quantity" style="width: 65px; text-align: center; border: 2px solid #ee870d;">
                    <div class="btns btn" id="increment" style="border: 1px solid #6c757d; background: #ee870d; color: #fff;">+</div>
                </div>

                <?php if (isset($_SESSION['user_id'])) : ?>
                    <input type="submit" name="submit" value="ADD TO CARD" class="batin p-3 border-0 text-light w-100">
                <?php else : ?>
                    <a class="batin position-relative p-3 border-0 text-light" style="top: 28px; width : 100%;" href="<?= URLROOT; ?>/users/signin">LOG IN TO ADD TO CART</a>
                <?php endif; ?>
            </form>
        </div>
    </div>
</div>
<script>
    let btnIncrement = document.getElementById('increment');
    let btnDecrement = document.getElementById('decrement');
    let counter = document.getElementById('counter');
    btnIncrement.addEventListener('click', function() {
        let value = parseInt(counter.value);
        if (value < 30) {
            value++;
            counter.value = value;
        }
    })
    btnDecrement.addEventListener('click', function() {
        let value = parseInt(counter.value);
        if (value > 1) {
            value--;
            counter.value = value;
        }
    })
</script>

<script>
    // let total = document.querySelector('#total');
    // let solde = document.querySelector("#solde")
    // total.innerText = solde.value;
    // btnIncrement.addEventListener("click", function() {
    //     total.innerText = parseFloat(total.innerText) + parseFloat(solde.value);
    // });
    // btnDecrement.addEventListener('click', function() {
    //     total.innerText = parseFloat(total.innerText) - parseFloat(solde.value);
    // })
   
</script>

<?php require APPROOT . '/views/inc/footer.php'; ?>