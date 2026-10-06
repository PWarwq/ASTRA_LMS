<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-screen flex items-center justify-center">

    <form method="POST" action="{{ route('dealers.update', $dealer->id) }}">
        @csrf
        @method('PUT')
        <div class="bg-red-200 px-6 py-4 rounded-lg shadow-lg">
            <div class="space-y-2">
                <h1 class="font-bold text-2xl text-red">Edit Dealer <span class="text-red-600">ASTRA</span></h1>
                <p class="text-red">Edit Dealer, {{ $dealer->name }}</p>
            </div>

            <div class="mt-10 space-y-4">
                <div>
                    <p class="font-bold text-lg">Code</p>
                    <input type="text" name="code" value="{{ $dealer->code }}"
                        class="bg-white py-2 px-4 rounded-lg shadow-lg w-150">
                </div>
                <div>
                    <p class="font-bold text-lg">Nama</p>
                    <input type="text" name="name" value="{{ $dealer->name }}"
                        class="bg-white py-2 px-4 rounded-lg shadow-lg w-150">
                </div>
            </div>
            <div class="flex justify-end gap-3 mt-6">
                <button type="submit"
                    class="bg-blue-500 rounded-lg text-white font-semibold w-25 px-2 py-2 hover:bg-blue-600 transition cursor-pointer shadow-lg text-center">Save</button>
                <a href="{{ route('dealers.index') }}"
                    class="border-2 border-red-500 rounded-lg font-semibold text-red-500 hover:bg-red-500 hover:text-white transition w-25 px-2 py-2 cursor-pointer shadow-lg text-center">Cancel</a>
            </div>
        </div>

    </form>
</body>

</html>