<?php $this->start('body');
$x = 1 ?>
<h1 class="text-center">My Contacts</h1>
<div class="container">
    <div class="row">
        <table class="table table-striped table-hover table-bordered table-condensed">
            <thead>
            <th scope="col"></th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Cell Phone</th>
            <th scope="col">Home phone</th>
            <th scope="col">Work Phone</th>
            <th scope="col"></th>
            </thead>
            <tbody>
            <?php foreach ($this->contacts as $contact): ?>

                <tr>
                    <td role="row"><strong><?=$x ?>)</strong></td>
                    <td>
                        <a href="<?= PROOT ?>contacts/details/<?= $contact->id ?>">
                            <?= $contact->displayName(); ?>
                        </a>
                    </td>
                    <td><?= $contact->email; ?></td>
                    <td><?= $contact->address; ?></td>
                    <td><?= $contact->home_phone; ?></td>
                    <td><?= $contact->cell_phone; ?></td>
                    <td>
                        <a href="<?=PROOT?>contacts/edit/<?=$contact->id?>" class="btn btn-info btn-sm"><i class="fas fa-pencil-alt" ></i> Edit</a>

                        <a onclick="if(!confirm('Are you sure?')){return false;}" href="<?=PROOT?>contacts/delete/<?=$contact->id?>" class="btn w-auto btn-danger btn-sm"><i class="fas fa-trash-alt" ></i> Delete</a>

                    </td>
                </tr>
                <?php $x++ ?>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
<?php $this->end(); ?>

