<x-base tipo="subjects">
    <div class="card border-1" style="width: 28rem;padding: 4%;">

        <form action="{{ route('subjects.update', $subject->id) }}" method="POST">
            @csrf
            @method('PATCH')

            <x-input id="name" placeholder="" value="{{ $subject->name }}">
                Nombre:
            </x-input>

            <br>

            <x-button type="submit">
                Modificar <i class="bi bi-pencil-square"></i>
            </x-button>
        </form>
    </div>
</x-base>
