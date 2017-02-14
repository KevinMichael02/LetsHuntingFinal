 <!-- Header -->
    <section id="team">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Kritik & saran</h2>
                    <h3 class="section-heading"></h3>

                    <!-- Main Content -->
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                                <form class="form-signin" action="<?=base_url()?>saran/saran" method="post">
                                <div class="row">
                                    <div class="form-group col-xs-12">
                                    <br>
                                        <h4>Nama :</h4>
                                        <label for="inputNama" class="sr-only">Nama</label>
                                            <input type="text" id="inputNama" class="form-control" placeholder="Nama" name="nama" required autofocus><br>

                                        <h4>Kritik & Saran :</h4>
                                        <textarea rows="5" class="form-control" placeholder="Masukkan Kritik & Saran" id="message" name="saran"></textarea>
                                        <p class="help-block text-danger"></p>
                                    </div>

                                <div class="col-lg-4 col-lg-offset-4">
                                    <button type="submit" class="btn btn-primary" value="kirim">Kirim</button>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <hr>
        <p> <a href="http://www.kharisma.ac.id/" target="_blank">STMIK KHARISMA</a>
    </footer>