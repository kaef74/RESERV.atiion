<x-crm-layout>
    <div class="container mt-4">
        <div class="row">
            <div class="col-12">
                @if (session('status'))
                    <div class="alert alert-success mt-3">
                        {{ session('status') }}
                    </div>
                @endif
                <a href="{{ route('subcategories.create') }}" class="btn btn-success my-2">Добавить новую доп. категорию</a>
                <form class="w-100 me-3 col-12" role="search">
                    <input type="search" class="form-control" placeholder="Search..." aria-label="Search">
                </form>
                @foreach($subcategories as $subcategory)
                        <ul class="list-group list-group-horizontal my-2">
                            <li class="list-group-item col-4">Доп. категория: {{ $subcategory->subcategoryName }}</li>
                            <li class="list-group-item col-5"> Категория: {{ $subcategory->categoryName }}</li>
                            <li class="list-group-item">
                                <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                    @if(auth()->user()->can(''))
                                        <a href="{{ route('subcategories.edit', $subcategory->subcategoryId) }}" class="btn btn-warning">Редактировать</a>
                                    @endif
                                    @if(auth()->user()->can(''))
                                        <button type="button" class="btn btn-danger delete-subcategory" data-id="{{ $subcategory->subcategoryId }}">Удалить</button>
                                    @endif
                                </div>
                            </li>
                        </ul>
                @endforeach
            </div>
        </div>
    </div>
</x-crm-layout>
