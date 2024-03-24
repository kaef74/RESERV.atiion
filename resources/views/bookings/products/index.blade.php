<x-product-layout>
    <div class="container ">
        <div class="row align-items">
            @foreach($products as $product)
                <div class="card col-4 mx-3 my-3" style="width: 18rem;">
{{--                    <img src="..." class="card-img-top" alt="...">--}}
                    <svg class="bd-placeholder-img card-img-top" width="100%" height="180" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Image cap" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"></rect></svg>
                    <div class="card-body">
                        <h5 class="card-title">{{$product->name}}</h5>
                        <p class="card-text">{{$product->description}}</p>
                        <p class="card-text">{{$product->price}} руб.</p>
                        <a href="#" class="btn btn-primary">Забронировать</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-product-layout>
