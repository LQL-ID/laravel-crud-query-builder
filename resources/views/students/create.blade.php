@extends('layout.master')

@section('content')
    <div class="row align-items-center justify-content-center" style="height: 80vh;">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-end my-3">
                        <a href="{{ route('students.index') }}" class="btn btn-warning btn-sm">Kembali Ke Halaman Utama</a>
                    </div>
                    @if(Session::has('errors'))
                    <div class="alert alert-danger" role="alert">
                        {{ Session::get('errors') }}
                    </div>
                    @endif
                    <form action="{{ route('students.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
                        </div>
                        <div class="mb-3">
                            <label for="faculty" class="form-label">Faculty</label>
                            <input type="text" class="form-control" id="faculty" name="faculty" value="{{ old('faculty') }}">
                        </div>
                        <div class="mb-3">
                            <label for="major" class="form-label">Major</label>
                            <input type="text" class="form-control" id="major" name="major" value="{{ old('major') }}">
                        </div>
                        <button type="submit" class="btn btn-primary float-end">Save Student To Database</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
