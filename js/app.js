$(document).ready(function() {
  	let edit = false;
  	$('#task-result').hide();
  	fechTask();
	$('#search').keyup(function() {
    if($('#search').val()) {
      let search = $('#search').val();
      $.ajax({//Primera forma de enviar datos con post
        url: 'php/task-search.php',
        data: {search},
        type: 'POST',
        success: function (response) {
          if(!response.error) {
            let tasks = JSON.parse(response);
            let template = '';
            tasks.forEach(task => {
              template += `
                     <li><a href="#" class="task-item">${task.name}</a></li>
                    ` 
            });
            $('#container').html(template);
            $('#task-result').show();
          }
        } 
      })
    }
  });

	$('#task-form').submit(function(e){
		const postData = {
			name: $('#name').val(),
			description: $('#description').val(),
			id: $('#taskId').val()

		};
		
		let url = edit === false ? 'php/task-add.php': 'php/task-edit.php';//Si edit es falso:.si es verdadero:

		$.post(url,postData,function(response){
			    fechTask();
			    console.log(response);
				$('#task-form').trigger('reset');//Limpiar formulario
				edit = false;
		});//Segunda forma de enviar datos con post
		e.preventDefault();//Cancelar el comportamiento por defecto de un formulario
	});

function fechTask(){
   	$.ajax({
   		url:'php/task-list.php',
   		type:'GET',
   		success: function(response){
   				let tasks = JSON.parse(response);
   				let template = '';
   				tasks.forEach(task =>{
   						template+=` 
   							<tr taskId="${task.id}">
   								<td >${task.id}</td>
   								<td>
   								 <a href="#" class="task-item">
   									${task.name}
   								 </a>
   							    </td>
   								<td>${task.description}</td>
   								<td>
   									<button class="task-delete btn btn-danger">
   									 	Eliminar
   									</button>
   								</td>
   							</tr>

   						` 
   				});
   				$('#tasks').html(template);
   		}
   });
   }
  
$(document).on('click','.task-delete',function(){
	if(confirm("Esta seguro de querer eliminar esta tarea?")){
		let element = $(this)[0].parentElement.parentElement;//El padre del padre del elemento
	    let id = $(element).attr('taskId');//Atributo taskId
	    $.post('php/task-delete.php',{id},function(response){
			fechTask();
	    })
	}
})

$(document).on('click','.task-item',function(){
	let element = $(this)[0].parentElement.parentElement;
	let id = $(element).attr('taskId');
	$.post('php/task-single.php',{id},function(response){
		const task = JSON.parse(response);
		$('#name').val(task.name);
		$('#description').val(task.description);
		$('#taskId').val(task.id);
		edit = true;
	})
})


});