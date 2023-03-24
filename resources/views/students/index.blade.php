@extends('layout.master')

@section('content')
    <div class="row align-items-center justify-content-center" style="height: 80vh;">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-end my-3">
                        <a href="{{ route('students.create') }}" class="btn btn-success btn-sm">Create Student Data</a>
                    </div>
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
                            <tr>
                                <th class="text-center align-middle" scope="row">1</th>
                                <td class="text-center align-middle">Jacob</td>
                                <td class="text-center align-middle">Thornton</td>
                                <td class="text-center align-middle">@fat</td>
                                <td class="text-center align-middle">
                                    <a href="" class="btn btn-warning btn-sm">Edit</a>
                                    <a href="" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
