        <?php require_once APPROOT . "/views/inc/headerDash.php" ?>
            

            <div class="container-fluid">
                <div class="titl d-flex justify-content-between align-items-center">
                    <h3 class="mt-4">Simple Poduct</h3>
                    <a class="add-pro" href="<?= URLROOT; ?>/dashAdmProd/addProd" >Add Product &emsp; <i class="fas fa-plus-circle"></i></a>
                </div>
                  <div class="" >
                      
                    <div class="card card-body border-0 p-0">
                        <section style="background-color: #eee;">
                            <div class="container-fluid">
                                <h3 class="text-center p-2">The Categories</h3>
                                <?php //foreach($data['categoris'] as $categorie ): ?>
                                <div class="d-flex justify-content-around">
                                    <div class="d-block text-center">
                                        <h6 class="name fw-bold fs-5">Tables</h6>
                                        <p class="count fs-5"><?= $data['categoris']?></p>
                                    </div>
                                    <div class="d-block text-center">
                                        <h6 class="name fw-bold fs-5">Biblioteques</h6>
                                        <p class="count fs-5"><?= $data['categoris2']?></p>
                                    </div>
                                    <div class="d-block text-center" >
                                        <h6 class="name fw-bold fs-5">Poufs</h6>
                                        <p class="count fs-5"><?= $data['categoris1']?></p>
                                    </div>
                                    <div class="d-block text-center" >
                                        <h6 class="name fw-bold fs-5">Chaises</h6>
                                        <p class="count fs-5"><?= $data['categoris4']?></p>
                                    </div>
                                    <div class="d-block text-center" >
                                        <h6 class="name fw-bold fs-5">Soucles</h6>
                                        <p class="count fs-5"><?= $data['categoris3']?></p>
                                    </div>
                                </div>
                                <?php //endforeach; ?> 
                            </div>
                        </section>
                    </div>
                  </div>
                  
                <section>
                    <div class="table-responsive" style="max-height:415px;">
                        <table class="table table-striped align-middle">
                            <thead>
                              <tr>
                                <th class="">Img Produit</th>
                                <th class="">Titre Produit</th>
                                <th class="">All Price</th>
                                <th class="">Sold</th>
                                <th class="">Remise</th>
                                <th class="">New</th>
                                <th class="">categorises</th>
                                <th class="">Action</th>
                              </tr>
                            </thead>
                            <tbody>
                                <?php
                                    foreach($data['products'] as $product) :
                                ?>
                              <tr>
                                <td><img class="prod-dash" style="width: 50px; height=: 50px;" src="<?= URLROOT; ?>/public/img/imgProducts/<?= $product -> img; ?>" alt="produit-1"></td>
                                <td><?php echo $product -> titre ?></td>
                                <td><?php echo $product -> allPrix ?> <span class="fw-bold" style="font-size: 10px;">$</span></td>
                                <td><?php echo $product -> sold ?> <span class="fw-bold" style="font-size: 10px;">$</span></td>
                                <td><?php echo $product -> remise ?> <span class="fw-bold" style="font-size: 10px;">%</span></td>
                                <td><?php echo $product -> new ?></td>
                                <td><?php echo $product -> categoris ?></td>
                                <td>
                                    <a href="<?= URLROOT; ?>/dashAdmProd/editeProd/<?php echo $product -> id_product ?>" class="fs-5 add text-decoration-none me-2" title="Edite"><i class="fas fa-edit"></i></a>
                                    <a href="<?= URLROOT; ?>/dashAdmProd/deleteProd/<?php echo $product -> id_product ?>" class="fs-5 delete text-decoration-none" title="Delete"><i class="fas fa-backspace"></i></a>
                                </td>
                              </tr>
                              <?php endforeach; ?>
                            </tbody>
                          </table>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <?php require_once APPROOT . "/views/inc/footerDash.php" ; ?>