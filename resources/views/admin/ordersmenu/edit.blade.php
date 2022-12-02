<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="flex m-2 p-2">
            <a href="{{ route('admin.ordersmenu.index') }}"
                class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white">Orders products Index</a>
        </div>

<div class="m-2 p-2 bg-slate-100 rounded">
<div class="space-y-8 divide-y divide-gray-200 w-1/2 mt-10">
    <form method="POST" action="{{ route('admin.ordersmenu.update', $ordersmenu->id) }}">
        @csrf
        @method('PUT')
        <div class="sm:col-span-6 pt-5">
            <label for="order_id" class="block text-sm font-medium text-gray-700">Order</label>
            <div class="mt-1">
                <select id="order_id" name="order_id" class="form-multiselect block w-full mt-1">
                    @foreach ($orders as $order)
                        <option value="{{ $order->id }}">{{ $order->customer_name }}
                            ({{ $order->customer_name }})
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="sm:col-span-6 pt-5">
                <label for="menu_id" class="block text-sm font-medium text-gray-700">Menu</label>
                <div class="mt-1">
                    <select id="menu_id" name="menu_id" class="form-multiselect block w-full mt-1">
                        @foreach ($menus as $menu)
                            <option value="{{ $menu->id }}">{{ $menu->name }}
                                ({{ $menu->name }})
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
        {{-- <div class="sm:col-span-6">
            <label for="price" class="block text-sm font-medium text-gray-700"> Price </label>
            <div class="mt-1">
                <input type="number" min="0.00" max="10000.00" step="0.01" id="price" name="price"
                    class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
            </div>
            @error('price')
                <div class="text-sm text-red-400">{{ $message }}</div>
            @enderror
        </div> --}}
        <div class="sm:col-span-6">
            <label for="quantity" class="block text-sm font-medium text-gray-700"> Available Quantity
            </label>
            <div class="mt-1">
                <input type="number" id="quantity" name="quantity"
                    class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
            </div>
            @error('quantity')
                <div class="text-sm text-red-400">{{ $message }}</div>
            @enderror
        </div>
        <div class="mt-6 p-4">
            <button type="submit"
                class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white">Store</button>
        </div>
    </form>
</div>
</div>

        </div>
    </div>
</x-admin-layout>
