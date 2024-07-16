<x-app-layout>
    <x-slot name="header">
        <section class="relative flex w-full h-screen">
            <div class="relative flex w-full h-screen" style="opacity: 1;">
                <div class="relative w-full">
                    <img src="https://res.cloudinary.com/da583h5sr/image/upload/v1670979608/web/cover/cover_story_g3lwul.png"
                        class="object-cover w-full h-screen brightness-50">
                    <!-- Adjust brightness-50 to your desired darkness level (0-100) -->
                    <div
                        class="absolute top-0 left-0 right-0 flex flex-col items-center justify-center px-8 mt-24 bottom-20 lg:px-32">
                        <div style="opacity: 1;">
                            <p class="text-3xl tracking-wider text-center text-white uppercase lg:text-5xl font-lora">OUR
                                STORY</p>
                        </div>
                        <div style="opacity: 1;">
                            <p
                                class="mt-4 text-xs font-normal leading-relaxed tracking-wider text-center text-white font-openSans md:text-xl lg:max-w-lg">
                                Not only a ordinary homestay, but a sweet escape for your holiday in Gili, Lombok.</p>
                        </div>
                    </div>
                </div>
                <div class="absolute bottom-0 left-0 right-0 z-30">
                    <div class="flex flex-col items-center justify-center">
                        <p class="text-sm tracking-widest text-white font-lora">SCROLL TO DISCOVER</p>
                        <div class="w-0.5 h-16 lg:h-24 mt-4">
                            <div style="height: 100%;">
                                <div class="w-0.5 bg-white h-full"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </x-slot>


    <section class="flex flex-col bg-white section-p lg:py-20">
        <div class="relative isolate">
            <div class="absolute inset-x-0 overflow-hidden -top-40 -z-10 transform-gpu blur-3xl sm:-top-80"
                aria-hidden="true">
                <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]"
                    style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
                </div>
            </div>
            <div class="flex flex-col items-center justify-center w-full" style="font-family: 'Lora', serif;">
                <div class="flex flex-col lg:w-2/4">
                    <div class="flex flex-col">
                        <div style="opacity: 1;">
                            <h3 class="p-5 text-xl leading-relaxed text-center md:text-3xl text-slate-950">Lisa Homestay
                                is a modern property with beautiful village views in the rural village of Canggu, just
                                10-minutes drive to Canggu's cultural heartland. It is attuned to the surrounding
                                environment through a thoughtful design that respects modern artistry and cultural
                                heritage.</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]"
                aria-hidden="true">
                <div class="relative left-[calc(50%+3rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%+36rem)] sm:w-[72.1875rem]"
                    style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
                </div>
            </div>
        </div>
    </section>

    <section class="p-8 px-6 bg-gradient-to-r from-slate-900 to-slate-950 lg:p-16 lg:px-32">
        <!-- START THE FEATURETTES -->
        <div class="flex flex-col items-center py-8 md:flex-row lg:gap-10 lg:py-12">
            <div class="md:w-7/12">
                <h2 class="mb-4 text-3xl font-bold text-white">First featurette heading. <span
                        class="text-gray-500">It’ll blow your mind.</span></h2>
                <p class="text-lg leading-7 text-white">Some great placeholder content for the first featurette here.
                    Imagine some exciting prose here.</p>
            </div>
            <div class="mt-6 md:w-5/12 md:mt-0">
                <div class="bg-gray-300 aspect-w-1 aspect-h-1">
                    <!-- Your image goes here -->
                    <img class="object-cover" src="https://source.unsplash.com/1280x720?hotel" alt="Feature Image">
                </div>
            </div>
        </div>

        {{-- <div class="w-full my-8 border-t border-black"></div> --}}


        <div class="flex flex-col items-center py-8 md:flex-row-reverse lg:gap-10 lg:py-12">
            <div class="md:w-7/12">
                <h2 class="mb-4 text-3xl font-bold text-white">Oh yeah, it’s that good. <span class="text-gray-500">See
                        for yourself.</span></h2>
                <p class="text-lg leading-7 text-white">Another featurette? Of course. More placeholder content here to
                    give you an idea of how this layout would work with some actual real-world content in place.</p>
            </div>
            <div class="mt-6 md:w-5/12 md:mt-0">
                <div class="bg-gray-300 aspect-w-1 aspect-h-1">
                    <!-- Your image goes here -->
                    <img class="object-cover" src="https://source.unsplash.com/1280x720?hotel" alt="Feature Image">
                </div>
            </div>
        </div>

        {{-- <hr class="my-8 border-t"> --}}

        <div class="flex flex-col items-center py-8 md:flex-row lg:gap-10 lg:py-12">
            <div class="md:w-7/12">
                <h2 class="mb-4 text-3xl font-bold text-white">And lastly, this one. <span
                        class="text-gray-500">Checkmate.</span></h2>
                <p class="text-lg leading-7 text-white">And yes, this is the last block of representative placeholder
                    content. Again, not really intended to be actually read, simply here to give you a better view of
                    what this would look like with some actual content. Your content.</p>
            </div>
            <div class="mt-6 md:w-5/12 md:mt-0">
                <div class="bg-gray-300 aspect-w-1 aspect-h-1">
                    <!-- Your image goes here -->
                    <img class="object-cover" src="https://source.unsplash.com/1280x720?hotel" alt="Feature Image">
                </div>
            </div>
        </div>
        <!-- /END THE FEATURETTES -->
    </section>
</x-app-layout>
