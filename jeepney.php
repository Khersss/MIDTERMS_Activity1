<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>jeepney</title>
    <script> </script>
</head>
<body>

<h1>Jeepney Fare Calculator</h1>

<form method="POST" action="Farecomputation.php">
    <label for="distance">Enter Distance in km:</label>
    <input type="number" name="distance" step="0.1" min="0" required>
    <br><br>

    <label for="passenger_type">Select Passenger Type:</label>
    <select name="passenger_type" required>
        <option value="Regular">Regular</option>
        <option value="Student_Elderly_PWD">Student/Elderly/PWD</option>
    </select><br><br>

    <input type="submit" value="submit">
    
    <?php 
    if(isset($_GET["tama"])){
    
    ?>
    <p><?php echo number_format($_GET["tama"],2) ?></p>
    <?php 
        }
    ?>
</form>

</body>
</html>