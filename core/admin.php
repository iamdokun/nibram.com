<?php
class Admin extends mysqli{
    function __construct(){
    Parent:: __construct("localhost","root","","nibram.com");

    if($this->connect_error){
      echo  $_SESSION['error'] = "DB connect error :". $this->connect_error;
        return;
    }
//    $user ='nibrpbzp_nibram';
//     $dataname = 
//     $server = 'localhost:3306';
//     $Userrr= 'nibrpbzp@localhost';
}

public function login($user,$pass){
    // check if email exists
   $q = "SELECT admin_id FROM admin WHERE admin_user_name = '$user'";
   $run = $this->query($q);
   if($run ->num_rows > 0){
       // fetch the details returned into an object
        $row = $run->fetch_object();
       $q = "SELECT * FROM admin WHERE admin_id = '$row->admin_id'";
       $run = $this->query($q);
       // fetch the details returned into an object
       $row = $run->fetch_object();
       // verify username
       if($row->admin_user_name !== $user ){
        $_SESSION['username'] = 'Wrong User Name';
        return;
       }else{
                // verify password
       if($row->password == $pass){
        $_SESSION['admin'] = $row;
        header('Location:adminNav.php');
 }else{
$_SESSION['password'] = 'Wrong password';
return;
}
       }
      
        
   }else{
      $_SESSION['error'] = 'You are not an admin';
   }
   
}




}

class User extends Admin{
    // insert client messages, from contact.php page
    public function insertUser($data){
        $error =[]; 
        $fullname = $data['full_name'];
        $phone_no = $data['phone_number'];
        $email = $data['email']; 

        // VALIDATION

        if(empty($fullname)){
           $error[] = $_SESSION['fullname'] = 'Pls your full name is required'; 
           return;
        }
         // check if it contains only letter and spaces
         if(!preg_match("/^[a-zA-Z-' ]*$/", $fullname)){
            $error[] = $_SESSION['fullname'] = 'Only letters and spaces are allowed pls';
            return;
        }
        // check if it contains only number
        if(!preg_match("/^[0-9]/", $phone_no)){
            $error[] =  $_SESSION['phone'] = 'Only  numbers are allowed pls';
            return;
        }

        if(empty($phone_no)){
            $error[] = $_SESSION['phone'] = 'Your phone number is required pls';
            return;
         }

         // check if email is well formatted
          
        if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
            $error[] =   $_SESSION['email'] = 'Invalid email address';
            return;
        }
        
        if(empty($error)){
            // sanitize inputs
           $this -> sanitizeInput($fullname);
           $this -> sanitizeInput($phone_no);
           $this -> sanitizeInput($email);
           $this -> sanitizeInput($data['message']);

            $q = "INSERT INTO client (full_name,phone_number,email_address,	message) VALUES('$fullname','$phone_no','$email','$data[message]')";
     
            // query db
            try{$run = $this->query($q);
            }catch(Exception $rr){
                echo $rr->getMessage();
            }
            //$row = $run->fetch_object();
            if($run){
                    // header('Location:contact.php');
                   // get user full name and send a success message
                   $user= $this -> get_user_details($data['email']);
                  $_SESSION['id'] = $user->full_name;
                   //echo "<script>alert('$_SESSION[id], your message has been sent. We will get back to you soon')</script>";
                   $_SESSION['success'] = $_SESSION['id'] . ' your message has been sent. We will get back to you soon'; 
                  // echo "<script>window.open('contact.php','_self')</script>";
    
            }else{
                     $_SESSION['error'] = "System Errors, pls try again";
                    
            }
    

        }
    
      

    }

     // insert client request from services  page
     public function insertClientRequest($data){
          $servicesArray = array();
        //   foreach($data['services'] as $services){
            
        //     array_push($servicesArray,$services);
        //   }
        $data['services'];
        $string = implode(",",$data['services']);
        // 
        $q = "INSERT INTO client_request (serv_id,full_name,phone_no,email_address,	message) VALUES('$string','$data[name]','$data[phone_number]','$data[email]','$data[message]')";
     
        // query db
        try{$run = $this->query($q);
        }catch(Exception $rr){
            echo $rr->getMessage();
        }
        //$row = $run->fetch_object();
        if($run){
               // get user full name and send a success message
               $user= $this -> getRequestQuoteUser($data['email']);
               $_SESSION['id'] = $user->full_name;
               echo "<script>alert('$_SESSION[id], your message has been sent. We will get back to you soon')</script>";
               $current_url = $_SERVER['REQUEST_URI'];
               echo "<script>window.open($current_url,'_self')</script>";

        }else{
            echo $this->connect_error;
                 $_SESSION['error'] = "System Errors, pls try again";
                
        }


    }


    // This function will help us start a session immediately the user details are collected 
    public function get_user_details($email){
        $q = "SELECT * FROM client WHERE email_address = '$email'";
        $run = $this->query($q);
        if(!$run){
            echo $this->connect_error;    
        }
        $row = $run->fetch_object();
        return $row;
    }
    public function getRequestQuoteUser($email){
        $q = "SELECT * FROM client_request WHERE email_address = '$email'";
        $run = $this->query($q);
        if(!$run){
            echo $this->connect_error;    
        }
        $row = $run->fetch_object();
        return $row;
    }
    
