<?php  

include_once "head1.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EOvijat</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.print.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<style>
@media print {
    .hideonprint {
        display: none;
    }
}
</style>
    <style>
    body,
    html {
        margin: 0;
        padding: 0;
        height: 100%;
        font-family: Arial, sans-serif;
    }

    .topbar {
        position: fixed;
        top: 0;
        width: 100%;
        height: 80px;
        background-color: #333;
        color: white;
        text-align: center;
        padding: 10px 0;
        z-index: 1000;
    }

    .topbar {
        top: 0;

    }

    .footer {
        bottom: 0;
    }

    .topbar .menu-icon,
    .topbar .logout-icon {
        position: absolute;
        top: 30px;
        font-size: 20px;
        cursor: pointer;
    }
    .topbar{
        position: absolute;
        font-size: 30px;
 
    }

    .topbar .menu-icon {
        left: 20px;
    }

    .topbar .logout-icon {
        right: 20px;
    }

    .sidebar {
        position: fixed;
        top: 80px;
        left: 0;
        width: auto;
        height: calc(100% - 0px);
        background-color: #444;
        color: white;
        overflow-y: scroll;
        transform: translateX(-100%);
        transition: transform 0.3s ease;
        z-index: 999;
    }

    .sidebar.open {
        transform: translateX(0);
    }

    .sidebar ul {
        list-style: none;
        padding: 0;
    }

    .sidebar ul li {
        margin-left: 20px;
        margin-right: 20px;
        padding: 10px;
        border-bottom: 1px solid #555;

    }
     table {
        overflow-x: auto;
    }
    .sidebar ul li a {

        color: white;
    }

    .sidebar ul li i {
        margin-right: 10px;
    }

    .content {
        margin-top: 80px;
        margin-bottom: 0;
        padding: 20px;
    }

    @media print {

        .topbar,
        .sidebar,
        .footer {
            display: none;
        }
    }

    .modal-content {
        padding: 2px;
    }
    </style>
</head>

<body>
    <div class="topbar">
        <i class="fas fa-bars menu-icon" id="menu-icon"></i>
        <p>EOvijat</p>
        <i class="fas fa-power-off logout-icon" onclick="window.location.href='logout.php'"></i>
    </div>
    <div class="sidebar" id="sidebar">
        <ul>
            <!-- Generate 50 demo menu items -->
            <li><a href="index.php"><i class="fas fa-tv"></i> Dashboard</li>
            <li><a href="profile.php"><i class="fas fa-user-secret"></i> Profile</li>
         
            <li><a href="item.php"><i class="fas fa-box"></i> Item</li>
            <li><a href="itemstock.php"><i class="fas fa-box"></i>Item Stock</li>
            <li><a href="itemin.php?pdname=&ed1=<?php echo date('Y-m-d'); ?>&ed2=<?php echo date('Y-m-d'); ?>&submit="><i class="fas fa-box"></i>Item In</li>
            <li><a href="itemout.php?pdname=&ed1=<?php echo date('Y-m-d'); ?>&ed2=<?php echo date('Y-m-d'); ?>&submit="><i class="fas fa-box"></i>Item Out</li>
            <li><a href="itemsearch.php"><i class="fas fa-box"></i>Item List</li>

            <li><a href="itemreq.php"><i class="fas fa-box"></i>Item Requisition</li>
            <li><a href="itemreqlist.php"><i class="fas fa-box"></i>Item Req list</li>
            <li><a href="itemreqsum.php"><i class="fas fa-box"></i>Item Req Sum</li>
<hr>
          
            <li><a href="kpl.php"><i class="fas fa-car"></i>KPL</li>
            <li><a href="kpllist.php"><i class="fas fa-car"></i>KPL List</li>
            <li><a href="kplsum.php"><i class="fas fa-car"></i>KPL Sum</li>

            <hr><hr><hr><hr><hr>



        </ul></a></li>
    </div>
 
 

