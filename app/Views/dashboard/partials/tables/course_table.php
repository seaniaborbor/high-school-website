<div class="table-responsive">
      <table id="example" class="table table-sm table-striped border">
        <thead>
            <tr class="bg-light text-dark">
                <td></td>
                <td>Title</td>
                <td width="150">Last Updated</td>
                <td width="150">View</td>
                <td width="100">Edit</td>
                <td width="100">Delete</td>
            </tr>
        </thead>
        <tbody>
            <?php if(isset($aall_courses)): ?>
            <?php $counter = 1; ?>
            <?php foreach($aall_courses as $courses) : ?>
                <tr>
                    <td>
                        <img src='<?=base_url('public_assets/img/cource/'.$courses['courseImage'])?>' style="width:70px; height:50px"> 
                    </td>
                    <td><?=$courses['courseTitle']?></td>
                    <td><?= substr($courses['courseCreatedAt'], 0,10) ?></td>
                    <td><a href="<?=base_url('dashboard/courses/'.$courses['courseId'])?>" class="btn w-100 btn-sm btn-success"><i class="bi bi-eye"></i> Preview</a></td>
                    <td><a href="<?=base_url('/dashboard/edit/courses/'.$courses['courseId'])?>" class="btn btn-sm btn-success w-100"><i class="bi bi-pencil"></i> Edit </a></td>
                    <td><a href="<?=base_url('/dashboard/delete/courses/'.$courses['courseId'])?>" class="btn btn-sm btn-danger w-100"><i class="bi bi-trash"></i> Delete </a></td>
                </tr>
                <?php $counter++?>
            <?php endforeach ?>
            <?php endif ?>
        </tbody>
    </table>
</div>