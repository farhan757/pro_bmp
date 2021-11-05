

<?php $__env->startSection('tittle_bar','Update Data'); ?>

<?php $__env->startSection('content'); ?>
<div class="container">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Data Informasi Polis <?php echo e($data->nopol); ?>, Product <?php echo e($data->product); ?>

        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-line-chart"></i> Update Data</a></li>
            <li><a href="#" class="active">Data</a></li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- /.box-body -->
        <div class="box box-success">
            <div class="box-body">
                <form role="form" method="POST" action="<?php echo e(route('step2')); ?>" class="form-horizontal">
                    <?php echo csrf_field(); ?>
                    <div class="box-body">
                        <div class="form-group">
                            <label class="col-sm-2">Nama</label>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" value="<?php echo e($data->nama_p); ?>" disabled>
                            </div>

                            <label class="col-sm-2">Tempat Lahir</label>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" value="<?php echo e($data->tmp_lahir); ?>" disabled>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="selectCustomer" class="col-sm-2">Jenis Kelamin</label>
                            <div class="col-sm-3">
                                <select class="form-control select2" placeholder="Jenis Kelamin" disabled>
                                    <option value="P" <?php if($data->jk == 'P'): ?>
                                        selected
                                        <?php endif; ?>
                                        >Perempuan</option>
                                    <option value="L" <?php if($data->jk == 'L'): ?> selected <?php endif; ?>>Laki-laki</option>
                                </select>
                            </div>

                            <label class="col-sm-2">Tanggal Lahir</label>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" value="<?php echo e($data->tgl_lahir); ?>" disabled>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="selectCustomer" class="col-sm-2">Alamat *</label>
                            <div class="col-sm-3">
                                <textarea id="alamat" name="alamat" class="form-control textarea" disabled required><?php echo e($data->alamat); ?></textarea>
                            </div>

                            <label class="col-sm-2">Kota *</label>
                            <div class="col-sm-3">
                                <input id="kota" name="kota" type="text" class="form-control" value="<?php echo e($data->kota); ?>" disabled required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="selectCustomer" class="col-sm-2">Email *</label>
                            <div class="col-sm-3">
                                <input type="email" id="email" name="email" class="form-control" value="<?php echo e($data->email); ?>" disabled required>
                            </div>

                            <label class="col-sm-2">No HP *</label>
                            <div class="col-sm-3">
                                <input id="nohp" name="nohp" type="text" class="form-control" value="<?php echo e($data->nohp); ?>" disabled required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="selectCustomer" class="col-sm-2">Nama Tertanggung</label>
                            <div class="col-sm-3">
                                <input type="text" id="nama_t" name="nama_t" class="form-control" value="<?php echo e($data->nama_t); ?>" disabled required>
                            </div>

                            <label class="col-sm-2">Premi</label>
                            <div class="col-sm-3">
                                <input id="premi" name="premi" type="text" class="form-control" value="<?php echo e($data->premi); ?>" disabled required>
                            </div>
                        </div>
                        <h3><input type="checkbox" id="update" name="update"> UPDATE</label></h3>
                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary" value="submit" id="submit" name="submit"><span class="fa fa-sign-out"></span> Next</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.container -->

<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
<script>
    $(function() {
        $("#update").click(function() {
            if ($(this).is(":checked")) {
                $("#nohp").removeAttr("disabled"); 
                $("#email").removeAttr("disabled"); 
                $("#alamat").removeAttr("disabled"); 
                $("#kota").removeAttr("disabled");  
                $("#submit").html('<span class="fa fa-send"></span> Submit');                              
            } else {
                $("#txtPassportNumber").attr("disabled", "disabled");
                $("#nohp").attr("disabled", "disabled"); 
                $("#email").attr("disabled", "disabled"); 
                $("#alamat").attr("disabled", "disabled"); 
                $("#kota").attr("disabled", "disabled"); 
                $("#submit").html('<span class="fa fa-sign-out"></span> Next'); 
            }
        });
    });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pro_bmp\resources\views/data/data.blade.php ENDPATH**/ ?>