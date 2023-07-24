@extends('layouts/master')
@section('content')

<!-- Invoice table -->
<div class="col-xl-12">
    <div class="card">
        <div class="card-body">
            <div class="row ">
                <div class="col-auto me-auto ">
                    <h5 class="mb-0">List Data Form

                </div>
                <div class="col-auto">
                    @can('form.create')
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editUser">
                        Create
                    </button>
                    @endcan

                </div>
            </div>
            <div class="table-responsive text-nowrap">
                <table class="table table-hover zero-configuration">
                    <thead>
                        <tr>
                            <th width='10px' style="text-align: center">No</th>
                            <th>Tgl Pengajuan</th>
                            <th>Dari</th>
                            <th>Departement</th>
                            <th>Untuk</th>
                            <th>Pengajuan</th>
                            <th>Payment</th>
                            <th>Tgl Kebutuhan</th>
                            <th>Status</th>
                            <th width='200px' style="text-align: center">Action</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($form as $data) <tr>
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
                            <td class="text-center">

                                <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                    action="{{ route('form.destroy', $data->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    @can('form.show')
                                    <a href=" {{ route('form.show', $data->id) }}" class="btn btn-icon btn-secondary
                                btn-sm">
                                        <span class="ti ti-eye"></span>
                                    </a>
                                    @endcan

                                    @can('form.edit')
                                    <a href="{{ route('form.edit', $data->id) }}"
                                        class="btn btn-icon btn-warning btn-sm">
                                        <span class="ti ti-edit"></span>
                                    </a>
                                    @endcan
                                    @can('form.delete')
                                    <button type="submit" class="btn btn-icon btn-danger btn-sm">
                                        <span class="ti ti-trash"></span>
                                    </button>
                                    @endcan
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
<!-- /Invoice table -->

