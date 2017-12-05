$(document).ready(function() {
	//jQuery code...

	$("div.tabla th").hover(
		function () {
			var contenido= $(this).attr("name");
			contenido="td#"+contenido;
			$(contenido).css("color", "white");
			$(contenido).css("background-color", "#669999");

			



		},
		function () {
			$("td.num").css("background-color", "white");
			$("td.num").css("color", "black");


		}

		);




	
	//Helper hover sobre las celdas de la tabla
	$("td.num").hover(
		function () {
		        $(this).css("background-color", "#669999");
		        $(this).css("color", "white");

		}, 
		function () {
			$(this).css("background-color", "white");
			$(this).css("color", "black");
		}
	);
});
