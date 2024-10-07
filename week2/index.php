<?php include '../includes/header.php'; 

var_dump($_POST);

$teamName = filter_input(INPUT_POST, 'teamName');
$wins = filter_input(INPUT_POST, 'wins', FILTER_VALIDATE_FLOAT);


?>


<h1>NHL Standings App</h1>

<p>In this example, I will be using Hockey standings to calculate</p>

<h2>Criteria</h2>
<ul>
    <li>Win = 2 Points</li>
    <li>Loss = 0 Points</li>
    <li>Overtime Loss = 1 Point</li>
</ul>

<hr/>


<!-- NHL STandings form -->

<div class="form-wrapper">

    <form name="nhl_standings" method="post">

    <div class="form-control">
        <label for="team_name" text="Team Name">
        <input type="text" id="team_name" name="team_name">
    </div>

    <div class="form-control">
        <label for="wins">
        <input type="text" id="wins" name="wins">
    </div>

    <div class="form-control">
        <label for="losses">
        <input type="text" id="losses" name="losses">
    </div>

    <div class="form-control">
        <label for="otloss">
        <input type="text" id="otLoss" name="otLoss">
    </div>

    <div class="form-control">
        <input type="submit" name="nhl_submit" value="Submit">
    </div>

</div>


<?php include '../includes/footer.php'; ?>