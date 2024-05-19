<!-- Jumbotron 1 -->
<div class="p-5 bg-light background-light rounded-3">
	<div class="container-fluid py-5">
		<h1 class="display-5 fw-bold">Custom jumbotron</h1>
		<p class="col-md-8 fs-4">Using a series of utilities, you can create this jumbotron, just like the one in previous versions of Bootstrap.
			Check out the examples below for how you can remix and restyle it to your liking.</p>
		<button class="btn btn-danger btn-lg" type="button">Example button</button>
	</div>
</div>
<!-- end -->

<!-- Jumbotron 2 -->
<div class="mt-5 p-5 bg-light background-light rounded">
	<h1>Navbar example</h1>
	<p class="lead">This example is a quick exercise to illustrate how fixed to top navbar works.
		As you scroll, it will remain fixed to the top of your browser’s viewport.</p>
	<a class="btn btn-lg btn-danger" href="../components/navbar/" role="button">View navbar docs »</a>
</div>
<!-- end -->

<!-- Jumbotron 3 -->
<div class="mt-5 row align-items-md-stretch">
	<div class="col-md-6">
		<!-- Jumbotron 3 -->
		<div class="h-100 p-5 text-white bg-dark rounded-3">
			<h2>Change the background</h2>
			<p>Swap the background-color utility and add a `.text-*` color utility to mix up the jumbotron look.
				Then, mix and match with additional component themes and more.</p>
			<button class="btn btn-outline-danger" type="button">Example button</button>
		</div>
	</div>
	<div class="col-md-6">
		<!-- Jumbotron 3 -->
		<div class="h-100 p-5 bg-light background-light border rounded-3">
			<h2>Add borders</h2>
			<p>Or, keep it light and add a border for some added definition to the boundaries of your content.
				Be sure to look under the hood at the source HTML here as we've adjusted the alignment and sizing of both column's content for equal-height.</p>
			<button class="btn btn-outline-danger" type="button">Example button</button>
		</div>
	</div>
</div>
<!-- end -->

<!-- Sign in -->
<div class="mt-5 text-center form-signin-container background-light">
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
			<p class="mt-5 mb-3 text-muted">© 2017–2024</p>
		</form>
	</div>
</div>

<!-- Checkout form -->
<div class="mt-5 container-fluid">
	<div class="py-5 text-center">
		<img class="d-block mx-auto mb-4" src="assets/bootstrap-logo.svg" alt="" width="72" height="57">
		<h2>Checkout form</h2>
		<p class="lead">Below is an example form built entirely with Bootstrap’s form controls. Each required form group has a validation state that can be triggered by attempting to submit the form without completing it.</p>
	</div>
	<div class="row gy-5 background-light">
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
				
				<button class="mb-5 btn btn-outline-danger btn-lg" type="submit">Continue to checkout</button>
			</form>
		</div>
	</div>
</div>
<!-- end -->

<!-- Album -->
<div class="mt-5">
	<section class="py-5 text-center container-fluid">
		<div class="row py-lg-5">
			<div class="col-lg-6 col-md-8 mx-auto">
				<h1 class="fw-light">Album example</h1>
				<p class="lead text-muted">Something short and leading about the collection below—its contents, the creator, etc.
					Make it short and sweet, but not too short so folks don’t simply skip over it entirely.</p>
				<p>
					<a href="#" class="btn btn-danger my-2">Main call to action</a>
					<a href="#" class="btn btn-secondary my-2">Secondary action</a>
				</p>
			</div>
		</div>
	</section>
	<div class="album py-5">
		<div class="container-fluid">
			<div class="row row-cols-1 row-cols-sm-2 row-cols-md-5 g-3">
				<div class="col">
					<div class="card shadow-sm">
						<svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
							<title>Placeholder</title>
							<rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text>
						</svg>
						<div class="card-body background-light">
							<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
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
						<svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
							<title>Placeholder</title>
							<rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text>
						</svg>
						<div class="card-body">
							<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
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
						<svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
							<title>Placeholder</title>
							<rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text>
						</svg>
						<div class="card-body">
							<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
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
						<svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
							<title>Placeholder</title>
							<rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text>
						</svg>
						<div class="card-body">
							<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
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
						<svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
							<title>Placeholder</title>
							<rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text>
						</svg>
						<div class="card-body">
							<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
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
						<svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
							<title>Placeholder</title>
							<rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text>
						</svg>
						<div class="card-body">
							<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
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
						<svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
							<title>Placeholder</title>
							<rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text>
						</svg>
						<div class="card-body">
							<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
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
						<svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
							<title>Placeholder</title>
							<rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text>
						</svg>
						<div class="card-body">
							<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
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
						<svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
							<title>Placeholder</title>
							<rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text>
						</svg>
						<div class="card-body">
							<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
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
						<svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
							<title>Placeholder</title>
							<rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text>
						</svg>
						<div class="card-body">
							<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
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

