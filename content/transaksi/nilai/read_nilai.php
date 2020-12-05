<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Transaksi Nilai</h1>
        <div class="btn-toolbar mb-2 mb-md-0"></div>
</div>
      <a class="btn btn-primary" href="?tn=add_nilai"><i class="fa fa-plus"></i>Tambah Nilai Siswa </a>
      </br>      
      </br>      
      <table class="table table-striped">
          <thead>
            <tr>
              <th>#</th>
              <th>NIS</th>
              <th>Nama Siswa</th>
              <th>Nama Pelajaran</th>
              <th>Tugas</th>
              <th>UTS</th>
              <th>UAS</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>

          <?php 
            $no = 0;
            $nilai=$mysqli->query("SELECT * FROM nilai INNER JOIN pelajaran on nilai.kd_pelajaran = pelajaran.kd_pelajaran
            INNER JOIN siswa on nilai.nis = siswa.nis
            ");
            while($m=mysqli_fetch_array($nilai)){
            $no++;    
          ?>  

          <?php 
            include"paging_nilai.php";
            $p   = new paging_smpbinainsancendikia;
            $batas  = 10;
            $posisi = $p->cariPosisi($batas);
            $nilai=$mysqli->query("SELECT * FROM nilai INNER JOIN pelajaran on nilai.kd_pelajaran = pelajaran.kd_pelajaran
            INNER JOIN siswa on nilai.nis = siswa.nis
            ORDER BY nm_siswa ASC LIMIT  $posisi,$batas");
            $no=0;
            while($m=mysqli_fetch_array($nilai)){   
            $no++;
          ?>

            <tr>
              <th scope="row"><?php echo $no;?></th>
              <td><?php echo $m['nis']; ?></td>
              <td><?php echo $m['nm_siswa']; ?></td>
              <td><?php echo $m['nm_pelajaran']; ?></td>
              <td><?php echo $m['tugas']; ?></td>
              <td><?php echo $m['uts']; ?></td>
              <td><?php echo $m['uas']; ?></td>
              <td>
               <a class="btn btn-secondary btn-sm" href="?tn=edit_nilai&kd_nilai=<?php echo $m['kd_nilai'];?>"><i class="fa fa-pencil">Edit</i></a> | 
               <a class="btn btn-danger btn-sm" href="?tn=delete_nilai&kd_nilai=<?php echo $m['kd_nilai'];?>"><i class="fa fa-trash-o">Delete</i></a>
              </td>
            </tr>


            <?php } ?>
            
          </tbody>
        </table>

      <div class="halaman">
        <nav aria-label="...">
          <ul class="pagination">

          <?php } ?>
          <?php 
              $jmldata     = mysqli_num_rows($mysqli->query("SELECT * FROM nilai"));
              $jmlhalaman  = $p->jumlahHalaman($jmldata, $batas);
              $linkHalaman = $p->navHalaman($_GET['home'], $jmlhalaman);
              echo " <li  class='page-item'> $linkHalaman </li>"; 
          ?>
          
          </ul>
        </nav>
      </div>