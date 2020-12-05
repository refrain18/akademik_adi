<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">DATA PELAJARAN</h1>
        <div class="btn-toolbar mb-2 mb-md-0"></div>
</div>
      <a class="btn btn-primary" href="?pel=add_pelajaran"><i class="fa fa-plus"></i> Tambah Data Pelajaran </a>
      </br>
      </br>
      <table class="table table-striped">
          <thead>
            <tr>
              <th>#</th>
              <th>Kode Pelajaran</th>
              <th>Nama Pelajaran</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>


          <?php 
            $no = 0;
            $pelajaran=$mysqli->query("SELECT * FROM pelajaran");
            while($m=mysqli_fetch_array($pelajaran)){
            $no++;    
          ?>  

          <?php 
            include"paging_pelajaran.php";
            $p   = new paging_smpbinainsancendikia;
            $batas  = 5;
            $posisi = $p->cariPosisi($batas);
            $pelajaran=$mysqli->query("SELECT * FROM pelajaran
            ORDER BY kd_pelajaran ASC LIMIT  $posisi,$batas");
            $no=0;
            while($m=mysqli_fetch_array($pelajaran)){   
            $no++;
          ?>

            <tr>
              <th scope="row"><?php echo $no;?></th>
              <td><?php echo $m['kd_pelajaran']; ?></td>
              <td><?php echo $m['nm_pelajaran']; ?></td>
              <td>
               <a class="btn btn-secondary btn-sm" href="?pel=edit_pelajaran&kd_pelajaran=<?php echo $m['kd_pelajaran'];?>"><i class="fa fa fa-pencil">Edit</i></a> | 
               <a class="btn btn-danger btn-sm" href="?pel=delete_pelajaran&kd_pelajaran=<?php echo $m['kd_pelajaran'];?>"><i class="fa fa-trash-o">Delete</i></a>
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
              $jmldata     = mysqli_num_rows($mysqli->query("SELECT * FROM pelajaran"));
              $jmlhalaman  = $p->jumlahHalaman($jmldata, $batas);
              $linkHalaman = $p->navHalaman($_GET['home'], $jmlhalaman);
              echo " <li  class='page-item'> $linkHalaman </li>"; 
          ?>
          
          </ul>
        </nav>
      </div>