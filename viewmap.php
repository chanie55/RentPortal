<?php 
    if (isset($_POST['submit-address'])) {
        $address = $_POST["address"];
        ?>
            
        <?php
    } 
?>

<form method = "POST"> 

<iframe width = "100%" height = "500" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d253884.63365545924!2d124.99269969948995!3d6.137769299408479!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x32f79cf31aca6663%3A0xcc2a0e32287d6748!2sGeneral%20Santos%20City%2C%20South%20Cotabato!5e0!3m2!1sen!2sph!4v1681799986969!5m2!1sen!2sph" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    <p> 
        <input type = "text" name = "address" placeholder = "Enter Address">
    </p>

    <input type = "submit" name = "submit-address">
</form>