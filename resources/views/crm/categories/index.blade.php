<x-crm-layout>
    <div class="container mt-4">
        <div class="row">
            <div class="col-12">
                @if (session('status'))
                    <div class="alert alert-success mt-3">
                        {{ session('status') }}
                    </div>
                @endif
                <a href="{{ route('category.create') }}" class="btn btn-success">Добавить новую категорию</a>
                @foreach($categories as $category)
                    <div class="card my-3">
                        <h5 class="card-header">{{ $category->name }}</h5>
                        <div class="card-body">
                            <p class="small">{{ $category->created_at }}</p>
                            <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                @if(auth()->user()->can(''))
                                    <a href="{{ route('category.edit', $category->id) }}" class="btn btn-warning">Редактировать</a>
                                @endif
                                @if(auth()->user()->can(''))
                                        <button type="button" class="btn btn-danger delete-category" data-id="{{ $category->id }}">Удалить</button>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-crm-layout>
