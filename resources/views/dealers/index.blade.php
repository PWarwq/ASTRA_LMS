<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-screen flex flex-col">

<x-navbar :links="[
    ['text'=>'Dashboard','url'=>route('dealers.index')],
    ['text'=>'Add Dealer','url'=>route('dealers.create')],
    ['text'=>'Task','url'=>route('tasks.create')],
]"/>

    <div class="flex-1 justify-center m-30">
        <table class="w-[1200px] shadow-lg border-collapse bg-white rounded-lg ">
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

    <x-footer />

</body>
</html>