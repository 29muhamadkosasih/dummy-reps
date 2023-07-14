<form action="{{ route('norek.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-body">
        <div class="form-group mb-1">
            <label class="form-label" for="basicInput">Nama Bank</label>
            <select class="form-select" id="selectDefault" name="bank_id">
                <option selected>Open this select</option>
                    @foreach ($bank as $key => $value)
                    <option value="{{ $value->id }}">
                        {{ $value->nama_bank }}
                    </option>
                    @endforeach
                </select>
        </div>
        <div class="form-group mb-1">
            <label class="form-label" for="basicInput">No Rekening</label>
            <input type="text" class="form-control" id="basicInput" name="no_rekening"
                placeholder="Enter" required/>
        </div>
        <div class="form-group mb-1">
            <label class="form-label" for="basicInput">Penerima</label>
            <input type="text" class="form-control" id="basicInput" name="nama_penerima"
            placeholder="Enter" required/>
        </div>
    </div>
    <div class="form-footer">
        <button type="submit" class="btn btn-primary" data-bs-dismiss="form">Submit</button>
    </div>
</form>
