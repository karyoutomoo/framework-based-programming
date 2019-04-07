@extends('app')
@section('title')
    Data KRS
@endsection
@section('content')
    <div class="panel panel-default">
        <div class="panel-body">
            <h4><i class="fa fa-university"></i> DAFTAR KRS</h4><hr>
            <div class=row>
                <div class="col-md-2">
                    <a href="/mengambils/create" class="btn btn-primary">
                        <i class="fa fa-plus-circle"></i> Tambah data KRS</a>
                </div>
                <div
                    class="col-md-2">
                </div>
                <div
                    class="col-md-4">
                </div>
            </div>
            <br>
            @if(count($ngambil))
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover table-condensed tfix">
                        <thead align="center">
                        <tr>
                            <td><b>Nama Mahasiswa</b></td>
                            <td><b>Mata Kuliah</b></td>
                            <td><b>SKS</b></td>
                            <td><b>Kelas</b></td>
                            <td><b>Nama Dosen</b></td>
                            <td><b>Nilai</b></td>
                            <td colspan="2"><b>MENU</b></td>
                        </tr>
                        </thead>
                        @foreach($ngambil as $m)
                            <tr>
                                <td>{{ $m->nama }}</td>
                                <td>{{ $m->nama_matkul }}</td>
                                <td>{{ $m->sks }}</td>
                                <td>{{ $m->kelas }}</td>
                                <td>{{ $m->namadosen }}</td>
                                <td>{{ $m->nilai }}</td>
                                <td align="center" width="30px">
                                    <a href="/mengambils/{{$m->id_krs}}/edit" class="btn btn-warning btn-sm"
                                       role="button"><i class="fa fa-pencil-square"></i> Edit</a>
                                </td>
                                <td align="center" width="30px">
                                    {!! Form::open(array('route' => array('mengambils.destroy', $m->id_krs),
                                    'method' => 'delete',
                                    'style' => 'display:inline')) !!}
                                    <button class='btn btn-sm btn-danger delete-btn' type='submit'>
                                        <i class='fa fa-times-circle'></i> Delete </button>
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            @else
                <div class="alert alert-warning">
                    <i class="fa fa-exclamation-triangle"></i> Data KRS tidak Ada
                </div>
            @endif
        </div></div>
@endsection
