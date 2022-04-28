$( document ).ready(function() {
	$.post("./components/php/showCursos.php", resp =>{
		$("#cursos").append(resp);
	});

	$("#save").on("click", function(e){
		e.preventDefault();
		var pergunta = $("#questInput").val();
		var id_curso = $("#cursos").val();

		$.ajax({
            type: 'POST',
            url: './components/php/saveQuest.php',
            data: {quest: $('#questInput').val(), id_curso: $('#cursos').val()},
            success: function(data){
               	$("#conclusao").html(data);
            }
        });
        //console.log(id_curso+" "+pergunta);
	});
});