<!-- Edit User Modal -->
<div class="modal fade" id="editUser" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-simple modal-edit-user">
        <div class="modal-content p-2 p-md-4">
            <div class="modal-body">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="text-center mb-4">
                    <h1 class="mb-0"> Buat Pengajuan Dana</h1>
                </div>
                <form action="{{ route('form.store') }}" method="POST" class="row g-3" enctype="multipart/form-data">
                    @csrf
                    <div class="col-xl-6 col-md-6 col-12">
                        <div class="mb-1">
                            <label class="form-label" for="basicInput">
                                Dari
                            </label>
                            <input type="text" class="form-control" id="basicInput" name="from_id" placeholder="Enter"
                                required value="{{ Auth::user()->name }}" readonly />
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-6 col-12">
                        <div class="mb-1">
                            <label class="form-label" for="basicInput">
                                Kategori
                                Pengajuan
                            </label>
                            <select class="form-select" id="selectDefault" name="ketegori_pengajuan" required>
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
                                Tanggal
                                Kebutuhan
                            </label>
                            <input type="date" class="form-control" id="basicInput" placeholder="Enter"
                                name="tanggal_kebutuhan" required />
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 col-12">
                        <div class="mb-1">
                            <label class="form-label" for="helpInputTop">
                                Ditujukan Untuk
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
                                Payment
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
                        <div class="mb-1">
                            <label class="form-label" for="select2-basic">
                                Nama Rekening Penerima
                            </label>
                            <select class="select2 form-select" id="select2-basic" name="norek_id">
                                <option></option>
                                @foreach ($norek as $item)
                                <option value="{{ $item->id }}">{{ $item->nama_penerima }}</option>
                                @endforeach
                            </select>

                        </div>
                    </div>

                    <div class="col-xl-12 col-md-12 col-12">
                        <div class="accordion mt-3" id="accordionExample">
                            <div class="card accordion-item active">
                                <h2 class="accordion-header" id="headingOne">
                                    <button type="button" class="accordion-button" data-bs-toggle="collapse"
                                        data-bs-target="#accordionOne" aria-expanded="true"
                                        aria-controls="accordionOne">
                                        Pengajuan 1 </button>
                                </h2>

                                <div id="accordionOne" class="accordion-collapse collapse show"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <div class="row">
                                            <div class="col-xl-6 col-md-6 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="basicInput">
                                                        Description
                                                    </label>
                                                    <input type="text" class="form-control" id="basicInput"
                                                        name="description" placeholder="Enter" autofocus required />
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-md-6 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="basicInput">
                                                        Unit
                                                    </label>
                                                    <input type="text" class="form-control" id="basicInput" name="unit"
                                                        placeholder="Enter" autofocus required />
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-md-6 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="helpInputTop">
                                                        Price
                                                    </label>
                                                    <input type="number" class="form-control" id="basicInput"
                                                        name="price" placeholder="Enter" autofocus required />
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-md-6 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="basicInput">
                                                        Qty
                                                    </label>
                                                    <input type="number" class="form-control" id="basicInput" name="qty"
                                                        placeholder="Enter" autofocus required />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
                                        data-bs-target="#accordionTwo" aria-expanded="false"
                                        aria-controls="accordionTwo">
                                        Pengajuan 2
                                    </button>
                                </h2>

                                <div id="accordionTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <div class="row">
                                            <div class="col-xl-6 col-md-6 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="basicInput">
                                                        Description
                                                    </label>
                                                    <input type="text" class="form-control" id="basicInput"
                                                        name="description2" placeholder="Enter" autofocus />
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-md-6 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="basicInput">
                                                        Unit
                                                    </label>
                                                    <input type="text" class="form-control" id="basicInput" name="unit2"
                                                        placeholder="Enter" autofocus />
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-md-6 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="helpInputTop">
                                                        Price
                                                    </label>
                                                    <input type="number" class="form-control" id="basicInput"
                                                        name="price2" placeholder="Enter" autofocus />
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-md-6 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="basicInput">
                                                        Qty
                                                    </label>
                                                    <input type="number" class="form-control" id="basicInput"
                                                        name="qty2" placeholder="Enter" autofocus />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
                                        data-bs-target="#accordionThree" aria-expanded="false"
                                        aria-controls="accordionThree">
                                        Pengajuan 3
                                    </button>
                                </h2>
                                <div id="accordionThree" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <div class="row">
                                            <div class="col-xl-6 col-md-6 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="basicInput">
                                                        Description
                                                    </label>
                                                    <input type="text" class="form-control" id="basicInput"
                                                        name="description3" placeholder="Enter" autofocus />
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-md-6 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="basicInput">
                                                        Unit
                                                    </label>
                                                    <input type="text" class="form-control" id="basicInput" name="unit3"
                                                        placeholder="Enter" autofocus />
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-md-6 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="helpInputTop">
                                                        Price
                                                    </label>
                                                    <input type="number" class="form-control" id="basicInput"
                                                        name="price3" placeholder="Enter" autofocus />
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-md-6 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="basicInput">
                                                        Qty
                                                    </label>
                                                    <input type="number" class="form-control" id="basicInput"
                                                        name="qty3" placeholder="Enter" autofocus />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card accordion-item">
                                <h2 class="accordion-header" id="headingFour">
                                    <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
                                        data-bs-target="#accordionFour" aria-expanded="false"
                                        aria-controls="accordionFour">
                                        Pengajuan 4
                                    </button>
                                </h2>
                                <div id="accordionFour" class="accordion-collapse collapse"
                                    aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <div class="row">
                                            <div class="col-xl-6 col-md-6 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="basicInput">
                                                        Description
                                                    </label>
                                                    <input type="text" class="form-control" id="basicInput"
                                                        name="description4" placeholder="Enter" autofocus />
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-md-6 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="basicInput">
                                                        Unit
                                                    </label>
                                                    <input type="text" class="form-control" id="basicInput" name="unit4"
                                                        placeholder="Enter" autofocus />
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-md-6 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="helpInputTop">
                                                        Price
                                                    </label>
                                                    <input type="number" class="form-control" id="basicInput"
                                                        name="price4" placeholder="Enter" autofocus />
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-md-6 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="basicInput">
                                                        Qty
                                                    </label>
                                                    <input type="number" class="form-control" id="basicInput"
                                                        name="qty4" placeholder="Enter" autofocus />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card accordion-item">
                                <h2 class="accordion-header" id="headingFive">
                                    <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
                                        data-bs-target="#accordionFive" aria-expanded="false"
                                        aria-controls="accordionFive">
                                        Pengajuan 5
                                    </button>
                                </h2>
                                <div id="accordionFive" class="accordion-collapse collapse"
                                    aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <div class="row">
                                            <div class="col-xl-6 col-md-6 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="basicInput">
                                                        Description
                                                    </label>
                                                    <input type="text" class="form-control" id="basicInput"
                                                        name="description5" placeholder="Enter" autofocus />
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-md-6 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="basicInput">
                                                        Unit
                                                    </label>
                                                    <input type="text" class="form-control" id="basicInput" name="unit5"
                                                        placeholder="Enter" autofocus />
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-md-6 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="helpInputTop">
                                                        Price
                                                    </label>
                                                    <input type="number" class="form-control" id="basicInput"
                                                        name="price5" placeholder="Enter" autofocus />
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-md-6 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="basicInput">
                                                        Qty
                                                    </label>
                                                    <input type="number" class="form-control" id="basicInput"
                                                        name="qty5" placeholder="Enter" autofocus />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card accordion-item">
                                <h2 class="accordion-header" id="headingSix">
                                    <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
                                        data-bs-target="#accordionSix" aria-expanded="false"
                                        aria-controls="accordionSix">
                                        Pengajuan 6
                                    </button>
                                </h2>
                                <div id="accordionSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <div class="row">
                                            <div class="col-xl-6 col-md-6 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="basicInput">
                                                        Description
                                                    </label>
                                                    <input type="text" class="form-control" id="basicInput"
                                                        name="description6" placeholder="Enter" autofocus />
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-md-6 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="basicInput">
                                                        Unit
                                                    </label>
                                                    <input type="text" class="form-control" id="basicInput" name="unit6"
                                                        placeholder="Enter" autofocus />
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-md-6 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="helpInputTop">
                                                        Price
                                                    </label>
                                                    <input type="number" class="form-control" id="basicInput"
                                                        name="price6" placeholder="Enter" autofocus />
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-md-6 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="basicInput">
                                                        Qty
                                                    </label>
                                                    <input type="number" class="form-control" id="basicInput"
                                                        name="qty6" placeholder="Enter" autofocus />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card accordion-item">
                                <h2 class="accordion-header" id="headingSeven">
                                    <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
                                        data-bs-target="#accordionSeven" aria-expanded="false"
                                        aria-controls="accordionSeven">
                                        Pengajuan 7
                                    </button>
                                </h2>
                                <div id="accordionSeven" class="accordion-collapse collapse"
                                    aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <div class="row">
                                            <div class="col-xl-6 col-md-6 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="basicInput">
                                                        Description
                                                    </label>
                                                    <input type="text" class="form-control" id="basicInput"
                                                        name="description7" placeholder="Enter" autofocus />
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-md-6 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="basicInput">
                                                        Unit
                                                    </label>
                                                    <input type="text" class="form-control" id="basicInput" name="unit7"
                                                        placeholder="Enter" autofocus />
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-md-6 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="helpInputTop">
                                                        Price
                                                    </label>
                                                    <input type="number" class="form-control" id="basicInput"
                                                        name="price7" placeholder="Enter" autofocus />
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-md-6 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="basicInput">
                                                        Qty
                                                    </label>
                                                    <input type="number" class="form-control" id="basicInput"
                                                        name="qty7" placeholder="Enter" autofocus />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card accordion-item">
                                <h2 class="accordion-header" id="headingEight">
                                    <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
                                        data-bs-target="#accordionEight" aria-expanded="false"
                                        aria-controls="accordionEight">
                                        Pengajuan 8
                                    </button>
                                </h2>
                                <div id="accordionEight" class="accordion-collapse collapse"
                                    aria-labelledby="headingEight" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <div class="row">
                                            <div class="col-xl-6 col-md-6 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="basicInput">
                                                        Description
                                                    </label>
                                                    <input type="text" class="form-control" id="basicInput"
                                                        name="description8" placeholder="Enter" autofocus />
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-md-6 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="basicInput">
                                                        Unit
                                                    </label>
                                                    <input type="text" class="form-control" id="basicInput" name="unit8"
                                                        placeholder="Enter" autofocus />
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-md-6 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="helpInputTop">
                                                        Price
                                                    </label>
                                                    <input type="number" class="form-control" id="basicInput"
                                                        name="price8" placeholder="Enter" autofocus />
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-md-6 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="basicInput">
                                                        Qty
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
                    </div>

                    <div class="col-12 text-center">
                        <button type="reset" class="btn btn-label-secondary me-sm-3 me-1" data-bs-dismiss="modal"
                            aria-label="Close">
                            Cancel
                        </button>
                        <button type="submit" class="btn btn-primary">Submit</button>
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
@endsection
