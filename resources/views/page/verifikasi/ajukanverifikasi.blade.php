<x-layout>

    <div class="main-container container-fluid">

        <!-- PAGE-HEADER -->
        <div class="page-header">
            <h1 class="page-title">Verifikasi Akun</h1>
            <div>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Akun</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Verifikasi Akun</li>
                </ol>
            </div>
        </div>
        <!-- PAGE-HEADER END -->



        <!--Row -->
        <div class="row">
            <div class="col-md-12 col-xl-112">

                @if ($verifikasi->status == 'Belum Diajukan')
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Verifikasi Akun</h3>
                    </div>
                    <div class="card-body">
                        <form class="row" method="POST" action="{{ route('verifikasi.update', $verifikasi->user_id) }}"
                            enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-row">
                                <div class="form-group col-md-6 mb-0">
                                    <div class="form-group">
                                        <input type="text"
                                            class="form-control @error('name') is-invalid @enderror" name="name"
                                            id="kodetoko" value="{{ $verifikasi->user->pedagang->name }}">
                                        @error('name')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group col-md-6 mb-0">
                                    <div class="form-group">
                                        <input type="email"
                                            class="form-control @error('email') is-invalid @enderror" name="email"
                                            id="email" value="{{ $verifikasi->user->email }}">
                                        @error('email')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-6 mb-0">
                                    <div class="form-group">
                                        <input type="text"
                                            class="form-control @error('nik') is-invalid @enderror" name="nik"
                                            id="nik" value="{{ $verifikasi->user->pedagang->nik }}">
                                        @error('nik')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group col-md-6 mb-0">
                                    <div class="form-group">
                                        <input type="text"
                                            class="form-control @error('no_hp') is-invalid @enderror" name="no_hp"
                                            id="no_hp" placeholder="Nomor Telepon"
                                            value="{{ $verifikasi->user->pedagang->no_hp }}">
                                        @error('no_hp')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-6 mb-0">
                                    <div class="form-group">
                                        <input type="text"
                                            class="form-control @error('jenis_dagangan') is-invalid @enderror"
                                            name="jenis_dagangan" id="jenis_dagangan" placeholder="Jenis Dagangan"
                                            value="{{ $verifikasi->user->pedagang->jenis_dagangan }}">
                                        @error('jenis_dagangan')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group col-md-6 mb-0">
                                    <div class="form-group">
                                        <input type="text"
                                            class="form-control @error('alamat') is-invalid @enderror"
                                            name="alamat" id="alamat" placeholder="Alamat"
                                            value="{{ $verifikasi->user->pedagang->alamat }}">
                                        @error('alamat')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>



                            <div class="form-footer mt-2">
                                <button type="submit" class="btn btn-primary">Ajukan</button>
                            </div>
                        </form>
                    </div>
                </div>
                @elseif($verifikasi->status == 'Diajukan')
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Verifikasi Akun</h3>
                    </div>
                    <div class="card-body">


                        <div class="alert alert-primary">
                            {{$verifikasi->keterangan}}
                        </div>
                        <div class="table-responsive">

                        <table class="table table-bordered text-nowrap border-bottom" id="basic-datatable">
                            <thead>
                                <tr>

                                    <th class="wd-15p border-bottom-0">Nama</th>
                                    <th class="wd-15p border-bottom-0">Email</th>
                                    <th class="wd-20p border-bottom-0">No Hp</th>
                                    <th class="wd-15p border-bottom-0">Jenis Dagangan</th>
                                    <th class="wd-10p border-bottom-0">NIK</th>
                                    <th class="wd-10p border-bottom-0">Alamat</th>

                                </tr>
                            </thead>
                            <tbody>


                                <tr>
                                    <td>{{$verifikasi->user->pedagang->name}}</td>
                                    <td>{{ $verifikasi->user->email }}</td>
                                    <td>{{ $verifikasi->user->pedagang->no_hp }}</td>
                                    <td>{{ $verifikasi->user->pedagang->jenis_dagangan}}</td>
                                    <td>{{ $verifikasi->user->pedagang->nik }}</td>
                                    <td>{{ $verifikasi->user->pedagang->alamat}}</td>

                                </tr>



                            </tbody>
                        </table>
                        </div>
                    </div>
                </div>

                @elseif($verifikasi->status == 'verified')

                <div class="alert alert-success">
                   Akun anda telah aktif
                </div>

                @endif
            </div>




        </div>

    </div>
    <!--End Row-->


    </div>
</x-layout>