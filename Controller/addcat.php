<html>
<head>
    <title>Add Data</title>
</head>

<body>
    <?php
//including the database connection file
include_once("../db.php");

if(isset($_POST['addblogcatt'])) {   
    $document = array (
                'cat_name' => $_POST['cat_name'],
            );
        
    // checking empty fields
    $errorMessage = '';
    foreach ($document as $key => $value) {
        if (empty($value)) {
            $errorMessage .= $key . ' field is empty<br />';
        }
    }
    
    if ($errorMessage) {
        // print error message & link to the previous page
        echo '<span style="color:red">'.$errorMessage.'</span>';
        echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";  
    } else {
        //insert data to database table/collection named 'users'
        $db->Categories->insertOne($document);
        
        //display success message
        echo "<font color='green'>Data added successfully.";
        echo "<br/><a href='../index.php'>View Result</a>";
    }
}
?>
</body>
</html>