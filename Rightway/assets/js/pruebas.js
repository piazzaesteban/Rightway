width_1 = 60;
width_2 = 16.7;

if (localStorage.getItem("test_1")==1) {

	document.getElementById('test_1').innerHTML = document.getElementById('test_1').innerHTML + " <i class=\"fa fa-check\" style=\"margin-left: 5px;\"></i>"
	document.getElementById('test_1').classList.remove("btn-primary");
	document.getElementById("test_1").classList.add('btn-default');
	if (width_1<100) {width_1 = width_1 + 20;}

}

if (localStorage.getItem("test_2")==1) {

	document.getElementById('test_2').innerHTML = document.getElementById('test_2').innerHTML + " <i class=\"fa fa-check\" style=\"margin-left: 5px;\"></i>"
	document.getElementById('test_2').classList.remove("btn-primary");
	document.getElementById("test_2").classList.add('btn-default');
	if (width_1<100) {width_1 = width_1 + 20;}

}

if (localStorage.getItem("test_3")==1) {

	document.getElementById('test_3').innerHTML = document.getElementById('test_3').innerHTML + " <i class=\"fa fa-check\" style=\"margin-left: 5px;\"></i>"
	document.getElementById('test_3').classList.remove("btn-primary");
	document.getElementById("test_3").classList.add('btn-default');
	if (width_2<100) {width_2 = width_2 + 16.7;}
	
}

document.getElementById("probar_1").style.width = width_1 + "%";
document.getElementById("probar_2").style.width = width_2 + "%";