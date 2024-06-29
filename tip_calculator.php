<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $billAmount = $_POST['billAmount'];
    $tipPercentage = $_POST['tipPercentage'];
    $peopleCount = $_POST['peopleCount'];
    
    // Calculate tip amount
    $tipAmount = ($billAmount * $tipPercentage) / 100;
    $totalAmount = $billAmount + $tipAmount;
    $amountPerPerson = $totalAmount / $peopleCount;
    
    // Create different scenarios
    $tipScenarios = [];
    for ($i = 5; $i <= 25; $i += 5) {
        $scenarioTipAmount = ($billAmount * $i) / 100;
        $scenarioTotalAmount = $billAmount + $scenarioTipAmount;
        $scenarioAmountPerPerson = $scenarioTotalAmount / $peopleCount;
        $tipScenarios[] = [
            'tipPercentage' => $i,
            'tipAmount' => $scenarioTipAmount,
            'totalAmount' => $scenarioTotalAmount,
            'amountPerPerson' => $scenarioAmountPerPerson
        ];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tip Calculator Results</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            padding: 20px;
        }
        .container {
            max-width: 800px;
            margin: auto;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h1, h2 {
            text-align: center;
            color: #333;
        }
        ul {
            list-style-type: none;
            padding: 0;
        }
        li {
            margin: 10px 0;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Tip Calculator Results</h1>
        <ul>
            <li>Bill Amount: ₪<?= number_format($billAmount, 2) ?></li>
            <li>Tip Percentage: <?= $tipPercentage ?>%</li>
            <li>Tip Amount: ₪<?= number_format($tipAmount, 2) ?></li>
            <li>Total Amount: ₪<?= number_format($totalAmount, 2) ?></li>
            <li>Amount Per Person: ₪<?= number_format($amountPerPerson, 2) ?></li>
        </ul>

        <h2>Tip Scenarios</h2>
        <table>
            <tr>
                <th>Tip Percentage</th>
                <th>Tip Amount</th>
                <th>Total Amount</th>
                <th>Amount Per Person</th>
            </tr>
            <?php foreach ($tipScenarios as $scenario): ?>
                <tr>
                    <td><?= number_format($scenario['tipPercentage'], 2) ?>%</td>
                    <td>₪<?= number_format($scenario['tipAmount'], 2) ?></td>
                    <td>₪<?= number_format($scenario['totalAmount'], 2) ?></td>
                    <td>₪<?= number_format($scenario['amountPerPerson'], 2) ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
</body>
</html>

<?php } ?>
