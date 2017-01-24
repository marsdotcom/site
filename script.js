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
	c = parseInt(cub.value);
	co = parseInt(count.value);

	var m = th*w*l;

	if (m==0) co = 0;
	else{
		co = c/m*1000000;
	}

	count.value = co.toFixed(1);
}


var button1 = document.getElementById('button1');
button1.onclick = calculate;
