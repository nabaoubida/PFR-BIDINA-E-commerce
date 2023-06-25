<?php require APPROOT . '/views/inc/header.php'; ?>

<main>

    <div class="container-fluid p-0 text-center">
        <div class="signin container-fluid">
            <h2 class="">VIEW ALL PRODUCT</h2>
            <div class="list">
                <ul class="list-all p-0">
                    <li class="list-a"><a href="<?= URLROOT; ?>">home </a></li>
                    <li class="list-a">/</li>
                    <li class="list-a list-b"> View ALL</li>
                </ul>
            </div>
        </div>
        <div class="container-fluid my-4">
        <div class="row container-fluid">
            <?php
            foreach ($data['products'] as $product) :
            ?>
                <div class="col-md-3 col-sm-6">
                    <div class="product-grid">
                        <div class="product-image">
                            <a href="<?= URLROOT; ?>/productDet/productDet/<?= $product -> id_product ?>" class="image">
                                <!-- <span class="badge bg-success">Success</span> -->
                                <img class="img-1" style="width: 227px; height: 267px;" src="<?= URLROOT; ?>/public/img/imgProducts/<?= $product -> img; ?>">
                                <div class="kiaa position-absolute">
                                    <?php if (($product->remise) == '0') { ?>
                                        <span class="remise position-relative d-none"></span>
                                    <?php } else { ?>
                                        <span class="remise position-relative">-<?= $product->remise ?>%</span>
                                    <?php } ?>
                                    <?php if (($product->new) == 'new') { ?>
                                        <span class="position-relative new"><?= $product->new ?></span>
                                    <?php } else { ?>
                                        <span class="position-relative new d-none"></span>
                                    <?php } ?>
                                </div>
                            </a>
                            <ul class="product-links">
                                <!-- <li><a href="#"><i class="fas fa-shopping-cart"></i></a></li> -->
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="<?= URLROOT; ?>/productDet/productDet"><i class="fa fa-eye"></i></a></li>
                                <li>
                                    <button type="button " class="btn btn-secondary btn-exept batn d-none d-lg-block d-md-none">
                                        <a class="exept" href="<?= URLROOT; ?>/productDet/productDet/<?= $product -> id_product ?>">
                                            View Product
                                        </a>
                                    </button>
                                </li>
                            </ul>
                        </div>
                        <div class="product-content">
                            <h2 class="title"><?= $product->titre ?></h2>
                            <div class="price"><?= $product->sold ?> MAD &emsp;<del class="text-secondary"><?= $product->allPrix ?></del> MAD</div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        </div>
</main>

<?php require APPROOT . '/views/inc/footer.php'; ?>