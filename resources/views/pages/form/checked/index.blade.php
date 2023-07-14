@extends('layout.master')
@section('content')
<section id="complex-header-datatable">

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header border-bottom">
                    <h4 class="card-title">Data Pengajuan </h4>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered zero-configuration">
                        <thead>
                            <tr>
                                <th width='10px' style="text-align: center">No</th>
                                <th>Dari</th>
                                <th>Tanggal Kebutuhan</th>
                                <th>Untuk</th>
                                <th>Departement</th>
                                <th>Kategori
                                    Pengajuan</th>
                                <th>Status</th>
                                <th width='230px' style="text-align: center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($form as $data)
                            <tr>
                                <td style="text-align: center">{{ $loop->iteration }}</td>
                                <td>
                                    {{ $data->user->name }}
                                </td>
                                <td>
                                    {{ $data->tanggal_kebutuhan }}
                                </td>
                                <td>
                                    {{ $data->to }}
                                </td>
                                <td>
                                    {{ $data->departement->nama_departement }}
                                </td>
                                <td>
                                    {{ $data->ketegori_pengajuan }}
                                </td>
                                <td>
                                    {{-- {{ $data->status }} --}}
                                    @switch($data)
                                    @case($data->status == null)
                                    <span class="badge bg-secondary">Pending</span>
                                    @break
                                    @case($data->status == 1)
                                    <span class="badge bg-warning">Checked</span>
                                    @break
                                    @case($data->status == 2)
                                    <span class="badge bg-danger">Cancel</span>
                                    @break
                                    @default
                                    <span class="badge bg-success">Process</span>
                                    @endswitch
                                </td>
                                <td style="text-align: center">

                                    @switch($data)
                                    @case($data->status == 2)
                                    <span class="badge bg-danger"> RF Telah Di Reject</span>
                                    @break

                                    @case($data->status == 3)
                                    <span class="badge bg-success"> RF Telah Di Approve</span>
                                    @break
                                    @default

                                    <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                        action="{{ route('form.destroy', $data->id) }}" method="POST">

                                        <a href="{{ route('form-checked.detail', $data->id) }}"
                                            class="btn btn-secondary btn-sm"><i data-feather='eye'></i></a>

                                        <a href="{{ route('form-checked.edit', $data->id) }}"
                                            class="btn btn-warning btn-sm">
                                            <i data-feather='edit'></i>
                                        </a>
                                        
                                        <a href="{{ url('reject/maker', $data->id) }}" class="btn btn-danger btn-sm">
                                            <i data-feather='x'></i>
                                        </a>

                                        <a href="{{ url('approve/maker', $data->id) }}" class="btn btn-success btn-sm">
                                            <i data-feather='check'></i>
                                        </a>


                                        @csrf
                                        @method('DELETE')

                                        <button type="submit" class="btn btn-danger btn-sm">
                                            <i data-feather='trash'></i>
                                        </button>
                                    </form>


                                    @endswitch
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
                                <div class="col-xl-4 col-md-6 col-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="basicInput">Dari</label>
                                        <input type="text" class="form-control" id="basicInput" name="from_id"
                                            placeholder="Enter" autofocus required value="{{ Auth::user()->name }}"
                                            readonlyx />
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-6 col-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="basicInput">Kategori
                                            Pengajuan</label>
                                        <select class="form-select" id="selectDefault" name="ketegori_pengajuan"
                                            required>
                                            <option selected>Open this select</option>
                                            <option value="Advance">Advance</option>
                                            <option value="Reimburse">Reimburse</option>
                                            <option value="Payment">Payment</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-6 col-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="helpInputTop">Departement</label>
                                        <select class="form-select" id="selectDefault" name="departement" required>
                                            <option selected>Open this select</option>
                                            <option value="Marketing">Marketing</option>
                                            <option value="Finance">Finance</option>
                                            <option value="Supervisor">Supervisor</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-6 col-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="basicInput">Tanggal
                                            Kebutuhan</label>
                                        <input type="date" class="form-control" id="basicInput" placeholder="Enter"
                                            name="tanggal_kebutuhan" required />
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-6 col-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="helpInputTop">Payment</label>
                                        <select class="form-select" id="selectDefault" name="payment" required>
                                            <option selected>Open this select</option>
                                            <option value="Cash">Cash</option>
                                            <option value="Transfer">Transfer</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-6 col-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="helpInputTop">Ditujukan Untuk</label>
                                        <select class="form-select" id="selectDefault" name="to" required>
                                            <option selected>Open this select</option>
                                            <option value="SPV">SPV</option>
                                            <option value="Finance">Finance</option>
                                            <option value="Manager">Manager</option>
                                            <option value="Direktur Utama">Direktur Utama</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="accordionIcon" class="accordion accordion-without-arrow">
                            <div class="accordion-item">
                                <h2 class="accordion-header text-body d-flex justify-content-between"
                                    id="accordionIconTwo">
                                    <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
                                        data-bs-target="#accordionIcon-2" aria-controls="accordionIcon-2">
                                        Form Pengajuan 1
                                    </button>
                                </h2>
                                <div id="accordionIcon-2" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionIcon">
                                    <div class="accordion-body">
                                        <div class="row">
                                            <div class="col-xl-6 col-md-6 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="basicInput">Description</label>
                                                    <input type="text" class="form-control" id="basicInput"
                                                        name="description" placeholder="Enter" autofocus />
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-md-6 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="basicInput">Unit</label>
                                                    <input type="text" class="form-control" id="basicInput" name="unit"
                                                        placeholder="Enter" autofocus />
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-md-6 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="helpInputTop">Price</label>
                                                    <input type="text" class="form-control" id="basicInput" name="price"
                                                        placeholder="Enter" autofocus />
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-md-6 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="basicInput">Qty</label>
                                                    <input type="number" class="form-control" id="basicInput" name="qty"
                                                        placeholder="Enter" autofocus />
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
                                        Form Pengajuan 2
                                    </button>
                                </h2>
                                <div id="accordionIcon-3" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionIcon">
                                    <div class="accordion-body">
                                        <div class="row">
                                            <div class="col-xl-6 col-md-6 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="basicInput">Description</label>
                                                    <input type="text" class="form-control" id="basicInput"
                                                        name="description2" placeholder="Enter" autofocus />
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-md-6 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="basicInput">Unit</label>
                                                    <input type="text" class="form-control" id="basicInput" name="unit2"
                                                        placeholder="Enter" autofocus />
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-md-6 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="helpInputTop">Price</label>
                                                    <input type="text" class="form-control" id="basicInput"
                                                        name="price2" placeholder="Enter" autofocus />
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-md-6 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="basicInput">Qty</label>
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
                                        Form Pengajuan 3
                                    </button>
                                </h2>
                                <div id="accordionIcon-4" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionIcon">
                                    <div class="accordion-body">
                                        <div class="row">
                                            <div class="col-xl-6 col-md-6 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="basicInput">Description</label>
                                                    <input type="text" class="form-control" id="basicInput"
                                                        name="description3" placeholder="Enter" autofocus />
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-md-6 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="basicInput">Unit</label>
                                                    <input type="text" class="form-control" id="basicInput" name="unit3"
                                                        placeholder="Enter" autofocus />
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-md-6 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="helpInputTop">Price</label>
                                                    <input type="text" class="form-control" id="basicInput"
                                                        name="price3" placeholder="Enter" autofocus />
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-md-6 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="basicInput">Qty</label>
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
                                        Form Pengajuan 4
                                    </button>
                                </h2>
                                <div id="accordionIcon-1" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionIcon">
                                    <div class="accordion-body">
                                        <div class="row">
                                            <div class="col-xl-6 col-md-6 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="basicInput">Description</label>
                                                    <input type="text" class="form-control" id="basicInput"
                                                        name="description4" placeholder="Enter" autofocus />
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-md-6 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="basicInput">Unit</label>
                                                    <input type="text" class="form-control" id="basicInput" name="unit4"
                                                        placeholder="Enter" autofocus />
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-md-6 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="helpInputTop">Price</label>
                                                    <input type="text" class="form-control" id="basicInput"
                                                        name="price4" placeholder="Enter" autofocus />
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-md-6 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="basicInput">Qty</label>
                                                    <input type="number" class="form-control" id="basicInput"
                                                        name="qty4" placeholder="Enter" autofocus />
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

</section>

@endsection
