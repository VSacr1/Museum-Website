

$(document).ready(function(){
    $('[data-toggle="popover"]').popover();
});

function swap2(selected) {
    document.getElementById('main_text').style.display = 'none';
    document.getElementById('ChinaVase').style.display = 'none';
    document.getElementById('FavrileVase').style.display = 'none';
    document.getElementById('FenniaVase').style.display = 'none';
	document.getElementById('CluthaVase').style.display = 'none';
	
    document.getElementById(selected).style.display = 'block';

}; 

function swap3(selected){
    document.getElementById('information').style.display = 'none';
    document.getElementById('gallery').style.display = 'none';

    document.getElementById(selected).style.display = 'block';
};

function cameraMain1()
{
    console.log("CameraMain");
    document.getElementById('model4__CameraMain').setAttribute('bind', 'true');
}

function cameraFennia1()
{
    console.log("FenniaCamera");
    document.getElementById('model4__Fennia').setAttribute('bind', 'true');
}

function cameraChinaVase1()
{
    console.log("ChinaVaseCamera");
    document.getElementById('model4__ChinaVase').setAttribute('bind', 'true');
}

function cameraFavrile1()
{
    console.log("Favrile Camera");
    document.getElementById('model4__Favrile').setAttribute('bind', 'true');
}

function cameraClutha1()
{
    console.log("Clutha");
    document.getElementById('model4__Clutha').setAttribute('bind', 'true');
}
