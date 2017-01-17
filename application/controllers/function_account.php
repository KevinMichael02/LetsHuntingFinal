<?php
	include_once("function_connection");
	function autogen_account(){
		$counter = 0;
        $conn=getConnection();        
        $qry = "SELECT MAX(ID_ACCOUNT) FROM ACCOUNT";
        $result = $conn->query($qry);
        if ($result->num_rows > 0){
            while($row = $result->fetch_assoc()){            
                $counter = $row['MAX(ID_ACCOUNT)'] + 1;
            }
        }else{
            $counter = 1;
        }
        $conn->close();
        return $counter;
	}

	function SignIn($email,$password){
        $conn=getConnection();
        $qry = "SELECT EMAIL,PASSWORD,FULL_NAME FROM ACCOUNT WHERE STATUS = 'LEGAL' AND EMAIL = '$email' AND PASSWORD = '$password'";
        $result = $conn->query($qry);
        if ($result->num_rows > 0){
            while($row = $result->fetch_assoc()){            
                $_SESSION["FULL_NAME"] = $row['FULL_NAME'];
				alert("Login Successfull");
            }
        }else{
			alert("Wrong Username And Password");
		}
        $conn->close();
	}
	function SignUp($full_name,$nim,$email,$password,$phone){
		alert("1");
		/*
		$id = autogen_account();
        $conn=getConnection();
        $sql = "INSERT INTO(ID_ACCOUNT,FULL_NAME,NIM,EMAIL,PASSWORD,PHONE,STATUS) VALUES('$id','$full_name',$nim,'$email','$password','$phone','LEGAL')";
        if ($conn->query($sql) === TRUE) {
            alert("Save Successfull");
        }
		$conn->close();
		*/
    }
?>