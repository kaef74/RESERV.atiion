<x-crm-layout>
    <div class="container mt-4">
        <div class="row">
            <div class="col-12">
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                <a href="{{ route('roles.create') }}" class="btn btn-success my-2">Добавить новую роль</a>
                @foreach($roles as $role)
                        <ul class="list-group list-group-horizontal my-2">
                            <li class="list-group-item col-4">{{ $role->name }}</li>
                            <li class="list-group-item col-5">ID: {{ $role->id }} | Создание: {{ $role->created_at }}</li>
                            <li class="list-group-item ">
                                <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                    @if(auth()->user()->can(''))
                                        <a href="{{ route('categories.edit', $role->id) }}" class="btn btn-warning">Редактировать</a>
                                    @endif
                                    @if(auth()->user()->can(''))
                                        <button type="button" class="btn btn-danger delete-category" data-id="{{ $role->id }}">Удалить</button>
                                    @endif
                                </div>
                            </li>
                        </ul>

                @endforeach
            </div>
        </div>
    </div>
</x-crm-layout>
