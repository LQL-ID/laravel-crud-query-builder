@extends('layout.master')

@section('content')
    <div class="row align-items-center justify-content-center" style="height: 80vh;">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-end my-3">
                        <a href="{{ route('students.create') }}" class="btn btn-success btn-sm">Create Student Data</a>
                    </div>
                    @if(Session::has('success'))
                    <div class="alert alert-success" role="alert">
                        {{ Session::get('success') }}
                    </div>
                    @endif
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th class="text-center align-middle" scope="col">#</th>
                                <th class="text-center align-middle" scope="col">Name</th>
                                <th class="text-center align-middle" scope="col">Faculty</th>
                                <th class="text-center align-middle" scope="col">Major</th>
                                <th class="text-center align-middle" scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($students as $student)
                            <tr>
                                <th class="text-center align-middle" scope="row">{{ $loop->iteration }}</th>
                                <td class="text-center align-middle">{{ $student->name }}</td>
                                <td class="text-center align-middle">{{ $student->faculty }}</td>
                                <td class="text-center align-middle">{{ $student->major }}</td>
                                <td class="text-center align-middle">
                                    <a href="{{ route('students.edit', $student->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                    <a href="{{ route('students.destroy', $student->id) }}" class="btn btn-danger btn-sm btn-delete">Delete</a>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="5" class="text-center">Empty</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
