@extends('layout.master')

@section('content')
    <div class="row align-items-center justify-content-center" style="height: 80vh;">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-end my-3">
                        <a href="{{ route('students.index') }}" class="btn btn-warning btn-sm">Kembali Ke Halaman Utama</a>
                    </div>
                    <form action="{{ route('students.update', $student->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $student->name) }}">
                        </div>
                        <div class="mb-3">
                            <label for="faculty" class="form-label">Faculty</label>
                            <input type="text" class="form-control" id="faculty" name="faculty" value="{{ old('name', $student->faculty) }}">
                        </div>
                        <div class="mb-3">
                            <label for="major" class="form-label">Major</label>
                            <input type="text" class="form-control" id="major" name="major" value="{{ old('major', $student->major) }}">
                        </div>
                        <button type="submit" class="btn btn-primary float-end">Save Changes Student To Database</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
