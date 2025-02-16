In PHP, a common yet subtle error arises when dealing with object references and their modification within functions.  Consider the following example:

```php
class MyClass {
    public $value = 0;
}

function modifyObject(MyClass $obj) {
    $obj->value = 10; 
}

$myObj = new MyClass();
echo $myObj->value; // Outputs 0
modifyObject($myObj);
echo $myObj->value; // Outputs 10 (as expected)
}
```

This seems straightforward, but the issue manifests when dealing with objects in more complex scenarios, for example, within arrays or when nested objects are involved, where the reference behavior may not be obvious leading to unexpected changes or unintended side effects.  Another common issue happens when objects are passed by reference, and changes made within a function affect the original object outside the function's scope, which can be unexpected if not understood. 