<div>
    <form wire:submit="encrypt">
        <div class="col-span-full">
            <label for="about" class="block text-sm font-medium leading-6 text-gray-400">About</label>
            <div class="mt-2">
                <textarea id="about" name="about" rows="3" wire:model.live="word"
                    class="block w-full rounded-md border-0 py-1.5 text-white-300 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
            </div>
            <p class="mt-3 text-sm leading-6 text-gray-600">Write a few sentences about yourself.</p>
        </div>
        <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Encrypt</button>
        <button wire:click="decrypted" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Encrypt</button>
    </form>


    
    <div class="flex flex-row flex-wrap w-64">
        <div class="flex flex-wrap text-sm font-medium leading-6 text-gray-400">
            <p>{{ $encryptedWord }}</p>
        </div>
    </div>
    <div class="flex flex-row flex-wrap w-64">
        <div class="flex flex-wrap text-sm font-medium leading-6 text-gray-400">
            <p>{{ $decryotedWord }}</p>
        </div>
    </div>
</div>
