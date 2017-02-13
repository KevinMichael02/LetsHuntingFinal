    <?php
      
    session_start();
    
    function encrypt($string, $key){
        $key = md5($key);
        $string = rtrim(base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256, $key, $string, MCRYPT_MODE_ECB)));
        return $string;
    }

    function decrypt($string, $key){
        $key = md5($key);
        $string = rtrim(mcrypt_decrypt(MCRYPT_RIJNDAEL_256, $key, base64_decode($string), MCRYPT_MODE_ECB));
        return $string;
    }
    function getConnection(){
        $servername ="127.0.0.1";
        $username = "root";
        $password = "";
        $database = "ukm_photo";
    $conn = new mysqli($servername, $username, $password,$database);
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    return $conn;
  }
    function alert($msg){
        echo "<script>";
        echo "alert('$msg')";
        echo "</script>";
    }
    function pindah($url){
        echo "<script>";
        echo "window.location='$url'";
        echo "</script>";
    }
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
        $qry = "SELECT EMAIL,PASSWORD,FULL_NAME FROM ACCOUNT WHERE STATUS = 'LEGAL' AND EMAIL = '$email'";
        $result = $conn->query($qry);
        if ($result->num_rows > 0){
            while($row = $result->fetch_assoc()){  
                $pass = decrypt($row['PASSWORD'],"kevyn");
                if($pass == $password){
                  $_SESSION["FULL_NAME"] = $row['FULL_NAME'];
                  alert("Login Successfull");
                }          
                
        
            }
        }else{
      alert("Wrong Username And Password");
    }
        $conn->close();
  }
  function SignUp($full_name,$nim,$email,$password,$phone){
    $id = autogen_account();
    $conn=getConnection();
    $sql = "INSERT INTO ACCOUNT(ID_ACCOUNT,FULL_NAME,NIM,EMAIL,PASSWORD,PHONE,STATUS) VALUES('$id','$full_name',$nim,'$email','$password','$phone','LEGAL')";
      if ($conn->query($sql) === TRUE) {
          alert("Save Successfull");
      }
    $conn->close();
    
    }
      if(isset($_REQUEST['btn_SignIn'])){
        $email = $_REQUEST['txt_nameSign'];
        $password = $_REQUEST['txt_passwordSign'];

        if($email == "peweb161" && $password = "peweb161"){
          alert("Login Successfull");
        }else{
          SignIn($email,$password);  
        }
        
      }
      if(isset($_REQUEST['btn_SignUp'])){
        $name = $_REQUEST['txt_name'];
        $nim = $_REQUEST['txt_nim'];
        $email = $_REQUEST['txt_emailNew'];
        $password = encrypt($_REQUEST['txt_passwordNew'],"kevyn");
        $phone = $_REQUEST['txt_phone'];
        SignUp($name,$nim,$email,$password,$phone);
      } 
     
       if(isset($_REQUEST['btn_Connect'])){
        $name = $_REQUEST['txt_name'];
        $nim = $_REQUEST['txt_nim'];
        $email = $_REQUEST['txt_emailNew'];
        $password = encrypt($_REQUEST['txt_passwordNew'],"kevyn");
        $phone = $_REQUEST['txt_phone'];
        SignUp($name,$nim,$email,$password,$phone);
      } 
      ?>    
<!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title" id="exampleModalLabel">Sign In</h4>
                </div>

                <div class="modal-body">
                    <form>
                        <div class="form-group">
                          <label class="sr-only" for="exampleInputEmail3">Email address</label>
                          <input type="email" class="form-control form-control-sm" id="exampleInputEmail3" placeholder="Enter email">
                        </div>

                        <div class="form-group">
                          <label class="sr-only" for="exampleInputPassword3">Password</label>
                          <input type="password" class="form-control form-control-sm" id="exampleInputPassword3" placeholder="Password">
                        </div>

                        <div class="form-check">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox"> Remember me
                            </label>
                            <span class="psw">Forgot <a href="#">password?</a></span>
                        </div>
                    </form>
                </div>

                <div class="modal-footer">
                    <button class="btn btn-primary" type="submit">Sign In</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Header -->
    <header>
        <div class="container">
            <div class="intro-text">
                <div class="intro-lead-in">Welcome To Our Studio!</div>
                <div class="intro-heading">It's Nice To Meet You</div>
                <a href="#services" class="page-scroll btn btn-xl">Daftar</a>
            </div>
        </div>
    </header>

    <!-- Services Section -->
    <section id="services">

    </section>
