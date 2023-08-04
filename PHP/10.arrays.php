<?php
$s[0] = "Ram";
$s[1] = "Ravi";
$s[2] = "Raju";
echo $s[0], "<br>", $s[1], "<br>", $s[2];
//or
echo "<br>";
$arr = array("1", "2", "3");
echo $arr[0], "<br>", $arr[1], "<br>", $arr[2];
$arr1 = array("name" => "Raviteja", "age" => "21", "branch" => "CSE");
$arr2 = array(
    "Personal Info" => array(
        "name" => "Raviteja",
        "age" => "21"
    ),
    "Professional Info" => array(
        "branch" => "CSE",
        "college" => "SCCE"
    )
);
echo "<pre>";
print_r($arr2);
echo "</pre>";
foreach ($arr1 as $key => $value) {
    echo $key . ": " . $value . "<br>";
}
print_r($arr1);
?>



<?php
/* In PHP, arrays are a fundamental data structure used to store multiple values under a single variable name. They can hold elements of different data types, such as integers, strings, objects, and even other arrays. PHP arrays can be indexed numerically or associatively, making them versatile and widely used in PHP programming.

There are several ways to create and manipulate arrays in PHP. Let's explore some of the basic concepts and operations related to arrays:

1. **Creating an array:**
You can create an array in PHP using the array() function or its shorthand [] notation.

Example of a numerically indexed array:
```php
$numericalArray = array(10, 20, 30, 40);
or
$numericalArray = [10, 20, 30, 40];
```

Example of an associative array (where keys are specified):
```php
$associativeArray = array("name" => "John", "age" => 30, "city" => "New York");
OR
$associativeArray = ["name" => "John", "age" => 30, "city" => "New York"];
```

2. **Accessing elements:**
You can access elements of an array using their index (for numerical arrays) or their keys (for associative arrays).

```php
echo $numericalArray[0]; // Output: 10
echo $associativeArray["name"]; // Output: John
```

3. **Adding elements:**
You can add elements to an array using different methods:

a. By specifying a new index for a numerical array:
```php
$numericalArray[4] = 50;
```

b. By specifying a new key for an associative array:
```php
$associativeArray["email"] = "john@example.com";
```

4. **Array functions:**
PHP provides numerous built-in functions to perform various operations on arrays. Some common functions are:

- `count($array)`: Returns the number of elements in the array.
- `array_push($array, $value)`: Adds one or more elements to the end of the array.
- `array_pop($array)`: Removes and returns the last element of the array.
- `array_merge($array1, $array2)`: Merges two arrays into one.
- `array_key_exists($key, $array)`: Checks if a key exists in the array.
- `in_array($value, $array)`: Checks if a value exists in the array.

...and many more. You can refer to the official PHP documentation for a comprehensive list of array functions.

5. **Looping through arrays:**
You can use loops like `foreach` to iterate through the elements of an array.

```php
foreach ($numericalArray as $value) {
echo $value . " ";
}
Output: 10 20 30 40
```

```php
foreach ($associativeArray as $key => $value) {
echo $key . ": " . $value . "<br>";
}
Output:
name: John
age: 30
city: New York
```

These are the basic concepts related to PHP arrays. Arrays are an essential part of PHP programming, and they play a crucial role in storing, accessing, and managing data efficiently.
*/
?>