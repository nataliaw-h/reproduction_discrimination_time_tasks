<!DOCTYPE html>
<html lang="pl">
<head>
    
    <meta name="viewport" content="850"/>
    <meta charset="utf-8">
    <title>Eksperyment</title>
    <meta name="author" content="Natalia Woropay-Hordziejewicz">
    <link rel="stylesheet" href="mystyle.css">

<style>
@media only screen and (max-width: 991px) {
    #on, #off { 
        max-height: 800px;
        visibility: hidden; 
        margin: 0 auto;
        position: absolute;
        top: 30%;
        left: 50%;
        margin-right: -50%;
        transform: translate(-50%, -50%);
    }


    section {
        z-index: 999;
        margin: 0 auto;
        background: green;
        color: white;
        border-radius: 1em;
        padding: 1em;
        position: absolute;
        top: 75%;
        left: 50%;
        margin-right: -50%;
        transform: translate(-50%, -50%);
        font-size: 40px;
    }

    section2 {
        z-index:999;
        margin: 0 auto;
        background: green;
        color: white;
        border-radius: 1em;
        padding: 1em;
        position: absolute;
        top: 50%;
        left: 50%;
        margin-right: -50%;
        transform: translate(-50%, -50%);
        font-size: 80px;

    }

    button {
        font-size: 60px;
    }

}

@media only screen and (min-width: 992px) {

    #on, #off { 
        max-height: 300px;
        visibility: hidden; 
        margin: 0 auto;
        position: absolute;
        top: 30%;
        left: 50%;
        margin-right: -50%;
        transform: translate(-50%, -50%);
    }

    section {
        z-index: 999;
        margin: 0 auto;
        background: green;
        color: white;
        border-radius: 1em;
        padding: 1em;
        position: absolute;
        top: 70%;
        left: 50%;
        margin-right: -50%;
        transform: translate(-50%, -50%);
        font-size: 20px;
    }

    section2 {
        z-index:999;
        margin: 0 auto;
        background: green;
        color: white;
        border-radius: 1em;
        padding: 1em;
        position: absolute;
        top: 50%;
        left: 50%;
        margin-right: -50%;
        transform: translate(-50%, -50%);
        font-size: 50px;
    }

    button {
        font-size: 20px;
    }
}
</style>
    
</head>

<body>	

	<img id="on" src="on.png">
	<img id="off" src="off.png">

    <footer>
        <p>&copy 2022 Natalia Woropay-Hordziejewicz | email: <a href="mailto:nataliaworopay@gmail.com"><font color = "green"> nataliaworopay@gmail.com</font></a></p>
    </footer>

    <div id="1">
        <section>
            <center>Po naciśnięciu przycisku DALEJ żarówka pokazana powyżej zapali się. Po chwili żarówka zgaśnie.</center>
            <center>Twoim zadaniem jest zaświecić żarówkę, poprzez przytrzymanie przycisku w taki sposób, by jak najdokładnej odtworzyć czas, w którym była włączona.</center> 
            <center>Przyciśnij DALEJ by przejść do próby testowej.</center>
            <p><center><button style=" width: 400px; height: 100px; background-color: #e3fbe3; border-radius: 50%" onclick="bulb_trial()">DALEJ</button></center></p>
    </section>
    </div>

    <div id="2">
        <section>
            <center>PRÓBA TESTOWA</center>
            <center>Kliknij i przytrzymaj przycisk by odtworzyć czas, w którym żarówka była włączona.</center>
            <p><center><button id='button' style=' width: 800px; height: 200px; background-color: #e3fbe3; border-radius: 50%'></button></center>
        </section>
    </div>

    <div id="3">
        <section>
            <center>Przyciśnij RESTART by powtórzyć próbę testową.</center>
            <center>Przyciśnij START by rozpocząć badanie. Po rozpoczęciu badania nastąpi 30 powtórzeń testu.</center>
            <p><center><button style=" width: 400px; height: 100px; background-color: #e3fbe3; border-radius: 50%" onclick="restart()">RESTART</button> <button style=" width: 400px; height: 100px; background-color: #e3fbe3; border-radius: 50%" onclick="go()">START</button></center>
        </section>
    </div>

    <div id="4">
        <section>
            <center>Teraz Twoja kolej! Kliknij i przytrzymaj przycisk by odtworzyć czas.</center>
            <p>  
            <center> <button id="button2" style=" width: 800px; height: 200px; background-color: #e3fbe3; border-radius: 50%"></button></center>
        </section>
    </div>
    <center> <p id="time"></p></center>

    <div id="5">
        <section2>
            <center>Kolejna próba</center>
        </section2>
    </div>

    <div id="6">
        <section2>
            <center>Koniec</center>
        </section2>
    </div>

