/* JavaScript */

window.addEventListener("resize", function() {
	// window.location.reload(); // Required for auto-setting navigation menu.
});

document.addEventListener("DOMContentLoaded", function() {
	// Prevent closing from click inside dropdown
	document.querySelectorAll(".dropdown-menu").forEach(function(element) {
		element.addEventListener("click", function(e) {
			e.stopPropagation();
		});
	})

	// Make it as accordion for smaller screens
	if (window.innerWidth < 992) {
		// Close all inner dropdowns when parent is closed
		document.querySelectorAll(".navbar .dropdown").forEach(function(everydropdown) {
			everydropdown.addEventListener("hidden.bs.dropdown", function() {
				// After dropdown is hidden, then find all submenus
				this.querySelectorAll(".submenu").forEach(function(everysubmenu) {
					// Hide every submenu as well
					everysubmenu.style.display = "none";
				});
				this.querySelectorAll(".submenu-left").forEach(function(everysubmenu) {
					// Hide every submenu as well
					everysubmenu.style.display = "none";
				});
				this.querySelectorAll(".submenu-up").forEach(function(everysubmenu) {
					// Hide every submenu as well
					everysubmenu.style.display = "none";
				});
			})
		});
		document.querySelectorAll(".dropdown-menu a").forEach(function(element) {
			element.addEventListener("click", function(e) {
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
var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
	return new bootstrap.Tooltip(tooltipTriggerEl)
})

// Activate (any) bootstrap popovers
var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
var popoverList = popoverTriggerList.map(function(popoverTriggerEl) {
	return new bootstrap.Popover(popoverTriggerEl)
})

/* jQuery */
$(document).ready(function() {
	let currentThemeIndex = 1;

	if (currentThemeIndex !== 0) {
		let pallets = {
			"coloring": {
				"background": ["default", "bisque", "#7CB9E8"],
				"base": ["default", "#FFFAE5", "#C9FFE5"],
				"focusPrime": ["default", "#DC3545", "#551B8C"],
				"transparent": ["default", "transparent", "transparent"]
			}
		}

		let css = {
			"general": {
				"coloring": {
					"background-color": {
						"background": ["body", "header>div#navbar-top-e", "footer>div#navbar-bottom-e"],
						"base": ["li>.dropdown-menu", ".card-body", ".bg-light", ".form-control", ".form-select", "input", "textarea", ".foreground-light"],
						"focusPrime": [".btn-primary", ".btn-outline-primary", ".card-header"]
					},
					"color": {
						"background": [".form-control", ".form-select", "input", "textarea", ".foreground-light"]
					}
				}
			},
			"hoverIn": {
				"coloring": {
					"background-color": {
						"focusPrime": [".dropdown-item"]
					}
				}
			},
			"hoverOut": {
				"coloring": {
					"background-color": {
						"transparent": [".dropdown-item"]
					}
				}
			}
		};

		let generalInlineStyles = {};
		let hoverInInlineStyles = {};
		let hoverOutInlineStyles = {};
		for (let cssKey in css) {
			let zone = css[cssKey]; // e.g., cssKey = "general"
			for (let palletKey in zone) {
				let pallet = zone[palletKey]; // e.g., palletKey = "coloring"
				for (let propertyKey in pallet) {
					let set = pallet[propertyKey]; // e.g., propertyKey = "background-color"
					for (let setKey in set) {
						let elements = set[setKey]; // e.g., setKey = "background"
						for (let elementKey in elements) {
							// e.g., elementKey = "body"
							switch (cssKey) {
								case "general":
									generalInlineStyles[elements[elementKey]] = generalInlineStyles[elements[elementKey]] ?
										generalInlineStyles[elements[elementKey]] + " " + propertyKey + ": " + pallets[palletKey][setKey][currentThemeIndex] + " !important;" :
										propertyKey + ": " + pallets[palletKey][setKey][currentThemeIndex] + " !important;";
									break;
								case "hoverIn":
									hoverInInlineStyles[elements[elementKey]] = hoverInInlineStyles[elements[elementKey]] ?
										hoverInInlineStyles[elements[elementKey]] + " " + propertyKey + ": " + pallets[palletKey][setKey][currentThemeIndex] + " !important;" :
										propertyKey + ": " + pallets[palletKey][setKey][currentThemeIndex] + " !important;";
									break;
								case "hoverOut":
									hoverOutInlineStyles[elements[elementKey]] = hoverOutInlineStyles[elements[elementKey]] ?
										hoverOutInlineStyles[elements[elementKey]] + " " + propertyKey + ": " + pallets[palletKey][setKey][currentThemeIndex] + " !important;" :
										propertyKey + ": " + pallets[palletKey][setKey][currentThemeIndex] + " !important;";
									break;
							}
						}
					}
				}
			}
		}

		for (let generalInlineStyleKey in generalInlineStyles) {
			$(generalInlineStyleKey).attr("style", generalInlineStyles[generalInlineStyleKey]);
		}
		for (let hoverInInlineStyleKey in hoverInInlineStyles) {
			$(hoverInInlineStyleKey).hover(function(e) {
				if (e.type === "mouseenter") {
					$(this).attr("style", hoverInInlineStyles[hoverInInlineStyleKey]);
				}
			});
		}
		for (let hoverOutInlineStyleKey in hoverOutInlineStyles) {
			$(hoverOutInlineStyleKey).hover(function(e) {
				if (e.type === "mouseleave") {
					$(this).attr("style", hoverOutInlineStyles[hoverOutInlineStyleKey]);
				}
			});
		}
	}

	/*
	$(window).resize(function(){
		let mainWidth = $("main").width();
		let mainHeight = $("main").height();
	});

	$("p").click(function() {
		$(this).hide();
	});
	*/
});