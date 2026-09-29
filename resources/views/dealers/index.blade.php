<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <table>
        <thead>
            <tr>
                <th>Code</th>
                <th>Dealer Name</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Charles</td>
                <td>
                    <button class="bg-blue-500 px-4 py-2 rounded-lg font-bold text-white cursor-pointer text-sm shadow-lg">Edit</button>
                    <button class="bg-yellow-500 px-4 py-2 rounded-lg font-bold text-white cursor-pointer text-sm shadow-lg">Update</button>
                    <button class="bg-red-500 px-4 py-2 rounded-lg font-bold text-white cursor-pointer text-sm shadow-lg transition-all hover:text-grey hover:bg-red-700">Remove</button>
                </td>
            </tr>
        </tbody>
    </table>
</body>

</html>