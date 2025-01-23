<x-layout>
    <div class="main-container container-fluid">

        <!-- PAGE-HEADER -->
        <div class="page-header">
            <h1 class="page-title">Status</h1>
            <div>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Transaksi</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Status</li>
                </ol>
            </div>
        </div>
        <!-- PAGE-HEADER END -->

        <!-- ROW-1 OPEN -->
        <div class="row">
            <div class="col-12 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title mb-0">Product Sales</h3>
                    </div>
                    <div class="card-body pt-4">
                        <div class="grid-margin">
                            <div class="">
                                <div class="panel panel-primary">
                                    <div class="tab-menu-heading border-0 p-0">
                                        <div class="tabs-menu1">
                                            <!-- Tabs -->
                                            <ul class="nav panel-tabs product-sale" role="tablist">
                                                <li><a href="#tab5" class="active" data-bs-toggle="tab"
                                                        aria-selected="true" role="tab">Semua Transaksi</a></li>
                                                <li><a href="#tab6" data-bs-toggle="tab" class="text-dark"
                                                        aria-selected="false" role="tab" tabindex="-1">Berhasil</a>
                                                </li>
                                                <li><a href="#tab7" data-bs-toggle="tab" class="text-dark"
                                                        aria-selected="false" role="tab" tabindex="-1">Pending</a>
                                                </li>
                                                <li><a href="#tab8" data-bs-toggle="tab" class="text-dark"
                                                        aria-selected="false" role="tab"
                                                        tabindex="-1">Dibatalkan</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="panel-body tabs-menu-body border-0 pt-0">
                                        <div class="tab-content">
                                            <div class="tab-pane active show" id="tab5" role="tabpanel">
                                                <div class="table-responsive">
                                                    <div id="data-table_wrapper"
                                                        class="dataTables_wrapper dt-bootstrap5 no-footer">
                                                        <div class="row">
                                                            <div class="col-sm-12 col-md-6">
                                                                <div class="dataTables_length" id="data-table_length">
                                                                    <label>Show <select name="data-table_length"
                                                                            aria-controls="data-table"
                                                                            class="form-select form-select-sm select2 select2-hidden-accessible"
                                                                            tabindex="-1" aria-hidden="true">
                                                                            <option value="10">10</option>
                                                                            <option value="25">25</option>
                                                                            <option value="50">50</option>
                                                                            <option value="100">100</option>
                                                                        </select><span
                                                                            class="select2 select2-container select2-container--default"
                                                                            dir="ltr" style="width: 61px;"><span
                                                                                class="selection"><span
                                                                                    class="select2-selection select2-selection--single"
                                                                                    role="combobox" aria-haspopup="true"
                                                                                    aria-expanded="false" tabindex="0"
                                                                                    aria-labelledby="select2-data-table_length-jx-container"><span
                                                                                        class="select2-selection__rendered"
                                                                                        id="select2-data-table_length-jx-container"
                                                                                        title="10">10</span><span
                                                                                        class="select2-selection__arrow"
                                                                                        role="presentation"><b
                                                                                            role="presentation"></b></span></span></span><span
                                                                                class="dropdown-wrapper"
                                                                                aria-hidden="true"></span></span>
                                                                        entries</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-12 col-md-6">
                                                                <div id="data-table_filter" class="dataTables_filter">
                                                                    <label><input type="search"
                                                                            class="form-control form-control"
                                                                            placeholder="Search..."
                                                                            aria-controls="data-table"></label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <table id="data-table"
                                                                    class="table table-bordered text-nowrap mb-0 dataTable no-footer"
                                                                    role="grid" aria-describedby="data-table_info">
                                                                    <thead class="border-top">
                                                                        <tr role="row">
                                                                            <th class="bg-transparent border-bottom-0 sorting_disabled"
                                                                                style="width: 88.7188px;"
                                                                                rowspan="1" colspan="1"
                                                                                aria-label="Tracking Id">Order ID
                                                                            </th>
                                                                            <th class="bg-transparent border-bottom-0 sorting"
                                                                                tabindex="0"
                                                                                aria-controls="data-table"
                                                                                rowspan="1" colspan="1"
                                                                                aria-label="
                                                                    Product: activate to sort column ascending"
                                                                                style="width: 245.562px;">
                                                                                Product</th>
                                                                            <th class="bg-transparent border-bottom-0 sorting"
                                                                                tabindex="0"
                                                                                aria-controls="data-table"
                                                                                rowspan="1" colspan="1"
                                                                                aria-label="
                                                                    Customer: activate to sort column ascending"
                                                                                style="width: 191.422px;">
                                                                                Customer</th>
                                                                            <th class="bg-transparent border-bottom-0 sorting"
                                                                                tabindex="0"
                                                                                aria-controls="data-table"
                                                                                rowspan="1" colspan="1"
                                                                                aria-label="
                                                                    Date: activate to sort column ascending"
                                                                                style="width: 145.031px;">
                                                                                Date</th>
                                                                            <th class="bg-transparent border-bottom-0 sorting_disabled"
                                                                                rowspan="1" colspan="1"
                                                                                aria-label="
                                                                    Amount"
                                                                                style="width: 152.328px;">
                                                                                Amount</th>
                                                                            <th class="bg-transparent border-bottom-0 sorting_disabled"
                                                                                rowspan="1" colspan="1"
                                                                                aria-label="
                                                                    Payment Mode"
                                                                                style="width: 208.188px;">
                                                                                Payment Mode</th>
                                                                            <th class="bg-transparent border-bottom-0 sorting"
                                                                                style="width: 104.719px;"
                                                                                tabindex="0"
                                                                                aria-controls="data-table"
                                                                                rowspan="1" colspan="1"
                                                                                aria-label="Status: activate to sort column ascending">
                                                                                Status</th>
                                                                          
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        @foreach ($transaction as $item)
                                                                            <tr class="border-bottom odd">
                                                                                <td class="text-center">
                                                                                    <div class="mt-0 mt-sm-2 d-block">
                                                                                        <h6
                                                                                            class="mb-0 fs-14 fw-semibold">
                                                                                            #{{$item->order_id}}</h6>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="d-flex">
                                                                                        <span class="avatar bradius"
                                                                                            style="background-image: url(../assets/images/orders/10.jpg)"></span>
                                                                                        <div
                                                                                            class="ms-3 mt-0 mt-sm-2 d-block">
                                                                                            <h6
                                                                                                class="mb-0 fs-14 fw-semibold">
                                                                                                {{$item->keterangan}}</h6>
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="d-flex">
                                                                                        <div
                                                                                            class="mt-0 mt-sm-3 d-block">
                                                                                            <h6
                                                                                                class="mb-0 fs-14 fw-semibold">
                                                                                                {{$item->user->name}}</h6>
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                                <td><span class="mt-sm-2 d-block">30
                                                                                        {{{$item->created_at}}}</span></td>
                                                                                <td><span
                                                                                        class="fw-semibold mt-sm-2 d-block">{{$item->price}}</span>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="d-flex">
                                                                                        <div
                                                                                            class="mt-0 mt-sm-3 d-block">
                                                                                            <h6
                                                                                                class="mb-0 fs-14 fw-semibold">
                                                                                                Online Payment</h6>
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="mt-sm-1 d-block">
                                                                                        <span
                                                                                            class="badge @if($item->status == 'pending')bg-warning-transparent @elseif($item->status == 'success')bg-success-transparent @endif rounded-pill text-success p-2 px-3">{{
                                                                                                $item->status
                                                                                        
                                                                                        }}</span>
                                                                                    </div>
                                                                                </td>
                                                                              
                                                                            </tr>

                                                                            @endforeach

                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-sm-12 col-md-12">
                                                                <div class="dataTables_info" id="data-table_info"
                                                                    role="status" aria-live="polite">Showing 1 to 8
                                                                    of 8 entries</div>
                                                            </div>
                                                            <div class="col-sm-12 col-md-12">
                                                                <div class="dataTables_paginate paging_simple_numbers"
                                                                    id="data-table_paginate">
                                                                    <ul class="pagination">
                                                                        <li class="paginate_button page-item previous disabled"
                                                                            id="data-table_previous"><a href="#"
                                                                                aria-controls="data-table"
                                                                                data-dt-idx="0" tabindex="0"
                                                                                class="page-link">Previous</a></li>
                                                                        <li class="paginate_button page-item active"><a
                                                                                href="#"
                                                                                aria-controls="data-table"
                                                                                data-dt-idx="1" tabindex="0"
                                                                                class="page-link">1</a></li>
                                                                        <li class="paginate_button page-item next disabled"
                                                                            id="data-table_next"><a href="#"
                                                                                aria-controls="data-table"
                                                                                data-dt-idx="2" tabindex="0"
                                                                                class="page-link">Next</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="tab6" role="tabpanel">
                                                <div class="table-responsive">
                                                    <table class="table table-bordered text-nowrap mb-0">
                                                        <thead class="border-top">
                                                            <tr>
                                                                <th class="bg-transparent border-bottom-0"
                                                                    style="width: 5%;">Tracking Id</th>
                                                                <th class="bg-transparent border-bottom-0">
                                                                    Product</th>
                                                                <th class="bg-transparent border-bottom-0">
                                                                    Customer</th>
                                                                <th class="bg-transparent border-bottom-0">
                                                                    Date</th>
                                                                <th class="bg-transparent border-bottom-0">
                                                                    Amount</th>
                                                                <th class="bg-transparent border-bottom-0">
                                                                    Payment Mode</th>
                                                                <th class="bg-transparent border-bottom-0"
                                                                    style="width: 10%;">Status</th>
                                                                <th class="bg-transparent border-bottom-0"
                                                                    style="width: 5%;">Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr class="border-bottom">
                                                                <td class="text-center">
                                                                    <div class="mt-0 mt-sm-2 d-block">
                                                                        <h6 class="mb-0 fs-14 fw-semibold">
                                                                            #98765490</h6>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex">
                                                                        <span class="avatar bradius"
                                                                            style="background-image: url(../assets/images/orders/10.jpg)"></span>
                                                                        <div class="ms-3 mt-0 mt-sm-2 d-block">
                                                                            <h6 class="mb-0 fs-14 fw-semibold">
                                                                                Headsets</h6>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex">
                                                                        <div class="mt-0 mt-sm-3 d-block">
                                                                            <h6 class="mb-0 fs-14 fw-semibold">
                                                                                Cherry Blossom</h6>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td><span class="mt-sm-2 d-block">30 Aug
                                                                        2021</span></td>
                                                                <td><span
                                                                        class="fw-semibold mt-sm-2 d-block">$6.721.5</span>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex">
                                                                        <div class="mt-0 mt-sm-3 d-block">
                                                                            <h6 class="mb-0 fs-14 fw-semibold">
                                                                                Online Payment</h6>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="mt-sm-1 d-block">
                                                                        <span
                                                                            class="badge bg-success-transparent rounded-pill text-success p-2 px-3">Shipped</span>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="g-2">
                                                                        <a class="btn text-primary btn-sm"
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-original-title="Edit"><span
                                                                                class="fe fe-edit fs-14"></span></a>
                                                                        <a class="btn text-danger btn-sm"
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-original-title="Delete"><span
                                                                                class="fe fe-trash-2 fs-14"></span></a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr class="border-bottom">
                                                                <td class="text-center">
                                                                    <div class="mt-0 mt-sm-2 d-block">
                                                                        <h6 class="mb-0 fs-14 fw-semibold">
                                                                            #76348798</h6>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex">
                                                                        <span class="avatar bradius"
                                                                            style="background-image: url(../assets/images/orders/12.jpg)"></span>
                                                                        <div class="ms-3 mt-0 mt-sm-2 d-block">
                                                                            <h6 class="mb-0 fs-14 fw-semibold">
                                                                                Flower Pot</h6>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex">
                                                                        <div class="mt-0 mt-sm-3 d-block">
                                                                            <h6 class="mb-0 fs-14 fw-semibold">
                                                                                Simon Sais</h6>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td><span class="mt-sm-2 d-block">15 Nov
                                                                        2021</span></td>
                                                                <td><span
                                                                        class="fw-semibold mt-sm-2 d-block">$35,7863</span>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex">
                                                                        <div class="mt-0 mt-sm-3 d-block">
                                                                            <h6 class="mb-0 fs-14 fw-semibold">
                                                                                Online Payment</h6>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="mt-sm-1 d-block">
                                                                        <span
                                                                            class="badge bg-success-transparent rounded-pill text-success p-2 px-3">Shipped</span>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="g-2">
                                                                        <a class="btn text-primary btn-sm"
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-original-title="Edit"><span
                                                                                class="fe fe-edit fs-14"></span></a>
                                                                        <a class="btn text-danger btn-sm"
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-original-title="Delete"><span
                                                                                class="fe fe-trash-2 fs-14"></span></a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr class="border-bottom">
                                                                <td class="text-center">
                                                                    <div class="mt-0 mt-sm-2 d-block">
                                                                        <h6 class="mb-0 fs-14 fw-semibold">
                                                                            #23986456</h6>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex">
                                                                        <span class="avatar bradius"
                                                                            style="background-image: url(../assets/images/orders/4.jpg)"></span>
                                                                        <div class="ms-3 mt-0 mt-sm-2 d-block">
                                                                            <h6 class="mb-0 fs-14 fw-semibold">
                                                                                Pen Drive</h6>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex">
                                                                        <div class="mt-0 mt-sm-3 d-block">
                                                                            <h6 class="mb-0 fs-14 fw-semibold">
                                                                                Manny Jah</h6>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td><span class="mt-sm-2 d-block">27 Jan
                                                                        2021</span></td>
                                                                <td><span
                                                                        class="fw-semibold mt-sm-2 d-block">$5,89,6437</span>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex">
                                                                        <div class="mt-0 mt-sm-3 d-block">
                                                                            <h6 class="mb-0 fs-14 fw-semibold">
                                                                                Cash on Delivery</h6>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="mt-sm-1 d-block">
                                                                        <span
                                                                            class="badge bg-success-transparent rounded-pill text-success p-2 px-3">Shipped</span>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="g-2">
                                                                        <a class="btn text-primary btn-sm"
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-original-title="Edit"><span
                                                                                class="fe fe-edit fs-14"></span></a>
                                                                        <a class="btn text-danger btn-sm"
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-original-title="Delete"><span
                                                                                class="fe fe-trash-2 fs-14"></span></a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr class="border-bottom">
                                                                <td class="text-center">
                                                                    <div class="mt-0 mt-sm-2 d-block">
                                                                        <h6 class="mb-0 fs-14 fw-semibold">
                                                                            #87456325</h6>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex">
                                                                        <span class="avatar bradius"
                                                                            style="background-image: url(../assets/images/orders/8.jpg)"></span>
                                                                        <div class="ms-3 mt-0 mt-sm-2 d-block">
                                                                            <h6 class="mb-0 fs-14 fw-semibold">
                                                                                New Bowl</h6>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex">
                                                                        <div class="mt-0 mt-sm-3 d-block">
                                                                            <h6 class="mb-0 fs-14 fw-semibold">
                                                                                Florinda Carasco</h6>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td><span class="mt-sm-2 d-block">19 Sep
                                                                        2021</span></td>
                                                                <td><span
                                                                        class="fw-semibold mt-sm-2 d-block">$17.98</span>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex">
                                                                        <div class="mt-0 mt-sm-3 d-block">
                                                                            <h6 class="mb-0 fs-14 fw-semibold">
                                                                                Online Payment</h6>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="mt-sm-1 d-block">
                                                                        <span
                                                                            class="badge bg-success-transparent rounded-pill text-success p-2 px-3">Shipped</span>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="g-2">
                                                                        <a class="btn text-primary btn-sm"
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-original-title="Edit"><span
                                                                                class="fe fe-edit fs-14"></span></a>
                                                                        <a class="btn text-danger btn-sm"
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-original-title="Delete"><span
                                                                                class="fe fe-trash-2 fs-14"></span></a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr class="border-bottom">
                                                                <td class="text-center">
                                                                    <div class="mt-0 mt-sm-2 d-block">
                                                                        <h6 class="mb-0 fs-14 fw-semibold">
                                                                            #65783926</h6>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex">
                                                                        <span class="avatar bradius"
                                                                            style="background-image: url(../assets/images/orders/6.jpg)"></span>
                                                                        <div class="ms-3 mt-0 mt-sm-2 d-block">
                                                                            <h6 class="mb-0 fs-14 fw-semibold">
                                                                                Leather Watch</h6>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex">
                                                                        <div class="mt-0 mt-sm-3 d-block">
                                                                            <h6 class="mb-0 fs-14 fw-semibold">
                                                                                Ivan Notheridiya</h6>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td><span class="mt-sm-2 d-block">06 Oct
                                                                        2021</span></td>
                                                                <td><span
                                                                        class="fw-semibold mt-sm-2 d-block">$8.654.4</span>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex">
                                                                        <div class="mt-0 mt-sm-3 d-block">
                                                                            <h6 class="mb-0 fs-14 fw-semibold">
                                                                                Cash on Delivery</h6>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="mt-sm-1 d-block">
                                                                        <span
                                                                            class="badge bg-success-transparent rounded-pill text-success p-2 px-3">Shipped</span>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="g-2">
                                                                        <a class="btn text-primary btn-sm"
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-original-title="Edit"><span
                                                                                class="fe fe-edit fs-14"></span></a>
                                                                        <a class="btn text-danger btn-sm"
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-original-title="Delete"><span
                                                                                class="fe fe-trash-2 fs-14"></span></a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr class="border-bottom">
                                                                <td class="text-center">
                                                                    <div class="mt-0 mt-sm-2 d-block">
                                                                        <h6 class="mb-0 fs-14 fw-semibold">
                                                                            #34654895</h6>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex">
                                                                        <span class="avatar bradius"
                                                                            style="background-image: url(../assets/images/orders/1.jpg)"></span>
                                                                        <div class="ms-3 mt-0 mt-sm-2 d-block">
                                                                            <h6 class="mb-0 fs-14 fw-semibold">
                                                                                Digital Camera</h6>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex">
                                                                        <div class="mt-0 mt-sm-3 d-block">
                                                                            <h6 class="mb-0 fs-14 fw-semibold">
                                                                                Willie Findit</h6>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td><span class="mt-sm-2 d-block">10 Jul
                                                                        2021</span></td>
                                                                <td><span
                                                                        class="fw-semibold mt-sm-2 d-block">$8.654.4</span>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex">
                                                                        <div class="mt-0 mt-sm-3 d-block">
                                                                            <h6 class="mb-0 fs-14 fw-semibold">
                                                                                Cash on Delivery</h6>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="mt-sm-1 d-block">
                                                                        <span
                                                                            class="badge bg-success-transparent rounded-pill text-success p-2 px-3">Shipped</span>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="g-2">
                                                                        <a class="btn text-primary btn-sm"
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-original-title="Edit"><span
                                                                                class="fe fe-edit fs-14"></span></a>
                                                                        <a class="btn text-danger btn-sm"
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-original-title="Delete"><span
                                                                                class="fe fe-trash-2 fs-14"></span></a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr class="border-bottom">
                                                                <td class="text-center">
                                                                    <div class="mt-0 mt-sm-2 d-block">
                                                                        <h6 class="mb-0 fs-14 fw-semibold">
                                                                            #98765345</h6>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex">
                                                                        <span class="avatar bradius"
                                                                            style="background-image: url(../assets/images/orders/11.jpg)"></span>
                                                                        <div class="ms-3 mt-0 mt-sm-2 d-block">
                                                                            <h6 class="mb-0 fs-14 fw-semibold">
                                                                                Earphones</h6>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex">
                                                                        <div class="mt-0 mt-sm-3 d-block">
                                                                            <h6 class="mb-0 fs-14 fw-semibold">
                                                                                Addie Minstra</h6>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td><span class="mt-sm-2 d-block">25 Jun
                                                                        2021</span></td>
                                                                <td><span
                                                                        class="fw-semibold mt-sm-2 d-block">$7,34,9768</span>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex">
                                                                        <div class="mt-0 mt-sm-3 d-block">
                                                                            <h6 class="mb-0 fs-14 fw-semibold">
                                                                                Online Payment</h6>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="mt-sm-1 d-block">
                                                                        <span
                                                                            class="badge bg-success-transparent rounded-pill text-success p-2 px-3">Shipped</span>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="g-2">
                                                                        <a class="btn text-primary btn-sm"
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-original-title="Edit"><span
                                                                                class="fe fe-edit fs-14"></span></a>
                                                                        <a class="btn text-danger btn-sm"
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-original-title="Delete"><span
                                                                                class="fe fe-trash-2 fs-14"></span></a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr class="border-bottom">
                                                                <td class="text-center">
                                                                    <div class="mt-0 mt-sm-2 d-block">
                                                                        <h6 class="mb-0 fs-14 fw-semibold">
                                                                            #67546577</h6>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex">
                                                                        <span class="avatar bradius"
                                                                            style="background-image: url(../assets/images/orders/2.jpg)"></span>
                                                                        <div class="ms-3 mt-0 mt-sm-2 d-block">
                                                                            <h6 class="mb-0 fs-14 fw-semibold">
                                                                                Shoes</h6>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex">
                                                                        <div class="mt-0 mt-sm-3 d-block">
                                                                            <h6 class="mb-0 fs-14 fw-semibold">
                                                                                Laura Biding</h6>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td><span class="mt-sm-2 d-block">22 Feb
                                                                        2021</span></td>
                                                                <td><span
                                                                        class="fw-semibold mt-sm-2 d-block">$7.76.654</span>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex">
                                                                        <div class="mt-0 mt-sm-3 d-block">
                                                                            <h6 class="mb-0 fs-14 fw-semibold">
                                                                                Cash on Delivery</h6>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="mt-sm-1 d-block">
                                                                        <span
                                                                            class="badge bg-success-transparent rounded-pill text-success p-2 px-3">Shipped</span>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="g-2">
                                                                        <a class="btn text-primary btn-sm"
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-original-title="Edit"><span
                                                                                class="fe fe-edit fs-14"></span></a>
                                                                        <a class="btn text-danger btn-sm"
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-original-title="Delete"><span
                                                                                class="fe fe-trash-2 fs-14"></span></a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="tab7" role="tabpanel">
                                                <div class="table-responsive">
                                                    <table class="table table-bordered text-nowrap mb-0">
                                                        <thead class="border-top">
                                                            <tr>
                                                                <th class="bg-transparent border-bottom-0"
                                                                    style="width: 5%;">Tracking Id</th>
                                                                <th class="bg-transparent border-bottom-0">
                                                                    Product</th>
                                                                <th class="bg-transparent border-bottom-0">
                                                                    Customer</th>
                                                                <th class="bg-transparent border-bottom-0">
                                                                    Date</th>
                                                                <th class="bg-transparent border-bottom-0">
                                                                    Amount</th>
                                                                <th class="bg-transparent border-bottom-0">
                                                                    Payment Mode</th>
                                                                <th class="bg-transparent border-bottom-0"
                                                                    style="width: 10%;">Status</th>
                                                                <th class="bg-transparent border-bottom-0"
                                                                    style="width: 5%;">Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr class="border-bottom">
                                                                <td class="text-center">
                                                                    <div class="mt-0 mt-sm-2 d-block">
                                                                        <h6 class="mb-0 fs-14 fw-semibold">
                                                                            #98765490</h6>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex">
                                                                        <span class="avatar bradius"
                                                                            style="background-image: url(../assets/images/orders/10.jpg)"></span>
                                                                        <div class="ms-3 mt-0 mt-sm-2 d-block">
                                                                            <h6 class="mb-0 fs-14 fw-semibold">
                                                                                Headsets</h6>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex">
                                                                        <div class="mt-0 mt-sm-3 d-block">
                                                                            <h6 class="mb-0 fs-14 fw-semibold">
                                                                                Cherry Blossom</h6>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td><span class="mt-sm-2 d-block">30 Aug
                                                                        2021</span></td>
                                                                <td><span
                                                                        class="fw-semibold mt-sm-2 d-block">$6.721.5</span>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex">
                                                                        <div class="mt-0 mt-sm-3 d-block">
                                                                            <h6 class="mb-0 fs-14 fw-semibold">
                                                                                Online Payment</h6>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="mt-sm-1 d-block">
                                                                        <span
                                                                            class="badge bg-warning-transparent rounded-pill text-warning p-2 px-3">Pending</span>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="g-2">
                                                                        <a class="btn text-primary btn-sm"
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-original-title="Edit"><span
                                                                                class="fe fe-edit fs-14"></span></a>
                                                                        <a class="btn text-danger btn-sm"
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-original-title="Delete"><span
                                                                                class="fe fe-trash-2 fs-14"></span></a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr class="border-bottom">
                                                                <td class="text-center">
                                                                    <div class="mt-0 mt-sm-2 d-block">
                                                                        <h6 class="mb-0 fs-14 fw-semibold">
                                                                            #23986456</h6>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex">
                                                                        <span class="avatar bradius"
                                                                            style="background-image: url(../assets/images/orders/4.jpg)"></span>
                                                                        <div class="ms-3 mt-0 mt-sm-2 d-block">
                                                                            <h6 class="mb-0 fs-14 fw-semibold">
                                                                                Pen Drive</h6>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex">
                                                                        <div class="mt-0 mt-sm-3 d-block">
                                                                            <h6 class="mb-0 fs-14 fw-semibold">
                                                                                Manny Jah</h6>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td><span class="mt-sm-2 d-block">27 Jan
                                                                        2021</span></td>
                                                                <td><span
                                                                        class="fw-semibold mt-sm-2 d-block">$5,89,6437</span>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex">
                                                                        <div class="mt-0 mt-sm-3 d-block">
                                                                            <h6 class="mb-0 fs-14 fw-semibold">
                                                                                Cash on Delivery</h6>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="mt-sm-1 d-block">
                                                                        <span
                                                                            class="badge bg-warning-transparent rounded-pill text-warning p-2 px-3">Pending</span>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="g-2">
                                                                        <a class="btn text-primary btn-sm"
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-original-title="Edit"><span
                                                                                class="fe fe-edit fs-14"></span></a>
                                                                        <a class="btn text-danger btn-sm"
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-original-title="Delete"><span
                                                                                class="fe fe-trash-2 fs-14"></span></a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr class="border-bottom">
                                                                <td class="text-center">
                                                                    <div class="mt-0 mt-sm-2 d-block">
                                                                        <h6 class="mb-0 fs-14 fw-semibold">
                                                                            #87456325</h6>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex">
                                                                        <span class="avatar bradius"
                                                                            style="background-image: url(../assets/images/orders/8.jpg)"></span>
                                                                        <div class="ms-3 mt-0 mt-sm-2 d-block">
                                                                            <h6 class="mb-0 fs-14 fw-semibold">
                                                                                New Bowl</h6>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex">
                                                                        <div class="mt-0 mt-sm-3 d-block">
                                                                            <h6 class="mb-0 fs-14 fw-semibold">
                                                                                Florinda Carasco</h6>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td><span class="mt-sm-2 d-block">19 Sep
                                                                        2021</span></td>
                                                                <td><span
                                                                        class="fw-semibold mt-sm-2 d-block">$17.98</span>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex">
                                                                        <div class="mt-0 mt-sm-3 d-block">
                                                                            <h6 class="mb-0 fs-14 fw-semibold">
                                                                                Online Payment</h6>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="mt-sm-1 d-block">
                                                                        <span
                                                                            class="badge bg-warning-transparent rounded-pill text-warning p-2 px-3">Pending</span>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="g-2">
                                                                        <a class="btn text-primary btn-sm"
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-original-title="Edit"><span
                                                                                class="fe fe-edit fs-14"></span></a>
                                                                        <a class="btn text-danger btn-sm"
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-original-title="Delete"><span
                                                                                class="fe fe-trash-2 fs-14"></span></a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr class="border-bottom">
                                                                <td class="text-center">
                                                                    <div class="mt-0 mt-sm-2 d-block">
                                                                        <h6 class="mb-0 fs-14 fw-semibold">
                                                                            #65783926</h6>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex">
                                                                        <span class="avatar bradius"
                                                                            style="background-image: url(../assets/images/orders/6.jpg)"></span>
                                                                        <div class="ms-3 mt-0 mt-sm-2 d-block">
                                                                            <h6 class="mb-0 fs-14 fw-semibold">
                                                                                Leather Watch</h6>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex">
                                                                        <div class="mt-0 mt-sm-3 d-block">
                                                                            <h6 class="mb-0 fs-14 fw-semibold">
                                                                                Ivan Notheridiya</h6>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td><span class="mt-sm-2 d-block">06 Oct
                                                                        2021</span></td>
                                                                <td><span
                                                                        class="fw-semibold mt-sm-2 d-block">$8.654.4</span>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex">
                                                                        <div class="mt-0 mt-sm-3 d-block">
                                                                            <h6 class="mb-0 fs-14 fw-semibold">
                                                                                Cash on Delivery</h6>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="mt-sm-1 d-block">
                                                                        <span
                                                                            class="badge bg-warning-transparent rounded-pill text-warning p-2 px-3">Pending</span>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="g-2">
                                                                        <a class="btn text-primary btn-sm"
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-original-title="Edit"><span
                                                                                class="fe fe-edit fs-14"></span></a>
                                                                        <a class="btn text-danger btn-sm"
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-original-title="Delete"><span
                                                                                class="fe fe-trash-2 fs-14"></span></a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr class="border-bottom">
                                                                <td class="text-center">
                                                                    <div class="mt-0 mt-sm-2 d-block">
                                                                        <h6 class="mb-0 fs-14 fw-semibold">
                                                                            #34654895</h6>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex">
                                                                        <span class="avatar bradius"
                                                                            style="background-image: url(../assets/images/orders/1.jpg)"></span>
                                                                        <div class="ms-3 mt-0 mt-sm-2 d-block">
                                                                            <h6 class="mb-0 fs-14 fw-semibold">
                                                                                Digital Camera</h6>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex">
                                                                        <div class="mt-0 mt-sm-3 d-block">
                                                                            <h6 class="mb-0 fs-14 fw-semibold">
                                                                                Willie Findit</h6>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td><span class="mt-sm-2 d-block">10 Jul
                                                                        2021</span></td>
                                                                <td><span
                                                                        class="fw-semibold mt-sm-2 d-block">$8.654.4</span>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex">
                                                                        <div class="mt-0 mt-sm-3 d-block">
                                                                            <h6 class="mb-0 fs-14 fw-semibold">
                                                                                Cash on Delivery</h6>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="mt-sm-1 d-block">
                                                                        <span
                                                                            class="badge bg-warning-transparent rounded-pill text-warning p-2 px-3">Pending</span>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="g-2">
                                                                        <a class="btn text-primary btn-sm"
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-original-title="Edit"><span
                                                                                class="fe fe-edit fs-14"></span></a>
                                                                        <a class="btn text-danger btn-sm"
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-original-title="Delete"><span
                                                                                class="fe fe-trash-2 fs-14"></span></a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr class="border-bottom">
                                                                <td class="text-center">
                                                                    <div class="mt-0 mt-sm-2 d-block">
                                                                        <h6 class="mb-0 fs-14 fw-semibold">
                                                                            #98765345</h6>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex">
                                                                        <span class="avatar bradius"
                                                                            style="background-image: url(../assets/images/orders/11.jpg)"></span>
                                                                        <div class="ms-3 mt-0 mt-sm-2 d-block">
                                                                            <h6 class="mb-0 fs-14 fw-semibold">
                                                                                Earphones</h6>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex">
                                                                        <div class="mt-0 mt-sm-3 d-block">
                                                                            <h6 class="mb-0 fs-14 fw-semibold">
                                                                                Addie Minstra</h6>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td><span class="mt-sm-2 d-block">25 Jun
                                                                        2021</span></td>
                                                                <td><span
                                                                        class="fw-semibold mt-sm-2 d-block">$7,34,9768</span>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex">
                                                                        <div class="mt-0 mt-sm-3 d-block">
                                                                            <h6 class="mb-0 fs-14 fw-semibold">
                                                                                Online Payment</h6>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="mt-sm-1 d-block">
                                                                        <span
                                                                            class="badge bg-warning-transparent rounded-pill text-warning p-2 px-3">Pending</span>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="g-2">
                                                                        <a class="btn text-primary btn-sm"
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-original-title="Edit"><span
                                                                                class="fe fe-edit fs-14"></span></a>
                                                                        <a class="btn text-danger btn-sm"
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-original-title="Delete"><span
                                                                                class="fe fe-trash-2 fs-14"></span></a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr class="border-bottom">
                                                                <td class="text-center">
                                                                    <div class="mt-0 mt-sm-2 d-block">
                                                                        <h6 class="mb-0 fs-14 fw-semibold">
                                                                            #67546577</h6>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex">
                                                                        <span class="avatar bradius"
                                                                            style="background-image: url(../assets/images/orders/2.jpg)"></span>
                                                                        <div class="ms-3 mt-0 mt-sm-2 d-block">
                                                                            <h6 class="mb-0 fs-14 fw-semibold">
                                                                                Shoes</h6>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex">
                                                                        <div class="mt-0 mt-sm-3 d-block">
                                                                            <h6 class="mb-0 fs-14 fw-semibold">
                                                                                Laura Biding</h6>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td><span class="mt-sm-2 d-block">22 Feb
                                                                        2021</span></td>
                                                                <td><span
                                                                        class="fw-semibold mt-sm-2 d-block">$7.76.654</span>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex">
                                                                        <div class="mt-0 mt-sm-3 d-block">
                                                                            <h6 class="mb-0 fs-14 fw-semibold">
                                                                                Cash on Delivery</h6>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="mt-sm-1 d-block">
                                                                        <span
                                                                            class="badge bg-warning-transparent rounded-pill text-warning p-2 px-3">Pending</span>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="g-2">
                                                                        <a class="btn text-primary btn-sm"
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-original-title="Edit"><span
                                                                                class="fe fe-edit fs-14"></span></a>
                                                                        <a class="btn text-danger btn-sm"
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-original-title="Delete"><span
                                                                                class="fe fe-trash-2 fs-14"></span></a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="tab8" role="tabpanel">
                                                <div class="table-responsive">
                                                    <table class="table table-bordered text-nowrap mb-0">
                                                        <thead class="border-top">
                                                            <tr>
                                                                <th class="bg-transparent border-bottom-0"
                                                                    style="width: 5%;">Tracking Id</th>
                                                                <th class="bg-transparent border-bottom-0">
                                                                    Product</th>
                                                                <th class="bg-transparent border-bottom-0">
                                                                    Customer</th>
                                                                <th class="bg-transparent border-bottom-0">
                                                                    Date</th>
                                                                <th class="bg-transparent border-bottom-0">
                                                                    Amount</th>
                                                                <th class="bg-transparent border-bottom-0">
                                                                    Payment Mode</th>
                                                                <th class="bg-transparent border-bottom-0"
                                                                    style="width: 10%;">Status</th>
                                                                <th class="bg-transparent border-bottom-0"
                                                                    style="width: 5%;">Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr class="border-bottom">
                                                                <td class="text-center">
                                                                    <div class="mt-0 mt-sm-2 d-block">
                                                                        <h6 class="mb-0 fs-14 fw-semibold">
                                                                            #98765490</h6>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex">
                                                                        <span class="avatar bradius"
                                                                            style="background-image: url(../assets/images/orders/10.jpg)"></span>
                                                                        <div class="ms-3 mt-0 mt-sm-2 d-block">
                                                                            <h6 class="mb-0 fs-14 fw-semibold">
                                                                                Headsets</h6>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex">
                                                                        <div class="mt-0 mt-sm-3 d-block">
                                                                            <h6 class="mb-0 fs-14 fw-semibold">
                                                                                Cherry Blossom</h6>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td><span class="mt-sm-2 d-block">30 Aug
                                                                        2021</span></td>
                                                                <td><span
                                                                        class="fw-semibold mt-sm-2 d-block">$6.721.5</span>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex">
                                                                        <div class="mt-0 mt-sm-3 d-block">
                                                                            <h6 class="mb-0 fs-14 fw-semibold">
                                                                                Online Payment</h6>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="mt-sm-1 d-block">
                                                                        <span
                                                                            class="badge bg-danger-transparent rounded-pill text-danger p-2 px-3">Cancelled</span>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="g-2">
                                                                        <a class="btn text-primary btn-sm"
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-original-title="Edit"><span
                                                                                class="fe fe-edit fs-14"></span></a>
                                                                        <a class="btn text-danger btn-sm"
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-original-title="Delete"><span
                                                                                class="fe fe-trash-2 fs-14"></span></a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr class="border-bottom">
                                                                <td class="text-center">
                                                                    <div class="mt-0 mt-sm-2 d-block">
                                                                        <h6 class="mb-0 fs-14 fw-semibold">
                                                                            #76348798</h6>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex">
                                                                        <span class="avatar bradius"
                                                                            style="background-image: url(../assets/images/orders/12.jpg)"></span>
                                                                        <div class="ms-3 mt-0 mt-sm-2 d-block">
                                                                            <h6 class="mb-0 fs-14 fw-semibold">
                                                                                Flower Pot</h6>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex">
                                                                        <div class="mt-0 mt-sm-3 d-block">
                                                                            <h6 class="mb-0 fs-14 fw-semibold">
                                                                                Simon Sais</h6>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td><span class="mt-sm-2 d-block">15 Nov
                                                                        2021</span></td>
                                                                <td><span
                                                                        class="fw-semibold mt-sm-2 d-block">$35,7863</span>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex">
                                                                        <div class="mt-0 mt-sm-3 d-block">
                                                                            <h6 class="mb-0 fs-14 fw-semibold">
                                                                                Online Payment</h6>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="mt-sm-1 d-block">
                                                                        <span
                                                                            class="badge bg-danger-transparent rounded-pill text-danger p-2 px-3">Cancelled</span>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="g-2">
                                                                        <a class="btn text-primary btn-sm"
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-original-title="Edit"><span
                                                                                class="fe fe-edit fs-14"></span></a>
                                                                        <a class="btn text-danger btn-sm"
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-original-title="Delete"><span
                                                                                class="fe fe-trash-2 fs-14"></span></a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr class="border-bottom">
                                                                <td class="text-center">
                                                                    <div class="mt-0 mt-sm-2 d-block">
                                                                        <h6 class="mb-0 fs-14 fw-semibold">
                                                                            #23986456</h6>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex">
                                                                        <span class="avatar bradius"
                                                                            style="background-image: url(../assets/images/orders/4.jpg)"></span>
                                                                        <div class="ms-3 mt-0 mt-sm-2 d-block">
                                                                            <h6 class="mb-0 fs-14 fw-semibold">
                                                                                Pen Drive</h6>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex">
                                                                        <div class="mt-0 mt-sm-3 d-block">
                                                                            <h6 class="mb-0 fs-14 fw-semibold">
                                                                                Manny Jah</h6>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td><span class="mt-sm-2 d-block">27 Jan
                                                                        2021</span></td>
                                                                <td><span
                                                                        class="fw-semibold mt-sm-2 d-block">$5,89,6437</span>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex">
                                                                        <div class="mt-0 mt-sm-3 d-block">
                                                                            <h6 class="mb-0 fs-14 fw-semibold">
                                                                                Cash on Delivery</h6>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="mt-sm-1 d-block">
                                                                        <span
                                                                            class="badge bg-danger-transparent rounded-pill text-danger p-2 px-3">Cancelled</span>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="g-2">
                                                                        <a class="btn text-primary btn-sm"
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-original-title="Edit"><span
                                                                                class="fe fe-edit fs-14"></span></a>
                                                                        <a class="btn text-danger btn-sm"
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-original-title="Delete"><span
                                                                                class="fe fe-trash-2 fs-14"></span></a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr class="border-bottom">
                                                                <td class="text-center">
                                                                    <div class="mt-0 mt-sm-2 d-block">
                                                                        <h6 class="mb-0 fs-14 fw-semibold">
                                                                            #87456325</h6>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex">
                                                                        <span class="avatar bradius"
                                                                            style="background-image: url(../assets/images/orders/8.jpg)"></span>
                                                                        <div class="ms-3 mt-0 mt-sm-2 d-block">
                                                                            <h6 class="mb-0 fs-14 fw-semibold">
                                                                                New Bowl</h6>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex">
                                                                        <div class="mt-0 mt-sm-3 d-block">
                                                                            <h6 class="mb-0 fs-14 fw-semibold">
                                                                                Florinda Carasco</h6>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td><span class="mt-sm-2 d-block">19 Sep
                                                                        2021</span></td>
                                                                <td><span
                                                                        class="fw-semibold mt-sm-2 d-block">$17.98</span>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex">
                                                                        <div class="mt-0 mt-sm-3 d-block">
                                                                            <h6 class="mb-0 fs-14 fw-semibold">
                                                                                Online Payment</h6>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="mt-sm-1 d-block">
                                                                        <span
                                                                            class="badge bg-danger-transparent rounded-pill text-danger p-2 px-3">Cancelled</span>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="g-2">
                                                                        <a class="btn text-primary btn-sm"
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-original-title="Edit"><span
                                                                                class="fe fe-edit fs-14"></span></a>
                                                                        <a class="btn text-danger btn-sm"
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-original-title="Delete"><span
                                                                                class="fe fe-trash-2 fs-14"></span></a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr class="border-bottom">
                                                                <td class="text-center">
                                                                    <div class="mt-0 mt-sm-2 d-block">
                                                                        <h6 class="mb-0 fs-14 fw-semibold">
                                                                            #65783926</h6>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex">
                                                                        <span class="avatar bradius"
                                                                            style="background-image: url(../assets/images/orders/6.jpg)"></span>
                                                                        <div class="ms-3 mt-0 mt-sm-2 d-block">
                                                                            <h6 class="mb-0 fs-14 fw-semibold">
                                                                                Leather Watch</h6>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex">
                                                                        <div class="mt-0 mt-sm-3 d-block">
                                                                            <h6 class="mb-0 fs-14 fw-semibold">
                                                                                Ivan Notheridiya</h6>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td><span class="mt-sm-2 d-block">06 Oct
                                                                        2021</span></td>
                                                                <td><span
                                                                        class="fw-semibold mt-sm-2 d-block">$8.654.4</span>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex">
                                                                        <div class="mt-0 mt-sm-3 d-block">
                                                                            <h6 class="mb-0 fs-14 fw-semibold">
                                                                                Cash on Delivery</h6>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="mt-sm-1 d-block">
                                                                        <span
                                                                            class="badge bg-danger-transparent rounded-pill text-danger p-2 px-3">Cancelled</span>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="g-2">
                                                                        <a class="btn text-primary btn-sm"
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-original-title="Edit"><span
                                                                                class="fe fe-edit fs-14"></span></a>
                                                                        <a class="btn text-danger btn-sm"
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-original-title="Delete"><span
                                                                                class="fe fe-trash-2 fs-14"></span></a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr class="border-bottom">
                                                                <td class="text-center">
                                                                    <div class="mt-0 mt-sm-2 d-block">
                                                                        <h6 class="mb-0 fs-14 fw-semibold">
                                                                            #34654895</h6>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex">
                                                                        <span class="avatar bradius"
                                                                            style="background-image: url(../assets/images/orders/1.jpg)"></span>
                                                                        <div class="ms-3 mt-0 mt-sm-2 d-block">
                                                                            <h6 class="mb-0 fs-14 fw-semibold">
                                                                                Digital Camera</h6>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex">
                                                                        <div class="mt-0 mt-sm-3 d-block">
                                                                            <h6 class="mb-0 fs-14 fw-semibold">
                                                                                Willie Findit</h6>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td><span class="mt-sm-2 d-block">10 Jul
                                                                        2021</span></td>
                                                                <td><span
                                                                        class="fw-semibold mt-sm-2 d-block">$8.654.4</span>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex">
                                                                        <div class="mt-0 mt-sm-3 d-block">
                                                                            <h6 class="mb-0 fs-14 fw-semibold">
                                                                                Cash on Delivery</h6>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="mt-sm-1 d-block">
                                                                        <span
                                                                            class="badge bg-danger-transparent rounded-pill text-danger p-2 px-3">Cancelled</span>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="g-2">
                                                                        <a class="btn text-primary btn-sm"
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-original-title="Edit"><span
                                                                                class="fe fe-edit fs-14"></span></a>
                                                                        <a class="btn text-danger btn-sm"
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-original-title="Delete"><span
                                                                                class="fe fe-trash-2 fs-14"></span></a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
