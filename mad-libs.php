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
            <div class="d-flex">
                <div>
                    Er heerst paniek...
                </div>
                <div>
                    onkunde
                </div>
            </div>
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
    </div>
 <?php
}

function resulaat_paniek(){
    ?>
    <div class="c1">
        <div class="red-bar">
            <div class="d-flex">
                <div class="btn btn-danger">
                    Er heerst paniek...
                </div>
                <div>
                    onkunde
                </div>
            </div>
        </div>
        <div class="main"> 
            <b>Er heerst paniek...</b>
            <div class="antwoorden">
                <div>Er heerst paniek in het koninkrijk <?=$_POST["land"]?>, Koning egmod is ten einde raad en als koning <?=$_POST["docent"]?> ten einde raad is, dan roept hij zijn ten-einde-aadsheer <?=$_POST["persoon"]?>.</div>
                <div>"<?=$_POST["persoon"]?>! Het is een ramp! het is een schande!"</div>
                <div>"Sire, Majesteit, Uwe luidruchtigheid, wat is er aan de hand?"</div>
                <div>"Mijn <?=$_POST["dier"]?> is verdwenen! Zo maar, zonder waarschuwing. En ik had net <?=$_POST["speelgoed"]?> voor het gekocht!"</div>
                <div>"Majesteit, uw <?=$_POST["dier"]?> komt vast vanzelf weer terug?"</div>
                <div>"Ja, da's leuk en aardig, maar hoe moet ik in de tissentijd"<?=$_POST["bezigheid"]?> leren?</div>
                <div>"Maar Sire, daar kunt u toch uw supercomputer voor gebruiken."</div>
                <div>"<?=$_POST["persoon"]?>, je hebt helemaal gelijk! Wat zou ik doen als ik jou niet had."</div>
                <div>"<?=$_POST["verveelt"]?>, sire."</div>
            </div>
        </div>
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
                <footer>
                    Made by Jeroen :D 
                </footer>
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
        white-space: nowrap;
    }
    .antwoorden{
        margin: 10px;
        text-align:left;

    }
</style>    