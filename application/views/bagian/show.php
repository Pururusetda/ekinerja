        <div class="row">
            <div class="col-sm-12">
                <section class="panel">
                    <header class="panel-heading">
                        <a href="<?= site_url("user/create") ?>" type="button" class="btn btn-primary">Tambah Bagian</a>
                        <span class="tools pull-right">
                            <a href="javascript:;" class="fa fa-chevron-down"></a>
                            <a href="javascript:;" class="fa fa-cog"></a>
                            <a href="javascript:;" class="fa fa-times"></a>
                         </span>
                    </header>
                    <div class="panel-body">
                    <div class="adv-table">
                    <table  class="display table table-bordered table-striped" id="dynamic-table">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>Bagian</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php
                            $no = '1';
                            foreach ($allPengguna->result() as $row)
                            {
                                echo '<tr>';
                                echo '<td>'.$no.'</td>';  
                                echo '<td>'.$row->bagian.'</td>';
                                echo '<td><a href="'.site_url("bagian/edit/$row->id").'">Edit</a> | <a href="'.site_url("bagian/delete/$row->id").'">Delete</a></td>';                       
                                echo '</tr>';
                                $no++;
                            }
                        ?>
                    </tbody>
                    </table>
                    </div>
                    </div>
                </section>
            </div>
        </div>