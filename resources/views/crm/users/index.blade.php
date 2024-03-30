<x-crm-layout>
    <div class="container mt-4">
        <div class="row">
            <div class="col-12">
                @if (session('status'))
                    <div class="alert alert-success mt-3">
                        {{ session('status') }}
                    </div>
                @endif
                @foreach($users as $user)
                    <div class="card my-3">
                        <h5 class="card-header">{{ $user->name }}</h5>
                        <div class="card-body">
                            <p>Role:
                                @foreach($user->roles as $role)
                                    {{ $role['name'] }}
                                @endforeach
                            </p>
                            <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                <a href="{{ route('users.edit', $user->id) }}" class="btn btn-warning">Редактировать</a>
                                <button type="button" class="btn btn-danger delete-user" data-id="{{ $user->id }}">Удалить</button>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-crm-layout>
