<x-layout>

    <div class="main-container container-fluid">

        <!-- PAGE-HEADER -->
        <div class="page-header">
            <h1 class="page-title">Edit Pedagang</h1>
            <div>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Toko</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Edit Pedagang</li>
                </ol>
            </div>
        </div>
        <!-- PAGE-HEADER END -->



        <!--Row -->
        <div class="row">
            <div class="col-md-12 col-xl-112">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Edit Pedagang</h3>
                    </div>
                    <div class="card-body">
                        <form class="row" method="POST" action="{{ route('toko.store') }}"
                            enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-row">
                                <div class="form-group col-md-6 mb-0">
                                    <div class="form-group">
                                        <input type="text" class="form-control @error('name') is-invalid @enderror"
                                            name="name" id="kodetoko" placeholder="Nama lengkap pedagang"
                                            value="{{ $pedagang->name }}">
                                        @error('name')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group col-md-6 mb-0">
                                    <div class="form-group">
                                        <input type="email" class="form-control @error('email') is-invalid @enderror"
                                            name="email" id="email" placeholder="Email Toko"
                                            value="{{ $pedagang->email }}">
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
                                        <input type="text" class="form-control @error('nik') is-invalid @enderror"
                                            name="nik" id="nik" placeholder="Nomor induk kependudukan"
                                            value="{{ $pedagang->nik }}">
                                        @error('nik')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group col-md-6 mb-0">
                                    <div class="form-group">
                                        <input type="text" class="form-control @error('no_hp') is-invalid @enderror"
                                            name="no_hp" id="no_hp" placeholder="Nomor Telepon"
                                            value="{{$pedagang->no_hp}}">
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
                                            value="{{$pedagang->jenis_dagangan}}">
                                        @error('jenis_dagangan')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group col-md-6 mb-0">
                                    <div class="form-group">
                                        <input type="text" class="form-control @error('alamat') is-invalid @enderror"
                                            name="alamat" id="alamat" placeholder="Alamat"
                                            value="{{$pedagang->alamat}}">
                                        @error('alamat')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-12 mb-0">
                                    <div class="form-group">
                                        <input type="password"
                                            class="form-control @error('password') is-invalid @enderror" name="password"
                                            id="password" placeholder="Password">
                                        @error('password')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                               
                            </div>

                            <div class="form-footer mt-2">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>


        </div>

    </div>
    <!--End Row-->


    </div>
</x-layout>
