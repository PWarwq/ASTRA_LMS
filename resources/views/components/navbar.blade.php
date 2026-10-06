@props(['links' => null, 'task' => null])
@php
$links = $links ?? [
    ['text' => 'Task Dashboard', 'url' => route('tasks.index')],
    ['text' => 'Create Task', 'url' => route('tasks.create')],
];
@endphp
    <nav class="shadow-lg px-5 py-5 flex justify-between items-center">
        <p class="font-bold text-red-500">LMS ASTRA</p>

        <div class="flex items-center gap-6">
        @foreach ($links as $link)
            
            <a href="{{ $link['url'] }}" class="bg-red-500 px-4 py-2 text-white rounded-lg font-semibold hover:bg-red-600">{{ $link['text'] }}</a>
        
        @endforeach
        @if($task)
            <a href="{{ route('tasks.review', $task) }}" class="bg-red-500 px-4 py-2 text-white rounded-lg font-semibold hover:bg-red-600">Task Review</a>
        @endif
        </div>
    </nav>