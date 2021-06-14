<?php
//input 창에서 이메일과 비밀번호가 입력되지 않았다면, 
if($_POST["useremail"] == "" || $_POST["userpasswd"] == ""){
    echo '<script> alert("아이디, 패스워드를 둘 다 입력해주세요!"); history.back(); </script>';
//input 창에서 이메일과 비밀번호가 입력되었다면, 
}else{

    //데이터베이스의 데이터를 가져와서 입력된 값이 데이터에 있는 지 확인
    if(isset($_POST['useremail'])&&isset($_POST['userpasswd'])){
        
        $useremail=$_POST['useremail'];//입력받은 이메일 데이터를 useremail이라는 변수에 할당
        $userpasswd=$_POST['userpasswd'];//입력받은 비번 데이터를 userpasswd라는 변수에 할당
     
        //디비 접속
        $conn= mysqli_connect('localhost', 'root', '100412', 'mibooks');
        //입력받은 이메일, 비번이 데이터베이스에 있는지 (회원인지)
        $sql="select * from user where email = '$useremail'&& passwd = '$userpasswd'";
            //데이터베이스에 존재하는 이메일, 비번이라면 (회원이라면)
            if($result=mysqli_fetch_array(mysqli_query($conn,$sql))){ 
                //세션 시작
                session_start();
                $_SESSION['useremail'] = $useremail;
                $_SESSION['userpasswd'] = $userpasswd;

                echo session_id();
                echo var_dump($_SESSION);
            }
            //정보를 잘못 입력했거나, 회원이 아니면
            else{
                echo '<script> alert("로그인에 실패하였습니다. 아이디 또는 패스워드를 다시 한번 확인해주세요."); history.back(); </script>';
        }
    }
}
?>