<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Notes') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto  sm:px-6 lg:px-8">
            <div class="my-6 p-6 bg-white border-b border-grey-200 shadow-sm sm:rounded-lg">

                {{-- @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach --}}

                <form action="{{ route('notes.store') }}" method="post">
                    @csrf
                    <x-input type="text" name="title" field="title" placeholder="Tile" class="w-full "
                        autocomplete="off " :value="@old('title')"></x-input>


                    <x-textarea type="text" name="text" field="text" rows="10"
                        placeholder="Start typing here...." :value="@old('text')" class="mt-6 w-full">
                    </x-textarea>


                    <x-primary-button class="mt-6 bg-dark">Save Note</x-primary-button>
                </form>
            </div>
        </div>
</x-app-layout>
