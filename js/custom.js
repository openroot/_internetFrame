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
					}
					else {
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
					"background":		["default", "bisque", "#7CB9E8", "#DE5D83"],	// Tips: Random in darker side.
					"base":				["default", "#FFFAE5", "#C9FFE5", "#DEC4CC"],	// Tips: Lighter side of 'background'.
					"focusPrime":		["default", "#DC3545", "#551B8C", "#3C2126"],	// Tips: Random darker side yet relative to 'base'.
					"opacifiedPrime":	["default", "0 0 0 .25rem rgba(220, 53, 69, .5)", "0 0 0 .25rem rgba(85, 27, 140, .5)", "0 0 0 .25rem rgba(60, 33, 38, .5)"],	// Tips: RGB of 'focusPrime' as 0.5 opacity.
					"lightTextPrime":	["default", "#FFFFFF", "#FFFFFF", "#FFFFFF"],	// Tips: generally selected as closer to color white.
					"darkTextPrime":	["default", "#211A00", "#00512A", "#21000A"], // Tips: Multiplied darker side of 'base'.
					"transparent":		["default", "transparent", "transparent", "transparent"],
					"none":				["default", "none", "none", "none"]
				}
			}

			let css = {
				"general": {
					"coloring": {
						"color": {
							"background": [],
							"focusPrime": [".btn-outline-primary"],
							"darkTextPrime": ["body", ".dropdown-item", "input", "textarea", ".form-select", ".form-control"]
						},
						"background-color": {
							"background": ["body", "header>div#navbarTopShade", "footer>div#navbarBottomShade"],
							"base": [".navbar", ".dropdown-menu", "input", "textarea", ".form-select", ".form-control", ".card-body", "li>.dropdown-menu"],
							"focusPrime": [".btn-primary", ".btn-outline-primary", ".card-header"],
							"transparent": [".btn-outline-primary", "input[type='range']"]
						},
						"border-color": {
							"background": [".btn-primary"],
							"focusPrime": [".btn-outline-primary"]
						}
					}
				},
				"inline": {
					"coloring": {
						"background-color": {
							"base": [".bg-light"],
							"darkTextPrime": [".bg-dark"]
						}
					}
				},
				"hoverIn": {
					"coloring": {
						"color": {
							"lightTextPrime": [".btn-outline-primary", ".dropdown-item"]
						},
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
							"focusPrime": [".btn-outline-primary"],
							"darkTextPrime": [".dropdown-item"]
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
							"opacifiedPrime": [".btn-primary", ".btn-outline-primary", "input", "textarea", ".form-select", ".form-control"]
						}
					}
				},
				"focusOut": {
					"coloring": {
						"box-shadow": {
							"none": [".btn-primary", ".btn-outline-primary", "input", "textarea", ".form-select", ".form-control"]
						}
					}
				}
			};

			let generalStyles = {};
			let inlineStyles = {};
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
										if (!generalStyles[elements[elementKey]]) {
											generalStyles[elements[elementKey]] = {};
										}
										generalStyles[elements[elementKey]][propertyKey] = pallets[palletKey][setKey][themeIndex];
										break;
									case "inline":
										if (!inlineStyles[elements[elementKey]]) {
											inlineStyles[elements[elementKey]] = {};
										}
										inlineStyles[elements[elementKey]][propertyKey] = pallets[palletKey][setKey][themeIndex] + " !important";
										break;
									case "hoverIn":
										if (!hoverInStyles[elements[elementKey]]) {
											hoverInStyles[elements[elementKey]] = {};
										}
										hoverInStyles[elements[elementKey]][propertyKey] = pallets[palletKey][setKey][themeIndex];
										break;
									case "hoverOut":
										if (!hoverOutStyles[elements[elementKey]]) {
											hoverOutStyles[elements[elementKey]] = {};
										}
										hoverOutStyles[elements[elementKey]][propertyKey] = pallets[palletKey][setKey][themeIndex];
										break;
									case "focusIn":
										if (!focusInStyles[elements[elementKey]]) {
											focusInStyles[elements[elementKey]] = {};
										}
										focusInStyles[elements[elementKey]][propertyKey] = pallets[palletKey][setKey][themeIndex];
										break;
									case "focusOut":
										if (!focusOutStyles[elements[elementKey]]) {
											focusOutStyles[elements[elementKey]] = {};
										}
										focusOutStyles[elements[elementKey]][propertyKey] = pallets[palletKey][setKey][themeIndex];
										break;
								}
							}
						}
					}
				}
			}

			for (let generalStyleKey in generalStyles) {
				for (let propertyKey in generalStyles[generalStyleKey]) {
					$(generalStyleKey).css(propertyKey, generalStyles[generalStyleKey][propertyKey]);
				}
			}
			for (let inlineStyleKey in inlineStyles) {
				let styleString = "";
				for (let propertyKey in inlineStyles[inlineStyleKey]) {
					styleString += propertyKey + ": " + inlineStyles[inlineStyleKey][propertyKey] + ";";
				}
				if (styleString.length > 0) {
					$(inlineStyleKey).attr("style", styleString);
				}
			}
			for (let hoverInStyleKey in hoverInStyles) {
				$(hoverInStyleKey).hover(function(e) {
					for (let propertyKey in hoverInStyles[hoverInStyleKey]) {
						if (e.type === "mouseenter") {
							$(this).css(propertyKey, hoverInStyles[hoverInStyleKey][propertyKey]);
						}
					}
				});
			}
			for (let hoverOutStyleKey in hoverOutStyles) {
				$(hoverOutStyleKey).hover(function(e) {
					for (let propertyKey in hoverOutStyles[hoverOutStyleKey]) {
						if (e.type === "mouseleave") {
							$(this).css(propertyKey, hoverOutStyles[hoverOutStyleKey][propertyKey]);
						}
					}
				});
			}
			for (let focusInStyleKey in focusInStyles) {
				$(focusInStyleKey).focus(function(e) {
					for (let propertyKey in focusInStyles[focusInStyleKey]) {
						$(this).css(propertyKey, focusInStyles[focusInStyleKey][propertyKey]);
					}
				});
			}
			for (let focusOutStyleKey in focusOutStyles) {
				$(focusOutStyleKey).focusout(function(e) {
					for (let propertyKey in focusOutStyles[focusOutStyleKey]) {
						$(this).css(propertyKey, focusOutStyles[focusOutStyleKey][propertyKey]);
					}
				});
			}
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
