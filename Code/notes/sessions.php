<?php 
if (isset($_SESSION['ErrorMessage'])) {?>
	<div class="alert alert-danger alert-dismissible">
            <i class="fas fa-triangle-exclamation"></i> <?= $_SESSION['ErrorMessage']?>
            <button class="btn-close" data-bs-dismiss="alert"></button>
    </div>
	
	
<?php 
unset($_SESSION['ErrorMessage']);
}
elseif (isset($_SESSION['SuccessMessage'])) {?>
	<div class="alert alert-success alert-dismissible">
            <i class="fas fa-check"></i> <?= $_SESSION['SuccessMessage']?>
            <button class="btn-close" data-bs-dismiss="alert"></button>
        </div> 
	
<?php 
unset($_SESSION['SuccessMessage']);
} 
?>