 
 var fname = document.getElementById('fname');
 var lname = document.getElementById('lname');
 var dob = document.getElementById('dob');
 var user = document.getElementById('user');
 var password = document.getElementById('pass');
 var txt = document.getElementById('txt');
 var submit = document.getElementById('btn');
 var gen1 = document.getElementById('gender1');
 var gen2 = document.getElementById('gender2');
 var gen3 = document.getElementById('gender3');
 var pincode = document.getElementById('pincode');
 var state = document.getElementById('state');
 var gg = document.getElementById('gg');
 

 tg = (aa) => {
	 if(aa.checked)
	 {
		 aa.checked=false;
	 }
	 else
	 {
		 aa.checked=true;
	 }
 }
//  try to make it toggle

gg.onclick = () =>{
	gen1.checked=false;
	gen2.checked=false;
	gen3.checked=false;
}
  
submit.onclick = () => {
// alert('Done');
// 	console.log('worl');
}