<!-- Class .badge -->
<hr>
<div class="mt-5">
	<h6>Badges</h6>
	<p>Badges are used to add additional information to any content.</p>
	<h1>Example heading <span class="badge bg-secondary">New</span></h1>
	<h2>Example heading <span class="badge bg-secondary">New</span></h2>
	<h3>Example heading <span class="badge bg-secondary">New</span></h3>
	<h4>Example heading <span class="badge bg-secondary">New</span></h4>
	<h5>Example heading <span class="badge bg-secondary">New</span></h5>
	<h6>Example heading <span class="badge bg-secondary">New</span></h6>
</div>

<!-- Class .display-(1 to 6) -->
<hr>
<div class="mt-5">
	<h6>Display Headings</h6>
	<p>Display headings are used to stand out more than normal headings (larger font-size and lighter font-weight).</p>
	<h1 class="display-1">Display 1</h1>
	<h1 class="display-2">Display 2</h1>
	<h1 class="display-3">Display 3</h1>
	<h1 class="display-4">Display 4</h1>
	<h1 class="display-5">Display 5</h1>
	<h1 class="display-6">Display 6</h1>
</div>

<!-- small -->
<hr>
<div class="mt-5">
	<h6>Smaller, Secondary Text</h6>
	<p>The small element (and the .small class) is used to create a smaller, secondary text in any heading.</p>
	<h1>h1 heading <small>secondary text</small></h1>
	<h2>h2 heading <small>secondary text</small></h2>
	<h3>h3 heading <small>secondary text</small></h3>
	<h4>h4 heading <small>secondary text</small></h4>
	<h5>h5 heading <small>secondary text</small></h5>
	<h6>h6 heading <small>secondary text</small></h6>
</div>

<!-- mark -->
<hr>
<div class="mt-5">
	<h6>Highlight Text</h6>
	<p>Use the mark element (or the .mark class) to <mark>highlight</mark> text.</p>
</div>

<!-- abbr -->
<hr>
<div class="mt-5">
	<h6>Abbreviations</h6>
	<p>The abbr element is used to mark up an abbreviation or acronym.</p>
	<p>The <abbr title="World Health Organization">WHO</abbr> was founded in 1948.</p>
</div>

<!-- blockquote -->
<hr>
<div class="mt-5">
	<h6>Blockquotes</h6>
	<p>The blockquote element is used to present content from another source.</p>
	<blockquote class="blockquote">
		<p>For 50 years, WWF has been protecting the future of nature. The world's leading conservation organization, WWF works in 100 countries and is supported by 1.2 million members in the United States and close to 5 million globally.</p>
		<footer class="blockquote-footer">From WWF's website</footer>
	</blockquote>
</div>

<!-- dl -->
<hr>
<div class="mt-5">
	<h6>Description Lists</h6>    
	<p>The dl element indicates a description list.</p>
	<dl>
		<dt>Coffee</dt>
		<dd>- black hot drink</dd>
		<dt>Milk</dt>
		<dd>- white cold drink</dd>
	</dl> 
</div>

<!-- pre -->
<hr>
<div class="mt-5">
	<h6>Multiple Code Lines</h6>
	<p>For multiple lines of code, use the pre element.</p>
	<pre>
		Text in a pre element
		is displayed in a fixed-width
		font, and it preserves
		both      spaces and
		line breaks.
	</pre>
