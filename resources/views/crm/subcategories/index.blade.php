<x-crm-layout>
    <div class="container mt-4">
        <div class="row">
            <div class="col-12">
                @if (session('status'))
                    <div class="alert alert-success mt-3">
                        {{ session('status') }}
                    </div>
                @endif
                <a href="{{ route('subcategories.create') }}" class="btn btn-success">Добавить новую доп. категорию</a>
                @foreach($subcategories as $subcategory)
                        <ul class="list-group list-group-horizontal my-2">
                            <li class="list-group-item col-3">Доп. категория: {{ $subcategory->subcategoryName }}</li>
                            <li class="list-group-item col-4"> Категория: {{ $subcategory->categoryName }}</li>
                            <li class="list-group-item col-4">
                                @if(auth()->user()->can(''))
                                    <a href="{{ route('subcategories.edit', $subcategory->subcategoryId) }}" class="btn btn-warning">Редактировать</a>
                                @endif
                                @if(auth()->user()->can(''))
                                    <button type="button" class="btn btn-danger delete-subcategory" data-id="{{ $subcategory->subcategoryId }}">Удалить</button>
                                @endif
                            </li>
                        </ul>
                @endforeach
            </div>
        </div>
    </div>
</x-crm-layout>
