<?php

    ob_start();
    include_once("../dbcon.php");

    $date_in = "";
    $beneficiary = "";
    $amount = "";
    $tnum = "";
    $vnum = "";
    $transaction_type = "";
    $batch_no = "";
    $payment_date = "";
    $are_receipts_ok = "";
    $is_narration_ok = "";
    $is_account_changed = "";
    $are_signatures_ok = "";
    $are_assets_included = "";
    $is_cert_honour = "";
    $cacu_list = "";
    $int_audit_list = "";
    $fixed_asset_list = "";
    $final_acc_list = "";
    $voucher_instalment = "";
    $voucher_fully_paid = "";
    $voucher_outstanding = "";
    $voucher_payment_full = "";
    $voucher_copy = "";
    $are_receipts_stamped = "";
    $voucher_retired = "";

    if (isset($_POST['submit'])) {
        $date_in = $_POST['date_in'];
        $beneficiary = $_POST['beneficiary'];
        $amount = $_POST['amount'];
        $tnum = $_POST['tnum'];
        $vnum = $_POST['vnum'];
        $transaction_type = $_POST['transaction_type'];
        $batch_no = $_POST['batch_no'];
        $payment_date = $_POST['payment_date'];
        $are_receipts_ok = $_POST['are_receipts_ok'];
        $is_narration_ok = $_POST['is_narration_ok'];
        $is_account_changed = $_POST['is_account_changed'];
        $are_signatures_ok = $_POST['are_signatures_ok'];
        $are_assets_included = $_POST['are_assets_included'];
        $is_cert_honour = $_POST['is_cert_honour'];
        $cacu_list = $_POST['cacu_list'];
        $int_audit_list = $_POST['int_audit_list'];
        $fixed_asset_list = $_POST['fixed_asset_list'];
        $final_acc_list = $_POST['final_acc_list'];
        $voucher_instalment = $_POST['voucher_instalment'];
        $voucher_fully_paid = $_POST['is_voucher_fully_paid'];
        $voucher_outstanding = $_POST['voucher_outstanding'];
        $voucher_payment_full = $_POST['voucher_payment_full'];
        $voucher_copy = $_POST['voucher_copy'];
        $are_receipts_stamped = $_POST['are_receipts_stamped'];
        $voucher_retired = $_POST['voucher_retired'];

        $sqlquery = "INSERT INTO `project`(`DATE IN`, `BENEFICIARY`, `AMOUNT`, `treasury no`, `voucher no`, `transaction type`, `Batch no`, `payment date`, `are receipts ok?`, `is narration ok?`, `is account changed?`, `are signatures ok?`, `Are assets included?`, `is cert. of honour ok?`, `cacu list`, `int audit list`, `fixed asset list`, `final acct list`, `is voucher paid in instalments?`, `is voucher fully paid?`, `voucher payment outstanding`, `voucher payment paid in full`, `voucher to copy list`, `Are receipts stamped?`, `is voucher retired?`) VALUES ('$date_in','$beneficiary','$amount','$tnum','$vnum','$transaction_type','$batch_no','$payment_date','$are_receipts_ok','$is_narration_ok','$is_account_changed','$are_signatures_ok','$are_assets_included','$is_cert_honour','$cacu_list','$int_audit_list','$fixed_asset_list','$final_acc_list','$voucher_instalment','$voucher_fully_paid','$voucher_outstanding','$voucher_payment_full','$voucher_copy','$are_receipts_stamped','$voucher_retired')";

        if(!mysqli_query($connection,$sqlquery)) {
            die('Error in record insertion'.mysqli_errno($connection));
        }
    }
    ob_start();

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>P R O J E C T | Add Record</title>

    <link rel="stylesheet" href="../styles.css">
    <!-- <link href="./css/bootstrap.min.css" rel="stylesheet"> -->

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
                <h1>Voucher Enrollment Form</h1>
                <form action="" method="POST">
                    <div class="input-group">
                        <label for="Date In">Date In</label><br />
                        <input type="text" name="date_in">
                    </div>

                    <div class="input-group">
                        <label for="Beneficiary">Beneficiary</label><br />
                        <input type="text" name="beneficiary">
                    </div>

                    <div class="input-group">
                        <label for="Amount">Amount</label><br />
                        <input type="text" name="amount">
                    </div>
                    
                    <div class="input-group">
                        <label for="Treasury Number">Treasury Number</label><br />
                        <input type="text" name="tnum">
                    </div>

                    <div class="input-group">
                        <label for="Voucher Number">Voucher Number</label><br />
                        <input type="text" name="vnum">
                    </div>
                    
                    <div class="input-group">
                        <label for="">Transaction Type</label><br />
                        <select name="transaction_type">
                            <option value="">Select Option</option>
                            <option value="NHIS">NHIS</option>
                            <option value="DRF">DRF</option>
                            <option value="PHARMACY">PHARMACY</option>
                            <option value="APIN">APIN</option>
                        </select>
                    </div>
                    
                    <div class="input-group">
                        <label for="">Batch Number</label><br />
                        <input type="text" name="batch_no" placeholder="Batch Number">
                    </div>
                    
                    <div class="input-group">
                        <label for="">Payment Date</label><br />
                        <input type="text" name="payment_date" placeholder="Payment Date">
                    </div>

                    <div class="input-group">
                        <label for="">Are Reciepts OK</label><br />
                        <select name="are_receipts_ok">
                            <option value="">Select Option</option>
                            <option value="OK">OK</option>
                            <option value="Delinquent">Delinquent</option>
                        </select>
                    </div>
                    
                    <div class="input-group">
                        <label for="">Is Narration OK</label><br />
                        <select name="is_narration_ok">
                            <option value="">Select Option</option>
                            <option value="OK">OK</option>
                            <option value="Delinquent">Delinquent</option>
                        </select>
                    </div>
                    
                    <div class="input-group">
                        <label for="">Is Account Changed</label><br />
                        <select name="is_account_changed">
                            <option value="">Select Option</option>
                            <option value="YES">YES</option>
                            <option value="NO">NO</option>
                        </select>
                    </div>
                    

                    <div class="input-group">
                        <label for="">Are Signatures OK</label><br />
                        <select name="are_signatures_ok">
                            <option value="">Select Option</option>
                            <option value="YES">YES</option>
                            <option value="Delinquent">Delinquent</option>
                        </select>
                    </div>
                    
                    <div class="input-group">
                        <label for="">Are Assets Included</label><br />
                        <select name="are_assets_included">
                            <option value="">Select Option</option>
                            <option value="YES">YES</option>
                            <option value="NO">NO</option>
                        </select>
                    </div>
                    
                    <div class="input-group">
                        <label for="">Is Cert. of Honour OK</label><br />
                        <select name="is_cert_honour">
                            <option value="">Select Option</option>
                            <option value="YES">YES</option>
                            <option value="NO">NO</option>
                            <option value="NIL">NIL</option>
                        </select>
                    </div>

                    <div class="input-group">
                        <label for="Cacu List">Cacu List</label><br />
                        <input type="text" name="cacu_list">
                    </div>

                    <div class="input-group">
                        <label for="Int Audit List">Int Audit List</label><br />
                        <input type="text" name="int_audit_list">
                    </div>

                    <div class="input-group">
                        <label for="Fixed Asset List">Fixed Asset List</label><br />
                        <input type="text" name="fixed_asset_list">
                    </div>

                    <div class="input-group">
                        <label for="Final Acc List">Final Acc List</label><br />
                        <input type="text" name="final_acc_list">
                    </div>
                    
                    <div class="input-group">
                        <label for="">Is Voucher Paid in Installments</label><br />
                        <select name="voucher_instalment">
                            <option value="">Select Option</option>
                            <option value="YES">YES</option>
                            <option value="NO">NO</option>
                        </select>
                    </div>
                    
                    <div class="input-group">
                        <label for="">Is Voucher Fully Paid</label><br />
                        <select name="is_voucher_fully_paid">
                            <option value="">Select Option</option>
                            <option value="YES">YES</option>
                            <option value="NO">NO</option>
                        </select>
                    </div>

                    <div class="input-group">
                        <label for="Voucher Payment Outstanding">Voucher Payment Outstanding</label><br />
                        <input type="text" name="voucher_outstanding">
                    </div>

                    <div class="input-group">
                        <label for="Voucher Payment Full">Voucher Payment Full</label><br />
                        <input type="text" name="voucher_payment_full">
                    </div>

                    <div class="input-group">
                        <label for="Voucher To Copy List">Voucher To Copy List</label><br />
                        <input type="text" name="voucher_copy">
                    </div>

                    <div class="input-group">
                        <label for="">Are Reciepts Stamped</label><br />
                        <select name="are_receipts_stamped">
                            <option value="">Select Option</option>
                            <option value="YES">YES</option>
                            <option value="NO">NO</option>
                        </select>
                    </div>

                    <div class="input-group">
                        <label for="">Is Voucher Retired</label><br />
                        <select name="voucher_retired">
                            <option value="">Select Option</option>
                            <option value="YES">YES</option>
                            <option value="NO">NO</option>
                        </select>
                    </div>

                    <div class="input-group">
                        <button type="submit" name="submit">Submit</button>
                        <button type="reset" name="reset">Reset</button>
                        </div>
                </form>
        </div>
    </div>
</body>
</html>
