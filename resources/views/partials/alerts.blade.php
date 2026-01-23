@if(session('success'))
    <div role="alert" class="my-8 rounded-md border-l-4 border-green-500 bg-green-100 p-4 text-green-700 opacity-75">
        <p class="font-bold">Success!</p>
        <p>{{ session('success') }}</p>
    </div>
@endif
@if(session('error'))
    <div role="alert" class="my-8 rounded-md border-l-4 border-red-500 bg-red-100 p-4 text-red-700 opacity-75">
        <p class="font-bold">Error</p>
        <p>{{ session('error') }}</p>
    </div>
@endif
