<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>


    <div class="flex items-center justify-center min-h-screen bg-gray-100">
        <div class="w-3/5 bg-white shadow-lg">
            <div class="flex justify-between p-4">
                <div>
                    <h1 class="text-3xl italic font-extrabold tracking-widest text-indigo-500">Cabral</h1>
                </div>
                <div class="p-2">
                    <ul class="flex">
                        <li class="flex flex-col items-center p-2 border-l-2 border-indigo-200">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-blue-600" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
                            </svg>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="w-full h-0.5 bg-indigo-500"></div>
            @foreach ($orders as $order)
            <div class="flex justify-between p-4">


                <div>
                    <h6 class="font-bold">Order Date : <span class="text-sm font-medium"> {{$order->order_date}}</span></h6>
                    <h6 class="font-bold">Order ID : <span class="text-sm font-medium"> {{$order->id}}</span></h6>
                </div>
                <div class="w-40">
                    <address class="text-sm">
                        <span class="font-bold"> Billed To : </span>
                        {{$order->customer_name}}
                    </address>
                </div>
                <div></div>
            </div>
            <div class="flex justify-center p-4">
                <div class="border-b border-gray-200 shadow">
                    <table class="">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-4 py-2 text-xs text-gray-500 ">
                                    #
                                </th>
                                <th class="px-4 py-2 text-xs text-gray-500 ">
                                    Product Name
                                </th>
                                <th class="px-4 py-2 text-xs text-gray-500 ">
                                    Quantity
                                </th>
                                <th class="px-4 py-2 text-xs text-gray-500 ">
                                    Subtotal
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white">
                            @foreach ($orderMenus as $orderMenu)


                            <tr class="whitespace-nowrap">
                                <td class="px-6 py-4 text-sm text-gray-500">
                                    {{$orderMenu->id}}
                                </td>
                                <td class="px-6 py-4">
                                    <div class="text-sm text-gray-900">
                                        {{$orderMenu->menu->name}}
                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="text-sm text-gray-500">{{$orderMenu->quantity}}</div>
                                </td>

                                <td class="px-6 py-4">
                                    $30
                                </td>
                            </tr>
                            <tr class="whitespace-nowrap">
                                <td class="px-6 py-4 text-sm text-gray-500">
                                    2
                                </td>
                                <td class="px-6 py-4">
                                    <div class="text-sm text-gray-900">
                                        Amazon Brand - Symactive Men's Regular Fit T-Shirt
                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="text-sm text-gray-500">2</div>
                                </td>
                                <td class="px-6 py-4 text-sm text-gray-500">
                                    $60
                                </td>
                                <td class="px-6 py-4">
                                    $12
                                </td>
                            </tr>
                            <tr class="border-b-2 whitespace-nowrap">
                                <td class="px-6 py-4 text-sm text-gray-500">
                                    3
                                </td>
                                <td class="px-6 py-4">
                                    <div class="text-sm text-gray-900">
                                        Amazon Brand - Symactive Men's Regular Fit T-Shirt
                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="text-sm text-gray-500">1</div>
                                </td>
                                <td class="px-6 py-4 text-sm text-gray-500">
                                    $10
                                </td>
                                <td class="px-6 py-4">
                                    $13
                                </td>
                            </tr>
                            <tr class="">
                                <td colspan="3"></td>
                                <td class="text-sm font-bold">Sub Total</td>
                                <td class="text-sm font-bold tracking-wider"><b>$950</b></td>
                            </tr>
                            <!--end tr-->
                            <tr>
                                <th colspan="3"></th>
                                <td class="text-sm font-bold"><b>Tax Rate</b></td>
                                <td class="text-sm font-bold"><b>$1.50%</b></td>
                            </tr>
                            <!--end tr-->
                            <tr class="text-white bg-gray-800">
                                <th colspan="3"></th>
                                <td class="text-sm font-bold"><b>Total</b></td>
                                <td class="text-sm font-bold"><b>$999.0</b></td>
                            </tr>
                            <!--end tr-->
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="flex justify-between p-4">
                <div>
                    <h3 class="text-xl">Terms And Condition :</h3>
                    <ul class="text-xs list-disc list-inside">
                        <li>All accounts are to be paid within 7 days from receipt of invoice.</li>
                        <li>To be paid by cheque or credit card or direct payment online.</li>
                        <li>If account is not paid within 7 days the credits details supplied.</li>
                    </ul>
                </div>
                <div class="p-4">
                    <h3>Signature</h3>
                    <div class="text-4xl italic text-indigo-500">AAA</div>
                </div>
            </div>
            <div class="w-full h-0.5 bg-indigo-500"></div>

            <div class="p-4">
                <div class="flex items-center justify-center">
                    Thank you very much for doing business with us.
                </div>
                <div class="flex items-end justify-end space-x-3">
                    <button class="px-4 py-2 text-sm text-green-600 bg-green-100">Print</button>
                    <button class="px-4 py-2 text-sm text-blue-600 bg-blue-100">Save</button>
                    <button class="px-4 py-2 text-sm text-red-600 bg-red-100">Cancel</button>
                </div>
            </div>

            @endforeach
        </div>
    </div>
    <div class="flex items-center justify-center min-h-screen bg-gray-100">
        <div class="w-6/12 mt-4 text-left bg-white shadow-lg">
            <div class="flex justify-between px-8 py-6">
                <div class="flex items-center">
                    sale invoice
                </div>
                <div class="flex items-center gap-4">
                    <button class="px-2 py-1 bg-gray-200 hover:bg-gray-400">Save</button>
                    <button class="px-2 py-1 bg-gray-200 hover:bg-gray-400">Print</button>
                </div>
            </div>
            <div class="w-full h-0.5 bg-gray-800"></div>

        </div>
    </div>
</x-admin-layout>
