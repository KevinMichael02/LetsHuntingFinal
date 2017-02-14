<section id="services">
  <div class="container">
        <div class="col-md-12 row text-left">
          <center><h1 class="intro-lead-in">Kegiatan</h1> </center><br>
          <table class="table">
            <thead>
            <tr>
              <th>Tanggal</th>
              <th>Kegiatan</th>            
            </tr>
            </thead>
              <tbody>
              <?php foreach($kegiatan as $u){ ?>
                <tr>
                  <td><?php echo $u->tanggal ?></td>
                  <td><?php echo $u->kegiatan ?></td>
                </tr>
              <?php } ?>          
              </tbody>
          </table>
        </div>
  </div>
</section>