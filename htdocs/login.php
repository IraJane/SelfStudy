<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<html>
<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script>
function check(){

	var first = $('.firstbox').val();
	var two = $('.twobox').val();
	var three = $('.threebox').val();
	var four = $('.fourbox').val();

	var mycoup = first + '-'+ two + '-' + three + '-' + four;



	// 쿠폰 데이터를 저장하고 불러오기를 못하니까 임의로 만들음 
	// 사용한 쿠폰 OZ7T-HHZX-V02S-PPLO
	var coupons = {"XPWV-DM2Z-R2RC-9OEM":"n","M0CR-LTXF-MAIC-OGF4":"n","OZ7T-HHZX-V02S-PPLO":"y","HH2T-N7GJ-DZIB-GR3N":"n","8DAL-NCSL-04FJ-S5ZF":"n"};
	var key = Object.keys(coupons);

	for(var i in key){

		if(mycoup == key[i]){
			if(coupons[key[i]] == "n"){
				alert('사용가능한 쿠폰');
			} else {
				alert('사용불가능한 쿠폰');
			}
		}
	}



}

function numberMaxLength(e){
	if(e.value.length > e.maxLength){
            e.value = e.value.slice(0, e.maxLength);
        }

}


</script>



<body>
<div><?php

$id = $_POST['id'];
if($id == "admin"){
	echo '<script type="text/javascript">
	window.location = "adminpage.php"
	</script>';
} else {
	echo $id;
}
?></div>
<hr>


<div>
	<h1>쿠폰입력창</h1>
	<input type="text" class="firstbox" maxlength="4" oninput="numberMaxLength(this);">-<input type="text" class="twobox" maxlength="4" oninput="numberMaxLength(this);">-<input type="text" class="threebox" maxlength="4" oninput="numberMaxLength(this);">-<input type="text" class="fourbox" maxlength="4" oninput="numberMaxLength(this);">
	<br>
	<button type="button" onClick="check()">확인</button>
</div>



</body>
</html>