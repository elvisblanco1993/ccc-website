<div>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Articles') }}
            </h2>
            <a href="{{ route('admin.article.create') }}"
                class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition"
            >New article</a>
        </div>
    </x-slot>

    <div class="my-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left text-gray-500">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                        <tr>
                            <th scope="col" class="py-3 px-6">{{ __("Date") }}</th>
                            <th scope="col" class="py-3 px-6">{{ __("article name") }}</th>
                            <th scope="col" class="py-3 px-6">{{ __("Showing on banner") }}</th>
                            <th scope="col" class="py-3 px-6">
                                <span class="sr-only">Edit</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($articles as $article)
                            <tr class="bg-white border-b hover:bg-gray-50">
                                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap">
                                    {{ Carbon\Carbon::parse($article->date)->format('M d, Y \a\t H:i a') }}
                                </th>
                                <td class="py-4 px-6">
                                    {{ $article->name }}
                                </td>
                                <td class="py-4 px-6">
                                    @if (Carbon\Carbon::now()->gte($article->display_alert_from) && Carbon\Carbon::now()->lte($article->display_alert_to))
                                        <span class="text-xs border border-green-200 rounded uppercase px-3 py-1 bg-green-100 text-green-600">Yes</span>
                                    @else
                                        <span class="text-xs border border-slate-200 rounded uppercase px-3 py-1 bg-slate-100 text-slate-600">No</span>
                                    @endif
                                </td>
                                <td class="py-4 px-6 flex items-center justify-end space-x-3">
                                    @livewire('article.edit', ['article' => $article], key('edit-'.$article->id))
                                    @livewire('article.delete', ['article' => $article], key('delete-'.$article->id))
                                </td>
                            </tr>
                        @empty
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
