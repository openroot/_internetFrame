/* JavaScript */

window.addEventListener("resize", function () {
	// window.location.reload(); // Required for auto-setting navigation menu.
});

document.addEventListener("DOMContentLoaded", function () {
	// Prevent closing from click inside dropdown
	document.querySelectorAll(".dropdown-menu").forEach(function (element) {
		element.addEventListener("click", function (e) {
			e.stopPropagation();
		});
	})

	// Make it as accordion for smaller screens
	if (window.innerWidth < 992) {
		// Close all inner dropdowns when parent is closed
		document.querySelectorAll(".navbar .dropdown").forEach(function (everydropdown) {
			everydropdown.addEventListener("hidden.bs.dropdown", function () {
				// After dropdown is hidden, then find all submenus
				this.querySelectorAll(".submenu").forEach(function (everysubmenu) {
					// Hide every submenu as well
					everysubmenu.style.display = "none";
				});
				this.querySelectorAll(".submenu-left").forEach(function (everysubmenu) {
					// Hide every submenu as well
					everysubmenu.style.display = "none";
				});
				this.querySelectorAll(".submenu-up").forEach(function (everysubmenu) {
					// Hide every submenu as well
					everysubmenu.style.display = "none";
				});
			})
		});
		document.querySelectorAll(".dropdown-menu a").forEach(function (element) {
			element.addEventListener("click", function (e) {
				let nextEl = this.nextElementSibling;
				if (nextEl && (nextEl.classList.contains("submenu") || nextEl.classList.contains("submenu-left") || nextEl.classList.contains("submenu-up"))) {
					// Prevent opening link if link needs to open dropdown
					e.preventDefault();
					console.log(nextEl);
					if (nextEl.style.display == "block") {
						nextEl.style.display = "none";
					} else {
						nextEl.style.display = "block";
					}

				}
			});
		})
		// End if inner width
	}
});

// Activate (any) bootstrap tooltips
var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
	return new bootstrap.Tooltip(tooltipTriggerEl)
})

// Activate (any) bootstrap popovers
var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
	return new bootstrap.Popover(popoverTriggerEl)
})

/* jQuery */
$(document).ready(function() {
	let currentThemeIndex = 1;

	if (currentThemeIndex !== 0) {
		let backgroundColor = new Array("default", "bisque");
		let baseColor = new Array("default", "#fffae5");
		let focusPrimeColor = new Array("default", "#dc3545");

		let elements1 = new Array("body", "header>div#navbar-top-e", "footer>div#navbar-bottom-e");
		elements1.forEach(function(value) {
			$(value).attr("style", "background-color: " + backgroundColor[currentThemeIndex] + " !important");
		});

		let elements2 = new Array(".form-control", ".form-select", "input", "textarea", ".foreground-light");
		elements2.forEach(function(value) {
			$(value).attr("style", "color: " + backgroundColor[currentThemeIndex] + " !important");
		});

		let elements3 = new Array("li>.dropdown-menu", ".card-body", ".bg-light");
		elements3.forEach(function(value) {
			$(value).attr("style", "background-color: " + baseColor[currentThemeIndex] + " !important");
		});

		let elements4 = new Array(".btn-primary", ".btn-outline-primary", ".card-header");
		elements4.forEach(function(value) {
			$(value).attr("style", "background-color: " + focusPrimeColor[currentThemeIndex] + " !important");
		});

		let elements5 = new Array(".dropdown-item");
		elements5.forEach(function(value) {
			$(value).hover(function(e) {
				if (e.type === "mouseenter") {
					$(this).attr("style", "background-color: " + focusPrimeColor[currentThemeIndex] + " !important");
				}
				else {
					$(this).attr("style", "background-color: " + "transparent !important");
				}
			})
		});
	}

	$("p").click(function() {
		//$(this).hide();
	});
});