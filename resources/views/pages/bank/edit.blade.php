<form action="{{ route('bank.update', $edit->id) }}" method="POST" enctype="multipart/form-data">
    @method('PUT')
    @csrf
    <div class="form-body">
        <div class="form-group mb-1">
            <label class="form-label" for="basicInput">Nama Bank</label>
            <input type="text" class="form-control" id="basicInput" name="nama_bank"
                placeholder="Enter" value="{{ $edit->nama_bank }}" required/>
        </div>
    </div>
    <div class="form-footer">
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('user.index') }}" class="btn font-weight-bold btn-block btn-danger">Cancel</a>

    </div>
</form>

