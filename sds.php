<?php
$result = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $operator = $_POST["operator"];

    
    switch ($operator) {
        case "+":
            $correctAnswer = $num1 + $num2;
            break;

        case "-":
            $correctAnswer = $num1 - $num2;
            break;

        case "*":
            $correctAnswer = $num1 * $num2;
            break;

        case "/":
            if ($num2 == 0) {
                $correctAnswer = "Cannot divide by zero!";
            } else {
                $correctAnswer = $num1 / $num2;
            }
            break;

        default:
            $correctAnswer = "Invalid operation";
    }
    if (is_numeric($correctAnswer)) {
        $funnyAnswers = [
            $correctAnswer + 1,
            $correctAnswer - 1,
            $correctAnswer + 10,
            $correctAnswer * 2,
            420,
            69,
            "ayaw ko hilabti",
            "20. ayaw pag buot"
        ];

      
        do {
            $funnyAnswer = $funnyAnswers[array_rand($funnyAnswers)];
        } while ($funnyAnswer == $correctAnswer);

        $result = " Answer: " . $funnyAnswer;
    } else {
        $result = $correctAnswer;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Simple Calculator</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f2f2f2;
            text-align: center;
            margin-top: 60px;
        }

        .calculator {
            background: white;
            width: 320px;
            margin: auto;
            padding: 25px;
            border-radius: 15px;
            box-shadow: 0 0 15px #aaa;
        }

        h2 {
            color: #ff6600;
        }

        input, select, button {
            width: 90%;
            padding: 10px;
            margin: 7px;
            font-size: 16px;
        }

        button {
            background: #ff6600;
            color: white;
            border: none;
            border-radius: 8px;
            cursor: pointer;
        }

        button:hover {
            background: #e65c00;
        }

        .result {
            margin-top: 20px;
            font-size: 22px;
            font-weight: bold;
            color: #e60000;
        }

        .warning {
            font-size: 13px;
            color: #777;
        }
    </style>
</head>

<body>

<div class="calculator">

    <h2>Simple Calculator</h2>

    <p class="warning">
        Warning: This calculator is definitely NOT trustworthy.
    </p>

    <form method="POST">

        <input
            type="number"
            name="num1"
            placeholder="Enter first number"
            required
        >

        <select name="operator">
            <option value="+">➕ Add</option>
            <option value="-">➖ Subtract</option>
            <option value="*">✖️ Multiply</option>
            <option value="/">➗ Divide</option>
        </select>

        <input
            type="number"
            name="num2"
            placeholder="Enter second number"
            required
        >

        <button type="submit">
            Calculate
        </button>

    </form>

    <?php if ($result): ?>

        <div class="result">
            <?= $result ?>
        </div>

    <?php endif; ?>

</div>

</body>
</html>