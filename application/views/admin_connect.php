<section id="services">
  <div class="container">
        <div class="col-md-12 row text-left">
          <h2>Connect</h2> <br>
          <table class="table">
            <thead>
            <tr>
              <th>Nama</th> 
              <th>Komunitas</th>   
              <th>Link</th> 
              <th>No.Telp</th>        
            </tr>
            </thead>
              <tbody>
              <?php foreach($connect as $u){ ?>
                <tr>
                  <td><?php echo $u->nama ?></td>
                  <td><?php echo $u->komunitas ?></td>
                  <td><?php echo $u->link ?></td>
                  <td><?php echo $u->telp ?></td>
                  <td>
                  <td>
                       <?php echo anchor('admin_connect/hapus/'.$u->id,'Hapus'); ?>
                  </td>
                </tr>
              <?php } ?>          
              </tbody>
          </table>
        </div>
  </div>
</section>