@extends('layouts/master')

@section('title', 'INVOICE & PAYMENT IN')

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
                <label for="from" class="mb-2">Start Date</label><br>
                <input type="text" name="from" class="form-control mb-2" placeholder="Start Date"
                    onfocusin="(this.type='date')" onfocusout="(this.type='text')">
                <label for="to" class="mb-2">End Date</label><br>
                <input type="text" name="to" class="form-control mb-3" placeholder="End Date"
                    onfocusin="(this.type='date')" onfocusout="(this.type='text')">
                <button type="submit" class="btn btn-primary mb-0" style="align-items: right">Cari Data</button>
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
                        <tr>
                            <th width='10px' style="text-align: center">No</th>
                            <th>No Project</th>
                            <th>PIC Client</th>
                            <th>No Invoice</th>
                            <th>No PO</th>
                            <th>Date Invoice</th>
                            <th>Amount Invoice (Rp.)</th>
                            <th>Payment In (Rp.)</th>
                            <th>Due Date</th>
                            <th>Paid Date</th>
                            <th>Deduction</th>
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
                            <td style="text-align: right">
                                {{ number_format($user->payment_in, 0, ',', '.') }}
                            </td>
                            <td>{{$user->due_date}}</td>
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
                    <tr style="background-color: skyblue">
                        <th colspan="6" style="text-align: right">TOTAL</th>
                        <td colspan="" style="text-align: right">

                            {{ number_format($jumlah_a, 0, ',', '.') }}
                        </td>
                        <td colspan="" style="text-align: right">
                            {{ number_format($jumlah_b, 0, ',', '.') }}
                        </td>
                        <td></td>
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
