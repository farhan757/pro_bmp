

<?php $__env->startSection('tittle_bar','Information'); ?>

<?php $__env->startSection('content'); ?>
<div class="container">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Information
            <a href="#" title="Information Realtime"><span class="fa fa-question"></span></a>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-home"></i> Information</a> </li>

        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- BASIC FORM ELELEMNTS -->
        <div class="row">
            <div class="col-md-6">
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Information Updated</h3>
                    </div>
                    <div class="box-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Description</th>
                                    <th>Qty</th>
                                    <th>Progress</th>
                                    <th>Label</th>
                                </tr>
                            </thead>
                            <tbody id="tbinfo">

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Information Q & A</h3>
                    </div>
                    <div class="box-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Description</th>
                                    <th>Qty</th>
                                    <th>Progress</th>
                                    <th>Label</th>
                                </tr>
                            </thead>
                            <tbody id="tbqa">

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Information Wilayah</h3>
                    </div>
                    <div class="box-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Description</th>
                                    <th>Setuju</th>
                                    <th>Tidak Setuju</th>
                                    <th>Update</th>
                                    <th>Tidak Update</th>
                                </tr>
                            </thead>
                            <tbody id="tbwil">

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>            
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.container -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
<script>
    updateInfo();
    setInterval(function(){
        updateInfo()
    },1000);
    function updateInfo() {
        $.get('infoupdate', function(data, status) {
            //console.log(data);
            var xhtml = "";
            for (var i = 0; i < data.data.length; i++) {
                //console.log(data.data[i].desc);
                xhtml += '<tr>' +
                    '<td>' + (i + 1) + '</td>' +
                    '<td>' + data.data[i].desc + '</td>' +
                    '<td>' + data.data[i].jumlah + '</td>' +
                    '<td>' +
                    ' <div class="progress progress-xs active">' +
                    '<div class="progress-bar progress-bar-' + data.data[i].warnaprog + ' progress-bar-striped" style="width: ' + data.data[i].persen + '"></div>' +
                    '</div>' +
                    '</td>' +
                    '<td><span class="badge bg-' + data.data[i].warnalabel + '">' + data.data[i].persen + '</td>' +
                    '</tr>';
            }
            $('#tbinfo').html(xhtml);
        });

        $.get('qa', function(data, status) {
            //console.log(data);
            var xhtml = "";
            for (var i = 0; i < data.data.length; i++) {
                //console.log(data.data[i].desc);
                xhtml += '<tr>' +
                    '<td>' + (i + 1) + '</td>' +
                    '<td>' + data.data[i].desc + '</td>' +
                    '<td>' + data.data[i].jumlah + '</td>' +
                    '<td>' +
                    ' <div class="progress progress-xs active">' +
                    '<div class="progress-bar progress-bar-' + data.data[i].warnaprog + ' progress-bar-striped" style="width: ' + data.data[i].persen + '"></div>' +
                    '</div>' +
                    '</td>' +
                    '<td><span class="badge bg-' + data.data[i].warnalabel + '">' + data.data[i].persen + '</td>' +
                    '</tr>';
            }
            $('#tbqa').html(xhtml);
        });

        $.get('infowil', function(data, status) {
            //console.log(data);
            var xhtml = "";
            for (var i = 0; i < data.data.length; i++) {
                //console.log(data.data[i].desc);
                xhtml += '<tr>' +
                    '<td>' + (i + 1) + '</td>' +
                    '<td>' + data.data[i].wilayah + '</td>' +
                    '<td>' + data.data[i].jml_setuju + '</td>' +
                    '<td>' + data.data[i].jml_tdksetuju + '</td>' +
                    '<td>' + data.data[i].jml_update + '</td>' +
                    '<td>' + data.data[i].jml_tdkupdate + '</td>' +
                    '</tr>';
            }
            $('#tbwil').html(xhtml);
        });        
    }
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pro_bmp\resources\views/home2.blade.php ENDPATH**/ ?>