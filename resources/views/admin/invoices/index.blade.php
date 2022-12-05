<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>


<div class="flex flex-col">
<div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
<div class="inline-block py-2 min-w-full sm:px-6 lg:px-8">
<div class="overflow-hidden shadow-md sm:rounded-lg">
    <table class="min-w-full">
        <thead class="bg-gray-50 dark:bg-gray-700">
            <tr>
                <th scope="col"
                class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                Invoice Id
                </th>
                <th scope="col"
                    class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                    Order Id
                </th>
                <th scope="col"
                    class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                    Invoice Date
                </th>
                <th scope="col"
                    class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                    Registed By
                </th>
                <th scope="col" class="relative py-3 px-6">
                    <span class="sr-only">Edit</span>
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($invoices as $invoice)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <td
                    class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $invoice->id }}
                </td>
                    <td
                        class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $invoice->order_id }}
                    </td>
                    <td
                        class="py-4 px-6 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                        {{ $invoice->invoice_date }}
                    </td>
                    <td
                        class="py-4 px-6 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                        {{ $invoice->registered_by }}
                    </td>
                    <td class="py-4 px-6 text-sm font-medium text-right whitespace-nowrap">
                        <div class="flex space-x-2">
                            <a href="{{ route('admin.invoices.show', $invoice->id) }}"
                                class="px-4 py-2 bg-green-500 hover:bg-green-700 rounded-lg  text-white">Details</a>
                        </div>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
</div>
</div>
</div>
</div>

        </div>
    </div>
</x-admin-layout>
