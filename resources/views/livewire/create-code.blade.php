<div class="flex flex-col items-center gap-10 my-8">
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

    <x-code :message="$message" :letters="$this->letters"></x-code>
    <x-legend :letters="$this->letters"></x-legend>
</div>
