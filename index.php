<?php

$json = file_get_contents("http://cat-fact.herokuapp.com/facts/random");
$cat_fact = json_decode($json)->{'text'};

echo "<h1>
    <br />
    Some Cat Facts 2: Electric Boogaloo
    <br />
    <i><small>Special PHP Edition!</small></i>
</h1>";

echo $cat_fact;
