<form action="{{ route('user.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-body">
        <div class="form-group mb-1">
            <label class="form-label" for="basicInput">Name</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="basicInput" name="name"
                placeholder="Enter" value="{{ old('name') }}" required autofocus />
            @error('name')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="form-group mb-1">
            <label class="form-label" for="basicInput">Username</label>
            <input type="text" class="form-control @error('username') is-invalid @enderror" id="basicInput"
                name="username" placeholder="Enter" value="{{ old('username') }}" required />
            @error('username')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="form-group mb-1">
            <label class="form-label" for="basicInput">Email</label>
            <input type="email" class="form-control @error('email') is-invalid @enderror" id="basicInput" name="email"
                placeholder="Enter" value="{{ old('email') }}" required />
            @error('email')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="form-group mb-1">
            <label class="form-label" for="basicInput">Nomor HP</label>
            <input type="number" class="form-control @error('no_hp') is-invalid @enderror" id="basicInput" name="no_hp"
                placeholder="Enter" value="{{ old('no_hp') }}" required />
            @error('no_hp')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="form-group mb-1">
            <label class="form-label" for="basicInput">Password</label>
            <input type="password" class="form-control @error('password') is-invalid @enderror" id="basicInput"
                name="password" placeholder="Enter" value="{{ old('nama_pelanggan') }}" required />
            @error('password')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="form-group mb-1">
            <label class="form-label" for="basicInput">Jabatan</label>
            <select class="form-select @error('jabatan_id') is-invalid @enderror" id="selectDefault" name="jabatan_id">
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
        <div class="form-group mb-1">
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
    </div>
    <div class="form-footer">
        <button type="submit" class="btn btn-primary" data-bs-dismiss="form">Submit</button>
    </div>
</form>