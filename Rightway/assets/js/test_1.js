/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

var images = [];
var keyEntry = [];

defaultImg = "assets/img/centro.png"
images[0] = "assets/img/flecha1.png";
images[1] = "assets/img/flecha2.png";
images[2] = "assets/img/flecha3.png";
images[3] = "assets/img/flecha4.png";
images[4] = "assets/img/flecha4.png";
images[5] = "assets/img/flecha6.png";
images[6] = "assets/img/flecha7.png";
images[7] = "assets/img/flecha8.png";
images[8] = "assets/img/fin.jpeg";

keyEntry[0] = 39;
keyEntry[1] = 39;
keyEntry[2] = 39;
keyEntry[3] = 39;
keyEntry[4] = 37;
keyEntry[5] = 37;
keyEntry[6] = 37;
keyEntry[7] = 39;

lastKeyPressed = 0;
var x = 0;
points = 0;

function changeImage()
{   

    lastKeyPressed = 0;
    document.onkeydown = checkKey;
    document.getElementById("arrow").src = images[x];
    x++;
    
    if (x <= 8){
        setTimeout("wait()", 1000);
    } 
    
}

function checkKey(e) 
{
    e = e || window.event;
    lastKeyPressed = e.keyCode;
}

function wait(){
    if (x != 0 && lastKeyPressed == keyEntry[x-1]){
        points++;
    }
    document.getElementById("arrow").src = defaultImg;    
    if (x >= 8){
        document.getElementById("arrow").src = images[8]; 
        endMinigame();    
    } else {
        setTimeout("changeImage()", 1750);
    }
}

function startMiniGame(){ 
    location.href = "#test";
    setTimeout("wait()", 1000);
}

function regresa_menu (){

    localStorage.setItem("test_1", 1);
    window.location.href = "pruebas.php";

}

function endMinigame(){

    document.getElementById("resultados").innerHTML = "<h2>Tu resultado: " + points + " puntos.</h2> <button onclick=\"regresa_menu();\" class=\"btn btn- btn-raised btn-lg\" style=\"width: 24%;\">Terminar</button>";

}

