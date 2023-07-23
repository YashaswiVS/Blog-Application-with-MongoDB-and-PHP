
<html>
    <head>
        
    </head>
    
    <body>
        <?php
     include_once("../db.php");

     if(isset($_POST['update'])) {   
        $document = array (
                    'name' => $_POST['name'],
                    'email' => $_POST['email'],
                    //'file' => $_POST['file'],
                    'num' => $_POST['num']
                );


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
                    $db->Profile->UpdateOne(array('_id' => '6465fab9315d5acc1601b4a1'),array('$set' => array('name' => $_POST['name'],
                    'email' => $_POST['email'],'num' => $_POST['num'])),
                    array("upsert" => true)
                );
                    
                
                    //display success message
                    echo "<font color='green'>Data updated successfully.";
                    echo "<br/><a href='../index.php'>View Result</a>";
                }

            }
    ?>
    </body>
    </html>
