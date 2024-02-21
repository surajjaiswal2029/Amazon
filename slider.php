<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<div class="pp1">
<div class="dd1"><img class="dd2" src="ss.png"> </div>	
<div class="dd1"><img class="dd4" src="ss1.png"> </div>	

<span class="jj1" onclick="kk(-1)"></span>
<span class="jj2" onclick="kk(1)"></span>


</div>
<style type="text/css">
	
.pp1{
height: 260px;
width: 100%;
background-color: red;
border: 1px solid white;
position: relative;
}
.dd1{
height: 300px;
width: 100%;
position:absolute;
display: none;
top: 0px;
left: 0px;
z-index: 5;

}



.dd2{
height: 260px;
width: 100%;

}

.dd4{
height: 260px;
width: 100%;	
}
.jj1{
position: absolute;
color: white;
font-size: 30px;
border: 1px solid red;
background-color: white;

}

</style>

</body>
</html>

<script type="text/javascript">
	
fn=0;
function kk(v){
	fn=fn=v
	slider(fn)
}
auto1()
function auto1(){
  slider(fn)
  fn=fn+1
  setTimeout(auto1,3000)

}
function slider(sn){
	slider1=document.getElementsByClassName('dd1')

	for(i=0;i<slider1.length;i++)
	{
		slider1[i].style.display="none"
	}

 if(sn==slider1.length){
 	fn=0
 	sn=0
 }
if(sn<0){
	fn=slider1.length-1
	sn=slider1.length-1
}

slider1[sn].style.display="block"
}



</script>