@extends('layouts.app')

@section('content')

    <div class="container">

        <h3 align="center" class="mt-5">Welcome to Employee Management System</h3>

        <div class="row mt-4">
            <div class="col-md-12 text-center">
                <p>Thank you for visiting our Employee Management System. Here you can manage your employee records easily.</p>
                <p><a href="{{ route('employee.index') }}" class="btn btn-primary">Add New Employee</a></p>
            </div>
        </div>

    </div>

@endsection

@push('css')
    <style>
        .container {
            background-color: #f8f9fa;
            padding: 20px;
            border-radius: 8px;
        }
        
        h3 {
            color: #343a40;
        }

        .btn-primary {
            background-color: #007bff; /* Custom color */
            border-color: #007bff;
        }
    </style>
@endpush
