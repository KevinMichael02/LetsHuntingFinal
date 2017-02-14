<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Agency - Start Bootstrap Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href="../../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    
    <!-- Custom Fonts -->
    <link href="../../assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Theme CSS -->
    <link href="../../assets/css/agency.min.css" rel="stylesheet">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body id="page-top" class="index">
<section id="services">
	<center>
		<h1>Edit planning</h1>
        <br><br>
	</center>
	<?php foreach($kegiatan as $u){ ?>
	<form action="<?php echo base_url(). 'admin_kegiatan/update'; ?>" method="post">
		<div class="col-md-6 col-md-push-4">
            <div class="bs-example">
            <fieldset>
                <div class="form-group">
                    <label class="col-lg-2 control-label">Tanggal</label>
                    <div class="col-lg-5">
                        <input type="hidden" name="id" value="<?php echo $u->id ?>">
                        <input required="required" type="text" name="tanggal" class="form-control" value="<?php echo $u->tanggal ?>">
                    </div>
                </div><br><br>

                <div class="form-group">
                    <label class="col-lg-2 control-label">Kegiatan</label>
                    <div class="col-lg-5">
                        <input required="required" type="text" name="kegiatan" class="form-control" value="<?php echo $u->kegiatan ?>">
                    </div>
                </div><br><br>

                <div class="col-lg-3 col-lg-offset-3">
                    <button type="submit" class="btn btn-primary" value="Simpan">Ubah</button>
                </div>

            </fieldset>
            </div>
        </div>
    </form>

	<?php } ?>
</section>

 <!-- jQuery -->
    <script src="../../assets/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../../assets/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="../../assets/js/jqBootstrapValidation.js"></script>
    <script src="../../assets/js/contact_me.js"></script>

    <!-- Theme JavaScript -->
    <script src="../../assets/js/agency.min.js"></script>

</body>

</html>