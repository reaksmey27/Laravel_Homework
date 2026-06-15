<div class="modal fade" id="deleteStudent{{ $student->id }}" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <form action="{{ route('students.destroy', $student->id) }}" method="POST">
            @csrf
            @method('DELETE')

            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title">Delete student</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body">
                    Are you sure you want to delete this student?
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                        Cancel
                    </button>

                    <button type="submit" class="btn btn-danger">
                        Delete
                    </button>
                </div>

            </div>
        </form>
    </div>
</div>