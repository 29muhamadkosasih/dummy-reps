@extends('layouts/master')
@section('content')

@section('title', 'Form')

<!-- Invoice table -->

<div class="col-xl-12">
    <div class="card">
        <div class="card-body">
            <div class="row mb-3">
                <div class="col-auto me-auto ">
                    <h5 class="mb-0">Data Report PB
                </div>
            </div>
            <div class="table-responsive text-nowrap">
                <table class="table table-hover zero-configuration">
                    <thead>
                        <tr style="background-color: skyblue">
                            <th width='10px' style="text-align: center">No</th>
                            <th>Tanggal</th>
                            <th>899-893</th>
                            <th>893-899</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $data)
                        <tr>
                            <td style="text-align: center">{{ $loop->iteration }}</td>
                            <td>
                                {{ $data->created_at->format('d M Y') }}
                            </td>
                            <td>
                                {{ $data->a_b }}
                            </td>
                            <td>
                                {{ $data->b_a }}
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
@endsection