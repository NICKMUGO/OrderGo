<x-layout>
    <h2 class="text-2xl font-bold mb-4">Users Index</h2>
    
    <ul>
        @foreach ($users as $user)
            <li class="mb-2">
                {{ $user->name }} ({{ $user->email }})
            </li>
        @endforeach
    </ul>
</x-layout>
