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
            </tr>
          </thead>
          <tbody>


          <?php 
            $siswa=$mysqli->query("SELECT * FROM pelajaran order by kd_pelajaran ASC");
            while($m=mysqli_fetch_array($siswa)){
          ?>     

            <tr>
              <td><?php echo $m['kd_pelajaran']; ?></td>
              <td><?php echo $m['nm_pelajaran']; ?></td>
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