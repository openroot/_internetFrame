<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
		<meta name="generator" content="Hugo 0.84.0">
		<title>Bootstrap Template · Bootstrap v5.0</title>

		<!-- Bootstrap core CSS -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<!-- Custom styles for this template -->
		<link href="css/custom.css" rel="stylesheet">
	</head>
	<body class="py-4">
		<header>
			<!-- Fixed-navbar 1 -->
			<div id="navbar-top-e"></div>
			<nav class="navbar fixed-top navbar-expand-md navbar-light background-light">
				<div class="container-fluid">
					<a class="navbar-brand" href="#">Top navbar</a>
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar_collapse_1"><span class="navbar-toggler-icon"></span></button>
					<div class="collapse navbar-collapse" id="navbar_collapse_1">
						<ul class="navbar-nav me-auto mb-2 mb-md-0">
							<!-- Toplevel Menu -->
							<li class="nav-item"><a class="nav-link active bg-dark foreground-light" href="#">Home</a></li>
							<li class="nav-item"><a class="nav-link" href="#">Link</a></li>
		
							<!-- Treeview Dropdown Menu -->
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Treeview menu down</a>
								<ul class="dropdown-menu">
									<li><a class="dropdown-item" href="#">Menu item 1</a></li>
									<li><a class="dropdown-item" href="#">Menu item 2 &raquo;</a>
										<ul class="submenu dropdown-menu">
											<li><a class="dropdown-item" href="#">Menu item 2.1</a></li>
											<li><a class="dropdown-item" href="#">Menu item 2.2</a></li>
											<li><a class="dropdown-item" href="#">Menu item 2.3 &raquo;</a>
												<ul class="submenu dropdown-menu">
													<li><a class="dropdown-item" href="#">Menu item 2.3.1</a></li>
													<li><a class="dropdown-item" href="#">Menu item 2.3.2 &raquo;</a>
														<ul class="submenu dropdown-menu">
															<li><a class="dropdown-item" href="#">Menu item 2.3.2.1</a></li>
															<li><a class="dropdown-item" href="#">Menu item 2.3.2.2</a></li>
															<li><a class="dropdown-item" href="#">Menu item 2.3.2.3 &raquo;</a>
																<ul class="submenu dropdown-menu">
																	<li><a class="dropdown-item" href="#">Menu item 2.3.2.3.1</a></li>
																	<li><a class="dropdown-item" href="#">Menu item 2.3.2.3.2</a></li>
																</ul>
															</li>
															<li><a class="dropdown-item active bg-dark foreground-light" href="#">Menu item 2.3.2.4</a></li>
															<li><a class="dropdown-item" href="#">Menu item 2.3.2.5</a></li>
														</ul>
													</li>
												</ul>
											</li>
											<li><a class="dropdown-item active bg-dark foreground-light" href="#">Menu item 2.4</a></li>
											<li><a class="dropdown-item" href="#">Menu item 2.5</a></li>
										</ul>
									</li>
									<li><a class="dropdown-item active bg-dark foreground-light" href="#">Menu item 3</a></li>
									<li><a class="dropdown-item disabled" href="#" tabindex="-1">Menu item 4</a></li>
									<li><hr class="dropdown-divider"></li>
									<li><a class="dropdown-item" href="#">Something else here</a>
								</ul>
							</li>
						</ul>
						<div class="d-flex">
							<div>
								<!-- Search control -->
								<form class="me-2 d-flex">
									<input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
									<button class="btn btn-outline-dark" type="submit">Search</button>
								</form>
							</div>
							<div>
								<!-- Dropstart button -->
								<div class="dropstart">
									<button class="btn btn-dark dropdown-toggle foreground-light" type="button" id="dropstart_menu_button_1" data-bs-toggle="dropdown">Dropstart button</button>
									<ul class="dropdown-menu background-light">
										<li><h6 class="dropdown-header">Dropdown header</h6></li>
										<li><a class="dropdown-item" href="#">Action</a></li>
										<li><a class="dropdown-item" href="#">Another action</a></li>
										<li><a class="dropdown-item" href="#">Something else here</a></li>
										<li><hr class="dropdown-divider"></li>
										<li><a class="dropdown-item" href="#">Separated link</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</nav>
		</header>

		<!-- Begin page content -->
		<main>
			<div class="container-fluid">

				<!-- Jumbotron 1 -->
				<div class="p-5 bg-light background-light rounded-3">
					<div class="container-fluid py-5">
						<h1 class="display-5 fw-bold">Custom jumbotron</h1>
						<p class="col-md-8 fs-4">Using a series of utilities, you can create this jumbotron, just like the
							one in
							previous versions of Bootstrap. Check out the examples below for how you can remix and restyle
							it to your
							liking.</p>
						<button class="btn btn-danger btn-lg" type="button">Example button</button>
					</div>
				</div>
				<!-- end -->

				<!-- Jumbotron 2 -->
				<div class="p-5 mt-5 bg-light background-light rounded">
					<h1>Navbar example</h1>
					<p class="lead">This example is a quick exercise to illustrate how fixed to top navbar works. As you
						scroll, it
						will remain fixed to the top of your browser’s viewport.</p>
					<a class="btn btn-lg btn-danger" href="../components/navbar/" role="button">View navbar docs »</a>
				</div>
				<!-- end -->

				<!-- Jumbotron 3 -->
				<div class="mt-5 row align-items-md-stretch">
					<div class="col-md-6">
						<!-- Jumbotron 3 -->
						<div class="h-100 p-5 text-white bg-dark rounded-3">
							<h2>Change the background</h2>
							<p>Swap the background-color utility and add a `.text-*` color utility to mix up the jumbotron
								look. Then,
								mix and match with additional component themes and more.</p>
							<button class="btn btn-outline-danger" type="button">Example button</button>
						</div>
					</div>
					<div class="col-md-6">
						<!-- Jumbotron 3 -->
						<div class="h-100 p-5 bg-light background-light border rounded-3">
							<h2>Add borders</h2>
							<p>Or, keep it light and add a border for some added definition to the boundaries of your
								content. Be sure
								to look under the hood at the source HTML here as we've adjusted the alignment and sizing of
								both column's
								content for equal-height.</p>
							<button class="btn btn-outline-danger" type="button">Example button</button>
						</div>
					</div>
				</div>
				<!-- end -->

				<!-- Header 1 -->
				<h1 class="mt-5">Sticky footer with fixed navbar</h1>
				<!-- Paragraph 1 -->
				<p class="lead">Pin a footer to the bottom of the viewport in desktop browsers with this custom HTML and
					CSS. A
					fixed navbar has been added with 
					<!-- Code 1 -->
					<code class="small">padding-top: 60px;</code>
					on the 
					<!-- Code 1 -->
					<code class="small">main &gt; .container</code>.
				</p>
				<!-- Paragraph 2 -->
				<p>Back to <a href="../examples/sticky-footer/">the default sticky footer</a> minus the navbar.</p>
				<!-- end -->

				<!-- Checkout form -->
				<div class=" mt-5 container">
				<div class="py-5 text-center">
					<img class="d-block mx-auto mb-4" src="assets/bootstrap-logo.svg" alt="" width="72" height="57">
					<h2>Checkout form</h2>
					<p class="lead">Below is an example form built entirely with Bootstrap’s form controls. Each required form group has
						a validation state that can be triggered by attempting to submit the form without completing it.</p>
				</div>
				<div class="row g-5 background-light">
					<div class="col-md-5 col-lg-4 order-md-last">
						<h4 class="d-flex justify-content-between align-items-center mb-3">
							<span class="text-primary">Your cart</span>
							<span class="badge bg-primary rounded-pill">3</span>
						</h4>
						<ul class="list-group mb-3">
							<li class="list-group-item d-flex justify-content-between lh-sm">
								<div>
									<h6 class="my-0">Product name</h6>
									<small class="text-muted">Brief description</small>
								</div>
								<span class="text-muted">$12</span>
							</li>
							<li class="list-group-item d-flex justify-content-between lh-sm">
								<div>
									<h6 class="my-0">Second product</h6>
									<small class="text-muted">Brief description</small>
								</div>
								<span class="text-muted">$8</span>
							</li>
							<li class="list-group-item d-flex justify-content-between lh-sm">
								<div>
									<h6 class="my-0">Third item</h6>
									<small class="text-muted">Brief description</small>
								</div>
								<span class="text-muted">$5</span>
							</li>
							<li class="list-group-item d-flex justify-content-between bg-light">
								<div class="text-success">
									<h6 class="my-0">Promo code</h6>
									<small>EXAMPLECODE</small>
								</div>
								<span class="text-success">−$5</span>
							</li>
							<li class="list-group-item d-flex justify-content-between">
								<span>Total (USD)</span>
								<strong>$20</strong>
							</li>
						</ul>
				
						<form class="card p-2">
							<div class="input-group">
								<input type="text" class="form-control" placeholder="Promo code">
								<button type="submit" class="btn btn-outline-secondary">Redeem</button>
							</div>
						</form>
					</div>
					<div class="col-md-7 col-lg-8">
						<h4 class="mb-3">Billing address</h4>
						<form class="needs-validation" novalidate="">
							<div class="row g-3">
								<div class="col-sm-6">
									<label for="firstName" class="form-label">First name</label>
									<input type="text" class="form-control" id="firstName" placeholder="" value="" required="">
									<div class="invalid-feedback">
										Valid first name is required.
									</div>
								</div>
				
								<div class="col-sm-6">
									<label for="lastName" class="form-label">Last name</label>
									<input type="text" class="form-control" id="lastName" placeholder="" value="" required="">
									<div class="invalid-feedback">
										Valid last name is required.
									</div>
								</div>
				
								<div class="col-12">
									<label for="username" class="form-label">Username</label>
									<div class="input-group has-validation">
										<span class="input-group-text">@</span>
										<input type="text" class="form-control" id="username" placeholder="Username" required="">
										<div class="invalid-feedback">
											Your username is required.
										</div>
									</div>
								</div>
				
								<div class="col-12">
									<label for="email" class="form-label">Email <span class="text-muted">(Optional)</span></label>
									<input type="email" class="form-control" id="email" placeholder="you@example.com">
									<div class="invalid-feedback">
										Please enter a valid email address for shipping updates.
									</div>
								</div>
				
								<div class="col-12">
									<label for="address" class="form-label">Address</label>
									<input type="text" class="form-control" id="address" placeholder="1234 Main St" required="">
									<div class="invalid-feedback">
										Please enter your shipping address.
									</div>
								</div>
				
								<div class="col-12">
									<label for="address2" class="form-label">Address 2 <span
											class="text-muted">(Optional)</span></label>
									<input type="text" class="form-control" id="address2" placeholder="Apartment or suite">
								</div>
				
								<div class="col-md-5">
									<label for="country" class="form-label">Country</label>
									<select class="form-select" id="country" required="">
										<option value="">Choose...</option>
										<option>United States</option>
									</select>
									<div class="invalid-feedback">
										Please select a valid country.
									</div>
								</div>
				
								<div class="col-md-4">
									<label for="state" class="form-label">State</label>
									<select class="form-select" id="state" required="">
										<option value="">Choose...</option>
										<option>California</option>
									</select>
									<div class="invalid-feedback">
										Please provide a valid state.
									</div>
								</div>
				
								<div class="col-md-3">
									<label for="zip" class="form-label">Zip</label>
									<input type="text" class="form-control" id="zip" placeholder="" required="">
									<div class="invalid-feedback">
										Zip code required.
									</div>
								</div>
							</div>
				
							<hr class="my-4">
				
							<div class="form-check">
								<input type="checkbox" class="form-check-input" id="same-address">
								<label class="form-check-label" for="same-address">Shipping address is the same as my billing
									address</label>
							</div>
				
							<div class="form-check">
								<input type="checkbox" class="form-check-input" id="save-info">
								<label class="form-check-label" for="save-info">Save this information for next time</label>
							</div>
				
							<hr class="my-4">
				
							<h4 class="mb-3">Payment</h4>
				
							<div class="my-3">
								<div class="form-check">
									<input id="credit" name="paymentMethod" type="radio" class="form-check-input" checked=""
										required="">
									<label class="form-check-label" for="credit">Credit card</label>
								</div>
								<div class="form-check">
									<input id="debit" name="paymentMethod" type="radio" class="form-check-input" required="">
									<label class="form-check-label" for="debit">Debit card</label>
								</div>
								<div class="form-check">
									<input id="paypal" name="paymentMethod" type="radio" class="form-check-input" required="">
									<label class="form-check-label" for="paypal">PayPal</label>
								</div>
							</div>
				
							<div class="row gy-3">
								<div class="col-md-6">
									<label for="cc-name" class="form-label">Name on card</label>
									<input type="text" class="form-control" id="cc-name" placeholder="" required="">
									<small class="text-muted">Full name as displayed on card</small>
									<div class="invalid-feedback">
										Name on card is required
									</div>
								</div>
				
								<div class="col-md-6">
									<label for="cc-number" class="form-label">Credit card number</label>
									<input type="text" class="form-control" id="cc-number" placeholder="" required="">
									<div class="invalid-feedback">
										Credit card number is required
									</div>
								</div>
				
								<div class="col-md-3">
									<label for="cc-expiration" class="form-label">Expiration</label>
									<input type="text" class="form-control" id="cc-expiration" placeholder="" required="">
									<div class="invalid-feedback">
										Expiration date required
									</div>
								</div>
				
								<div class="col-md-3">
									<label for="cc-cvv" class="form-label">CVV</label>
									<input type="text" class="form-control" id="cc-cvv" placeholder="" required="">
									<div class="invalid-feedback">
										Security code required
									</div>
								</div>
							</div>
				
							<hr class="my-4">
				
							<button class="w-100 btn btn-outline-danger btn-lg" type="submit">Continue to checkout</button>
						</form>
					</div>
				</div>
				</div>
				<!-- end -->

				<!-- Sign in -->
				<div class="mt-5 container text-center form-signin-container background-light">
					<div class="form-signin">
						<form>
							<img class="mb-4" src="assets/bootstrap-logo.svg" alt="" width="72" height="57">
							<h1 class="h3 mb-3 fw-normal">Please sign in</h1>
				
							<div class="form-floating">
								<input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
								<label for="floatingInput">Email address</label>
							</div>
							<div class="form-floating">
								<input type="password" class="form-control" id="floatingPassword" placeholder="Password">
								<label for="floatingPassword">Password</label>
							</div>
							<div class="form-check mb-3">
								<label>
									<input type="checkbox" class="form-check-input" value="remember-me"> Remember me
								</label>
							</div>
							<button class="w-100 btn btn-lg btn-danger" type="submit">Sign in</button>
							<p class="mt-5 mb-3 text-muted">© 2017–2021</p>
						</form>
					</div>
				</div>

				<!-- Album -->
				<div class="mt-5 container">
					<section class="py-5 text-center container">
						<div class="row py-lg-5">
							<div class="col-lg-6 col-md-8 mx-auto">
								<h1 class="fw-light">Album example</h1>
								<p class="lead text-muted">Something short and leading about the collection below—its contents, the creator,
									etc. Make it short and sweet, but not too short so folks don’t simply skip over it entirely.</p>
								<p>
									<a href="#" class="btn btn-danger my-2">Main call to action</a>
									<a href="#" class="btn btn-secondary my-2">Secondary action</a>
								</p>
							</div>
						</div>
					</section>
					<div class="album py-5">
						<div class="container">
					
							<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
								<div class="col">
									<div class="card shadow-sm">
										<svg class="bd-placeholder-img card-img-top" width="100%" height="225"
											xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail"
											preserveAspectRatio="xMidYMid slice" focusable="false">
											<title>Placeholder</title>
											<rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef"
												dy=".3em">Thumbnail</text>
										</svg>
					
										<div class="card-body background-light">
											<p class="card-text">This is a wider card with supporting text below as a natural lead-in to
												additional content. This content is a little bit longer.</p>
											<div class="d-flex justify-content-between align-items-center">
												<div class="btn-group">
													<button type="button" class="btn btn-sm btn-outline-danger">View</button>
													<button type="button" class="btn btn-sm btn-outline-danger">Edit</button>
												</div>
												<small class="text-muted">9 mins</small>
											</div>
										</div>
									</div>
								</div>
								<div class="col">
									<div class="card shadow-sm">
										<svg class="bd-placeholder-img card-img-top" width="100%" height="225"
											xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail"
											preserveAspectRatio="xMidYMid slice" focusable="false">
											<title>Placeholder</title>
											<rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef"
												dy=".3em">Thumbnail</text>
										</svg>
					
										<div class="card-body">
											<p class="card-text">This is a wider card with supporting text below as a natural lead-in to
												additional content. This content is a little bit longer.</p>
											<div class="d-flex justify-content-between align-items-center">
												<div class="btn-group">
													<button type="button" class="btn btn-sm btn-outline-danger">View</button>
													<button type="button" class="btn btn-sm btn-outline-danger">Edit</button>
												</div>
												<small class="text-muted">9 mins</small>
											</div>
										</div>
									</div>
								</div>
								<div class="col">
									<div class="card shadow-sm">
										<svg class="bd-placeholder-img card-img-top" width="100%" height="225"
											xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail"
											preserveAspectRatio="xMidYMid slice" focusable="false">
											<title>Placeholder</title>
											<rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef"
												dy=".3em">Thumbnail</text>
										</svg>
					
										<div class="card-body">
											<p class="card-text">This is a wider card with supporting text below as a natural lead-in to
												additional content. This content is a little bit longer.</p>
											<div class="d-flex justify-content-between align-items-center">
												<div class="btn-group">
													<button type="button" class="btn btn-sm btn-outline-danger">View</button>
													<button type="button" class="btn btn-sm btn-outline-danger">Edit</button>
												</div>
												<small class="text-muted">9 mins</small>
											</div>
										</div>
									</div>
								</div>
					
								<div class="col">
									<div class="card shadow-sm">
										<svg class="bd-placeholder-img card-img-top" width="100%" height="225"
											xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail"
											preserveAspectRatio="xMidYMid slice" focusable="false">
											<title>Placeholder</title>
											<rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef"
												dy=".3em">Thumbnail</text>
										</svg>
					
										<div class="card-body">
											<p class="card-text">This is a wider card with supporting text below as a natural lead-in to
												additional content. This content is a little bit longer.</p>
											<div class="d-flex justify-content-between align-items-center">
												<div class="btn-group">
													<button type="button" class="btn btn-sm btn-outline-danger">View</button>
													<button type="button" class="btn btn-sm btn-outline-danger">Edit</button>
												</div>
												<small class="text-muted">9 mins</small>
											</div>
										</div>
									</div>
								</div>
								<div class="col">
									<div class="card shadow-sm">
										<svg class="bd-placeholder-img card-img-top" width="100%" height="225"
											xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail"
											preserveAspectRatio="xMidYMid slice" focusable="false">
											<title>Placeholder</title>
											<rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef"
												dy=".3em">Thumbnail</text>
										</svg>
					
										<div class="card-body">
											<p class="card-text">This is a wider card with supporting text below as a natural lead-in to
												additional content. This content is a little bit longer.</p>
											<div class="d-flex justify-content-between align-items-center">
												<div class="btn-group">
													<button type="button" class="btn btn-sm btn-outline-danger">View</button>
													<button type="button" class="btn btn-sm btn-outline-danger">Edit</button>
												</div>
												<small class="text-muted">9 mins</small>
											</div>
										</div>
									</div>
								</div>
								<div class="col">
									<div class="card shadow-sm">
										<svg class="bd-placeholder-img card-img-top" width="100%" height="225"
											xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail"
											preserveAspectRatio="xMidYMid slice" focusable="false">
											<title>Placeholder</title>
											<rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef"
												dy=".3em">Thumbnail</text>
										</svg>
					
										<div class="card-body">
											<p class="card-text">This is a wider card with supporting text below as a natural lead-in to
												additional content. This content is a little bit longer.</p>
											<div class="d-flex justify-content-between align-items-center">
												<div class="btn-group">
													<button type="button" class="btn btn-sm btn-outline-danger">View</button>
													<button type="button" class="btn btn-sm btn-outline-danger">Edit</button>
												</div>
												<small class="text-muted">9 mins</small>
											</div>
										</div>
									</div>
								</div>
					
								<div class="col">
									<div class="card shadow-sm">
										<svg class="bd-placeholder-img card-img-top" width="100%" height="225"
											xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail"
											preserveAspectRatio="xMidYMid slice" focusable="false">
											<title>Placeholder</title>
											<rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef"
												dy=".3em">Thumbnail</text>
										</svg>
					
										<div class="card-body">
											<p class="card-text">This is a wider card with supporting text below as a natural lead-in to
												additional content. This content is a little bit longer.</p>
											<div class="d-flex justify-content-between align-items-center">
												<div class="btn-group">
													<button type="button" class="btn btn-sm btn-outline-danger">View</button>
													<button type="button" class="btn btn-sm btn-outline-danger">Edit</button>
												</div>
												<small class="text-muted">9 mins</small>
											</div>
										</div>
									</div>
								</div>
								<div class="col">
									<div class="card shadow-sm">
										<svg class="bd-placeholder-img card-img-top" width="100%" height="225"
											xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail"
											preserveAspectRatio="xMidYMid slice" focusable="false">
											<title>Placeholder</title>
											<rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef"
												dy=".3em">Thumbnail</text>
										</svg>
					
										<div class="card-body">
											<p class="card-text">This is a wider card with supporting text below as a natural lead-in to
												additional content. This content is a little bit longer.</p>
											<div class="d-flex justify-content-between align-items-center">
												<div class="btn-group">
													<button type="button" class="btn btn-sm btn-outline-danger">View</button>
													<button type="button" class="btn btn-sm btn-outline-danger">Edit</button>
												</div>
												<small class="text-muted">9 mins</small>
											</div>
										</div>
									</div>
								</div>
								<div class="col">
									<div class="card shadow-sm">
										<svg class="bd-placeholder-img card-img-top" width="100%" height="225"
											xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail"
											preserveAspectRatio="xMidYMid slice" focusable="false">
											<title>Placeholder</title>
											<rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef"
												dy=".3em">Thumbnail</text>
										</svg>
					
										<div class="card-body">
											<p class="card-text">This is a wider card with supporting text below as a natural lead-in to
												additional content. This content is a little bit longer.</p>
											<div class="d-flex justify-content-between align-items-center">
												<div class="btn-group">
													<button type="button" class="btn btn-sm btn-outline-danger">View</button>
													<button type="button" class="btn btn-sm btn-outline-danger">Edit</button>
												</div>
												<small class="text-muted">9 mins</small>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</main>

		<footer>
			<!-- Fixed-navbar 2 -->
			<nav class="navbar fixed-bottom navbar-expand-md navbar-light background-light">
				<div class="container-fluid">
					<a class="navbar-brand" href="#">Bottom navbar</a>
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar_collapse_2"><span class="navbar-toggler-icon"></span></button>
					<div class="collapse navbar-collapse" id="navbar_collapse_2">
						<ul class="navbar-nav">
							<!-- Toplevel Menu -->
							<li class="nav-item"><a class="nav-link active bg-dark foreground-light" href="#">Home</a></li>
							<li class="nav-item"><a class="nav-link" href="#">Link</a></li>
							<li class="nav-item"><a class="nav-link disabled" href="#" tabindex="-1">Disabled</a></li>
		
							<!-- Treeview Dropup Menu -->
							<li class="nav-item dropup">
								<a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Treeview menu up</a>
								<ul class="dropdown-menu">
									<li><a class="dropdown-item" href="#">Menu item 1</a></li>
									<li><a class="dropdown-item" href="#">Menu item 2 &raquo;</a>
										<ul class="submenu-up dropdown-menu">
											<li><a class="dropdown-item" href="#">Menu item 2.1</a></li>
											<li><a class="dropdown-item" href="#">Menu item 2.2</a></li>
											<li><a class="dropdown-item" href="#">Menu item 2.3 &raquo;</a>
												<ul class="submenu-up dropdown-menu">
													<li><a class="dropdown-item" href="#">Menu item 2.3.1</a></li>
													<li><a class="dropdown-item" href="#">Menu item 2.3.2 &raquo;</a>
														<ul class="submenu-up dropdown-menu">
															<li><a class="dropdown-item" href="#">Menu item 2.3.2.1</a></li>
															<li><a class="dropdown-item" href="#">Menu item 2.3.2.2</a></li>
															<li><a class="dropdown-item" href="#">Menu item 2.3.2.3 &raquo;</a>
																<ul class="submenu-up dropdown-menu">
																	<li><a class="dropdown-item" href="#">Menu item 2.3.2.3.1</a></li>
																	<li><a class="dropdown-item" href="#">Menu item 2.3.2.3.2</a></li>
																</ul>
															</li>
															<li><a class="dropdown-item active bg-dark foreground-light" href="#">Menu item 2.3.2.4</a></li>
															<li><a class="dropdown-item" href="#">Menu item 2.3.2.5</a></li>
														</ul>
													</li>
												</ul>
											</li>
											<li><a class="dropdown-item active bg-dark foreground-light" href="#">Menu item 2.4</a></li>
											<li><a class="dropdown-item" href="#">Menu item 2.5</a></li>
										</ul>
									</li>
									<li><a class="dropdown-item active bg-dark foreground-light" href="#">Menu item 3</a></li>
									<li><a class="dropdown-item disabled" href="#" tabindex="-1">Menu item 4</a></li>
									<li><hr class="dropdown-divider"></li>
									<li><a class="dropdown-item" href="#">Something else here</a>
								</ul>
							</li>
						</ul>
					</div>
				</div>
			</nav>
			<div id="navbar-bottom-e"></div>
		</footer>

		<script src="js/bootstrap.bundle.min.js"></script>
		<script src="js/form-validation.js"></script>
		<script src="js/custom.js"></script>
	</body>
</html>
