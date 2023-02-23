<?php 
include('db.php');
session_start();

// Handle Form Processes
if(isset($_POST['upate'])){
    $note = $_POST['user_text'];
    $title = $_POST['note_title'];
    $NoteId = $_POST['note_id'];
    $sql = "UPDATE notes SET 
    note_title = '$title',
    note_content = '$note'
    WHERE note_id = '$NoteId'";
   
    $query = mysqli_query($connection, $sql);
    if ($query) {
        $_SESSION['SuccessMessage'] = "Note Successfully Updated";
        header("Location: index.php");
        exit(0);
    }else{
        $_SESSION['ErrorMessage'] = "Something went wrong. Please try again";
        header("Location: edit-note.php?edit-id=" . $NoteId);
        exit(0);

    }
}

include('header.php');
?>

<body class="bg-warning">
    <div class="container mt-5 shadow">
        <div class="row mb-3">
        <div class=" text-form bg-white p-5 shadow">
                <h1 class="text-center">My Note Maker</h1>
                <p class="text-center">Update Your Note</p>
                <?php
                        // Ouput the existing note content
                        if (isset($_GET['edit-id'])) {
                        $edit = $_GET['edit-id'];
                        $post_query = "SELECT * FROM notes WHERE note_id='$edit'";
                        $post_query_run = mysqli_query($connection, $post_query);
                        if (mysqli_num_rows($post_query_run) > 0) {
                        $row = mysqli_fetch_array($post_query_run); ?>
                    
                    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" >
                        <input type="hidden" name="note_id" value="<?= $row['note_id']; ?>">
                        <input type="text" name="note_title" id="" value="<?= $row['note_title']; ?>" class="form-control mb-3">
                        <textarea name="user_text"  value="<?= $row['note_content']; ?>" class="form-control mb-3" id="" cols="30" rows="10"><?= $row['note_content']?></textarea>
                        <input type="submit" class="btn btn-warning w-100 mt-3" name="update" value="Save">
                        
                    </form>   
                <?php } 
                    }elseif(!isset($_GET['edit-id'])){
                        $_SESSION['ErrorMessage'] = "No note was selected, please select a note and try again";
                        header("Location: index.php");
                        exit(0);
                        
                    }
            ?> 
        </div>
        </div>
    
<script> CKEDITOR.replace( 'user_text' );</script>
<script src="../bootstrap/js/bootstrap.bundle.js"></script>
</body>
</html>