<?php 
    ob_start();

    
    session_start();
    include_once("./dbcon.php");
    // echo($_SESSION['uid']);exit();


    if (isset($_GET["id"])) {
        $updateid = $_GET["id"];
        $updatequery = "SELECT * FROM `RFA` WHERE id = '$updateid' ";
        $updatequeryresult = mysqli_query($connection, $updatequery);

        while ($updateresult = mysqli_fetch_array($updatequeryresult)) {
            $DATE_IN = $updateresult['DATE IN'];
            $Beneficiary = $updateresult['BENEFICIARY'];
            $Amount = $updateresult['AMOUNT'];
            $Treasury_no = $updateresult['treasury no'];
            $Voucher_no = $updateresult['voucher no'];
            $Are_receipts_OK = $updateresult['are receipts ok?'];
            $is_narration_ok = $updateresult['is narration ok?'];
            $is_account_changed = $updateresult['is account changed?'];
            $batch_no = $updateresult['Batch no'];
            $payment_date = $updateresult['payment date'];
            $transaction_type = $updateresult['transaction type'];
            $are_signatures_ok = $updateresult['are signatures ok?'];
            $are_assets_included = $updateresult['Are assets included?'];
            $is_cert_of_honour_ok = $updateresult['is cert. of honour ok?'];
            $cacu_list = $updateresult['cacu list'];
            $int_audit_list = $updateresult['int audit list'];
            $fixed_asset_list = $updateresult['fixed asset list'];
            $final_acct_list = $updateresult['final acct list'];
            $is_voucher_paid_in_installments = $updateresult['is voucher paid in instalments?'];
            $is_voucher_fully_paid = $updateresult['is voucher fully paid?'];
            $voucher_payment_outstanding = $updateresult['voucher payment outstanding'];
            $voucher_payment_full = $updateresult['voucher payment paid in full'];
            $voucher_to_copy_list = $updateresult['voucher to copy list'];
            $are_receipts_stamped = $updateresult['Are receipts stamped?'];
            $is_voucher_retired = $updateresult['is voucher retired?'];
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
                        <label for="Date In">Date In</label><br />
                        <input type="text" name="Udate" value="<?php echo $DATE_IN; ?>">
                    </div>

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
                        <label for="Payment Date">Payment Date</label><br />
                        <input type="text" name="Upayment_date" value="<?php echo $payment_date; ?>">
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
                        <input type="text" name="Uis_account_changed" value="<?php echo $is_account_changed ?>">
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
                        <label for="Cacu List">Cacu List</label><br />
                        <input type="text" name="Ucacu_list" value="<?php echo $cacu_list; ?>">
                    </div>
                    <div class="input-group">
                        <label for="Int Audit List">Int Audit List</label><br />
                        <input type="text" name="Uint_audit_list" value="<?php echo $int_audit_list; ?>">
                    </div>
                    <div class="input-group">
                        <label for="Fixed Asset List">Fixed Asset List</label><br />
                        <input type="text" name="Ufixed_asset_list" value="<?php echo $fixed_asset_list; ?>">
                    </div>
                    <div class="input-group">
                        <label for="Final Acct List">Final Acct List</label><br />
                        <input type="text" name="Ufinal_acct_list" value="<?php echo $final_acct_list; ?>">
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
        // $id = $_POST['id'];
        $id = $_GET['id'];
        $Udate = $_POST['Udate'];
        $Ubeneficiary = $_POST['Ubeneficiary'];
        $Uamount = $_POST['Uamount'];
        $Utnum = $_POST['Utnum'];
        $Uvnum = $_POST['Uvnum'];
        $Upayment_date = $_POST['Upayment_date'];
        $Uare_receipts_ok = $_POST['Uare_receipts_ok'];
        $Uis_narration_ok = $_POST['Uis_narration_ok'];
        $Uis_account_changed = $_POST['Uis_account_changed'];
        $Ubatch_no = $_POST['Ubatch_no'];
        $Utransaction_type = $_POST['Utransaction_type'];
        $Uare_signatures_ok = $_POST['Uare_signatures_ok'];
        $Uare_assets_included = $_POST['Uare_assets_included'];
        $Uis_cert_honour = $_POST['Uis_cert_honour'];
        $Ucacu_list = $_POST['Ucacu_list'];
        $Uint_audit_list = $_POST['Uint_audit_list'];
        $Ufixed_asset_list = $_POST['Ufixed_asset_list'];
        $Ufinal_acct_list = $_POST['Ufinal_acct_list'];
        $Uvoucher_instalment = $_POST['Uvoucher_instalment'];
        $Uvoucher_outstanding = $_POST['Uvoucher_outstanding'];
        $Uvoucher_payment_full = $_POST['Uvoucher_payment_full'];
        $Uvoucher_fully_paid = $_POST['Uis_voucher_fully_paid'];
        $Uvoucher_copy = $_POST['Uvoucher_copy'];
        $Uare_receipts_stamped = $_POST['Uare_receipts_stamped'];
        $Uvoucher_retired = $_POST['Uvoucher_retired'];
    
        // $id= $_SESSION['id'];

    
        $updatequery = "UPDATE `RFA` SET `DATE IN`= '$Udate', `BENEFICIARY`= '$Ubeneficiary', `AMOUNT`= '$Uamount',`treasury no`= '$Utnum',`voucher no`= '$Uvnum',`are receipts ok?`= '$Uare_receipts_ok',`is narration ok?`= '$Uis_narration_ok',`is account changed?`= '$Uis_account_changed',`Batch no`= '$Ubatch_no', `transaction type`= '$Utransaction_type',`payment date`= '$Upayment_date', `are signatures ok?`= '$Uare_signatures_ok',`Are assets included?`= '$Uare_assets_included',`is cert. of honour ok?`= '$Uis_cert_honour',`cacu list`= '$Ucacu_list', `int audit list`= '$Uint_audit_list',`fixed asset list`= '$Ufixed_asset_list', `final acct list`= '$Ufinal_acct_list', `is voucher paid in instalments?`= '$Uvoucher_instalment',`is voucher fully paid?`= '$Uvoucher_fully_paid',`voucher payment outstanding`= '$Uvoucher_outstanding',`voucher payment paid in full`= '$Uvoucher_payment_full',`voucher to copy list`= '$Uvoucher_copy',`Are receipts stamped?`= '$Uare_receipts_stamped',`is voucher retired?`= '$Uvoucher_retired' WHERE id = '$id'";
        
        // mysqli_query($connection,$updatequery);
        // echo "<script>alert('Record Updated!');</script>";


        
        if (mysqli_query($connection, $updatequery)) {
            echo "<script>alert('Record Updated!');</script>";
        } else {
            echo "Error updating record: " . mysqli_error($connection);
        }

        // close connection
        mysqli_close($connection);

    
    
    }


?>