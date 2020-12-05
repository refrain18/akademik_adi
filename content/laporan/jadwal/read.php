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
              <th>Kode Pelajaran</th>
              <th>Nama Pelajaran</th>
              <th>NIP</th>
              <th>Nama Guru</th>
              <th>Hari</th>
              <th>Jam</th>
            </tr>
          </thead>
          <tbody>


          <?php 
            $siswa=$mysqli->query("SELECT * FROM jadwal INNER JOIN pelajaran on jadwal.kd_pelajaran = pelajaran.kd_pelajaran
            INNER JOIN guru on jadwal.nip = guru.nip order by kd_jadwal ASC");
            while($m=mysqli_fetch_array($siswa)){
          ?>     

            <tr>
              <td><?php echo $m['kd_pelajaran']; ?></td>
              <td><?php echo $m['nm_pelajaran']; ?></td>
              <td><?php echo $m['nip']; ?></td>
              <td><?php echo $m['nm_guru']; ?></td>
              <td><?php echo $m['hari']; ?></td>
              <td><?php echo $m['jam']; ?></td>
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