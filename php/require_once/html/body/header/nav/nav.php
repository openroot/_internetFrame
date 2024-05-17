<nav class="navbar fixed-top navbar-expand-md navbar-light background-light">
	<div class="container-fluid">
		<a class="navbar-brand" href="?go=cover">InternetFrame</a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar_collapse_1"><span class="navbar-toggler-icon"></span></button>
		<div class="collapse navbar-collapse" id="navbar_collapse_1">
			<ul class="navbar-nav me-auto mb-2 mb-md-0">
				<!-- Toplevel Menu -->
				<li class="nav-item"><a class="nav-link active bg-dark foreground-light" href="?go=cover">Cover</a></li>
				<!-- <li class="nav-item"><a class="nav-link" href="#">Link</a></li> -->
		
				<!-- Treeview Dropdown Menu -->
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Navigate</a>
					<ul class="dropdown-menu">
						<li><a class="dropdown-item" href="?go=word_fun">Word Fun</a></li>
						<!--
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
						-->
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