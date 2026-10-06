<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-screen">

    <nav class="shadow-lg px-5 py-5 flex justify-between items-center">
        <p class="font-bold text-red-500">LMS ASTRA</p>

        <div class="flex items-center gap-6">
            <a href="" class="bg-red-500 px-4 py-2 text-white rounded-lg font-semibold hover:bg-red-600">Dashboard</a>
            <a href="{{ route('dealers.create') }}"
                class="bg-red-500 px-4 py-2 text-white rounded-lg font-semibold hover:bg-red-600">Add Dealer</a>
            <a href="" class="bg-red-500 px-4 py-2 text-white rounded-lg font-semibold hover:bg-red-600">Task</a>
        </div>
    </nav>

    <div class="flex justify-center mt-10">
        <table class="w-[900px] shadow-lg border-collapse bg-white rounded-lg">
            <thead class="bg-red-100">
                <tr>
                    <th class="px-6 py-3 text-center">Code</th>
                    <th class="px-6 py-3 text-center">Dealer Name</th>
                    <th class="text-center">Action</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($dealers as $d)
                    <tr>
                        <td class="px-6 py-3 text-center">{{ $d->code }}</td>
                        <td class="px-6 py-3 text-center">{{ $d->name }}</td>
                        <td class="py-3 text-center">
                            <div class="flex items-center justify-center gap-2">
                                <a href="{{ route('dealers.show', $d->id) }}"
                                    class="text-center bg-blue-500 hover:bg-blue-600 px-4 py-2 rounded-lg font-bold text-white text-sm cursor-pointer">
                                    Show
                                </a>

                                <a href="{{ route('dealers.edit', $d->id) }}"
                                    class="text-center bg-yellow-500 hover:bg-yellow-600 px-4 py-2 rounded-lg font-bold text-white text-sm cursor-pointer">
                                    Edit
                                </a>

                                <form method="POST" action="{{ route('dealers.destroy', $d->id) }}" onsubmit="return confirm('Hapus ?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="text-center bg-red-500 hover:bg-red-600 px-4 py-2 rounded-lg font-bold text-white text-sm cursor-pointer">
                                        Remove
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>