
document.addEventListener("DOMContentLoaded", function() {

	// For responsive tables
	document.querySelectorAll('table[responsive="scroll"], table[responsive="collapse"]').forEach((el) => {
		let wrapper = document.createElement('figure');
		el.parentNode.insertBefore(wrapper, el);
		wrapper.appendChild(el);
	});


});