// This data is basically displayed on clientData.php;
    public function get_client_details(){
        $q ="SELECT * FROM client";
        $run = $this->query($q);
        if(!$run){
            echo $this->connect_error;
        }else{
            while($row = $run->fetch_object()){
                $client_id= $row->client_id;
                $clientname = $row->full_name;
                $clientemail = $row->email_address;
                $clientphone = $row->phone_number;
                $clientmessage = $row->message;
                $clientstatus = $row->status;
                $clientdate_added = $row->date_added;
                $client_date_replied = $row->date_replied;

               

               echo"
               <tr>
               <th scope='row'></th>
               <td>$clientname</td>
               <td>$clientemail</td>
               <td>$clientphone</td>
               <td>$clientmessage</td>
               <td><a href='clientData.php?name=$client_id'><button class='btn replyBtn' name='' type='submit' >reply</button></a> <span><img src='Images/email-check.png' alt='' class='replied' style='display: none;'></span></td>
               <td>$clientdate_added</td>
               <td>$client_date_replied</td>
               
             </tr>
               ";

              
                
            }
        }

    }
    //This method is used to update date and time replied on client.php as the admin clicks reply
         public function update_date_time(){
            if(isset($_GET['name'])){
                $update_id = $_GET['name'];
                // set time zone
                $timezone = date_default_timezone_set('Africa/Lagos');
                // get current time
                 $timestamp = time();
                 //convert time to a readable format and get date
                 $current_date_time = date("F d, Y h:i:s", $timestamp);
                
 
                 $p = "UPDATE client SET date_replied = '$current_date_time'  WHERE client_id = '$update_id'";
                 $q = $this->query($p);
                //  $update_id = '';
                 header('Location:clientData.php');
                   //echo dirname($_SERVER['REQUEST_URI']) .'/clientData.php';
                //  unset($_GET['name']);
            //    echo  $_SERVER['REQUEST_URI'] = dirname($_SERVER['REQUEST_URI']) .'/clientData.php';
             $currrent_url = $_SERVER['SERVER_NAME'] .''. $_SERVER['REQUEST_URI'];
            if(strpos($currrent_url,'clientData.php?name="$update_id"')){
                echo 'yea';
            };
                //  if(isset($_GET['name'])){
                //     $_GET['name'] = '';
                //  }
                 //preventDefault ();

              }
         }
     
    // This data is basically displayed on Quotation.php;
    public function userQuote_request_details(){
        $q ="SELECT * FROM client_request";
        $run = $this->query($q);
        if(!$run){
            echo $this->connect_error;
        }else{
            while($row = $run->fetch_object()){
                $serv_id = $row->serv_id;
                $request_id = $row->request_id;
                $clientname = $row->full_name;
                $clientaddress = $row->address;
                $clientemail = $row->email_address;
                $clientphone = $row->phone_no;
                $clientmessage = $row->message;
                // $clientstatus = $row->status;
                $clientdate_added = $row->date_added;
                $client_date_replied = $row->date_replied;

                //use services id to get the services required
                // since serv_id was sent as a string, lets convert to array first
                //echo $serv_id;
                //$serv = explode(",",$serv_id);
                //var_dump($serv);
                // $serv_array = [];
               
               
                // $st = $this->geting_serv_id($serv_id);
            //    foreach($serv as $ser){
                   
            //        $p = "SELECT * FROM services WHERE service_id = '$ser'";
            //        $run = $this->query($p);
                   // fetch objects
            //        $s =$run->fetch_object();

            //        array_push($serv_array,$s->service_title);

                  
              
               
            //    }

                // converting the array back to string
                // $serv_st = implode(",",$serv_array);
                // echo $serv_st;
              

                
                echo "
  
                 <tr>
                 <th scope='row'></th>
                 <td>$clientname</td>
                 <td> $clientaddress</td>
                 <td>$clientphone</td>
                 <td>$clientemail</td>
                 
                 <td>";
  
  
                $this->geting_serv_id($serv_id);
  
         echo " </td>
                 <td>$clientmessage</td>
                 <td><a href='quotation.php?update_date_time=$request_id'><button class='btn replyBtn' >reply</button> </a><span><img src='Images/email-check.png' alt='' class='replied' style='display: none;'></span></td>
                 <td>$clientdate_added</td>
                 <td>$client_date_replied</td>
                 ";

            }
            
        }

    }
    
    public function geting_serv_id($serv_id){
        $serv_array = explode(",",$serv_id);
        foreach($serv_array as $ser){
           
            $p = "SELECT * FROM services WHERE service_id = '$ser'";
            $run = $this->query($p);
            // fetch objects
            $s = $run->fetch_object();
           // var_dump( $s);
          //echo gettype($s);
          $serv_array = [];
         // var_dump($s->service_title);
            array_push($serv_array,$s->service_title);
            // converting the array back to string
             $serv_st = implode(",",$serv_array);
            echo  $serv_st .' , ';

       }
    }

    //  function loop_over_serv_ids($serv_id,$conn){
    //     $serv_array=explode(',',$serv_id);
    //     foreach($serv_array as $serve)
    //     {
    //         $query="SELECT * FROM services WHERE service_id='$serve'";
    //         $run = $conn->query($query);

    //         // fetch objects
    //         $s =$run->fetch_object();
    //         $serv_array=[];
    //         array_push($serv_array,$s->service_title);

    //         // converting the array back to string
    //         $serv_st = implode(",",$serv_array);
    //         echo $serv_st . ' , ';  //using echo here i am not so sure about but it works

    //     }
    // }

