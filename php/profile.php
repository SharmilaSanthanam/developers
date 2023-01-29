 <?php
require_once __DIR__ . '/vendor/autoload.php';
$con = new MongoDB\Client("mongodb+srv://profile:profile@cluster0.7e1ierx.mongodb.net/?retryWrites=true&w=majority");

// if(isset($_POST['create'])){
if($_POST)
{
    $db = $con->selectDatabase('Profiledb');
    $collection = $db->selectCollection('userdetails');
    
    $datas = [
        // 'name' => 'test1',
        // 'mobile' => '9876543212',
        // 'country' => 'India',
        'name' => $_POST['name'],
        'mobile' => $_POST['mobile'],
        'country' => $_POST['country'],
    ];
   if($result = $collection->insertOne($datas))
   {
    echo "Profile data successfully stored!!!";
   } 
   else{
    echo "Please try again after some time";
   }

    $id = $result->getInsertedId();
    
}
else{
    echo "Please enter all the required data";
}


?>
