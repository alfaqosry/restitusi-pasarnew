<x-layout>
    <div class="main-container container-fluid">

        <!-- PAGE-HEADER -->
        <div class="page-header">
            <h1 class="page-title">Laporan Bulanan</h1>
            <div>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Laporan</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Laporan Bulanan</li>
                </ol>
            </div>

        </div>
        <!-- PAGE-HEADER END -->

        <!-- Row -->
        <div class="row row-sm">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <h3 class="card-title">Laporan Bulan {{$bulan . "-" . $tahun}}</h3>
                        <form method="GET" action="{{ route('laporankeuangan.bulanan') }}" class="form-inline ml-auto">
                            <div class="form-group">
                                <label for="date" class="mr-2">Pilih Tanggal:</label>
                                <input type="date" id="date" name="date" class="form-control" value="{{ old('date', \Carbon\Carbon::createFromDate($tahun, $bulan, 1)->toDateString()) }}">
                            </div>

                            <button type="submit" class="btn btn-primary ml-2">Filter</button>
                        </form>
                        <a href="{{ route('laporanrestitusi.pdf', ['date' => request('date', \Carbon\Carbon::createFromDate($tahun, $bulan, 1)->toDateString())]) }}" class="btn btn-success">Cetak</a>
                    </div>
                    <div class="card-body">

                        <div class="table-responsive">
                            <table class="table table-bordered text-nowrap border-bottom" id="basic-datatable">
                                <thead>
                                    <tr>
                                        <th class="wd-15p border-bottom-0">Nama Pedagang</th>
                                        @foreach ($tanggal as $tgl)
                                        <th class="wd-10p border-bottom-0">{{ $tgl }}</th>
                                        @endforeach



                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($users as $user)
                                    <tr>

                                        <td>{{ $user->pedagang->name }}
                                        </td>
                                        @php
                                        $tdCount = 0;
                                        @endphp
                                        @foreach ($tagihan as $tghn)
                                        @if ($user->id == $tghn->user_id)
                                        <td>Rp.
                                            {{ number_format($tghn->amount, 0, ',', '.') }}
                                        </td>
                                        @php $tdCount++; @endphp
                                        @endif
                                        @endforeach
                                        @for ($i = $tdCount; $i < count($tanggal); $i++)
                                            <td>
                                            </td>
                                            @endfor



                                    </tr>
                                    @endforeach


                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Row -->


        <!-- End Row -->
    </div>
</x-layout>