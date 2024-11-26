<!DOCTYPE html>
<html>
<head>
    <title>Quadratic Equation Solver</title>
</head>
<body>
    <h1>Quadratic Equation Solver</h1>
    <form method="POST" action="">
        <label for="a">a:</label>
        <input type="number" name="a" required>
        <br>
        <label for="b">b:</label>
        <input type="number" name="b" required>
        <br>
        <label for="c">c:</label>
        <input type="number" name="c" required>
        <br>
        <button type="submit">Calculate</button>
    </form>

    <?php
    require_once 'class.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $a = $_POST["a"];
        $b = $_POST["b"];
        $c = $_POST["c"];

        $equation = new QuadraticEquation($a, $b, $c);

        if (!$equation->isQuadratic()) {
            echo "<p>This is not a quadratic equation (a must not be 0).</p>";
        } else {
            $discriminant = $equation->getDiscrimiant();

            if ($discriminant > 0) {
                echo "<p>The equation has two roots: " . $equation->getRoot1() . " and " . $equation->getRoot2() . "</p>";
            } elseif ($discriminant == 0) {
                echo "<p>The equation has one root: " . $equation->getRoot1() . "</p>";
            } else {
                echo "<p>The equation has no real roots.</p>";
            }
        }
    }
    ?>
</body>
</html>
