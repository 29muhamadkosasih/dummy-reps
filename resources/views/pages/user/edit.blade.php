<form action="{{ route('user.update', $edit->id) }}" method="POST" enctype="multipart/form-data">
    @method('PUT')
    @csrf
    <div class="form-body">
        <div class="form-group mb-1">
            <label class="form-label" for="basicInput">Name</label>
            <input type="text" class="form-control" id="basicInput" name="name" placeholder="Enter"
                value="{{ $edit->name }}" required autofocus />
        </div>
        <div class="form-group mb-1">
            <label class="form-label" for="basicInput">username</label>
            <input type="text" class="form-control" id="basicInput" name="username" placeholder="Enter"
                value="{{ $edit->username }}" required />
        </div>
        <div class="form-group mb-1">
            <label class="form-label" for="basicInput">Email</label>
            <input type="email" class="form-control" id="basicInput" name="email" placeholder="Enter"
                value="{{ $edit->email }}" required />
        </div>
        <div class="form-group mb-1">
            <label class="form-label" for="basicInput">Nomor HP</label>
            <input type="text" class="form-control" id="basicInput" name="no_hp" placeholder="Enter"
                value="{{ $edit->no_hp }}" required />
        </div>
        {{-- <div class="form-group mb-1">
            <label class="form-label" for="basicInput">Password</label>
            <input type="password" class="form-control" id="basicInput" name="password" placeholder="Enter"
                value="{{ $edit->password }}" required />
        </div> --}}
        <div class="form-group mb-1">
            <label class="form-label" for="basicInput">Jabatan</label>
            <select class="form-select" id="selectDefault" name="jabatan_id" required>
                <option selected>Open this select</option>
                @foreach ($jabatan as $key => $value)
                <option value="{{ $value->id }}">
                    {{ $value->jabatan }}
                </option>
                @endforeach
            </select>
        </div>
        <div class="form-group mb-1">
            <label class="form-label" for="basicInput">Departement</label>
            <select class="form-select" id="selectDefault" name="departement_id">
                <option selected>Open this select</option>
                @foreach ($departement as $key => $data)
                <option value="{{ $data->id }}">
                    {{ $data->nama_departement }}
                </option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="form-footer">
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('user.index') }}" class="btn font-weight-bold btn-block btn-danger">Cancel</a>

    </div>
</form>
