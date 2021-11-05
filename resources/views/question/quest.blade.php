@extends('layouts.master')

@section('tittle_bar','Question')

@section('content')
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
                <form role="form" method="POST" action="{{ route('savequest') }}" class="form-horizontal">
                    @csrf()
                    <div class="box-body">
                        <table>
                            <thead style="height:35px; vertical-align: top; ">
                                <th>No</th>
                                <th>Question</th>
                            </thead>
                            <tbody>
                                @php
                                $cntr=0;
                                @endphp
                                @foreach($data as $val)
                                @php
                                $cntr++;
                                @endphp
                                <tr>
                                    <input type="hidden" id="idquestion[]" name="idquestion[]" value="{{ $val->id }}">
                                    <td style="vertical-align: top; width: 25px;">{{ $cntr }}.</td>
                                    <td>{{ $val->text_ques }}
                                        <div>
                                            <ol>
                                                @foreach($kand as $vk)
                                                    <li>{{ $vk->nama_kandidat }}</li>
                                                @endforeach
                                            </ol>
                                        </div>
                                        <div id="{{ $val->id }}" style="text-align: left; vertical-align: top; margin-bottom: 5%;">
                                            <input type="radio" name="{{ $val->id }}[]" value="1" style="margin: 5px;"><strong>Setuju</strong></label>
                                            <input type="radio" name="{{ $val->id }}[]" value="0" style="margin: 5px;"><strong>Tidak Setuju</strong></label>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">
                        <a class="btn btn-info" href="{{ route('data') }}"><span class="fa fa-sign-out"></span>Kembali</a>
                        <button type="submit" class="btn btn-primary" value="submit" id="submit" name="submit"><span class="fa fa-send"></span> Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.container -->

@endsection