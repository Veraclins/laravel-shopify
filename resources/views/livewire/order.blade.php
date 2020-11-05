<div class="grid grid-cols-1 md:grid-cols-2 gap-5">
    @foreach ($orders as $order)
    <div class="bg-white shadow overflow-hidden sm:rounded-lg">
        <div class="px-4 py-5 border-b border-gray-200 sm:px-6">
            <h3 class="text-xl font-bold leading-6 font-medium text-gray-900">
                {{ $order['name'] }}
            </h3>
            <p class="mt-1 max-w-2xl text-sm leading-5 text-gray-500">
                By
                <span class="font-bold text-lg capitalize">
                    {{ $order['customer']['first_name'] }} {{ $order['customer']['last_name'] }}
                </span>
            </p>
        </div>
        <div>
            <dl>
                <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-4 sm:gap-4 sm:px-6">
                    <dt class="text-sm leading-5 font-medium text-gray-500">
                        Latest update
                    </dt>
                    <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-3">
                        {{ date("F j, Y, g:i a", strtotime($order['updated_at'])) }}
                    </dd>
                </div>
                <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-4 sm:gap-4 sm:px-6">
                    <dt class="text-sm leading-5 font-medium text-gray-500">
                        Financial Status
                    </dt>
                    <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-3">
                        {{ $order['financial_status'] }}
                    </dd>
                </div>
                <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-4 sm:gap-4 sm:px-6">
                    <dt class="text-sm leading-5 font-medium text-gray-500">
                        Line Items
                    </dt>
                    <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-3">
                        <ul>
                            @foreach ($order['line_items'] as $item)
                            <li>
                                <div class="flex justify-between py-2">
                                    <div class="font">{{ $item['name']}}</div>
                                    <div class="font-bold pl-2">${{ $item['price']}}</div>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </dd>
                </div>
                <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-4 sm:gap-4 sm:px-6">
                    <dt class="text-sm leading-5 font-medium text-gray-500">
                        Sub Total
                    </dt>
                    <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-3">
                        ${{ $order['subtotal_price'] }}
                    </dd>
                </div>
                <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-4 sm:gap-4 sm:px-6">
                    <dt class="text-sm leading-5 font-medium text-gray-500">
                        Total Price
                    </dt>
                    <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-3">
                        ${{ $order['total_price'] }}
                    </dd>
                </div>
            </dl>
        </div>
    </div>
    @endforeach
</div>
