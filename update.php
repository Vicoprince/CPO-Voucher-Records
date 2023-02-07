<?php 
    ob_start();

    
    session_start();
    include_once("./dbcon.php");
    // echo($_SESSION['uid']);exit();


    if (isset($_GET["id"])) {
        $updateid = $_GET["id"];
        $updatequery = "SELECT * FROM `rfa` WHERE id = '$updateid' ";
        $updatequeryresult = mysqli_query($connection, $updatequery);

        while ($updateresult = mysqli_fetch_array($updatequeryresult)) {
            $Beneficiary = $updateresult['Beneficiary'];
            $Amount = $updateresult['Amount'];
            $Treasury_no = $updateresult['treasury_no'];
            $Voucher_no = $updateresult['voucher_no'];
            $Receipt_no = $updateresult['receipt_no'];
            $Are_receipts_OK = $updateresult['are_receipts_ok'];
            $is_narration_ok = $updateresult['is_narration_ok'];
            $is_account_changed = $updateresult['is_account_changed'];
            $batch_no = $updateresult['Batch_no'];
            $transaction_type = $updateresult['transaction_type'];
            $are_signatures_ok = $updateresult['are_signatures_ok'];
            $are_assets_included = $updateresult['are_assets_included'];
            $is_cert_of_honour_ok = $updateresult['is_cert_of_honour_ok'];
            $is_voucher_paid_in_installments = $updateresult['is_voucher_paid_in_insttalments'];
            $is_voucher_fully_paid = $updateresult['is_voucher_fully_paid'];
            $voucher_payment_outstanding = $updateresult['voucher_payment_outstanding'];
            $voucher_payment_full = $updateresult['voucher_payment_full'];
            $voucher_to_copy_list = $updateresult['voucher_to_copy_list'];
            $are_receipts_stamped = $updateresult['are_receipts_stamped'];
            $is_voucher_retired = $updateresult['is_voucher_retired'];
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>R F A | Update Record</title>

    <link rel="stylesheet" href="./css/update.css">
</head>
<body>
    <div class="container">
        <div class="sidenav">
            <div class="sidenav-header">
                <h1>RFA</h1>
                
            </div>
            <a href="index.php"><h4>Add Record</h4></a>
            <a href="rfa_search.php"><h4>Search Record</h4></a>
            <!-- <a href="#"><h4>Update Record</h4></a> -->
        </div>

        <div class="content">
            <div class="topnav">
                <div class="title">
                    <h1>Welcome Admin</h1>
                </div>

                <!-- Add admin icon -->
                <div class="user-info">
                    <img src="./windows.jpg" alt="admin-image">
                    <span class="dropdown-menu">
                        Admin
                        <ul>
                            <li><a href="rfa-login.php">Logout</a></li>
                        </ul>
                    </span>
                </div>
            </div>

            <div class="form-container">
                <form action="" method="POST">
                    <div class="input-group">
                        <label for="Beneficiary">Beneficiary</label><br />
                        <input type="text" name="Ubeneficiary" value="<?php echo $Beneficiary; ?>">
                    </div>

                    <div class="input-group">
                        <label for="Amount">Amount</label><br />
                        <input type="text" name="Uamount" value="<?php echo $Amount; ?>">
                    </div>
                    
                    <div class="input-group">
                        <label for="Treasury Number">Treasury Number</label><br />
                        <input type="text" name="Utnum" value="<?php echo $Treasury_no; ?>">
                    </div>

                    <div class="input-group">
                        <label for="Voucher Number">Voucher Number</label><br />
                        <input type="text" name="Uvnum" value="<?php echo $Voucher_no; ?>">
                    </div>

                    <div class="input-group">
                        <label for="Reciept Number">Receipt Number</label><br />
                        <input type="text" name="Urnum" value="<?php echo $Receipt_no; ?>">
                    </div>
                    
                    <div class="input-group">
                        <label for="">Are Reciepts OK</label><br />
                        <input type="text" name="Uare_receipts_ok" value="<?php echo $Are_receipts_OK; ?>">
                    </div>
                    
                    <div class="input-group">
                        <label for="Is Naaration OK">Is Narration OK</label><br />
                        <input type="text" name="Uis_narration_ok" value="<?php echo $is_narration_ok; ?>">
                    </div>

                    <div class="input-group">
                        <label for="Is Account Changed">Is Account Changed</label><br />
                        <input type="text" name="Uis_amount_changed" value="<?php echo $is_account_changed ?>">
                    </div>

                    <div class="input-group">
                        <label for="Is Tax Paid">Batch Number</label><br />
                        <input type="text" name="Ubatch_no" value="<?php echo $batch_no; ?>">
                    </div>
                    
                    <div class="input-group">
                        <label for="Is Tax Paid">Transaction Type</label><br />
                        <input type="text" name="Utransaction_type" value="<?php echo $transaction_type; ?>">
                    </div>

                    <div class="input-group">
                        <label for="Are Signatures OK">Are Signatures OK</label><br />
                        <input type="text" name="Uare_signatures_ok" value="<?php echo $are_signatures_ok; ?>">
                    </div>

                    <div class="input-group">
                        <label for="Are Assets Included">Are Assets Included</label><br />
                        <input type="text" name="Uare_assets_included" value="<?php echo $are_assets_included; ?>">
                    </div>

                    <div class="input-group">
                        <label for="Is Cert. of Honour OK">Is Cert. of Honour OK</label><br />
                        <input type="text" name="Uis_cert_honour" value="<?php echo $is_cert_of_honour_ok; ?>">
                    </div>

                    <div class="input-group">
                        <label for="Is Voucher Paid in Installments">Is Voucher Paid in Installments</label><br />
                        <input type="text" name="Uvoucher_instalment" value="<?php echo $is_voucher_paid_in_installments; ?>">
                    </div>

                    <div class="input-group">
                        <label for="Is Voucher Fully Paid">Is Voucher Fully Paid</label><br />
                        <input type="text" name="Uis_voucher_fully_paid" value="<?php echo $is_voucher_fully_paid; ?>">
                    </div>

                    <div class="input-group">
                        <label for="Voucher Payment Outstanding">Voucher Payment Outstanding</label><br />
                        <input type="text" name="Uvoucher_outstanding" value="<?php echo $voucher_payment_outstanding; ?>">
                    </div>

                    <div class="input-group">
                        <label for="Voucher Payment Full">Voucher Payment Full</label><br />
                        <input type="text" name="Uvoucher_payment_full" value="<?php echo $voucher_payment_full; ?>">
                    </div>

                    <div class="input-group">
                        <label for="Voucher To Copy List">Voucher To Copy List</label><br />
                        <input type="text" name="Uvoucher_copy" value="<?php echo $voucher_to_copy_list; ?>">
                    </div>

                    <div class="input-group">
                        <label for="Are Reciepts Stamped">Are Reciepts Stamped</label><br />
                        <input type="text" name="Uare_receipts_stamped" value="<?php echo $are_receipts_stamped; ?>">
                    </div>

                    <div class="input-group">
                        <label for="Is Voucher Retired">Is Voucher Retired</label><br />
                        <input type="text" name="Uvoucher_retired" value="<?php echo $is_voucher_retired; ?>">
                    </div>

                    <div class="input-group">
                        <button type="submit" name="update">Update</button>
                    </div>
                </form>
            </div>

            
        </div>

    </div>
</body>
</html>


<?php 
    include_once("./dbcon.php");

    // session_start(['id']);


    // $id = $_SESSION['id'];

    if (isset($_POST['update'])) {
        $id = $_SESSION['uid'];
        $Ubeneficiary = $_POST['Ubeneficiary'];
        $Uamount = $_POST['Uamount'];
        $Utnum = $_POST['Utnum'];
        $Uvnum = $_POST['Uvnum'];
        $Urnum = $_POST['Urnum'];
        $Uare_receipts_ok = $_POST['Uare_receipts_ok'];
        $Uis_narration_ok = $_POST['Uis_narration_ok'];
        $Uis_amount_changed = $_POST['Uis_amount_changed'];
        $Ubatch_no = $_POST['Ubatch_no'];
        $Utransaction_type = $_POST['Utransaction_type'];
        $Uare_signatures_ok = $_POST['Uare_signatures_ok'];
        $Uare_assets_included = $_POST['Uare_assets_included'];
        $Uis_cert_honour = $_POST['Uis_cert_honour'];
        $Uvoucher_instalment = $_POST['Uvoucher_instalment'];
        $Uvoucher_outstanding = $_POST['Uvoucher_outstanding'];
        $Uvoucher_payment_full = $_POST['Uvoucher_payment_full'];
        $Uvoucher_fully_paid = $_POST['Uis_voucher_fully_paid'];
        $Uvoucher_copy = $_POST['Uvoucher_copy'];
        $Uare_receipts_stamped = $_POST['Uare_receipts_stamped'];
        $Uvoucher_retired = $_POST['Uvoucher_retired'];
    
        // $id= $_SESSION['id'];

    
        $updatequery = "UPDATE `rfa` SET `Beneficiary`= '$Ubeneficiary', `Amount`= '$Uamount',`treasury_no`= '$Utnum',`voucher_no`= '$Uvnum',`receipt_no`= '$Urnum',`are_receipts_ok`= '$Uare_receipts_ok',`is_narration_ok`= '$Uis_narration_ok',`is_account_changed`= '$Uis_amount_changed',`Batch_no`= '$Ubatch_no', `transaction_type`= '$Utransaction_type', `are_signatures_ok`= '$Uare_signatures_ok',`are_assets_included`= '$Uare_assets_included',`is_cert_of_honour_ok`= '$Uis_cert_honour',`is_voucher_paid_in_insttalments`= '$Uvoucher_instalment',`is_voucher_fully_paid`= '$Uvoucher_fully_paid',`voucher_payment_outstanding`= '$Uvoucher_outstanding',`voucher_payment_full`= '$Uvoucher_payment_full',`voucher_to_copy_list`= '$Uvoucher_copy',`are_receipts_stamped`= '$Uare_receipts_stamped',`is_voucher_retired`= '$Uvoucher_retired' WHERE id = '$id'";
        
        mysqli_query($connection,$updatequery);
        echo "<script>alert('Record Updated!');</script>";


    
    
    }


?>