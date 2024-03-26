<div class="flex-shrink-0 p-3" style="width: 100px;">

    <ul class="list-unstyled ps-0">
        <li class="mb-1">
            <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#bookings-collapse" aria-expanded="true">
                Bookings
            </button>
            <div class="collapse show" id="bookings-collapse">
                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                    <li><a href="{{ route('category.index') }}" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Categories</a></li>
                    <li><a href="{{ route('subcategory.index') }}" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Subcategories</a></li>
                    <li><a href="{{ route('product.index') }}" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Products</a></li>
                </ul>
            </div>
        </li>
        <li class="mb-1">
            <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#users-collapse" aria-expanded="true">
                Users
            </button>
            <div class="collapse show" id="users-collapse">
                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                    <li><a href="{{ route('roles.index') }}" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Roles</a></li>
                    <li><a href="{{ route('users.index') }}" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Users</a></li>
                </ul>
            </div>
        </li>
    </ul>
</div>

