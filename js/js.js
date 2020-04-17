
$(document).ready(function(){
var id ={};
var vid =0;
  $("#but_add_task").click(function(){
      
      printList($("#input_task").val())

  });

/*$(".mark").click(function(){
  	
     alert($(this).attr("class"));
   
  });
*/

 
  function printList(data){

  	if (data.length != 0) {
  		     vid=vid+1;
  		     id[vid]=vid ;
  		     for (var i = 0; i < id.length; i++) {
  		     	
  		     }

             $(".row_list").append('<div id="'+id[vid]+'" class="row_list_html ">\
	 		     <label id="list_name_html">'+data+'</label>\
	 		     <input id="'+id[vid]+'" class="mark" onclick="Mark(this)"   type="button" value="Mark as Done" name="">\
	 		     <label id="break">|</label>\
	 		     <input id="'+id[vid]+'" class="delete" onclick="Delete(this)"  type="button" value="Delete" name="">\
	             </div>');	
             $("#input_task").val("");
  	}else
  	{
  		alert("input is empty");
  	}

  }





 

});

function Mark(x){

//alert($(x).attr("id"));

//$("#"+$(x).attr("id")).css({"display": "none"});
$("#"+$(x).attr("id")).addClass("markColorCheck");
  }


  function Delete(x){

    $("#"+$(x).attr("id")).addClass("deleteColorCheck");

  }
