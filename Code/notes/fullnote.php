<?php 
// Include the database and the header
include("db.php");
session_start();
include_once("header.php");

// Return user to homepage if no specific note is selected
if (!isset($_GET['note-id'])) {
    header('location: index.php');
 }else{
     $SearchQueryParameter = $_GET['note-id'];
 }
?>
<body class="bg-warning">
<div class="container-fluid px-4 mt-5">


<div class="row"> 
    <div class="col-md-8 m-auto">
        <div class="card shadow">
            <div class="card-header">
            <?php 
                $sql = "SELECT * FROM notes WHERE note_id = '$SearchQueryParameter'";
                $query = mysqli_query($connection, $sql);
                while ($rows = mysqli_fetch_assoc($query)) {
                $GLOBALS['note-id'] = $rows['note_id'];
            ?>
                <h4 class="fw-bold text-uppercase"><?= $rows['note_title'];?> 
                    <a href="index.php" class="btn btn-warning float-end">Go Back <i class="fas fa-arrow-left"></i> </a></h4>
            </div>
            <div class="card-body">
                <section class="m-auto mb-3">
                            <p class="fs-5 mb-4 mx-5 text-justify"> <?= $rows['note_content'];?></p>
                            <p><a href="edit-note.php?edit-id=<?= $rows['note_id']; ?>">Edit Note</a> </p>
                </section>
            <?php } ?>
           