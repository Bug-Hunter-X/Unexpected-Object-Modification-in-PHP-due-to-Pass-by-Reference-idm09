# PHP Object Reference Bug

This repository demonstrates a common yet subtle bug in PHP related to object references and their modification within functions. The bug arises from unexpected object modification when objects are passed by reference. Modifications made inside functions can unexpectedly change the original object outside its scope.  This behavior might not always be apparent and can lead to hard-to-debug issues in larger projects.  This example focuses on how objects are passed by reference, resulting in global modifications that can cause unintended side effects.

## How to Reproduce

1. Clone this repository.
2. Run `bug.php`. Observe the output.
3. Run `bugSolution.php` to see how this issue is addressed.