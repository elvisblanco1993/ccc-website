<header class="w-full">
    @if (\App\Models\Slide::where('is_enabled', 1)->count() > 0)
        @livewire('slide.show')
    @endif
</header>
