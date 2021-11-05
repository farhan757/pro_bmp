

<?php $__env->startSection('tittle_bar','Kandidat'); ?>

<?php $__env->startSection('content'); ?>
<div class="container">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Kandidat
            <small>Calon</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-user"></i> Kandidat</a></li>
            <li><a href="#" class="active">Calon</a></li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- /.box-body -->
        <form role="form" method="POST" action="<?php echo e(route('savequestkand')); ?>" class="form-horizontal">
            <?php echo csrf_field(); ?>
            <div class="box-body">
                <?php $__currentLoopData = $kandidat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <input type="hidden" id="idkandidat[]" name="idkandidat[]" value="<?php echo e($val->kandidat_id); ?>" />
                <div class="col-md-4">
                    <!-- Widget: user widget style 1 -->
                    <div class="box box-widget widget-user">
                        <!-- Add the bg color to the header using any of the bg-* classes -->
                        <div class="widget-user-header bg-aqua-active">
                            <h3 class="widget-user-username"><?php echo e($val->nama_kandidat); ?></h3>
                            <!--<h5 class="widget-user-desc">Founder &amp; CEO</h5>-->
                        </div>
                        <div class="widget-user-image">
                            <img class="img-circle btn" data-toggle="modal" data-target="#modal-default<?php echo e($val->kandidat_id); ?>" src="<?php echo e($val->photo); ?>" alt="User Avatar" />
                        </div>
                        <div class="box-footer">
                            <labe><input type="radio" name="kandidat[]" value="<?php echo e($val->kandidat_id); ?>">Pilih</labe>
                            <!-- /.row -->
                        </div>
                    </div>
                    <!-- /.widget-user -->
                </div>
                <!-- /.col -->
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <!-- /.box-body -->

            <div class="footer">
                <button type="submit" class="btn btn-primary pull-right" value="submit" id="submit" name="submit"><span class="fa fa-send"></span> Submit</button>
            </div>
        </form>
    </section>
    <!-- /.content -->
</div>
<!-- /.container -->

<?php $__currentLoopData = $kandidat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="modal fade" id="modal-default<?php echo e($val->kandidat_id); ?>">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"><?php echo e($val->nama_kandidat); ?></h4>
            </div>
            <div class="modal-body">
                <p style="text-align: center;"><img src="<?php echo e($val->photo); ?>" width="35%" style="align-content: center;" alt="User Avatar" /></p>
                <label><strong>Visi</strong></label>
                <p style="text-align: justify;"><?php echo e($val->visi); ?></p>
                <label><strong>Misi</strong></label>
                <p style="text-align: justify;"><?php echo e($val->misi); ?></p>
            </div>
            <div class="modal-footer">
                
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pro_bmp\resources\views/kandidat/data.blade.php ENDPATH**/ ?>