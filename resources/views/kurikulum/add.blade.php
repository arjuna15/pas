@extends('layouts.sbadmin')
@section('title', 'Home')
@section('content')
<div class="card">
    <div class="card-header">{{ __('Tambah Data Guru') }}</div>

    <div class="card-body">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
        @if (session('msg'))
            <div class="alert alert-danger" role="alert">
                {{ session('msg') }}
            </div>
        @endif
								<form method="POST" action="{{ route('kurikulum.store') }}" enctype="multipart/form-data">
          							@csrf
                                    <div class="row">
					                    <div class="col-sm-4">
					                      	<div class="form-group">
												<label for="">NIP</label>
												<input  type="text" class="form-control" name="nip" id="nip" >
											</div>
										</div>
										<div class="col-sm-4">
					                      	<div class="form-group">
												<label for="">Nama Lengkap</label>
												<input  type="text" class="form-control" name="name" id="name"  >
											</div>
										</div>
										<div class="col-sm-4">
					                      	<div class="form-group">
												<label for="">Alamat</label>
												<input  type="text" class="form-control" name="alamat" id="alamat" >
											</div>
										</div>
										<div class="col-sm-4">
					                      	<div class="form-group">
												<label for="">E-Mail</label>
												<input  type="text" class="form-control" name="email" id="email" >
											</div>
										</div>
										<div class="col-sm-4">
					                      	<div class="form-group">
												<label for="">Role</label>
												<input  type="text" class="form-control" name="role" id="role" >
											</div>
										</div>
										<div class="col-sm-4">
					                      	<div class="form-group">
												<label for="">Password</label>
												<input  type="text" class="form-control" name="password" id="password" >
											</div>
										</div>
										<div class="form-group">
                                            <label>Supervisor</label>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="supervisor" id="supervisor" value="1">Ya
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="supervisor" id="supervisor" value="0">Tidak
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Kirim</button>
                                                <a href="/" class="btn btn-primary">Home</a>
							    </form>
    </div>
</div>
@endsection
