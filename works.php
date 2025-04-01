<html>
<head>

</head>
<body>
    Fra php:
    <?php

echo "Hello world.";
function hello($name) {
    echo "Hello, $name!";
}
## Her er en kommentar til aritmetikkfunksjoner:
function add($a, $b) {
    return $a + $b;
}
function subtract($a, $b) {
    return $a - $b;
}
function multiply($a, $b) {
    return $a * $b;
}
function divide($a, $b) {
    if ($b == 0) {
        echo "Error: Division by zero.";
    } else {
        return $a / $b;
    }
}
?>
    <h1>Diverse linker til feilsider</h1>
<p><a href="error-arithmetic.php">error-arithmetic.php</a></p>
<p><a href="error-assertion.php">error-assertion.php</a></p>
<p><a href="error-compile-error.php">error-compile-error.php</a></p>
<p><a href="error-deprecated.php">error-deprecated.php</a></p>
<p><a href="error-division.php">error-division.php</a></p>
<p><a href="error-eval-error.php">error-eval-error.php</a></p>
<p><a href="error-execution-time.php">error-execution-time.php</a></p>
<p><a href="error-incorrect-param-type.php">error-incorrect-param-type.php</a></p>
<p><a href="error-incorrect-param-value.php">error-incorrect-param-value.php</a></p>
<p><a href="error-memory.php">error-memory.php</a></p>
<p><a href="error-notice.php">error-notice.php</a></p>
<p><a href="error-require-not-found.php">error-require-not-found.php</a></p>
<p><a href="error-strict.php">error-strict.php</a></p>
<p><a href="error-syntax-error.php">error-syntax-error.php</a></p>
<p><a href="error-too-few-params.php">error-too-few-params.php</a></p>
<p><a href="error-uncaught-exception.php">error-uncaught-exception.php</a></p>
<p><a href="error-undefined-function.php">error-undefined-function.php</a></p>
<p><a href="error-user-deprecated.php">error-user-deprecated.php</a></p>
<p><a href="error-user-error.php">error-user-error.php</a></p>
<p><a href="error-user-notice.php">error-user-notice.php</a></p>
<p><a href="error-user-warning.php">error-user-warning.php</a></p>
<p><a href="error-warning.php">error-warning.php</a></p>

</body>
</html>