</div>

<!-- code -->
<hr>
<div class="mt-5">
	<h6>Code Snippets</h6>
	<p>Inline snippets of code should be embedded in the code element.</p>
	<p>The following HTML elements: <code>span</code>, <code>section</code>, and <code>div</code> defines a section in a document.</p>
</div>

<!-- kbd -->
<hr>
<div class="mt-5">
	<h6>Keyboard Inputs</h6>
	<p>To indicate input that is typically entered via the keyboard, use the kbd element.</p>
	<p>Use <kbd>ctrl + p</kbd> to open the Print dialog box.</p>
</div>

<!-- Class .lead  -->
<hr>
<div class="mt-5">
	<h6>Lead Class</h6>
	<p>Use the .lead class to make a paragraph "stand out".</p>
	<p class="lead">This paragraph stands out.</p>
	<p>This is a regular paragraph.</p>
</div>

<!-- Class .text-(typography) -->
<hr>
<div class="mt-5">
	<h6>Typography</h6>
	<p class="text-start">Left-aligned text.</p>
	<p class="text-end">Right-aligned text.</p>
	<p class="text-center">Center-aligned text.</p>
	<p class="text-nowrap">No wrap text. No wrap text. No wrap text. No wrap text.</p>
	<p class="text-lowercase">Lowercased text.</p>
	<p class="text-uppercase">Uppercased text.</p>
	<p class="text-capitalize">Capitalized text.</p>
</div>

<!-- Class .text-decoration-none -->
<hr>
<div class="mt-5">
	<h6>Text Decoration</h6>
	<p>Use the .text-decoration-none class to remove the underline from a link.</p>
	<a href="#" class="text-decoration-none">A link without underline.</a>
</div>

<!-- table -->
<hr>
<div class="mt-5">
	<h6>Hover Rows</h6>
	<p>The .table-hover class enables a hover state (colored background on mouse over) on table rows.</p>
	<table class="table table-hover">
		<thead>
			<tr>
				<th>Firstname</th>
				<th>Lastname</th>
				<th>Email</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>John</td>
				<td>Doe</td>
				<td>john@example.com</td>
			</tr>
			<tr>
				<td>Mary</td>
				<td>Moe</td>
				<td>mary@example.com</td>
			</tr>
			<tr>
				<td>July</td>
				<td>Dooley</td>
				<td>july@example.com</td>
			</tr>
		</tbody>
	</table>
</div>

<!-- Class .text-(colors) -->
<hr>
<div class="mt-5">
	<h6>Contextual Colors</h6>
	<p>Use the contextual classes to provide "meaning through colors".</p>
	<p class="text-muted">This text is muted.</p>
	<p class="text-primary">This text is important.</p>
	<p class="text-success">This text indicates success.</p>
	<p class="text-info">This text represents some information.</p>
	<p class="text-warning">This text represents a warning.</p>
	<p class="text-danger">This text represents danger.</p>
	<p class="text-secondary">Secondary text.</p>
	<p class="text-dark">This text is dark grey.</p>
	<p class="text-body">Default body color (often black).</p>
	<p class="text-light">This text is light grey (on white background).</p>
	<p class="text-white">This text is white (on white background).</p>
</div>

<!-- Class .bg-(color) -->
<hr>
<div class="mt-5">
	<h6>Background Color with Contrasting Text Color</h6>
	<p>Use the contextual background classes to provide "meaning through colors".</p>
	<div style="width:8px">
		<div class="bg-primary p-1"></div>
		<div class="bg-success p-1"></div>
		<div class="bg-info p-1"></div>
		<div class="bg-warning p-1"></div>
		<div class="bg-danger p-1"></div>
		<div class="bg-secondary p-1"></div>
		<div class="bg-dark p-1"></div>
		<div class="bg-light p-1"></div>
	</div>
</div>

