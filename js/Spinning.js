
var spinning = false; 

function spin()
{
    console.log("Spinning");
    spinning = !spinning; 
    document.getElementById('model__RotationTimer').setAttribute('enabled', spinning.toString());
   
}

function stopRotation()
{
    spinning = false; 
    document.getElementById('model__RotationTimer').setAttribute('enabled', spinning.toString()); 
}

function spin1()
{
    console.log("Spinning");
    spinning = !spinning; 
    document.getElementById('model1__RotationTimer').setAttribute('enabled', spinning.toString());
   
}

function stopRotation1()
{
    spinning = false; 
    document.getElementById('model1__RotationTimer').setAttribute('enabled', spinning.toString()); 
}


function spin2()
{
    console.log("Spinning");
    spinning = !spinning; 
    document.getElementById('model2__RotationTimer').setAttribute('enabled', spinning.toString());
   
}

function stopRotation2()
{
    spinning = false; 
    document.getElementById('model2__RotationTimer').setAttribute('enabled', spinning.toString()); 
}


function spin3()
{
    console.log("Spinning");
    spinning = !spinning; 
    document.getElementById('model3__RotationTimer').setAttribute('enabled', spinning.toString());
   
}

function stopRotation3()
{
    spinning = false; 
    document.getElementById('model3__RotationTimer').setAttribute('enabled', spinning.toString()); 
}


function animateModel()
{
    if(document.getElementById('model__RotationTimer').getAttribute('enabled')!= 'true')
        document.getElementById('model__RotationTimer').setAttribute('enabled', 'true');
    else
        document.getElementById('model_RotationTimer').setAttribute('enabled', 'false');
}

function wireFrame1()
{
   
    var e = document.getElementById('model');
    e.runtime.togglePoints(true);
    e.runtime.togglePoints(true);
    console.log("wireframe");
}

function wireFrame2()
{
   
    var c = document.getElementById('model1');
    c.runtime.togglePoints(true);
    c.runtime.togglePoints(true);
    console.log("wireframe");
}

function wireFrame3()
{
   
    var b = document.getElementById('model2');
    b.runtime.togglePoints(true);
    b.runtime.togglePoints(true);
    console.log("wireframe");
}

function wireFrame4()
{
   
    var a = document.getElementById('model3');
    a.runtime.togglePoints(true);
    a.runtime.togglePoints(true);
    console.log("wireframe");
}

var lightOn = true; 

function headlight()
{
   
    lightOn = !lightOn;
    document.getElementById('model__headlight').setAttribute('headlight',lightOn.toString());
    console.log("light");
}

function turnoffHeadlights()
{
    lightOn = false;
    document.getElementById('model__headlight').setAttribute('headlight', lightOn.toString());
}

function headlight1()
{
   
    lightOn = !lightOn;
    document.getElementById('model1__headlight').setAttribute('headlight',lightOn.toString());
    console.log("light");
}

function turnoffHeadlights1()
{
    lightOn = false;
    document.getElementById('model1__headlight').setAttribute('headlight', lightOn.toString());
}

function headlight2()
{
   
    lightOn = !lightOn;
    document.getElementById('model2__headlight').setAttribute('headlight',lightOn.toString());
    console.log("light");
}

function turnoffHeadlights2()
{
    lightOn = false;
    document.getElementById('model2__headlight').setAttribute('headlight', lightOn.toString());
}

function headlight3()
{
   
    lightOn = !lightOn;
    document.getElementById('model3__headlight').setAttribute('headlight',lightOn.toString());
    console.log("light");
}

function turnoffHeadlights3()
{
    lightOn = false;
    document.getElementById('model3__headlight').setAttribute('headlight', lightOn.toString());
}


function cameraFront()
{
    console.log("CameraFront");
    document.getElementById('model__CameraFront').setAttribute('bind','true');
}

function cameraTop()
{
    console.log("CameraTop");
    document.getElementById('model__CameraTop').setAttribute('bind','true');
}

function cameraSide()
{
    console.log("CameraSide");
    document.getElementById('model__CameraSide').setAttribute('bind', 'true');
}

function cameraBottom()
{
    console.log("CameraBottom");
    document.getElementById('model__CameraBottom').setAttribute('bind', 'true');
}


function cameraFront1()
{
    console.log("CameraFront");
    document.getElementById('model1__CameraFront').setAttribute('bind','true');
}

function cameraTop1()
{
    console.log("CameraTop");
    document.getElementById('model1__CameraTop').setAttribute('bind','true');
}

function cameraSide1()
{
    console.log("CameraSide");
    document.getElementById('model1__CameraSide').setAttribute('bind', 'true');
}

function cameraBottom1()
{
    console.log("CameraBottom");
    document.getElementById('model1__CameraBottom').setAttribute('bind', 'true');
}


function cameraFront2()
{
    console.log("CameraFront");
    document.getElementById('model2__CameraFront').setAttribute('bind','true');
}

function cameraTop2()
{
    console.log("CameraTop");
    document.getElementById('model2__CameraTop').setAttribute('bind','true');
}

function cameraSide2()
{
    console.log("CameraSide");
    document.getElementById('model2__CameraSide').setAttribute('bind', 'true');
}

function cameraBottom2()
{
    console.log("CameraBottom");
    document.getElementById('model2__CameraBottom').setAttribute('bind', 'true');
}



function cameraFront3()
{
    console.log("CameraFront");
    document.getElementById('model3__CameraFront').setAttribute('bind','true');
}

function cameraTop3()
{
    console.log("CameraTop");
    document.getElementById('model3__CameraTop').setAttribute('bind','true');
}

function cameraSide3()
{
    console.log("CameraSide");
    document.getElementById('model3__CameraSide').setAttribute('bind', 'true');
}

function cameraBottom3()
{
    console.log("CameraBottom");
    document.getElementById('model3__CameraBottom').setAttribute('bind', 'true');
}


