<?php
$result = "";
if (isset($_POST['submit'])) {
    $number1 = $_POST['num1'];
    $number2 = $_POST['num2'];

    // Perform calculations
    $sum = $number1 + $number2;
    $difference = $number1 - $number2;
    $product = $number1 * $number2;
    $quotient = $number2 != 0 ? $number1 / $number2 : "Cannot divide by zero";

    $result = "
        <div class='alert alert-success'>
            <strong>Results:</strong><br>
            Sum: $sum<br>
            Difference: $difference<br>
            Product: $product<br>
            Quotient: $quotient
        </div>
    ";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arithmetic Operations</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center">Arithmetic Operations</h2>
        <form action="" method="post" class="mt-3">
            <div class="mb-3">
                <label for="num1" class="form-label">First Number</label>
                <input type="number" name="num1" class="form-control" placeholder="Enter first number" required>
            </div>
            <div class="mb-3">
                <label for="num2" class="form-label">Second Number</label>
                <input type="number" name="num2" class="form-control" placeholder="Enter second number" required>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            <button type="reset" class="btn btn-secondary">Reset</button>
        </form>
        <br>
        <!-- Display results here -->
        <?php if ($result): ?>
            <?php echo $result; ?>
        <?php endif; ?>
    </div>
    <!-- Bootstrap JS (optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>