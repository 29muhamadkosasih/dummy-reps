@extends('layouts/master')

@section('content')
@section('title', 'Invoice & Payment In')
<!-- Invoice table -->
<div class="col-12">
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Edit Invoice & Payment In</h5>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('invpayment.update', $user->id) }}">
                @csrf
                @method('PUT')
                <div class="row g-3">
                    <div class="col-md-6 mb-2">
                        <label class="form-label" for="multicol-country">No Project</label>
                        <input type="number" class="form-control" placeholder="Enter" name="no_project"
                            value="{{ old('no_project', $user->no_project) }}" required />
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">PIC Client</label>
                        <input type="text" class="form-control" placeholder="Enter" name="pic_client"
                            value="{{ old('pic_client', $user->pic_client) }}" />
                    </div>
                </div>
                <div class="row g-3">
                    <div class="col-md-6 mb-2">
                        <label class="form-label" for="basic-default-email">No Invoice</label>
                        <div class="input-group input-group-merge">
                            <input type="number" id="basic-default-email" class="form-control" placeholder="john.doe"
                                aria-label="john.doe" aria-describedby="basic-default-email2" name="no_invoice"
                                value="{{ old('no_invoice', $user->no_invoice) }}" required />
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">No PO</label>
                        <input type="number" class="form-control @error('no_po') is-invalid @enderror" name="no_po"
                            placeholder="Enter" value="{{ $user->no_po }}" />
                        @error('no_po')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="row g-3">
                    <div class="col-md-6">
                        <label class="form-label" for="basicInput">Date Invoice</label>
                        <input type="date" class="form-control" placeholder="Enter" name="date_invoice"
                            value="{{ old('date_invoice', $user->date_invoice) }}" required />
                        @error('date_invoice')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="d-flex justify-content-between">
                            <label class="form-label" for="password">Amount Invoice</label>
                        </div>
                        <input type="text" id="basic-default-email" class="form-control" placeholder="john.doe"
                            aria-label="john.doe" aria-describedby="basic-default-email2" name="amount_invoice"
                            value="{{ old('amount_invoice', $user->amount_invoice) }}" required />
                    </div>
                </div>
                <div class="row g-3">
                    <div class="col-md-6">
                        <label class="form-label" for="basicInput">Payment In</label>
                        <input type="text" class="form-control" placeholder="Enter" name="payment_in"
                            value="{{ old('payment_in', $user->payment_in) }}" />
                        @error('payment_in')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label" for="basicInput">Due Date</label>
                        <input type="date" class="form-control" placeholder="Enter" name="due_date"
                            value="{{ old('due_date', $user->due_date) }}" required />
                        @error('due_date')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="row g-3">
                    <div class="col-md-6">
                        <label class="form-label" for="basicInput">Paid Date</label>
                        <input type="date" class="form-control" placeholder="Enter" name="paid_date"
                            value="{{ old('paid_date', $user->paid_date) }}" />
                        @error('paid_date')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary float-end ms-2">Submit</button>
                    <a href="{{ route('invpayment.index') }}" class="btn btn-secondary float-end ">Back</a>
            </form>
        </div>
    </div>
</div>
<!-- /Invoice table -->
@endsection