<?php session_start();
include_once 'core/admin.php';
$client  = new User();
$client->update_qoutation_date_time_replied();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="CSS/navbar.css">
    <link rel="stylesheet" href="bootstrap/animate.min.css">

    <title>Admin | Nibram Cleaning Services</title>

</head>
<style>
    body {
        background: linear-gradient(90deg, rgba(4,122,195, 1), rgba(233,233,233, 1) 100%);
    }
   .replied {
       width: 20px;
       /* display: none; */
   }
   table {
       background-color: #fff;
       border-radius: 10px;
   }
   .back {
       padding: 1rem 2.5rem;
       background: linear-gradient(#047AC3, #e9e9e9);
        font-size: 1.5rem;
        border-radius: 10px;
        transition: 0.5s ease;
   }
   .back:hover {
    transform: scale(.95);
   }
</style>

<body>
<div class="container wrap">
    <a href="adminNav.php" class="btn back mt-4"><span><<</span> Back</a>
    
    <section class="clientMessage my-5">
        <h3 class="text-center py-4">Clients Quatation Request</h3>
        <div class="scrollbar2 scrollbar-primary cart-items" style="overflow-x:auto;">
        
        <table class="table table-bordered" id="table-wrap">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Address</th>
                <th scope="col">Phone</th>
                <th scope="col">Email</th>
                <th scope="col">Service</th>
                <th scope="col">Message</th>
                <th scope="col">Status</th>
                <th scope="col">Date & Time Created</th>
                <th scope="col">Date & Time Reply</th>
                
              </tr>
            </thead>
            <tbody>
              <!-- <tr>
                <th scope="row">1</th>
                <td>Mark Otto</td>
                <td>54a, Admiralty Way, Lekki Phase 1, Lagos</td>
                <td>080234567</td>
                <td>mark.otto@gmail</td>
                <td>Genral Cleaning, Fumigation</td>
                <td>Lorem ipsum dolor sit amet consectetur adipisicing 
                    elit. </td>
                
                <td><button class="btn replyBtn" >Replied</button> <span><img src="Images/email-check.png" alt="" class="replied" style="display: none;"></span></td>
                <td></td>
                <td></td>
              </tr> -->
              
             <?php $client -> userQuote_request_details() ?>
              <!-- <tr>
                <th scope="row">3</th>
                <td>Mark Otto</td>
                <td>54a, Admiralty Way, Lekki Phase 1, Lagos</td>
                <td>080234567</td>
                <td>mark.otto@gmail</td>
                <td>Genral Cleaning, Fumigation</td>
                <td>Lorem ipsum dolor sit amet consectetur adipisicing 
                    elit. </td>
                
                <td><button class="btn replyBtn" >Replied</button> <span><img src="Images/email-check.png" alt="" class="replied" style="display: none;"></span></td>
                <td></td>
                <td></td>
              </tr> -->
            </tbody>
          </table>
        </div>
    </section>
</div>

<script src="JS/client.js"></script>

</body>

</html>