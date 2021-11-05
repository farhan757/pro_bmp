@extends('layouts.master')

@section('tittle_bar','Home')

@section('content')
<div class="container">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Home
            <small>Home</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
            <li class="active">Home</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- BASIC FORM ELELEMNTS -->
        <div class="row">

            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="box">
                    <div class="info-box">
                        <span class="info-box-icon bg-aqua"><i class="fa fa-database"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Total Data</span>
                            <span class="info-box-number" id="jmldata">0</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->

                    <!-- Loading (remove the following to stop the loading)-->
                    <div class="overlay" id="jmldatax" style="display:block;">
                        <i class="fa fa-refresh fa-spin"></i>
                    </div>
                    <!-- end loading -->
                </div>
            </div>
            <!-- /.col -->

            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="box">
                    <div class="info-box">
                        <span class="info-box-icon bg-green"><i class="fa fa-send"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Submit</span>
                            <span class="info-box-number" id="kirim">0</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                    <!-- Loading (remove the following to stop the loading)-->
                    <div class="overlay" id="kirimx" style="display:block;">
                        <i class="fa fa-refresh fa-spin"></i>
                    </div>
                    <!-- end loading -->
                </div>
            </div>
            <!-- /.col -->

            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="box">
                    <div class="info-box">
                        <span class="info-box-icon bg-red"><i class="fa fa-spinner"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Belum Submit</span>
                            <span class="info-box-number" id="blmkirim">0</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                    <!-- Loading (remove the following to stop the loading)-->
                    <div class="overlay" id="blmkirimx" style="display:block;">
                        <i class="fa fa-refresh fa-spin"></i>
                    </div>
                    <!-- end loading -->
                </div>
            </div>
            <!-- /.col -->

            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="box">
                    <div class="info-box">
                        <span class="info-box-icon bg-yellow"><i class="fa fa-close"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Tidak Setuju</span>
                            <span class="info-box-number" id="tdksetuju">0</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                    <!-- Loading (remove the following to stop the loading)-->
                    <div class="overlay" id="tdksetujux" style="display:block;">
                        <i class="fa fa-refresh fa-spin"></i>
                    </div>
                    <!-- end loading -->
                </div>
            </div>
            <!-- /.col -->

            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="box">
                    <div class="info-box">
                        <span class="info-box-icon bg-green"><i class="fa fa-check"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Setuju</span>
                            <span class="info-box-number" id="setuju">0</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                    <!-- Loading (remove the following to stop the loading)-->
                    <div class="overlay" id="setujux" style="display:block;">
                        <i class="fa fa-refresh fa-spin"></i>
                    </div>
                    <!-- end loading -->
                </div>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>
<!-- /.container -->
@endsection

@section('js')
<script>
    $.get('setuju', function(data, status) {
        $('#setuju').text(data);
        $('#setujux').css('display', 'none');
    });

    $.get('tdksetuju', function(data, status) {
        $('#tdksetuju').text(data);
        $('#tdksetujux').css('display', 'none');
    });

    $.get('seluruhdata', function(data, status) {
        $('#jmldata').text(data);
        $('#jmldatax').css('display', 'none');
    });

    $.get('sudahsubmit', function(data, status) {
        $('#kirim').text(data);
        $('#kirimx').css('display', 'none');
    });

    $.get('belumsubmit', function(data, status) {
        $('#blmkirim').text(data);
        $('#blmkirimx').css('display', 'none');
    });
</script>
@endsection