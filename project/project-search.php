<?php 
    include_once("../dbcon.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>P R O J E C T | Search Record</title>

    <link rel="stylesheet" href="../css/search.css">
    
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
                <form action="project-search.php" method="POST">
                    <div class="input-group">
                        <label for="Beneficiary">Beneficiary</label><br />
                        <input type="text" name="SBeneficiary" placeholder="Input Beneficiary">
                    </div>

                    <div class="input-group">
                        <label for="Amount">Amount</label><br />
                        <input type="text" name="SAmount" placeholder="Input Amount">
                    </div>
                    
                    <div class="input-group">
                        <label for="Treasury Number">Treasury Number</label><br />
                        <input type="text" name="STreasury" placeholder="Input Treasury_No">
                    </div>

                    <div class="input-group">
                        <label for="Voucher Number">Voucher Number</label><br />
                        <input type="text" name="SVoucher" placeholder="Input Voucher No">
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

                            $sqlsearch = "SELECT * FROM `project` 
                            WHERE (Beneficiary = '$SBeneficiary') OR (Amount = '$SAmount')
                            OR (treasury_no = '$STreasury') OR (voucher_no = '$SVoucher')";

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
                                        <td><?php echo $data['Beneficiary']; ?></td>
                                        <td><?php echo $data['Amount']; ?></td>
                                        <td><?php echo $data['treasury_no']; ?></td>
                                        <td><?php echo $data['voucher_no']; ?></td>
                                        <td colspan= 3><a href="project-info.php?id=<?php echo $data['id']; ?>"><button class="action-view">View</button></a> / <a href="project-update.php?id=<?php echo $data['id']; ?>"><button class="action-update">Update</button></a> / <a href=""><button class="action-delete">Delete</button></a></td>
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