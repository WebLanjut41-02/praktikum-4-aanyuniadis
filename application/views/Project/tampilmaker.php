<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      
      <div class="box">
        <div class="box-header">
            <h3 class="box-title"> Data Project</h3>
        </div>
        <form action="<?php echo base_url('C_inputmaker/hasil')?>" action="POST">
        <div class="form-group">
          <input type="text" class="form-control" id="cari" name="cari" placeholder="cari">
        </div>
        <input class="btn btn-primary" type="submit" value="Cari">
      </form>
        <div class="box-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>Id Project</th>
                <th>Nama Project</th>
                <th>Dana Yang Dibutuhkan</th>
                <th>Tanggal Jatuh Tempo</th>
                <th>Detail Project</th>
              </tr>
            </thead>
            <tbody>
              <?php 
                $project = $this->session->daftar_maker;
                foreach ($project as $data) {
               ?>
              <tr>
                <td><?php echo $data->id_project ?></td>
                <td><?php echo $data->nama_project ?></td>
                <td><?php echo $data->dana_dibutuhkan ?></td>
                <td><?php echo $data->jatuh_tempo ?></td>
                <td><?php echo $data->detail_project ?></td>
              </tr>
              <?php } ?>
            </tbody>

          </table>
        </div>

      </div>
    </section>
  </div>
  
