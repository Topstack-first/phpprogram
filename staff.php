<div class="staff">
    <form class="staff-form" action="index.php?action=staff" method="POST">
        <h3 class="staff-header">Generate User Name(<?php echo getUsername() ?>)</h3>
        <div class="staff-content">
            <input class="form-control staff-first" type="text" name="first_name" placeholder="First Name" value=""><br>
            <input class="form-control staff-last" type="text" name="last_name" placeholder="Surname" value=""><br>
            <div class="staff-username">
                <?php echo $staffName != "" ? "Staff Username: ".$staffName : ""; ?>
            </div>
            <input class="btn btn-primary staff-generate" type="submit" value="Generate">
        </div>
        
    </form>
    
</div>