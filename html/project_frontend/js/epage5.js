var t1=document.getElementById("t1");
var result1=document.getElementById("result1");
var limit1=50;
result1.textContent=0+"/"+limit1;
t1.addEventListener( "input" , function ( )
{
	var textLength1=t1.value.length;
	result1.textContent= textLength1+"/"+limit1;
});


var t2=document.getElementById("t2");
var result2=document.getElementById("result2");
var limit2=300;
result2.textContent=0+"/"+limit2;
t2.addEventListener( "input" , function ( )
{
	var textLength2=t2.value.length;
	result2.textContent= textLength2+"/"+limit2;
});