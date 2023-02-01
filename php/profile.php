 <?php
require_once __DIR__ . '/vendor/autoload.php';
$con = new MongoDB\Driver\Manager("mongodb+srv://profile:profile@cluster0.7e1ierx.mongodb.net/?retryWrites=true&w=majority");

echo " Welcome ";
echo  $_POST['name'] . '<br>';
echo  $_POST['mobile'] . '<br>';
echo  $_POST['country'] . '<br>';

require 'vendor/autoload.php';
$redis = new Predis\Client();
$cachedEntry = $redis->get('profile');

if($_POST)
{
    $db = $con->selectDatabase('Profiledb');
    $collection = $db->selectCollection('userdetails');
    
    $datas = [
   
        'mobile' => $_POST['mobile'],
        'country' => $_POST['country'],
    ];
   if($result = $collection->insertOne($datas))
   {
    // echo "Profile data successfully stored!!!" . '<br>';
    $id = $result->getInsertedId();
$temp = '';
$temp .= $_POST['mobile'] . '<br>' . ' ' . $_POST['country'] . '<br>';

$redis->set('profile', $temp);
// echo $cachedEntry;
echo "To update your profile:" . '<br>';
exit();
   } 
   else{
    echo "Please try again after some time";
   }
}

   else{
    echo "Please enter all the required data";
}

?>
