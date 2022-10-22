<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Show employee') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="mt-5">
                        <x-label for="name" :value="__('Name')" />

                        <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="$employee->name"
                            disabled />
                    </div>

                    <div class="mt-5">
                        <x-label for="email" :value="__('Email')" />

                        <x-input id="email" class="block mt-1 w-full" type="email" name="email"
                            :value="$employee->email" disabled />
                    </div>

                    <div class="mt-5">
                        <x-label for="phone" :value="__('Phone')" />

                        <x-input id="phone" class="block mt-1 w-full" type="number" name="phone"
                            :value="$employee->phone" disabled />
                    </div>

                    <div class="mt-5">
                        <x-label for="id_number" :value="__('Id Number')" />

                        <x-input id="id_number" class="block mt-1 w-full" type="number" name="id_number"
                            :value="$employee->id_number" disabled />
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
