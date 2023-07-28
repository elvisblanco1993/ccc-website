<div>
    @if ($event)
        <div class="w-full bg-yellow-300 text-black">
            <div class="max-w-7xl mx-auto py-4 px-4 sm:px-6 lg:px-8">
                <a href="{{ route('event.show', ['event' => $event->id]) }}" class="flex items-center justify-center space-x-3 w-full text-yellow-900 hover:text-yellow-700 text-lg">
                    <p>{{ $event->name }}</p>
                </a>
            </div>
        </div>
    @endif
</div>
