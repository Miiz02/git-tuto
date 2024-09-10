@extends('layouts.app')

@section('content')

<div class="container">
    <h3 class="mt-5">Student Management</h3>

    <a href="{{ route('student.create') }}" class="btn btn-primary mb-3">Add New Student</a>

    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>NDP</th>
                <th>Course</th>
                <th>Session</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Email</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($student as $student)
                <tr>
                    <td>{{ $student->id }}</td>
                    <td>{{ $student->nama_pelajar }}</td>
                    <td>{{ $student->ndp }}</td>
                    <td>{{ $student->kursus }}</td>
                    <td>{{ $student->sesi_kemasukan }}</td>
                    <td>{{ $student->no_tel }}</td>
                    <td>{{ $student->alamat }}</td>
                    <td>{{ $student->emel }}</td>
                    <td>
                        <a href="{{ route('student.edit', $student->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('student.destroy', $student->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
