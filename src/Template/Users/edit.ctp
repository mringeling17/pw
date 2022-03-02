<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
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
            <h1 class="m-0 col-9 col-md-10 col-lg-11"><?=__('User');?></h1>
        </div><!-- /.row -->
    </div>
</section>

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header with-border">
                        <h3 class="card-title"><?php echo __('Form'); ?></h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <?php echo $this->Form->create($user, ['role' => 'form']); ?>
                    <div class="card-body">
                        <?php
                                echo $this->Form->control('name');
                                echo $this->Form->control('rut');
                                echo $this->Form->control('email');
                                echo $this->Form->control('password');
                        ?>
                    </div>
                    <!-- /.card-body -->

                    <?php echo $this->Form->submit(__('Submit')); ?>

                    <?php echo $this->Form->end(); ?>
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>
    <!-- /.row -->
</section>
