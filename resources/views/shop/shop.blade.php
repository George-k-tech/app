<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight flex justify-center">
            {{ __('G-commerce') }}
        </h2>
    </x-slot>

    @role('admin')
        <div>
            <a href="{{ route('product.index') }}"> Products</a>
        </div>
    @endrole

    
</x-app-layout>
