<?php 
if (isset($_POST['name']) && isset($_POST['quantity'])) {
  $name = $_POST['name'];
  $quantity = $_POST['quantity'];


  $data = json_decode(file_get_contents('data.json'), true);


  if(isset($data[$name])){
      $data[$name]["remainingSalesToday"] = (int)$quantity;


      file_put_contents('data.json', json_encode($data, JSON_PRETTY_PRINT));
   }

}
?>
