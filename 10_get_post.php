<?php

if(isset($_POST['submit'])) {
    echo $_POST['name'];
    echo $_POST['age'];
}
?>

<a href="<?php echo $_SERVER['PHP_SELF']; ?>?name=Brad&age=24">Click</a>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <div>
        <label for="name">Name: </label>
        <input type="text" name="name">
    </div>
    <div>
        <label for="age">Age: </label>
        <input type="number" name="age">
    </div>
    <input type="submit" value="Submit" name="submit">
</form>