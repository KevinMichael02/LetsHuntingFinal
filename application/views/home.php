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
    
    <header class="business-header">
        <div class="container">
            <div class="row">
                <div class="row">

                <div class="tap col-sm-6 col-md-5 col-lg-6 isi">
                <img src=assets/img/lensa.png width="300" height="300" class="d-inline-block align-top" alt="">
                <h2 class="tagline">How to be a good photographer?</h2>
                <h2><br>"Memotretlah karena kamu mencintainya, dan karena bagimu hadiah terbesarnya adalah proses memotret itu sendiri"</h2>

                </div>

                <div class="tap col-sm-6 col-md-5 offset-md-2 col-lg-6 offset-lg-0">
                  <form method="post" action="home">
                  <div class="form-group row">
                    <label for="example-text-input" class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-10">
                      <input class="form-control" type="text" placeholder="Nama Lengkap" id="example-text-input" required name="txt_name">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="example-text-input" class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-10">
                      <input class="form-control" type="text" placeholder="NIM" id="example-text-input" required name="txt_nim">
                    </div>
                  </div>
                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-2 col-form-label"></label>
                      <div class="col-sm-10">
                        <input type="email" class="form-control" id="inputEmail3" placeholder="Email" required name="txt_emailNew">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputPassword3" class="col-sm-2 col-form-label"></label>
                      <div class="col-sm-10">
                        <input type="password" class="form-control" id="inputPassword3" placeholder="Password" required name="txt_passwordNew">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="example-tel-input" class="col-sm-2 col-form-label"></label>
                      <div class="col-sm-10">
                        <input class="form-control" type="text" placeholder="Phone" id="example-tel-input" required name="txt_phone">
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="offset-sm-2 col-sm-10">
                        <button type="submit" class="btn btn-lg btn-block btn-primary" name='btn_SignUp'>Sign Up!</button>
                      </div>
                    </div>
                  </form>
                </div>
                
                  </div>
                </div>
            </div>
    </header>


