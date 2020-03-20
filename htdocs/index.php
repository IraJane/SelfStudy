<?php
	$str = $_POST['id'];
	if($str != null){
		$result = "내가 입력한 값은 {$str}";
	}

	
?>



<html>
<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script>
	function usercheck(){
		
		var ii = $('.id').val();	
		var pp = $('.password').val();	

		//아이디와 비번이 admin일때 
		if(ii =="admin" && pp =="admin"){
			window.location.href="adminpage.php";

		} else {
			// 아이디와 비밀번호 오라클 연동이 안되기에 임의로 작성 했습니다. 
			var persons = {'person1': 'pw1','person2':'pw2','person3':'pw3'};

			var key = Object.keys(persons);

			//계정과 비밀번호 확인 하는 용도 
			for ( var i in key) {
				console.log("key="+key[i] + "value=" + persons[key[i]]);

				if(key[i] == ii && persons[key[i]] == pp){
					window.location.href="login.php";
				}


			}
		}
	
	
	};

</script>



	<body>
		<h1>로그인창</h1>
		<form method="post" action="./login.php"><table>
			<tr><td><input type="text" class="id" placeholder="ID"></td>
			<td><input type="password" class="password" placeholder="password"></td>
			<td><button type="button" onClick="usercheck()">submit</button></td></tr>
		</table></form>
		<hr>
		
	</body>
</html>
