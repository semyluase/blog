<?php include('inc/header.php')?>
    
    
    <div class="wrapper">
        <div class="main">
            <div class="section text-center">
                <div class="section text-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <table class="table">
                                    <thead class="navbar-ct-danger text-center">
                                        <th>No</th>
                                        <th>Judul Karya</th>
                                        <th>Tahun</th>
                                        <th>Jenis Karya</th>
                                    </th>
                                    <tbody>
                                        <?php if($karyailmiah->num_rows()==0){?>
                                        <tr>
                                            <td class="text-center" colspan="4">Tidak Ada Data</td>
                                        </tr>
                                        <?php } else {
                                            $no = 1;
                                            foreach($karyailmiah->result() as $row){?>
                                        <tr>
                                            <td><?php echo $no;?></td>
                                            <td><?php echo $row->judul;?></td>
                                            <td><?php echo $row->tahun;?></td>
                                            <td><?php echo $row->deskripsi;?></td>
                                        </tr>
                                        <?php $no++;}}?>
                                    </tbody>
                                </table>
                            </div>
                            <div class="sep"></div>
                            <div><ul class="pagination"><?php echo $pagi; ?></ul></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>     
    </div>
    
<?php include('inc/footer.php');?>