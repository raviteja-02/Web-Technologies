# File Handling in PHP

This chapter covers various file operations in PHP, including opening, closing, reading, writing, appending, and deleting both text and binary files. Additionally, we'll explore how to list directories.

## Opening and Closing Files

In PHP, you can use the `fopen()` function to open a file for reading or writing. The function returns a file pointer resource that you can use in other file-related functions. After using the file, it's essential to close it using `fclose()` to free up system resources.

```php
<?php
// Opening a file for reading
$filename = 'example.txt';
$handle = fopen($filename, 'r'); // 'r' stands for read mode

// Do operations with the file

// Closing the file
fclose($handle);
?>
```

## Reading from Files

You can use various functions to read data from files, such as `fgets()` to read a single line, `fread()` to read a specified number of bytes, and `file()` to read the entire file into an array.

```php
<?php
// Reading a single line from a file
$handle = fopen('example.txt', 'r');
$line = fgets($handle);
fclose($handle);

// Reading the entire file into an array
$lines = file('example.txt');
?>
```

## Writing to Files

To write data to a file, you can use `fwrite()` or `file_put_contents()` functions. If the file doesn't exist, PHP will create it. However, be cautious as this operation will overwrite the entire file.

```php
<?php
// Writing to a file using fwrite()
$handle = fopen('example.txt', 'w'); // 'w' stands for write mode
fwrite($handle, 'Hello, world!');
fclose($handle);

// Writing to a file using file_put_contents()
file_put_contents('example.txt', 'Hello, world!');
?>
```

## Appending to Files

If you want to add content to an existing file without overwriting it, use 'a' (append mode) instead of 'w' (write mode).

```php
<?php
// Appending to a file
$handle = fopen('example.txt', 'a');
fwrite($handle, ' Appending this content!');
fclose($handle);
?>
```

## Deleting Files

To delete a file, you can use the `unlink()` function.

```php
<?php
// Deleting a file
$filename = 'example.txt';
if (file_exists($filename)) {
    unlink($filename);
}
?>
```

## Listing Directories

To list the files and subdirectories within a directory, you can use `scandir()`.

```php
<?php
$directory = 'path/to/directory';
$files = scandir($directory);

// Loop through the array to display files and directories
foreach ($files as $file) {
    echo $file . PHP_EOL;
}
?>
```

Remember to handle file operations carefully, especially when dealing with user input or sensitive data. Always validate and sanitize user input to prevent security vulnerabilities.

---

This chapter provides an overview of file handling in PHP, covering essential operations like opening, closing, reading, writing, appending, and deleting files, as well as listing directories. If you have any questions or need more examples, feel free to ask! Happy coding!
