function calculate(){

	var thickness = document.getElementById('thickness');
	var width = document.getElementById('width');
	var length = document.getElementById('length');
	var cub = document.getElementById('cub');
	var count = document.getElementById('count');

	var th,w,l,c,co;

	th = parseInt(thickness.value);
	w = parseInt(width.value);
	l = parseInt(length.value);
	c = parseFloat(cub.value);
	

	var m = th*w*l;

	if (m==0) co = 0;
	else{
		co = c/m*1000000;
	}

	count.value = co.toFixed(2);
}


function calculate2(){

	var thickness = document.getElementById('thickness');
	var width = document.getElementById('width');
	var length = document.getElementById('length');
	var cub = document.getElementById('cub');
	var count = document.getElementById('count');

	var th,w,l,c,co;

	th = parseInt(thickness.value);
	w = parseInt(width.value);
	l = parseInt(length.value);	
	co = parseFloat(count.value);	

	c = th*w*l*co/1000000;

	cub.value = c.toFixed(2);
}


var button1 = document.getElementById('button1');
button1.onclick = calculate;


var button2 = document.getElementById('button2');
button2.onclick = calculate2;



