<?php
        session_start();

        $servername='localhost:3307';
        $username='root';
        $pass='root';
        $db='food';
        $conn = new mysqli($servername,$username,$pass,$db);

        // Check connection
        if ($conn -> connect_errno) {
          echo "Failed to connect to MySQL: " . $conn -> connect_error;
        }
        $Uname=$_POST['name'];
        $Upass=$_POST['pwd'];
        $Umail=$_POST['mail'];
        
        $flag=false;
        
        // if(strlen($Upass)<6){
        //     $flag=true;
        //     $_SESSION['pass_err']=true;
        // }
        $sql=$conn->prepare('Select * from userInfo where username=?');
        $sql->bind_param('s',$Uname);
        $sql->execute();

        $result = $sql->get_result();
        $stmt = $result->fetch_assoc();

        $sql1=$conn->prepare('Select * from userInfo where email=?');
        $sql1->bind_param('s',$Umail);
        $sql1->execute();

        $result1 = $sql1->get_result();
        $stmt2 = $result1->fetch_assoc();

        if($stmt){
            $_SESSION['name_err']=true;
            $flag=true;
        
        }
        if($stmt2){
            $_SESSION['mail_same']=true;
            $flag=true;
        }
        if( !filter_var($Umail,FILTER_VALIDATE_EMAIL)){
            $_SESSION['mail_err']=true;
            $flag=true;
        }
        if($flag){
            header("location:http://localhost/food/signIn.php");
        }
        else{
            $sql=$conn->prepare('INSERT into userInfo values(?,?,?,"no pack");');        
            $sql->bind_param('sss',$Uname,$Umail,$Upass);
            $sql->execute();
            
            header("location:http://localhost/food/index.php");
        }
    ?>