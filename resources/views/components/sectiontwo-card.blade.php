<div class="flex flex-col items-center bg-whiteText rounded-lg pt-10 pb-12">
    <div class="text-center">
        <h1 class="text-black text-xl font-semibold mb-5">{{ $title }}</h1>
        <p class="text-xs text-grayText px-9">{{ $body }}</p>
    </div>
    <div class="my-10">
        <x-section-button class="bg-primary px-10 rounded-md">
            {{ $button }}
        </x-section-button>
    </div>
    <div>
        <img src="{{ $image }}" alt="Image" class="w-[228px] h-[150px]">
    </div>
</div>
