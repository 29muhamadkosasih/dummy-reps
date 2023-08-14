@extends('layouts/master')

@section('title', 'Invoice & Payment In')

@section('content')
<!-- Invoice table -->
<div class="col-xl-12 mb-3">
    <div class="card">
        <div class="card-body">
            <div class="row mb-2">
                <div class="col-auto me-auto ">
                    <h5 class="mb-0">Report Data Invoice & Payment In
                </div>
            </div>
            <form action="{{ route('laporan.getLaporan.InvPayment') }}" method="POST">
                @csrf
                <div class="row g-4">
                    <div class="col-md-5 mb-2">
                        <label for="from" class="mb-2">Start Date</label><br> <input type="text" name="from"
                            class="form-control mb-0" placeholder="Start Date" onfocusin="(this.type='date')"
                            onfocusout="(this.type='text')">
                    </div>
                    <div class="col-md-5 mb-2">
                        <label for="to" class="mb-2">End Date</label><br>
                        <input type="text" name="to" class="form-control mb-0" placeholder="End Date"
                            onfocusin="(this.type='date')" onfocusout="(this.type='text')">
                    </div>
                    <div class="col-md-2 mb-2">
                        <label for="to" class="mb-2"></label><br>
                        <button type="submit" class="btn btn-primary float-end mt-2">Cari Data</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="col-xl-12">
    <div class="card">
        <div class="card-body">
            <div class="row ">
                <div class="col-auto me-auto ">
                    <h5 class="mb-0">List Data Invoice & Payment In</h5>
                </div>
                <div class="col-auto">
                    <a href="{{ route('invpayment.create') }}" class="btn btn-primary">Create</a>
                </div>
            </div>
            <div class="table-responsive text-nowrap">
                <table class="table table-hover table-bordered zero-configuration">
                    <thead>
                        <tr style="background-color: skyblue">
                            <th width='10px' style="text-align: center">No</th>
                            <th class="text-center">No Project</th>
                            <th class="text-center">PIC Client</th>
                            <th class="text-center">No Invoice</th>
                            <th class="text-center">No PO</th>
                            <th class="text-center">Date Invoice</th>
                            <th class="text-center">Amount (Rp.)</th>
                            <th class="text-center">Due Date</th>
                            <th class="text-center">Amount Payment In (Rp.)</th>
                            <th class="text-center">Paid Date</th>
                            <th class="text-center">Pot. PPH 23</th>
                            <th width='150px' class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($invpayment as $user)
                        <tr>
                            <td class="text-center">{{$loop->iteration}}</td>
                            <td>{{$user->no_project}}</td>
                            <td>{{$user->pic_client}}</td>
                            <td>{{$user->no_invoice}}</td>
                            <td>{{$user->no_po}}</td>
                            <td>{{$user->date_invoice}}</td>
                            <td style="text-align: right">
                                {{ number_format($user->amount_invoice, 0, ',', '.') }}
                            </td>
                            <td>{{$user->due_date}}</td>
                            <td style="text-align: right">
                                {{ number_format($user->payment_in, 0, ',', '.') }}
                            </td>
                            <td>{{$user->paid_date}}</td>
                            <td style="text-align: right">

                                {{ number_format($user->deduction, 0, ',', '.') }}
                            </td>
                            <td class="text-center">
                                <a href="{{ route('invpayment.edit', $user->id) }}"
                                    class="btn btn-icon btn-warning btn-sm">
                                    <span class="ti ti-edit"></span>
                                </a>
                                <form action="{{ route('invpayment.destroy', $user->id) }}" class="d-inline-block"
                                    method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" onclick="return confirm('Are you sure?')"
                                        class="btn btn-icon btn-danger btn-sm">
                                        <span class="ti ti-trash"></span>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    <tr></tr>
                    <tr></tr>
                    <tr></tr>
                    <tr></tr>
                    <tr></tr>
                    <tr></tr>
                    <tr style="color:black; background-color: lightgreen">
                        <th colspan="6" style="text-align: right"><b>TOTAL</b></th>
                        <td colspan="" style="text-align: right">

                            {{ number_format($jumlah_a, 0, ',', '.') }}
                        </td>
                        <td></td>
                        <td colspan="" style="text-align: right">
                            {{ number_format($jumlah_b, 0, ',', '.') }}
                        </td>
                        <td></td>
                        <td colspan="" style="text-align: right">

                            {{ number_format($jumlah_c, 0, ',', '.') }}
                        </td>
                        <td colspan="" style="text-align: right"></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection