<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<title>Shopping Cart</title>
</head>

<body>
	<div class="container">
		<section class="h-100 h-custom" style="background-color: #d2c9ff;">
			<div class="container py-5 h-100">
				<div class="row d-flex justify-content-center align-items-center h-100">
					<div class="col-12">
						<div class="card card-registration card-registration-2" style="border-radius: 15px;">
							<div class="card-body p-0">
								<div class="row g-0">
									<div class="col-lg-8">
										<div class="p-5">
											@foreach($cart->items as $item)
											{{$total = 0}}
											{{$total += $item->products->price * $item->quantity}}
											{{$sum = 0}}
											{{$sum++}}
											@endforeach
											<div class="d-flex justify-content-between align-items-center mb-5">
												<h1 class="fw-bold mb-0">Shopping Cart</h1>
												<h6 class="mb-0 text-muted">{{$sum}} items</h6>
											</div>
											<!-- SẢN PHẨM-->
											<hr class="my-4">
											@foreach($cart->items as $item)
											<div class="row mb-4 d-flex justify-content-between align-items-center">
												<div class="col-md-2 col-lg-2 col-xl-2">
													<img src="{{$item->products->image}}" class="img-fluid rounded-3" alt="Cotton T-shirt">
												</div>
												<div class="col-md-3 col-lg-3 col-xl-3">
													<h6 class="text-muted">{{$item->products->name}}</h6>
												</div>
												<div class="col-md-3 col-lg-3 col-xl-2 d-flex">
													<button data-mdb-button-init data-mdb-ripple-init class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
														<i class="fas fa-minus"></i>
													</button>

													<input id="form1" min="0" name="quantity" value="{{$item->quantity}}" type="number" class="form-control form-control-sm" />

													<button data-mdb-button-init data-mdb-ripple-init class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
														<i class="fas fa-plus"></i>
													</button>
												</div>
												<div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
													<h6 class="mb-0">{{$item->products->price}}</h6>
												</div>
												<div class="col-md-1 col-lg-1 col-xl-1 text-end">
													<a href="#!" class="text-muted"><i class="fas fa-times"></i></a>
												</div>
											</div>
											@endforeach
											<!--KẾT THÚC SHOW SẢN PHẨM-->

											<hr class="my-4">

											<div class="pt-5">
												<h6 class="mb-0"><a href="{{route('home')}}" class="text-body"><i class="fas fa-long-arrow-alt-left me-2"></i>Back to shop</a></h6>
											</div>
										</div>
									</div>
									<div class="col-lg-4 bg-body-tertiary">
										<div class="p-5">
											<h3 class="fw-bold mb-5 mt-2 pt-1">Summary</h3>
											<hr class="my-4">

											<div class="d-flex justify-content-between mb-4">
												<!--SỐ LƯỢNGK SẢN PHẨM-->
												<h5 class="text-uppercase">items 3</h5>
												<!--TỔNG TIỀN TẠM TÍNH-->
												<h5>€ 132.00</h5>
											</div>


											<!--MÃ GIẢM GIÁ-->
											<h5 class="text-uppercase mb-3">Give code</h5>

											<div class="mb-5">
												<div data-mdb-input-init class="form-outline">
													<input type="text" id="form3Examplea2" class="form-control form-control-lg" />
													<label class="form-label" for="form3Examplea2">Enter your code</label>
												</div>
											</div>

											<hr class="my-4">

											<div class="d-flex justify-content-between mb-5">
												<h5 class="text-uppercase">Total price</h5>
												<!--TỔNG TIỀN CUỐI CÙNG-->
												<h5>{{$total}} VND</h5>
											</div>

											<button type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-dark btn-block btn-lg" data-mdb-ripple-color="dark">BUY NOW</button>

										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

	</div>
</body>

</html>