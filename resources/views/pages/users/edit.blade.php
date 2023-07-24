@extends('layouts/master')

@section('title', 'Users')

@section('content')
<!-- Invoice table -->
<div class="offset-2 col-8">
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Edit Users</h5>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('users.update', $user->id) }}">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label class="form-label" for="basic-default-fullname"></label>
                    <label class="form-label" for="multicol-country">Roles</label>
                    <select id="multicol-country" class="select2 form-select" data-allow-clear="true" name="role_id">
                        <option value="" selected hidden>Please Select</option>
                        @foreach ($roles as $id => $role)
                        <option value="{{$id}}" {{ (old('role_id', '' )==$id ) ? 'selected' : '' }}>{{$role}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="basic-default-fullname">Name</label>
                    <input type="text" class="form-control" id="basic-default-fullname" placeholder="John Doe"
                        name="name" value="{{ old('name', $user->name) }}" />
                </div>
                <div class="mb-3">
                    <label class="form-label" for="basic-default-email">Email</label>
                    <div class="input-group input-group-merge">
                        <input type="text" id="basic-default-email" class="form-control" placeholder="john.doe"
                            aria-label="john.doe" aria-describedby="basic-default-email2" name="email" name="email"
                            value="{{ old('email', $user->email) }}" />
                    </div>
                </div>
                <div class="form-group mb-3">
                    <label class="form-label" for="basicInput">Nomor HP</label>
                    <input type="number" class="form-control @error('no_hp') is-invalid @enderror" id="basicInput"
                        name="no_hp" placeholder="Enter" value="{{ old('no_hp', $user->no_hp) }}" required />
                    @error('no_hp')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label" for="basic-default-password">Password</label>
                    <input type="password" id="basic-default-password" class="form-control" placeholder="658 799 8941"
                        name="password" />
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
    </div>
</div>
<!-- /Invoice table -->
@endsection