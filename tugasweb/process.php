<?php
// ... your existing code ...

// Assuming $_FILES['file'] is your file upload input
if (isset($_FILES['file']) && $_FILES['file']['error'] === UPLOAD_ERR_OK) {
    // Get the temporary file path
    $tmp_name = $_FILES['file']['tmp_name'];

    // Get the original file name
    $original_name = $_FILES['file']['name'];

    // Sanitize the file name to prevent security issues
    $sanitized_name = preg_replace('/[^a-zA-Z0-9_\.\-]/', '', $original_name);

    // Define the destination path for the uploaded file
    $upload_dir = 'uploads/'; 
    $upload_path = $upload_dir . $sanitized_name;

    // Check if the file already exists
    if (file_exists($upload_path)) {
        // If it does, append a unique number to the file name
        $i = 1;
        while (file_exists($upload_path)) {
            $upload_path = $upload_dir . $sanitized_name . '_' . $i++;
        }
    }

    // Move the uploaded file to the destination path
    if (move_uploaded_file($tmp_name, $upload_path)) {
        // File uploaded successfully
        echo "File uploaded successfully!";
    } else {
        
        echo "Failed to upload file";
    }
} else {
    
    echo "Error uploading file.";
    if (isset($_FILES['file'])) {
        echo "Error code: " . $_FILES['file']['error'];
    }
}
?>