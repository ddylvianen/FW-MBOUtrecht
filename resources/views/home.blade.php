    <x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    
                    <div class="md:flex md:flex-row-reverse items-start">
                        <div class="md:w-2/5 md:pl-8 mb-4 md:mb-0">
                            <img src="https://placehold.co/750x500" class="max-w-full h-auto rounded-lg shadow-md" alt="...">
                        </div>
                        <div class="md:w-3/5">
                            <h1 class="text-3xl font-bold mb-4">Welcome to Sneaks</h1>
                            <p class="mb-4">
                                A paragraph of placeholder text. We’re using it here to show the use of modern CSS. We’re adding
                                quite a few meaningless phrases here to demonstrate how the layout works.
                            </p>
                            <p class="mb-4">
                                As you can see the paragraphs gracefully wrap around the floated image. Now imagine how this would look with
                                some actual content in here, rather than just this boring placeholder text that goes on and on, but actually
                                conveys no tangible information at. It simply takes up space and should not really be read.
                            </p>
                            <p>
                                And yet, here you are, still persevering in reading this placeholder text, hoping for some more insights, or
                                some hidden easter egg of content. A joke, perhaps. Unfortunately, there’s none of that here.
                            </p>
                        </div>
                    </div>

                    <div class="mt-12">
                        <h2 class="text-2xl font-bold mb-6">Featured Products</h2>
                        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                            @foreach ($products as $product)
                                <div class="p-3">
                                    <x-product-card :product="$product" />
                                </div>
                            @endforeach
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>