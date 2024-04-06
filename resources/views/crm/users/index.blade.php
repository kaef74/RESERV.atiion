<x-crm-layout>
    <div class="container mt-4">
        <div class="row">
            <div class="col-12">
                @if (session('status'))
                    <div class="alert alert-success mt-3">
                        {{ session('status') }}
                    </div>
                @endif
                <form class="w-100 me-3 col-12" role="search">
                    <input type="search" class="form-control" placeholder="Search..." aria-label="Search">
                </form>
                @foreach($users as $user)
                    <ul class="list-group list-group-horizontal my-2">
                        <li class="list-group-item col-4">{{ $user->name }}</li>
                        <li class="list-group-item col-5">
                            Role:
                            @foreach($user->roles as $role)
                                {{ $role['name'] }}
                            @endforeach</li>

                        <li class="list-group-item col-3">
                            <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                @if(auth()->user()->can(''))
                                    <a href="{{ route('users.edit', $user->id) }}" class="btn btn-warning">Редактировать</a>
                                @endif
                                @if(auth()->user()->can(''))
                                        <button type="button" class="btn btn-danger delete-user" data-id="{{ $user->id }}">Удалить</button>
                                @endif
                            </div>
                        </li>
                    </ul>
                @endforeach
            </div>
        </div>
    </div>
</x-crm-layout>
