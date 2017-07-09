var images = [];
images[0] = "assets/abstract/Figura1r1-01.png";
images[1] = "assets/abstract/Figura1r2-01.png";
images[2] = "assets/abstract/Figura1r3-01.png";
images[3] = "assets/abstract/Figura1r4-01.png";
images[4] = "assets/abstract/Figura1-01.png";
images[5] = "assets/abstract/Figura2r1-01.png";
images[6] = "assets/abstract/Figura2r2-01.png";
images[7] = "assets/abstract/Figura2r3-01.png";
images[8] = "assets/abstract/Figura2r4-01.png";
images[9] = "assets/abstract/Figura2-01.png";
images[10] = "assets/abstract/Figura3r1-01.png";
images[11] = "assets/abstract/Figura3r2-01.png";
images[12] = "assets/abstract/Figura3r3-01.png";
images[13] = "assets/abstract/Figura3r4-01.png";
images[14] = "assets/abstract/Figura3-01.png";
images[15] = "assets/abstract/Figura4r1-01.png";
images[16] = "assets/abstract/Figura4r2-01.png";
images[17] = "assets/abstract/Figura4r3-01.png";
images[18] = "assets/abstract/Figura4r4-01.png";
images[19] = "assets/abstract/Figura4-01.png";



var answers = []
answers[0] = false;
answers[1] = false;
answers[2] = false;
answers[3] = false;


var rightAnswers = [];
rightAnswers[0] = 1;
rightAnswers[1] = 1;
rightAnswers[2] = 2;
rightAnswers[3]= 4;



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

	if (globalIndex >= 15){
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

    localStorage.setItem("test_2", 1);
    window.location.href = "pruebas.php";

}

function endTest(){
	document.getElementById('startBtn').hidden = true;
	var points = 0;
	for (i = 0; i<4;i++){
		if (answers[i] == rightAnswers[i]){
			points++;
		}
	}
    document.getElementById("resultados").innerHTML = "<h2>Tu resultado: " + points + " puntos.</h2> <button onclick=\"regresa_menu();\" class=\"btn btn- btn-raised btn-lg\" style=\"width: 24%;\">Terminar</button>";

}
