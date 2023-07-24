@extends('layouts.master')
@section('content')
<section id="complex-header-datatable">
    <div class="row">
        <div class="offset-2 col-9">
            <div class="card">
                <div class="card-body mt-2">
                    <div class="row mb-2">
                        <div class="col-auto me-auto ">
                            <h5 class="mb-0">PENGAJUAN DANA</h5>
                        </div>
                        <div class="col-auto">
                            <a href="{{ route('form-checked.index') }}" class="btn btn-secondary">Back</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-7 col-12">
                            <dl class="row mb-0">
                                <dt class="col-sm-4 fw-bolder mb-1"> Dari </dt>
                                <dd class="col-sm-8 mb-1">: {{ $show->user->name }}</dd>

                                <dt class="col-sm-4 fw-bolder mb-1">Departement</dt>
                                <dd class="col-sm-8 mb-1">: {{ $show->departement->nama_departement }}</dd>

                                <dt class="col-sm-4 fw-bolder mb-1">Untuk</dt>
                                <dd class="col-sm-8 mb-3">: {{ $show->to }}</dd>


                            </dl>
                        </div>
                        <div class="col-xl-5 col-12">
                            <dl class="row mb-0">
                                <dt class="col-sm-4 fw-bolder mb-1">Pengajuan</dt>
                                <dd class="col-sm-8 mb-1">: {{ $show->ketegori_pengajuan }}</dd>

                                <dt class="col-sm-4 fw-bolder mb-1">Payment</dt>
                                <dd class="col-sm-8 mb-1">: {{ $show->payment }}</dd>

                                <dt class="col-sm-4 fw-bolder mb-1">Tgl Kebutuhan</dt>
                                <dd class="col-sm-8 mb-3">: {{ $show->tanggal_kebutuhan }}</dd>

                            </dl>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr width='20px' style="background-color:skyblue">
                                        <th>No</th>
                                        <th>Description</th>
                                        <th>Qty</th>
                                        <th>Unit</th>
                                        <th>Unit Price / (Rp)</th>
                                        <th>Sub Total / (Rp)</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>{{ $show->description }} </td>
                                        <td>{{ $show->qty }}</td>
                                        <td>{{ $show->unit }}</td>
                                        <td style="text-align: right"> {{ number_format($show->price, 0, ',', '.',) }}
                                        </td>
                                        <td style="text-align: right"> {{ number_format($show->total, 0, ',', '.') }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>{{ $show->description2 }} </td>
                                        <td>{{ $show->qty2 }}</td>
                                        <td>{{ $show->unit2 }}</td>
                                        <td style="text-align: right">
                                            @switch($show)
                                            @case($show->price2 == null)
                                            @break
                                            @default
                                            {{ number_format($show->price2, 0, ',', '.') }}
                                            @endswitch </td>
                                        <td style="text-align: right">
                                            @switch($show)
                                            @case($show->total2 == '0')
                                            @break
                                            @default
                                            {{ number_format($show->total2, 0, ',', '.') }}
                                            @endswitch
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>{{ $show->description3 }} </td>
                                        <td>{{ $show->qty3 }}</td>
                                        <td>{{ $show->unit3 }}</td>
                                        <td style="text-align: right">
                                            @switch($show)
                                            @case($show->price3 == null)
                                            @break
                                            @default
                                            {{ number_format($show->price3, 0, ',', '.') }}
                                            @endswitch </td>
                                        <td style="text-align: right">
                                            @switch($show)
                                            @case($show->total3 == '0')
                                            @break
                                            @default
                                            {{ number_format($show->total3, 0, ',', '.') }}
                                            @endswitch
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>{{ $show->description4 }} </td>
                                        <td>{{ $show->qty4 }}</td>
                                        <td>{{ $show->unit4 }}</td>
                                        <td style="text-align: right">
                                            @switch($show)
                                            @case($show->price4 == null)
                                            @break
                                            @default
                                            {{ number_format($show->price4, 0, ',', '.') }}
                                            @endswitch
                                        </td>
                                        <td style="text-align: right">
                                            @switch($show)
                                            @case($show->total4 == '0')
                                            @break
                                            @default
                                            {{ number_format($show->total4, 0, ',', '.') }}
                                            @endswitch
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>{{ $show->description5 }} </td>
                                        <td>{{ $show->qty5 }}</td>
                                        <td>{{ $show->unit5 }}</td>
                                        <td style="text-align: right">
                                            @switch($show)
                                            @case($show->price5 == null)
                                            @break
                                            @default
                                            {{ number_format($show->price5, 0, ',', '.') }}
                                            @endswitch
                                        </td>
                                        <td style="text-align: right">
                                            @switch($show)
                                            @case($show->total5 == '0')
                                            @break
                                            @default
                                            {{ number_format($show->total5, 0, ',', '.') }}
                                            @endswitch
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>{{ $show->description6 }} </td>
                                        <td>{{ $show->qty6 }}</td>
                                        <td>{{ $show->unit6 }}</td>
                                        <td style="text-align: right">
                                            @switch($show)
                                            @case($show->price6 == null)
                                            @break
                                            @default
                                            {{ number_format($show->price6, 0, ',', '.') }}
                                            @endswitch
                                        </td>
                                        <td style="text-align: right">
                                            @switch($show)
                                            @case($show->total6 == '0')
                                            @break
                                            @default
                                            {{ number_format($show->total6, 0, ',', '.') }}
                                            @endswitch
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>{{ $show->description7 }} </td>
                                        <td>{{ $show->qty7 }}</td>
                                        <td>{{ $show->unit7 }}</td>
                                        <td style="text-align: right">
                                            @switch($show)
                                            @case($show->price7 == null)
                                            @break
                                            @default
                                            {{ number_format($show->price7, 0, ',', '.') }}
                                            @endswitch
                                        </td>
                                        <td style="text-align: right">
                                            @switch($show)
                                            @case($show->total7 == '0')
                                            @break
                                            @default
                                            {{ number_format($show->total7, 0, ',', '.') }}
                                            @endswitch
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>8</td>
                                        <td>{{ $show->description8 }} </td>
                                        <td>{{ $show->qty8 }}</td>
                                        <td>{{ $show->unit8 }}</td>
                                        <td style="text-align: right">
                                            @switch($show)
                                            @case($show->price8 == null)
                                            @break
                                            @default
                                            {{ number_format($show->price8, 0, ',', '.') }}
                                            @endswitch
                                        </td>
                                        <td style="text-align: right">
                                            @switch($show)
                                            @case($show->total8 == '0')
                                            @break
                                            @default
                                            {{ number_format($show->total8, 0, ',', '.') }}
                                            @endswitch
                                        </td>
                                    </tr>
                                    <tr>
                                        <th colspan="5" style="text-align: right">TOTAL</th>
                                        <td style="text-align: right"> {{ number_format($show->jumlah_total, 0, ',',
                                            '.') }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ Billing Address -->
        </div>
    </div>
</section>

@endsection