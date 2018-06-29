<?php
$method = $_SERVER['REQUEST_METHOD'];
$request = explode('/', trim($_SERVER['PATH_INFO'],'/'));
$json = json_decode(file_get_contents('http://username:password@webpos.rawntech.com/openbravo/org.openbravo.service.json.jsonrest/THR_App_Jb_Pst_Dtl'),true);


foreach ($json as $input =>$response){
    //echo $input;
    //echo $response;
foreach ($response as $response_array_name=> $response_value) {
    //echo $response_array_name . "\n" . "<br>";
    //echo $response_value . "\n" . "<br>";
        foreach ($response_value as $data_array => $data_value) {
            //echo $data_array . "\n" . "<br>";
            //echo $data_value . "\n" . "<br>";
                foreach ($data_value as $data_array_name => $data_array_value) {
                    if ($data_array_name=='_identifier') {
                        echo $data_array_name ." :". $data_array_value . "\n" . "<br>";
                    }

                    //echo $data_array_name . "\n" . "<br>";
                    //echo $data_array_value . "\n" . "<br>";   
            }
        }
}
  };
?>
