$( document ).ready(function() {
	$.post("./components/php/showCursos.php", resp =>{
		$("#cursos").append(resp);
	});
});