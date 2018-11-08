// Gallery Generator //
function getXMLHttp(){
	var xmlHttp;
	try{
		xmlHttp = new XMLHttpRequest();
	}catch(e){
		try{
			xmlHttp = new ActiveXObject("Msxml2.XMLHTTP")
		}catch(e){
			try{
				xmlHttp = new ActiveXObject("Microsoft.XMLHTTP")
			}catch(e){
				return false; 
			}
		}
	}
	return xmlHttp;
}

var xmlHttp = getXMLHttp();

var numberOfColumns = 2;

var htmlCode="";

var response;

$(document).ready(function() {

	var send="hook.php";

	xmlHttp.open("GET",send,true);

	xmlHttp.send(null);

	xmlHttp.onreadystatechange= function(){
		
		if(xmlHttp.readyState == 4){
			//alert(xmlHttp.responseText);
			response=xmlHttp.responseText.split("~");

			htmlCode +="<tr>";

			for(var i=0;i<response.length;i++){
				htmlCode += '<a href="'+ response[i] + ' "data-fancybox data-caption="My X3D model render" > ';
				htmlCode += '<img class="card-img-top img-thumbnail" src="' + response[i] + '"/>';
				htmlCode += '</a>';			
				if(((i+1)%numberOfColumns)==0){
					htmlCode+="</tr><tr>";
				}
			}
			htmlCode+="</tr>";
			document.getElementById('gallery').innerHTML =htmlCode;
		}
	}
});