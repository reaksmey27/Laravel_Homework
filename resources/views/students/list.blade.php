@extends('layouts.app')

@section('content')

<div class="container mt-5">

@if(session('success'))
    <div class="alert alert-success alert-dismissible fade show">
        {{ session('success') }}

        <button type="button"
                class="btn-close"
                data-bs-dismiss="alert">
        </button>
    </div>
@endif

<div class="card shadow">

    <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
        <h4 class="mb-0">
            Student Management
        </h4>

        <a href="{{ route('students.create') }}"
           class="btn btn-light">
            <i class="fa-solid fa-plus"></i>
            Add Student
        </a>
    </div>

    <div class="card-body">

        <div class="table-responsive">

            <table class="table table-hover align-middle">

                <thead class="table-dark">
                    <tr>
                        <th width="70">#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th width="150" class="text-center">
                            Action
                        </th>
                    </tr>
                </thead>

                <tbody>

                    @forelse ($students as $student)

                        <tr>
                            <td>
                                {{ $students->firstItem() + $loop->index }}
                            </td>

                            <td>
                                <strong>{{ $student->name }}</strong>
                            </td>

                            <td>
                                {{ $student->email }}
                            </td>

                            <td>
                                <span class="badge bg-secondary">
                                    {{ $student->phone }}
                                </span>
                            </td>

                            <td class="text-center">

                                <a href="javascript:void(0)"
                                   class="btn btn-sm btn-success"
                                   data-bs-toggle="modal"
                                   data-bs-target="#showStudent{{ $student->id }}"
                                   title="View">
                                    <i class="fa-solid fa-eye"></i>
                                </a>

                                <a href="{{ route('students.edit', $student->id) }}"
                                   class="btn btn-sm btn-info text-white"
                                   title="Edit">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </a>

                                <a href="javascript:void(0)"
                                   class="btn btn-sm btn-danger"
                                   data-bs-toggle="modal"
                                   data-bs-target="#deleteStudent{{ $student->id }}"
                                   title="Delete">
                                    <i class="fa-solid fa-trash"></i>
                                </a>

                                @include('students.show')
                                @include('students.delete')

                            </td>
                        </tr>

                    @empty

                        <tr>
                            <td colspan="5" class="text-center text-muted py-4">
                                No students found.
                            </td>
                        </tr>

                    @endforelse

                </tbody>

            </table>

        </div>

        <div class="d-flex justify-content-end mt-3">
            {{ $students->links() }}
        </div>

    </div>

</div>

</div>
@endsection
