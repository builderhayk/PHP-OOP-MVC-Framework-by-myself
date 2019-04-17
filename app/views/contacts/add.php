<?php $this->setSiteTitle('Add A Contact'); ?>
<?php $this->start('body'); ?>
<div class="row">
    <div class="col-md-8 mx-auto card py-3">
        <h2 class="text-center">Add a Contact</h2>
    </div>
</div>
<hr>
<?php $this->partial('contacts','form')?>
<?php $this->end(); ?>


