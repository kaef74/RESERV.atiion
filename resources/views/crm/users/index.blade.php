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
                            <a href="{{ route('users.edit', $user->id) }}" class="btn btn-outline-primary">Редактировать</a>
                            <form action="{{ route('users.destroy', $user->id) }}" method="post" style="display: inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-outline-danger">Удалить</button>
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-crm-layout>
