<?php require_once APPROOT . "/views/inc/headerDash.php" ?>
<div class="table-responsive" style="height: 38rem;">
    <table class="table align-middle mb-0 bg-white">
        <thead class="bg-light">
            <tr>
                <th>id Command</th>
                <th>produit</th>
                <th>prix</th>
                <th>Quantity</th>
                <th>id User</th>
                <th>id product</th>

            </tr>
        </thead>
        <tbody>
            <?php foreach ($data as $command) : ?>
                <tr>

                    <td>
                        <span class="badge badge-success rounded-pill d-inline"><?= $command->id_command ?></span>
                    </td>
                    <td>
                        <div class="d-flex align-items-center">
                            <img src="<?= URLROOT; ?>/public/img/imgProducts/<?= $command->img; ?>" alt="" style="width: 50px; height: 50px" class="rounded-circle" />
                            <div class="ms-3">
                                <p class="fw-bold mb-1"><?= $command->titre ?></p>
                            </div>
                        </div>
                    </td>
                    <td>
                        <p class="fw-normal mb-1 fw-bolder"><?= $command->prix ?> $</p>

                    </td>
                    <td>
                        <span class="badge badge-success rounded-pill d-inline"><?= $command->quantity ?></span>
                    </td>
                    <td>
                        <span class="badge badge-success rounded-pill d-inline"><?= $command->id_product ?></span>
                    </td>
                    <td>
                        <span class="badge badge-success rounded-pill d-inline"><?= $command->id_user ?></span>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?php require_once APPROOT . "/views/inc/footerDash.php"; ?>