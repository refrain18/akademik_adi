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
              <th>NIS</th>
              <th>Nama Siswa</th>
              <th>Nama Pelajaran</th>
              <th>Tugas</th>
              <th>UTS</th>
              <th>UAS</th>
            </tr>
          </thead>
          <tbody>


          <?php 
            $siswa=$mysqli->query("SELECT * FROM nilai INNER JOIN pelajaran on nilai.kd_pelajaran = pelajaran.kd_pelajaran
            INNER JOIN siswa on nilai.nis = siswa.nis ORDER BY nm_siswa ASC");
            while($m=mysqli_fetch_array($siswa)){
          ?>     

            <tr>
              <td><?php echo $m['nis']; ?></td>
              <td><?php echo $m['nm_siswa']; ?></td>
              <td><?php echo $m['nm_pelajaran']; ?></td>
              <td><?php echo $m['tugas']; ?></td>
              <td><?php echo $m['uts']; ?></td>
              <td><?php echo $m['uas']; ?></td>
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