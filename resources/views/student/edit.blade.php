@extends('layouts.app')

@section('content')

<div class="container">
    <h3 class="mt-5">Edit Student Details</h3>

    <form action="{{ route('student.update', $student->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="nama_pelajar">Name</label>
            <input type="text" class="form-control" id="nama_pelajar" name="nama_pelajar" value="{{ old('nama_pelajar', $student->nama_pelajar) }}" required>
        </div>

        <div class="form-group">
            <label for="ndp">NDP</label>
            <input type="text" class="form-control" id="ndp" name="ndp" value="{{ old('ndp', $student->ndp) }}" required>
        </div>

        <div class="form-group">
            <label for="kursus">Course</label>
            <input type="text" class="form-control" id="kursus" name="kursus" value="{{ old('kursus', $student->kursus) }}" required>
        </div>

        <div class="form-group">
            <label for="sesi_kemasukan">Session</label>
            <input type="text" class="form-control" id="sesi_kemasukan" name="sesi_kemasukan" value="{{ old('sesi_kemasukan', $student->sesi_kemasukan) }}" required>
        </div>

        <div class="form-group">
            <label for="no_tel">Phone</label>
            <input type="text" class="form-control" id="no_tel" name="no_tel" value="{{ old('no_tel', $student->no_tel) }}" required>
        </div>

        <div class="form-group">
            <label for="alamat">Address</label>
            <input type="text" class="form-control" id="alamat" name="alamat" value="{{ old('alamat', $student->alamat) }}" required>
        </div>

        <div class="form-group">
            <label for="emel">Email</label>
            <input type="email" class="form-control" id="emel" name="emel" value="{{ old('emel', $student->emel) }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Update Student</button>
    </form>
</div>

@endsection
