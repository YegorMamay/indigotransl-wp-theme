window.onload = function () {

	var wrap = document.querySelector(".tabs"),
		tabMenu = wrap.querySelectorAll(".tab-menu .tab-menu__item"),
		allTabs = wrap.querySelectorAll(".tab-content .tab-content__item");

	tabMenu.forEach(function (item, i) {
		if (!i) {
			item.classList.add('active');
			document.querySelector(".tab-content .tab-content__item").style.display = "block";
		}
		item.setAttribute("data-tab", i);
	});

	allTabs.forEach(function (item, i) {
		item.setAttribute("data-tab", i);
	});

	document.querySelector(".tab-menu").addEventListener("click", funTabs);

	function funTabs(event) {
		if (event.target.className == "tab-menu__item" || event.target.className == "tab-menu__cont" || event.target.className == "title-tab" || event.target.className == "tab-menu__icon wp-post-image" || event.target.className == "tab-menu__img") {
			var getWrapTab = this.closest(".tabs");

			getWrapTab.querySelector(".active").classList.remove("active");

			if (event.target.classList == "title-tab" || event.target.classList == "tab-menu__icon wp-post-image") {

				var dataTab = event.target.parentNode.parentNode.getAttribute("data-tab");
				event.target.parentNode.parentNode.classList.add('active');

			} else if (event.target.classList == "tab-menu__cont" || event.target.classList == "tab-menu__img") {

				var dataTab = event.target.parentNode.getAttribute("data-tab");
				event.target.parentNode.classList.add('active');

			} else {

				var dataTab = event.target.getAttribute("data-tab");
				event.target.classList.add('active');

			}


			allTabs.forEach(function (item, i) {
				item.style.display = "none";
				if (dataTab == i) {
					item.style.display = "block";
				}
			});

		}
	}

}