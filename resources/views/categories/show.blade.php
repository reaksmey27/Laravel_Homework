<div class="modal fade" id="showCategory{{ $category->id }}" tabindex="-1"
    aria-labelledby="showCategoryLabel{{ $category->id }}" aria-hidden="true">

    <div class="modal-dialog modal-dialog-centered">

        <div class="modal-content border-0 shadow">

            <!-- Header -->
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="showCategoryLabel{{ $category->id }}">
                    <i class="fa-solid fa-folder-open me-2"></i>
                    Category Details
                </h5>

                <button type="button" class="btn-close btn-close-white"
                    data-bs-dismiss="modal"></button>
            </div>

            <!-- Body -->
            <div class="modal-body">

                <div class="mb-3">
                    <label class="form-label fw-bold text-secondary">Category Name</label>

                    <div class="p-2 bg-light rounded border">
                        {{ $category->name }}
                    </div>
                </div>

                <div>
                    <label class="form-label fw-bold text-secondary">Description</label>

                    <div class="p-3 bg-light rounded border" style="min-height: 120px;">
                        {{ $category->description }}
                    </div>
                </div>

            </div>

            <!-- Footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary px-4"
                    data-bs-dismiss="modal">
                    <i class="fa-solid fa-xmark me-1"></i>
                    Close
                </button>
            </div>

        </div>

    </div>

</div>
