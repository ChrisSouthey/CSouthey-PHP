<?php 
include 'includes/header.php'; 

$name = "Chris";
$score = 90;

?>

<h1>IFs</h1>

<h2>Test Results</h2>
<?php if($score > 65): ?>
    <!-- PASSED --> 
    <p style="color: green; font-weight: 900;">PASSED</p>
<?php else: ?>
    <!-- FAILED -->
    <p style="color: red; font-weight: 900;">FAILED</p>
<?php endif; ?>

<?php include 'includes/footer.php'; ?>