<!-- Class .alert -->
<hr>
<div class="mt-5">
	<h6>Animated Alerts</h6>
	<p>The .fade and .show classes adds a fading effect when closing the alert message.</p>
	<div class="alert alert-success alert-dismissible fade show">
		<button type="button" class="btn-close" data-bs-dismiss="alert"></button>
		<strong>Success!</strong> This alert box could indicate a successful or positive action.
	</div>
	<div class="alert alert-info alert-dismissible fade show">
		<button type="button" class="btn-close" data-bs-dismiss="alert"></button>
		<strong>Info!</strong> This alert box could indicate a neutral informative change or action.
	</div>
	<div class="alert alert-warning alert-dismissible fade show">
		<button type="button" class="btn-close" data-bs-dismiss="alert"></button>
		<strong>Warning!</strong> This alert box could indicate a warning that might need attention.
	</div>
	<div class="alert alert-danger alert-dismissible fade show">
		<button type="button" class="btn-close" data-bs-dismiss="alert"></button>
		<strong>Danger!</strong> This alert box could indicate a dangerous or potentially negative action.
	</div>
	<div class="alert alert-primary alert-dismissible fade show">
		<button type="button" class="btn-close" data-bs-dismiss="alert"></button>
		<strong>Primary!</strong> Indicates an important action.
	</div>
	<div class="alert alert-secondary alert-dismissible fade show">
		<button type="button" class="btn-close" data-bs-dismiss="alert"></button>
		<strong>Secondary!</strong> Indicates a slightly less important action.
	</div>
	<div class="alert alert-dark alert-dismissible fade show">
		<button type="button" class="btn-close" data-bs-dismiss="alert"></button>
		<strong>Dark!</strong> Dark grey alert.
	</div>
	<div class="alert alert-light alert-dismissible fade show">
		<button type="button" class="btn-close" data-bs-dismiss="alert"></button>
		<strong>Light!</strong> Light grey alert.
	</div>
</div>

<!-- Buttons (outlined) -->
<hr>
<div class="mt-5">
	<h6></h6>
	<p>Buttons with outline.</p>
	<button type="button" class="btn btn-outline-primary">Primary</button>
	<button type="button" class="btn btn-outline-secondary">Secondary</button>
	<button type="button" class="btn btn-outline-success">Success</button>
	<button type="button" class="btn btn-outline-info">Info</button>
	<button type="button" class="btn btn-outline-warning">Warning</button>
	<button type="button" class="btn btn-outline-danger">Danger</button>
	<button type="button" class="btn btn-outline-dark">Dark</button>
	<button type="button" class="btn btn-outline-light text-dark">Light</button>
</div>

<!-- Spinner Buttons -->
<hr>
<div class="mt-5">
	<h6>Spinner Buttons</h6>
	<p>Add spinners to buttons.</p>
	<button class="btn btn-danger">
		<span class="spinner-border spinner-border-sm"></span>
	</button>
	<button class="btn btn-danger">
		<span class="spinner-border spinner-border-sm"></span>
		Loading..
	</button>  
	<button class="btn btn-danger" disabled>
		<span class="spinner-border spinner-border-sm"></span>
		Loading..
	</button>  
	<button class="btn btn-danger" disabled>
		<span class="spinner-grow spinner-grow-sm"></span>
		Loading..
	</button>
</div>

<!-- Button Groups -->
<hr>
<div class="mt-5">
	<h6>Button Groups</h6>
	<p>Nest button groups to create dropdown menus.</p>
	<div class="btn-group">
		<button type="button" class="btn btn-danger">Apple</button>
		<button type="button" class="btn btn-danger">Samsung</button>
		<div class="btn-group">
			<button type="button" class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown">Sony</button>
			<ul class="dropdown-menu">
				<li><a class="dropdown-item" href="#">Tablet</a></li>
				<li><a class="dropdown-item" href="#">Smartphone</a></li>
			</ul>
		</div>
	</div>
</div>

<!-- Progress Bar -->
<hr>
<div class="mt-5">
	<h6>Progress Bar</h6>
	<p>Add the .progress-bar-animated class to animate the progress bar.</p>
	<div class="progress">
		<div class="progress-bar progress-bar-striped bg-danger" style="width:88%"></div>
	</div>
	<div class="progress">
		<div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" style="width:88%"></div>
	</div>
