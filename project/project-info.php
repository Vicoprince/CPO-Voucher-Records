<?php 
    ob_start();

    include_once("../dbcon.php");
    session_start();
    // echo($_SESSION['uid']);exit();


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>P R O J E <Code></Code> T | Info</title>

    <link rel="stylesheet" href="../css/info.css">

</head>
<body>
    <div class="container">
        <div class="sidenav">
            <div class="sidenav-header">
                <h1>PROJECT</h1>
                
            </div>
            <a href="project-index.php"><h4>Add Record</h4></a>
            <a href="project-search.php"><h4>Search Record</h4></a>
            <!-- <a href="#"><h4>Update Record</h4></a> -->
        </div>

        <div class="content">
            <div class="topnav">
                <div class="title">
                    <h1>Welcome Admin</h1>
                </div>

                <!-- Add admin icon -->
                 <div class="user-info">
                    <img src="../windows.jpg" alt="admin-image">
                    <span class="dropdown-menu">
                        Admin
                        <ul>
                            <li><a href="project-login.php">Logout</a></li>
                        </ul>
                    </span>
                </div>
            </div>
            
            <div class="form-container">
                <div class="button-link-container">
                        <a href="./project-search.php"><button class="return-button">Back</button></a>
                    
                        <a href="project-update.php?id=<?php echo $_SESSION['uid']; ?>"><button class="update-button">Update Record</button></a>
                </div>

                <?php 
                    if(isset($_REQUEST['id'])) {
                        $id = $_REQUEST['id'];
                    }
                
                ?>

                <?php 
                    include_once("../dbcon.php");

                    $query = "SELECT * FROM `project` WHERE `id` = '$id'";

                    $run = mysqli_query($connection,$query);

                    if(mysqli_num_rows($run)<1) {
                        echo "<script> alert('No Data Found'); </script>";
                    }
                    else{
                        $count = 0;
                        while($data = $run->fetch_assoc()) {
                            $count++;

                        ?>

                        <table class="info-table" style="margin-top: 30px; margin-left: 20px; width: 65%" cellpadding="20px">
                            <tr colspan="2">
                                <th>ID :</th>
                                <td><?php echo $data['id']; ?></td>
                            </tr>
                            <tr>
                                <th>Beneficiary :</th>
                                <td><?php echo $data['BENEFICIARY']; ?></td>
                                <th>Amount:</th>
                                <td><?php echo $data['AMOUNT']; ?></td>
                            </tr>
                            <tr>
                                <th>Treasury Number :</th>
                                <td><?php echo $data['treasury no']; ?></td>
                                <th>Voucher Number :</th>
                                <td><?php echo $data['voucher no']; ?></td>
                            </tr>
                            <tr>
                                <th>Transaction Type :</th>
                                <td><?php echo $data['transaction type']; ?></td>
                                <th>Batch Number :</th>
                                <td><?php echo $data['Batch no']; ?></td>
                            </tr>
                            <tr>
                                <th>Payment Date :</th>
                                <td><?php echo $data['payment date']; ?></td>
                                <th>Are Receipts Ok :</th>
                                <td><?php echo $data['are receipts ok?']; ?></td>
                                
                            </tr>
                            <tr>
                                <th>Is Narration Ok?  :</th>
                                <td><?php echo $data['is narration ok?']; ?></td>
                                <th>Is Account Changed? :</th>
                                <td><?php echo $data['is account changed?']; ?></td>
                                
                            </tr>

                            <tr>
                                <th>Are Signatures OK? :</th>
                                <td><?php echo $data['are signatures ok?']; ?></td>
                            </tr>

                            <tr>
                                <th>Are Assets Included? :</th>
                                <td><?php echo $data['Are assets included?']; ?></td>
                                <th>Is Cert. of Honour OK? :</th>
                                <td><?php echo $data['is cert. of honour ok?']; ?></td>
                            </tr>

                            <tr>
                                <th>Cacu List :</th>
                                <td><?php echo $data['cacu list']; ?></td>
                                <th>Int Audit List :</th>
                                <td><?php echo $data['int audit list']; ?></td>
                            </tr>
                            
                            <tr>
                                <th>Fixed Asset List :</th>
                                <td><?php echo $data['fixed asset list']; ?></td>
                                <th>Final Acc List :</th>
                                <td><?php echo $data['final acct list']; ?></td>
                            </tr>

                            <tr>
                                <th>Is Voucher Paid in Installments :</th>
                                <td><?php echo $data['is voucher paid in instalments?']; ?></td>
                                <th>Is Voucher Fully Paid :</th>
                                <td><?php echo $data['is voucher fully paid?']; ?></td>
                            </tr>
                            <tr>
                                <th>Voucher Payment Outstanding :</th>
                                <td><?php echo $data['voucher payment outstanding']; ?></td>
                                <th>Voucher Payment Full :</th>
                                <td><?php echo $data['voucher payment paid in full']; ?></td>
                            </tr>
                            <tr>
                                <th>Voucher To Copy List :</th>
                                <td><?php echo $data['voucher to copy list']; ?></td>
                            </tr>
                            <tr>
                                <th>Are Receipts Stamped :</th>
                                <td><?php echo $data['Are receipts stamped?']; ?></td>
                            </tr>
                            <tr>
                                <th>Is Voucher Retired :</th>
                                <td><?php echo $data['is voucher retired?']; ?></td>
                            </tr>
                        </table>

                        <?php

                        }
                    }

                ?>

            </div>
            
        </div>

    </div>
</body>
</html>