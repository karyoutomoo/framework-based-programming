@extends('app')
@section('title')
    Tambah Data Mengajar
@endsection
@section('content')
    <div class="panel panel-default">
        <div class="panel-body">
            <h4><i class="fa fa-plus-square">
                </i> TAMBAH Data Mengajar</h4><hr>
            <div class="row"><div class="col-md-3">
                    <div class="list-group">
                        <a href="/mengajars" class="list-group-item">
                            <i class="fa fa-refresh"></i> Tampilkan Semua</a>
                        <a href="/" class="list-group-item">
                            <i class="fa fa-home"></i> Home</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            {!! Form::open(array('url' => '/mengajars')) !!}
                            <div class="form-group">
                                {!! Form::label('id_kelas', 'ID Kelas') !!}
                                {!! Form::text('id_kelas',null, array('class' =>
                                'form-control','placeholder'=>'ID Kelas')) !!}</div>
                            <div class="form-group">
                                {!! Form::label('kelas', 'Kelas') !!}
                                {!! Form::text('kelas', null, array('class' =>
                                'form-control','placeholder'=>'Kelas IF-xxx')) !!}
                            </div>
                            <div>
                                {!! Form::label('nipdosenwali', 'Dosen Pengajar') !!}
                                {!! Form::select('nipdosenwali', $dsn ,null , array('class' => 'form-control')) !!}
                            </div>
                            <br>
                            <div>
                                {!! Form::label('kode_matkul', 'Kode Mata Kuliah') !!}
                                {!! Form::select('kode_matkul', $matk ,null , array('class' => 'form-control')) !!}
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
