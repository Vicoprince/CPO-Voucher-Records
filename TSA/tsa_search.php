<?php 
    include_once("../dbcon.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>T S A | Search Record</title>

    <link rel="stylesheet" href="../css/search.css">
    
</head>
<body>
    <div class="container">
        <div class="sidenav">
            <div class="sidenav-header">
                <h1>TSA</h1>
                
            </div>
            <a href="tsa-index.php"><h4>Add Record</h4></a>
            <a href="tsa_search.php"><h4>Search Record</h4></a>
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
                            <li><a href="tsa-login.php">Logout</a></li>
                        </ul>
                    </span>
                </div>
            </div>

            <div class="form-container">
                <form action="tsa_search.php" method="POST">
                    <div class="input-group">
                        <div>
                            <label for="Beneficiary">Beneficiary</label><br />
                            <input type="text" name="SBeneficiary" placeholder="Input Beneficiary">
                        </div>
                        <div>
                            <label for="Amount">Amount</label><br />
                            <input type="text" name="SAmount" placeholder="Input Amount">
                        </div>
                    </div>
                    
                    <div class="input-group">
                        <div>
                            <label for="Treasury Number">Treasury Number</label><br />
                            <input type="text" name="STreasury" placeholder="Input Treasury_No">
                        </div>
                        <div>
                            <label for="Voucher Number">Voucher Number</label><br />
                            <input type="text" name="SVoucher" placeholder="Input Voucher No">
                        </div>
                    </div>

                    <div class="input-group">
                        <div>
                            <label for="">Is Voucher Retired</label><br />
                            <select name="Svoucher_retired">
                                <option value="">Select Option</option>
                                <option value="YES">YES</option>
                                <option value="NO">NO</option>
                            </select>
                        </div>
                        <div>
                            <label for="">Are Receipts Stamped</label><br />
                            <select name="SAre_receipts_stamped">
                                <option value="">Select Option</option>
                                <option value="YES">YES</option>
                                <option value="NO">NO</option>
                            </select>
                        </div>
                    </div>

                    <div class="input-group">
                        <div>
                            <label for="">Voucher Payment Outstanding</label><br />
                            <select name="SPayment_outstanding">
                                <option value="">Select Option</option>
                                <option value="YES">YES</option>
                                <option value="NO">NO</option>
                            </select>
                        </div>
                        <div>
                            <label for="">Are Receipts Ok</label><br />
                            <select name="SReceipts_ok">
                                <option value="">Select Option</option>
                                <option value="YES">OK</option>
                                <option value="Delinquent">Delinquent</option>
                            </select>
                        </div>
                    </div>

                    <div class="input-group">
                        <button type="submit" name="Search">Search</button>
                    </div>
                    </form>
            </div>

            <div class="table-wrapper">
                <table class="search-table"  width="100%" cellspacing = "0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>BENEFICIARY</th>
                            <th>AMOUNT</th>
                            <th>TREASURY NO</th>
                            <th>VOUCHER NO</th>
                            <th colspan="2">ACTION</th>
                        </tr>
                    </thead>

                    <?php

                        if (isset($_POST["Search"])) {
                            $SBeneficiary = $_POST["SBeneficiary"];
                            $SAmount = $_POST["SAmount"];
                            $STreasury = $_POST["STreasury"];
                            $SVoucher = $_POST["SVoucher"];
                            $Svoucher_retired = $_POST["Svoucher_retired"];
                            $SAre_receipts_stamped = $_POST["SAre_receipts_stamped"];
                            $SPayment_outstanding = $_POST["SPayment_outstanding"];
                            $SReceipts_ok = $_POST["SReceipts_ok"];


                            $sqlsearch = "SELECT * FROM `TSA` 
                            WHERE (BENEFICIARY = '$SBeneficiary') OR (AMOUNT = '$SAmount')
                            OR (`treasury no` = '$STreasury') OR (`voucher no` = '$SVoucher')
                            OR (`is voucher retired?` = '$Svoucher_retired') OR (`Are receipts stamped?` = '$SAre_receipts_stamped')
                            OR (`voucher payment outstanding` = '$SPayment_outstanding')
                            OR (`are receipts ok?` = '$SReceipts_ok')";

                            $searchresult = mysqli_query($connection,$sqlsearch);
                            
                            if(mysqli_num_rows($searchresult)<1) {
                                echo "<tr align='center'><td>No Record Found</td></tr>";
                            }
                            else {
                                $count = 0;
                                while ($data = $searchresult->fetch_assoc()) {
                                    $id = $data['id'];
                                    $count++;


                                ?>
                                
                                <tbody>
                                    <tr>
                                        <td><?php echo $data['id']; ?></td>
                                        <td><?php echo $data['BENEFICIARY']; ?></td>
                                        <td><?php echo $data['AMOUNT']; ?></td>
                                        <td><?php echo $data['treasury no']; ?></td>
                                        <td><?php echo $data['voucher no']; ?></td>
                                        <td colspan= 3><a href="tsa-info.php?id=<?php echo $data['id']; ?>"><button class="action-view">View</button></a> / <a href="tsa_update.php?id=<?php echo $data['id']; ?>"><button class="action-update">Update</button></a> / <a href="tsa-delete.php?id=<?php echo $data['id']; ?>"><button class="action-delete">Delete</button></a></td>
                                    </tr>
                                </tbody>

                                <?php
                                
                                }
                            }
                        }
                    ?>
                </table>
            </div>

            
        </div>

    </div>
</body>
</html>