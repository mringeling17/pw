<?php
// Setting Meta TITLE for better navigation
$this->assign('title', __('User'));

// Setting Custom JS for this screen
$this->assign('page_js', []);

// Setting custom css classs name for this screen
$this->assign('custom_css_name', '');
?>

<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <h1 class="m-0 col-9 col-md-10 col-lg-11"><?=__('Users');?></h1>
            <div class="col-3 col-md-2 col-lg-1  text-right"><?php echo $this->Html->link(__('New'), ['action' => 'add'], ['class' => 'btn btn-success btn']) ?></div>
        </div><!-- /.row -->
    </div>
</section>

<!-- Main content -->
<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card ">
                    <!-- /.card-header -->
                    <div class="card-body p-3">
                        <table class="table table-responsive table-hover defaultDataTable">
                            <thead>
                            <tr>
                                                                    <th scope="col"><?= __('id'); ?></th>
                                                                    <th scope="col"><?= __('name'); ?></th>
                                                                    <th scope="col"><?= __('rut'); ?></th>
                                                                    <th scope="col"><?= __('email'); ?></th>
                                                                    <th scope="col"><?= __('password'); ?></th>
                                                                <th scope="col" class="actions text-center"></th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($users as $user): ?>
                            <tr>
                                                                                                                                                                                                                                                                        <td><?= $this->Number->format($user->id) ?></td>
                                                                                                                                                                                                                                                                                                                                                    <td><?= h($user->name) ?></td>
                                                                                                                                                                                                                                                                                                                                                    <td><?= h($user->rut) ?></td>
                                                                                                                                                                                                                                                                                                                                                    <td><?= h($user->email) ?></td>
                                                                                                                                                                                                                                                                                                                                                    <td><?= h($user->password) ?></td>
                                                                                                                                                                            <td class="btn-group">
                                    <?= $this->Html->link('<i class="fas fa-eye"></i>', ['action' => 'view', $user->id], ['escape' => false, 'class'=>'btn btn-info btn-sm']) ?>
                                    <?= $this->Html->link('<i class="fas fa-pencil-alt"></i>', ['action' => 'edit', $user->id], ['escape' => false,'class'=>'btn btn-warning btn-sm']) ?>
                                    <?= $this->Form->postLink('<i class="fas fa-trash-alt"></i>', ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id), 'escape' => false, 'class'=>'btn btn-danger btn-sm']) ?>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- /.card-body -->
        </div>
    </div>
    <!-- /.card -->
</section>