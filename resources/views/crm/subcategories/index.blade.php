<x-crm-layout>
    <div class="container mt-4">
        <div class="row">
            <div class="col-12">
                @if (session('status'))
                    <div class="alert alert-success mt-3">
                        {{ session('status') }}
                    </div>
                @endif
                <a href="{{ route('subcategory.create') }}" class="btn btn-success">Добавить новую доп. категорию</a>
                @foreach($subcategories as $subcategory)
                    <div class="card my-3">
                        <h5 class="card-header">{{ $subcategory->subcategoryName }}</h5>
                        <div class="card-body">
                            <p>Category: {{ $subcategory->categoryName }}</p>
                            <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                <a href="{{ route('subcategory.edit', $subcategory->subcategoryId) }}" class="btn btn-warning">Редактировать</a>
                                <button type="button" class="btn btn-danger delete-subcategory" data-id="{{ $subcategory->subcategoryId }}">Удалить</button>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-crm-layout>
