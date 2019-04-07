@extends('app')
@section('title')
    Edit KRS
@endsection
@section('content')
    <div class="panel panel-default">
        <div class="panel-body">
            <h4><i class="fa fa-check-square">
                </i> EDIT KRS</h4><hr>
            <div class="row"><div class="col-md-3">
                    <div class="list-group">
                        <a href="#" class="list-group-item active">
                            <i class="fa fa-cogs"></i> MENU KRS
                        </a>
                        <a href="/mengambils" class="list-group-item">
                            <i class="fa fa-refresh"></i> Tampilkan Semua</a>
                        <a href="/" class="list-group-item">
                            <i class="fa fa-home"></i> Home</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            {!!Form::model($ambil,['method'=>'PATCH','action'=>['MengambilController@update',$ambil->id_krs]]) !!}
                            <div>
                                {!! Form::label('nrpmhs', 'Nama Mahasiswa') !!}
                                {!! Form::select('nrpmhs', $mhs ,null , array('class' => 'form-control')) !!}
                            </div>
                            <br>
                            <div>
                                {!! Form::label('kelasdiambil', 'Kelas ID') !!}
                                {!! Form::select('kelasdiambil',$ngajar ,null , array('class' => 'form-control')) !!}
                            </div>
                            <br>
                            <div class="form-group">
                                {!! Form::label('nilai', 'Nilai') !!}
                                {!! Form::text('nilai', null, array('class' =>'form-control','placeholder'=>'Nilai')) !!}
                            </div>
                            <br>
                            {!! Form::button('<i class="fa fa-check-square"></i>'. ' Update', array('type' => 'submit', 'class' => 'btn btn-primary'))!!}
                            {!! Form::close()!!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
