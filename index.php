<?php
?>
<html>
<?php include('templates/header.php'); ?>
<div class="form-container">
    <h2 class="titleText">Add Employee Details</h2>
    <form>
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>
        <label for="address">Address:</label>
        <input type="text" id="address" name="address" required><br><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>
        <label for="department">Department:</label>
        <input type="text" id="department" name="department" required><br><br>
        <label for="salary">Salary:</label>
        <input type="number" id="salary" name="salary" required><br><br>
        <input type="submit" value="Submit">
    </form>
</div>
<?php include('templates/footer.php'); ?>
</html>