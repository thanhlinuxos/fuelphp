<div class="page-title">
  <h4>User</h4>
</div>
<div class="row">
    <div class="col-xs-12">
        <table class="table table-striped table-hover table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th><a class="btn btn-success btn-xs" href="<?php echo Uri::create('acp/user/create')?>">Add</a></th>
                </tr>
            </thead>
            <tbody>
            <?php
                foreach($rows as $row)
                {
            ?>
                    <tr>
                        <td><a href="#"><?php echo $row['id']?></a></td>
                        <td><?php echo $row['username']?></td>
                        <td><?php echo $row['email']?></td>
                        <td>
                            <ul class="list-inline">
                                <li><a href="<?php echo Uri::create('acp/user/edit/' . $row['id']); ?>" class="btn btn-warning btn-xs">Edit</a></li>
                                <li>
                                    <button class="btn btn-danger btn-xs" onclick="">
                                        Delete
                                    </button>
                                </li>
                            </ul>
                        </td>
                    </tr>
            <?php
                }
            ?>
            </tbody>
        </table> 
    </div>
</div>
<div class="row">
   <div class="col-sm-12 text-center">
   </div>
</div>