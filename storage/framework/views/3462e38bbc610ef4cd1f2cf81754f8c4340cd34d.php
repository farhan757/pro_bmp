

<?php $__env->startSection('tittle_bar','Question'); ?>

<?php $__env->startSection('content'); ?>
<div class="container">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Question
            <small>User</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-line-chart"></i> Question</a></li>
            <li><a href="#" class="active">User</a></li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- /.box-body -->
        <div class="box box-success">
            <div class="box-body">
                <form role="form" method="POST" action="<?php echo e(route('savequest')); ?>" class="form-horizontal">
                    <?php echo csrf_field(); ?>
                    <div class="box-body">
                        <table>
                            <thead style="height:35px; vertical-align: top; ">
                                <th>No</th>
                                <th>Question</th>
                            </thead>
                            <tbody>
                                <?php
                                $cntr=0;
                                ?>
                                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php
                                $cntr++;
                                ?>
                                <tr>
                                    <input type="hidden" id="idquestion[]" name="idquestion[]" value="<?php echo e($val->id); ?>">
                                    <td style="vertical-align: top; width: 25px;"><?php echo e($cntr); ?>.</td>
                                    <td><?php echo e($val->text_ques); ?>

                                        <div>
                                            <ol>
                                                <?php $__currentLoopData = $kand; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vk): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <li><?php echo e($vk->nama_kandidat); ?></li>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </ol>
                                        </div>
                                        <div id="<?php echo e($val->id); ?>" style="text-align: left; vertical-align: top; margin-bottom: 5%;">
                                            <input type="radio" name="<?php echo e($val->id); ?>[]" value="1" style="margin: 5px;"><strong>Setuju</strong></label>
                                            <input type="radio" name="<?php echo e($val->id); ?>[]" value="0" style="margin: 5px;"><strong>Tidak Setuju</strong></label>
                                        </div>
                                    </td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">
                        <a class="btn btn-info" href="<?php echo e(route('data')); ?>"><span class="fa fa-sign-out"></span>Kembali</a>
                        <button type="submit" class="btn btn-primary" value="submit" id="submit" name="submit"><span class="fa fa-send"></span> Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.container -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pro_bmp\resources\views/question/quest.blade.php ENDPATH**/ ?>