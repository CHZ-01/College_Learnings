const logpg= document.querySelector('.logpg');
const signup= document.querySelector('.signup');
const login= document.querySelector('.login');

signup.addEventListener('click',()=>{
     logpg.classList.add('active');
} 
);

login.addEventListener('click',()=>{
     logpg.classList.remove('active');
} 
);

function passcheck()
{
	var a=document.getElementById("pass1").value;
	var b=document.getElementById("pass2").value;	
	if(a!=b)
	{
		document.getElementById("message").innerHTML="**PASSWORD DOESN'T MATCH!**";
		return false;
	}
}