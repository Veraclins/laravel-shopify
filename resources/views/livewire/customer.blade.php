<div class="grid grid-cols-1 md:grid-cols-2 gap-5">
    @foreach ($customers as $customer)
    <div class="bg-white shadow overflow-hidden sm:rounded-lg">
        <div class="px-4 py-5 border-b border-gray-200 sm:px-6">
            <h3 class="text-xl font-bold leading-6 font-medium text-gray-900 capitalize">
                {{ $customer['first_name'] }} {{ $customer['last_name'] }}
            </h3>
            <p class="mt-1 max-w-2xl text-sm leading-5 text-gray-500">
                Customer since:
                <span class="font-bold">{{ date("F j, Y, g:i a", strtotime($customer['created_at'])) }}</span>
            </p>
        </div>
        <div>
            <dl>
                <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-4 sm:gap-4 sm:px-6">
                    <dt class="text-sm leading-5 font-medium text-gray-500">
                        Email address
                    </dt>
                    <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-3">
                        {{ $customer['email'] }}
                    </dd>
                </div>
                <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-4 sm:gap-4 sm:px-6">
                    <dt class="text-sm leading-5 font-medium text-gray-500">
                        Phone
                    </dt>
                    <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-3">
                        {{ $customer['phone'] ?? 'nil' }}
                    </dd>
                </div>
                <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-4 sm:gap-4 sm:px-6">
                    <dt class="text-sm leading-5 font-medium text-gray-500">
                        Last Order ID
                    </dt>
                    <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-3">
                        {{ $customer['last_order_id'] }}
                    </dd>
                </div>
                <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-4 sm:gap-4 sm:px-6">
                    <dt class="text-sm leading-5 font-medium text-gray-500">
                        Total Spent
                    </dt>
                    <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-3">
                        ${{ $customer['total_spent'] }}
                    </dd>
                </div>
            </dl>
        </div>
    </div>
    @endforeach
</div>
