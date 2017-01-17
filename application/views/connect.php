      <!-- Services Section -->
    <section id="services">
    <br><br>
       
      <header class="business-header">
          <div class="container">
            <div class="row">
              <div class="row">
                <h2 class="tagline">Form rekomendasi</h2>
                <h2><br>untuk mengisi nama/komunitas fotografer</h2>
                  <div class="tap col-sm-6 col-md-5 offset-md-2 col-lg-6 offset-lg-0">

                    <form action="<?php echo base_url(). 'connect/tambah_aksi'; ?>" method="post" class="form-horizontal">
                        <fieldset>
                        <div class="form-group">
                            <label for="inputEmail" class="col-lg-2 control-label">Nama</label>
                            <div class="col-lg-6">
                                <input type="text" name="nama" class="form-control" id="inputEmail" placeholder="Nama">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail" class="col-lg-2 control-label">Komunitas</label>
                            <div class="col-lg-6">
                                <input type="text" name="komunitas" class="form-control" id="inputEmail" placeholder="komunitas">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail" class="col-lg-2 control-label">Facebook</label>
                            <div class="col-lg-6">
                                <input type="text" name="facebook" class="form-control" id="inputEmail" placeholder="facebook">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail" class="col-lg-2 control-label">Contact</label>
                            <div class="col-lg-6">
                                <input type="text" name="contact" class="form-control" id="inputEmail" placeholder="contact">
                            </div>
                        </div>
                               
                        

                        <div class="col-lg-10 col-lg-offset-4">
                            <button type="submit" class="btn btn-primary" value="Kirim Saran">Submit</button>
                        </div>
                        </fieldset>
                    </form>
                  </div>            
                </div>
              </div>
            </div>
          </div>
      </header>
    </section>


