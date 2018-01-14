$(document).ready(init);
function init() {
	$("#pop").hide();
	$("#sales").hide();
}
function new_col() {
	$("#new").show();
	$("#pop").hide();
	$("#sales").hide();
}
function pop_col() {
	$("#new").hide();
	$("#pop").show();
	$("#sales").hide();
}

function sales_col() {
	$("#new").hide();
	$("#pop").hide();
	$("#sales").show();
}


