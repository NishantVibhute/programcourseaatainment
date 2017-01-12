function toggle_visibility(id) {
	
		for(var i=1; i<=3; i++){
			if(i===id)
			{
				var ediv = document.getElementById("div"+i);
				var eli= document.getElementById("li"+i);
				 var sp= document.getElementById("sp"+i);
				ediv.style.display = 'block';
				eli.style.backgroundColor = "rgb(92,92,92)"; 
				sp.style.color = "white"; 
				
			}
			else{
			   var ediv = document.getElementById("div"+i);
			   var eli= document.getElementById("li"+i);
			   var sp= document.getElementById("sp"+i);
			   ediv.style.display = 'none';
			   eli.style.backgroundColor = 'black'; 
			   sp.style.color = "#999999"; 
			   
			}
		}
    }
	
	
	function toggle_visibility_dashboard(id) {
	
		for(var i=1; i<=4; i++){
			if(i===id)
			{
				var ediv = document.getElementById("dashboardContainer"+i);
				var eli = document.getElementById("liMainMenu"+i);
				
				ediv.style.display = 'block';
				 $(eli).addClass("active");
				
			}
			else{
			   var ediv = document.getElementById("dashboardContainer"+i);
			   var eli = document.getElementById("liMainMenu"+i);
			  
			   ediv.style.display = 'none';
			   $(eli).removeClass("active");
			   
			   
			}
		}
    }
	
	
function addPoDiv(id) {
	i=id+1;
		$('#div31').append('<div id="divPo'+i+'"><br><input style="width:15%" id="poId'+i+'" placeholder="id"/>&nbsp<input style="width:60%" id="poName'+i+'" placeholder="name"/>&nbsp<input type="button" value="+" onclick="addPoDiv('+i+')" id="poButAdd'+i+'"/> <input type="button" value="-" onclick="removePoDiv('+i+')" id="poButRemove'+i+'"/></div>');
		$('#poButAdd'+id).remove();
		
		$('#poButRemove'+id).remove();
}

function removePoDiv(id) {
	
		i=id-1;
		if(i===1)
		{
			$('#divPo'+i).append('<input type="button" value="+" onclick="addPoDiv('+i+')" id="poButAdd'+i+'"/> ');
		}
		else
		{
			$('#divPo'+i).append('<input type="button" value="+" onclick="addPoDiv('+i+')" id="poButAdd'+i+'"/> <input type="button" value="-" onclick="removePoDiv('+i+')" id="poButRemove'+i+'"/>');
		}
		
		
		$('#divPo'+id).remove();
}