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

let themeIndex = 1;
setTheme(themeIndex);

function setTheme(themeIndex) {
	$(document).ready(function() {
		if (themeIndex !== 0) {
			let pallets = {
				"coloring": {
					"background": ["default", "bisque", "#7CB9E8"],
					"base": ["default", "#FFFAE5", "#C9FFE5"],
					"focusPrime": ["default", "#DC3545", "#551B8C"],
					"opacifiedPrime": ["default", "0 0 0 .25rem rgba(220, 53, 69, .5)", "0 0 0 .25rem rgba(85, 27, 140, .5)"],
					"transparent": ["default", "transparent", "transparent"],
					"none": ["default", "none", "none"]
				}
			}

			let css = {
				"general": {
					"coloring": {
						"color": {
							"background": ["input", "textarea", ".form-control", ".form-select"],
							"focusPrime": [".btn-outline-primary"]
						},
						"background-color": {
							"background": ["body", "header>div#navbarTopShade", "footer>div#navbarBottomShade"],
							"base": [".bg-light", "input", "textarea", ".form-control", ".form-select", ".card-body", "li>.dropdown-menu"],
							"focusPrime": [".btn-primary", ".btn-outline-primary", ".card-header"],
							"transparent": [".btn-outline-primary", "input[type='range']"]
						},
						"border-color": {
							"background": [".btn-primary"],
							"focusPrime": [".btn-outline-primary"]
						},
						"box-shadow": {
							"opacifiedPrime": [".btn-primary:focus"]
						}
					}
				},
				"hoverIn": {
					"coloring": {
						"background-color": {
							"focusPrime": [".btn-outline-primary", ".dropdown-item"]
						},
						"border-color": {
							"background": [".btn-outline-primary"]
						}
					}
				},
				"hoverOut": {
					"coloring": {
						"color": {
							"focusPrime": [".btn-outline-primary"]
						},
						"background-color": {
							"transparent": [".btn-outline-primary", ".dropdown-item"]
						},
						"border-color": {
							"focusPrime": [".btn-outline-primary"]
						}
					}
				},
				"focusIn": {
					"coloring": {
						"box-shadow": {
							"opacifiedPrime": [".btn-primary"]
						}
					}
				},
				"focusOut": {
					"coloring": {
						"box-shadow": {
							"none": [".btn-primary"]
						}
					}
				}
			};

			let generalStyles = {};
			let hoverInStyles = {};
			let hoverOutStyles = {};
			let focusInStyles = {};
			let focusOutStyles = {};
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
										if(!generalStyles[elements[elementKey]]) {
											generalStyles[elements[elementKey]] = {};
										}
										generalStyles[elements[elementKey]][propertyKey] = pallets[palletKey][setKey][themeIndex];
										//generalStyles[elements[elementKey]] = generalStyles[elements[elementKey]] ?
											//generalStyles[elements[elementKey]] + " " + propertyKey + ": " + pallets[palletKey][setKey][themeIndex] + " !important;" : propertyKey + ": " + pallets[palletKey][setKey][themeIndex] + " !important;";
										break;
										/*
									case "hoverIn":
										hoverInStyles[elements[elementKey]][propertyKey] = pallets[palletKey][setKey][themeIndex] + " !important";
										//hoverInStyles[elements[elementKey]] = hoverInStyles[elements[elementKey]] ?
											//hoverInStyles[elements[elementKey]] + " " + propertyKey + ": " + pallets[palletKey][setKey][themeIndex] + " !important;" : propertyKey + ": " + pallets[palletKey][setKey][themeIndex] + " !important;";
										break;
									case "hoverOut":
										hoverOutStyles[elements[elementKey]][propertyKey] = pallets[palletKey][setKey][themeIndex] + " !important";
										//hoverOutStyles[elements[elementKey]] = hoverOutStyles[elements[elementKey]] ?
											//hoverOutStyles[elements[elementKey]] + " " + propertyKey + ": " + pallets[palletKey][setKey][themeIndex] + " !important;" : propertyKey + ": " + pallets[palletKey][setKey][themeIndex] + " !important;";
										break;
									case "focusIn":
										focusInStyles[elements[elementKey]][propertyKey] = pallets[palletKey][setKey][themeIndex] + " !important";
										//focusInStyles[elements[elementKey]] = focusInStyles[elements[elementKey]] ?
											//focusInStyles[elements[elementKey]] + " " + propertyKey + ": " + pallets[palletKey][setKey][themeIndex] + " !important;" : propertyKey + ": " + pallets[palletKey][setKey][themeIndex] + " !important;";
										break;
									case "focusOut":
										focusOutStyles[elements[elementKey]][propertyKey] = pallets[palletKey][setKey][themeIndex] + " !important";
										//focusOutStyles[elements[elementKey]] = focusOutStyles[elements[elementKey]] ?
											//focusOutStyles[elements[elementKey]] + " " + propertyKey + ": " + pallets[palletKey][setKey][themeIndex] + " !important;" : propertyKey + ": " + pallets[palletKey][setKey][themeIndex] + " !important;";
										break;*/
								}
							}
						}
					}
				}
			}

			for (let generalStyleKey in generalStyles) {
				for (let propertyKey in generalStyles[generalStyleKey]){
					$(generalStyleKey).css(propertyKey, generalStyles[generalStyleKey][propertyKey]);
				}
			}
			/*for (let hoverInStyleKey in hoverInStyles) {
				$(hoverInStyleKey).hover(function(e) {
					if (e.type === "mouseenter") {
						$(this).attr("style", hoverInStyles[hoverInStyleKey]);
					}
				});
			}
			for (let hoverOutStyleKey in hoverOutStyles) {
				$(hoverOutStyleKey).hover(function(e) {
					if (e.type === "mouseleave") {
						$(this).attr("style", hoverOutStyles[hoverOutStyleKey]);
					}
				});
			}
			for (let focusInStyleKey in focusInStyles) {
				$(focusInStyleKey).focus(function(e) {
					console.log($(this).attr('style'));
					$(this).attr("style", $(this).attr("style") + focusInStyles[focusInStyleKey]);
				});
			}
			for (let focusOutStyleKey in focusOutStyles) {
				$(focusOutStyleKey).focusout(function(e) {
					$(this).attr("style", focusOutStyles[focusOutStyleKey]);
				});
			}*/
		}
	});
}

$(document).ready(function() {
	$("#themeSlider").on("input", function(e) {
		setTheme($("#themeSlider").val());
	});
});


$(document).ready(function() {
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
