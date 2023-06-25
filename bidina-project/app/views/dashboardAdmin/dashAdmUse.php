<?php require_once APPROOT . "/views/inc/headerDash.php" ?>

<div class="container-fluid">
    <div class="titl d-flex justify-content-between align-items-center">
        <h2 class="my-4 ">Table User</h2>
    </div>

    <section>
        <div class="container">
            <div class="d-flex flex-wrap gap-3 justify-content-center">
                <?php foreach ($data['users'] as $user) : ?>
                    <div class="card" style="width: 16rem; border: 1px solid #ee870d;">
                        <div class="card-body">
                            <ul class="list-unstyled text-center fw-bold">
                                <li class="mb-2"><span class="float-start" style="color: #ff750d; font-size: 12px;">Id User&emsp;&emsp;</span><?php echo $user->id ?></li>
                                <li class="mb-2"><span class="float-start" style="color: #ff750d; font-size: 12px;">Name&emsp;&emsp;</span><?php echo $user->fullName ?></li>
                                <li class="mb-2"><span class="float-start" style="color: #ff750d; font-size: 12px;">Email&emsp;&emsp;</span><?php echo $user->email; ?></li>
                                <li class="mb-2"><span class="float-start" style="color: #ff750d; font-size: 12px;">Phone&emsp;&emsp;</span><?php echo $user->phone; ?></li>
                                <li class="mb-2"><span class="float-start" style="color: #ff750d; font-size: 12px;">Adress&emsp;&emsp;</span><?php echo $user->adress; ?></li>
                            </ul>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
</div>

<?php require_once APPROOT . "/views/inc/footerDash.php"; ?>