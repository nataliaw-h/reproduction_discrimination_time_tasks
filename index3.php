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

    #apple, #banana, #lemon, #cherry, #strawberry, #coconut, #pear, #pineapple, #kiwi, #watermelon, #chair, #cupboard, #horse, #lamp, #sink, #sofa, #table, #tv, #wash, #window { 
        max-height: 450px;
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

    #apple, #banana, #lemon, #cherry, #strawberry, #coconut, #pear, #pineapple, #kiwi, #watermelon, #chair, #cupboard, #horse, #lamp, #sink, #sofa, #table, #tv, #wash, #window { 
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

	<img id="apple" src="apple.png">
	<img id="banana" src="banana.png">
	<img id="lemon" src="lemon.png">
	<img id="cherry" src="cherry.png">
	<img id="strawberry" src="strawberry.png">
	<img id="coconut" src="coconut.png">
	<img id="pear" src="pear.png">
	<img id="pineapple" src="pineapple.png">
	<img id="kiwi" src="kiwi.png">
	<img id="watermelon" src="watermelon.png">
	
	<img id="chair" src="chair.png">
	<img id="cupboard" src="cupboard.png">
	<img id="horse" src="horse.png">
	<img id="lamp" src="lamp.png">
	<img id="sink" src="sink.png">
	<img id="sofa" src="sofa.png">
	<img id="table" src="table.png">
	<img id="tv" src="tv.png">
	<img id="wash" src="wash.png">
	<img id="window" src="window.png">
	
    <footer>
        <p>&copy 2022 Natalia Woropay-Hordziejewicz | email: <a href="mailto:nataliaworopay@gmail.com"><font color = "green"> nataliaworopay@gmail.com</font></a></p>
    </footer>

    <div id="1">
        <section>
            <center>Po naciśnięciu przycisku DALEJ zobaczysz dwa obrazki.</center>
            <center>Twoim zadaniem jest określić, który z nich był wyświetlany dłużej na ekranie.</center> 
            <center>Przyciśnij DALEJ by przejść do próby testowej.</center>
            <p><center><button style=" width: 400px; height: 100px; background-color: #e3fbe3; border-radius: 40%" onclick="test()">DALEJ</button></center></p>
    </section>
    </div>

    <div id="2">
        <section>
            <center>PRÓBA TESTOWA</center>
            <center>Wybierz, który obrazek był wyświetlany DŁUŻEJ.</center>
            <p><center><button id='button1' style=" width: 400px; height: 100px; background-color: #e3fbe3; border-radius: 40%" onclick="test2()">1<button id='button2' style=" width: 400px; height: 100px; background-color: #e3fbe3; border-radius: 40%" onclick="test2()">2</button></center></p>
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
            <center>Wybierz obrazek, który był wyświetlany DŁUŻEJ.</center>
            <p>  
            <p><center><button id='button1' style=" width: 400px; height: 100px; background-color: #e3fbe3; border-radius: 40%" onclick="save1()">1<button id='button2' style=" width: 400px; height: 100px; background-color: #e3fbe3; border-radius: 40%" onclick="save2()">2</button></center></p>
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
    

    function test(){

	
	    document.getElementById("1").innerHTML = "";
	
	    setTimeout(
		    function(){ 
			    document.getElementById("apple").style.visibility = "visible";
			}
	    ,1000);

	
	    setTimeout(
		    function(){ 
				document.getElementById("apple").style.visibility = "hidden";
			    }
		,4000);
		
		setTimeout(
		    function(){ 
			    document.getElementById("chair").style.visibility = "visible";
			}
	    ,5000);
		
		setTimeout(
		    function(){ 
				document.getElementById("chair").style.visibility = "hidden";
			    setTimeout(
				    function() {
						document.getElementById('2').style.visibility='visible';},
				1000);
			    }
		,12000);
    }
	
	function test2(){
		document.getElementById('2').style.visibility='hidden';
	    document.getElementById('3').style.visibility='visible';
    }
	
	function restart(){
	    document.getElementById('3').style.visibility='hidden';
	    test();
    }

    function go(){
	    document.getElementById('3').style.visibility='hidden';
	
	    setTimeout(function(){ 
	        document.getElementById("5").innerHTML = "<section2><center>Próba 1</center></section2>";
	        document.getElementById('5').style.visibility='visible';
	        setTimeout(function(){ 
		        document.getElementById('5').style.visibility='hidden';
		        setTimeout(function(){ 
			        trials();
		        }, 1500);
	        } , 1500);
	    } , 1500);
    }
	
	
	var i=1;
    var a=0;
	var b=0;
	var imageName1='';
	var imageName2='';
	
    function trials(){
	    if(i===1) {a=7000; b=8000; imageName1 = 'banana'; imageName2 = 'cupboard';}
	    else if (i===2) {a=8600; b=8300; imageName1 = 'lemon'; imageName2 = 'horse';}
	    else if (i===3) {a=4000; b=2500; imageName1 = 'cherry'; imageName2 = 'lamp';}
	    else if (i===4) {a=2500; b=1600; imageName1 = 'strawberry'; imageName2 = 'sink';}
	    else if (i===5) {a=4800; b=3000; imageName1 = 'coconut'; imageName2 = 'sofa';}
		else if (i===6) {a=10000; b=10000; imageName1 = 'pear'; imageName2 = 'table';}
	    else if (i===7) {a=9000; b=6800; imageName1 = 'pineapple'; imageName2 = 'tv';}
	    else if (i===8) {a=5400; b=4000; imageName1 = 'kiwi'; imageName2 = 'wash';}
        else if (i===9) {a=10000; b=10400; imageName1 = 'coconut'; imageName2 = 'horse';}
	    else if (i===10) {a=3600; b=2000; imageName1 = 'banana'; imageName2 = 'sofa';}
	    else if (i===11) {a=2500; b=1600; imageName1 = 'strawberry'; imageName2 = 'cupboard';}
	    else if (i===12) {a=4800; b=3000; imageName1 = 'cherry'; imageName2 = 'lamp';}
		else if (i===13) {a=10000; b=10400; imageName1 = 'pear'; imageName2 = 'table';}
	    else if (i===14) {a=9000; b=6800; imageName1 = 'lemon'; imageName2 = 'sink';}
	    else if (i===15) {a=5400; b=4000; imageName1 = 'pineapple'; imageName2 = 'wash';}
        else if (i===16) {a=8600; b=8300; imageName1 = 'kiwi'; imageName2 = 'horse';}
	    else if (i===17) {a=4000; b=2500; imageName1 = 'cherry'; imageName2 = 'tv';}
	    else if (i===18) {a=7000; b=8000; imageName1 = 'strawberry'; imageName2 = 'sink';}
	    else if (i===19) {a=3600; b=2000; imageName1 = 'coconut'; imageName2 = 'table';}
		else if (i===20) {a=10000; b=10000; imageName1 = 'banana'; imageName2 = 'wash';}
	    else if (i===21) {a=4800; b=3000; imageName1 = 'cherry'; imageName2 = 'lamp';}
	    else if (i===22) {a=9000; b=6800; imageName1 = 'lemon'; imageName2 = 'sink';}
        else if (i===23) {a=3600; b=2000; imageName1 = 'pineapple'; imageName2 = 'table';}
	    else if (i===24) {a=5400; b=4000; imageName1 = 'cherry'; imageName2 = 'wash';}
        else if (i===25) {a=8600; b=8300; imageName1 = 'kiwi'; imageName2 = 'horse';}
        else if (i===26) {a=2500; b=1600; imageName1 = 'strawberry'; imageName2 = 'cupboard';}
        else if (i===27) {a=10000; b=10400; imageName1 = 'pear'; imageName2 = 'sofa';}
	    else if (i===28) {a=7000; b=8000; imageName1 = 'coconut'; imageName2 = 'sink';}
		else if (i===29) {a=10000; b=10000; imageName1 = 'banana'; imageName2 = 'wash';}
        else if (i===30) {a=4000; b=2500; imageName1 = 'cherry'; imageName2 = 'tv';}
        
	
	    setTimeout(function(){ 
			document.getElementById(imageName1).style.visibility = "visible";
			}
	    ,1000);
  
	    setTimeout(function(){ 
		    document.getElementById(imageName1).style.visibility = "hidden";
		}
		,a);
		
		setTimeout(function(){ 
			document.getElementById(imageName2).style.visibility = "visible";
			}
	    ,1000+a);
  
	    setTimeout(function(){ 
		    document.getElementById(imageName2).style.visibility = "hidden";
				setTimeout(function() {
				    document.getElementById('4').style.visibility='visible';},
				1000);
		}
		,1000+a+b);

    }
	
	function save1(){
	
		document.getElementById('4').style.visibility='hidden';
	
	    if (i===1){
            w1 = 1;
        }
        else if (i===2){
            w2 = 1;
        }
        else if (i===3){
            w3 = 1;
        }
        else if (i===4){
            w4 = 1;
        }
        else if (i===5){
            w5 = 1;
        }
		else if (i===6){
            w6 = 1;
        }
        else if (i===7){
            w7 = 1;
        }
        else if (i===8){
            w8 = 1;
        }
        else if (i===9){
            w9 = 1;
        }
        else if (i===10){
            w10 = 1;
        }
        else if (i===11){
            w11 = 1;
        }
        else if (i===12){
            w12 = 1;
        }
		else if (i===13){
            w13 = 1;
        }
        else if (i===14){
            w14 = 1;
        }
        else if (i===15){
            w15 = 1;
        }
        else if (i===16){
            w16 = 1;
        }
        else if (i===17){
            w17 = 1;
        }
        else if (i===18){
            w18 = 1;
        }
        else if (i===19){
            w19 = 1;
        }
		else if (i===20){
            w20 = 1;
        }
        else if (i===21){
            w21 = 1;
        }
        else if (i===22){
            w22 = 1;
        }
		else if (i===23){
            w23 = 1;
        }
        else if (i===24){
            w24 = 1;
        }
        else if (i===25){
            w25 = 1;
        }
        else if (i===26){
            w26 = 1;
        }
        else if (i===27){
            w27 = 1;
        }
        else if (i===28){
            w28 = 1;
        }
        else if (i===29){
            w29 = 1;
        }
		else if (i===30){
            w30 = 1;
        }
        
        i++;
		sequence();
		
	}
	
	function save2(){
		
		document.getElementById('4').style.visibility='hidden';
	
		if (i===1){
            w1 = 2;
        }
        else if (i===2){
            w2 = 2;
        }
        else if (i===3){
            w3 = 2;
        }
        else if (i===4){
            w4 = 2;
        }
        else if (i===5){
            w5 = 2;
        }
		else if (i===6){
            w6 = 2;
        }
        else if (i===7){
            w7 = 2;
        }
        else if (i===8){
            w8 = 2;
        }
        else if (i===9){
            w9 = 2;
        }
        else if (i===10){
            w10 = 2;
        }
        else if (i===11){
            w11 = 2;
        }
        else if (i===12){
            w12 = 2;
        }
		else if (i===13){
            w13 = 2;
        }
        else if (i===14){
            w14 = 2;
        }
        else if (i===15){
            w15 = 2;
        }
        else if (i===16){
            w16 = 2;
        }
        else if (i===17){
            w17 = 2;
        }
        else if (i===18){
            w18 = 2;
        }
        else if (i===19){
            w19 = 2;
        }
		else if (i===20){
            w20 = 2;
        }
        else if (i===21){
            w21 = 2;
        }
        else if (i===22){
            w22 = 2;
        }
		else if (i===23){
            w23 = 2;
        }
        else if (i===24){
            w24 = 2;
        }
        else if (i===25){
            w25 = 2;
        }
        else if (i===26){
            w26 = 2;
        }
        else if (i===27){
            w27 = 2;
        }
        else if (i===28){
            w28 = 2;
        }
        else if (i===29){
            w29 = 2;
        }
		else if (i===30){
            w30 = 2;
        }
		
		i++;
		sequence();
		
	}
	
	function sequence(){
	
			setTimeout(function(){
	
	        if (i===31) {
		        document.getElementById('6').style.visibility='visible';
		        id = "<?php $id = $_GET['id']; echo $id; ?>";
		        window.location.href = `index4.php?id=${id}&w1=${w1}&w2=${w2}&w3=${w3}&w4=${w4}&w5=${w5}&w6=${w6}&w7=${w7}&w8=${w8}&w9=${w9}&w10=${w10}&w11=${w11}&w12=${w12}&w13=${w13}&w14=${w14}&w15=${w15}&w16=${w16}&w17=${w17}&w18=${w18}&w19=${w19}&w20=${w20}&w21=${w21}&w22=${w22}&w23=${w23}&w24=${w24}&w25=${w25}&w26=${w26}&w27=${w27}&w28=${w28}&w29=${w29}&w30=${w30}`;
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
				            trials();
			            }, 1500);
		            }, 1500);
	            }, 1500);
	        }
	
        }, 1500);
		
	}



</script>

</body>
</html>
  
