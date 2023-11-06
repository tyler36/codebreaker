@props(['message', 'letters'])

<div class="flex flex-wrap justify-center mt-auto gap-7">
    @foreach (explode(' ', $message) as $word)
        <div class="flex word gap-x-2">
            @foreach (str_split($word) as $character)
                <div>
                    <span
                        class="material-symbols-outlined character !text-4xl">{{ $letters[strtolower($character)] ?? $character }}
                    </span>
                    <div class="w-12 h-12 bg-gray-200 print:bg-black"></div>
                </div>
            @endforeach
        </div>
    @endforeach
</div>
