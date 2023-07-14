<form action="{{ route('bank.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-body">
        <div class="form-group mb-1">
            <label class="form-label" for="basicInput">Nama Bank</label>
            <input type="text" class="form-control" id="basicInput" name="nama_bank"
                placeholder="Enter" required/>
        </div>
    </div>
    <div class="form-footer">
        <button type="submit" class="btn btn-primary" data-bs-dismiss="form">Submit</button>
    </div>
</form>
