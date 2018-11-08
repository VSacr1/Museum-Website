//Javascript Document

$(document).ready(function()
///window.onload=function()
{/*
    console.log("meow1")

    var meow = ($.getJSON('js/Model/data.json', function(jsonObj){console.log("woof") }));
    console.log(meow)
    console.log($.getJSON('js/Model/data.json'));
*/
    $.getJSON('../assignment/application/model/data.json', function(jsonObj) {
        
        console.log(jsonObj); 

        //Get the home page main text data
        $('#title_home').html('<h2>' + jsonObj.pageTextData[0].title + '</h2>' );
        $('#subTitle_home').html('<h3>' + jsonObj.pageTextData[0].subTitle + '</h3>' );
        $('#description_home').html('<p>' + jsonObj.pageTextData[0].description + '</p>');

        //Get the home page China column text data
        $('#title_left').html('<h2>' + jsonObj.pageTextData[1].title + '</h2>' );
        $('#subTitle_left').html('<h3>' + jsonObj.pageTextData[1].subTitle + '</h3>' );
        $('#description_left').html('<p>' + jsonObj.pageTextData[1].description + '</p>');

        //Get the home page Favrile column text data
        $('#title_Favrilecentre').html('<h2>' + jsonObj.pageTextData[2].title + '</h2>' );
        $('#subTitle_Favrilecentre').html('<h3>' + jsonObj.pageTextData[2].subTitle + '</h3>' );
        $('#description_Favrilecentre').html('<p>' + jsonObj.pageTextData[2].description + '</p>');

        //Get the home page Fennia column text data
        $('#title_centre2').html('<h2>' + jsonObj.pageTextData[3].title + '</h2>' );
        $('#subTitle_centre2').html('<h3>' + jsonObj.pageTextData[3].subTitle + '</h3>' );
        $('#description_centre2').html('<p>' + jsonObj.pageTextData[3].description + '</p>');        

        //Get the home page clutha column text data
        $('#title_right').html('<h2>' + jsonObj.pageTextData[4].title + '</h2>' );
        $('#subTitle_right').html('<h3>' + jsonObj.pageTextData[4].subTitle + '</h3>' );
        $('#description_right').html('<p>' + jsonObj.pageTextData[4].description + '</p>');

        //Get the china main text data
        $('#title_china').html('<h1>' + jsonObj.pageTextData[5].title + '</h1>' );
        $('#subTitle_china').html('<h4>' + jsonObj.pageTextData[5].subTitle + '</h4>' );
        $('#description_china').html('<p>' + jsonObj.pageTextData[5].description + '</p>');
        $('#WebDesign_china').html('<p>' + jsonObj.pageTextData[5].WebDesign + '</p>');

        //Get the favrile main text data
        $('#title_favrile').html('<h1>' + jsonObj.pageTextData[6].title + '</h1>' );
        $('#subTitle_favrile').html('<h4>' + jsonObj.pageTextData[6].subTitle + '</h4>' );
        $('#description_favrile').html('<p>' + jsonObj.pageTextData[6].description + '</p>');
        $('#WebDesign_favrile').html('<p>' + jsonObj.pageTextData[6].WebDesign + '</p>');

        //Get the fennia main text data
        $('#title_fennia').html('<h1>' + jsonObj.pageTextData[7].title + '</h1>' );
        $('#subTitle_fennia').html('<h4>' + jsonObj.pageTextData[7].subTitle + '</h4>' );
        $('#description_fennia').html('<p>' + jsonObj.pageTextData[7].description + '</p>');
        $('#WebDesign_fennia').html('<p>' + jsonObj.pageTextData[7].WebDesign + '</p>');

        //Get the Clutha main text data
        $('#title_clutha').html('<h1>' + jsonObj.pageTextData[8].title + '</h1>' );
        $('#subTitle_clutha').html('<h4>' + jsonObj.pageTextData[8].subTitle + '</h4>' );
        $('#description_clutha').html('<p>' + jsonObj.pageTextData[8].description + '</p>');
        $('#WebDesign_clutha').html('<p>' + jsonObj.pageTextData[8].WebDesign + '</p>');

        //Get the Gallery main text data
        $('#title_gallery').html('<h1>' + jsonObj.pageTextData[9].title + '</h1>' );
        $('#subTitle_gallery').html('<h4>' + jsonObj.pageTextData[9].subTitle + '</h4>' );
        $('#description_gallery').html('<p>' + jsonObj.pageTextData[9].description + '</p>');

        //Get the Camera main text data
        $('#title_camera').html('<h1>' + jsonObj.pageTextData[10].title + '</h2>' );
        $('#subTitle_camera').html('<h4>' + jsonObj.pageTextData[10].subTitle + '</h3>' );
        $('#description_camera').html('<p>' + jsonObj.pageTextData[10].description + '</p>');


        //Get the China Information text data
        $('#title_chinaInformation').html('<h1>' + jsonObj.pageTextData[11].title + '</h2>' );
        $('#subTitle_chinaInformation').html('<h4>' + jsonObj.pageTextData[11].subTitle + '</h3>' );
        $('#description_chinaInformation').html('<p>' + jsonObj.pageTextData[11].description + '</p>');
        $('#date_chinaInformation').html('<p>' + jsonObj.pageTextData[11].date + '</p>');
        $('#artist_chinaInformation').html('<p>' + jsonObj.pageTextData[11].artist + '</p>');
        $('#material_chinaInformation').html('<p>' + jsonObj.pageTextData[11].material + '</p>');
        $('#dimensions_chinaInformation').html('<p>' + jsonObj.pageTextData[11].dimensions + '</p>');
        $('#museum_chinaInformation').html('<p>' + jsonObj.pageTextData[11].museum + '</p>');

        //Get the Favrile Information text data
        $('#title_favrileInformation').html('<h1>' + jsonObj.pageTextData[12].title + '</h2>' );
        $('#subTitle_favrileInformation').html('<h4>' + jsonObj.pageTextData[12].subTitle + '</h3>' );
        $('#description_favrileInformation').html('<p>' + jsonObj.pageTextData[12].description + '</p>');
        $('#date_favrileInformation').html('<p>' + jsonObj.pageTextData[12].date + '</p>');
        $('#artist_favrileInformation').html('<p>' + jsonObj.pageTextData[12].artist + '</p>');
        $('#material_favrileInformation').html('<p>' + jsonObj.pageTextData[12].material + '</p>');
        $('#dimensions_favrileInformation').html('<p>' + jsonObj.pageTextData[12].dimensions + '</p>');
        $('#museum_favrileInformation').html('<p>' + jsonObj.pageTextData[12].museum + '</p>');

        //Get the Fennia Information text data
        $('#title_fenniaInformation').html('<h1>' + jsonObj.pageTextData[13].title + '</h2>' );
        $('#subTitle_fenniaInformation').html('<h4>' + jsonObj.pageTextData[13].subTitle + '</h3>' );
        $('#description_fenniaInformation').html('<p>' + jsonObj.pageTextData[13].description + '</p>');
        $('#date_fenniaInformation').html('<p>' + jsonObj.pageTextData[13].date + '</p>');
        $('#artist_fenniaInformation').html('<p>' + jsonObj.pageTextData[13].artist + '</p>');
        $('#material_fenniaInformation').html('<p>' + jsonObj.pageTextData[13].material + '</p>');
        $('#dimensions_fenniaInformation').html('<p>' + jsonObj.pageTextData[13].dimensions + '</p>');
        $('#museum_fenniaInformation').html('<p>' + jsonObj.pageTextData[13].museum + '</p>');

        //Get the Clutha Information text data
        $('#title_cluthaInformation').html('<h1>' + jsonObj.pageTextData[14].title + '</h2>' );
        $('#subTitle_cluthaInformation').html('<h4>' + jsonObj.pageTextData[14].subTitle + '</h3>' );
        $('#description_cluthaInformation').html('<p>' + jsonObj.pageTextData[14].description + '</p>');
        $('#date_cluthaInformation').html('<p>' + jsonObj.pageTextData[14].date + '</p>');
        $('#artist_cluthaInformation').html('<p>' + jsonObj.pageTextData[14].artist + '</p>');
        $('#material_cluthaInformation').html('<p>' + jsonObj.pageTextData[14].material + '</p>');
        $('#dimensions_cluthaInformation').html('<p>' + jsonObj.pageTextData[14].dimensions + '</p>');
        $('#museum_cluthaInformation').html('<p>' + jsonObj.pageTextData[14].museum + '</p>');
        //add image paths to the json file;
        //add paths to the 3d assests in the data.json file. 
        //final assignment will swap json for SQLite database
    });
}); 

