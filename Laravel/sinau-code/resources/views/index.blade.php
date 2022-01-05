@extends("layouts.default")

@section("page-content")
    <section class="relative min-h-screen flex items-center">
        <div class="container mx-auto text-center">
            <h2 class="text-4xl sm:text-8xl">Sinau <span class="text-pink-500">Code</span></h2>
            <h3 class="text-2xl sm:text-4xl italic">W Armananta</h3>
        </div>
        <div class="absolute bottom-0 left-0 right-0 p-20">
            <p class="text-center">
                Yuhh ming ngisor lurr
            </p>
        </div>
    </section>
    <section class="py-20">
        <div class="max-w-screen-md mx-auto">
            <h3 class="text-4xl font-bold md-6">Introduction</h3>
            <h4 class="text-xl mb-3 text-gray-200">Description</h4>
            <p class="mb-6">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
            </p>
            <a href="{{route('about')}}" class='bg-pink-500 text-center py-2 px-4 rounded hover:bg-purple-500 transition'>Learn more</a>
        </div>
    </section>
    <section class="py-20">
        <div class="max-w-screen-md mx-auto">
            <h3 class="text-4xl font-bold md-6">yuhuuuu</h3>
            <div class="flex flex-wrap -mx-2">
                <div class="w-full sm:w-1/2 mb-3 px-2">
                    <div class="p-4 bg-gray-500 h-full rounded-lg shadow-lg">
                        <h3 class="text-xl font-bold mb-3">Web Development</h3>
                        <p class="text-gray-200 mb-3">
                        Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.
                        </p>
                        <a href="{{url('https://www.youtube.com/watch?v=yLvjPYyE-50&t=184s&ab_channel=TylerPotts')}}" target='_blank' rel="noopener noreferrer" class='bg-pink-500 text-center py-2 px-4 rounded hover:bg-purple-500 transition mx-2 mb-3 sm:mb-0'>Tutor lurrr</a>
                    </div>
                </div>
                <div class="w-full sm:w-1/2 mb-3 px-2">
                    <div class="p-4 bg-gray-500 h-full rounded-lg shadow-lg">
                        <h3 class="text-xl font-bold mb-3">Front Web</h3>
                        <p class="text-gray-200 mb-3">
                        There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.
                        </p>
                        <a href="{{url('https://www.youtube.com/watch?v=yLvjPYyE-50&t=184s&ab_channel=TylerPotts')}}" target='_blank' rel="noopener noreferrer" class='bg-pink-500 text-center py-2 px-4 rounded hover:bg-purple-500 transition mx-2 mb-3 sm:mb-0'>Tutor lurrr</a>
                    </div>
                </div>
            </div>  
        </div>
    </section>
    <section class="py-20">
        <div class="max-w-screen-md mx-auto">
            <h3 class="text-4xl font-bold mb-6">Sinau nang ndi lurr??</h3>
            <h3 class="text-xl bm-6">Youtube lah #@$!%$!!</h3>
            <div class="-mx-2 sm:flex">
            <a href="{{url('https://www.youtube.com/watch?v=yLvjPYyE-50&t=184s&ab_channel=TylerPotts')}}" target='_blank' rel="noopener noreferrer" class='bg-pink-500 text-center py-2 px-4 rounded hover:bg-purple-500 transition mx-2 mb-3 sm:mb-0'>
                <span class="mr-2">👀</span>Learn <strong>Web</strong>Development
            </a>
            <a href="{{url('https://www.youtube.com/watch?v=yLvjPYyE-50&t=184s&ab_channel=TylerPotts')}}" target='_blank' rel="noopener noreferrer" class='bg-pink-500 text-center py-2 px-4 rounded hover:bg-purple-500 transition mx-2 mb-3 sm:mb-0'>
                <span class="mr-2">💋</span>Learn <strong>Web</strong>Development
            </a>
            </div>
        </div>
    </section>
@endsection