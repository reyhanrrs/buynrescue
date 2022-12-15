@extends('layouts.template')

@section('title')
    Your Favorites
@endsection

@section('content')
	<main>
		<header class="row tm-welcome-section">
			<h2 class="col-12 text-center tm-section-title">Your Favorites</h2>
 			</header>

		<!-- Gallery -->
		<div class="row tm-gallery">
			<!-- gallery page 1 -->
			<div id="tm-gallery-page-pizza" class="tm-gallery-page">

				@foreach ($favorites as $favorite)
					<article class="col-lg-12 tm-gallery-item">
						<figure>
							<img src={{asset("img/" .$favorite->product->image)}}  alt="Image" class="img-fluid tm-gallery-img" />
							<figcaption>
								<h4 class="tm-gallery-title">
									<a href={{ url("/detail-product/" .$favorite->product->id); }}>
										{{$favorite->product->name}}
									</a>
								</h4>
								<p class="tm-gallery-description">{{$favorite->product->description}}</p>

								<p class="tm-gallery-price">
                                Rp.
                                <span style="text-decoration:line-through">{{ $favorite->product->price }}</span>
                                <span>{{ $favorite->product->price/2 }}</span>
                                </p>
							</figcaption>
						</figure>
					</article>
				@endforeach		
			</div> <!-- gallery page 3 -->
		</div>
	</main>
@endsection

	

		