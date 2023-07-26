<form action="{{ route('rujukan.update', $edit->id) }}" method="POST" enctype="multipart/form-data">
    @method('PUT')
    @csrf
    <div class="mb-3">
        <label class="form-label" for="basicInput">Nama</label>
        <input type="text" class="form-control" id="basicInput" name="name" placeholder="Enter"
            value="{{ $edit->name }}" required />
    </div>
    <button type="submit" class="btn btn-primary float-end ms-2">Submit</button>
    <a href="{{ route('rujukan.index') }}" class="btn btn-secondary float-end ">Back</a>
</form>
