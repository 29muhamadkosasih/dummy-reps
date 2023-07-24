<form action="{{ route('bank.update', $edit->id) }}" method="POST" enctype="multipart/form-data">
    @method('PUT')
    @csrf
    <div class="mb-3">
        <label class="form-label">Nama Bank</label>
        <input type="text" class="form-control @error('nama_bank') is-invalid @enderror" placeholder="John Doe"
            name="nama_bank" value="{{ $edit->nama_bank }}" />
        @error('nama_bank')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary float-end ms-2">Submit</button>
    <a href="{{ route('bank.index') }}" class="btn btn-secondary float-end ">Back</a>
</form>
