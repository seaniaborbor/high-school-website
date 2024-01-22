<div class="table-responsive">
      <table id="example" class="table table-sm table-striped border">
        <thead>
            <tr class="bg-light text-dark">
                <td></td>
                <td>
                    Staff Full Name 
                </td>
                <td>
                    Position 
                </td>
                <td>
                    Qualification
                </td>
                <td>
                    Category
                </td>
                <td width="150">
                    Last Updated
                </td>
                <td width="100">
                    Edit
                </td>
                <td width="100">
                    Delete
                </td>
            </tr>
        </thead>
        <tbody>
            <?php if(isset($all_staff)): ?>
            <?php $counter = 1; ?>
            <?php foreach($all_staff as $bp) : ?>
                <tr>
                    <td>
                        <img src='<?=base_url('public_assets/img/staff/'.$bp['profileImg'])?>' style="width:70px; height:50px"> 
                    </td>
                    <td><?=$bp['fullName']?></td>
                    <td><?=$bp['position']?></td>
                    <td><?=$bp['qualification']?></td>
                    <td><?=$bp['posCategory']?> Staff</td>
                    <td><?= substr($bp['createdAt'], 0,10) ?></td>
                    <td><a href="<?=base_url('/dashboard/edit/staff/'.$bp['id'])?>" class="btn btn-sm btn-success w-100"> View/Edit </a></td>
                    <td><a href="<?=base_url('/dashboard/delete/staff/'.$bp['id'])?>" class="btn btn-sm btn-danger w-100"><i class="bi bi-trash"></i> Delete </a></td>
                </tr>
                <?php $counter++?>
            <?php endforeach ?>
            <?php endif ?>
        </tbody>
    </table>
</div>