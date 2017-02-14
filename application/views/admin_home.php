<section id="services">
  <div class="container">
        <div class="col-md-12 row text-left">
          <h2>Anggota</h2> <br>
          <table class="table">
            <thead>
            <tr>
              <th>Nim</th>
              <th>Nama</th>  
              <th>Alamat</th> 
              <th>Kontak</th> 
              <th>Email</th>           
            </tr>
            </thead>
              <tbody>
              <?php foreach($pendaftaran as $u){ ?>
                <tr>
                  <td><?php echo $u->nim ?></td>
                  <td><?php echo $u->namalengkap ?></td>
                  <td><?php echo $u->alamat ?></td>
                  <td><?php echo $u->telepon ?></td>
                  <td><?php echo $u->email ?></td>
                  <td>
                       <?php echo anchor('admin_home/hapus/'.$u->id,'Hapus'); ?>
                  </td>
                </tr>
              <?php } ?>          
              </tbody>
          </table>
        </div>
  </div>
</section>