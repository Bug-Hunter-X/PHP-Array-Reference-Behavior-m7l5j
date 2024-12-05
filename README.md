# PHP Pass-by-Reference Array Bug

This repository demonstrates a subtle bug related to PHP's pass-by-reference mechanism when working with array elements.  Modifying an array element's value works as expected, but changing its structure (adding or removing elements) using pass-by-reference does not modify the original array.  The code in `bug.php` showcases this behavior.  A possible solution is provided in `bugSolution.php`.

## How to Reproduce

1. Clone the repository.
2. Run `bug.php`.
3. Observe the unexpected output.

## Solution

The solution lies in understanding that while pass-by-reference allows modifications to the variable's *value*, it does not inherently allow modifications to the variable's structure if that variable is an element of an array.
The `bugSolution.php` file offers a workaround that demonstrates how to correctly modify array elements using pass-by-reference or by using return values instead.