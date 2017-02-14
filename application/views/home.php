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
                  <p id="services">
                    <div class="container">
                      <div class="col-md-6 col-md-push-3">
                        <form class="form-signin" action="<?=base_url()?>home/daftar" method="post">
                          <br><br><br>
                          <center>
                          <h2 class="section-heading">Formulir Pendaftaran</h2>
                          <br><br></center>

                        <h4>Nama lengkap :</h4>
                          <label for="inputNama" class="sr-only">Nama Lengkap</label>
                          <input type="text" id="inputNama" class="form-control" placeholder="Nama Lengkap" name="namalengkap" required autofocus>
                          <br>

                        <h4>Nim :</h4>
                          <label for="inputNim" class="sr-only">Nim</label>
                          <input type="text" id="inputNim" class="form-control" placeholder="Nim" name="nim" id="nim" required>
                          <br>
                          <p id="warning_nim"> </p>
        
                        <h4>Alamat :</h4>
                          <label for="inputAlamat" class="sr-only">Alamat</label>
                          <input type="text" id="inputPassword" class="form-control" placeholder="Alamat" name="alamat" required>
                          <br>

                        <h4>No. Telepon / HP :</h4>
                          <label for="inputNotlp" class="sr-only">No. Telepon</label>
                          <input type="text" id="inputPassword" class="form-control" placeholder="No. Telepon" name="telepon" required>
                          <br>

                        <h4>Email :</h4>
                          <label for="inputEmail" class="sr-only">Email address</label>
                          <input type="email" id="inputEmail" class="form-control" placeholder="Email address" name="email" required >
                          <br>

                        <div class="col-lg-10 col-lg-offset-4">
                                <button type="submit" class="btn btn-primary" value="Kirim">Daftar</button>
                        </div>

                        </form>
                      </div>
                    </div>
                  </p>


                <footer>
                  <hr>
                  <p> <a href="http://www.kharisma.ac.id/" target="_blank">STMIK KHARISMA</a>
                </footer>



