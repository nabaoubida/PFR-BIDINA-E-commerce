<?php require_once APPROOT . "/views/inc/header.php" ?>
<div class="card border-0 m-5 col-lg-8 col-md-6 col-sm-7 mx-auto">
    <div class="card-body row">
        <div class="container p-4">
            <a href="<?= URLROOT; ?>/dashAdmProd/dashProd" class="btn batin rounded-pill p-3 w-25 btn-block mb-3">
                <i class="fa fa-backward"></i> <span class="fs-6">Back</span>
            </a>

            <form method="POST" action="<?= URLROOT; ?>/dashAdmProd/editeProd/<?= @$data['id_product'] ?>" enctype="multipart/form-data">

                <div class="form-group mb-4">
                    <label for="formFile" class="form-label">Choise Img Product</label>
                    <input type="file" id="formFile" name="img" class="form-control">
                </div>
                <div class="form-group mb-4">
                    <label for="titre">Title Product*</label>
                    <input type="text" name="titre" placeholder="Title Product" class="form-control <?= (!empty($data['error_titre'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['titre']; ?>">
                    <span class="invalid-feedback"><?= $data['error_titre'] ?></span>
                </div>
                <div class="form-group mb-4">
                    <label for="allPrix">Old Price*</label>
                    <input type="text" name="allPrix" placeholder="Old Price" class="form-control <?= (!empty($data['error_allPrix'])) ? 'is-invalid' : ''; ?>" value="<?= $data['allPrix']; ?>">
                    <span class="invalid-feedback"><?= $data['error_allPrix'] ?></span>
                </div>
                <div class="form-group mb-4">
                    <label for="sold">Sold*</label>
                    <input type="text" name="sold" placeholder="Sold" class="form-control <?= (!empty($data['error_sold'])) ? 'is-invalid' : ''; ?>" value="<?= $data['sold']; ?>">
                    <span class="invalid-feedback"><?= $data['error_sold'] ?></span>
                </div>
                <div class="form-group mb-4">
                    <label for="remise">Remise*</label>
                    <input type="text" name="remise" placeholder="Remise" class="form-control <?= (!empty($data['error_remise'])) ? 'is-invalid' : ''; ?>" value="<?= $data['remise']; ?>">
                    <span class="invalid-feedback"><?= $data['error_remise'] ?></span>
                </div>
                <div class="form-group mb-4">
                    <label>New</label>
                    <select class="form-control" name="new">
                        <option value="<?= $data['new']; ?>"><?= $data['new']; ?></option>
                        <option value="new">New</option>
                        <option value="old">Old</option>
                    </select>
                </div>
                <div class="form-group mb-4">
                    <label>Categoris*</label>
                    <select class="form-control" name="categoris">
                        <option value="<?= $data['categoris']; ?>"><?= $data['categoris']; ?></option>
                        <option value="Table">Table</option>
                        <option value="Chair">Chair</option>
                        <option value="Poufs">Poufs</option>
                        <option value="Bibliotéques">Biblioteque</option>
                        <option value="soucle">Soucle</option>
                    </select>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn batin rounded-pill p-3 w-25 btn-block" name="submit" value="Valider">
                </div>
            </form>
        </div>
    </div>
</div>
<?php require_once APPROOT . "/views/inc/footerDash.php" ?>