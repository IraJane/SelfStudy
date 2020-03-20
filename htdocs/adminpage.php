<?php
echo "쿠폰 만들기 창";


?>
<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>

<script>
function make(){
    
    //작동이 된다는 것을 확인하기 위해서 100개만 생성되게 했습니다
    for(var k = 0; k < 100; k++){
        var list = '<table>';
        var coupon = '';
        for(var i = 0; i<4;i++){
            var chars = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXTZ";
            var string_length = 4;
            var randomstring = '';
            for (var j=0; j<string_length; j++) {
                var rnum = Math.floor(Math.random() * chars.length);
                randomstring += chars.substring(rnum,rnum+1);
            }
            if(i == 0){
                coupon = randomstring;
                console.log('1');
            }
            if(i != 0){
                coupon = coupon + '-' + randomstring;
                console.log(i);
            }

            
        
        }
        // 그룹은 나중에 mysqli가 작동 되면 집어넣기
        //db 연결해서 그룹의 제일 높은 숫자 +1을 해서 새로 생성될때 추가 해주려고 생각했습니다.
        list = list + '<tr><td>'+coupon+'</td><td>n</td></tr>';

        console.log('list adding ');

        list = list + '</table>';

        var czz = document.getElementById('#clist');
        console.log(list);
        $('#clist').append(list);

    }
}


</script>


<div>
    <button onClick="make()">쿠폰생성</button>
    <a href="couponlists.php">쿠폰리스트</a> &nbsp;<a href="used.php">사용한 쿠폰</a>
    <div><table><tr><td>쿠폰번호</td><td>사용상태</td></tr></table></div>
    <div id="clist"></div>
    
</div>

