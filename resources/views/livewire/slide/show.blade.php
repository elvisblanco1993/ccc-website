<div>
    <div class="relative w-full aspect-[8/6] lg:aspect-[16/9]" id="slider">
        @forelse ($slides as $slide)
            <div @class([
                "slide z-10 opacity-100" => $loop->first,
                "slide z-0 opacity-0" => !$loop->first,
                "absolute w-full aspect-[8/6] lg:aspect-[16/9] bg-no-repeat bg-cover bg-center ease-in-out transition-delay-75 duration-1000 transition-all"
            ]) style="background-image: url({{ asset($slide->bg_image) }})">
                <div class="h-full flex items-center justify-center max-w-7xl mx-auto    text-left px-4 sm:px-6 lg:px-8">
                    <div class="w-full text-left">
                        <h1 class="text-2xl md:text-5xl lg:text-6xl font-black text-[#fefefc]" style="text-shadow: 1px 1px #0f1955">{{ $slide->title }}</h1>

                        @if ($slide->content)
                            <p class="hidden md:block mt-6 text-xl font-medium text-[#fefefc]" style="text-shadow: 1px 1px #0f1955">{{ $slide->content }}</p>
                        @endif

                        @if ($slide->btn_label && $slide->btn_link)
                            <a href="{{ $slide->btn_link }}" target="_blank" class="mt-6 inline-flex text-sm font-medium uppercase text-[#fefefc] bg-ccc px-6 py-2.5 rounded-lg items-center space-x-2 group">
                                <span>{{ $slide->btn_label }}</span>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 group-hover:translate-x-1 transition-all">
                                    <path fill-rule="evenodd" d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z" clip-rule="evenodd" />
                                </svg>
                            </a>
                        @endif
                    </div>
                </div>
            </div>
        @empty

        @endforelse
    </div>
    <div class="grid grid-cols-2">
        <button id="prevBtn" class="hover:bg-slate-200 transition-all py-2">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 ml-4">
                <path stroke-linecap="round" stroke-linejoin="round" d="M11.25 9l-3 3m0 0l3 3m-3-3h7.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
        </button>
        <button id="nextBtn" class="hover:bg-slate-200 transition-all py-2">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 float-right mr-4">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12.75 15l3-3m0 0l-3-3m3 3h-7.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
        </button>
    </div>

    <script>
        let autoSlide = setInterval(function(){
            this.nextSlide(); // start autoslide
        }, 10000);

        function nextSlide(){
            let activeSlide = document.querySelector('.slide.z-10.opacity-100');
            activeSlide.classList.remove('z-10');
            activeSlide.classList.remove('opacity-100');
            activeSlide.classList.add('z-0');
            activeSlide.classList.add('opacity-0');

            let nextSlide = activeSlide.nextElementSibling;
            if (nextSlide === null) {
                nextSlide = document.querySelector('#slider').firstElementChild;
            }
            nextSlide.classList.remove('z-0');
            nextSlide.classList.remove('opacity-0');
            nextSlide.classList.add('z-10');
            nextSlide.classList.add('opacity-100');
        }

        function previousSlide(){
            let activeSlide = document.querySelector('.slide.z-10.opacity-100');
            activeSlide.classList.remove('z-10');
            activeSlide.classList.remove('opacity-100');
            activeSlide.classList.add('z-0');
            activeSlide.classList.add('opacity-0');

            let previousSlide = activeSlide.previousElementSibling;
            if (previousSlide === null) {
                previousSlide = document.querySelector('#slider').lastElementChild;
            }
            previousSlide.classList.remove('z-0');
            previousSlide.classList.remove('opacity-0');
            previousSlide.classList.add('z-10');
            previousSlide.classList.add('opacity-100');
        }

        document.getElementById('prevBtn').addEventListener('click', function() {
            clearInterval(autoSlide); // pause auto slide
            previousSlide();
        });
        document.getElementById('nextBtn').addEventListener('click', function() {
            clearInterval(autoSlide); // pause auto slide
            nextSlide();
        });
    </script>
</div>
