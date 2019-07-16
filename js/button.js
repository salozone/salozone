/*
here is the javascript for the button 
which is seen while ordering the services
+ and - button with digit display.
*/


var clicks=0;
		
		function ani(){
			document.getElementById('show').style.display = 'block';
			
			document.getElementById('rev').style.display = 'none';
		
		}
		function min(){
			if(clicks<=1){
				document.getElementById('show').style.display = 'none';
					
				document.getElementById('rev').style.display = 'block';
				
			}
			else{
			clicks -= 1;
			document.getElementById('click').innerHTML=clicks;
		}
		}	
		function plus(){
			clicks += 1;
			document.getElementById('click').innerHTML=clicks;
		}