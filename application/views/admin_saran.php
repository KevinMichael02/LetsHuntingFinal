<section id="services">
  <div class="container">
        <div class="col-md-12 row text-left">
          <h2>Kritik & Saran</h2> <br>
          <table class="table">
            <thead>
            <tr>
              <th>Nama</th> 
              <th>Saran</th>          
            </tr>
            </thead>
              <tbody>
              <?php foreach($saran as $u){ ?>
                <tr>
                  <td><?php echo $u->nama ?></td>
                  <td><?php echo $u->saran ?></td>
                  <td>
                  <td>
                       <?php echo anchor('admin_saran/hapus/'.$u->id,'Hapus'); ?>
                  </td>
                </tr>
              <?php } ?>          
              </tbody>
          </table>
        </div>
  </div>
</section>