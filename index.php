<?php
        include("zklib/zklib.php");

      $zk = new ZKLib("192.168.0.121", 4370);
     // $zk = new ZKLib("192.168.0.201", 4370);

    date_default_timezone_set("Asia/Dhaka") ;
    
    
    
    $ret = $zk->connect();
    sleep(1);
    if ( $ret ): 
        $zk->disableDevice();
        sleep(1);


// try {
                
//                 //$zk->setUser(1, '1', 'Admin', '', LEVEL_ADMIN);
//                 $user = $zk->getUser();


//                 // print_r("<pre>");
//                 // print_r($user);
//                    // exit; 

              
//             } catch (Exception $e) {
//                 header("HTTP/1.0 404 Not Found");
//                 header('HTTP', true, 500); // 500 internal server error                
//             }





  
     $attendance = $zk->getAttendance();

    
    
     // print_r( $attendance);
       $json=  json_encode($attendance);


        $dump=(json_decode($json, true));


        print_r("<pre>");
        print_r($dump);

 
        $zk->getTime();
        $zk->enableDevice();
        $zk->disconnect();
        endif


?>
