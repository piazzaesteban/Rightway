
var images = [];
images[0] = "assets/espacial/ejer1a.png";
images[1] = "assets/espacial/ejer1b.png";
images[2] = "assets/espacial/ejer1c.png";
images[3] = "assets/espacial/ejer1d.png";
images[4] = "assets/espacial/ejer1m.png";
images[5] = "assets/espacial/ejer2a.png";
images[6] = "assets/espacial/ejer2b.png";
images[7] = "assets/espacial/ejer2c.png";
images[8] = "assets/espacial/ejer2d.png";
images[9] = "assets/espacial/ejer2m.png";
images[10] = "assets/espacial/ejer3a.png";
images[11] = "assets/espacial/ejer3b.png";
images[12] = "assets/espacial/ejer3c.png";
images[13] = "assets/espacial/ejer3d.png";
images[14] = "assets/espacial/ejer3m.png";
images[15] = "assets/espacial/ejer4a.png";
images[16] = "assets/espacial/ejer4b.png";
images[17] = "assets/espacial/ejer4c.png";
images[18] = "assets/espacial/ejer4d.png";
images[19] = "assets/espacial/ejer4m.png";
images[20] = "assets/espacial/ejer5a.png";
images[21] = "assets/espacial/ejer5b.png";
images[22] = "assets/espacial/ejer5c.png";
images[23] = "assets/espacial/ejer5d.png";
images[24] = "assets/espacial/ejer5m.png";


var answers = []
answers[0] = false;
answers[1] = false;
answers[2] = false;
answers[3] = false;
answers[4] = false;

var rightAnswers = [];
rightAnswers[0] = 3;
rightAnswers[1] = 4;
rightAnswers[2] = 2;
rightAnswers[3]= 1;
rightAnswers[4] = 2;


globalIndex = 0;


function startTest(){ 
    location.href = "#test";
    document.getElementById('startBtn').hidden = true;
    document.getElementById('showContent').hidden = false;
    changeImgs(); 
}

function next(){	
	document.getElementById('last').hidden = false;
	checkRadio();

	if (globalIndex >= 20){
		document.getElementById('last').hidden = true;
		document.getElementById('showContent').hidden = true;
		endTest()

	} else{
		globalIndex+=5;
		changeImgs();
	}
	 
}

function last(){
	checkRadio();
	if (globalIndex <=5){
		document.getElementById('last').hidden = true;
	}
	if (globalIndex > 4){
		globalIndex-=5;
		changeImgs();
	}
}

function checkRadio(){
	if (document.getElementById("r1").checked){
		answers[globalIndex/5] = document.getElementById("r1").value;
		document.getElementById("r1").checked = false;
	} else if (document.getElementById("r2").checked){
		answers[globalIndex/5] = document.getElementById("r2").value;
		document.getElementById("r2").checked = false;
	} else if (document.getElementById("r3").checked){
		answers[globalIndex/5] = document.getElementById("r3").value;
		document.getElementById("r3").checked = false;
	} else if (document.getElementById("r4").checked){
		answers[globalIndex/5] = document.getElementById("r4").value;
		document.getElementById("r4").checked = false;
	}
}

function changeImgs(){
	document.getElementById("opA").src =images[globalIndex];
	document.getElementById("opB").src =images[globalIndex+1];  
	document.getElementById("opC").src =images[globalIndex+2];
	document.getElementById("opD").src =images[globalIndex+3]; 
	document.getElementById("img").src =images[globalIndex+4];
}

function regresa_menu (){

    localStorage.setItem("test_3", 1);
    window.location.href = "pruebas.php";

}


function endTest(){
	document.getElementById('startBtn').hidden = true;
	var points = 0;
	for (i = 0; i<5;i++){
		if (answers[i] == rightAnswers[i]){
			points++;
		}
	}
    document.getElementById("resultados").innerHTML = "<h2>Tu resultado: " + points + " puntos.</h2> <button onclick=\"regresa_menu();\" class=\"btn btn- btn-raised btn-lg\" style=\"width: 24%;\">Terminar</button>";

}


