@extends('layout.master')
@section('content')
<section id="complex-header-datatable">
    <div class="row">
        <div class="offset-2 col-8">
            <div class="card">
                <div class="card-header border-bottom">
                    <h4 class="card-title"> Edit Pengajuan</h4>
                </div>
                <form action="{{ route('form-checked.update', $edit->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xl-4 col-md-6 col-12">
                                <div class="mb-1">
                                    <label class="form-label" for="basicInput">Dari</label>
                                    <input type="hidden" class="form-control" id="basicInput" name="from_id"
                                        placeholder="Enter" required value="{{ $edit->user->id }}" readonly />
                                    <input type="text" class="form-control" id="basicInput" placeholder="Enter" required
                                        value="{{ $edit->user->name }}" readonly />
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6 col-12">
                                <div class="mb-1">
                                    <label class="form-label" for="basicInput">Kategori
                                        Pengajuan</label>
                                    <select class="form-select" id="selectDefault" name="ketegori_pengajuan" required>
                                        <option selected>{{ $edit->ketegori_pengajuan }}</option>
                                        <option value="Advance">Advance</option>
                                        <option value="Reimburse">Reimburse</option>
                                        <option value="Payment">Payment</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6 col-12">
                                <div class="mb-1">
                                    <label class="form-label" for="helpInputTop">Departement</label>
                                    <input type="text" class="form-control" id="basicInput" placeholder="Enter" required
                                        value="{{ $edit->departement->nama_departement }}" readonly />
                                    <select class="hidden" id="selectDefault" name="departement_id" required>
                                        <option selected>{{ $edit->departement_id }}</option>
                                        @foreach ($departement as $key => $data)
                                        <option value="{{ $data->id }}">
                                            {{ $data->nama_departement }}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6 col-12">
                                <div class="mb-1">
                                    <label class="form-label" for="basicInput">Tanggal
                                        Kebutuhan</label>
                                    <input type="date" class="form-control" id="basicInput" placeholder="Enter"
                                        name="tanggal_kebutuhan" required value="{{ $edit->tanggal_kebutuhan }}" />
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6 col-12">
                                <div class="mb-1">
                                    <label class="form-label" for="helpInputTop">Payment</label>
                                    <select class="form-select" id="selectDefault" name="payment" required>
                                        <option selected>{{ $edit->payment }}</option>
                                        <option value="Cash">Cash</option>
                                        <option value="Transfer">Transfer</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6 col-12">
                                <div class="mb-1">
                                    <label class="form-label" for="helpInputTop">Ditujukan Untuk</label>
                                    <select class="form-select" id="selectDefault" name="to" required>
                                        <option selected>{{ $edit->to }}</option>
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
                            <h2 class="accordion-header text-body d-flex justify-content-between" id="accordionIconTwo">
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
                                                <label class="form-label" for="basicInput">Description</label>
                                                <input type="text" class="form-control" id="basicInput"
                                                    name="description" placeholder="Enter"
                                                    value="{{ $edit->description }}" />
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-md-6 col-12">
                                            <div class="mb-1">
                                                <label class="form-label" for="basicInput">Unit</label>
                                                <input type="text" class="form-control" id="basicInput" name="unit"
                                                    placeholder="Enter" value="{{ $edit->unit }}" />
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-md-6 col-12">
                                            <div class="mb-1">
                                                <label class="form-label" for="helpInputTop">Price</label>
                                                <input type="text" class="form-control" id="basicInput" name="price"
                                                    placeholder="Enter" value="{{ $edit->price }}" />
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-md-6 col-12">
                                            <div class="mb-1">
                                                <label class="form-label" for="basicInput">Qty</label>
                                                <input type="number" class="form-control" id="basicInput" name="qty"
                                                    placeholder="Enter" value="{{ $edit->qty }}" />
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
                                                <label class="form-label" for="basicInput">Description</label>
                                                <input type="text" class="form-control" id="basicInput"
                                                    name="description2" placeholder="Enter"
                                                    value="{{ $edit->description2 }}" />
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-md-6 col-12">
                                            <div class="mb-1">
                                                <label class="form-label" for="basicInput">Unit</label>
                                                <input type="text" class="form-control" id="basicInput" name="unit2"
                                                    placeholder="Enter" value="{{ $edit->unit2 }}" />
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-md-6 col-12">
                                            <div class="mb-1">
                                                <label class="form-label" for="helpInputTop">Price</label>
                                                <input type="text" class="form-control" id="basicInput" name="price2"
                                                    placeholder="Enter" value="{{ $edit->price2 }}" />
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-md-6 col-12">
                                            <div class="mb-1">
                                                <label class="form-label" for="basicInput">Qty</label>
                                                <input type="number" class="form-control" id="basicInput" name="qty2"
                                                    placeholder="Enter" value="{{ $edit->qty2 }}" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header text-body d-flex justify-content-between"
                                id="accordionIconFour">
                                <button type="button" class="accordion-button" data-bs-toggle="collapse"
                                    data-bs-target="#accordionIcon-4" aria-expanded="true"
                                    aria-controls="accordionIcon-4">
                                    Pengajuan 3
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
                                                    name="description3" placeholder="Enter"
                                                    value="{{ $edit->description3 }}" />
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-md-6 col-12">
                                            <div class="mb-1">
                                                <label class="form-label" for="basicInput">Unit</label>
                                                <input type="text" class="form-control" id="basicInput" name="unit3"
                                                    placeholder="Enter" value="{{ $edit->unit3 }}" />
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-md-6 col-12">
                                            <div class="mb-1">
                                                <label class="form-label" for="helpInputTop">Price</label>
                                                <input type="text" class="form-control" id="basicInput" name="price3"
                                                    placeholder="Enter" value="{{ $edit->price3 }}" />
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-md-6 col-12">
                                            <div class="mb-1">
                                                <label class="form-label" for="basicInput">Qty</label>
                                                <input type="number" class="form-control" id="basicInput" name="qty3"
                                                    placeholder="Enter" value="{{ $edit->qty3 }}" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header text-body d-flex justify-content-between" id="accordionIconOne">
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
                                                <label class="form-label" for="basicInput">Description</label>
                                                <input type="text" class="form-control" id="basicInput"
                                                    name="description4" placeholder="Enter"
                                                    value="{{ $edit->description4 }}" />
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-md-6 col-12">
                                            <div class="mb-1">
                                                <label class="form-label" for="basicInput">Unit</label>
                                                <input type="text" class="form-control" id="basicInput" name="unit4"
                                                    placeholder="Enter" value="{{ $edit->unit4 }}" />
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-md-6 col-12">
                                            <div class="mb-1">
                                                <label class="form-label" for="helpInputTop">Price</label>
                                                <input type="text" class="form-control" id="basicInput" name="price4"
                                                    placeholder="Enter" value="{{ $edit->price4 }}" />
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-md-6 col-12">
                                            <div class="mb-1">
                                                <label class="form-label" for="basicInput">Qty</label>
                                                <input type="number" class="form-control" id="basicInput" name="qty4"
                                                    placeholder="Enter" value="{{ $edit->qty4 }}" />
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
                                                <label class="form-label" for="basicInput">Description</label>
                                                <input type="text" class="form-control" id="basicInput"
                                                    name="description5" placeholder="Enter"
                                                    value="{{ $edit->description5 }}" />
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-md-6 col-12">
                                            <div class="mb-1">
                                                <label class="form-label" for="basicInput">Unit</label>
                                                <input type="text" class="form-control" id="basicInput" name="unit5"
                                                    placeholder="Enter" value="{{ $edit->unit5 }}" />
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-md-6 col-12">
                                            <div class="mb-1">
                                                <label class="form-label" for="helpInputTop">Price</label>
                                                <input type="text" class="form-control" id="basicInput" name="price5"
                                                    placeholder="Enter" value="{{ $edit->price5 }}" />
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-md-6 col-12">
                                            <div class="mb-1">
                                                <label class="form-label" for="basicInput">Qty</label>
                                                <input type="number" class="form-control" id="basicInput" name="qty5"
                                                    placeholder="Enter" value="{{ $edit->qty5 }}" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header text-body d-flex justify-content-between" id="accordionIconSix">
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
                                                <label class="form-label" for="basicInput">Description</label>
                                                <input type="text" class="form-control" id="basicInput"
                                                    name="description6" placeholder="Enter"
                                                    value="{{ $edit->description6 }}" />
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-md-6 col-12">
                                            <div class="mb-1">
                                                <label class="form-label" for="basicInput">Unit</label>
                                                <input type="text" class="form-control" id="basicInput" name="unit6"
                                                    placeholder="Enter" value="{{ $edit->unit6 }}" />
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-md-6 col-12">
                                            <div class="mb-1">
                                                <label class="form-label" for="helpInputTop">Price</label>
                                                <input type="text" class="form-control" id="basicInput" name="price6"
                                                    placeholder="Enter" value="{{ $edit->price6 }}" />
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-md-6 col-12">
                                            <div class="mb-1">
                                                <label class="form-label" for="basicInput">Qty</label>
                                                <input type="number" class="form-control" id="basicInput" name="qty6"
                                                    placeholder="Enter" value="{{ $edit->qty6 }}" />
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
                                                <label class="form-label" for="basicInput">Description</label>
                                                <input type="text" class="form-control" id="basicInput"
                                                    name="description7" placeholder="Enter"
                                                    value="{{ $edit->description7 }}" />
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-md-6 col-12">
                                            <div class="mb-1">
                                                <label class="form-label" for="basicInput">Unit</label>
                                                <input type="text" class="form-control" id="basicInput" name="unit7"
                                                    placeholder="Enter" value="{{ $edit->unit7 }}" />
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-md-6 col-12">
                                            <div class="mb-1">
                                                <label class="form-label" for="helpInputTop">Price</label>
                                                <input type="text" class="form-control" id="basicInput" name="price7"
                                                    placeholder="Enter" value="{{ $edit->price7 }}" />
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-md-6 col-12">
                                            <div class="mb-1">
                                                <label class="form-label" for="basicInput">Qty</label>
                                                <input type="number" class="form-control" id="basicInput" name="qty7"
                                                    placeholder="Enter" value="{{ $edit->qty7}}" />
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
                                                <label class="form-label" for="basicInput">Description</label>
                                                <input type="text" class="form-control" id="basicInput"
                                                    name="description8" placeholder="Enter"
                                                    value="{{ $edit->description8 }}" />
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-md-6 col-12">
                                            <div class="mb-1">
                                                <label class="form-label" for="basicInput">Unit</label>
                                                <input type="text" class="form-control" id="basicInput" name="unit8"
                                                    placeholder="Enter" value="{{ $edit->unit8 }}" />
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-md-6 col-12">
                                            <div class="mb-1">
                                                <label class="form-label" for="helpInputTop">Price</label>
                                                <input type="text" class="form-control" id="basicInput" name="price8"
                                                    placeholder="Enter" value="{{ $edit->price8 }}" />
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-md-6 col-12">
                                            <div class="mb-1">
                                                <label class="form-label" for="basicInput">Qty</label>
                                                <input type="number" class="form-control" id="basicInput" name="qty8"
                                                    placeholder="Enter" value="{{ $edit->qty8 }}" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-12 text-center mb-2 mt-1 pt-20">
                        <a href="{{ route('form-checked.index') }}" class="btn btn-outline-secondary me-1">Back</a>
                        <button type="submit" class="btn btn-primary ">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</section>

@endsection
