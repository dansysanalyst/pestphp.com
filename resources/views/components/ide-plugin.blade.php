<div class="rounded-lg shadow border-gray-300 transition duration-200 ease-in-out px-8 py-6 sm:bg-black/90 sm:dark:bg-black/50">
    <div class="flex flex-col lg:flex-row space-y-4 items-center lg:space-y-0">
        <div class="flex items-center justify-center bg-white rounded-full lg:shadow-dome p-10">
            <div class="h-20 w-20 lg:h-16 lg:w-16 flex justify-center items-center">
                <img class="w-full h-full object-center object-contain" src="{{ $logo }}" alt="{{ $title }} logo"/>
            </div>
        </div>
        <div class="flex flex-col justify-center items-center sm:items-start lg:ml-8">
            <a class="text-xl" target="_blank" rel="noopener" href="{{ $url }}">{{ $title }}</a>
            <span class="italic text-center sm:text-left text-xs sm:text-sm text-gray-400">{{ $github }}</span>
        </div>
        <div class="flex justify-center lg:flex-row flex-grow items-center lg:justify-end lg:ml-16">
            @if(isset($installs))
                <x-i.download class="h-6 text-green-500 mr-2"></x-i.download> {{ $installs }} downloads
            @endif
        </div>
    </div>
</div>
