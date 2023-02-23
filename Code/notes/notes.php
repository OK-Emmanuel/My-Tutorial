<?php 
include('db.php');
session_start();

if(isset($_POST['submit'])){
    $note = $_POST['user_text'];
    $title = $_POST['note_title'];
    $sql = "INSERT INTO notes (note_title, note_content)
    VALUES('$title', '$note')";
    $query = mysqli_query($connection, $sql);
    if ($query) {
        $_SESSION['SuccessMessage'] = "Note Created Successfully";
        header("Location: index.php");   
        exit(0);
    }else{
        $_SESSION['ErrorMessage'] = "Something Went Wrong, Please try again!";
        header("Location: notes.php");
        exit(0);
    }
}

include('header.php');
?>

<body class="bg-warning">
    <div class="container mt-5">

        <!-- Output status message -->
    <?php include('sessions.php'); ?>

        <div class="row mb-3">
        <div class=" text-form bg-white p-5 shadow">
                <h1 class="text-center">My Note Maker</h1>
                <p class="text-center">Write your plans and keep good records</p>
                    <form action="" method="POST" >
                        <input type="text" name="note_title" id="" class="form-control mb-3" placeholder="Create a Title for Your Note">
                        <textarea name="user_text" class="form-control mb-3" placeholder="Type your note here" id="" cols="30" rows="10"></textarea>
                        <input type="submit" class="btn btn-warning w-100 mt-3" name="submit" value="Save">
                    </form>    
        </div>
        </div>
    
<script> CKEDITOR.replace( 'user_text' );</script>
<script src="../bootstrap/js/bootstrap.bundle.js"></script>
</body>
</html>