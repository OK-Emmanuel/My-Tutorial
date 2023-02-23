<?php session_start(); ?>
<?php include_once('header.php') ?>
<?php 
if(isset($_GET['del-note'])){
    $deletePost = $_GET['del-note']; 
    $sql = "DELETE FROM notes WHERE note_id = $deletePost";
    $sql_execute = mysqli_query($connection, $sql);
    if ($sql_execute) {
        $_SESSION['ErrorMessage'] = "Note Deleted Successfully";
        header("Location: index.php");
        exit(0);
    }else{
        $_SESSION['ErrorMessage'] = "Something went wrong. Please try again";
        header("Location: index.php");
        exit(0);
    }
}
?>

<body class="bg-warning">
<div class="container-fluid px-4 mt-5 shadow">


<div class="row"> 
    <div class="col-md-12">

        <!-- Output status message -->
        <?php include('sessions.php'); ?>

        <div class="card shadow">
            <div class="card-header">
                <h4>My Notes
                    <a href="notes.php" class="btn btn-warning float-end">Add New Note <i class="fas fa-plus"></i> </a></h4>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>S/N</th>
                            <th>Note Title</th>
                            <th>Note Content</th>
                            <th>Note Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php 
                    $serial_no = 1;
                    $query = "SELECT * FROM notes ";
                    $query_run = mysqli_query($connection, $query);
                    while ($rows = mysqli_fetch_assoc($query_run)) {
                     ?>
                     
                     <tr>
                     
                         <td><?php echo $serial_no++; ?></td>
                         <td><a class="btn" href="fullnote.php?note-id=<?= $rows['note_id']; ?>"><?php echo $rows['note_title']; ?></a></td>
                         <td><?php if ($rows['note_content'] > strlen(50)) {
                                                echo substr($rows['note_content'], 0, 50) . "...";
                                            } ?></td>
                        </a>
                         <td><?= $rows['note_date']; ?></td>
                         <td class="btn-group btn"><a href="edit-note.php?edit-id=<?=$rows['note_id'];?>"><i class="fas fa-edit"></i></a>
                         <a href="index.php?del-note=<?= $rows['note_id']; ?>"><button type="" name="delete" class="ms-3 text-danger fas fa-trash btn-group"></button></a></td>
                    
                    </tr>
                     
                    <?php }?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div>
<script src="../bootstrap/js/bootstrap.bundle.js"></script>
</body>
</html>