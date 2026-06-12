<div class="modal fade" id="deleteCategory{{ $category->id }}" tabindex="-1" aria-hidden="true">

    <div class="modal-dialog modal-dialog-centered">

        <div class="modal-content border-0 shadow">

            <!-- Header -->
            <div class="modal-header bg-danger text-white">
                <h5 class="modal-title">
                    <i class="fa-solid fa-triangle-exclamation me-2"></i>
                    Delete Category
                </h5>

                <button type="button" class="btn-close btn-close-white"
                    data-bs-dismiss="modal"></button>
            </div>

            <form action="{{ route('categories.destroy', $category->id) }}" method="POST">
                @csrf
                @method('DELETE')

                <!-- Body -->
                <div class="modal-body text-center py-4">

                    <div class="mb-3">
                        <i class="fa-solid fa-trash fa-3x text-danger"></i>
                    </div>

                    <h5 class="fw-bold mb-2">Are you sure?</h5>

                    <p class="text-muted mb-3">
                        This action will permanently delete this category.
                        You cannot undo this action.
                    </p>

                    <!-- Optional: show category name -->
                    <div class="alert alert-light border">
                        <strong>{{ $category->name }}</strong>
                    </div>

                </div>

                <!-- Footer -->
                <div class="modal-footer d-flex justify-content-center gap-2">

                    <button type="button" class="btn btn-outline-secondary px-4"
                        data-bs-dismiss="modal">
                        <i class="fa-solid fa-xmark me-1"></i> Cancel
                    </button>

                    <button type="submit" class="btn btn-danger px-4">
                        <i class="fa-solid fa-trash me-1"></i> Delete
                    </button>

                </div>

            </form>

        </div>

    </div>

</div>
