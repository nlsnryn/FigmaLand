<!-- 1st --->
<div class="flex flex-col items-center">
    <div class="flex items-center space-x-2 -ml-10 pb-2">
        <div>
            <img src="{{ $image }}" alt="Single" class="">
        </div>
        <div class="max-w-[110px]">
            <h1 class="text-sm text-whiteText">{{ $title }}</h1>

        </div>
    </div>
    <div class="max-w-[180px] w-full">
        <p class="text-start text-xs text-whiteText">{{ $body }}</p>
    </div>
</div>