</div>

<!-- Image Card -->
<hr>
<div class="mt-5">
	<h6></h6>
	<h2>Image Card</h2>
	<p>Image at the bottom (card-img-bottom):</p>
	<div class="card" style="width:250px">
		<div class="card-body">
			<h4 class="card-title">John Doe</h4>
			<p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
			<a href="#" class="btn btn-danger">See Profile</a>
		</div>
		<img class="img-fluid card-img-bottom" src="assets/images/sample_image_1.jpg" alt="Card image" style="width:100%">
	</div>
</div>

<!-- Colored Spinners -->
<hr>
<div class="mt-5">
	<h6>Colored Spinners</h6>
	<p>Use any <strong>text color utilites</strong> to add a color to the spinner.</p>
	<div class="spinner-border spinner-border-sm text-muted"></div>
	<div class="spinner-border spinner-border-sm text-primary"></div>
	<div class="spinner-border spinner-border-sm text-success"></div>
	<div class="spinner-border spinner-border-sm text-info"></div>
	<div class="spinner-border spinner-border-sm text-warning"></div>
	<div class="spinner-border spinner-border-sm text-danger"></div>
	<div class="spinner-border spinner-border-sm text-secondary"></div>
	<div class="spinner-border spinner-border-sm text-dark"></div>
	<div class="spinner-border spinner-border-sm text-light"></div>
	<br>
	<div class="spinner-grow spinner-grow-sm text-muted"></div>
	<div class="spinner-grow spinner-grow-sm text-primary"></div>
	<div class="spinner-grow spinner-grow-sm text-success"></div>
	<div class="spinner-grow spinner-grow-sm text-info"></div>
	<div class="spinner-grow spinner-grow-sm text-warning"></div>
	<div class="spinner-grow spinner-grow-sm text-danger"></div>
	<div class="spinner-grow spinner-grow-sm text-secondary"></div>
	<div class="spinner-grow spinner-grow-sm text-dark"></div>
	<div class="spinner-grow spinner-grow-sm text-light"></div>
</div>

<!-- ol -->
<hr>
<div class="mt-5">
	<h6>Numbered List Group</h6>
	<p>Use the .list-group-numbered class to create list items with numbers in front of them.</p>
	<ol class="list-group list-group-numbered">
		<li class="list-group-item">First item</li>
		<li class="list-group-item">Second item</li>
		<li class="list-group-item">Third item</li>
	</ol>
</div>

<!-- Class .modal -->
<hr>
<div class="mt-5">
	<h6>Fading Modal</h6>
	<h3></h3>
	<p>Click on the button to open the modal.</p>
	<button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#myModal">Open modal</button>
</div>
<!-- The Modal -->
<div class="modal fade" id="myModal">
	<!-- modal-sm | modal-lg | modal-xl | modal-dialog-centered | modal-dialog-scrollable | modal-fullscreen -->
	<div class="modal-dialog modal-sm">
		<div class="modal-content">
			<!-- Modal Header -->
			<div class="modal-header">
				<h4 class="modal-title">Modal Heading</h4>
				<button type="button" class="btn-close" data-bs-dismiss="modal"></button>
			</div>
			<!-- Modal body -->
			<div class="modal-body">
				Modal body
			</div>
			<!-- Modal footer -->
			<div class="modal-footer">
				<button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>

<!-- Tooltip -->
<div class="mt-5">
	<h6>Tooltip Positioning</h6>
	<p>The data-bs-placement attribute specifies the tooltip position.</p>
	<a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Hooray!">Top</a>
	<a href="#" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Hooray!">Bottom</a>
	<a href="#" data-bs-toggle="tooltip" data-bs-placement="left" title="Hooray!">Left</a>
	<a href="#" data-bs-toggle="tooltip" data-bs-placement="right" title="Hooray!">Right</a>
</div>

