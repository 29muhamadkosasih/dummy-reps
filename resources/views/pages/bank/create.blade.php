<form action="{{ route('bank.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-body">
        <div class="form-group mb-1">
            <label class="form-label" for="basicInput">Nama Bank</label>
            <input type="text" class="form-control @error('nama_bank') is-invalid @enderror" id="basicInput"
                name="nama_bank" placeholder="Enter" value="{{ old('nama_bank') }}" required />
            @error('nama_bank')
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