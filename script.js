$(document).ready(function(){
   $(".section-arrow").click(function() {
   		if($(this).css("background-color")=="#0000")
   		{
   			$(this).css("background-color","blue");
   		}
   		else
   		{
   			$(this).css("background-color","black");
   		}
   		
	});
}); 