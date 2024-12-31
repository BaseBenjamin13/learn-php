<?php include 'inc/header.php'; ?>

<?php
$sql = 'SELECT * FROM feedback';
$result = mysqli_query($conn, $sql);
$feedback = mysqli_fetch_all($result, MYSQLI_ASSOC);

$id = '';

if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    if(!empty($id)) {
        $sql = "DELETE FROM feedback WHERE id = $id";
        if(mysqli_query($conn, $sql)) {
            header('Location: feedback.php');
        } else {
            echo 'Error: ' . mysqli_error($conn);
        }
    }
}

?>

<h2>Feedback</h2>
<?php if (empty($feedback)): ?>
    <p class="lead mt3">There is no feedback</p>
<?php endif; ?>

<?php foreach ($feedback as $item): ?>
    <div class="card my-3 w-75">
        <div class="card-body text-center">
            <?php echo $item['body']; ?>
            <div class="text-secondary mt-2">
                By <?php echo $item['name'] . ' on ' . $item['date']; ?>
            </div>
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>"
                method="POST" class="mt-4 w-75 mx-auto">
                <div class="mb-3 text-center">
                    <input type="hidden" name="id" value="<?php echo $item['id']; ?>">
                    <input type="submit" name="submit" class="btn btn-dark" style="color: red; font-weight: bold; width: 100px;" value="Delete">
                </div>
            </form>
        </div>
    </div>
<?php endforeach; ?>

<?php include 'inc/footer.php'; ?>