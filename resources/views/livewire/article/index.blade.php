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
                            <th scope="col" class="py-3 px-6">{{ __("Article title") }}</th>
                            <th scope="col" class="py-3 px-6">{{ __("Status") }}</th>
                            <th scope="col" class="py-3 px-6">
                                <span class="sr-only">Edit</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($articles as $article)
                            <tr class="bg-white border-b hover:bg-gray-50">
                                <td class="py-4 px-6">
                                    <p>{{ $article->title }}</p>
                                    <span>{{ route('article.show', ['slug' => $article->slug]) }}</span>
                                </td>
                                <td class="py-4 px-6">
                                    @if ($article->published_at)
                                        <span class="text-xs border border-green-200 rounded uppercase px-3 py-1 bg-green-100 text-green-600">
                                            {{ Carbon\Carbon::parse($article->published_at)->format('M d, Y') }}
                                        </span>
                                    @else
                                        <span class="text-xs font-semibold border border-slate-200 rounded uppercase px-3 py-1 bg-slate-100 text-slate-600">Draft</span>
                                    @endif
                                </td>
                                <td class="py-4 px-6 flex items-center justify-end space-x-3">
                                    @if (!$article->trashed())
                                        <a href="{{ route('admin.article.edit', ['article' => $article->id]) }}" class="py-4 font-medium text-blue-600 dark:text-blue-500 hover:underline">{{ __("Edit") }}</a>
                                    @endif
                                    @livewire('article.delete', ['article' => $article], key('del-'.$article->id))
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