<script>

    document.getElementById('2').style.visibility='hidden';
    document.getElementById('3').style.visibility='hidden';
    document.getElementById('4').style.visibility='hidden';
    document.getElementById('5').style.visibility='hidden';
    document.getElementById('6').style.visibility='hidden';

    var start=0;
    var stop=0;
    var time=0;

    var id;
    var w1=0;
    var w2=0;
    var w3=0;
    var w4=0;
    var w5=0;
    var w6=0;
    var w7=0;
    var w8=0;
    var w9=0;
    var w10=0;
    var w11=0;
    var w12=0;
    var w13=0;
    var w14=0;
    var w15=0;
    var w16=0;
    var w17=0;
    var w18=0;
    var w19=0;
    var w20=0;
    var w21=0;
    var w22=0;
    var w23=0;
    var w24=0;
    var w25=0;
    var w26=0;
    var w27=0;
    var w28=0;
    var w29=0;
    var w30=0;
    
    document.getElementById("off").style.visibility = "visible";

    function bulb_trial(){

	
	    document.getElementById("1").innerHTML = "";
	
	    setTimeout(
		    function(){ 
		        document.getElementById("off").style.visibility = "hidden";
			    document.getElementById("on").style.visibility = "visible";
			    //start = new Date() / 1000;
			}
	    ,1000);

	
	    setTimeout(
		    function(){ 

			    document.getElementById("on").style.visibility = "hidden";
			    document.getElementById("off").style.visibility = "visible";
			    //stop = new Date() / 1000;
			    //document.getElementById("time").innerHTML = stop - start;
			    setTimeout(
				    function() {document.getElementById('2').style.visibility='visible';},
				1000);
			    }
		,6000);
		
		

    }

    document.getElementById("button").addEventListener("mousedown", down_trial);
    document.getElementById("button").addEventListener("mouseup", up_trial);

    document.getElementById("button").addEventListener("touchstart", down_trial);
    document.getElementById("button").addEventListener("touchend", up_trial);

    function down_trial() {
        document.getElementById("off").style.visibility = "hidden";
        document.getElementById("on").style.visibility = "visible";
    }


    function up_trial() {  
  
        document.getElementById("button").innerHTML = "";
  
        document.getElementById("on").style.visibility = "hidden";
        document.getElementById("off").style.visibility = "visible";
        document.getElementById('2').style.visibility='hidden';
  
        setTimeout(function(){ 

	        document.getElementById('3').style.visibility='visible';
        }, 1500);
    } 

    function restart(){
	    document.getElementById('3').style.visibility='hidden';
	    bulb_trial();
    }

    function go(){
        document.getElementById("off").style.visibility = "hidden";
	    document.getElementById('3').style.visibility='hidden';
	
	    setTimeout(function(){ 
	        document.getElementById("5").innerHTML = "<section2><center>Próba 1</center></section2>";
	        document.getElementById('5').style.visibility='visible';
	        setTimeout(function(){ 
		        document.getElementById('5').style.visibility='hidden';
		        setTimeout(function(){ 
			        bulb();
		        }, 1500);
	        } , 1500);
	    } , 1500);
    }

    var i=1;
    var a=0;
    function bulb(){
	    if(i===1) {a=6000}
	    else if (i===2){a=8560}
	    else if (i===3) {a=3240}
	    else if (i===4) {a=13450}
	    else if (i===5) {a=2970}
        else if (i===6){a=7400}
	    else if (i===7) {a=1990}
	    else if (i===8) {a=9360}
	    else if (i===9) {a=4120}
        else if (i===10){a=11340}
	    else if (i===11) {a=6000}
	    else if (i===12) {a=8560}
	    else if (i===13) {a=3240}
        else if (i===14){a=13450}
	    else if (i===15) {a=2970}
	    else if (i===16) {a=7400}
	    else if (i===17) {a=1990}
        else if (i===18){a=9360}
	    else if (i===19) {a=4120}
	    else if (i===20) {a=11340}
	    else if (i===21) {a=6000}
        else if (i===22){a=8560}
	    else if (i===23) {a=3240}
	    else if (i===24) {a=13450}
	    else if (i===25) {a=2970}
        else if (i===26){a=7400}
	    else if (i===27) {a=1990}
	    else if (i===28) {a=9360}
	    else if (i===29) {a=4120}
        else if (i===30) {a=11340}

        document.getElementById("off").style.visibility = "visible";
	
	    setTimeout(function(){ 
			document.getElementById("off").style.visibility = "hidden";
            document.getElementById("on").style.visibility = "visible";
			}
	    ,1000);
  
	    setTimeout(function(){ 
			document.getElementById("off").style.visibility = "visible";
            document.getElementById("on").style.visibility = "hidden";
				setTimeout(function() {
				    document.getElementById('4').style.visibility='visible';},
				1000);
		}
		,a);
	
	i++;

    }

    document.getElementById("button2").addEventListener("mousedown", down);
    document.getElementById("button2").addEventListener("mouseup", up);

    document.getElementById("button2").addEventListener("touchstart", down);
    document.getElementById("button2").addEventListener("touchend", up);

    function down() {
  
        start = new Date() / 1000;
  
		document.getElementById("off").style.visibility = "hidden";
        document.getElementById("on").style.visibility = "visible";
  
    }

    function up() {  

        var stop = new Date() / 1000;
  
        document.getElementById("button2").innerHTML = "";
  
        document.getElementById('4').style.visibility='hidden';

		document.getElementById("on").style.visibility = "hidden";
        document.getElementById("off").style.visibility = "visible";

        //document.getElementById("time").innerHTML = stop - start;
  
        if (i===2){
            w1 = stop - start;
        }
        else if (i===3){
            w2 = stop - start;
        }
        else if (i===4){
            w3 = stop - start;
        }
        else if (i===5){
            w4 = stop - start;
        }
        else if (i===6){
            w5 = stop - start;
        }
        else if (i===7){
            w6 = stop - start;
        }
        else if (i===8){
            w7 = stop - start;
        }
        else if (i===9){
            w8 = stop - start;
        }
        else if (i===10){
            w9 = stop - start;
        }
        else if (i===11){
            w10 = stop - start;
        }
        else if (i===12){
            w11 = stop - start;
        }
        else if (i===13){
            w12 = stop - start;
        }
        else if (i===14){
            w13 = stop - start;
        }
        else if (i===15){
            w14 = stop - start;
        }
        else if (i===16){
            w15 = stop - start;
        }
        else if (i===17){
            w16 = stop - start;
        }
        else if (i===18){
            w17 = stop - start;
        }
        else if (i===19){
            w18 = stop - start;
        }
        else if (i===20){
            w19 = stop - start;
        }
        else if (i===21){
            w20 = stop - start;
        }
        else if (i===22){
            w21 = stop - start;
        }
        else if (i===23){
            w22 = stop - start;
        }
        else if (i===24){
            w23 = stop - start;
        }
        else if (i===25){
            w24 = stop - start;
        }
        else if (i===26){
            w25 = stop - start;
        }
        else if (i===27){
            w26 = stop - start;
        }
        else if (i===28){
            w27 = stop - start;
        }
        else if (i===29){
            w28 = stop - start;
        }
        else if (i===30){
            w29 = stop - start;
        }
        else if (i===31){
            w30 = stop - start;
        }
  
        setTimeout(function(){
	

		document.getElementById("off").style.visibility = "hidden";
	
	        if (i===31) {
		        document.getElementById('6').style.visibility='visible';
		        id = "<?php $id = $_GET['id']; echo $id; ?>";
		        window.location.href = `index2.php?id=${id}&w1=${w1}&w2=${w2}&w3=${w3}&w4=${w4}&w5=${w5}&w6=${w6}&w7=${w7}&w8=${w8}&w9=${w9}&w10=${w10}&w11=${w11}&w12=${w12}&w13=${w13}&w14=${w14}&w15=${w15}&w16=${w16}&w17=${w17}&w18=${w18}&w19=${w19}&w20=${w20}&w21=${w21}&w22=${w22}&w23=${w23}&w24=${w24}&w25=${w25}&w26=${w26}&w27=${w27}&w28=${w28}&w29=${w29}&w30=${w30}`;
	        }
	        else {
	            setTimeout(function(){
		            if (i===2){
		                document.getElementById("5").innerHTML = "<section2><center>Próba 2</center></section2>";
		                }
		            else if (i===3){
		                document.getElementById("5").innerHTML = "<section2><center>Próba 3</center></section2>";
		            }
		            else if (i===4){
		                document.getElementById("5").innerHTML = "<section2><center>Próba 4</center></section2>";
		            }
		            else if (i===5){
		                document.getElementById("5").innerHTML = "<section2><center>Próba 5</center></section2>";
		            }
                    else if (i===6){
		                document.getElementById("5").innerHTML = "<section2><center>Próba 6</center></section2>";
		            }
		            else if (i===7){
		                document.getElementById("5").innerHTML = "<section2><center>Próba 7</center></section2>";
		            }
		            else if (i===8){
		                document.getElementById("5").innerHTML = "<section2><center>Próba 8</center></section2>";
		            }
                    else if (i===9){
		                document.getElementById("5").innerHTML = "<section2><center>Próba 9</center></section2>";
		            }
		            else if (i===10){
		                document.getElementById("5").innerHTML = "<section2><center>Próba 10</center></section2>";
		            }
		            else if (i===11){
		                document.getElementById("5").innerHTML = "<section2><center>Próba 11</center></section2>";
		            }
                    else if (i===12){
		                document.getElementById("5").innerHTML = "<section2><center>Próba 12</center></section2>";
		            }
		            else if (i===13){
		                document.getElementById("5").innerHTML = "<section2><center>Próba 13</center></section2>";
		            }
		            else if (i===14){
		                document.getElementById("5").innerHTML = "<section2><center>Próba 14</center></section2>";
		            }
                    else if (i===15){
		                document.getElementById("5").innerHTML = "<section2><center>Próba 15</center></section2>";
		            }
		            else if (i===16){
		                document.getElementById("5").innerHTML = "<section2><center>Próba 16</center></section2>";
		            }
		            else if (i===17){
		                document.getElementById("5").innerHTML = "<section2><center>Próba 17</center></section2>";
		            }
                    else if (i===18){
		                document.getElementById("5").innerHTML = "<section2><center>Próba 18</center></section2>";
		            }
		            else if (i===19){
		                document.getElementById("5").innerHTML = "<section2><center>Próba 19</center></section2>";
		            }
		            else if (i===20){
		                document.getElementById("5").innerHTML = "<section2><center>Próba 20</center></section2>";
		            }
                    else if (i===21){
		                document.getElementById("5").innerHTML = "<section2><center>Próba 21</center></section2>";
		            }
		            else if (i===22){
		                document.getElementById("5").innerHTML = "<section2><center>Próba 22</center></section2>";
		            }
		            else if (i===23){
		                document.getElementById("5").innerHTML = "<section2><center>Próba 23</center></section2>";
		            }
                    else if (i===24){
		                document.getElementById("5").innerHTML = "<section2><center>Próba 24</center></section2>";
		            }
		            else if (i===25){
		                document.getElementById("5").innerHTML = "<section2><center>Próba 25</center></section2>";
		            }
		            else if (i===26){
		                document.getElementById("5").innerHTML = "<section2><center>Próba 26</center></section2>";
		            }
                    else if (i===27){
		                document.getElementById("5").innerHTML = "<section2><center>Próba 27</center></section2>";
		            }
		            else if (i===28){
		                document.getElementById("5").innerHTML = "<section2><center>Próba 28</center></section2>";
		            }
		            else if (i===29){
		                document.getElementById("5").innerHTML = "<section2><center>Próba 29</center></section2>";
		            }
                    else if (i===30){
		                document.getElementById("5").innerHTML = "<section2><center>Próba 30</center></section2>";
		            }
		            document.getElementById('5').style.visibility='visible';
		            setTimeout(function(){
			            document.getElementById('5').style.visibility='hidden';
			            setTimeout(function(){
				            bulb();
			            }, 1500);
		            }, 1500);
	            }, 1500);
	        }
	
        }, 1500);

    } 

</script>

</body>
</html>