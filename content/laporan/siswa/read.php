<script>
function printPage() {
    window.print();
}
</script>
​</br>
<input class="btn btn-warning" type="button" value="Cetak" onclick="printPage()" />
</br>
</br>
 <table class="table table-striped">
          <thead>
            <tr>
              <th>Kelas</th>
              <th>NIS</th>
              <th>Nama</th>
              <th>Jenis Kelamin</th>
              <th>Agama</th>
              <th>TTL</th>
              <th>Alamat</th>
            </tr>
          </thead>
          <tbody>


          <?php 
            $siswa=$mysqli->query("SELECT * FROM siswa INNER JOIN kelas on siswa.kd_kelas = kelas.kd_kelas order by kelas.kd_kelas");
            while($m=mysqli_fetch_array($siswa)){
          ?>  

          

            <tr>
              <td><center><?php echo $m['nm_kelas']; ?></center></td>
              <td><?php echo $m['nis']; ?></td>
              <td><?php echo $m['nm_siswa']; ?></td>
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