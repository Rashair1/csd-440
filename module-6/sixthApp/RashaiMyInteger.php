<!DOCTYPE html>
<html lang="en">
    <!--
        Rashai Robertson
        Bellevue University
        CSD-440
        September 6, 2026
        Module Assignment 6
    -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rashai MyInteger</title>
    <link rel="stylesheet" href="main.css">
    
</head>
<body>
    <h1>RashaiInteger Test</h1>

    <?php
    // Class stores one integer and provides methods to test integer values.
    class RashaiMyInteger
    {
        private int $value;

        // Constructor sets the starting integer.
        public function __construct(int $value)
        {
            $this->value = $value;
        }

        // Getter method.
        public function getValue(): int
        {
            return $this->value;
        }

        // Setter method.
        public function setValue(int $value): void
        {
            $this->value = $value;
        }

        // Returns true when the supplied integer is even.
        public function isEven(int $number): bool
        {
            return $number % 2 == 0;
        }

        // Returns true when the supplied integer is odd.
        public function isOdd(int $number): bool
        {
            return $number % 2 != 0;
        }

        // Returns true when the stored integer is prime.
        public function isPrime(): bool
        {
            if ($this->value < 2) {
                return false;
            }

            for ($i = 2; $i <= sqrt($this->value); $i++) {
                if ($this->value % $i == 0) {
                    return false;
                }
            }

            return true;
        }
    }

    // Converts true/false into Yes/No for display.
    function showResult(bool $result): string
    {
        return $result ? "Yes" : "No";
    }

    // Create two instances and test all methods.
    $integer1 = new RashaiMyInteger(7);
    $integer2 = new RashaiMyInteger(10);

    echo "<h2>First Instance</h2>";
    echo "<p>Stored value: " . $integer1->getValue() . "</p>";
    echo "<p>Is 7 even? " . showResult($integer1->isEven(7)) . "</p>";
    echo "<p>Is 7 odd? " . showResult($integer1->isOdd(7)) . "</p>";
    echo "<p>Is 7 prime? " . showResult($integer1->isPrime()) . "</p>";

    echo "<h2>Second Instance</h2>";
    echo "<p>Stored value: " . $integer2->getValue() . "</p>";
    echo "<p>Is 10 even? " . showResult($integer2->isEven(10)) . "</p>";
    echo "<p>Is 10 odd? " . showResult($integer2->isOdd(10)) . "</p>";
    echo "<p>Is 10 prime? " . showResult($integer2->isPrime()) . "</p>";

    // Test the setter and getter.
    echo "<h2>Setter and Getter Test</h2>";
    echo "<p>Original value: " . $integer1->getValue() . "</p>";
    $integer1->setValue(13);
    echo "<p>New value: " . $integer1->getValue() . "</p>";
    echo "<p>Is 13 prime? " . showResult($integer1->isPrime()) . "</p>";
    ?>
</body>
</html>
