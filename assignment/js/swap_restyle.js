// JAVASCRIPT DOCUMENT
var counter = 0; 

function swap(selected) {
    
    document.getElementById('home').style.display = 'none';
    document.getElementById('china').style.display = 'none';
    document.getElementById('favrile').style.display = 'none';
    document.getElementById('fennia').style.display = 'none';
	document.getElementById('clutha').style.display = 'none';
	
    document.getElementById(selected).style.display = 'block';
}; 


function changeLook()
{
    counter += 1; 
    switch(counter)
    {
        case 1: 
        document.getElementById('bodyColor').style.backgroundColor = 'lightblue';
        document.getElementById('headerColor').style.backgroundColor = '#ff0000';
        document.getElementById('footerColor').style.backgroundColor = '#ff9900';
        break; 

        case 2:
        document.getElementById('bodyColor').style.backgroundColor = '#ff6600';
        document.getElementById('headerColor').style.backgroundColor = '#ff9999';
        document.getElementById('footerColor').style.backgroundColor = '#996699';
        break;
        
        case 3:
        document.getElementById('bodyColor').style.backgroundColor = 'coral';
        document.getElementById('headerColor').style.backgroundColor = 'darkcyan';
        document.getElementById('footerColor').style.backgroundColor = 'darksalmon';
        break; 

        case 4: 
        counter = 0;
        document.getElementById('bodyColor').style.backgroundColor = 'lightgrey';
        document.getElementById('headerColor').style.backgroundColor = 'chocolate';
        document.getElementById('footerColor').style.backgroundColor = 'dimgrey';
        break; 
    }
}

function changeBack()
{
    document.getElementById('bodyColor').style.backgroundColor = '#ffffff';
    document.getElementById('headerColor').style.backgroundColor = 'rgba(175,0,0,1';
    document.getElementById('footerColor').style.backgroundColor = 'rgba(175,0,0,1';
}