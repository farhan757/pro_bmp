@extends('layouts.master')

@section('tittle_bar','Kandidat')

@section('content')
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
        <form role="form" method="POST" action="{{ route('savequestkand') }}" class="form-horizontal">
            @csrf()
            <div class="box-body">
                @foreach($kandidat as $val)
                <input type="hidden" id="idkandidat[]" name="idkandidat[]" value="{{ $val->kandidat_id }}" />
                <div class="col-md-4">
                    <!-- Widget: user widget style 1 -->
                    <div class="box box-widget widget-user">
                        <!-- Add the bg color to the header using any of the bg-* classes -->
                        <div class="widget-user-header bg-aqua-active">
                            <h3 class="widget-user-username">{{ $val->nama_kandidat }}</h3>
                            <!--<h5 class="widget-user-desc">Founder &amp; CEO</h5>-->
                        </div>
                        <div class="widget-user-image">
                            <img class="img-circle btn" data-toggle="modal" data-target="#modal-default{{ $val->kandidat_id }}" src="{{ $val->photo }}" alt="User Avatar" />
                        </div>
                        <div class="box-footer">
                            <labe><input type="radio" name="kandidat[]" value="{{ $val->kandidat_id }}">Pilih</labe>
                            <!-- /.row -->
                        </div>
                    </div>
                    <!-- /.widget-user -->
                </div>
                <!-- /.col -->
                @endforeach
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

@foreach($kandidat as $val)
<div class="modal fade" id="modal-default{{ $val->kandidat_id }}">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">{{ $val->nama_kandidat }}</h4>
            </div>
            <div class="modal-body">
                <p style="text-align: center;"><img src="{{ $val->photo }}" width="35%" style="align-content: center;" alt="User Avatar" /></p>
                <label><strong>Visi</strong></label>
                <p style="text-align: justify;">{{ $val->visi }}</p>
                <label><strong>Misi</strong></label>
                <p style="text-align: justify;">{{ $val->misi }}</p>
            </div>
            <div class="modal-footer">
                
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
@endforeach

@endsection