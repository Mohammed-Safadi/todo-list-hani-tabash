
$(document).ready(function(){
	getData();
  $("#but_add_task").click(function(){
      
	  printList($("#input_task").val())
	  
  });

 
  function printList(data){

  	if (data.length != 0) {
			   
			   $.ajax({
				
				url: "/todoList_js/insert.php",
				method: "POST",
				data: { text_notes: data}
			  })
				.done(function( msg ) {
				  alert( "Saved task: " + msg ); 
				  getData();
				});
				$("#input_task").val("");

         
  	}else
  	{
		  alert("input is empty");  
		 
  	}

  }

});

function Mark(x){

   $.ajax({
				
	url: "/todoList_js/updateMark.php",
	method: "POST",
	data: {id: $(x).attr("id"),mark:1}
	
  })
	.done(function( msg ) {
		alert( "mark as do task: " + msg ); 
		getData();
	});
}


  function Delete(x){
	
	$.ajax({
				
		url: "/todoList_js/delete.php",
		method: "POST",
		data: {id: $(x).attr("id")}
		
	  })
		.done(function( msg ) {
			alert( "deleted task: " + msg ); 
			getData();
		});


  }

  function  ChangeItem (x) {
	  
	$.ajax({
				
		url: "/todoList_js/changeItem.php",
		method: "POST",
		data: {id: $(x).attr("id")}
		
	  })
		.done(function( msg ) {
			$(".row_list").html(msg);
		});

  }

  function Update(x) {

	var textGet = $("#list_name_html_change").val();

	$.ajax({
				
		url: "/todoList_js/update.php",
		method: "POST",
		data: {id: $(x).attr("id"),task:textGet}
		
	  })
		.done(function( msg ) {
			alert( "update task: " + msg ); 
			getData();
		});
		
  }

  function getData(){

	$.ajax({
				
		url: "/todoList_js/getAllList.php",
		
	  })
		.done(function( msg ) {
			$(".row_list").html(msg);
		});
     

  }
