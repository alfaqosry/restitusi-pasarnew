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
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Verifikasi Akun</h3>
                    </div>
                    <div class="card-body">



                    <div class="table-responsive">

                        <table class="table table-bordered text-nowrap border-bottom responsive" id="basic-datatable">
                            <thead>
                                <tr>

                                    <th class="wd-15p border-bottom-0">Nama</th>
                                    <th class="wd-15p border-bottom-0">Email</th>
                                    <th class="wd-20p border-bottom-0">No Hp</th>
                                    <th class="wd-15p border-bottom-0">Jenis Dagangan</th>
                                    <th class="wd-10p border-bottom-0">NIK</th>
                                    <th class="wd-10p border-bottom-0">Alamat</th>
                                    <th class="wd-10p border-bottom-0">Aksi</th>

                                </tr>
                            </thead>
                            <tbody>

                                @foreach($verifikasi as $item)
                                <tr>
                                    <td>{{$item->user->pedagang->name}}</td>
                                    <td>{{ $item->user->email }}</td>
                                    <td>{{ $item->user->pedagang->no_hp }}</td>
                                    <td>{{ $item->user->pedagang->jenis_dagangan}}</td>
                                    <td>{{ $item->user->pedagang->nik }}</td>
                                    <td>{{ $item->user->pedagang->alamat}}</td>

                                    <td>
                                        @if($item->status != "verified")
                                        <a href="{{route('verifikasi.terima',$item->user->id)}}" class="btn btn-success">Terima</a>
                                        @endif
                                        <a href="#" class="btn btn-danger">Tolak</a>
                                    </td>

                                </tr>

                                @endforeach



                            </tbody>
                        </table>
                    </div>
                    </div>
                </div>



            </div>




        </div>

    </div>
    <!--End Row-->


    </div>
</x-layout>