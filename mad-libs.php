<?php
if(isset($_POST["action"])){
    $action = $_POST["action"];

    switch($action){
        case "resultPaniek":
            $result = "resulaat_paniek";
            break; 
    }
}else{
    $result = "form_paniek";
}


function form_paniek(){
 ?>
    <div class="c1">
        <div class="red-bar">
            test
        </div>
        <div class="main"> 
            <b>Er heerst paniek...</b>
            <form method="post">
                <div class="d-flex">
                    <div class="vragen" style="width: 50%; text-align: center" >
                        <div>Welk dier zou je nooit als huisdier willen hebben?</div>
                        <div>Wie is de belangrijkste persoon in je leven?</div>
                        <div>In welk land zou je graag willen wonen?</div>
                        <div>Wat doe je als je je verveelt?</div>
                        <div>Met welk speelgoed speelde je als kind het meest?</div>
                        <div>Bij welke docent spijbel je het liefst?</div>
                        <div>Als je €100.000,- had, wat zou je dan kopen?</div>
                        <div>Wat is je favoriete bezigheid?</div>
                    </div>
                    <div class="vragen" style="width: 50%; text-align: center" >
                        <div><input required type="text" name="dier" id=""></div>
                        <div><input required type="text" name="persoon" id=""></div>
                        <div><input required type="text" name="land" id=""></div>
                        <div><input required type="text" name="verveelt" id=""></div>
                        <div><input required type="text" name="speelgoed" id=""></div>
                        <div><input required type="text" name="docent" id=""></div>  
                        <div><input required type="text" name="kopen" id=""></div>
                        <div><input required type="text" name="bezigheid" id=""></div>
                    </div>
                </div>

                <div class="mx-auto" style="width: 100px;">
                    <button name="action" value="resultPaniek">Versturen</button>
                </div>
            </form>
        </div>
        <footer>
            Made by Jeroen :D 
        </footer>
    </div>
 <?php
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="page">
        <div class="box">
            <div class="title">
                Mad Libs
            </div>
            <div class="content">
                <?=$result()?>
            </div>
        </div>
    </div>
</body>
</html>
<style>
    body{
        background-color: #1f1c1c;
        color: white;
    }
    .title{
        font-size: 70px;
    }
    .page{
        margin: auto;
        width: 80%;
        border: 1px solid red;
    }
    .box{
        padding: 20px;
    }
    .content{
        background-color:white;
        color: black;
        border: 1px solid grey;
    }
    .c1{
        
    }
    .red-bar{
        background-color: red;
        font-size: 25px;
        padding: 10px; 
        color: white;
    }
    .main{
        padding: 20px;
        font-size: 25px;    
    }
    footer{
        background-color: grey;
        padding: 15px;
        font-weight: bold;
        font-size: 20px;
        text-align: center;
    }
    .vragen > div{
        height: 40px;
        margin: 10px;
        /* text-align:left; */
        white-space: nowrap;
    }
</style>    