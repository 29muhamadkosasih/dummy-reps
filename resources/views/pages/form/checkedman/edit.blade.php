@extends('layouts.master')
@section('content')
@section('title', 'Form')
<section id="complex-header-datatable">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">
                <div class="row ">
                    <div class="col-auto me-auto ">
                        <h5 class="mb-0 ms-3">Edit Form

                    </div>
                </div>
                <form action="{{ route('form-checkedman.update', $edit->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xl-4 col-md-6 col-12">
                                <div class="mb-1">
                                    <label class="form-label" for="basicInput">Dari</label>
                                    <input type="hidden" name="from_id" value="{{ $edit->from_id }}" />
                                    <input type="hidden" name="departement_id" value="{{ $edit->departement_id }}" />
                                    <input type="hidden" name="kpengajuan_id" value="{{ $edit->kpengajuan_id }}" />
                                    <input type="hidden" name="keperluan_id" value="{{ $edit->keperluan_id }}" />
                                    <input type="hidden" name="payment" value="{{ $edit->payment }}" />
                                    <input type="hidden" name="rujukan_id" value="{{ $edit->rujukan_id }}" />
                                    <input type="hidden" name="norek_id" value="{{ $edit->norek_id }}" />

                                    <input type="hidden" name="image1" value="{{ $edit->image1 }}" />
                                    <input type="hidden" name="image2" value="{{ $edit->image2 }}" />
                                    <input type="hidden" name="image3" value="{{ $edit->image3 }}" />
                                    <input type="hidden" name="image4" value="{{ $edit->image4 }}" />
                                    <input type="hidden" name="image5" value="{{ $edit->image5 }}" />
                                    <input type="hidden" name="image6" value="{{ $edit->image6 }}" />
                                    <input type="hidden" name="image7" value="{{ $edit->image7 }}" />
                                    <input type="hidden" name="image8" value="{{ $edit->image8 }}" />

                                    <input type="hidden" name="no_project" value="{{ $edit->no_project }}" />
                                    <input type="hidden" name="j_peserta" value="{{ $edit->j_peserta }}" />
                                    <input type="hidden" name="j_traine_asesor" value="{{ $edit->j_traine_asesor }}" />
                                    <input type="hidden" name="j_assist" value="{{ $edit->j_assist }}" />

                                    <input type="text" class="form-control" id="basicInput" placeholder="Enter" required
                                        value="{{ $edit->user->name }}" readonly />
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6 col-12">
                                <div class="mb-1">
                                    <label class="form-label" for="basicInput">Kategori
                                        Pengajuan</label>
                                    <input type="text" class="form-control" id="basicInput" placeholder="Enter" required
                                        value="{{ $edit->kpengajuan->name }}" readonly />
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6 col-12">
                                <div class="mb-1">
                                    <label class="form-label" for="basicInput">
                                        Keperluan
                                    </label>
                                    <input type="text" class="form-control" id="basicInput" placeholder="Enter" required
                                        value="{{ $edit->keperluan->name }}" readonly />
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
                                    <input type="text" class="form-control" id="basicInput" placeholder="Enter" required
                                        value="{{ $edit->payment }}" readonly />
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6 col-12">
                                <div class="mb-1">
                                    <label class="form-label" for="helpInputTop">Ditujukan Untuk</label>
                                    <input type="text" class="form-control" id="basicInput" placeholder="Enter" required
                                        value="{{ $edit->rujukan->name}}" readonly />
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
                                        <div class="col-xl-12 col-md-12 col-12">
                                            <div class="mb-1">
                                                <label class="form-label" for="basicInput">
                                                    Lampirkan File
                                                </label>
                                                <input type="file" class="form-control" name="image1"
                                                    placeholder="Enter" autofocus value="{{$edit->image1}}" />
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
                                        <div class="col-xl-12 col-md-12 col-12">
                                            <div class="mb-1">
                                                <label class="form-label" for="basicInput">
                                                    Lampirkan File
                                                </label>
                                                <input type="file" class="form-control" name="image2"
                                                    placeholder="Enter" autofocus value="{{$edit->image2}}" />
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
                                        <div class="col-xl-12 col-md-12 col-12">
                                            <div class="mb-1">
                                                <label class="form-label" for="basicInput">
                                                    Lampirkan File
                                                </label>
                                                <input type="file" class="form-control" name="image3"
                                                    placeholder="Enter" autofocus value="{{$edit->image3}}" />
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
                                        <div class="col-xl-12 col-md-12 col-12">
                                            <div class="mb-1">
                                                <label class="form-label" for="basicInput">
                                                    Lampirkan File
                                                </label>
                                                <input type="file" class="form-control" name="image4"
                                                    placeholder="Enter" autofocus value="{{$edit->image4}}" />
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
                                        <div class="col-xl-12 col-md-12 col-12">
                                            <div class="mb-1">
                                                <label class="form-label" for="basicInput">
                                                    Lampirkan File
                                                </label>
                                                <input type="file" class="form-control" name="image5"
                                                    placeholder="Enter" autofocus value="{{$edit->image5}}" />
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
                                        <div class="col-xl-12 col-md-12 col-12">
                                            <div class="mb-1">
                                                <label class="form-label" for="basicInput">
                                                    Lampirkan File
                                                </label>
                                                <input type="file" class="form-control" name="image6"
                                                    placeholder="Enter" autofocus value="{{$edit->image6}}" />
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
                                        <div class="col-xl-12 col-md-12 col-12">
                                            <div class="mb-1">
                                                <label class="form-label" for="basicInput">
                                                    Lampirkan File
                                                </label>
                                                <input type="file" class="form-control" name="image7"
                                                    placeholder="Enter" autofocus value="{{$edit->image7}}" />
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
                                        <div class="col-xl-12 col-md-12 col-12">
                                            <div class="mb-1">
                                                <label class="form-label" for="basicInput">
                                                    Lampirkan File
                                                </label>
                                                <input type="file" class="form-control" name="image8"
                                                    placeholder="Enter" autofocus value="{{$edit->image8}}" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-12 text-center mb-2 mt-1 pt-20 mb-4">
                        <a href="{{ route('form-checked.index') }}" class="btn btn-outline-secondary me-1">Back</a>
                        <button type="submit" class="btn btn-primary ">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</section>

@endsection
