@extends('layouts/master')

@section('title', 'Users')

@section('content')
<!-- Invoice table -->
<div class="offset-2 col-8">
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Create Users</h5>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('users.store') }}">
                @csrf
                <div class="mb-3">
                    <label class="form-label" for="basic-default-fullname"></label>
                    <label class="form-label" for="multicol-country">Roles</label>
                    <select id="multicol-country" class="select2 form-select" data-allow-clear="true" name="role_id">
                        @foreach ($roles as $id => $role)
                        <option value="{{$id}}" {{ (old('role_id', '' )==$id ) ? 'selected' : '' }}>{{$role}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="basic-default-fullname">Name</label>
                    <input type="text" class="form-control" id="basic-default-fullname" placeholder="John Doe"
                        name="name" />
                </div>
                <div class="form-group mb-3">
                    <label class="form-label" for="basic-default-fullname">Username</label>
                    <input type="text" class="form-control @error('username') is-invalid @enderror"
                        id="basic-default-fullname" name="username" placeholder="Enter" value="{{ old('username') }}"
                        required />
                    @error('username')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label" for="basic-default-email">Email</label>
                    <div class="input-group input-group-merge">
                        <input type="email" id="basic-default-email" class="form-control" placeholder="john.doe"
                            aria-label="john.doe" aria-describedby="basic-default-email2" name="email" />
                    </div>
                </div>
                <div class="mb-3 form-password-toggle">
                    <div class="d-flex justify-content-between">
                        <label class="form-label" for="password">Password</label>
                    </div>
                    <div class="input-group input-group-merge">
                        <input type="password" id="password"
                            class="form-control @error('password') is-invalid @enderror"
                            placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                            name="password" required autocomplete="current-password" />
                        <span class="input-group-text cursor-pointer"><i class="ti ti-eye-off"></i></span>
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group mb-3">
                    <label class="form-label" for="basicInput">Jabatan</label>
                    <select class="form-select @error('jabatan_id') is-invalid @enderror" id="selectDefault"
                        name="jabatan_id">
                        <option selected>Open this select</option>
                        @foreach ($jabatan as $key => $value)
                        <option value="{{ $value->id }}">
                            {{ $value->jabatan }}
                        </option>
                        @endforeach
                    </select>
                    @error('jabatan_id')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label class="form-label" for="basicInput">Departement</label>
                    <select class="form-select @error('departement_id') is-invalid @enderror" id="selectDefault"
                        name="departement_id">
                        <option selected>Open this select</option>
                        @foreach ($departement as $key => $data)
                        <option value="{{ $data->id }}">
                            {{ $data->nama_departement }}
                        </option>
                        @endforeach
                    </select>
                    @error('departement_id')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary float-end ms-2">Submit</button>
                    <a href="{{ route('users.index') }}" class="btn btn-secondary float-end ">Back</a>
            </form>

        </div>
        {{-- <form id="kt_modal_new_card_form" class="form" action="{{ route('import') }}" method="POST"
            enctype="multipart/form-data">
            @csrf
            <!--begin::Input group-->
            <div class="d-flex flex-column mb-7 fv-row">
                <!--begin::Label-->
                <label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
                    <span class="required">File</span>
                    <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                        title="Specify a card holder's name"></i>
                </label>
                <!--end::Label-->
                <input type="file" class="form-control form-control-solid" name="file" required />
            </div>
            <!--end::Input group-->

            <!--begin::Actions-->
            <div class="text-center pt-15">
                <button type="reset" class="btn btn-light me-3">Reset</button>
                <button type="submit" id="kt_modal_new_card_submit" class="btn btn-primary">
                    <span class="indicator-label">Submit</span>
                </button>
            </div>
            <!--end::Actions-->
        </form> --}}
    </div>
</div>
<!-- /Invoice table -->
@endsection