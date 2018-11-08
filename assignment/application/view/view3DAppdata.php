<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>X3D Model Data</title>
        <style>
        h1 {
            color:red; 
            margin-left: 5px;
        }
        h2 {
            color: blue;
            margin: 5px; 
        }

        p{
            color: green;
            margin-left: 5px; 
        }

        .imgBox {
            padding: 0.25rem; 
            margin-top: 5px; 
            margin-bottom: 5px; 
            border: 1px solid #dee2e6;
            border-radius: 0.25rem; 
            width: 300px; 
        }
        
        .boxModel{
            border: 3px solid rgba(0,1,0,1.0);
            padding: 5px; 
            float: left; 
            margin: 5px; 
            width: 220px; 
            height: auto; 
        }

        .boxText {
            border: 1px solid rgba(1,0,0,1.0);
            padding: 5px; 
            float: left; 
            margin: 5px; 
            width: 220px; 
            height: auto;
        }
        </style>
</head>
<body>
        <h1>Model_3D Data returned from the SQLite database</h1>
            <?php for ($i=0; $i <count ($data); $i++){ ?>
            <div class="boxModel">
                <!--<div class "boxText">
                    <h2><?php echo $data[$i]['Id'] ?></h2>
                </div>-->
                <div class="boxText">
                    <h2><?php echo $data[$i]['title'] ?></h2>
                </div>
                <div class="boxText">
                    <h2><?php echo $data[$i]['subtitle'] ?></h2>
                </div>
                <div class="boxText">
                    <h2><?php echo $data[$i]['decription'] ?></h2>
                </div>
                <div class="boxText">
                    <h2><?php echo $data[$i]['webdesign'] ?></h2>
                </div>
				 <div class="boxText">
                    <h2><?php echo $data[$i]['modeldate'] ?></h2>
                </div>
				<div class="boxText">
                    <h2><?php echo $data[$i]['artist'] ?></h2>
                </div>
				 <div class="boxText">
                    <h2><?php echo $data[$i]['material'] ?></h2>
                </div>
				<div class="boxText">
                    <h2><?php echo $data[$i]['dimensions'] ?></h2>
                </div>
				<div class="boxText">
                    <h2><?php echo $data[$i]['museum'] ?></h2>
                </div>
                <?php } ?>
</body>
</html>