@extends('layout.master')
@section('content')

{{-- cdn select --}}
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"
    integrity="sha512-2ImtlRlf2VVmiGZsjm9bEyhjGW4dU7B6TNwh/hx/iSByxNENtj3WVE6o/9Lj4TJeVXPi4bnOIMXFIJJAeufa0A=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script> --}}

<section id="complex-header-datatable">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header border-bottom">
                    <h4 class="card-title">Data Pengajuan </h4>
                    <div class="dt-action-buttons text-right">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#editUser">Create</button>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered zero-configuration">
                        <thead>
                            <tr>
                                <th width='10px' style="text-align: center">No</th>
                                <th>Tanggal Pengajuan</th>
                                <th>Dari</th>
                                <th>Departement</th>
                                <th>Untuk</th>
                                <th>Pengajuan</th>
                                <th>Payment</th>
                                <th>Tanggal Kebutuhan</th>
                                <th>Status</th>
                                <th width='150px' style="text-align: center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($form as $data)
                            <tr>
                                <td style="text-align: center">{{ $loop->iteration }}</td>
                                <td>
                                    {{ $data->created_at->format('Y-m-d')}}
                                </td>
                                <td>
                                    {{ $data->user->name }}
                                </td>
                                <td>
                                    {{ $data->departement->nama_departement }}
                                </td>
                                <td>
                                    {{ $data->to }}
                                </td>
                                <td>
                                    {{ $data->ketegori_pengajuan }}
                                </td>
                                <td>
                                    {{ $data->payment }}
                                </td>
                                <td>
                                    {{ $data->tanggal_kebutuhan }}
                                </td>
                                <td>
                                    @switch($data)
                                    @case($data->status == null)
                                    <span class="badge bg-secondary">Pending</span>
                                    @break
                                    @case($data->status == 2)
                                    <span class="badge bg-danger">Reject</span>
                                    @break
                                    @case($data->status == 3)
                                    <span class="badge bg-warning">Approve</span>
                                    @break
                                    @default
                                    <span class="badge bg-success">PAID</span>
                                    @endswitch
                                </td>
                                <td style="text-align: center">
                                    <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                        action="{{ route('form.destroy', $data->id) }}" method="POST">

                                        <a href="{{ route('form.show', $data->id) }}"
                                            class="btn btn-secondary btn-sm"><i data-feather='eye'></i></a>

                                        <a href="{{ route('form.edit', $data->id) }}" class="btn btn-warning btn-sm">
                                            <i data-feather='edit'></i>
                                        </a>
                                        {{-- <a href="" class="btn btn-success btn-sm">
                                            <i data-feather='check'></i>
                                        </a> --}}
                                        @csrf
                                        @method('DELETE')

                                        {{-- <button type="submit" class="btn btn-danger btn-sm">
                                            <i data-feather='trash'></i>
                                        </button> --}}
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Edit User Modal -->
    <div class="modal fade" id="editUser" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered modal-edit-user">
            <div class="modal-content">
                <div class="modal-header bg-transparent">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body pb-5 px-sm-5 pt-50">
                    <div class="text-center mb-2">
                        <h1 class="mb-0"> Buat Pengajuan Dana</h1>
                    </div>
                    <form action="{{ route('form.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col-xl-6 col-md-6 col-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="basicInput">
                                            <h5>Dari</h5>
                                        </label>
                                        <input type="text" class="form-control" id="basicInput" name="from_id"
                                            placeholder="Enter" required value="{{ Auth::user()->name }}" readonly />
                                    </div>
                                </div>
                                <div class="col-xl-6 col-md-6 col-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="basicInput">
                                            <h5>Kategori
                                                Pengajuan</h5>
                                        </label>
                                        <select class="form-select" id="selectDefault" name="ketegori_pengajuan"
                                            required>
                                            <option selected>Open this select</option>
                                            <option value="Advance">Advance</option>
                                            <option value="Reimburse">Reimburse</option>
                                            <option value="Payment">Payment</option>
                                        </select>
                                    </div>
                                </div>
                                <input type="hidden" name="departement_id" value="{{ Auth::user()->departement_id }}">
                                <div class="col-xl-4 col-md-6 col-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="basicInput">
                                            <h5>Tanggal
                                                Kebutuhan</h5>
                                        </label>
                                        <input type="date" class="form-control" id="basicInput" placeholder="Enter"
                                            name="tanggal_kebutuhan" required />
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-6 col-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="helpInputTop">
                                            <h5>Ditujukan Untuk</h5>
                                        </label>
                                        <select class="form-select" id="selectDefault" name="to" required>
                                            <option>Open this select</option>
                                            <option value="SPV">SPV</option>
                                            <option value="Finance">Finance</option>
                                            <option value="Manager">Manager</option>
                                            <option value="Direktur Utama">Direktur Utama</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-6 col-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="helpInputTop">
                                            <h5>Payment</h5>
                                        </label>
                                        <select class="form-select" id="selectDefault" name="payment" id="car"
                                            onchange="enableBrand(this)" required>
                                            <option selected>Open this select</option>
                                            <option value="Cash">Cash</option>
                                            <option value="Transfer">Transfer</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xl-12 col-md-12 col-12 d-none" id="carbrand">
                                    <div class="mb-0">
                                        <label class="form-label" for="select2-basic">
                                            <h5>Nama Rekening Penerima</h5>
                                        </label>
                                        <select class="select2 form-select" id="select2-basic" name="norek_id">
                                            <option></option>
                                            @foreach ($norek as $item)
                                            <option value="{{ $item->id }}">{{ $item->nama_penerima }}</option>
                                            @endforeach
                                        </select>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="accordionIcon" class="accordion accordion-without-arrow">
                            {{-- <h3>Pengajuan</h3> --}}
                            <div class="accordion-item">
                                <h2 class="accordion-header text-body d-flex justify-content-between"
                                    id="accordionIconTwo">
                                    <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
                                        data-bs-target="#accordionIcon-2" aria-controls="accordionIcon-2">
                                        Pengajuan 1
                                    </button>
                                </h2>
                                <div id="accordionIcon-2" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionIcon">
                                    <div class="accordion-body">
                                        <div class="row">
                                            <div class="col-xl-6 col-md-6 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="basicInput">
                                                        <h5>Description</h5>
                                                    </label>
                                                    <input type="text" class="form-control" id="basicInput"
                                                        name="description" placeholder="Enter" autofocus required />
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-md-6 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="basicInput">
                                                        <h5>Unit</h5>
                                                    </label>
                                                    <input type="text" class="form-control" id="basicInput" name="unit"
                                                        placeholder="Enter" autofocus required />
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-md-6 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="helpInputTop">
                                                        <h5>Price</h5>
                                                    </label>
                                                    <input type="number" class="form-control" id="basicInput"
                                                        name="price" placeholder="Enter" autofocus required />
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-md-6 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="basicInput">
                                                        <h5>Qty</h5>
                                                    </label>
                                                    <input type="number" class="form-control" id="basicInput" name="qty"
                                                        placeholder="Enter" autofocus required />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header text-body d-flex justify-content-between"
                                    id="accordionIconThree">
                                    <button type="button" class="accordion-button" data-bs-toggle="collapse"
                                        data-bs-target="#accordionIcon-3" aria-expanded="true"
                                        aria-controls="accordionIcon-3">
                                        Pengajuan 2
                                    </button>
                                </h2>
                                <div id="accordionIcon-3" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionIcon">
                                    <div class="accordion-body">
                                        <div class="row">
                                            <div class="col-xl-6 col-md-6 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="basicInput">
                                                        <h5>Description</h5>
                                                    </label>
                                                    <input type="text" class="form-control" id="basicInput"
                                                        name="description2" placeholder="Enter" autofocus />
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-md-6 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="basicInput">
                                                        <h5>Unit</h5>
                                                    </label>
                                                    <input type="text" class="form-control" id="basicInput" name="unit2"
                                                        placeholder="Enter" autofocus />
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-md-6 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="helpInputTop">
                                                        <h5>Price</h5>
                                                    </label>
                                                    <input type="number" class="form-control" id="basicInput"
                                                        name="price2" placeholder="Enter" autofocus />
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-md-6 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="basicInput">
                                                        <h5>Qty</h5>
                                                    </label>
                                                    <input type="number" class="form-control" id="basicInput"
                                                        name="qty2" placeholder="Enter" autofocus />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header text-body d-flex justify-content-between"
                                    id="accordionIconFour">
                                    <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
                                        data-bs-target="#accordionIcon-4" aria-controls="accordionIcon-4">
                                        Pengajuan 3
                                    </button>
                                </h2>
                                <div id="accordionIcon-4" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionIcon">
                                    <div class="accordion-body">
                                        <div class="row">
                                            <div class="col-xl-6 col-md-6 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="basicInput">
                                                        <h5>Description</h5>
                                                    </label>
                                                    <input type="text" class="form-control" id="basicInput"
                                                        name="description3" placeholder="Enter" autofocus />
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-md-6 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="basicInput">
                                                        <h5>Unit</h5>
                                                    </label>
                                                    <input type="text" class="form-control" id="basicInput" name="unit3"
                                                        placeholder="Enter" autofocus />
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-md-6 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="helpInputTop">
                                                        <h5>Price</h5>
                                                    </label>
                                                    <input type="number" class="form-control" id="basicInput"
                                                        name="price3" placeholder="Enter" autofocus />
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-md-6 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="basicInput">
                                                        <h5>Qty</h5>
                                                    </label>
                                                    <input type="number" class="form-control" id="basicInput"
                                                        name="qty3" placeholder="Enter" autofocus />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header text-body d-flex justify-content-between"
                                    id="accordionIconOne">
                                    <button type="button" class="accordion-button" data-bs-toggle="collapse"
                                        data-bs-target="#accordionIcon-1" aria-expanded="true"
                                        aria-controls="accordionIcon-1">
                                        Pengajuan 4
                                    </button>
                                </h2>
                                <div id="accordionIcon-1" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionIcon">
                                    <div class="accordion-body">
                                        <div class="row">
                                            <div class="col-xl-6 col-md-6 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="basicInput">
                                                        <h5>Description</h5>
                                                    </label>
                                                    <input type="text" class="form-control" id="basicInput"
                                                        name="description4" placeholder="Enter" autofocus />
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-md-6 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="basicInput">
                                                        <h5>Unit</h5>
                                                    </label>
                                                    <input type="text" class="form-control" id="basicInput" name="unit4"
                                                        placeholder="Enter" autofocus />
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-md-6 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="helpInputTop">
                                                        <h5>Price</h5>
                                                    </label>
                                                    <input type="number" class="form-control" id="basicInput"
                                                        name="price4" placeholder="Enter" autofocus />
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-md-6 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="basicInput">
                                                        <h5>Qty</h5>
                                                    </label>
                                                    <input type="number" class="form-control" id="basicInput"
                                                        name="qty4" placeholder="Enter" autofocus />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header text-body d-flex justify-content-between"
                                    id="accordionIconFive">
                                    <button type="button" class="accordion-button" data-bs-toggle="collapse"
                                        data-bs-target="#accordionIcon-5" aria-expanded="true"
                                        aria-controls="accordionIcon-5">
                                        Pengajuan 5
                                    </button>
                                </h2>
                                <div id="accordionIcon-5" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionIcon">
                                    <div class="accordion-body">
                                        <div class="row">
                                            <div class="col-xl-6 col-md-6 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="basicInput">
                                                        <h5>Description</h5>
                                                    </label>
                                                    <input type="text" class="form-control" id="basicInput"
                                                        name="description5" placeholder="Enter" autofocus />
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-md-6 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="basicInput">
                                                        <h5>Unit</h5>
                                                    </label>
                                                    <input type="text" class="form-control" id="basicInput" name="unit5"
                                                        placeholder="Enter" autofocus />
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-md-6 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="helpInputTop">
                                                        <h5>Price</h5>
                                                    </label>
                                                    <input type="number" class="form-control" id="basicInput"
                                                        name="price5" placeholder="Enter" autofocus />
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-md-6 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="basicInput">
                                                        <h5>Qty</h5>
                                                    </label>
                                                    <input type="number" class="form-control" id="basicInput"
                                                        name="qty5" placeholder="Enter" autofocus />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header text-body d-flex justify-content-between"
                                    id="accordionIconSix">
                                    <button type="button" class="accordion-button" data-bs-toggle="collapse"
                                        data-bs-target="#accordionIcon-6" aria-expanded="true"
                                        aria-controls="accordionIcon-6">
                                        Pengajuan 6
                                    </button>
                                </h2>
                                <div id="accordionIcon-6" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionIcon">
                                    <div class="accordion-body">
                                        <div class="row">
                                            <div class="col-xl-6 col-md-6 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="basicInput">
                                                        <h5>Description</h5>
                                                    </label>
                                                    <input type="text" class="form-control" id="basicInput"
                                                        name="description6" placeholder="Enter" autofocus />
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-md-6 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="basicInput">
                                                        <h5>Unit</h5>
                                                    </label>
                                                    <input type="text" class="form-control" id="basicInput" name="unit6"
                                                        placeholder="Enter" autofocus />
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-md-6 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="helpInputTop">
                                                        <h5>Price</h5>
                                                    </label>
                                                    <input type="number" class="form-control" id="basicInput"
                                                        name="price6" placeholder="Enter" autofocus />
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-md-6 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="basicInput">
                                                        <h5>Qty</h5>
                                                    </label>
                                                    <input type="number" class="form-control" id="basicInput"
                                                        name="qty6" placeholder="Enter" autofocus />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header text-body d-flex justify-content-between"
                                    id="accordionIconSeven">
                                    <button type="button" class="accordion-button" data-bs-toggle="collapse"
                                        data-bs-target="#accordionIcon-7" aria-expanded="true"
                                        aria-controls="accordionIcon-7">
                                        Pengajuan 7
                                    </button>
                                </h2>
                                <div id="accordionIcon-7" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionIcon">
                                    <div class="accordion-body">
                                        <div class="row">
                                            <div class="col-xl-6 col-md-6 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="basicInput">
                                                        <h5>Description</h5>
                                                    </label>
                                                    <input type="text" class="form-control" id="basicInput"
                                                        name="description7" placeholder="Enter" autofocus />
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-md-6 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="basicInput">
                                                        <h5>Unit</h5>
                                                    </label>
                                                    <input type="text" class="form-control" id="basicInput" name="unit7"
                                                        placeholder="Enter" autofocus />
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-md-6 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="helpInputTop">
                                                        <h5>Price</h5>
                                                    </label>
                                                    <input type="number" class="form-control" id="basicInput"
                                                        name="price7" placeholder="Enter" autofocus />
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-md-6 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="basicInput">
                                                        <h5>Qty</h5>
                                                    </label>
                                                    <input type="number" class="form-control" id="basicInput"
                                                        name="qty7" placeholder="Enter" autofocus />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header text-body d-flex justify-content-between"
                                    id="accordionIconEight">
                                    <button type="button" class="accordion-button" data-bs-toggle="collapse"
                                        data-bs-target="#accordionIcon-8" aria-expanded="true"
                                        aria-controls="accordionIcon-8">
                                        Pengajuan 8
                                    </button>
                                </h2>
                                <div id="accordionIcon-8" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionIcon">
                                    <div class="accordion-body">
                                        <div class="row">
                                            <div class="col-xl-6 col-md-6 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="basicInput">
                                                        <h5>Description</h5>
                                                    </label>
                                                    <input type="text" class="form-control" id="basicInput"
                                                        name="description8" placeholder="Enter" autofocus />
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-md-6 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="basicInput">
                                                        <h5>Unit</h5>
                                                    </label>
                                                    <input type="text" class="form-control" id="basicInput" name="unit8"
                                                        placeholder="Enter" autofocus />
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-md-6 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="helpInputTop">
                                                        <h5>Price</h5>
                                                    </label>
                                                    <input type="number" class="form-control" id="basicInput"
                                                        name="price8" placeholder="Enter" autofocus />
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-md-6 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="basicInput">
                                                        <h5>Qty</h5>
                                                    </label>
                                                    <input type="number" class="form-control" id="basicInput"
                                                        name="qty8" placeholder="Enter" autofocus />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 text-center mt-1 pt-20">
                            <button type="reset" class="btn btn-outline-secondary me-1" data-bs-dismiss="modal"
                                aria-label="Close">
                                Discard
                            </button>
                            <button type="submit" class="btn btn-primary ">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--/ Edit User Modal -->

    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <script type="text/javascript">
        function enableBrand(answer) {
            console.log(answer.value);
            if (answer.value == 'Transfer') {
                document.getElementById('carbrand').classList.remove('d-none');
                document.getElementById('carbrand2').classList.remove('d-none');
                document.getElementById('carbrand3').classList.remove('d-none');
            } else {
                document.getElementById('carbrand').classList.add('d-none');
                document.getElementById('carbrand2').classList.add('d-none');
                document.getElementById('carbrand3').classList.add('d-none');
            }
        }
    </script>

    <script>
        $(document).ready(function () {
            $('#bank').on('change', function () {
                var kode_bank = $(this).val();
                // console.log(kode_bank);
                if (kode_bank) {
                    $.ajax({
                        url: '/form/' + kode_bank,
                        type: 'GET',
                        data: {
                            '_token': '{{ csrf_token() }}'
                        },
                        dataType: 'json',
                        success: function (data) {
                            console.log(data);
                            if (data) {
                                $('#user').empty();
                                $('#user').append('<option value="">-Pilih-</option>');
                                $.each(data, function (key, NoRek) {
                                    $('select[name="norek_id"]').append(
                                        '<option value="' + NoRek.id + '">' +
                                        NoRek.nama_penerima + '</option>'
                                    );
                                });
                            } else {
                                $('#user').empty();
                            }
                        }
                    });
                } else {
                    $('#user').empty();
                }
            });
        });
    </script>

</section>

@endsection
