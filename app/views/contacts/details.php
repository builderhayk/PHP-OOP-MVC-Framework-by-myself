<?php $this->setSiteTitle($this->contact->displayName()); ?>
<?php $this->start('body'); ?>
<div class="col-md-8 mx-auto card">
    <div class="col-1">
        <a href="<?= PROOT ?>contacts" class="btn btn-info btn-xs mt-4 float-left ">Back</a>
    </div>

    <h2 class="text-center" style="margin-top:-40px; "><?= $this->contact->displayName() ?></h2>
    <hr>
    <div class=" row card-body">
        <div class="col-md-6">
            <p>
                <span class="font-weight-bold">Email: </span>
                <?= $this->contact->email ?>
            </p>
            <p>
                <span class="font-weight-bold">Cell Phone: </span>
                <?= $this->contact->cell_phone ?>
            </p>
            <p>
                <span class="font-weight-bold">Home Phone: </span>
                <?= $this->contact->home_phone ?>
            </p>
        </div>
        <div class="col-md-6">
            <p><?=$this->contact->displayAddressLabel();?></p>
        </div>
    </div>
</div>
<?php $this->end(); ?>

