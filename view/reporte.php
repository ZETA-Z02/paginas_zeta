<?php 
include("header.php");

include "../model/reports.php";

$reports =new Reports();
$data = $reports->select();
?>

<div class="container p-4">
    <div class="row">

        <div class="col-md-4">

        <?php
            if(isset($_SESSION['message'])) { ?>
                <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
                    <?= $_SESSION['message']?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>




            <?php session_unset(); } ?>





            <div class="card card-body">
                <form action="../controller/save_task.php" method="POST">
                    <div class="form-group">
                        <input type="text" name="title" class="form-control" placeholder="Task Title" autofocus>
                    </div>
                    <div class="form-group">
                        <textarea name="description" rows="2" class="form-control" placeholder="Task Description"></textarea>
                    </div>
                    <input type="submit" class="btn btn-success btn-block" name="save_task" value="Save Task">
                </form>
            </div>


        </div>

        <div class="col-md-8">
            <table class = "table table-bordered bg-info">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Create At</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while($row=mysqli_fetch_array($data)) { ?>
                        <tr>
                            <td><?php echo $row['title'];?></td>
                            <td><?php echo $row['description'];?></td>
                            <td><?php echo $row['create_at'];?></td>
                            <td>
                                <a href="../controller/edit.php?id=<?php echo $row['id'];?>" class = "btn btn-secondary">
                                    <i class="fas fa-marker"></i>
                                </a>
                                <a href="../controller/delete_task.php?id=<?php echo $row['id'];?>" class = "btn btn-danger">
                                    <i class ="far fa-trash-alt"></i>
                                </a>

                            </td>
                        </tr>

                    <?php }
                    ?>

                </tbody>
            </table>
            
        </div>
    </div>
    <a href="principal.php" class = "btn btn-secondary">
        volver a la pagina principal
    </a>
    <a href="../controller/salir.controller.php" class = "btn btn-danger">
        salir
    </a>

</div>

<?php 
include("footer.php"); ?>

//  2 vistas , en una login y registro a la vez.
//  