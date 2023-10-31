<div class="flex justify-center px-3 py-2 mt-8 rounded">
    <form action="">
        <textarea
            name=""
            id=""
            cols="30"
            rows="10"
            class="bg-white/10"
            wire:model.live="message"
        ></textarea>
    </form>

    <p>
        {{ $message }}
    </p>
</div>
