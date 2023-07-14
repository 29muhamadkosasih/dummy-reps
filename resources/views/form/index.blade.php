@extends('layout.app')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="col-12 col-xl-12 col-sm-12">
            <div class="card">
                <div class="card-datatable table-responsive m-2 me-5">
                    <div class="d-flex justify-content-end">
                        {{-- <button type="button" class="btn btn-primary justify-content-end" data-bs-toggle="modal"
                            data-bs-target="#addNewCCModal" style="margin-right: 40px">
                            Create
                        </button>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#modalScrollable">
                            Option 2
                        </button> --}}
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal5">
                            Create
                        </button>
                        {{-- <a href="{{route('form.create')}}" class="btn btn-primary">Add</a> --}}
                    </div>
                    <table class="table border-top zero-configuration">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Description</th>
                                <th>Unit</th>
                                <th>Qty</th>
                                <th>Price</th>
                                <th>Total</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($form as $item)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $item->description }}</td>
                                <td>{{ $item->unit }}</td>
                                <td>{{ $item->qty }}</td>
                                <td>Rp. {{ number_format($item->price, 0, ',', '.') }}</td>
                                <td>Rp. {{ number_format($item->total, 0, ',', '.') }}</td>

                                <td>
                                    <a href="{{ route('form.show',$item->id) }}" class="btn btn-secondary">Detail</a>
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

<!-- Add New Credit Card Modal -->
<div class="modal fade" id="addNewCCModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered1 modal-simple modal-add-new-cc">
        <div class="modal-content p-3 p-md-5">
            <div class="modal-body">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="text-center mb-2">
                    <h3 class=">Add New Card</h3>
                    <p class=" text-muted">Buat Pengajuan Dana</p>
                </div>
                <form action="{{ route('form.store') }}" method="POST" enctype="multipart/form-data"
                    class="employee-form row g-3">
                    @csrf
                    <div class="form-section col-12 col-md-4">
                        <label class="form-label" for="from">Dari</label>
                        <input type="text" id="from" name="from" class="form-control" placeholder="John Doe." />
                    </div>
                    <div class="form-section col-12 col-md-4">
                        <label class="form-label" for="ketegori_pengajuan">Kategori Pengajuan</label>
                        <select id="ketegori_pengajuan" name="ketegori_pengajuan" class="form-select"
                            aria-label="Default select example">
                            <option selected>-- Pilih --</option>
                            <option value="Advance">Advance</option>
                            <option value="Reimburse">Reimburse</option>
                            <option value="Payment">Payment</option>

                        </select>
                    </div>
                    <div class="form-section col-12 col-md-4">
                        <label class="form-label" for="departement">Departement</label>
                        <select id="departement" name="departement" class="form-select"
                            aria-label="Default select example">
                            <option selected>-- Pilih --</option>
                            <option value="Marketing">Marketing</option>
                            <option value="Finance">Finance</option>
                            <option value="Supervisor">Supervisor</option>

                        </select>
                    </div>

                    <div class="form-section col-12 col-md-4 ">
                        <label class="form-label" for="tanggal_kebutuhan">Tanggal Kebutuhan</label>
                        <input type="date" id="tanggal_kebutuhan" name="tanggal_kebutuhan" class="form-control"
                            placeholder="John Doe." />
                    </div>
                    <div class="form-section col-12 col-md-4">
                        <label class="form-label" for="payment">Payment</label>
                        <select id="payment" name="payment" class="form-select" aria-label="Default select example">
                            <option selected>-- Pilih --</option>
                            <option value="Cash">Cash</option>
                            <option value="Transfer">Transfer</option>
                        </select>
                    </div>
                    <div class=" form-section col-12 col-md-4">
                        <label class="form-label" for="to">Ditujukan Untuk</label>
                        <select id="to" name="to" class="form-select" aria-label="Default select example">
                            <option selected>-- Pilih --</option>
                            <option value="SPV">SPV</option>
                            <option value="Finance">Finance</option>
                            <option value="Manager">Manager</option>
                            <option value="Direktur Utama">Direktur Utama</option>

                        </select>
                    </div>
                    <div class="form-section col-12">
                        <label class="form-label" for="description">Description</label>
                        <input type="text" id="description" name="description" class="form-control"
                            placeholder="john.doe.007" />
                    </div>

                    <div class="form-section col-12">
                        <label class="form-label" for="unit">Unit</label>
                        <input type="text" id="unit" name="unit" class="form-control" placeholder="john.doe.007" />
                    </div>
                    <div class="form-section col-12 col-md-6">
                        <label class="form-label" for="price">Price</label>
                        <input type="text" id="price" name="price" class="form-control" placeholder="John Doe." />
                    </div>

                    <div class="form-section col-12 col-md-6">
                        <label class="form-label" for="qty">Qty</label>
                        <input type="number" id="qty" name="qty" class="form-control" placeholder="John Doe." />
                    </div>
                    <div class="form-navigation col-12 text-center">
                        <button type="button"
                            class="previous btn btn-sencondary me-sm-3 me-1 float-left">Previous</button>
                        <button type="button" class="next btn btn-primary me-sm-3 me-1 float-right">Next</button>
                        <button type="submit" class="btn btn-primary me-sm-3 me-1 float-right">Ajukan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!--/ Add New Credit Card Modal -->

