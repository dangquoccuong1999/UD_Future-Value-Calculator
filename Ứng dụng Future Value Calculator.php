<!DOCTYPE html>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<link type="text/css" rel="stylesheet" href="css/style.css"/>
<head>
    <title>Future Value Calculator</title>
</head>
<style>
    #content {
        width: 450px;
        margin: 0 auto;
        padding: 0px 20px 20px;
        background: white;
        border: 2px solid navy;
    }

    h1 {
        color: navy;
    }

    label {
        width: 10em;
        padding-right: 1em;
        float: left;
    }

    #data input {
        float: left;
        width: 15em;
        margin-bottom: .5em;
    }

    #buttons input {
        float: left;
        margin-bottom: .5em;
    }

    br {
        clear: left;
    }
</style>
<body>
<div id="content">
    <h1>Future Value Calculator</h1>

    <form method="POST">
        <div id="data">
            <label>Investment Amount:</label>
            <input type="text" name="investment" value="0"/><br/>

            <label>Yearly Interest Rate:</label>
            <input type="text" name="rate" value="0"/><br/>

            <label>Number of Years:</label>
            <input type="text" name="years" value="0"/>
        </div>
        <div id="buttons">
            <label>&nbsp;</label>
            <input type="submit" value="Calculate"/><br/>
        </div>
    </form>
</div>
</body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $investment = $_REQUEST['investment'];
    $rate = $_REQUEST['rate'];
    $years = $_REQUEST['years'];
    $future = ($investment + ($investment * $rate)) * $years;
    echo "<h1> Future : $future </h1>" ;
}
?>