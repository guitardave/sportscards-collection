<x-app class="justify-center">
    <h1 class="text-2xl font-bold mb-4">{{ $title ?? 'Login' }}</h1>
    <form action="{{ route('login') }}" method="POST">
        <div class="flex justify-items-center gap-4 mb-4">
            @csrf
            <div>
                <label for="email" class="block">Email:</label>
                <input type="email" class="block p-2 border border-gray-300 rounded-md" id="email" name="email" required>
            </div>
            <div>
                <label for="password" class="block">Password:</label>
                <input type="password" class="block p-2 border border-gray-300 rounded-md" id="password" name="password" required>
            </div>
            <div>
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-6">Login</button>
            </div>

        </div>
    </form>
</x-app>
