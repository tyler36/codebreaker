<div class="flex flex-col items-center mt-8">
    <form
        action=""
        class="rounded"
    >
        <textarea
            name=""
            id=""
            cols="30"
            rows="10"
            class="bg-white/10"
            wire:model.live="message"
        ></textarea>
    </form>

    <div class="flex justify-center mt-8 gap-7">
        @foreach (explode(' ', $message) as $word)
            <div class="word">
                @foreach (str_split($word) as $character)
                    <span
                        class="material-symbols-outlined character">{{ $this->letters[strtolower($character)] ?? $character }}</span>
                @endforeach
            </div>
        @endforeach
    </div>
</div>
