<?php require APPROOT . '/views/inc/head.php'; ?>
<?php require APPROOT . '/views/inc/navbar.php'; ?>

<div class="p-5">
    <div class="container-fluid">
        <a href="<?= URLROOT ?>/pages/viewAll" class="btn batin rounded-pill p-3 w-25 btn-block"> View ALL Products</a>
        <div class="row">
            <div class="col-lg-8 col-12 p-5 bg-white rounded shadow-sm mb-5">

                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col" class="border-0 bg-light">
                                    <div class="p-2 px-3 text-uppercase">Product</div>
                                </th>
                                <th scope="col" class="border-0 bg-light">
                                    <div class="py-2 text-uppercase">Price</div>
                                </th>
                                <th scope="col" class="border-0 bg-light">
                                    <div class="py-2 text-uppercase">Quantity</div>
                                </th>
                                <th scope="col" class="border-0 bg-light">
                                    <div class="py-2 text-uppercase">Remove</div>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($data['prods'] as  $panier) : ?>

                                <tr>
                                    <th scope="row">
                                        <div class="p-2">
                                            <img src="<?= URLROOT; ?>/public/img/imgProducts/<?= $panier->img; ?>" width="70" class="img-fluid rounded shadow-sm">
                                            <div class="ml-3 d-inline-block align-middle">
                                                <h5 class="mb-0"> <a href="<?= URLROOT; ?>/productDet/productDet/<?= $panier->id_product ?>" class="text-dark d-inline-block"><?= $panier->titre; ?></a></h5>
                                            </div>
                                        </div>
                                    <td class="align-middle sold"><strong><?= $panier->sold ?></strong></td>
                                    <td class="align-middle">
                                        <div class="coun d-flex justify-content-around" style="margin: 18px 12px;">
                                            <strong class="text-center"><?= $panier->quantity ?></strong>
                                        </div>
                                    </td>
                                    <td class="align-middle"><a href="<?= URLROOT; ?>/paniers/deleteProdFromPanier/<?= $panier->id_product ?>" class="text-dark"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                <!-- End -->
            </div>
            <div class="col-lg-4 col-12 p-5 bg-white rounded shadow-sm mb-5">

                <div class="bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold">Order summary </div>
                <div class="p-4">
                    <ul class="list-unstyled mb-4">
                        <?php
                        $total = 0;
                        $tva = 0;
                        foreach ($data['prods'] as $panier) {
                            $total += $panier->sold * $panier->quantity;
                            $tva = $total * 0.2;
                        }
                        ?>
                        <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Order Subtotal </strong><strong>$<?php echo ($total) ?? '0' ?></strong></li>
                        <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Tax</strong><strong>20 %</strong></li>
                        <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Total</strong>
                            <h5 class="font-weight-bold">$<?php echo $total + $tva ?? 0 ?></h5>

                        </li>
                    </ul>
                    <?php if (isset($_SESSION['user_id'])) : ?>
                        <a href="<?= URLROOT; ?>/commands/insertCommand" class="btn batin rounded-pill p-3 w-100 btn-block">Commander</a>
                    <?php endif; ?>
                </div>
            </div>
        </div>

    </div>
</div>

<?php require APPROOT . '/views/inc/footer.php'; ?>