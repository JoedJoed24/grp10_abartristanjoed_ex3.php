<?php
$filePath = 'example.txt';


if (file_exists($filePath)) {
    $fileContents = file_get_contents($filePath);
    echo "File Contents:\n";
    echo $fileContents;
} else {
    echo "File does not exist. Creating file...\n";

    $contentToWrite = "Hello, World!\nThis is a new file created by PHP.";
    
    file_put_contents($filePath, $contentToWrite);

    if (file_exists($filePath)) {
        echo "File created successfully. Contents:\n";
        
        
        $fileContents = file_get_contents($filePath);
        echo $fileContents;
    } else {
        echo "Failed to create the file.";
    }
}


$fileArray = file($filePath);

echo "\nFile contents as array:\n";
print_r($fileArray);
?> 