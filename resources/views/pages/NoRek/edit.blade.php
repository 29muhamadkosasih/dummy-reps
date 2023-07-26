<form action="{{ route('norek.update', $edit->id) }}" method="POST" enctype="multipart/form-data">
    @method('PUT')
    @csrf
    <div class="mb-3">
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
    <div class="mb-3">
        <label class="form-label" for="basicInput">No Rekening</label>
        <input type="text" class="form-control" id="basicInput" name="no_rekening" placeholder="Enter"
            value="{{ $edit->no_rekening }}" required />
    </div>
    <div class="mb-3">
        <label class="form-label" for="basicInput">Penerima</label>
        <input type="text" class="form-control" id="basicInput" name="nama_penerima" placeholder="Enter"
            value="{{ $edit->nama_penerima }}" required />
    </div>
    <input type="hidden" name="user_id" value="{{ $userId }}">
    <button type="submit" class="btn btn-primary float-end ms-2">Submit</button>
    <a href="{{ route('norek.index') }}" class="btn btn-secondary float-end ">Back</a>
</form>