<!-- Popover -->
<hr>
<div class="mt-5">
	<h6>Popover Positioning</h6>
	<p>Click on the links to see the popover in action.</p>
	<a href="#" data-bs-toggle="popover" data-bs-placement="top" data-bs-content="Content" title="Header">Top</a>
	<a href="#" data-bs-toggle="popover" data-bs-placement="bottom" data-bs-content="Content" title="Header">Bottom</a>
	<a href="#" data-bs-toggle="popover" data-bs-placement="left" data-bs-content="Content" title="Header">Left</a>
	<a href="#" data-bs-toggle="popover" data-bs-placement="right" data-bs-content="Content" title="Header">Right</a>
	<a href="#" data-bs-toggle="popover" data-bs-trigger="focus" data-bs-content="Click anywhere in the document to close this popover" title="Dismissible popover">Dismissible</a>
</div>

<!-- Float -->
<hr>
<div class="mt-5">
	<h6>Float</h6>
	<p>Float an element to the right with the .float-end class or to the left with .float-start, and clear floats with the .clearfix class.</p> 
	<div class="clearfix">
		<span class="float-start">Float left</span>
		<span class="float-end">Float right</span>
	</div>
</div>

<!-- Horizontal Center -->
<hr>
<div class="mt-5">
	<h6>Horizontal Centering</h6>
	<p>Center an element with the .mx-auto class.</p>
	<div class="mx-auto bg-dark" style="width:150px">Centered</div>
</div>

<!--  -->
<hr>
<div class="mt-5">
	<h6></h6>

</div>

<!--  -->
<hr>
<div class="mt-5">
	<h6></h6>

</div>

<!-- Accordion -->
<hr>
<div class="mt-5">
	<h6>Accordion</h6>
	<p><strong>Note:</strong> The <strong>data-bs-parent</strong> attribute makes sure that all collapsible elements under the specified parent will be closed when one of the collapsible item is shown.</p>
	<div id="accordion">
		<div class="card">
			<div class="card-header">
				<a class="btn" data-bs-toggle="collapse" href="#collapseOne">
					Collapsible Group Item #1
				</a>
			</div>
			<div id="collapseOne" class="collapse show" data-bs-parent="#accordion">
				<div class="card-body">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
				</div>
			</div>
		</div>
	
		<div class="card">
			<div class="card-header">
				<a class="collapsed btn" data-bs-toggle="collapse" href="#collapseTwo">
					Collapsible Group Item #2
				</a>
			</div>
			<div id="collapseTwo" class="collapse" data-bs-parent="#accordion">
				<div class="card-body">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
				</div>
			</div>
		</div>
	
		<div class="card">
			<div class="card-header">
				<a class="collapsed btn" data-bs-toggle="collapse" href="#collapseThree">
					Collapsible Group Item #3
				</a>
			</div>
			<div id="collapseThree" class="collapse" data-bs-parent="#accordion">
				<div class="card-body">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
				</div>
			</div>
		</div>
	</div>
</div>

<!--  -->
<hr>
<div class="mt-5">
	<h6></h6>

</div>

<!-- Image -->
<hr>
<div class="mt-5">
	<h6>Image</h6>
	<p>Thumbnail image.</p>
	<img class="rounded" src="assets/images/sample_image_1.jpg" alt="Sample Image 1" width="150px">
	<img class="rounded-circle" src="assets/images/sample_image_1.jpg" alt="Sample Image 1" width="150px">
	<img class="img-thumbnail" src="assets/images/sample_image_1.jpg" alt="Sample Image 1" width="150px">
	<p>Float an image to the left with the .float-start class.</p>
	<img class="float-start" src="assets/images/sample_image_1.jpg" alt="Sample Image 1" width="100px">
	<p>Float an image to the right with the .float-end class.</p>
	<img class="float-end" src="assets/images/sample_image_1.jpg" alt="Sample Image 1" width="100px">
	<p>Center an image by adding the utility classes .mx-auto (margin:auto) and .d-block (display:block) to the image.</p>
	<img class="mx-auto d-block" src="assets/images/sample_image_1.jpg" alt="Sample Image 1" width="100px">
	<p>Responsive image.</p>
	<img class="img-fluid" src="assets/images/sample_image_1.jpg" alt="Sample Image 1">
</div>