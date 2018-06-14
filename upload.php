<?php
 
   $img = $_GET['img'];
   
   if (strpos($img, 'data:image/png;base64') === 0) {
       
      $img = str_replace('data:image/png;base64,', '', $img);
      $img = str_replace(' ', '+', $img);
      $data = base64_decode($img);
      $file = 'assets/uploads/uploads'.date("YmdHis").'.png';
   
      if (file_put_contents($file, $data)) {
         // echo "The canvas was saved as $file.";
         // echo json_encode(array(
         //    'success' : true,
         //    'url': $file
         // ));
         $return_data['success'] = true;
         $return_data['url'] = $file;
         echo json_encode($return_data);

      } else {
         $return_data['success'] = false;
         
         echo json_encode($return_data);
      }   
     
   } else{
      $return_data['success'] = false;
         
      echo json_encode($return_data); 
   }
 
?>