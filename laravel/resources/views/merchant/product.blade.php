@extends('layouts.template')

@section('title')
    Manage Product
@endsection

@section('content')
	<main>
		<!--<h2 class="col-12 my-5 text-center tm-section-title">Your Profile</h2>-->
		<!--<form class="mt-5 col-8 m-auto" action="{{ route('merchant')}}" method="POST">-->
		<!--	@method('PUT')-->
  <!--          @csrf-->
  <!--          <div class="mb-3">-->
  <!--              <label class="form-label">Merchant Name</label>-->
  <!--              <div class="col-sm-10">-->
  <!--                  <input type="text" class="form-control" name="name" value="{{ old($merchant->name, 'Default') }}" placeholder="name">-->
  <!--              </div>-->
  <!--          </div>-->
  <!--          <div class="mb-3">-->
  <!--              <label class="form-label">Description</label>-->
  <!--              <div class="col-sm-10">-->
  <!--                  <input type="text" class="form-control" name="description" value="{{ old($merchant->description, 'Default') }}" placeholder="description">-->
  <!--              </div>-->
  <!--          </div>-->
  <!--          <div class="mb-3">-->
  <!--              <label class="form-label">Address</label>-->
  <!--              <div class="col-sm-10">-->
  <!--                  <input type="text" class="form-control" name="address" value="{{ old($merchant->address, 'Default') }}" placeholder="address">-->
  <!--              </div>-->
  <!--          </div>-->
  <!--          <button type="submit" class="btn btn-primary">Join</button>-->
  <!--      </form>-->

		<h2 class="col-12 my-5 text-center tm-section-title">Your Products</h2>
		<div class="row tm-gallery">
			<!-- gallery page 1 -->
			<div id="tm-gallery-page-pizza" class="tm-gallery-page">

				@foreach ($products as $product)
					<article class="mx-3">
						<figure>
							<img src={{asset("img/$product->image")}}  alt="Image" class="img-fluid tm-gallery-img" />
							<figcaption>
								<h4 class="tm-gallery-title">
									<a href={{ url("/edit-product/$product->id"); }}>
										{{$product->name}}
									</a>
								</h4>
								<p class="tm-gallery-description">{{$product->description}}</p>
								<p class="tm-gallery-price">Rp.{{$product->price}}</p>
							</figcaption>
						</figure>
					</article>
				@endforeach		
				
				<article class="fs-1 border border-primary col-12 tm-gallery-item">
					<a href="/add-product" class="text-center d-flex justify-content-center align-items-center" style="width: 100%; height:100%; text-decoration: none">
					+ Add Product
					</a>
				</article>
			</div> <!-- gallery page 3 -->
		</div>
	</main>
@endsection

	

		