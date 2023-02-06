<?php
    include_once("dbcon.php");

    $beneficiary = "";
    $amount = "";
    $tnum = "";
    $vnum = "";
    $rnum = "";
    $are_receipts_ok = "";
    $is_narration_ok = "";
    $is_amount_changed = "";
    $batch_no = "";
    $transaction_type = "";
    $are_signatures_ok = "";
    $are_assets_included = "";
    $is_cert_honour = "";
    $voucher_instalment = "";
    $voucher_fully_paid = "";
    $voucher_outstanding = "";
    $voucher_payment_full = "";
    $voucher_copy = "";
    $are_receipts_stamped = "";
    $voucher_retired = "";

    if (isset($_POST['submit'])) {
        $beneficiary = $_POST['beneficiary'];
        $amount = $_POST['amount'];
        $tnum = $_POST['tnum'];
        $vnum = $_POST['vnum'];
        $rnum = $_POST['rnum'];
        $are_receipts_ok = $_POST['are_receipts_ok'];
        $is_narration_ok = $_POST['is_narration_ok'];
        $is_amount_changed = $_POST['is_amount_changed'];
        $batch_no = $_POST['batch_no'];
        $transaction_type = $_POST['transaction_type'];
        $are_signatures_ok = $_POST['are_signatures_ok'];
        $are_assets_included = $_POST['are_assets_included'];
        $is_cert_honour = $_POST['is_cert_honour'];
        $voucher_instalment = $_POST['voucher_instalment'];
        $voucher_fully_paid = $_POST['is_voucher_fully_paid'];
        $voucher_outstanding = $_POST['voucher_outstanding'];
        $voucher_payment_full = $_POST['voucher_payment_full'];
        $voucher_copy = $_POST['voucher_copy'];
        $are_receipts_stamped = $_POST['are_receipts_stamped'];
        $voucher_retired = $_POST['voucher_retired'];

        $sqlquery = "INSERT INTO `rfa`(`Beneficiary`, `Amount`, `treasury_no`, `voucher_no`, `receipt_no`, `are_receipts_ok`, `is_narration_ok`, `is_account_changed`, `Batch_no`, `transaction_type`, `are_signatures_ok`, `are_assets_included`, `is_cert_of_honour_ok`, `is_voucher_paid_in_insttalments`, `is_voucher_fully_paid`, `voucher_payment_outstanding`, `voucher_payment_full`, `voucher_to_copy_list`, `are_receipts_stamped`, `is_voucher_retired`) VALUES ('$beneficiary', '$amount', '$tnum', '$vnum', '$rnum', '$are_receipts_ok', '$is_narration_ok', '$is_amount_changed', '$batch_no', '$transaction_type', '$are_signatures_ok', '$are_assets_included', '$is_cert_honour', '$voucher_instalment', '$voucher_fully_paid', '$voucher_outstanding', '$voucher_payment_full', '$voucher_copy', '$are_receipts_stamped', '$voucher_retired')";

        if(!mysqli_query($connection,$sqlquery)) {
            die('Error in record insertion'.mysqli_errno($connection));
        }
    }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>R F A | Add Record</title>

    <link rel="stylesheet" href="./styles.css">
    <!-- <link href="./css/bootstrap.min.css" rel="stylesheet"> -->

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
                    <img src="windows.jpg" alt="admin-image">
                    <span class="dropdown-menu">
                        Admin
                        <ul>
                            <li><a href="rfa-login.php">Logout</a></li>
                        </ul>
                    </span>
                </div>
            </div>

            <div class="form-container">
                <h1>Voucher Enrollment Form</h1>
                <form action="" method="POST">
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
                        <label for="Reciept Number">Receipt Number</label><br />
                        <input type="text" name="rnum">
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
                        <select name="is_amount_changed">
                            <option value="">Select Option</option>
                            <option value="YES">YES</option>
                            <option value="NO">NO</option>
                        </select>
                    </div>
                    
                     <div class="input-group">
                        <label for="">Batch Number</label><br />
                        <input type="text" name="batch_no" placeholder="Batch Number">
                    </div>
                    
                    <div class="input-group">
                        <label for="">Transaction Type</label><br />
                        <select name="transaction_type">
                            <option value="">Select Option</option>
                            <option value="OXYGEN">OXYGEN</option>
                            <option value="ORTHO">ORTHO</option>
                            <option value="LRF">LRF</option>
                            <option value="P.DIET">P.DIET</option>
                            <option value="TRF">TRF</option>
                            <option value="RADIOLOGY">RADIOLOGY</option>
                            <option value="MORTUARY">MORTUARY</option>
                            <option value="DIALYSIS">DIALYSIS</option>
                            <option value="JOGA">JOGA</option>
                            <option value="DENTAL">DENTAL</option>
                            <option value="LAB">LAB</option>
                            <option value="RFA">RFA</option>
                            <option value="WCRF">WCRF</option>
                            <option value="CMPC">CMPC</option>
                            <option value="DRF">DRF</option>
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