//    $q = "SELECT * FROM client_request";
//         $run = $conn->query($q);
//         if (!$run) {
//             echo $conn->connect_error;
//         } else {
//             while ($row = $run->fetch_object()) {
//                 $serv_id = $row->serv_id;
//                 $clientname = $row->full_name;
//                 $clientemail = $row->email_address;
//                 $clientphone = $row->phone_no;
//                 $clientmessage = $row->message;
//                 // $clientstatus = $row->status;
//                 $clientdate_added = $row->date_added;
//                 $client_date_replied = $row->date_replied;





//                 echo "
// <table>
//                <tr>
//                <th scope='row'></th>
//                <td>$clientname</td>
//                <td>$clientemail</td>
//                <td>$clientphone</td>
//                <td>$clientmessage</td>
//                <td>";


// echo loop_over_serv_ids($serv_id,$conn);

//        echo " </td>
//                <td><button class='btn replyBtn' >reply</button> <span><img src='Images/email-check.png' alt='' class='replied' style='display: none;'></span></td>
//                <td>$client_date_replied</td>
//                <td></td>
//              </tr>
//             </table>";

//             }
//         }


//This method is used to update date and time replied on qoutation.php as the admin clicks reply
public function update_qoutation_date_time_replied(){
    if(isset($_GET['update_date_time'])){
        $update_id = $_GET['update_date_time'];
        // set time zone
        $timezone = date_default_timezone_set('Africa/Lagos');
        // get current time
         $timestamp = time();
         //convert time to a readable format and get date
         $current_date_time = date("F d, Y h:i:s", $timestamp);
        

         $p = "UPDATE client_request SET date_replied = '$current_date_time'  WHERE request_id = '$update_id'";
         $q = $this->query($p);
         header('Location:quotation.php');
       

      }
 }
    // This method inserts emails of clients or visitors that wants newsletter, it is called from headerServ.php and header.php;

       public function insert_email_for_client_nsletter($email){
           // check if email already exist
           $check = $this->check_user_email($email['email']);
           if($check){
            $_SESSION['success'] = 'Thanks,email already exist with us.';
            return;
           }else{
                $id = $this->ClientUnicID();
            $q = "INSERT INTO client_newsletter (email,client_id) VALUES ('$email[email]','$id')";
            $run = $this->query($q);
            if($run){
               $_SESSION['success'] = 'Thanks, we have received your email';
               //session_unset();


            }
           }
            
       }
// This method checks if user email already exist for news letter
    public function check_user_email($email){
        $q = "SELECT * FROM client_newsletter WHERE email = '$email'";
        $run = $this->query($q);
        if(!$run){
            echo $this->connect_error;    
        }
        $row = $run->fetch_object();
        return $row;
    }
  // This method displays users emails for newsletter, it is displayed on clientData.php page
    public function display_user_email(){
        $q = "SELECT * FROM client_newsletter";
        $run = $this->query($q);
        $num = $run->num_rows;
        
        if(!$run){
            echo $this->connect_error;    
        }
       while($row = $run->fetch_object()){
           $email = $row->email;
           $id = $row->client_id; 
           echo "
           <tr>
           <th scope='row'>$id</th>
           
           <td> $email</td>
           <td><input type='checkbox' name='' id=''><button class='btn'>Message</td>
         </tr>
           ";
       }

       
        
    }

    // method that gets clients unic id for news letter
    public function ClientUnicID(){
        $q = "SELECT * FROM client_newsletter";
        $run = $this->query($q);
        $rows = $run->num_rows;
        
        $id = $rows + 1;
        return $id;

    }

    public function getServices(){
        $q = "SELECT * FROM services";
        $run = $this->query($q);
        while($row = $run->fetch_object()){
            $service = $row->service_title;
            $service_id = $row->service_id;

            echo "
           
            <div class='form-check'>
                <input type='checkbox' name='services[]' value='$service_id' class='form-check-input' id='exampleCheck1'>
                <label class='form-check-label'  for='exampleCheck1'> $service</label>
            </div>
            ";
        }

    }
    // This methods sanitizes inputs

    public function sanitizeInput($input){
         htmlspecialchars($input);
         htmlspecialchars($input);
         stripslashes($input);
         trim($input);
    
    return $input;
    }
    

}













