@extends('app')
@section('title')
    Tambah Data KRS
@endsection
@section('content')
    <div class="panel panel-default">
        <div class="panel-body">
            <h4><i class="fa fa-plus-square">
                </i> TAMBAH Data KRS</h4><hr>
            <div class="row"><div class="col-md-3">
                    <div class="list-group">
                        <a href="/mengambils" class="list-group-item">
                            <i class="fa fa-refresh"></i> Tampilkan Semua</a>
                        <a href="/" class="list-group-item">
                            <i class="fa fa-home"></i> Home</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            {!! Form::open(array('url' => '/mengambils')) !!}
                            <div class="form-group">
                                {!! Form::label('id_krs', 'ID KRS') !!}
                                {!! Form::text('id_krs',null, array('class' =>'form-control','placeholder'=>'ID KRS')) !!}</div>
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
                            {!! Form::button('<i class="fa fa-plus-square"></i>'.
                            ' Simpan', array('type' => 'submit', 'class'
                            => 'btn btn-primary'))!!}
                            {!! Form::button('<i class="fa fa-times"></i>'.
                            ' Reset', array('type' => 'reset', 'class'
                            => 'btn btn-danger'))!!}
                            {!! Form::close()!!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
