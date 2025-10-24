@extends('layouts.app')

@section('content')
    <x-section :class="' container-lg clearfix my-5'">
            <img src="https://placehold.co/750X500" class="col-md-5 float-md-end mb-3 ms-md-3 img-fluid" alt="...">
            
            <h1 class="mb-4">Welcome to Sneaks</h1>
            <p>
                A paragraph of placeholder text. We’re using it here to show the use of the clearfix class. We’re adding
                quite a few meaningless phrases here to demonstrate how the columns interact here with the floated image.
            </p>
            <p>
                As you can see the paragraphs gracefully wrap around the floated image. Now imagine how this would look with
                some actual content in here, rather than just this boring placeholder text that goes on and on, but actually
                conveys no tangible information at. It simply takes up space and should not really be read.
            </p>
            <p>
                And yet, here you are, still persevering in reading this placeholder text, hoping for some more insights, or
                some hidden easter egg of content. A joke, perhaps. Unfortunately, there’s none of that here.
            </p>
    </x-section>

    <x-section>
        <h2>Featured Products</h2>
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 row-cols-lx-5 g-2 g-lg-3">
                @foreach ($products as $product)
                    <div class="p-3">
                        <x-product-card :product="$product" />
                    </div>
                @endforeach
            </div>
        </div>
    </x-section>
@endsection