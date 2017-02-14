<section id="services">
  <div class="container">
        <div class="col-md-12 row text-left">
          <h2>Kegiatan</h2> <br>
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
                  <td>
                    <?php echo anchor('admin_kegiatan/edit/'.$u->id,'Edit'); ?>
                       <?php echo anchor('admin_kegiatan/hapus/'.$u->id,'Hapus'); ?>
                  </td>
                </tr>
              <?php } ?>          
              </tbody>
          </table>
                <div class="text-center">
                    <a href="admin_kegiatan/tambah"><button class="btn btn-primary">Tambah kegiatan</button></a>
                </div>
        </div>
  </div>
</section>