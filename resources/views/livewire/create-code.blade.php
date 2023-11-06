<div class="flex flex-col items-center flex-1 gap-10 my-8">
    <form
        action=""
        class="rounded print:hidden"
    >
        <textarea
            name=""
            id=""
            cols="30"
            rows="10"
            class="bg-white/10"
            wire:model.live="message"
        ></textarea>
        <div class="flex justify-end mt-2">
            <button @click="window.print()" class="px-2 py-1 bg-blue-600 rounded-md">Print</button>
        </div>
    </form>

    <x-code
        :message="$message"
        :letters="$this->letters"
    ></x-code>
    <x-legend :letters="$this->letters"></x-legend>
</div>
