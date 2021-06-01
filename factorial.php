<form class="factorial-form" method="POST" action="index.php?action=factorial">
    <h3 class="factorial-header">Calculate Factorial(<?php echo getUsername() ?>)</h3>
    <div class="factorial-content">
        <div class="form-group text-left">
            <label class="factorial-label">factorial number :</label>
            <input class="form-control" min="1" type="number" name="number" id="number" placeholder="input factorial number"> 
        </div>
        <p class="factorial-result text-left">
            <?php
                echo $factorialResult != "" ?  "result:<br>".$factorialResult:"";
            ?>
        </p>
        <input type="submit" class="btn btn-primary text-center factorial-calc" value="calculate">
        
    </div>
</form>