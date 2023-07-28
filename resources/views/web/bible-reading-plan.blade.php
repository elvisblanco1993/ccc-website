@extends('layouts.web')
@section('content')
    <header class="py-12 overflow-hidden">
        <div class="bg-gradient-to-tr from-slate-100 to-indigo-50 max-w-7xl mx-auto p-4 sm:p-6 lg:p-8 md:rounded-xl">
            <h1 class="roboto-slab text-center font-bold text-3xl md:text-4xl capitalize">Bible Reading Plan</h1>

            <div class="mt-6 grid grid-cols-3 gap-4 items-center md:text-center">
                <div class="col-span-3 sm:col-span-1">
                    <a href="https://www.biblegateway.com/resources/audio/" target="_blank" class="inline-flex items-start items-center space-x-3 hover:text-ccc">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="h-8 w-8" viewBox="0 0 16 16">
                            <path d="M8 3a5 5 0 0 0-5 5v1h1a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V8a6 6 0 1 1 12 0v5a1 1 0 0 1-1 1h-1a1 1 0 0 1-1-1v-3a1 1 0 0 1 1-1h1V8a5 5 0 0 0-5-5z"/>
                        </svg>
                        <span>Listen to the Bible</span>
                    </a>
                </div>
                <div class="col-span-3 sm:col-span-1">
                    <form action="https://www.biblegateway.com/quicksearch/" target="_blank">
                        <input type="search" name="quicksearch" placeholder="Search biblegateway.com"
                            class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm block w-full"
                        >
                    </form>
                </div>
                <div class="col-span-3 sm:col-span-1">
                    <a href="https://www.ligonier.org/blog/get-basic-overview-bible/" target="_blank" class="inline-flex items-start items-center space-x-3 hover:text-ccc">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="h-8 w-8" viewBox="0 0 16 16">
                            <path d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811V2.828zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z"/>
                        </svg>
                        <span>Get a basic overview of the Bible</span>
                    </a>
                </div>
            </div>
        </div>
    </header>

    @if ($plan)
        <section class="max-w-7xl mx-auto p-4 sm:p-0">
            <embed src="{{ asset($plan->url) }}" type="application/pdf" class="w-full" width="100%" height="700px"/>
        </section>
    @endif
@endsection
