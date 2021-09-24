document.onreadystatechange = function () {
	let element = document.getElementById("loader");
	element.classList.add("hide");
};
function activeLoader() {
	var element = document.getElementById("loader");
	element.classList.remove("hide");
}

// function playSong(id) {
// 	console.log("playSong", id);
// 	document.getElementById(id).play();
// }
// function stopSong(id) {
// 	console.log("stopSong", id);
// 	document.getElementById(id).pause();
// }

$(document).ready(function () {
	$("form").parsley();
});
$(document).ready(function () {
	// Default Datatable
	$("#datatable").DataTable();
	table
		.buttons()
		.container()
		.appendTo("#datatable-buttons_wrapper .col-md-6:eq(0)");
});
