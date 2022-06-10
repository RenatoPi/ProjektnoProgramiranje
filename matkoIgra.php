<!DOCTYPE html>
<head>
	<title>Matko Igra</title>
    <meta charset="UTF-8" />        
    <style type="text/css">
        .table {
            display: table;
            border: 1px solid; 
            padding: 5px;
            margin:auto;
        }
        .row {
            display: table-row;
        }
        .atest{
            background: #00ffff;
            max-width: 100%;
            height: 100%;
            display: table-cell;
            border: 1px solid; 
            padding: 5px;
            width: 30%;
            height: 50px;
            text-align: center;
            text-decoration: none;
            vertical-align: middle;
        }
        a {
            background: #00ffff;
            max-width: 100%;
            height: 100%;
            display: table-cell;
            border: 1px solid; 
            padding: 5px;
            width: 45px;
            height: 50px;
            text-align: center;
            text-decoration: none;
            vertical-align: middle;
        }

        input{
            width:80px;
            height:50px;
            font-size: 1.1em;
        }
        summary, details{
        }
    </style>

</head>
<body style="text-align: center">
	<p>
        <?php
        $i=0;
        $x=1;
        $y=1;
        $rj=1;
        $rjesenje=-1.5;
        $ope=1;
        while($i < 10){
            $x = rand(1,100);
            $y = rand(1,100);
            $ope = rand(1,2);
            switch ($ope) {//ovdje case 1-4 odreduju koji ar. operator koristimo
                case ("1"):
                    //echo " + <br>";
                    $ope = " + ";
                    $rjesenje = $x + $y;
                    $rj = $x. $ope. $y;
                    echo("<details><summary>". $rj." = ? </summary>".$rjesenje."</details>");        
                    break;
                case ("2"):
                    //echo " - <br>";
                    $ope = " - ";
                    if($x < $y){
                        $tmp=$x;
                        $x=$y;
                        $y=$tmp;
                    }
                    $rjesenje = $x - $y;
                    $rj = $x. $ope. $y;
                    echo("<details><summary>". $rj." = ? </summary>".$rjesenje."</details>");        
                    break;//3 i 4 necemo generirati, s time sam testirao. Moze biti funkcija za teže razine.
                case ("3"):
                    //echo " × <br>";
                    $ope = " × ";
                    $rjesenje = $x * $y;
                    break;
                case ("4"):
                    //echo " ÷ <br>";
                    $ope = " ÷ ";
                    $rjesenje = $x / $y;
                    break;
                default:
                    echo "žnj";
            }
            $i++;
        }//mozda if koji gleda ako je dvoznamenkasti broj ili ne u rjesenju za leading zero
        /*echo($x . "<br>");
        echo($y . "<br>"); //ovime sam testirao generiranje brojeva  
        echo($ope . "<br>");*/
        ?>
    </p>
    <input type=button value="1"></input>
    <input type=button value="2"></input>
    <input type=button value="3"></input></br>
    <input type=button value="4"></input>
    <input type=button value="5"></input>
    <input type=button value="6"></input></br>
    <input type=button value="7"></input>
    <input type=button value="8"></input>
    <input type=button value="9"></input></br>
    <input type=button value="-"></input>
    <input type=button value="0"></input>
    <input type=button value="+"></input></br>
    <input type=button value="?"></input>
    <input type=button value="Provjera"></input>
    <input type=button value="Izbriši"></input></br>
    
    <div class="table">      
        <div class="row">
            <a href=""> x </a>
            <a href=""> x </a>
            <a href=""> + </a>
            <a href=""> y </a>
            <a href=""> y </a>
            <p>&nbsp&nbsp&nbsp&nbsp&nbsp</p>
            <a href=""> r </a>
            <a href=""> r </a>
            <a href=""> r </a>
        </div>
    </div>
    <!--             
    <div class="table">      
        <div class="row">
            <a href="">1</a>
            <a href="">2</a>
            <a href="">3</a>
        </div>
        <div class="row">
            <a href="">4</a>
            <a href="">5</a>
            <a href="">6</a>
        </div>
        <div class="row">
            <a href="">7</a>
            <a href="">8</a>
            <a href="">9</a>
        </div>
        <div class="row">
            <a href="">-</a>
            <a href="">0</a>
            <a href="">+</a>
        </div>
        <div class="row">
            <a href="">?</a>
            <a href="">Provjeri</a>
            <a href="">Izbriši</a>
        </div>
    </div>-->
</body>
</html>