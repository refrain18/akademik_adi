<script>
function printPage() {
    window.print();
}
</script>
</br>
<input class="btn btn-warning" type="button" value="Cetak" onclick="printPage()" />
</br>
</br>
 <table class="table table-striped">
          <thead>
            <tr>
              <th>NIP</th>
              <th>Nama</th>
              <th>Jenis Kelamin</th>
              <th>Agama</th>
              <th>TTL</th>
              <th>Alamat</th>
            </tr>
          </thead>
          <tbody>


          <?php 
            $siswa=$mysqli->query("SELECT * FROM guru order by nm_guru ASC");
            while($m=mysqli_fetch_array($siswa)){
          ?>  

          

            <tr>
              <td><?php echo $m['nip']; ?></td>
              <td><?php echo $m['nm_guru']; ?></td>
              <td><?php echo $m['jenkel']; ?></td>
              <td><?php echo $m['agama']; ?></td>
              <td><?php echo $m['tmpt_lahir']; ?>, <?php echo $m['tgl_lahir']; ?></td>
              <td><?php echo $m['alamat']; ?></td>
            </tr>


            <?php } ?>
            
          </tbody>
        </table>

      <div class="halaman">
        <nav aria-label="...">
          <ul class="pagination">

          
          
          </ul>
        </nav>
      </div>