<x-crm-layout>
    <div class="container mt-4">
        <div class="row">
            <div class="col-12">
                @if (session('status'))
                    <div class="alert alert-success mt-3">
                        {{ session('status') }}
                    </div>
                @endif
                <a href="{{ route('categories.create') }}" class="btn btn-success">Добавить новую категорию</a>
                @foreach($categories as $category)
                        <ul class="list-group list-group-horizontal my-2">
                            <li class="list-group-item col-3">{{ $category->name }}</li>
                            <li class="list-group-item col-4">ID: {{ $category->id }} | Создание: {{ $category->created_at }}</li>
                            <li class="list-group-item col-4">
                                @if(auth()->user()->can(''))
                                    <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-warning">Редактировать</a>
                                @endif
                                @if(auth()->user()->can(''))
                                    <button type="button" class="btn btn-danger delete-category" data-id="{{ $category->id }}">Удалить</button>
                                @endif
                            </li>
                        </ul>
                @endforeach
            </div>
        </div>
    </div>
</x-crm-layout>
