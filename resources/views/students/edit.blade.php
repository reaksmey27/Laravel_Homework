@extends('layouts.app')

@section('content')

<div class="container mt-5">
    <div class="row justify-content-center">

    <div class="col-md-6">
        <div class="card shadow">

            <div class="card-header bg-primary text-white">
                <h4 class="mb-0">Edit Student</h4>
            </div>

            <div class="card-body">

                <form action="{{ route('students.update', $student->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="name" class="form-label">
                            Name
                        </label>

                        <input
                            type="text"
                            name="name"
                            id="name"
                            class="form-control @error('name') is-invalid @enderror"
                            value="{{ old('name', $student->name) }}"
                            placeholder="Enter student name"
                        >

                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">
                            Email
                        </label>

                        <input
                            type="email"
                            name="email"
                            id="email"
                            class="form-control @error('email') is-invalid @enderror"
                            value="{{ old('email', $student->email) }}"
                            placeholder="Enter email address"
                        >

                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="phone" class="form-label">
                            Phone Number
                        </label>

                        <input
                            type="text"
                            name="phone"
                            id="phone"
                            class="form-control @error('phone') is-invalid @enderror"
                            value="{{ old('phone', $student->phone) }}"
                            placeholder="Enter phone number"
                        >

                        @error('phone')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="d-flex justify-content-between">
                        <a href="{{ route('students.index') }}"
                           class="btn btn-secondary">
                            Back
                        </a>

                        <button type="submit"
                                class="btn btn-primary">
                            Update Student
                        </button>
                    </div>

                </form>

            </div>
        </div>
    </div>

</div>

</div>
@endsection
