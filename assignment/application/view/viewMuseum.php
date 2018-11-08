<!doctype html>
<html lang="en">
  <head>

  <!--X3D0M-->
  <link rel = 'stylesheet' type = 'text/css' href = 'http://www.x3dom.org/x3dom/release/x3dom.css'></link>

    <script type = 'text/javascript' scr = 'http://www.x3dom.org/x3dom/release/x3dom.js'></script>
   
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="Bootstrap/css/bootstrap.css" crossorigin="anonymous">

    <script src "http://code.jquery.com/jquery-latest.js"></script>
    
   
    <!-- custom CSS -->
    <link rel="stylesheet" href = "css/IndexTest.css" crossorigin="anonymous">

      <!-- X3D0M CSS -->
      <link rel = "stylesheet" type = 'text/css' href = "Bootstrap/x3dom.css"></link> 

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


          <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
  
    <title>Virtual Museum</title>
  </head>
  
  <body>
    <body id = "bodyColor">
      <nav id = "headerColor" class = "navbar sticky-top navbar-expand-sm navbar_coca_cola">

            <div class = "navbar navbar-expand-sm bg-dark navbar-dark">
                <div class = "container-fluid">
                  <div class = "navbar-text float-left">
        <!--Navbar Menu Icon --> 
                        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target=".navbar-collapse" aria-expanded = "false">
                            <span class = "navbar-toggler-icon"></span>
                        </button>
          
                        <div class = "collapse navbar-collapse">

          <!-- LINKS-->
                            <ul class = "navbar-nav ml-auto">

 
        <!-- Home -->
                            <li class "nav-item">
                                <a class = "nav-link" href="javascript:swap('home')">Home</a>
                            </li>

        <!-- About -->
                            <li class "nav-item">
                                <a class = "nav-link" href = "assets/assignment.zip">Download</a>
                            </li>

        <!-- Model -->
                            <li class = "nav-items">
                                <a class = "nav-link active" href="javascript:swap('china')">Model</a>
                            </li>

                            </ul>
                        </div> 
                </div>
          
            </div>
        </nav>

    <!--- 4 NEW FLUID GRID LAYOUT BLOCK ELEMENTS -->

    <!-- HOME -->
    <div class = "main_contents" id = "home" style = "display:block">
                  
                <div class="conatiner">
                    
                <div class = "col-sm-12">
                  <div class="mainModel3D">
                      <x3d id = "model4">
                          <scene>
                              <inline nameSpaceName="model4" 
                                      url="assets/x3d/MainImage/exhibitionfinal.x3d" mapDEFToID="true" onclick="animateModel();"></inline>
                          </scene>
                      </x3d>
                  </div>

                        <div class="row">
                   
                            <div class = "col-sm-12">
                            <center>
                                <a href="javascript:swap2 ('FenniaVase')" class="btn btn-secondary btn-responsive camera-font" onclick="cameraFennia1()" >Fennia</a>
                                <a href="javascript:swap2 ('FavrileVase')" class="btn btn-secondary btn-responsive camera-font" onclick="cameraFavrile1();">Favrile</a>
                                <a href="javascript:swap2 ('main_text')" class="btn btn-secondary btn-responsive camera-font" onclick="cameraMain1();">Main</a>
                                <a href="javascript:swap2 ('CluthaVase')" class="btn btn-secondary btn-responsive camera-font" onclick="cameraClutha1();">Clutha</a>
                                <a href="javascript:swap2 ('ChinaVase')" class="btn btn-secondary btn-responsive camera-font" onclick="cameraChinaVase1();">China Vase</a>
                            </center>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                    <div class = "card-title homeText" style = "display:block">
                    
                    <div id = "main_text" class = "col-xs-12 col-sm-4" style = "display:block">
                    <div id = "title_home" class = "card-title homeText"></div>
                    <div id = "subTitle_home" class = "card-subtitle homeText"></div>
                    <div id = "description_home" class = "card-text homeText"></div>
                </div>

                        </div>
                    <div class = "col-sm-12">

                        <div id = "CluthaVase"  class = "col-xs-12 col-sm-4" style = "display:none" > 
                            <div id = "title_right" class = "card-title homeText"></div>
                            <div id = "subTitle_right" class = "card-subtitle homeText"></div>
                            <div id = "description_right" class = "card-text homeText"></div>
                            <br>
                            <a href="javascript:swap('clutha')"  class="btn btn-secondary btn-responsive camera-font">Find out More</a>
                        </div>

                        <div id = "ChinaVase" class = "col-xs-12 col-sm-4" style = "display:none"> 
                            <div id = "title_left" class = "card-title homeText"></div>
                            <div id = "subTitle_left" class = "card-subtitle homeText"></div>
                            <div id = "description_left" class = "card-text homeText"></div>
                            <br>
                            <a href= "javascript:swap('china')" class="btn btn-secondary btn-responsive camera-font">Find out More</a>
                        </div>

                        <div id = "FavrileVase" class = "col-xs-12 col-sm-4" style = "display:none"> 
                            <div id = "title_Favrilecentre" class = "card-title homeText"></div>
                            <div id = "subTitle_Favrilecentre" class = "card-subtitle homeText"></div>
                            <div id = "description_Favrilecentre" class = "card-text homeText"></div>
                            <br>
                            <a href= "javascript:swap('favrile')" class="btn btn-secondary btn-responsive camera-font">Find out More</a>
                        </div>

                        <div id = "FenniaVase" class = "col-xs-12 col-sm-4" style = "display:none"> 
                            <div id = "title_centre2" class = "card-title homeText"></div>
                            <div id = "subTitle_centre2" class = "card-subtitle homeText"></div>
                            <div id = "description_centre2" class = "card-text homeText"></div>
                            <br>
                            <a href= "javascript:swap('fennia')" class="btn btn-secondary btn-responsive camera-font">Find out More</a>
                        </div>
                       
                        </div>
                    </div>
                
                    </div>
            </div>
            </div>
         
              </div>
            </div> 
          </div>
          </div>

          


        

    <!-- ABOUT -->
     
    <div class = "main_content" id = "download" style= "display:none;">
        <!-- NEED TO DO AN ABOUT PAGE -->
    </div>

      <!--- CHINA VASE -->
      
        <div class = "main_contents" id = "china" style= "display:none;">

    <!-- X3D MODEL -->

                        <div class = "row">
                           <div class = "col-sm-3">
                 
                                <div class="card-header">
                            
                                <div class = "card-title x3dAnimationSubtitle drinksText">
                                    <h3>Camera</h3>
                                    <a href = "#" class = "btn btn-secondary btn-responsive camera-font" onclick="cameraFront();">Front</a>
                                    <a href = "#" class = "btn btn-secondary btn-responsive camera-font" onclick="cameraBottom();">Back</a>
                                    <a href = "#" class = "btn btn-secondary btn-responsive camera-font" onclick="cameraSide();">Left</a>
                                    <a href = "#" class = "btn btn-secondary btn-responsive camera-font" onclick="cameraTop();">Top</a>
                                    </div>
                                         <!-- ADD THE INFORMATION ABOUT THE CAMERAS -->
                                </div>

                             </div>

                            <div class = "col-sm-3">
                                <div class="card-header">
                                    <div class = "card-title x3dAnimationSubtitle drinksText">
                                        <h3>Animation</h3>
                                        <a href = "#" class = "btn btn-secondary btn-responsive camera-font" onclick="spin();">RotX</a>
                                        <a href = "#" class = "btn btn-secondary btn-responsive camera-font" onclick="stopRotation();">Stop</a> 
                                    </div>
                                </div>
                            </div>

                            <div class = "col-sm-3">
                                <div class="card-header">
                                    <div class = "card-title x3dAnimationSubtitle drinksText">
                                        <h3>Render</h3>
                                        <a href = "#" class = "btn btn-secondary btn-responsive camera-font" onclick="wireFrame1()">Wire</a>
                                        <a href = "#" class = "btn btn-secondary btn-responsive camera-font" onclick="headlight();">Light</a>                
                                    </div>
                                </div>
                            </div>
                        </div>


           

                            <div class = "row">
                        <!-- X3D model -->
                                <div class="model3D">
                                    <x3d id="model"> 
                                        <scene>
                                            <inline nameSpaceName= "model" mapDEFToID="true" onclick="animateModel();" 
                                            url="assets/x3d/ChinaVase/Spinningvase.x3d"></inline>
                                        </scene>
                                    </x3d>
                            

                                       <div class = "card-body">
                                            <div id = "title_china" class = "card-title drinksText"></div>
                                            <div id = "subTitle_china" class = "card-subtitle drinksText"></div>
                                            <div id = "description_china" class = "card-text drinksText"></div>
                                            <div id = "WebDesign_china" class = "card-text drinksText"></div>
                                           
                                        </div>            
                                </div>
                                <br>



                            <div class = "col-sm-4" style = "display:block" >
                                <div class = "card text-left">
                                    <div class = "card-header gallery-header">
                                        Information
                                    </div>
                               
                                    <div class = "card-body" id = "information">
                                    
                                        <div class = "card-text" id = "date_chinaInformation" class = "drinksText"></div>
                                        <div class = "card-text" id = "artist_chinaInformation" class = "drinksText"></div>
                                        <div class = "card-text" id = "material_chinaInformation" class = "drinksText"></div>
                                        <div class = "card-text" id = "dimensions_chinaInformation" class = "drinksText"></div>
                                        <div class = "card-text" id = "museum_chinaInformation" class = "drinksText"></div>
                    
                                        <a href="http://collections.vam.ac.uk/item/O73014/vase-unknown/" class="btn btn-secondary btn-responsive camera-font">Find out More</a>
                                        

                                    </div>
                                    <div class = "card-body" id = "gallery" style="display:none">

                                            <table id = "gallery"></table>
        
                                        </div>
                    
                                    <div class = "card-header gallery-header">
                            
                                         <a href="javascript:swap3('gallery')" class="btn btn-secondary btn-responsive camera-font">Gallery</a>
                                         <a href="javascript:swap3('information')" class="btn btn-secondary btn-responsive camera-font">Information</a>
                    
                                       <!-- <div class = "card-text" id = "description_gallery" class = "drinksText"></div> -->
                                    </div>
                                    <br>
                                    <div class = "buttons">
                                            <a class = "btn btn-secondary btn-responsive camera-font" href = "javascript:swap ('china')">China Vase</a>
                                           <a class = "btn btn-secondary btn-responsive camera-font" href = "javascript:swap('favrile')">Favrile</a>
                                           <a class = "btn btn-secondary btn-responsive camera-font" href = "javascript:swap('fennia')">Fennia</a>
                                           <a class = "btn btn-secondary btn-responsive camera-font" href = "javascript:swap('clutha')">Clutha</a>
                                       </div>
                                    
                                </div>      
                            
                        </div>
                    </div>
                </div>   




    <!--CocaCola --> 
    <!-- DEVELOP YOUR OWN GRID STYLE FOR THE FINAL ASSIGNMENT --> 

   

      <!--- FAVRILE-->
      <div class = "main_contents" id = "favrile" style = "display:none;">

    <!-- X3D MODEL -->

                    <div class = "row">
                       <div class = "col-sm-3">
                            <div class="card-header">
                        
                            <div class = "card-title x3dAnimationSubtitle drinksText">
                                <h3>Camera</h3>
                                <a href = "#" class = "btn btn-secondary btn-responsive camera-font" onclick="cameraFront1();">Front</a>
                                <a href = "#" class = "btn btn-secondary btn-responsive camera-font" onclick="cameraBottom1();">Back</a>
                                <a href = "#" class = "btn btn-secondary btn-responsive camera-font" onclick="cameraSide1()">Left</a>
                                <a href = "#" class = "btn btn-secondary btn-responsive camera-font" onclick="cameraTop1()">Top</a>
                                </div>
                            </div>
                         </div>

                        <div class = "col-sm-3">
                            <div class="card-header">
                                <div class = "card-title x3dAnimationSubtitle drinksText">
                                    <h3>Animation</h3>
                                    <a href = "#" class = "btn btn-secondary btn-responsive camera-font" onclick="spin1();">RotX</a>
                                    <a href = "#" class = "btn btn-secondary btn-responsive camera-font" onclick="stopRotation1();">Stop</a> 
                                </div>
                            </div>
                        </div>

                        <div class = "col-sm-3">
                            <div class="card-header">
                                <div class = "card-title x3dAnimationSubtitle drinksText">
                                    <h3>Render</h3>
                                    <a href = "#" class = "btn btn-secondary btn-responsive camera-font" onclick="wireFrame2()">Wire</a>
                                    <a href = "#" class = "btn btn-secondary btn-responsive camera-font" onclick="headlight1();">Light</a>                
                                </div>
                            </div>
                        </div>

                    </div>


       

                        <div class = "row">
                    <!-- X3D model -->
                            <div class="model3D">
                                <x3d id="model1"> 
                                    <scene>
                                        <inline nameSpaceName= "model1" mapDEFToID="true" onclick="animateModel();"
                                        url="assets/x3d/Favrile/FAVRILE.x3d"></inline>
                                    </scene>
                                </x3d>

                                   <div class = "card-body">
                                        <div id = "title_favrile" class = "card-title drinksText"></div>
                                        <div id = "subTitle_favrile" class = "card-subtitle drinksText"></div>
                                        <div id = "description_favrile" class = "card-text drinksText"></div>
                                        <div id = "WebDesign_favrile" class = "card-text drinksText"></div>
                                    </div>            
                                </div>




                        <div class = "col-sm-4" style = "display:block" >
                            <div class = "card text-left">
                            <div class = "card-header gallery-header">
                                    Information
                                </div>
                           
                                <div class = "card-body" id = "information">
                                
                                    <div class = "card-text" id = "date_favrileInformation" class = "drinksText"></div>
                                    <div class = "card-text" id = "artist_favrileInformation" class = "drinksText"></div>
                                    <div class = "card-text" id = "material_favrileInformation" class = "drinksText"></div>
                                    <div class = "card-text" id = "dimensions_favrileInformation" class = "drinksText"></div>
                                    <div class = "card-text" id = "museum_favrileInformation" class = "drinksText"></div>
                
                                    <a href="http://collections.vam.ac.uk/item/O5332/favrile-vase-tiffany-louis-comfort/" class="btn btn-secondary btn-responsive camera-font">Find out More</a>

                                    

                                </div>
                                <div class = "card-body" id = "gallery" style="display:none">

                                <table id = "gallery"></table>

                                </div>
        
                
                                <div class = "card-header gallery-header">
                        
                                <a href="javascript:swap3('gallery')" class="btn btn-secondary btn-responsive camera-font">Gallery</a>
                                <a href="javascript:swap3('information')" class="btn btn-secondary btn-responsive camera-font">Information</a>
                
                                   <!-- <div class = "card-text" id = "description_gallery" class = "drinksText"></div> -->
                                </div>
                                <br>
                                <div class = "buttons">
                                        <a class = "btn btn-secondary btn-responsive camera-font" href = "javascript:swap ('china')">China Vase</a>
                                       <a class = "btn btn-secondary btn-responsive camera-font" href = "javascript:swap('favrile')">Favrile</a>
                                       <a class = "btn btn-secondary btn-responsive camera-font" href = "javascript:swap('fennia')">Fennia</a>
                                       <a class = "btn btn-secondary btn-responsive camera-font" href = "javascript:swap('clutha')">Clutha</a>
                                   </div>
                                
                            </div>      
                        
                        </div>

                        </div>
                    </div>
                </div>     
            </div>   
        </div> 
    </div>


      <!--- FENNIA-->
      <div class = "main_contents" id = "fennia" style = "display:none;">

   <!-- X3D MODEL -->

                <div class = "row">
                   <div class = "col-sm-3">
                        <div class="card-header">
                    
                        <div class = "card-title x3dAnimationSubtitle drinksText">
                            <h3>Camera</h3>
                            <a href = "#" class = "btn btn-secondary btn-responsive camera-font" onclick="cameraFront2();">Front</a>
                            <a href = "#" class = "btn btn-secondary btn-responsive camera-font" onclick="cameraBottom2();">Back</a>
                            <a href = "#" class = "btn btn-secondary btn-responsive camera-font" onclick="cameraSide2()">Left</a>
                            <a href = "#" class = "btn btn-secondary btn-responsive camera-font" onclick="cameraTop2()">Top</a>
                            </div>
                        </div>
                     </div>

                    <div class = "col-sm-3">
                        <div class="card-header">
                            <div class = "card-title x3dAnimationSubtitle drinksText">
                                <h3>Animation</h3>
                                <a href = "#" class = "btn btn-secondary btn-responsive camera-font" onclick="spin2();">RotX</a>
                                <a href = "#" class = "btn btn-secondary btn-responsive camera-font" onclick="stopRotation2();">Stop</a> 
                            </div>
                        </div>
                    </div>

                    <div class = "col-sm-3">
                        <div class="card-header">
                            <div class = "card-title x3dAnimationSubtitle drinksText">
                                <h3>Render</h3>
                                <a href = "#" class = "btn btn-secondary btn-responsive camera-font" onclick="wireFrame3()">Wire</a>
                                <a href = "#" class = "btn btn-secondary btn-responsive camera-font" onclick="headlight2();">Light</a>                
                            </div>
                        </div>
                    </div>

                </div>


   

                    <div class = "row">
                <!-- X3D model -->
                        <div class="model3D">
                            <x3d id="model2"> 
                                <scene>
                                    <inline nameSpaceName= "model2" mapDEFToID="true" onclick="animateModel();" 
                                    url="assets/x3d/Fennia/Fennia.x3d"></inline>
                                </scene>
                            </x3d>
                    

                               <div class = "card-body">
                                    <div id = "title_fennia" class = "card-title drinksText"></div>
                                    <div id = "subTitle_fennia" class = "card-subtitle drinksText"></div>
                                    <div id = "description_fennia" class = "card-text drinksText"></div>
                                    <div id = "WebDesign_fennia" class = "card-text drinksText"></div>
                                </div>            
                            </div>




                    <div class = "col-sm-4" style = "display:block" >
                        <div class = "card text-left">
                            <div class = "card-header gallery-header">
                                Information
                            </div>
                       
                            <div class = "card-body" id = "information">
                            
                                <div class = "card-text" id = "date_fenniaInformation" class = "drinksText"></div>
                                <div class = "card-text" id = "artist_fenniaInformation" class = "drinksText"></div>
                                <div class = "card-text" id = "material_fenniaInformation" class = "drinksText"></div>
                                <div class = "card-text" id = "dimensions_fenniaInformation" class = "drinksText"></div>
                                <div class = "card-text" id = "museum_fenniaInformation" class = "drinksText"></div>
            
                                <a href="http://collections.vam.ac.uk/item/O72950/fennia-vase-arabia-factory/" class="btn btn-secondary btn-responsive camera-font">Find out More</a>
                                

                            </div>
                            <div class = "card-body" id = "gallery" style="display:none">

                                    <table id = "gallery"></table>

                                </div>
            
                            <div class = "card-header gallery-header">
                    
                                 <a href="javascript:swap3('gallery')" class="btn btn-secondary btn-responsive camera-font">Gallery</a>
                                 <a href="javascript:swap3('information')" class="btn btn-secondary btn-responsive camera-font">Information</a>
            
                               <!-- <div class = "card-text" id = "description_gallery" class = "drinksText"></div> -->
                            </div>
                            <br>
                            <div class = "buttons">
                                    <a class = "btn btn-secondary btn-responsive camera-font" href = "javascript:swap ('china')">China Vase</a>
                                   <a class = "btn btn-secondary btn-responsive camera-font" href = "javascript:swap('favrile')">Favrile</a>
                                   <a class = "btn btn-secondary btn-responsive camera-font" href = "javascript:swap('fennia')">Fennia</a>
                                   <a class = "btn btn-secondary btn-responsive camera-font" href = "javascript:swap('clutha')">Clutha</a>
                               </div>
                            
                        </div>      
                    
                    </div>

                    </div>
                </div>
            </div>     
        </div>   
    </div> 


    <!--- CLUTHA-->
    <div class = "main_contents" id = "clutha" style = "display:none;">

   <!-- X3D MODEL -->

                    <div class = "row">
                        <div class = "col-sm-3">
                            <div class="card-header">
                    
                                <div class = "card-title x3dAnimationSubtitle drinksText">
                                    <h3>Camera</h3>
                                        <a href = "#" class = "btn btn-secondary btn-responsive camera-font" onclick="cameraFront3();">Front</a>
                                        <a href = "#" class = "btn btn-secondary btn-responsive camera-font" onclick="cameraBottom3();">Back</a>
                                        <a href = "#" class = "btn btn-secondary btn-responsive camera-font" onclick="cameraSide3()">Left</a>
                                        <a href = "#" class = "btn btn-secondary btn-responsive camera-font" onclick="cameraTop3()">Top</a>
                                </div>
                            </div>
                        </div>

                        <div class = "col-sm-3">
                            <div class="card-header">
                                <div class = "card-title x3dAnimationSubtitle drinksText">
                                    <h3>Animation</h3>
                                        <a href = "#" class = "btn btn-secondary btn-responsive camera-font" onclick="spin3();">RotX</a>
                                        <a href = "#" class = "btn btn-secondary btn-responsive camera-font" onclick="stopRotation3();">Stop</a> 
                                </div>
                            </div>
                        </div>

                        <div class = "col-sm-3">
                            <div class="card-header">
                                <div class = "card-title x3dAnimationSubtitle drinksText">
                                    <h3>Render</h3>
                                        <a href = "#" class = "btn btn-secondary btn-responsive camera-font" onclick="wireFrame4()">Wire</a>
                                        <a href = "#" class = "btn btn-secondary btn-responsive camera-font" onclick="headlight3();">Light</a>                 
                                </div>
                            </div>
                        </div>

                    </div>


   

                    <div class = "row">
                <!-- X3D model -->
                        <div class="model3D">
                            <x3d id="model3"> 
                                <scene>
                                    <inline nameSpaceName= "model3" mapDEFToID="true" onclick="animateModel();" 
                                    url="assets/x3d/Clutha/CLUTHA.x3d"></inline>
                                </scene>
                            </x3d>
                       
                    

                            <div class = "card-body">
                                <div id = "title_clutha" class = "card-title drinksText"></div>
                                <div id = "subTitle_clutha" class = "card-subtitle drinksText"></div>
                                <div id = "description_clutha" class = "card-text drinksText"></div>
                                <div id = "WebDesign_clutha" class = "card-text drinksText"></div>
                            </div>   
                        </div>
                           
                        <br>



                        <div class = "col-sm-4" style = "display:block" >
                            <div class = "card text-left">
                                <div class = "card-header gallery-header">
                                    Information
                                </div>
                       
                                <div class = "card-body" id = "information">
                            
                                    <div class = "card-text" id = "date_cluthaInformation" class = "drinksText"></div>
                                    <div class = "card-text" id = "artist_cluthaInformation" class = "drinksText"></div>
                                    <div class = "card-text" id = "material_cluthaInformation" class = "drinksText"></div>
                                    <div class = "card-text" id = "dimensions_cluthaInformation" class = "drinksText"></div>
                                    <div class = "card-text" id = "museum_cluthaInformation" class = "drinksText"></div>
            
                                    <a href="http://collections.vam.ac.uk/item/O2619/clutha-vase-dresser-christopher/" class="btn btn-secondary btn-responsive camera-font">Find out More</a>
                                </div>
                           
                                <div class = "card-body" id = "gallery" style="display:none">

                                    <table id = "gallery"></table>

                                </div>
            
                                <div class = "card-header gallery-header">
                    
                                 <a href="javascript:swap3('gallery')" class="btn btn-secondary btn-responsive camera-font">Gallery</a>
                                 <a href="javascript:swap3('information')" class="btn btn-secondary btn-responsive camera-font">Information</a>
        
                                </div>

                                <br>

                                <div class = "buttons">
                                        <a class = "btn btn-secondary btn-responsive camera-font" href = "javascript:swap ('china')">China Vase</a>
                                        <a class = "btn btn-secondary btn-responsive camera-font" href = "javascript:swap('favrile')">Favrile</a>
                                        <a class = "btn btn-secondary btn-responsive camera-font" href = "javascript:swap('fennia')">Fennia</a>
                                        <a class = "btn btn-secondary btn-responsive camera-font" href = "javascript:swap('clutha')">Clutha</a>
                                       
                                </div>
                             
                            </div>      
                    
                        </div>

                    </div>
                </div>
            </div> 
        </div>
    </div>    


    

  <!--FOOTER -->
<footer class = "page-footer">
  <div class = "navbar navbar-expand-sm bg-dark navbar-dark">
    <div class = "container-fluid">
      <div class = "navbar-text float-left">
        <p> &copy 2018 Mobile Web 3D Application</p>
      </div>
      <div class = "navbar-text float-right">
      <p> Virtual Museum</p>
      </div>
    </div>
  </div>
  </footer>

  <script src = "Bootstrap/Jquery.js" crossorigin = "anonymous"></script>
  <script src = "Bootstrap/popper.js" crossorigin = "anonymous"></script>
  <script src = "Bootstrap/bootstrap.js" crossorigin = "anonymous"></script>
  <script src = "Bootstrap/js/jquery-3.2.1.js"></script>
  
  <script src = "js/Spinning.js"></script>
  <script src = "js/fontawesome-all.min.js"></script>

  <script src = "js/swap_restyle.js"></script>
  <script src = "js/custom.js"></script>

  <script src = "Bootstrap/X3DOM.js"></script>

     <!-- Gallery Generator -->
     <script type = "text/javascript" src = "js/gallery_generator.js"></script>

     <script src = "js/getJsonData.js"></script>

     <!-- <script src = "../../js/Script/animation.js"></script> -->


  </body>
</html>