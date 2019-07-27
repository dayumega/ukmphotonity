<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="images/favicon.png" type="" />

    <title>UKM Photonity</title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="../vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form action="proses-login.php" method="post">
              <h1>Login</h1>
              <div>
                <input type="text" name="user" class="form-control" placeholder="Username" required="" />
              </div>
              <div>
                <input type="password" name="pass" class="form-control" placeholder="Password" required="" />
              </div>
              <div>
                <button type="submit" name="kirim" class="btn btn-default submit" href="index.php">Log in</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Baru disitus ini?
                  <a href="#signup" class="to_register"> Buat Akun? </a>
                </p>
				<div class="clearfix"></div>
                <div>
                  <h1><img src="images/bmkg.png"></i>UKM Photonity</h1>
                  <p></p>
                </div>
              </div>
            </form>
          </section>
        </div>

        <div id="register" class="animate form registration_form">
          <section class="login_content">
            <form action="proses-register.php" method="post">
              <h1>Buat Akun</h1>
              <div>
                <input type="hidden" name="id_user" class="form-control">
                <input type="text" name="nama" class="form-control" placeholder="Name" required="" />
              </div>
              <div>
                <input type="text" name="username" class="form-control" placeholder="Username" required="" />
              </div>
              <div>
                <input type="password" name="password" class="form-control" placeholder="Password" required="" />
              </div>
              <div>
                <input type="email" name="email" class="form-control" placeholder="Email" required="" />
              </div>
              <div>
                <button type="submit" class="btn btn-default submit" name="kirim" href="login.php">Submit</button>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Sudah Jadi Anggota ?
                  <a href="#signin" class="to_register"> Login </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><img src="images/bmkg.png"></i>UKM Photonity</h1>
                  <p>©2018 All Rights Reserved. UKM Photonity</p>
                </div>
              </div>
            </form>
          </section>
        </div>
		</div>
      </div>
  </body>
</html>
