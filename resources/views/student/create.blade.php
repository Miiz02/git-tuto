@extends('layouts.app')

@section('content')

<form method="POST" action="{{ route('student.store') }}">
    @csrf
    <div class="form-group">
        <label for="nama_pelajar">Nama Pelajar</label>
        <input type="text" class="form-control" name="nama_pelajar" required>
    </div>

    <div class="form-group">
        <label for="ndp">NDP</label>
        <input type="text" class="form-control" name="ndp" required>
    </div>

    <div class="form-group">
        <label for="kursus">Kursus</label>
        <input type="text" class="form-control" name="kursus" required>
    </div>

    <div class="form-group">
        <label for="sesi_kemasukan">Sesi Kemasukan</label>
        <input type="text" class="form-control" name="sesi_kemasukan" required>
    </div>

    <div class="form-group">
        <label for="no_tel">No. Tel</label>
        <input type="text" class="form-control" name="no_tel" required>
    </div>

    <div class="form-group">
        <label for="alamat">Alamat</label>
        <input type="text" class="form-control" name="alamat" required>
    </div>

    <div class="form-group">
        <label for="emel">Emel</label>
        <input type="email" class="form-control" name="emel" required>
    </div>

    <button type="submit" class="btn btn-primary">Add Student</button>
</form>

@endsection
