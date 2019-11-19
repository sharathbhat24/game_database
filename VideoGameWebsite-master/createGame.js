GC = {};

GC.init = function(){
	$("#create").click(GC.check);
	//empty error message div
};

GC.check = function(){
	alert("hello, there! :)");
	var name = $("#name").val();
	alert(name);
};

$(document).ready(GC.init);