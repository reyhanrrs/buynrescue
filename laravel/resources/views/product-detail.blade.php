@extends('layouts.template', ['banner' => 'products-banner.png'])

@section('title')
    Home
@endsection

@section('content')
    <main>
        <div class="card mx-2 my-5">
          @auth
              @if (auth()->user()->merchant_id == $product->merchant_id)
              
                <a href="{{ url('edit-product/'.$product->id) }}" class="text-decoration-none ">
                  <button type="submit" class="btn btn-warning w-100 text-white">
                    Edit this product
                  </button>
                </a>

              @endif
          @endauth
            <div class="card-body d-flex">
                <figure>
                    <img src={{asset("img/$product->image")}} alt="" style="width:40vw">
                </figure>

                <div class="content ml-3">
                    <div class="product-description ">
                        <h2 class="tm-gallery-title">{{ $product->name }}</h2>
                        <p class="tm-gallery-price mb-2" >Rp. 
                          <span style="text-decoration:line-through">{{ $product->price }}</span>
                          <span>{{ $product->price/2 }}</span>
                        </p>
                        <p class="tm-gallery-description">{{ $product->description }}</p>
                        <p class="tm-gallery-description">Posting at: {{ $product->updated_at ?? $product->created_at }}</p>
                        <p class="tm-gallery-description">Remain: {{ $product->total }}</p>
                    </div>

                    <a href="/chat/{{ $product->id }}">
                      <button class="btn btn-info">
                          Chat Seller
                      </button>
                    </a>

                    <div class="">
                      @if($isLove)
                        <a href="/removelove/{{ $fav->id }}" style="height:100%; text-decoration:none; font-size:2rem; color: red">
                      @else
                        <a href="/addlove/{{ $product->id }}" style="height:100%; text-decoration:none; font-size:2rem; color: #333">
                      @endif  
                        &#10084;
                      </a>
                    </div>

                    <div class="merchant-description card my-3" style="max-width: 540px;">
                        <div class="row g-0">
                          <div class="col-md-4">
                            @if(is_null($product->merchant->image))
                            <img src="https://ptetutorials.com/images/user-profile.png" class="img-fluid rounded-start" alt="...">
                            @else
                            <img src={{asset("img/" .$product->merchant->image)}} class="img-fluid rounded-start">
                            @endif
                          </div>
                          <div class="col-md-8">
                            <div class="card-body">
                              <h5 class="card-title">{{$product->merchant->name}}</h5>
                              <p class="card-text">{{$product->merchant->description}}</p>
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection