<!DOCTYPE html5>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="..\css\css_admin.css">
<link rel="stylesheet" type="text/css" href="..\..\static\datatable\1.10.20\css\jquery.dataTables.css">    
<script type="text/javascript" charset="utf8" src="..\..\static\datatable\jquery-3.3.1.js"></script>
    <script type="text/javascript" charset="utf8" src="..\..\static\datatable\1.10.20\js\jquery.dataTables.js"></script>

    <title><?php 
                if(isset($title)){
                    echo $title;
                }
                else{
                    echo "Roman";
                }
            ?>
    </title>
</head>
<body>
<header class="header" >
    <div class="container">
        <div class="header_inner">
            <div class="logo"><a>Kalmakov 2020</a></div>
            <nav class="nav">      
                <a href="http://localhost/insurance/admin/Request/index.php" class="nav_link">Request</a> 
                <a href="http://localhost/insurance/admin/Workers/index.php" class="nav_link">Workers</a> 
                <a href="http://localhost/insurance/admin/customer/index.php" class="nav_link">Customer</a>
                <a href="http://localhost/insurance/admin/insurance_policy/index.php" class="nav_link">insurance policy</a>
                <a href="http://localhost/insurance/admin/insurance/index.php" class="nav_link">insurance</a>
            </nav>
        </div>
    </div>
</header>