
 <?php
 class DataBase{
  public $table = "product";

   function Db_connect(){
    $DBHOST="localhost";
    $DBNAME="pos";
    $DBUSER ="root";
    $DBPASS="";
    $DBDRIVER="mysql";
    try {
        $conn = new PDO("$DBDRIVER:host=$DBHOST;dbname=$DBNAME", $DBUSER, $DBPASS);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //echo "Connected successfully";
        return $conn;
      } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
      }

}  
public function query($query,$data=array()){
$con=  $this->Db_connect();
$stl = $con->prepare($query);
$check = $stl->execute($data);
if($check){
  $result=$stl->fetchAll(PDO::FETCH_ASSOC);
  if (is_array($result) && count($result)>0){
     return $result;
  }
}
return false;
}

public function getall($limit= 10,$offset= 0){
  
  $query = "select * from $this->table limit $limit offset $offset ";
  
  $db = new DataBase;

  return $db->query($query) ;
}
 
 }
    
    
  function allowed_col($data,$table){
    if ($table == 'product') {
      $col =[
        'Name','Id','Types','Quantity','Price',
      ];
}
foreach ($data as $key => $value) {
  if(!in_array($key,$col)){
    unset($data[$key]);
}}
return $data;
}
function insert($data, $table){
  $con = new DataBase;
  $arr = allowed_col( $data,'product');
  $keys= array_keys($arr);
  $query = "insert into $table ";
  $query .="(".implode(",",$keys).") values ";
  $query .="(:".implode(",:",$keys).")";
  
    $con->query($query,$arr);

  
}

function where($data, $table){
  $con = new DataBase;
  $keys= array_keys($data);
  $query = "select * from $table where ";
  foreach( $keys as $key ){
    $query .= "$key = :$key && ";
  
    

  }
  $query =trim($query,"&& ");
  return $con->query( $query ,$table);
}

function validate($data, $table){
  $error = [];
  if($table == "product") {
    if(empty($data["Name"])){
      $error['Name']="Nigga Name where";
}
if(empty($data["Types"])){
  $error['Types']="Type ki ami dibo";
}
  }
  return $error;
}
    ?>