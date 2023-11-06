<div class="flex flex-col items-center flex-1 gap-10 my-8">
    <form
        action=""
        class="w-full print:hidden"
    >
        <textarea
            name=""
            id=""
            cols="30"
            rows="10"
            class="w-full px-3 py-2 bg-white/10 rounded-xl"
            wire:model.live="message"
        ></textarea>
        <div class="flex justify-end mt-2">
            <button
                type="button"
                @click="window.print()"
                @disabled(!$message)
                class="px-4 py-1 text-sm font-semibold bg-blue-600 rounded-md disabled:bg-gray-300"
            >Print</button>
        </div>
    </form>

    <x-code
        :message="$message"
        :letters="$this->letters"
    ></x-code>

    @if ($message)
        <x-legend :letters="$this->letters"></x-legend>
    @endif
</div>