<!-- Modal -->
<div class="modal fade" id="modalScrollable" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalScrollableTitle">Buat Pengajuan Dana</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('form.store') }}" method="POST" enctype="multipart/form-data"
                    class="employee-form row g-3">
                    @csrf
                    <div class="form-section col-12 col-md-4">
                        <label class="form-label" for="from">Dari</label>
                        <input type="text" id="from" name="from" class="form-control" placeholder="John Doe." />
                    </div>
                    <div class="form-section col-12 col-md-4">
                        <label class="form-label" for="ketegori_pengajuan">Kategori Pengajuan</label>
                        <select id="ketegori_pengajuan" name="ketegori_pengajuan" class="form-select"
                            aria-label="Default select example">
                            <option selected>-- Pilih --</option>
                            <option value="Advance">Advance</option>
                            <option value="Reimburse">Reimburse</option>
                            <option value="Payment">Payment</option>

                        </select>
                    </div>
                    <div class="form-section col-12 col-md-4">
                        <label class="form-label" for="departement">Departement</label>
                        <select id="departement" name="departement" class="form-select"
                            aria-label="Default select example">
                            <option selected>-- Pilih --</option>
                            <option value="Marketing">Marketing</option>
                            <option value="Finance">Finance</option>
                            <option value="Supervisor">Supervisor</option>

                        </select>
                    </div>

                    <div class="form-section col-12 col-md-4 ">
                        <label class="form-label" for="tanggal_kebutuhan">Tanggal Kebutuhan</label>
                        <input type="date" id="tanggal_kebutuhan" name="tanggal_kebutuhan" class="form-control"
                            placeholder="John Doe." />
                    </div>
                    <div class="form-section col-12 col-md-4">
                        <label class="form-label" for="payment">Payment</label>
                        <select id="payment" name="payment" class="form-select" aria-label="Default select example">
                            <option selected>-- Pilih --</option>
                            <option value="Cash">Cash</option>
                            <option value="Transfer">Transfer</option>
                        </select>
                    </div>
                    <div class=" form-section col-12 col-md-4">
                        <label class="form-label" for="to">Ditujukan Untuk</label>
                        <select id="to" name="to" class="form-select" aria-label="Default select example">
                            <option selected>-- Pilih --</option>
                            <option value="SPV">SPV</option>
                            <option value="Finance">Finance</option>
                            <option value="Manager">Manager</option>
                            <option value="Direktur Utama">Direktur Utama</option>

                        </select>
                    </div>
                    <div class="form-section col-12">
                        <label class="form-label" for="description">Description</label>
                        <input type="text" id="description" name="description" class="form-control"
                            placeholder="john.doe.007" />
                    </div>

                    <div class="form-section col-12">
                        <label class="form-label" for="unit">Unit</label>
                        <input type="text" id="unit" name="unit" class="form-control" placeholder="john.doe.007" />
                    </div>
                    <div class="form-section col-12 col-md-6">
                        <label class="form-label" for="price">Price</label>
                        <input type="text" id="price" name="price" class="form-control" placeholder="John Doe." />
                    </div>

                    <div class="form-section col-12 col-md-6">
                        <label class="form-label" for="qty">Qty</label>
                        <input type="number" id="qty" name="qty" class="form-control" placeholder="John Doe." />
                    </div>
                </form>
                <hr class="mt-5 mb-4" />
                <div class="employee-form row g-3">
                    <div class="form-section col-12">
                        <label class="form-label" for="description">Description</label>
                        <input type="text" id="description" name="description" class="form-control"
                            placeholder="john.doe.007" />
                    </div>

                    <div class="form-section col-12">
                        <label class="form-label" for="unit">Unit</label>
                        <input type="text" id="unit" name="unit" class="form-control" placeholder="john.doe.007" />
                    </div>
                    <div class="form-section col-12 col-md-6">
                        <label class="form-label" for="price">Price</label>
                        <input type="text" id="price" name="price" class="form-control" placeholder="John Doe." />
                    </div>

                    <div class="form-section col-12 col-md-6">
                        <label class="form-label" for="qty">Qty</label>
                        <input type="number" id="qty" name="qty" class="form-control" placeholder="John Doe." />
                    </div>
                </div>
                <hr class="mt-5 mb-4" />
                <div class="employee-form row g-3">
                    <div class="form-section col-12">
                        <label class="form-label" for="description">Description</label>
                        <input type="text" id="description" name="description" class="form-control"
                            placeholder="john.doe.007" />
                    </div>

                    <div class="form-section col-12">
                        <label class="form-label" for="unit">Unit</label>
                        <input type="text" id="unit" name="unit" class="form-control" placeholder="john.doe.007" />
                    </div>
                    <div class="form-section col-12 col-md-6">
                        <label class="form-label" for="price">Price</label>
                        <input type="text" id="price" name="price" class="form-control" placeholder="John Doe." />
                    </div>

                    <div class="form-section col-12 col-md-6">
                        <label class="form-label" for="qty">Qty</label>
                        <input type="number" id="qty" name="qty" class="form-control" placeholder="John Doe." />
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">
                            Close
                        </button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modal5" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalScrollableTitle">Buat Pengajuan Dana</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('form.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="accordion mt-1" id="accordionWithIcon">
                        <div class="card accordion-item active">
                            <h2 class="accordion-header d-flex align-items-center">
                                <button type="button" class="accordion-button" data-bs-toggle="collapse"
                                    data-bs-target="#accordionWithIcon-1" aria-expanded="true">
                                    Information Pengajuan
                                </button>
                            </h2>
                            <div id="accordionWithIcon-1" class="accordion-collapse collapse show">
                                <div class="accordion-body">
                                    <div class="row g-3">
                                        <div class="form-section col-12 col-md-4">
                                            <label class="form-label" for="from">Dari</label>
                                            <input type="text" id="from" name="from" class="form-control"
                                                placeholder="John Doe." />
                                        </div>
                                        <div class="form-section col-12 col-md-4">
                                            <label class="form-label" for="ketegori_pengajuan">Kategori
                                                Pengajuan</label>
                                            <select id="ketegori_pengajuan" name="ketegori_pengajuan"
                                                class="form-select" aria-label="Default select example">
                                                <option selected>-- Pilih --</option>
                                                <option value="Advance">Advance</option>
                                                <option value="Reimburse">Reimburse</option>
                                                <option value="Payment">Payment</option>

                                            </select>
                                        </div>
                                        <div class="form-section col-12 col-md-4">
                                            <label class="form-label" for="departement">Departement</label>
                                            <select id="departement" name="departement" class="form-select"
                                                aria-label="Default select example">
                                                <option selected>-- Pilih --</option>
                                                <option value="Marketing">Marketing</option>
                                                <option value="Finance">Finance</option>
                                                <option value="Supervisor">Supervisor</option>

                                            </select>
                                        </div>

                                        <div class="form-section col-12 col-md-4 ">
                                            <label class="form-label" for="tanggal_kebutuhan">Tanggal
                                                Kebutuhan</label>
                                            <input type="date" id="tanggal_kebutuhan" name="tanggal_kebutuhan"
                                                class="form-control" placeholder="John Doe." />
                                        </div>
                                        <div class="form-section col-12 col-md-4">
                                            <label class="form-label" for="payment">Payment</label>
                                            <select id="payment" name="payment" class="form-select"
                                                aria-label="Default select example">
                                                <option selected>-- Pilih --</option>
                                                <option value="Cash">Cash</option>
                                                <option value="Transfer">Transfer</option>
                                            </select>
                                        </div>
                                        <div class=" form-section col-12 col-md-4">
                                            <label class="form-label" for="to">Ditujukan Untuk</label>
                                            <select id="to" name="to" class="form-select"
                                                aria-label="Default select example">
                                                <option selected>-- Pilih --</option>
                                                <option value="SPV">SPV</option>
                                                <option value="Finance">Finance</option>
                                                <option value="Manager">Manager</option>
                                                <option value="Direktur Utama">Direktur Utama</option>

                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item card">
                            <h2 class="accordion-header d-flex align-items-center">
                                <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#accordionWithIcon-2" aria-expanded="false">
                                    Form Pengajuan 1
                                </button>
                            </h2>
                            <div id="accordionWithIcon-2" class="accordion-collapse collapse">
                                <div class="accordion-body">
                                    <div class="employee-form row g-3">
                                        <div class="form-section col-12">
                                            <label class="form-label" for="description">Description</label>
                                            <input type="text" id="description" name="description" class="form-control"
                                                placeholder="john.doe.007" />
                                        </div>

                                        <div class="form-section col-12">
                                            <label class="form-label" for="unit">Unit</label>
                                            <input type="text" id="unit" name="unit" class="form-control"
                                                placeholder="john.doe.007" />
                                        </div>
                                        <div class="form-section col-12 col-md-6">
                                            <label class="form-label" for="price">Price</label>
                                            <input type="text" id="price" name="price" class="form-control"
                                                placeholder="John Doe." />
                                        </div>

                                        <div class="form-section col-12 col-md-6">
                                            <label class="form-label" for="qty">Qty</label>
                                            <input type="number" id="qty" name="qty" class="form-control"
                                                placeholder="John Doe." />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item card">
                            <h2 class="accordion-header d-flex align-items-center">
                                <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#accordionWithIcon-3" aria-expanded="false">
                                    Form Pengajuan 2
                                </button>
                            </h2>
                            <div id="accordionWithIcon-3" class="accordion-collapse collapse">
                                <div class="accordion-body">
                                    <div class="employee-form row g-3">
                                        <div class="form-section col-12">
                                            <label class="form-label" for="description">Description</label>
                                            <input type="text" id="description" name="description2" class="form-control"
                                                placeholder="john.doe.007" />
                                        </div>

                                        <div class="form-section col-12">
                                            <label class="form-label" for="unit">Unit</label>
                                            <input type="text" id="unit" name="unit2" class="form-control"
                                                placeholder="john.doe.007" />
                                        </div>

                                        <div class="form-section col-12 col-md-6">
                                            <label class="form-label" for="price">Price</label>
                                            <input type="text" id="price" name="price2" class="form-control"
                                                placeholder="John Doe." />
                                        </div>

                                        <div class="form-section col-12 col-md-6">
                                            <label class="form-label" for="qty">Qty</label>
                                            <input type="number" id="qty" name="qty2" class="form-control"
                                                placeholder="John Doe." />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{--
                        <div class="accordion-item card">
                            <h2 class="accordion-header d-flex align-items-center">
                                <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#accordionWithIcon-4" aria-expanded="false">
                                    Form Pengajuan 3
                                </button>
                            </h2>
                            <div id="accordionWithIcon-4" class="accordion-collapse collapse">
                                <div class="accordion-body">
                                    <div class="employee-form row g-3">
                                        <div class="form-section col-12">
                                            <label class="form-label" for="description">Description</label>
                                            <input type="text" id="description" name="description" class="form-control"
                                                placeholder="john.doe.007" />
                                        </div>

                                        <div class="form-section col-12">
                                            <label class="form-label" for="unit">Unit</label>
                                            <input type="text" id="unit" name="unit" class="form-control"
                                                placeholder="john.doe.007" />
                                        </div>
                                        <div class="form-section col-12 col-md-6">
                                            <label class="form-label" for="price">Price</label>
                                            <input type="text" id="price" name="price" class="form-control"
                                                placeholder="John Doe." />
                                        </div>

                                        <div class="form-section col-12 col-md-6">
                                            <label class="form-label" for="qty">Qty</label>
                                            <input type="number" id="qty" name="qty" class="form-control"
                                                placeholder="John Doe." />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}

                        <div class="modal-footer">
                            <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">
                                Close
                            </button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>

                </div>
            </form>

        </div>
    </div>
</div>

@endsection
