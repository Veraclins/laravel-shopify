<div>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
        @foreach ($products as $product)
        <div class="bg-white shadow overflow-hidden sm:rounded-lg">
            <div class="px-4 py-5 bproduct-b bproduct-gray-200 sm:px-6">
                <div class="flex items-center">
                    <img class="h-full w-1/3 object-cover" src="{{ $product['image']['src']}}"
                        alt="{{ $product['image']['alt']}}">
                    <h3 class="text-xl font-bold leading-6 font-medium text-gray-900 ml-2">
                        {{ $product['title'] }}
                    </h3>
                </div>
                <p class="mt-1 max-w-2xl text-sm leading-5 text-gray-500">
                    Added
                    <span class="font-bold">
                        {{ date("F j, Y, g:i a", strtotime($product['created_at'])) }}
                    </span>
                    by
                    <span class="font-bold capitalize">
                        {{ $product['vendor'] }}
                    </span>
                </p>
            </div>
            <div>
                <dl>
                    <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm leading-5 font-medium text-gray-500">
                            Variants
                        </dt>
                        <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                            <ul>
                                @foreach ($product['variants'] as $item)
                                <li>
                                    <div class="flex justify-between py-2">
                                        <div class="font">{{ $item['title']}}</div>
                                        <div class="font-bold pl-2">${{ $item['price']}}</div>
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                        </dd>
                    </div>
                    <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm leading-5 font-medium text-gray-500">
                            Images
                        </dt>
                        <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                            <div class="grid grid-cols-4 gap-2">
                                @foreach ($product['images'] as $image)
                                <img class="h-16 w-full object-cover" src="{{ $image['src']}}" alt="{{ $image['alt']}}">
                                @endforeach
                            </div>
                        </dd>
                    </div>
                </dl>
            </div>
        </div>
        @endforeach
    </div>

</div>
