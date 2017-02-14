<?php
    include_once("function_index.php");
    include_once("function_event.php");
    include_once("fpdf.php");
    
    $year = date('Y');
    $month = date('m');
    $date = "1";
    $name = "~";
    if(isset($_SESSION['year'])){
        
    }else{
        $_SESSION['year'] = $year;
    }
    if(isset($_REQUEST['btn_today'])){
        $year = date('Y');
        $month = date('m');
        $_SESSION['year'] = $year;
    }
    if(isset($_REQUEST['btn_NextMonth'])){
        if(isset($_SESSION['counter'])){
            $_SESSION['counter'] = $_SESSION['counter']+1;
        }else{
            unset($_SESSION['counter']);
            $_SESSION['counter'] = intval($month);
        }
        
        $month = $_SESSION['counter'];
    }
    if(isset($_REQUEST['btn_PrevMonth'])){
        if(isset($_SESSION['counter'])){
            $_SESSION['counter'] = $_SESSION['counter']-1;    
        }else{
            unset($_SESSION['counter']);
            $_SESSION['counter'] = intval($month);
        }
        $month = $_SESSION['counter'];                
    }    
    if($month < 1){
        if(isset($_SESSION['year'])){
            $_SESSION['year'] = $_SESSION['year'] - 1;
        }else{
            $_SESSION['year'] = $year;
        }                
        $month = 12;
    }elseif($month > 12){
        if(isset($_SESSION['year'])){
            $_SESSION['year'] = $_SESSION['year'] + 1;
        }else{
            $_SESSION['year'] = $year;
        }        
        
        $month = 1;
        $_SESSION['counter'] = $month;
    }
    $year = $_SESSION['year'];
    $_SESSION['year'] = $year;
    $_SESSION['counter'] = $month;
    $lbl_year = $year;
    if($month == 1){
        $lbl_month = "January";
    }elseif($month == 2){
        $lbl_month = "February";
    }elseif($month == 3){
        $lbl_month = "March";
    }elseif($month == 4){
        $lbl_month = "April";
    }elseif($month == 5){
        $lbl_month = "May";
    }elseif($month == 6){
        $lbl_month = "June";
    }elseif($month == 7){
        $lbl_month = "July";
    }elseif($month == 8){
        $lbl_month = "August";
    }elseif($month == 9){
        $lbl_month = "September";
    }elseif($month == 10){
        $lbl_month = "October";
    }elseif($month == 11){
        $lbl_month = "November";
    }elseif($month == 12){
        $lbl_month = "December";
    }
    if(isset($_REQUEST['btn_create'])){
        pindah("create_event.php");
    }
    if(isset($_REQUEST['btn_CmbMonth'])){
        $bulan = explode(" ",$_REQUEST['cmb_navigation']);
        $year = date('Y');
        $month = $bulan[0];
        $month = date('m', strtotime($month));
        $date = "~";
    }
    if(isset($_REQUEST['btn_search'])){
        $name = $_REQUEST['txt_SearchEvent'];
    }
    if(isset($_REQUEST['btn_SchaduleDetail'])){
        if(isset($_SESSION['day_agenda'])){
            $date = $_SESSION['day_agenda'];
            $name = $date;
        }else{
            $date = date("d");
        }
        unset($_SESSION['day_agenda']);
    }else{
        $date = "~";
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">        
    </head>
    <body>
        
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/web_design.css">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="index_script.js"></script>
        <!--Start Navbar -->
        <nav class="navbar navbar-inverse">
          <div class="container-fluid">
            <div class="navbar-header">
              <a class="navbar-brand" href="index.php">Calendar SIB</a>
            </div>
            <ul class="nav navbar-nav">
                <li><a href="index.php"><span class="glyphicon glyphicon-home"></span> Home </a></li>
                <?php
                    if(isset($_SESSION['nrp'])){
                        echo '<li id="nav_feedback"><a href="feedback.php"><span class="glyphicon glyphicon-comment"></span> Request</a></li>';
                    }
                ?>
                <li><a href="galery.php"><span class="glyphicon glyphicon-picture"></span> Gallery </a></li>
                <li><a href="about.php">About </a></li>

            </ul>
            <ul class="nav navbar-nav navbar-right">        
                <li style="margin-top:7px; margin-left:3px;"></li>
                <?php
                    if(isset($_SESSION['nrp'])){
                        echo "<li id='nav_profile'><a href='manage_profile.php'><span class='glyphicon glyphicon-user'></span> ".$_SESSION['student_name']."'s  profile </a></li>";
                        echo "<li><a href='index.php' id='nav_log_out'><span class='glyphicon glyphicon-log-in'></span> Log Out</a></li>";

                    }else{
                        echo '<li id="nav_signup"><a href="sign_up.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>';
                        echo "<li id='nav_login'><a href='sign_in.php'><span class='glyphicon glyphicon-log-in'></span> Login</a></li>";
                    }

                ?>                
            </ul>
          </div>
        </nav>   
        <!-- End Navbar -->
<div class="alert alert-warning fade in" id="alert_loading">
    <a href="" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Loading </strong>Please wait
</div>
        <div class="container">
            <form method="post" action="index.php">
                <div class="form-group search_schadule">
                    <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder="Search Event" id="txt_SearchEvent" name="txt_SearchEvent">
                    </div>                
                    <button type="submit" class="btn btn-info" name="btn_search">Search</button>                
                </div>
            </form>
            <hr width=100% align=left>
            <form action="index.php" method="post">
                <?php
                    if(isset($_SESSION['privilege'])){
                        if($_SESSION['privilege'] == "ADMIN"){
                            echo "<button type='submit' class='btn btn-danger' style='margin-bottom:5px;float:left;margin-right:3px;'   name='btn_create'>Create</button>";  
                        } 
                    }
                ?>
                <button type="button" class="btn btn-default btn_schadule" id="btn_schadule">Schedule</button>
                <button type="button" class="btn btn-default btn_month" id="btn_month">Month</button>            
                <button type="submit" class="btn btn-default" style="margin-bottom:5px;float:left;" name="btn_today">Today</button>
            </form>            
            <div class="navigation">
                <form action="index.php" method="post">
                    <button type="sumbit" class="btn btn-default" style="margin-bottom:5px;" name="btn_PrevMonth"><</button>
                    <label id="lbl_month"><?php echo $lbl_month ?></label>
                    <label id="lbl_year"><?php echo $lbl_year ?></label>
                    <button type="sumbit" class="btn btn-default" style="margin-bottom:5px;" name="btn_NextMonth">></button>
                </form>
            </div>
            <form action="index.php" method="post">
                
                <select class="form-control cmb_navigation" name="cmb_navigation">
                    <?php
                      cmb_month($year,$month);
                    ?>
                </select>
                <button type="sumbit" class="btn btn-default" style="margin-bottom:5px;" name="btn_CmbMonth" id="btn_CmbMonth">Select</button>
                
                
            </form>
            <form method="POST" action="print_EventMonth.php" id="frmCtnt" name="frmCtnt">
                <?php
                $_SESSION['month'] = $month;
                $_SESSION['year'] = $year;
                    if(isset($_SESSION['privilege'])){
                        if($_SESSION['privilege'] == "ADMIN"){
                            echo "<button type='submit' class='btn btn-info' style='margin-left:2px;' name='btn_ReportAgenda' id='btn_ReportAgenda'>Print Report</button>";
                        }
                    }
                ?>
            </form>
            <!--Start Event Calender -->
            <div class="month_view">
                <table class="table" id="calender">
                    <thead>
                        <tr style="background-color:#03A9F4;">
                            <th>Sun</th>
                            <th>Mon</th>
                            <th>Tue</th>
                            <th>Wed</th>
                            <th>Thu</th>
                            <th>Fri</th>
                            <th>Sat</th>
                        </tr>
                    </thead>
                    <tbody class="table_body">
                        <?php
                            echo draw_calendar($month,$year)
                        ?>
                    </tbody>
                </table>
            </div>
            <div class="agenda_view event-border">
                <label>Click the content to edit your information</label>
                <table class="table table-hover" id="agenda">
                    <?php
                        agenda_view($year,$month,$date,$name);
                    ?>
                </table>
            </div>
            <!--End Event Calender -->            
            <!--start schadule detail -->
            <div class="schadule_detail event-border">
                <form method="post" action="index.php">
                    <button type="sumbit" class="btn btn-default" style="margin-bottom:5px;" name="btn_SchaduleDetail" id="btn_SchaduleDetail">Detail</button>
                </form>
                <form method="POST" action="print_EventDay.php" id="frmCtnt" name="frmCtnt">
                    <?php
                        if(isset($_SESSION['privilege'])){
                            if($_SESSION['privilege'] == "ADMIN"){
                                echo "<button type='submit' class='btn btn-info' style='margin-bottom:5px;float:left;margin-right:3px;'   name='btn_ReportDetail'>Print Report</button>";
                            }
                        }
                    ?>
                </form>
                <table class="table table-hover" id="event_detail">
                    
                </table>
            </div>
                
            <!--end schadule detail -->
        </div>
        <div class="footer">
            <div class="footer-content">
                <h1>Contact Us</h1>
                <span class="glyphicon glyphicon-print" aria-hidden="true"></span><label>&nbsp;+62 31 504 1509, +62 31 503 1818</label>
                <br>
                <span class="glyphicon glyphicon-phone" aria-hidden="true"></span><label>&nbsp;+62 31 502 7920</label><br>
                <span class="glyphicon glyphicon-home" aria-hidden="true"></span><label>&nbsp;Surabaya, Jalan Ngagel Jaya Tengah 73 - 77</label>
                
            </div>
        </div>
        </div>
    </body>
</html>
<?php
    if(isset($_REQUEST['btn_SchaduleDetail'])){
        echo "<script>";
        echo "$(document).ready(function(){";
        echo "$('.month_view').hide();";
        echo "$('.schadule_detail').hide();";
        echo "$('.agenda_view').fadeIn();";
        echo "$('.navigation').hide();";
        echo "$('.cmb_navigation').show();";
        echo "$('#btn_CmbMonth').show();";
        echo "$('#btn_ReportAgenda').show();";
        echo "});";
        echo "</script>";
    }
    if(isset($_REQUEST['btn_search'])){
        echo "<script>";
        echo "$(document).ready(function(){";
        echo "$('.month_view').hide();";
        echo "$('.schadule_detail').hide();";
        echo "$('.agenda_view').fadeIn();";
        echo "$('.navigation').hide();";
        echo "$('.cmb_navigation').show();";
        echo "$('#btn_CmbMonth').show();";
        echo "$('#btn_ReportAgenda').show();";
        echo "});";
        echo "</script>";
    }
    if(isset($_REQUEST['btn_CmbMonth'])){
        echo "<script>";
        echo "$(document).ready(function(){";
        echo "$('.month_view').hide();";
        echo "$('.schadule_detail').hide();";
        echo "$('.agenda_view').fadeIn();";
        echo "$('.navigation').hide();";
        echo "$('.cmb_navigation').show();";
        echo "$('#btn_CmbMonth').show();";
        echo "$('#btn_ReportAgenda').show();";
        echo "});";
        echo "</script>";
    }
?>