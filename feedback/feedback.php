<?php include 'inc/header.php'; ?>

<?php
$feedback = [
    [
        'id' => '1',
        'name' => 'name',
        'email' => 'asegfaseg@aslgf',
        'body' => 'as;loiheg;oasiegp;oiasneg;ase'
    ],
    [
        'id' => '1',
        'name' => 'name',
        'email' => 'asegfaseg@aslgf',
        'body' => 'as;loiheg;oasiegp;oiasneg;asesefs sfesef  al;soiefh ajs;aoefijas;e sja;ojf'
    ],
    [
        'id' => '1',
        'name' => 'name',
        'email' => 'asegfaseg@aslgf',
        'body' => 'as;loiheg;oasie g;ase'
    ]
]
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
                By <?php echo $item['name']; ?>
            </div>
        </div>
    </div>
<?php endforeach; ?>

<?php include 'inc/footer.php'; ?>