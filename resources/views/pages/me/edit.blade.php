@extends('layout.master')
@section('content')
<section id="complex-header-datatable">
    <div class="row">
        <div class="offset-2 col-8">
            <div class="card">
                <div class="card-header border-bottom">
                    <h4 class="card-title">Profile Details</h4>
                </div>
                <div class="card-body py-2 my-25">
                    <!-- form -->
                    <form action="{{ route('me.update', $edit->id) }}" method="POST" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                         <div class="row">
                            <div class="col-12 col-sm-6 mb-1">
                                <label class="form-label" for="accountFirstName">Name</label>
                                <input type="text" class="form-control" id="accountFirstName" name="name" placeholder="John" value="{{ $edit->name }}" data-msg="Please enter first name" />
                            </div>
                            <div class="col-12 col-sm-6 mb-1">
                                <label class="form-label" for="accountEmail">Email</label>
                                <input type="email" class="form-control" id="accountEmail" name="email" placeholder="Email" value="{{ $edit->email }}" />
                            </div>
                            <div class="col-12 col-sm-6 mb-1">
                                <label class="form-label" for="accountLastName">Password</label>
                                <input type="Password" class="form-control" id="accountLastName" name="password" placeholder="Doe" value="{{ $edit->password }}" data-msg="Please enter last name" />
                            </div>
                            <div class="col-12 col-sm-6 mb-1">
                                <label for="language" class="form-label">Jabatan</label>
                                <select id="language" class="select2 form-select">
                                    <option value="">{{ $edit->jabatan->jabatan }}</option>
                                    <option value="1">Marketing</option>
                                    <option value="2">Finance</option>
                                    <option value="3">SPV</option>
                                    <option value="4">Manajer</option>
                                    <option value="5">Direktur Utama</option>
                                </select>
                            </div>
                            <div class="col-12" style="text-align: right">
                                <a href="{{ route('me.index') }}" class="btn btn-outline-secondary mt-1 me-1" >Back</a>
                                <button type="submit" class="btn btn-primary mt-1 ">Save changes</button>
                            </div>
                        </div>
                    </form>
                    <!--/ form -->
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
