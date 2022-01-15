@extends('layouts.sbadmin')
@section('title', 'Home')
@section('content')
<div class="container">
    <div class="card border-dark mb-3">
        <div class="card-header">
            <h2>
                List User
                <a href="{{ route('kurikulum.create') }}" class="btn btn-primary float-right">Tambah Guru</a>
            </h2>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover" id="example1">
                    <thead>
                        <tr class="text-center">
                            <th>NIP</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Email</th>
                            <th>Jabatan</th>
                            <th>Supervisor</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $dt)
                        <tr class="text-center">
                            <td>{{$dt->nip}}</td>
                            <td>{{$dt->name}}</td>
                            <td>{{$dt->alamat}}</td>
                            <td>{{$dt->email}}</td>
                            <td>{{$dt->role}}</td>
                            <td>
                                @if($dt->supervisor =='0')
                                    <span class="badge badge-danger">
                                        No
                                    </span>
                                @elseif($dt->supervisor =='1')
                                    <span class="badge badge-primary">
                                        Yes
                                    </span>
                                @endif
                            </td>
                            <td>
                                    
                                    <a href="{{route('kurikulum.destroy', $dt)}}" onclick="notificationBeforeDelete(event, this)" class="btn btn-danger btn-xs">
                                        Delete
                                    </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection