@props(['type' => 'info', 'message'])

@php
    $colors = [
        'success' => [
            'bg' => 'bg-green-100',
            'border' => 'border-green-300',
            'text' => 'text-green-600',
            'bar' => 'bg-green-400',
        ],
        'error' => [
            'bg' => 'bg-red-100',
            'border' => 'border-red-300',
            'text' => 'text-red-600',
            'bar' => 'bg-red-400',
        ],
        'warning' => [
            'bg' => 'bg-yellow-100',
            'border' => 'border-yellow-300',
            'text' => 'text-yellow-600',
            'bar' => 'bg-yellow-400',
        ],
        'info' => [
            'bg' => 'bg-blue-100',
            'border' => 'border-blue-300',
            'text' => 'text-blue-600',
            'bar' => 'bg-blue-400',
        ],
    ];
    $c = $colors[$type] ?? $colors['info'];
@endphp

<div
    class="toast relative px-4 py-2 {{ $c['bg'] }} border {{ $c['border'] }} {{ $c['text'] }} rounded-lg shadow-md overflow-hidden">
    {{ $message }}
    <div class="progress-bar absolute bottom-0 left-0 h-1 {{ $c['bar'] }} w-full"></div>
</div>
