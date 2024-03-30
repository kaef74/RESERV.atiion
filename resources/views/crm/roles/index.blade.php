<x-crm-layout>
    <div class="container mt-4">
        <div class="row">
            <div class="col-12">
                @if (session('status'))
                    <div class="alert alert-success mt-3">
                        {{ session('status') }}
                    </div>
                @endif
                <a href="{{ route('roles.create') }}" class="btn btn-success">Добавить новую роль</a>
                @foreach($roles as $role)
                    <div class="card my-3">
                        <h5 class="card-header">{{ $role->name }}</h5>
                        <div class="card-body">
                            <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                <a href="{{ route('roles.edit', $role->id) }}" class="btn btn-warning">Редактировать</a>
                                <button type="button" class="btn btn-danger delete-role" data-id="{{ $role->id }}">Удалить</button>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-crm-layout>
