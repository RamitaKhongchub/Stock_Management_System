<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,300,400,500,700,900" rel="stylesheet">

    <title>Inventory Management System</title>
<!--
SOFTY PINKO
https://templatemo.com/tm-535-softy-pinko
-->

    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/templatemo-softy-pinko.css">

    </head>
    
    <body>
   
    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->
    
    
    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="#" class="logo">
                            <img src="" alt=""/>
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li><a href="index.php" class="active">Home</a></li>
                            <li><a href="#features">Stock Management</a></li>
                            <li><a href="#work-process">Injection</a></li>
                            <li><a href="#testimonials">Assembly</a></li>
                            <li><a href="#pricing-plans">Painting</a></li>
                            <li><a href="logout.php">Sign Out</a></li>
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->
    

    <!-- ***** Welcome Area Start ***** -->
    <div class="welcome-area" id="welcome">

        <!-- ***** Header Text Start ***** -->
        <div class="header-text">
            <div class="container">
                <div class="row">
                    <div class="offset-xl-3 col-xl-6 offset-lg-2 col-lg-8 col-md-12 col-sm-12">
                        <h1>Welcome to Stock Management <strong>strategy</strong><br>to grow up your <strong>factory</strong></h1>
                        <p>Here you can add new categories for each stock 
                            Development by Ramita Khongchub
                        </p>
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- ***** Header Text End ***** -->
    </div>
    <!-- ***** Welcome Area End ***** -->

    <!-- ***** Features Small Start ***** -->
    <section class="section home-feature">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <!-- ***** Features Small Item Start ***** -->
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.2s">
                            <div class="features-small-item">
                                <div class="icon">
                                    <i><img src="assets/images/featured-item-01.png" alt="" ></i>
                                </div>
                                <h5 class="features-title">Create Resin Material</h5>
                                
                                <p>Here You can create Resin Material</p>
                                
                                <a href="createResin.php"  class="main-button-slider col-md-12 text-center ">Create Resin Material</a>
                            </div>
                        </div>
                        <!-- ***** Features Small Item End ***** -->

                        <!-- ***** Features Small Item Start ***** -->
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.4s">
                            <div class="features-small-item">
                                <div class="icon">
                                    <i><img src="assets/images/featured-item-01.png" alt=""></i>
                                </div>
                                <h5 class="features-title">Create Insulator</h5>
                                <p>Here you can create insulator</p>
                                <a href="createInsul.php"  class="main-button-slider col-md-12 text-center ">Create Insulator</a>
                            </div>
                        </div>
                        <!-- ***** Features Small Item End ***** -->
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.4s">
                            <div class="features-small-item">
                                <div class="icon">
                                    <i><img src="assets/images/featured-item-01.png" alt=""></i>
                                </div>
                                <h5 class="features-title">Create Shop Supply</h5>
                                <p>Here you can create Shop Supply</p>
                                <a href="createShop.php"  class="main-button-slider col-md-12 text-center ">Create Shop Supply</a>
                            </div>
                        </div>
                        <!-- ***** Features Small Item Start ***** -->
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.6s">
                            <div class="features-small-item">
                                <div class="icon">
                                    <i><img src="assets/images/featured-item-01.png" alt=""></i>
                                </div>
                                <h5 class="features-title">Create Bracket</h5>
                                <p>Here you can create Bracket</p>
                                <a href="createShop.php"  class="main-button-slider col-md-12 text-center ">Create Bracket</a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.6s">
                            <div class="features-small-item">
                                <div class="icon">
                                    <i><img src="assets/images/featured-item-01.png" alt=""></i>
                                </div>
                                <h5 class="features-title">Create Paint Material</h5>
                                <p>Here you can create Paint Material</p>
                                <a href="createpaint.php"  class="main-button-slider col-md-12 text-center ">Create Paint Material</a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.6s">
                            <div class="features-small-item">
                                <div class="icon">
                                    <i><img src="assets/images/featured-item-01.png" alt=""></i>
                                </div>
                                <h5 class="features-title">Create Component Part</h5>
                                <p>Here you can create component part</p>
                                <a href="createcomponent.php"  class="main-button-slider col-md-12 text-center ">Create Component Part</a>
                            </div>
                        </div>
                        <!-- ***** Features Small Item End ***** -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Features Small End ***** -->
   
    <!-- ***** Features Big Item Start ***** -->
    <section class="section padding-top-70 padding-bottom-0" id="features">
        <div class="container">
            <div class="row">
            
            </div>

                
                <?php
                
                    // Include config file
                    require_once "db.php";
                    
                    // Attempt select query execution
                    $sql = "SELECT * FROM material";
                    $sql1 = "SELECT material.Material_Name,material.Stock_Amount, reorder.Min_Order ,material.Part_No FROM material INNER JOIN reorder ON material.Material_Name = reorder.Material_Name where material.Stock_Amount <= reorder.Min_Order";
                    if($result = mysqli_query($link, $sql)){
                        if($result1 = mysqli_query($link, $sql1)){
                        if(mysqli_num_rows($result) > 0){
                           
                            echo "<a href='UpdateResin.php?id=' title='Add more' data-toggle='tooltip'><button type='button' class='btn btn-danger'>Resin Material</button></a>";
                            
                            echo "<table class='table table-bordered table-striped' >";
                                echo "<thead>";
                                    echo "<tr >";
                                        echo "<th>#</th>";
                                        echo "<th>Material_Name</th>";
                                        echo "<th>Part_No</th>";
                                        echo "<th>Stock_Remain</th>";
                                        echo "<th>Edit</th>";
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while($row = mysqli_fetch_array($result1)){
                                    
                                    echo "<tr>";
                                        echo "<td><font size='3pt'>"  . "</td>";
                                        echo "<td><font size='3pt'>" . $row['Material_Name'] . "</td>";
                                        echo "<td><font size='3pt'>"  . $row['Part_No'] . "</td>";
                                        echo "<td><font size='3pt'>"  . $row['Stock_Amount'] .  "</td>";
                                        echo "<td>";
                                         
                                            echo "<a href='#.php?id=". $row['Material_Name'] ."' title='Add more' data-toggle='tooltip'><button type='button' class='btn btn-danger btn-sm '>Time to reorder</button></a>";
                                            
                                        echo "</td>";
                                    echo "</tr>";
                                    }
                                while($row = mysqli_fetch_array($result)){
                                    
                                
                                    echo "<tr>";
                                        echo "<td><font size='3pt'>" . $row['id'] . "</td>";
                                        echo "<td><font size='3pt'>" . $row['Material_Name'] . "</td>";
                                        echo "<td><font size='3pt'>" . $row['Part_No'] . "</td>";
                                        echo "<td><font size='3pt'>" . $row['Stock_Amount'] . "</td>";
                                        echo "<td>";
                                           
                                            echo "<a href='UpdateResin.php?id=". $row['id'] ."' title='Add more' data-toggle='tooltip'><button type='button' class='btn btn-outline-primary btn-sm '>Receive</button></a>";
                                            echo "<a href='#UpdateResin.php?id=". $row['id'] ."' title='' data-toggle='tooltip'><button type='button' class='btn  '></button></a>";
                                            echo "<a href='DeleteResin.php?id=". $row['id'] ."' title='Delete this category' data-toggle='tooltip'><button type='button' class='btn btn-outline-danger btn-sm'>Delete</button></a>";
                                            echo "<a href='#UpdateResin.php?id=". $row['id'] ."' title='' data-toggle='tooltip'><button type='button' class='btn  '></button></a>";
                                            echo "<a href='ResinIssueInj.php?id=". $row['id'] ."' title='Delete this category' data-toggle='tooltip'><button type='button' class='btn btn-warning btn-sm'>Issue to Injection</button></a>";
                                        echo "</td>";
                                            
                                    echo "</tr>";
                                    
                                }
                                echo "</tbody>";                            
                            echo "</table>";
                            // Free result set
                            mysqli_free_result($result);
                            
                        } else{
                            echo "<p class='lead'><em>No records were found.</em></p>";
                        }
                    }
                    } else{
                        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                    }
                    ?>
                    <div class="search-box">
                    <input type="text" autocomplete="off" placeholder="Search Part No. Component..." />
                    <div class="result_1"></div>
                    <?php

                    $sql = "SELECT * FROM componentpart";
                    $sql1 = "SELECT componentpart.Material_Name,componentpart.Stock_Amount, reorder.Min_Order ,componentpart.Part_No FROM componentpart INNER JOIN reorder ON componentpart.Material_Name = reorder.Material_Name where componentpart.Stock_Amount <= reorder.Min_Order";
                    if($result = mysqli_query($link, $sql)){
                        if($result1 = mysqli_query($link, $sql1)){
                        if(mysqli_num_rows($result) > 0){
                           
                            
                            echo "<a href='UpdateResin.php?id=' title='Add more' data-toggle='tooltip'><button type='button' class='btn btn-danger'>Component Part</button></a>";
                            echo "<table class='table table-bordered table-striped' >";
                                echo "<thead>";
                                    echo "<tr >";
                                        echo "<th>#</th>";
                                        echo "<th>Material_Name</th>";
                                        echo "<th>Part_No</th>";
                                        echo "<th>Stock_Remain</th>";
                                        echo "<th>Edit</th>";
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while($row = mysqli_fetch_array($result1)){
                                    
                                    echo "<tr>";
                                        echo "<td><font size='3pt'>"  . "</td>";
                                        echo "<td><font size='3pt'>" . $row['Material_Name'] . "</td>";
                                        echo "<td><font size='3pt'>"  . $row['Part_No'] . "</td>";
                                        echo "<td><font size='3pt'>"  . $row['Stock_Amount'] .  "</td>";
                                        echo "<td>";
                                         
                                            echo "<a href='#.php?id=". $row['Material_Name'] ."' title='Add more' data-toggle='tooltip'><button type='button' class='btn btn-danger btn-sm '>Time to reorder</button></a>";
                                            
                                        echo "</td>";
                                    echo "</tr>";
                                    }
                                while($row = mysqli_fetch_array($result)){
                                    
                                
                                    echo "<tr>";
                                        echo "<td><font size='3pt'>" . $row['id'] . "</td>";
                                        echo "<td><font size='3pt'>" . $row['Material_Name'] . "</td>";
                                        echo "<td><font size='3pt'>" . $row['Part_No'] . "</td>";
                                        echo "<td><font size='3pt'>" . $row['Stock_Amount'] . "</td>";
                                        echo "<td>";
                                           
                                            echo "<a href='UpdateComponent.php?id=". $row['id'] ."' title='Add more' data-toggle='tooltip'><button type='button' class='btn btn-outline-primary btn-sm '>Receive</button></a>";
                                            echo "<a href='#UpdateResin.php?id=". $row['id'] ."' title='' data-toggle='tooltip'><button type='button' class='btn  '></button></a>";
                                            echo "<a href='DeleteResin.php?id=". $row['id'] ."' title='Delete this category' data-toggle='tooltip'><button type='button' class='btn btn-outline-danger btn-sm'>Delete</button></a>";
                                            echo "<a href='#UpdateResin.php?id=". $row['id'] ."' title='' data-toggle='tooltip'><button type='button' class='btn  '></button></a>";
                                            echo "<a href='ComIssueInj.php?id=". $row['id'] ."' title='Delete this category' data-toggle='tooltip'><button type='button' class='btn btn-warning btn-sm'>Issue to Injection</button></a>";
                                           
                                            echo "<a href='ComIssueAssy.php?id=". $row['id'] ."' title='Delete this category' data-toggle='tooltip'><button type='button' class='btn btn-primary btn-sm'>Issue to Assembly</button></a>";
                                        echo "</td>";
                                            
                                    echo "</tr>";
                                    
                                }
                                echo "</tbody>";                            
                            echo "</table>";
                            // Free result set
                            mysqli_free_result($result);
                            
                        } else{
                            echo "<p class='lead'><em>No records were found.</em></p>";
                        }
                    }
                    } else{
                        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                    }

                    $sql = "SELECT * FROM insul";
                    $sql1 = "SELECT insul.Material_Name,insul.Stock_Amount, reorder.Min_Order ,insul.Part_No FROM insul INNER JOIN reorder ON insul.Material_Name = reorder.Material_Name where insul.Stock_Amount <= reorder.Min_Order";
                    if($result = mysqli_query($link, $sql)){
                        if($result1 = mysqli_query($link, $sql1)){
                        if(mysqli_num_rows($result) > 0){
                           
                            
                            echo "<a href='UpdateResin.php?id=' title='Add more' data-toggle='tooltip'><button type='button' class='btn btn-danger'>Insulator</button></a>";
                            echo "<table class='table table-bordered table-striped' >";
                                echo "<thead>";
                                    echo "<tr >";
                                        echo "<th>#</th>";
                                        echo "<th>Material_Name</th>";
                                        echo "<th>Part_No</th>";
                                        echo "<th>Stock_Remain</th>";
                                        echo "<th>Edit</th>";
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while($row = mysqli_fetch_array($result1)){
                                    
                                    echo "<tr>";
                                        echo "<td><font size='3pt'>"  . "</td>";
                                        echo "<td><font size='3pt'>" . $row['Material_Name'] . "</td>";
                                        echo "<td><font size='3pt'>"  . $row['Part_No'] . "</td>";
                                        echo "<td><font size='3pt'>"  . $row['Stock_Amount'] .  "</td>";
                                        echo "<td>";
                                        
                                            echo "<a href='#.php?id=". $row['Material_Name'] ."' title='Add more' data-toggle='tooltip'><button type='button' class='btn btn-danger btn-sm '>Time to reorder</button></a>";
                                            
                                        echo "</td>";
                                    echo "</tr>";
                                    
                                }
                                while($row = mysqli_fetch_array($result)){
                                    
                                    echo "<tr>";
                                        echo "<td><font size='3pt'>" . $row['id'] . "</td>";
                                        echo "<td><font size='3pt'>" . $row['Material_Name'] . "</td>";
                                        echo "<td><font size='3pt'>" . $row['Part_No'] . "</td>";
                                        echo "<td><font size='3pt'>" . $row['Stock_Amount'] . "</td>";
                                        echo "<td>";
                                        
                                            echo "<a href='UpdateInsul.php?id=". $row['id'] ."' title='Add more' data-toggle='tooltip'><button type='button' class='btn btn-outline-primary btn-sm '>Receive</button></a>";
                                            echo "<a href='#UpdateResin.php?id=". $row['id'] ."' title='' data-toggle='tooltip'><button type='button' class='btn  '></button></a>";
                                            echo "<a href='DeleteInsul.php?id=". $row['id'] ."' title='Delete this category' data-toggle='tooltip'><button type='button' class='btn btn-outline-danger btn-sm'>Delete</button></a>";
                                            echo "<a href='#UpdateResin.php?id=". $row['id'] ."' title='' data-toggle='tooltip'><button type='button' class='btn  '></button></a>";
                                            echo "<a href='InsulIssueInj.php?id=". $row['id'] ."' title='Delete this category' data-toggle='tooltip'><button type='button' class='btn btn-primary btn-sm'>Issue to Assembly</button></a>";
                                        echo "</td>";
                                    echo "</tr>";
                                    
                                }
                                echo "</tbody>";                            
                            echo "</table>";
                            // Free result set
                            mysqli_free_result($result);
                            
                        } else{
                            echo "<p class='lead'><em>No records were found.</em></p>";
                        }
                    }
                    } else{
                        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                    }

                   

                    $sql = "SELECT * FROM bracket";
                   
                    if($result = mysqli_query($link, $sql)){
                        if($result1 = mysqli_query($link, $sql1)){
                        if(mysqli_num_rows($result) > 0){
                           
                            
                            echo "<a href='UpdateResin.php?id=' title='Add more' data-toggle='tooltip'><button type='button' class='btn btn-danger'>Bracket</button></a>";
                            echo "<table class='table table-bordered table-striped' >";
                                echo "<thead>";
                                    echo "<tr >";
                                        echo "<th>#</th>";
                                        echo "<th>Material_Name</th>";
                                        echo "<th>Part_No</th>";
                                        echo "<th>Stock_Remain</th>";
                                        echo "<th>Edit</th>";
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                               
                                while($row = mysqli_fetch_array($result)){
                                    
                                    echo "<tr>";
                                        echo "<td><font size='3pt'>" . $row['id'] . "</td>";
                                        echo "<td><font size='3pt'>" . $row['Material_Name'] . "</td>";
                                        echo "<td><font size='3pt'>" . $row['Part_No'] . "</td>";
                                        echo "<td><font size='3pt'>" . $row['Stock_Amount'] . "</td>";
                                        echo "<td>";
                                        
                                            echo "<a href='UpdateBrac.php?id=". $row['id'] ."' title='Add more' data-toggle='tooltip'><button type='button' class='btn btn-outline-primary btn-sm '>Receive</button></a>";
                                            echo "<a href='#UpdateResin.php?id=". $row['id'] ."' title='' data-toggle='tooltip'><button type='button' class='btn  '></button></a>";
                                            echo "<a href='DeleteInsul.php?id=". $row['id'] ."' title='Delete this category' data-toggle='tooltip'><button type='button' class='btn btn-outline-danger btn-sm'>Delete</button></a>";
                                            echo "<a href='#UpdateResin.php?id=". $row['id'] ."' title='' data-toggle='tooltip'><button type='button' class='btn  '></button></a>";
                                            echo "<a href='BracIssueInj.php?id=". $row['id'] ."' title='Delete this category' data-toggle='tooltip'><button type='button' class='btn btn-warning btn-sm'>Issue to Injection</button></a>";
                                        echo "</td>";
                                    echo "</tr>";
                                    
                                }
                                echo "</tbody>";                            
                            echo "</table>";
                            // Free result set
                            mysqli_free_result($result);
                            
                        } else{
                            echo "<p class='lead'><em>No records were found.</em></p>";
                        }
                    }
                    } else{
                        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                    }

                    $sql = "SELECT * FROM painting";
                    $sql1 = "SELECT painting.Material_Name,painting.Stock_Amount, reorder.Min_Order ,painting.Part_No FROM painting INNER JOIN reorder ON painting.Material_Name = reorder.Material_Name where painting.Stock_Amount <= reorder.Min_Order";
                    if($result = mysqli_query($link, $sql)){
                        if($result1 = mysqli_query($link, $sql1)){
                        if(mysqli_num_rows($result) > 0){
                           
                            
                            echo "<a href='UpdateResin.php?id=' title='Add more' data-toggle='tooltip'><button type='button' class='btn btn-danger'>Paint Material</button></a>";
                            echo "<table class='table table-bordered table-striped' >";
                                echo "<thead>";
                                    echo "<tr >";
                                        echo "<th>#</th>";
                                        echo "<th>Material_Name</th>";
                                        echo "<th>Part_No</th>";
                                        echo "<th>Stock_Amount</th>";
                                        echo "<th>Edit</th>";
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while($row = mysqli_fetch_array($result1)){
                                    
                                    echo "<tr>";
                                        echo "<td><font size='3pt'>"  . "</td>";
                                        echo "<td><font size='3pt'>" . $row['Material_Name'] . "</td>";
                                        echo "<td><font size='3pt'>"  . $row['Part_No'] . "</td>";
                                        echo "<td><font size='3pt'>"  . $row['Stock_Amount'] .  "</td>";
                                        echo "<td>";
                                        
                                            echo "<a href='#.php?id=". $row['Material_Name'] ."' title='Add more' data-toggle='tooltip'><button type='button' class='btn btn-danger btn-sm '>Time to reorder</button></a>";
                                            
                                        echo "</td>";
                                    echo "</tr>";
                                    
                                }
                                while($row = mysqli_fetch_array($result)){
                                    
                                    echo "<tr>";
                                        echo "<td><font size='3pt'>" . $row['id'] . "</td>";
                                        echo "<td><font size='3pt'>" . $row['Material_Name'] . "</td>";
                                        echo "<td><font size='3pt'>" . $row['Part_No'] . "</td>";
                                        echo "<td><font size='3pt'>" . $row['Stock_Amount'] . "</td>";
                                        echo "<td>";
                                        
                                            echo "<a href='UpdatePainting.php?id=". $row['id'] ."' title='Add more' data-toggle='tooltip'><button type='button' class='btn btn-outline-primary btn-sm '>Receive</button></a>";
                                            echo "<a href='#UpdateResin.php?id=". $row['id'] ."' title='' data-toggle='tooltip'><button type='button' class='btn  '></button></a>";
                                            echo "<a href='DeletePainting.php?id=". $row['id'] ."' title='Delete this category' data-toggle='tooltip'><button type='button' class='btn btn-outline-danger btn-sm'>Delete</button></a>";
                                            echo "<a href='#UpdateResin.php?id=". $row['id'] ."' title='' data-toggle='tooltip'><button type='button' class='btn  '></button></a>";
                                            echo "<br>";
                                            
                                            echo "<br><a href='PaintIssuePaint.php?id=". $row['id'] ."' title='Delete this category' data-toggle='tooltip'><button type='button' class='btn btn-success btn-sm'>Issue to Painting</button></a>";
                                        echo "</td>";
                                    echo "</tr>";
                                    
                                }
                                echo "</tbody>";                            
                            echo "</table>";
                            // Free result set
                            mysqli_free_result($result);
                            
                        } else{
                            echo "<p class='lead'><em>No records were found.</em></p>";
                        }
                    }
                    } else{
                        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                    }
                    // Close connection
                    
                    ?>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="hr"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Features Big Item End ***** -->

    <!-- ***** Features Big Item Start ***** -->
    
    <!-- ***** Features Big Item End ***** -->

    <!-- ***** Home Parallax Start ***** -->
    <section class="mini" id="work-process">
        <div class="mini-content">
            <div class="container">
                <div class="row">
                    <div class="offset-lg-3 col-lg-6">
                        <div class="info">
                            <h1>Injection</h1>
                            
                        </div>
                    </div>
                </div>
                    
                <!-- ***** Mini Box Start ***** -->
                <div class="row">
                    <div class="col-lg-10 col-md-3 col-sm-6 col-6">
                        <a href="InjMaterialPlan.php" class="mini-box">
                            <i><img src="assets/images/work-process-item-01.png" alt=""></i>
                            <strong>Material Plan</strong>
                            
                            
                            
                        </a>
                    </div>
                
                    <div class="col-lg-10 col-md-3 col-sm-6 col-6">
                        <a href="CalInj.php" class="mini-box">
                            <i><img src="assets/images/work-process-item-01.png" alt=""></i>
                            <strong>Calculation</strong>
                            
                            
                            
                        </a>
                    </div>
                    
                    <div class="col-lg-2 col-md-3 col-sm-6 col-6">
                        <a href="InjFG.php" class="mini-box">
                            <i><img src="assets/images/work-process-item-01.png" alt=""></i>
                            <strong>Create FG Part</strong>
                           
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-6 col-6">
                        <a href="createNG221A.php" class="mini-box">
                            <i><img src="assets/images/work-process-item-01.png" alt=""></i>
                            <strong>Add NG Model : 221A</strong>
                            
                        </a>
                    </div>
                    <div class="col-lg-10 col-md-3 col-sm-6 col-6">
                        <a href="createNG221A.php" class="mini-box">
                            <i><img src="assets/images/work-process-item-01.png" alt=""></i>
                            <strong>Add Set Up Model : 221A</strong>
                            
                        </a>
                    </div>
                    <br><br><br>
                    <?php
                    // Include config file
                    require_once "db.php";
                    $sql = "SELECT * FROM resinissueinj";
                    if($result = mysqli_query($link, $sql)){
                        
                        if(mysqli_num_rows($result) > 0){
                            
                            echo "<a href='#UpdateResin.php?id=' title='Add more' data-toggle='tooltip'><button type='button' class='btn btn-danger'>Resin Material</button></a>";
                            echo "<table class='table table-bordered table-striped' >";
                                echo "<thead>";
                                    echo "<tr >";
                                        echo "<th><font color= white >#</th>";
                                        echo "<th><font color= white >Material_Name</th>";
                                        echo "<th><font color= white >Part_No</th>";
                                        echo "<th><font color= white >Stock_Amount</th>";
                                        echo "<th><font color= white >Edit</th>";
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while($row = mysqli_fetch_array($result)){
                                    
                                        
                                    echo "<tr>";
                                        echo "<td><font color= white size='3pt'>" . $row['id'] . "</td>";
                                        echo "<td><font color= white size='3pt'>" . $row['Material_Name'] . "</td>";
                                        echo "<td><font color= white size='3pt'>" . $row['Part_No'] . "</td>";
                                        echo "<td><font color= white size='3pt'>" . $row['Stock_Amount'] . "</td>";
                                        echo "<td>";
                                        echo "<a href='ResinInjProcess.php?id=". $row['id'] ."' title='Issue to process' data-toggle='tooltip'><button type='button' class='btn btn-primary btn-sm '>Issue to process</button></a>";
                                        echo "<a href='#UpdateResin.php?id=". $row['id'] ."' title='' data-toggle='tooltip'><button type='button' class='btn  '></button></a>";
                                        echo "<a href='DeleteResinProcess.php?id=". $row['id'] ."' title='Delete this category' data-toggle='tooltip'><button type='button' class='btn btn-danger btn-sm'>Delete</button></a>";
                                        echo "<a href='#UpdateResin.php?id=". $row['id'] ."' title='' data-toggle='tooltip'><button type='button' class='btn  '></button></a>";
                                        echo "<a href='ResinTurnStock.php?id=". $row['id'] ."' title='Delete this category' data-toggle='tooltip'><button type='button' class='btn btn-success btn-sm'>Turn to Stock</button></a>";
                                        echo "</td>";
                                        
                                    echo "</tr>";
                                
                                }
                                echo "</tbody>";                            
                            echo "</table>";
                            // Free result set
                            mysqli_free_result($result);
                        } else{
                            echo "<p class='lead'><em>No records were found.</em></p>";
                        }
                    
                    } else{
                        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                    }

                  

                    // Attempt select query execution
                    $sql = "SELECT * FROM calinj";
                    $sql1 = "SELECT material.Material_Name,material.Part_No, material.Mat_Weight
                    FROM material
                    INNER JOIN calinj ON material.Material_Name = calinj.Material_Name";
                    if($result = mysqli_query($link, $sql)){
                        if($result1 = mysqli_query($link, $sql1)){
                        if(mysqli_num_rows($result) > 0){
                            
                            echo "<a href='UpdateResin.php?id=' title='Add more' data-toggle='tooltip'><button type='button' class='btn btn-danger'>Calculation</button></a>";
                            echo "<table class='table table-bordered table-striped' >";
                                echo "<thead>";
                                    echo "<tr >";
                                        echo "<th><font color= white >#</th>";
                                        echo "<th><font color= white >Material_Name</th>";
                                        echo "<th><font color= white >Material_No</th>";
                                        echo "<th><font color= white >Work_Order (pcs.)</th>";
                                        echo "<th><font color= white >Use_Virgin (kg.)</th>";
                                        echo "<th><font color= white >Recycle_Mat (kg.)</th>";
                                        echo "<th><font color= white >Total_Use (kg.)</th>";
                                        
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while($row = mysqli_fetch_array($result)){
                                    while($row1 = mysqli_fetch_array($result1)){
                                        $row['Use_Virgin'] = ($row1['Mat_Weight']*$row['Work_Order'])+(0.021*$row['Work_Order']*$row1['Mat_Weight'])+(0.018*$row['Work_Order']*$row1['Mat_Weight']);
                                        $row['Recycle_Mat'] = (0.3*$row['Use_Virgin']);
                                        $row['Total_Use'] = $row['Use_Virgin'] - $row['Recycle_Mat'];
                                    echo "<tr>";
                                        echo "<td><font color= white size='3pt'>" . $row['id'] . "</td>";
                                        echo "<td><font color= white size='3pt'>" . $row['Material_Name'] . "</td>";
                                        echo "<td><font color= white size='3pt'>" . $row['Part_No'] . "</td>";
                                        echo "<td><font color= white size='3pt'>" . $row['Work_Order'] . "</td>";
                                        echo "<td><font color= white size='3pt'>" . $row['Use_Virgin'] . "</td>";
                                        echo "<td><font color= white size='3pt'>" . $row['Recycle_Mat'] . "</td>";
                                        echo "<td><font color= white size='3pt'>" . $row['Total_Use'] . "</td>";
                                    
                                        echo "</td>";
                                    echo "</tr>";
                                }
                                }
                                echo "</tbody>";                            
                            echo "</table>";
                            // Free result set
                            mysqli_free_result($result);
                        } else{
                            echo "<p class='lead'><em>No records were found.</em></p>";
                        }
                    }
                    } else{
                        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                    }
                    $sql = "SELECT * FROM shopissueinj";
                    if($result = mysqli_query($link, $sql)){
                        
                        if(mysqli_num_rows($result) > 0){
                            
                            echo "<a href='#UpdateResin.php?id=' title='Add more' data-toggle='tooltip'><button type='button' class='btn btn-danger'>Shop Supply</button></a>";
                            echo "<table class='table table-bordered table-striped' >";
                                echo "<thead>";
                                    echo "<tr >";
                                        echo "<th><font color= white >#</th>";
                                        echo "<th><font color= white >Material_Name</th>";
                                        echo "<th><font color= white >Part_No</th>";
                                        echo "<th><font color= white >Stock_Amount</th>";
                                        echo "<th><font color= white >Edit</th>";
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while($row = mysqli_fetch_array($result)){
                                    
                                        
                                    echo "<tr>";
                                        echo "<td><font color= white size='3pt'>" . $row['id'] . "</td>";
                                        echo "<td><font color= white size='3pt'>" . $row['Material_Name'] . "</td>";
                                        echo "<td><font color= white size='3pt'>" . $row['Part_No'] . "</td>";
                                        echo "<td><font color= white size='3pt'>" . $row['Stock_Amount'] . "</td>";
                                        echo "<td>";
                                        echo "<a href='ResinIssueInj.php?id=". $row['id'] ."' title='Issue to process' data-toggle='tooltip'><button type='button' class='btn btn-primary btn-sm '>Issue to process</button></a>";
                                        echo "<a href='#UpdateResin.php?id=". $row['id'] ."' title='' data-toggle='tooltip'><button type='button' class='btn  '></button></a>";
                                        echo "<a href='DeleteResinProcess.php?id=". $row['id'] ."' title='Delete this category' data-toggle='tooltip'><button type='button' class='btn btn-danger btn-sm'>Delete</button></a>";
                                        echo "<a href='#UpdateResin.php?id=". $row['id'] ."' title='' data-toggle='tooltip'><button type='button' class='btn  '></button></a>";
                                        echo "<a href='ResinTurnStock.php?id=". $row['id'] ."' title='Delete this category' data-toggle='tooltip'><button type='button' class='btn btn-success btn-sm'>Turn to Stock</button></a>";
                                        echo "</td>";
                                        
                                    echo "</tr>";
                                
                                }
                                echo "</tbody>";                            
                            echo "</table>";
                            // Free result set
                            mysqli_free_result($result);
                        } else{
                            echo "<p class='lead'><em>No records were found.</em></p>";
                        }
                    
                    } else{
                        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                    }
                    
                    $sql = "SELECT * FROM injfg";
                    if($result = mysqli_query($link, $sql)){
                        
                        if(mysqli_num_rows($result) > 0){
                            
                            echo "<a href='#UpdateResin.php?id=' title='Add more' data-toggle='tooltip'><button type='button' class='btn btn-danger'>FG Part</button></a>";
                            echo "<table class='table table-bordered table-striped' >";
                                echo "<thead>";
                                    echo "<tr >";
                                        echo "<th><font color= white >#</th>";
                                        echo "<th><font color= white >FG_Name</th>";
                                        echo "<th><font color= white >Part_No</th>";
                                        echo "<th><font color= white >Stock_Amount</th>";
                                        echo "<th><font color= white >Edit</th>";
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while($row = mysqli_fetch_array($result)){
                                    
                                        
                                    echo "<tr>";
                                        echo "<td><font color= white size='3pt'>" . $row['id'] . "</td>";
                                        echo "<td><font  color= white size='3pt'>" . $row['FG_Name'] . "</td>";
                                        echo "<td><font  color= white size='3pt'>" . $row['Part_No'] . "</td>";
                                        echo "<td><font color= white size='3pt'>" . $row['Stock_Amount'] . "</td>";
                                        echo "<td>";
                                        
                                        echo "<a href='InsulTurnStock.php?id=". $row['id'] ."' title='Delete this category' data-toggle='tooltip'><button type='button' class='btn btn-primary btn-sm'>Issue to Assembly</button></a>";
                                        echo "</td>";
                                        
                                    echo "</tr>";
                                
                                }
                                echo "</tbody>";                            
                            echo "</table>";
                            // Free result set
                            mysqli_free_result($result);
                        } else{
                            echo "<p class='lead'><em>No records were found.</em></p>";
                        }
                    
                    } else{
                        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                    }
 
                    // Close connection
                  
                    ?>
                    <?php
$con  = mysqli_connect("localhost","root","","project_inv");
 if (!$con) {
     # code...
    echo "Problem in database connection! Contact administrator!" . mysqli_error();
 }else{
    $sql ="SELECT * FROM ngrecord";
    $result = mysqli_query($con,$sql);
    $chart_data="";
    while ($row = mysqli_fetch_array($result)) { 

       $productname=$row['id'];
       $month[]  = date_format(date_create( $row['Year_Month_Date']),"M d, Y")  ;
       $sales[] = $row['NG_Percent'];
      
        }
 
 
 }

 ?>
 <?php
 $con  = mysqli_connect("localhost","root","","project_inv");
 if (!$con) {
     # code...
    echo "Problem in database connection! Contact administrator!" . mysqli_error();
 }else{
    $sql ="SELECT * FROM ngrecord";
    $result = mysqli_query($con,$sql);
    $chart_data="";
    while ($row = mysqli_fetch_array($result)) { 

       $productname1=$row['id'];
       $month1[]  = date_format(date_create( $row['Year_Month_Date']),"M d, Y")  ;
       $sale[] = $row['NG_Percent_1'];
        }
 
 
 }
 
 
?>
 <?php
 $con  = mysqli_connect("localhost","root","","project_inv");
 if (!$con) {
     # code...
    echo "Problem in database connection! Contact administrator!" . mysqli_error();
 }else{
    $sql ="SELECT * FROM ngrecord";
    $result = mysqli_query($con,$sql);
    $chart_data="";
    while ($row = mysqli_fetch_array($result)) { 

       $productname2=$row['id'];
       $month2[]  = date_format(date_create( $row['Year_Month_Date']),"M d, Y")  ;
       $sale2[] = $row['NG_Percent_2'];
        }
 
 
 }
 
 
?>
 <?php
 $con  = mysqli_connect("localhost","root","","project_inv");
 if (!$con) {
     # code...
    echo "Problem in database connection! Contact administrator!" . mysqli_error();
 }else{
    $sql ="SELECT * FROM ngrecord";
    $result = mysqli_query($con,$sql);
    $chart_data="";
    while ($row = mysqli_fetch_array($result)) { 

       $productname3=$row['id'];
       $month3[]  = date_format(date_create( $row['Year_Month_Date']),"M d, Y")  ;
       $sale3[] = $row['NG_Percent_3'];
        }
 
 
 }
 
 
?>
 <?php
 $con  = mysqli_connect("localhost","root","","project_inv");
 if (!$con) {
     # code...
    echo "Problem in database connection! Contact administrator!" . mysqli_error();
 }else{
    $sql ="SELECT * FROM ngrecord";
    $result = mysqli_query($con,$sql);
    $chart_data="";
    while ($row = mysqli_fetch_array($result)) { 

       $productname4=$row['id'];
       $month4[]  = date_format(date_create( $row['Year_Month_Date']),"M d, Y")  ;
       $sale4[] = $row['NG_Percent_4'];
        }
 
 
 }
 
 
?>
 <?php
 $con  = mysqli_connect("localhost","root","","project_inv");
 if (!$con) {
     # code...
    echo "Problem in database connection! Contact administrator!" . mysqli_error();
 }else{
    $sql ="SELECT * FROM ngrecord";
    $result = mysqli_query($con,$sql);
    $chart_data="";
    while ($row = mysqli_fetch_array($result)) { 

       $productname5=$row['id'];
       $month5[]  = date_format(date_create( $row['Year_Month_Date']),"M d, Y")  ;
       $sale5[] = $row['NG_Percent_5'];
        }
 
 
 }
 
 
?>
<?php
 $con  = mysqli_connect("localhost","root","","project_inv");
 if (!$con) {
     # code...
    echo "Problem in database connection! Contact administrator!" . mysqli_error();
 }else{
    $sql ="SELECT * FROM ngrecord";
    $result = mysqli_query($con,$sql);
    $chart_data="";
    while ($row = mysqli_fetch_array($result)) { 

       $productname6=$row['id'];
       $month6[]  = date_format(date_create( $row['Year_Month_Date']),"M d, Y")  ;
       $sale6[] = $row['NG_Percent_6'];
        }
 
 
 }
 
 
?>
<?php
 $con  = mysqli_connect("localhost","root","","project_inv");
 if (!$con) {
     # code...
    echo "Problem in database connection! Contact administrator!" . mysqli_error();
 }else{
    $sql ="SELECT * FROM ngrecord";
    $result = mysqli_query($con,$sql);
    $chart_data="";
    while ($row = mysqli_fetch_array($result)) { 

       $productname7=$row['id'];
       $month7[]  = date_format(date_create( $row['Year_Month_Date']),"M d, Y")  ;
       $sale7[] = $row['NG_Percent_7'];
        }
 
 
 }
 
 
?>




 <br>
                   
		</div>
	</div>
                </div>
                <!-- ***** Mini Box End ***** -->
            </div>
        </div>
        
    </section>
    
    
    <section class="section padding-top-70 padding-bottom-0" id="features">
        <div class="container">
            <div class="row">
            
                <div class="col-lg-5 col-md-12 col-sm-12 align-self-center" data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                <h2 class="page-header" >LL8420A</h2>
                    <h4 class="page-header" >Budget = 2.00% </h4>
                    <div><?php echo $productname; ?> </div>
                    <canvas  id="chartjs_line"></canvas> 
                </div>
            
                <div class="col-lg-1"></div>
                <div class="col-lg-6 col-md-12 col-sm-12 align-self-center mobile-top-fix">
                    <div class="left-heading">
                        <h2 class="section-title">Let’s See Is it enough?</h2>
                    </div>
                    <?php
                     
                     $sql = "SELECT SUM(NG_Percent) as NG_Percent FROM ngrecord";
                     $sql1 = "SELECT COUNT(`NG_Percent`) as num FROM ngrecord";
                     if($result = mysqli_query($link, $sql)){
                        if($result1 = mysqli_query($link, $sql1)){
                         if(mysqli_num_rows($result) > 0){
                             
                             
                             echo "<table class='table table-bordered table-striped' >";
                                 echo "<thead>";
                                     echo "<tr >";
                                        
                                         
                                        
                                         
                                       
                                         
                                     echo "</tr>";
                                 echo "</thead>";
                                 echo "<tbody>";
                                 while($row = mysqli_fetch_array($result)){
                                    while($row1 = mysqli_fetch_array($result1)){
                                       if ($row['NG_Percent']<(2*$row1['num'])){
                                            printf("In Budget");
                                       }else{
                                        printf("Not in Budget");
                                       }
                                     echo "<tr>";
                                        
                                          
                                     
                                     
                                         

 
                                         echo "</td>";
                                     echo "</tr>";
                                    }
                                 }
                                 echo "</tbody>";                            
                             echo "</table>";
                             // Free result set
                             mysqli_free_result($result);
                         } else{
                             echo "<p class='lead'><em>No records were found.</em></p>";
                         }
                        }
                     } else{
                         echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                     }
                     ?>
                    
                </div>
            </div>
            
        </div>
    </section>
    <section class="section padding-top-70 padding-bottom-0" id="features">
        <div class="container">
            <div class="row">
            
                <div class="col-lg-5 col-md-12 col-sm-12 align-self-center" data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                <h2 class="page-header" >PP X675T</h2>
                    <h4 class="page-header" >Budget = 2.00% </h4>
                    <div><?php echo $productname1; ?> </div>
                    <canvas  id="chartjs_line1"></canvas> 
                </div>
            
                <div class="col-lg-1"></div>
                <div class="col-lg-6 col-md-12 col-sm-12 align-self-center mobile-top-fix">
                    <div class="left-heading">
                        <h2 class="section-title">Let’s See Is it enough?</h2>
                    </div>
                    <?php
                     
                     $sql = "SELECT SUM(NG_Percent_1) as NG_Percent FROM ngrecord";
                     $sql1 = "SELECT COUNT(`NG_Percent`) as num FROM ngrecord";
                     if($result = mysqli_query($link, $sql)){
                        if($result1 = mysqli_query($link, $sql1)){
                         if(mysqli_num_rows($result) > 0){
                             
                             
                             echo "<table class='table table-bordered table-striped' >";
                                 echo "<thead>";
                                     echo "<tr >";
                                        
                                         
                                        
                                         
                                       
                                         
                                     echo "</tr>";
                                 echo "</thead>";
                                 echo "<tbody>";
                                 while($row = mysqli_fetch_array($result)){
                                    while($row1 = mysqli_fetch_array($result1)){
                                       if ($row['NG_Percent']<(2*$row1['num'])){
                                            printf("In Budget");
                                       }else{
                                        printf("Not in Budget");
                                       }
                                     echo "<tr>";
                                        
                                          
                                     
                                     
                                         

 
                                         echo "</td>";
                                     echo "</tr>";
                                    }
                                 }
                                 echo "</tbody>";                            
                             echo "</table>";
                             // Free result set
                             mysqli_free_result($result);
                         } else{
                             echo "<p class='lead'><em>No records were found.</em></p>";
                         }
                        }
                     } else{
                         echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                     }
                     ?>
                    
                    
                </div>
            </div>
            
        </div>
        
    </section>
              
    <section class="section padding-top-70 padding-bottom-0" id="features">
        <div class="container">
            <div class="row">
            
                <div class="col-lg-5 col-md-12 col-sm-12 align-self-center" data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                <h2 class="page-header" >PP X165T</h2>
                    <h4 class="page-header" >Budget = 2.00% </h4>
                    <div><?php echo $productname2; ?> </div>
                    <canvas  id="chartjs_line2"></canvas> 
                </div>
            
                <div class="col-lg-1"></div>
                <div class="col-lg-6 col-md-12 col-sm-12 align-self-center mobile-top-fix">
                    <div class="left-heading">
                        <h2 class="section-title">Let’s See Is it enough?</h2>
                    </div>
                    <?php
                     
                     $sql = "SELECT SUM(NG_Percent_2) as NG_Percent FROM ngrecord";
                     $sql1 = "SELECT COUNT(`NG_Percent`) as num FROM ngrecord";
                     if($result = mysqli_query($link, $sql)){
                        if($result1 = mysqli_query($link, $sql1)){
                         if(mysqli_num_rows($result) > 0){
                             
                             
                             echo "<table class='table table-bordered table-striped' >";
                                 echo "<thead>";
                                     echo "<tr >";
                                        
                                         
                                        
                                         
                                       
                                         
                                     echo "</tr>";
                                 echo "</thead>";
                                 echo "<tbody>";
                                 while($row = mysqli_fetch_array($result)){
                                    while($row1 = mysqli_fetch_array($result1)){
                                       if ($row['NG_Percent']<(2*$row1['num'])){
                                            printf("In Budget");
                                       }else{
                                        printf("Not in Budget");
                                       }
                                     echo "<tr>";
                                        
                                          
                                     
                                     
                                         

 
                                         echo "</td>";
                                     echo "</tr>";
                                    }
                                 }
                                 echo "</tbody>";                            
                             echo "</table>";
                             // Free result set
                             mysqli_free_result($result);
                         } else{
                             echo "<p class='lead'><em>No records were found.</em></p>";
                         }
                        }
                     } else{
                         echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                     }
                     ?>
                    
                    
                </div>
            </div>
            
        </div>
        
    </section>
    <section class="section padding-top-70 padding-bottom-0" id="features">
        <div class="container">
            <div class="row">
            
                <div class="col-lg-5 col-md-12 col-sm-12 align-self-center" data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                <h2 class="page-header" >ABS970</h2>
                    <h4 class="page-header" >Budget = 2.00% </h4>
                    <div><?php echo $productname3; ?> </div>
                    <canvas  id="chartjs_line3"></canvas> 
                </div>
            
                <div class="col-lg-1"></div>
                <div class="col-lg-6 col-md-12 col-sm-12 align-self-center mobile-top-fix">
                    <div class="left-heading">
                        <h2 class="section-title">Let’s See Is it enough?</h2>
                    </div>
                    <?php
                     
                     $sql = "SELECT SUM(NG_Percent_3) as NG_Percent FROM ngrecord";
                     $sql1 = "SELECT COUNT(`NG_Percent`) as num FROM ngrecord";
                     if($result = mysqli_query($link, $sql)){
                        if($result1 = mysqli_query($link, $sql1)){
                         if(mysqli_num_rows($result) > 0){
                             
                             
                             echo "<table class='table table-bordered table-striped' >";
                                 echo "<thead>";
                                     echo "<tr >";
                                        
                                         
                                        
                                         
                                       
                                         
                                     echo "</tr>";
                                 echo "</thead>";
                                 echo "<tbody>";
                                 while($row = mysqli_fetch_array($result)){
                                    while($row1 = mysqli_fetch_array($result1)){
                                       if ($row['NG_Percent']<(2*$row1['num'])){
                                            printf("In Budget");
                                       }else{
                                        printf("Not in Budget");
                                       }
                                     echo "<tr>";
                                        
                                          
                                     
                                     
                                         

 
                                         echo "</td>";
                                     echo "</tr>";
                                    }
                                 }
                                 echo "</tbody>";                            
                             echo "</table>";
                             // Free result set
                             mysqli_free_result($result);
                         } else{
                             echo "<p class='lead'><em>No records were found.</em></p>";
                         }
                        }
                     } else{
                         echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                     }
                     ?>
                    
                    
                </div>
            </div>
            
        </div>
        
    </section>  
    <section class="section padding-top-70 padding-bottom-0" id="features">
        <div class="container">
            <div class="row">
            
                <div class="col-lg-5 col-md-12 col-sm-12 align-self-center" data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                <h2 class="page-header" >PP 410T</h2>
                    <h4 class="page-header" >Budget = 2.00% </h4>
                    <div><?php echo $productname4; ?> </div>
                    <canvas  id="chartjs_line4"></canvas> 
                </div>
            
                <div class="col-lg-1"></div>
                <div class="col-lg-6 col-md-12 col-sm-12 align-self-center mobile-top-fix">
                    <div class="left-heading">
                        <h2 class="section-title">Let’s See Is it enough?</h2>
                    </div>
                    <?php
                     
                     $sql = "SELECT SUM(NG_Percent_4) as NG_Percent FROM ngrecord";
                     $sql1 = "SELECT COUNT(`NG_Percent`) as num FROM ngrecord";
                     if($result = mysqli_query($link, $sql)){
                        if($result1 = mysqli_query($link, $sql1)){
                         if(mysqli_num_rows($result) > 0){
                             
                             
                             echo "<table class='table table-bordered table-striped' >";
                                 echo "<thead>";
                                     echo "<tr >";
                                        
                                         
                                        
                                         
                                       
                                         
                                     echo "</tr>";
                                 echo "</thead>";
                                 echo "<tbody>";
                                 while($row = mysqli_fetch_array($result)){
                                    while($row1 = mysqli_fetch_array($result1)){
                                        $row1['num'] = $row1['num'] *2;
                                       if ($row['NG_Percent']<$row1['num']){
                                            printf("In Budget");
                                            
                                       }else{
                                        printf("Not in Budget");
                                       }
                                     echo "<tr>";
                                        
                                          
                                     
                                     
                                         

 
                                         echo "</td>";
                                     echo "</tr>";
                                    }
                                 }
                                 echo "</tbody>";                            
                             echo "</table>";
                             // Free result set
                             mysqli_free_result($result);
                         } else{
                             echo "<p class='lead'><em>No records were found.</em></p>";
                         }
                        }
                     } else{
                         echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                     }
                     ?>
                    
                    
                </div>
            </div>
            
        </div>
        
    </section>  
    <section class="section padding-top-70 padding-bottom-0" id="features">
        <div class="container">
            <div class="row">
            
                <div class="col-lg-5 col-md-12 col-sm-12 align-self-center" data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                <h2 class="page-header" >NBX08HRT2</h2>
                    <h4 class="page-header" >Budget = 2.00% </h4>
                    <div><?php echo $productname5; ?> </div>
                    <canvas  id="chartjs_line5"></canvas> 
                </div>
            
                <div class="col-lg-1"></div>
                <div class="col-lg-6 col-md-12 col-sm-12 align-self-center mobile-top-fix">
                    <div class="left-heading">
                        <h2 class="section-title">Let’s See Is it enough?</h2>
                    </div>
                    <?php
                     
                     $sql = "SELECT SUM(NG_Percent_4) as NG_Percent FROM ngrecord";
                     $sql1 = "SELECT COUNT(`NG_Percent`) as num FROM ngrecord";
                     if($result = mysqli_query($link, $sql)){
                        if($result1 = mysqli_query($link, $sql1)){
                         if(mysqli_num_rows($result) > 0){
                             
                             
                             echo "<table class='table table-bordered table-striped' >";
                                 echo "<thead>";
                                     echo "<tr >";
                                        
                                         
                                        
                                         
                                       
                                         
                                     echo "</tr>";
                                 echo "</thead>";
                                 echo "<tbody>";
                                 while($row = mysqli_fetch_array($result)){
                                    while($row1 = mysqli_fetch_array($result1)){
                                        $row1['num'] = $row1['num'] *2;
                                       if ($row['NG_Percent']<$row1['num']){
                                            printf("In Budget");
                                            
                                       }else{
                                        printf("Not in Budget");
                                       }
                                     echo "<tr>";
                                        
                                          
                                     
                                     
                                         

 
                                         echo "</td>";
                                     echo "</tr>";
                                    }
                                 }
                                 echo "</tbody>";                            
                             echo "</table>";
                             // Free result set
                             mysqli_free_result($result);
                         } else{
                             echo "<p class='lead'><em>No records were found.</em></p>";
                         }
                        }
                     } else{
                         echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                     }
                     ?>
                    
                    
                </div>
            </div>
            
        </div>
        
    </section>  
    <section class="section padding-top-70 padding-bottom-0" id="features">
        <div class="container">
            <div class="row">
            
                <div class="col-lg-5 col-md-12 col-sm-12 align-self-center" data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                <h2 class="page-header" >Hifax TYS 699P</h2>
                    <h4 class="page-header" >Budget = 2.00% </h4>
                    <div><?php echo $productname6; ?> </div>
                    <canvas  id="chartjs_line6"></canvas> 
                </div>
            
                <div class="col-lg-1"></div>
                <div class="col-lg-6 col-md-12 col-sm-12 align-self-center mobile-top-fix">
                    <div class="left-heading">
                        <h2 class="section-title">Let’s See Is it enough?</h2>
                    </div>
                    <?php
                     
                     $sql = "SELECT SUM(NG_Percent_6) as NG_Percent FROM ngrecord";
                     $sql1 = "SELECT COUNT(`NG_Percent`) as num FROM ngrecord";
                     if($result = mysqli_query($link, $sql)){
                        if($result1 = mysqli_query($link, $sql1)){
                         if(mysqli_num_rows($result) > 0){
                             
                             
                             echo "<table class='table table-bordered table-striped' >";
                                 echo "<thead>";
                                     echo "<tr >";
                                        
                                         
                                        
                                         
                                       
                                         
                                     echo "</tr>";
                                 echo "</thead>";
                                 echo "<tbody>";
                                 while($row = mysqli_fetch_array($result)){
                                    while($row1 = mysqli_fetch_array($result1)){
                                        $row1['num'] = $row1['num'] *2;
                                       if ($row['NG_Percent']<$row1['num']){
                                            printf("In Budget");
                                            
                                       }else{
                                        printf("Not in Budget");
                                       }
                                     echo "<tr>";
                                        
                                          
                                     
                                     
                                         

 
                                         echo "</td>";
                                     echo "</tr>";
                                    }
                                 }
                                 echo "</tbody>";                            
                             echo "</table>";
                             // Free result set
                             mysqli_free_result($result);
                         } else{
                             echo "<p class='lead'><em>No records were found.</em></p>";
                         }
                        }
                     } else{
                         echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                     }
                     ?>
                    
                    
                </div>
            </div>
            
        </div>
        
    </section>  
    <section class="section padding-top-70 padding-bottom-0" id="features">
        <div class="container">
            <div class="row">
            
                <div class="col-lg-5 col-md-12 col-sm-12 align-self-center" data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                <h2 class="page-header" >AP-BP2</h2>
                    <h4 class="page-header" >Budget = 2.00% </h4>
                    <div><?php echo $productname7; ?> </div>
                    <canvas  id="chartjs_line7"></canvas> 
                </div>
            
                <div class="col-lg-1"></div>
                <div class="col-lg-6 col-md-12 col-sm-12 align-self-center mobile-top-fix">
                    <div class="left-heading">
                        <h2 class="section-title">Let’s See Is it enough?</h2>
                    </div>
                    <?php
                     
                     $sql = "SELECT SUM(NG_Percent_7) as NG_Percent FROM ngrecord";
                     $sql1 = "SELECT COUNT(`NG_Percent`) as num FROM ngrecord";
                     if($result = mysqli_query($link, $sql)){
                        if($result1 = mysqli_query($link, $sql1)){
                         if(mysqli_num_rows($result) > 0){
                             
                             
                             echo "<table class='table table-bordered table-striped' >";
                                 echo "<thead>";
                                     echo "<tr >";
                                        
                                         
                                        
                                         
                                       
                                         
                                     echo "</tr>";
                                 echo "</thead>";
                                 echo "<tbody>";
                                 while($row = mysqli_fetch_array($result)){
                                    while($row1 = mysqli_fetch_array($result1)){
                                        $row1['num'] = $row1['num'] *2;
                                       if ($row['NG_Percent']<$row1['num']){
                                            printf("In Budget");
                                            
                                       }else{
                                        printf("Not in Budget");
                                       }
                                     echo "<tr>";
                                        
                                          
                                     
                                     
                                         

 
                                         echo "</td>";
                                     echo "</tr>";
                                    }
                                 }
                                 echo "</tbody>";                            
                             echo "</table>";
                             // Free result set
                             mysqli_free_result($result);
                         } else{
                             echo "<p class='lead'><em>No records were found.</em></p>";
                         }
                        }
                     } else{
                         echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                     }
                     ?>
                    
                    
                </div>
            </div>
            
        </div>
        
    </section>
    
     
    <!-- ***** Home Parallax End ***** -->

    <!-- ***** Testimonials Start ***** -->
    <section class="section" id="testimonials">
        <div class="container">
            <!-- ***** Section Title Start ***** -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="center-heading">
                        <h2 class="section-title">Assembly</h2>
                    </div>
                </div>
                
            </div>
            <!-- ***** Section Title End ***** -->

            <div class="row">
                <!-- ***** Testimonials Item Start ***** -->
                <div class="col-lg-12 col-md-6 col-sm-12">
                    <div class="team-item">
                        <div class="team-content">
                            <i><img src="assets/images/testimonial-icon.png" alt=""></i>
                            
                            <div class="user-image">
                                <img src="http://placehold.it/60x60" alt="">
                            </div>
                            <div class="team-info">
                                
                                
                                
                                <a href="AssyFG.php"  class="main-button-slider col-md-12 text-center ">Create FG Part</a>
                            </div>
                            <div class="user-image">
                                <img src="http://placehold.it/60x60" alt="">
                            </div>
                            <div class="team-info">
                                
                                
                                
                                <a href="createNG221A.php"  class="main-button-slider col-md-12 text-center ">Create NG Model : 221A</a>
                            </div>
                            <div class="user-image">
                                <img src="http://placehold.it/60x60" alt="">
                            </div>
                            <div class="team-info">
                                
                                
                                
                                <a href="createNG221A.php"  class="main-button-slider col-md-12 text-center ">Create NG Model : 221A</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-6 col-sm-12">
                    <div class="team-item">
                        <div class="team-content">
                        <?php
                    // Include config file
                    require_once "db.php";
                    

                    $sql = "SELECT * FROM insulissueinj";
                    if($result = mysqli_query($link, $sql)){
                        
                        if(mysqli_num_rows($result) > 0){
                            
                            echo "<a href='#UpdateResin.php?id=' title='Add more' data-toggle='tooltip'><button type='button' class='btn btn-danger'>Insulator</button></a>";
                            echo "<table class='table table-bordered table-striped' >";
                                echo "<thead>";
                                    echo "<tr >";
                                        echo "<th>#</th>";
                                        echo "<th>Material_Name</th>";
                                        echo "<th>Part_No</th>";
                                        echo "<th>Stock_Amount</th>";
                                        echo "<th>Edit</th>";
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while($row = mysqli_fetch_array($result)){
                                    
                                        
                                    echo "<tr>";
                                        echo "<td><font size='3pt'>" . $row['id'] . "</td>";
                                        echo "<td><font size='3pt'>" . $row['Material_Name'] . "</td>";
                                        echo "<td><font size='3pt'>" . $row['Part_No'] . "</td>";
                                        echo "<td><font size='3pt'>" . $row['Stock_Amount'] . "</td>";
                                        echo "<td>";
                                        echo "<a href='InsulIssueInj.php?id=". $row['id'] ."' title='Issue to process' data-toggle='tooltip'><button type='button' class='btn btn-primary btn-sm '>Issue to process</button></a>";
                                        echo "<a href='#UpdateResin.php?id=". $row['id'] ."' title='' data-toggle='tooltip'><button type='button' class='btn  '></button></a>";
                                        echo "<a href='DeleteInsulProcess.php?id=". $row['id'] ."' title='Delete this category' data-toggle='tooltip'><button type='button' class='btn btn-outline-danger btn-sm'>Delete</button></a>";
                                        echo "<a href='#UpdateResin.php?id=". $row['id'] ."' title='' data-toggle='tooltip'><button type='button' class='btn  '></button></a>";
                                        echo "<a href='InsulTurnStock.php?id=". $row['id'] ."' title='Delete this category' data-toggle='tooltip'><button type='button' class='btn btn-success btn-sm'>Turn to Stock</button></a>";
                                        echo "</td>";
                                        
                                    echo "</tr>";
                                
                                }
                                echo "</tbody>";                            
                            echo "</table>";
                            // Free result set
                            mysqli_free_result($result);
                        } else{
                            echo "<p class='lead'><em>No records were found.</em></p>";
                        }
                    
                    } else{
                        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                    }

                    // Attempt select query execution
                   $sql = "SELECT * FROM shopissueassy";
                    if($result = mysqli_query($link, $sql)){
                        
                        if(mysqli_num_rows($result) > 0){
                            
                            echo "<a href='#UpdateResin.php?id=' title='Add more' data-toggle='tooltip'><button type='button' class='btn btn-danger'>Shop Supply</button></a>";
                            echo "<table class='table table-bordered table-striped' >";
                                echo "<thead>";
                                    echo "<tr >";
                                        echo "<th>#</th>";
                                        echo "<th>Material_Name</th>";
                                        echo "<th>Part_No</th>";
                                        echo "<th>Stock_Amount</th>";
                                        echo "<th>Edit</th>";
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while($row = mysqli_fetch_array($result)){
                                    
                                        
                                    echo "<tr>";
                                        echo "<td><font size='3pt'>" . $row['id'] . "</td>";
                                        echo "<td><font size='3pt'>" . $row['Material_Name'] . "</td>";
                                        echo "<td><font size='3pt'>" . $row['Part_No'] . "</td>";
                                        echo "<td><font size='3pt'>" . $row['Stock_Amount'] . "</td>";
                                        echo "<td>";
                                        echo "<a href='InsulIssueInj.php?id=". $row['id'] ."' title='Issue to process' data-toggle='tooltip'><button type='button' class='btn btn-primary btn-sm '>Issue to process</button></a>";
                                        echo "<a href='#UpdateResin.php?id=". $row['id'] ."' title='' data-toggle='tooltip'><button type='button' class='btn  '></button></a>";
                                        echo "<a href='DeleteInsulProcess.php?id=". $row['id'] ."' title='Delete this category' data-toggle='tooltip'><button type='button' class='btn btn-outline-danger btn-sm'>Delete</button></a>";
                                        echo "<a href='#UpdateResin.php?id=". $row['id'] ."' title='' data-toggle='tooltip'><button type='button' class='btn  '></button></a>";
                                        echo "<a href='InsulTurnStock.php?id=". $row['id'] ."' title='Delete this category' data-toggle='tooltip'><button type='button' class='btn btn-success btn-sm'>Turn to Stock</button></a>";
                                        echo "</td>";
                                        
                                    echo "</tr>";
                                
                                }
                                echo "</tbody>";                            
                            echo "</table>";
                            // Free result set
                            mysqli_free_result($result);
                        } else{
                            echo "<p class='lead'><em>No records were found.</em></p>";
                        }
                    
                    } else{
                        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                    }
                    
                    $sql = "SELECT * FROM assyfg";
                    if($result = mysqli_query($link, $sql)){
                        
                        if(mysqli_num_rows($result) > 0){
                            
                            echo "<a href='#UpdateResin.php?id=' title='Add more' data-toggle='tooltip'><button type='button' class='btn btn-danger'>FG Part</button></a>";
                            echo "<table class='table table-bordered table-striped' >";
                                echo "<thead>";
                                    echo "<tr >";
                                        echo "<th>#</th>";
                                        echo "<th>FG_Name</th>";
                                        echo "<th>Part_No</th>";
                                        echo "<th>Stock_Amount</th>";
                                        echo "<th>Edit</th>";
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while($row = mysqli_fetch_array($result)){
                                    
                                        
                                    echo "<tr>";
                                        echo "<td><font size='3pt'>" . $row['id'] . "</td>";
                                        echo "<td><font size='3pt'>" . $row['FG_Name'] . "</td>";
                                        echo "<td><font size='3pt'>" . $row['Part_No'] . "</td>";
                                        echo "<td><font size='3pt'>" . $row['Stock_Amount'] . "</td>";
                                        echo "<td>";
                                        
                                        echo "<a href='InsulTurnStock.php?id=". $row['id'] ."' title='Delete this category' data-toggle='tooltip'><button type='button' class='btn btn-success btn-sm'>Issue to Painting</button></a>";
                                        echo "</td>";
                                        
                                    echo "</tr>";
                                
                                }
                                echo "</tbody>";                            
                            echo "</table>";
                            // Free result set
                            mysqli_free_result($result);
                        } else{
                            echo "<p class='lead'><em>No records were found.</em></p>";
                        }
                    
                    } else{
                        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                    }
                    
                    
                    // Close connection
                    
                    ?>
 
 
                            
                            
                        </div>
                    </div>
                </div>
                <!-- ***** Testimonials Item End ***** -->
                
                <!-- ***** Testimonials Item Start ***** -->
                
                <!-- ***** Testimonials Item End ***** -->
                
                <!-- ***** Testimonials Item Start ***** -->
                
                <!-- ***** Testimonials Item End ***** -->
            </div>
        </div>
       
    </section>
    
    <!-- ***** Testimonials End ***** -->

    <!-- ***** Pricing Plans Start ***** -->
    <section class="section colored" id="pricing-plans">
        <div class="container">
            <!-- ***** Section Title Start ***** -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="center-heading">
                        <h2 class="section-title">Painting</h2>
                    </div>
                </div>
                <div class="offset-lg-3 col-lg-6">
                    <div class="center-text">
                       
                    </div>
                </div>
            </div>
            <!-- ***** Section Title End ***** -->

            <div class="row">
                <!-- ***** Pricing Item Start ***** -->
                <div class="col-lg-4 col-md-6 col-sm-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.2s">
                    <div class="pricing-item">
                        <div class="pricing-header">
                            <h3 class="pricing-title">Create FG Part</h3>
                        </div>
                        <div class="pricing-body">
                            
                        </div>
                        <div class="pricing-footer">
                            <a href="AssyFG.php" class="main-button">Create FG Part</a>
                        </div>
                    </div>
                </div>
                <!-- ***** Pricing Item End ***** -->

                <!-- ***** Pricing Item Start ***** -->
                <div class="col-lg-4 col-md-6 col-sm-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.4s">
                    <div class="pricing-item active">
                        <div class="pricing-header">
                            <h3 class="pricing-title">Create NG Model : 221 A</h3>
                        </div>
                        <div class="pricing-body">
                            
                        </div>
                        <div class="pricing-footer">
                            <a href="#" class="main-button">Create NG Model : 221 A</a>
                        </div>
                    </div>
                </div>
                <!-- ***** Pricing Item End ***** -->

                <!-- ***** Pricing Item Start ***** -->
                <div class="col-lg-4 col-md-6 col-sm-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.6s">
                    <div class="pricing-item">
                        <div class="pricing-header">
                            <h3 class="pricing-title">Create Set Up Model : 221A</h3>
                        </div>
                        
                        <div class="pricing-footer">
                            <a href="#" class="main-button">Create Set Up Model : 221A</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.6s">
                    <div class="pricing-item">
                        <div class="pricing-header">
                            <h3 class="pricing-title">Material Planning</h3>
                        </div>
                        
                        <div class="pricing-footer">
                            <a href="PaintMaterialPlan.php" class="main-button">Material Planning</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-6 col-sm-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.6s">
                <?php
                    // Include config file
                    require_once "db.php";
                    

                     $sql = "SELECT * FROM shopissueassy";
                    if($result = mysqli_query($link, $sql)){
                        
                        if(mysqli_num_rows($result) > 0){
                            
                            echo "<a href='#UpdateResin.php?id=' title='Add more' data-toggle='tooltip'><button type='button' class='btn btn-danger'>Shop Supply</button></a>";
                            echo "<table class='table table-bordered table-striped' >";
                                echo "<thead>";
                                    echo "<tr >";
                                        echo "<th>#</th>";
                                        echo "<th>Material_Name</th>";
                                        echo "<th>Part_No</th>";
                                        echo "<th>Stock_Amount</th>";
                                        echo "<th>Edit</th>";
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while($row = mysqli_fetch_array($result)){
                                    
                                        
                                    echo "<tr>";
                                        echo "<td><font size='3pt'>" . $row['id'] . "</td>";
                                        echo "<td><font size='3pt'>" . $row['Material_Name'] . "</td>";
                                        echo "<td><font size='3pt'>" . $row['Part_No'] . "</td>";
                                        echo "<td><font size='3pt'>" . $row['Stock_Amount'] . "</td>";
                                        echo "<td>";
                                        echo "<a href='InsulIssueInj.php?id=". $row['id'] ."' title='Issue to process' data-toggle='tooltip'><button type='button' class='btn btn-primary btn-sm '>Issue to process</button></a>";
                                        echo "<a href='#UpdateResin.php?id=". $row['id'] ."' title='' data-toggle='tooltip'><button type='button' class='btn  '></button></a>";
                                        echo "<a href='DeleteInsulProcess.php?id=". $row['id'] ."' title='Delete this category' data-toggle='tooltip'><button type='button' class='btn btn-outline-danger btn-sm'>Delete</button></a>";
                                        echo "<a href='#UpdateResin.php?id=". $row['id'] ."' title='' data-toggle='tooltip'><button type='button' class='btn  '></button></a>";
                                        echo "<a href='InsulTurnStock.php?id=". $row['id'] ."' title='Delete this category' data-toggle='tooltip'><button type='button' class='btn btn-success btn-sm'>Turn to Stock</button></a>";
                                        echo "</td>";
                                        
                                    echo "</tr>";
                                
                                }
                                echo "</tbody>";                            
                            echo "</table>";
                            // Free result set
                            mysqli_free_result($result);
                        } else{
                            echo "<p class='lead'><em>No records were found.</em></p>";
                        }
                    
                    } else{
                        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                    }

                    $sql = "SELECT * FROM paintissuepaint";
                    if($result = mysqli_query($link, $sql)){
                        
                        if(mysqli_num_rows($result) > 0){
                            
                            echo "<a href='#UpdateResin.php?id=' title='Add more' data-toggle='tooltip'><button type='button' class='btn btn-danger'>Paint Material</button></a>";
                            echo "<table class='table table-bordered table-striped' >";
                                echo "<thead>";
                                    echo "<tr >";
                                        echo "<th>#</th>";
                                        echo "<th>Material_Name</th>";
                                        echo "<th>Part_No</th>";
                                        echo "<th>Stock_Amount</th>";
                                        echo "<th>Edit</th>";
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while($row = mysqli_fetch_array($result)){
                                    
                                        
                                    echo "<tr>";
                                        echo "<td><font size='3pt'>" . $row['id'] . "</td>";
                                        echo "<td><font size='3pt'>" . $row['Material_Name'] . "</td>";
                                        echo "<td><font size='3pt'>" . $row['Part_No'] . "</td>";
                                        echo "<td><font size='3pt'>" . $row['Stock_Amount'] . "</td>";
                                        echo "<td>";
                                        echo "<a href='InsulIssueInj.php?id=". $row['id'] ."' title='Issue to process' data-toggle='tooltip'><button type='button' class='btn btn-primary btn-sm '>Issue to process</button></a>";
                                        echo "<a href='#UpdateResin.php?id=". $row['id'] ."' title='' data-toggle='tooltip'><button type='button' class='btn  '></button></a>";
                                        echo "<a href='DeleteInsulProcess.php?id=". $row['id'] ."' title='Delete this category' data-toggle='tooltip'><button type='button' class='btn btn-outline-danger btn-sm'>Delete</button></a>";
                                        echo "<a href='#UpdateResin.php?id=". $row['id'] ."' title='' data-toggle='tooltip'><button type='button' class='btn  '></button></a>";
                                        echo "<a href='InsulTurnStock.php?id=". $row['id'] ."' title='Delete this category' data-toggle='tooltip'><button type='button' class='btn btn-success btn-sm'>Turn to Stock</button></a>";
                                        echo "</td>";
                                        
                                    echo "</tr>";
                                
                                }
                                echo "</tbody>";                            
                            echo "</table>";
                            // Free result set
                            mysqli_free_result($result);
                        } else{
                            echo "<p class='lead'><em>No records were found.</em></p>";
                        }
                    
                    } else{
                        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                    }
                    // Attempt select query execution
                   
                    
                    $sql = "SELECT * FROM assyfg";
                    if($result = mysqli_query($link, $sql)){
                        
                        if(mysqli_num_rows($result) > 0){
                            
                            echo "<a href='#UpdateResin.php?id=' title='Add more' data-toggle='tooltip'><button type='button' class='btn btn-danger'>FG Part</button></a>";
                            echo "<table class='table table-bordered table-striped' >";
                                echo "<thead>";
                                    echo "<tr >";
                                        echo "<th>#</th>";
                                        echo "<th>FG_Name</th>";
                                        echo "<th>Part_No</th>";
                                        echo "<th>Stock_Amount</th>";
                                        echo "<th>Edit</th>";
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while($row = mysqli_fetch_array($result)){
                                    
                                        
                                    echo "<tr>";
                                        echo "<td><font size='3pt'>" . $row['id'] . "</td>";
                                        echo "<td><font size='3pt'>" . $row['FG_Name'] . "</td>";
                                        echo "<td><font size='3pt'>" . $row['Part_No'] . "</td>";
                                        echo "<td><font size='3pt'>" . $row['Stock_Amount'] . "</td>";
                                        echo "<td>";
                                        
                                        echo "<a href='InsulTurnStock.php?id=". $row['id'] ."' title='Delete this category' data-toggle='tooltip'><button type='button' class='btn btn-secondary btn-sm'>Issue to Polishing</button></a>";
                                        echo "</td>";
                                        
                                    echo "</tr>";
                                
                                }
                                echo "</tbody>";                            
                            echo "</table>";
                            // Free result set
                            mysqli_free_result($result);
                        } else{
                            echo "<p class='lead'><em>No records were found.</em></p>";
                        }
                    
                    } else{
                        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                    }
                    
                   
                    // Close connection
                   
                    ?>
                    <?php
                    
                    $sql = "SELECT `id`, `Model`, `Sub_Model`, `Mat_Required`FROM `paintformplanning` ";
                    if($result = mysqli_query($link, $sql)){
                       
                        if(mysqli_num_rows($result) > 0){
                            
                            echo "<a href='UpdateResin.php?id=' title='Add more' data-toggle='tooltip'><button type='button' class='btn btn-danger'>Material Planning</button></a>";
                            echo "<table class='table table-bordered table-striped' >";
                                echo "<thead>";
                                    echo "<tr >";
                                       
                                        echo "<th>id</th>";
                                        echo "<th>Model</th>";
                                        echo "<th>Sub_Model</th>";
                                        echo "<th>FG_Required</th>";
                                        echo "<th>Edit</th>";
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while($row = mysqli_fetch_array($result)){
                                   
                                        
                                       
                                    echo "<tr>";
                                        echo "<td><font  size='3pt'>" . $row['id'] . "</td>";
                                        echo "<td><font  size='3pt'>" . $row['Model'] . "</td>";
                                        echo "<td><font  size='3pt'>" . $row['Sub_Model'] . "</td>";
                                        echo "<td><font  size='3pt'>" . $row['Mat_Required'] . "</td>";
                                        echo "<td>";
                                        echo "<a href='DeleteFormPaint.php?id=". $row['id'] ."' title='Delete' data-toggle='tooltip'><button type='button' class='btn btn-danger btn-sm '>Delete</button></a>";
                                        
                                        echo "</td>";
                                    echo "</tr>";
                                
                                }
                                echo "</tbody>";                            
                            echo "</table>";
                            // Free result set
                            mysqli_free_result($result);
                        } else{
                            echo "<p class='lead'><em>No records were found.</em></p>";
                        }
                    
                    } else{
                        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                    }
                    ?>
                   

                    <?php
                     
                    $sql = "SELECT nismo_qab_bumper_md.Model, nismo_qab_bumper_md.Sub_Model, nismo_qab_bumper_md.`SOFLEX NT 3001 PRIMER LIGHT GRAY`,nismo_qab_bumper_md.`SOFLEX NT PRIMER THINNER`,nismo_qab_bumper_md.`SOFLEX NT NO.QAB COLOR BASE 3.6 KG.`,nismo_qab_bumper_md.`SOFLEX NT BASE THINNER 15Kg`,nismo_qab_bumper_md.`SOFLEX NT NO.QAB PEARL BASE 3.6 KG.`,nismo_qab_bumper_md.`SOFLEX NT CLEAR 8 KG`,nismo_qab_bumper_md.`SOFLEX NT HARDENER 0.8 KG`,nismo_qab_bumper_md.`SOFLEX NT CLEAR THINNER`,paintformplanning.Mat_Required,SUM(`SOFLEX NT 3001 PRIMER LIGHT GRAY`) as `SOFLEX NT 3001 PRIMER LIGHT GRAY` ,SUM(`SOFLEX NT PRIMER THINNER`) as `SOFLEX NT PRIMER THINNER`,SUM(`SOFLEX NT NO.QAB COLOR BASE 3.6 KG.`) as `SOFLEX NT NO.QAB COLOR BASE 3.6 KG.`,SUM(`SOFLEX NT BASE THINNER 15Kg`) as `SOFLEX NT BASE THINNER 15Kg`,SUM(`SOFLEX NT NO.QAB PEARL BASE 3.6 KG.`) as `SOFLEX NT NO.QAB PEARL BASE 3.6 KG.`, SUM(`SOFLEX NT CLEAR 8 KG`) as `SOFLEX NT CLEAR 8 KG`,SUM(`SOFLEX NT HARDENER 0.8 KG`) as `SOFLEX NT HARDENER 0.8 KG`,SUM(`SOFLEX NT CLEAR 8 KG`) as `SOFLEX NT CLEAR 8 KG`,SUM(`SOFLEX NT CLEAR THINNER`) as `SOFLEX NT CLEAR THINNER` FROM nismo_qab_bumper_md INNER JOIN paintformplanning ON nismo_qab_bumper_md.Sub_Model = paintformplanning.Sub_Model;";
                    if($result = mysqli_query($link, $sql)){
                       
                        if(mysqli_num_rows($result) > 0){
                            
                            echo "<a href='UpdateResin.php?id=' title='Add more' data-toggle='tooltip'><button type='button' class='btn btn-info'>Nismo : QAB (BODY) Bumper & QAB (BODY) MD</button></a>";
                            echo "<table class='table table-bordered table-striped' >";
                                echo "<thead>";
                                    echo "<tr >";
                                       
                                        
                                        echo "<th><font  size='1pt'>SOFLEX NT 3001 PRIMER LIGHT GRAY</th>";
                                        echo "<th><font  size='1pt'>SOFLEX NT PRIMER THINNER</th>";
                                        echo "<th><font  size='1pt'>SOFLEX NT NO.QAB COLOR BASE 3.6 KG.</th>";
                                        echo "<th><font  size='1pt'>SOFLEX NT BASE THINNER 15Kg</th>";
                                        echo "<th><font  size='1pt'>SOFLEX NT NO.QAB PEARL BASE 3.6 KG.</th>";
                                        echo "<th><font  size='1pt'>SOFLEX NT CLEAR 8 KG</th>";
                                        echo "<th><font  size='1pt'>SOFLEX NT HARDENER 0.8 KG</th>";
                                        echo "<th><font  size='1pt'>SOFLEX NT CLEAR THINNER</th>";
                                       
                                        
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while($row = mysqli_fetch_array($result)){
                                        $row['SOFLEX NT 3001 PRIMER LIGHT GRAY'] =ceil( $row['Mat_Required']*$row['SOFLEX NT 3001 PRIMER LIGHT GRAY']);
                                        $row['SOFLEX NT PRIMER THINNER'] =ceil( $row['Mat_Required']*$row['SOFLEX NT PRIMER THINNER']);
                                        $row['SOFLEX NT NO.QAB COLOR BASE 3.6 KG.'] =ceil( $row['Mat_Required']*$row['SOFLEX NT NO.QAB COLOR BASE 3.6 KG.']);
                                        $row['SOFLEX NT BASE THINNER 15Kg'] =ceil( $row['Mat_Required']*$row['SOFLEX NT BASE THINNER 15Kg']);
                                        $row['SOFLEX NT NO.QAB PEARL BASE 3.6 KG.'] = ceil($row['Mat_Required']*$row['SOFLEX NT NO.QAB PEARL BASE 3.6 KG.']);
                                        $row['SOFLEX NT CLEAR 8 KG'] = ceil($row['Mat_Required']*$row['SOFLEX NT CLEAR 8 KG']);
                                        $row['SOFLEX NT HARDENER 0.8 KG'] = ceil($row['Mat_Required']*$row['SOFLEX NT HARDENER 0.8 KG']);
                                        $row['SOFLEX NT CLEAR THINNER'] = ceil($row['Mat_Required']*$row['SOFLEX NT CLEAR THINNER']);
                                    echo "<tr>";
                                        
                                        
                                        echo "<td><font  size='3pt'>" . $row['SOFLEX NT 3001 PRIMER LIGHT GRAY'] . "</td>";
                                        echo "<td><font  size='3pt'>" . $row['SOFLEX NT PRIMER THINNER'] . "</td>";
                                        echo "<td><font  size='3pt'>" . $row['SOFLEX NT NO.QAB COLOR BASE 3.6 KG.'] . "</td>";
                                        echo "<td><font  size='3pt'>" . $row['SOFLEX NT BASE THINNER 15Kg'] . "</td>";
                                        echo "<td><font  size='3pt'>" . $row['SOFLEX NT NO.QAB PEARL BASE 3.6 KG.'] . "</td>";
                                        echo "<td><font  size='3pt'>" . $row['SOFLEX NT CLEAR 8 KG'] . "</td>";
                                        echo "<td><font  size='3pt'>" . $row['SOFLEX NT HARDENER 0.8 KG'] . "</td>";
                                        echo "<td><font  size='3pt'>" . $row['SOFLEX NT CLEAR THINNER'] . "</td>";

                                        echo "</td>";
                                    echo "</tr>";
                                
                                }
                                echo "</tbody>";                            
                            echo "</table>";
                            // Free result set
                            mysqli_free_result($result);
                        } else{
                            echo "<p class='lead'><em>No records were found.</em></p>";
                        }
                    
                    } else{
                        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                    }
                    ?>

                    <?php
                     
                     $sql = "SELECT SUM(`SOFLEX NT 3001 PRIMER LIGHT GRAY`) as `SOFLEX NT 3001 PRIMER LIGHT GRAY`,SUM(`SOFLEX NT PRIMER THINNER`) as `SOFLEX NT PRIMER THINNER`,SUM(`SOFLEX NT NO.G42 BLACK MICA 3.6KG`) as `SOFLEX NT NO.G42 BLACK MICA 3.6KG`,SUM(`SOFLEX NT BASE THINNER 15Kg`) as `SOFLEX NT BASE THINNER 15Kg`,SUM(`SOFLEX NT CLEAR 8 KG`) as `SOFLEX NT CLEAR 8 KG`,SUM(`SOFLEX NT HARDENER 0.8 KG`) as `SOFLEX NT HARDENER 0.8 KG`,SUM(`SOFLEX NT CLEAR THINNER`) as `SOFLEX NT CLEAR THINNER`,paintformplanning.Model,paintformplanning.Sub_Model,paintformplanning.Mat_Required FROM nismo_k23_body_bumper_k23_body_md INNER JOIN paintformplanning ON paintformplanning.`Sub_Model` = nismo_k23_body_bumper_k23_body_md.`Sub_Model`;";
                     if($result = mysqli_query($link, $sql)){
                        
                         if(mysqli_num_rows($result) > 0){
                             
                             echo "<a href='UpdateResin.php?id=' title='Add more' data-toggle='tooltip'><button type='button' class='btn btn-info'>Nismo : G42 (BODY) Bumper & G42 (BODY) MD</button></a>";
                             echo "<table class='table table-bordered table-striped' >";
                                 echo "<thead>";
                                     echo "<tr >";
                                        
                                         
                                         echo "<th><font  size='1pt'>SOFLEX NT 3001 PRIMER LIGHT GRAY</th>";
                                         echo "<th><font  size='1pt'>SOFLEX NT PRIMER THINNER</th>";
                                         echo "<th><font  size='1pt'>SOFLEX NT NO.G42 BLACK MICA 3.6KG</th>";
                                         echo "<th><font  size='1pt'>SOFLEX NT BASE THINNER 15Kg</th>";
                                         echo "<th><font  size='1pt'>SOFLEX NT CLEAR 8 KG</th>";
                                         echo "<th><font  size='1pt'>SOFLEX NT HARDENER 0.8 KG</th>";
                                         echo "<th><font  size='1pt'>SOFLEX NT CLEAR THINNER</th>";
                                        
                                         
                                     echo "</tr>";
                                 echo "</thead>";
                                 echo "<tbody>";
                                 while($row = mysqli_fetch_array($result)){
                                         $row['SOFLEX NT 3001 PRIMER LIGHT GRAY'] =ceil( $row['Mat_Required']*$row['SOFLEX NT 3001 PRIMER LIGHT GRAY']);
                                         $row['SOFLEX NT PRIMER THINNER'] =ceil( $row['Mat_Required']*$row['SOFLEX NT PRIMER THINNER']);
                                         $row['SOFLEX NT NO.G42 BLACK MICA 3.6KG'] =ceil( $row['Mat_Required']*$row['SOFLEX NT NO.G42 BLACK MICA 3.6KG']);
                                       
                                         $row['SOFLEX NT BASE THINNER 15Kg'] = ceil($row['Mat_Required']*$row['SOFLEX NT BASE THINNER 15Kg']);
                                         $row['SOFLEX NT CLEAR 8 KG'] = ceil($row['Mat_Required']*$row['SOFLEX NT CLEAR 8 KG']);
                                         $row['SOFLEX NT HARDENER 0.8 KG'] = ceil($row['Mat_Required']*$row['SOFLEX NT HARDENER 0.8 KG']);
                                         $row['SOFLEX NT CLEAR THINNER'] = ceil($row['Mat_Required']*$row['SOFLEX NT CLEAR THINNER']);
                                     echo "<tr>";
                                         
                                         
                                         echo "<td><font  size='3pt'>" . $row['SOFLEX NT 3001 PRIMER LIGHT GRAY'] . "</td>";
                                         echo "<td><font  size='3pt'>" . $row['SOFLEX NT PRIMER THINNER'] . "</td>";
                                         echo "<td><font  size='3pt'>" . $row['SOFLEX NT NO.G42 BLACK MICA 3.6KG'] . "</td>";
                                         echo "<td><font  size='3pt'>" . $row['SOFLEX NT BASE THINNER 15Kg'] . "</td>";
                                         echo "<td><font  size='3pt'>" . $row['SOFLEX NT CLEAR 8 KG'] . "</td>";
                                         echo "<td><font  size='3pt'>" . $row['SOFLEX NT HARDENER 0.8 KG'] . "</td>";
                                         echo "<td><font  size='3pt'>" . $row['SOFLEX NT CLEAR THINNER'] . "</td>";
 
                                         echo "</td>";
                                     echo "</tr>";
                                 
                                 }
                                 echo "</tbody>";                            
                             echo "</table>";
                             // Free result set
                             mysqli_free_result($result);
                         } else{
                             echo "<p class='lead'><em>No records were found.</em></p>";
                         }
                     
                     } else{
                         echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                     }
                     ?>
                   
                   <?php
                     
                     $sql = "SELECT SUM(`SOFLEX NT 3001 PRIMER LIGHT GRAY`) as `SOFLEX NT 3001 PRIMER LIGHT GRAY`, SUM(`SOFLEX NT PRIMER THINNER`) as `SOFLEX NT PRIMER THINNER`,SUM(`SOFLEX NT NO.K23 SILVER 3.6 KG`) as `SOFLEX NT NO.K23 SILVER 3.6 KG`,SUM(`SOFLEX NT BASE THINNER 15Kg`) as `SOFLEX NT BASE THINNER 15Kg`,SUM(`SOFLEX NT CLEAR 8 KG`) as `SOFLEX NT CLEAR 8 KG`,SUM(`SOFLEX NT HARDENER 0.8 KG`) as `SOFLEX NT HARDENER 0.8 KG`,SUM(`SOFLEX NT CLEAR THINNER`) as `SOFLEX NT CLEAR THINNER`,paintformplanning.Model,paintformplanning.Sub_Model,paintformplanning.Mat_Required
                     FROM nismo_k23_md_bumper
                     INNER JOIN paintformplanning ON paintformplanning.Sub_Model = nismo_k23_md_bumper.Sub_Model;";
                     if($result = mysqli_query($link, $sql)){
                        
                         if(mysqli_num_rows($result) > 0){
                             
                             echo "<a href='UpdateResin.php?id=' title='Add more' data-toggle='tooltip'><button type='button' class='btn btn-info'>Nismo : K23 (BODY) Bumper & K23(BODY) MD</button></a>";
                             echo "<table class='table table-bordered table-striped' >";
                                 echo "<thead>";
                                     echo "<tr >";
                                        
                                         
                                         echo "<th><font  size='1pt'>SOFLEX NT 3001 PRIMER LIGHT GRAY</th>";
                                         echo "<th><font  size='1pt'>SOFLEX NT PRIMER THINNER</th>";
                                         echo "<th><font  size='1pt'>SOFLEX NT NO.K23 SILVER 3.6 KG</th>";
                                         echo "<th><font  size='1pt'>SOFLEX NT BASE THINNER 15Kg</th>";
                                         echo "<th><font  size='1pt'>SOFLEX NT CLEAR 8 KG</th>";
                                         echo "<th><font  size='1pt'>SOFLEX NT HARDENER 0.8 KG</th>";
                                         echo "<th><font  size='1pt'>SOFLEX NT CLEAR THINNER</th>";
                                        
                                         
                                     echo "</tr>";
                                 echo "</thead>";
                                 echo "<tbody>";
                                 while($row = mysqli_fetch_array($result)){
                                         $row['SOFLEX NT 3001 PRIMER LIGHT GRAY'] =ceil( $row['Mat_Required']*$row['SOFLEX NT 3001 PRIMER LIGHT GRAY']);
                                         $row['SOFLEX NT PRIMER THINNER'] =ceil( $row['Mat_Required']*$row['SOFLEX NT PRIMER THINNER']);
                                         $row['SOFLEX NT NO.K23 SILVER 3.6 KG'] =ceil( $row['Mat_Required']*$row['SOFLEX NT NO.K23 SILVER 3.6 KG']);
                                       
                                         $row['SOFLEX NT BASE THINNER 15Kg'] = ceil($row['Mat_Required']*$row['SOFLEX NT BASE THINNER 15Kg']);
                                         $row['SOFLEX NT CLEAR 8 KG'] = ceil($row['Mat_Required']*$row['SOFLEX NT CLEAR 8 KG']);
                                         $row['SOFLEX NT HARDENER 0.8 KG'] = ceil($row['Mat_Required']*$row['SOFLEX NT HARDENER 0.8 KG']);
                                         $row['SOFLEX NT CLEAR THINNER'] = ceil($row['Mat_Required']*$row['SOFLEX NT CLEAR THINNER']);
                                     echo "<tr>";
                                         
                                         
                                         echo "<td><font  size='3pt'>" . $row['SOFLEX NT 3001 PRIMER LIGHT GRAY'] . "</td>";
                                         echo "<td><font  size='3pt'>" . $row['SOFLEX NT PRIMER THINNER'] . "</td>";
                                         echo "<td><font  size='3pt'>" . $row['SOFLEX NT NO.K23 SILVER 3.6 KG'] . "</td>";
                                         echo "<td><font  size='3pt'>" . $row['SOFLEX NT BASE THINNER 15Kg'] . "</td>";
                                         echo "<td><font  size='3pt'>" . $row['SOFLEX NT CLEAR 8 KG'] . "</td>";
                                         echo "<td><font  size='3pt'>" . $row['SOFLEX NT HARDENER 0.8 KG'] . "</td>";
                                         echo "<td><font  size='3pt'>" . $row['SOFLEX NT CLEAR THINNER'] . "</td>";
 
                                         echo "</td>";
                                     echo "</tr>";
                                 
                                 }
                                 echo "</tbody>";                            
                             echo "</table>";
                             // Free result set
                             mysqli_free_result($result);
                         } else{
                             echo "<p class='lead'><em>No records were found.</em></p>";
                         }
                     
                     } else{
                         echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                     }
                     ?>
                     <?php
                     
                     $sql = "SELECT SUM(`SOFLEX NT 3001 PRIMER LIGHT GRAY`) as `SOFLEX NT 3001 PRIMER LIGHT GRAY`,SUM(`SOFLEX NT BASE THINNER 15Kg`) as `SOFLEX NT BASE THINNER 15Kg`,SUM(`SOFLEX NT NO.AY4 RED M 3.6 KG.`) as `SOFLEX NT NO.AY4 RED M 3.6 KG.`,SUM(`SOFLEX NT CLEAR 8 KG`) as `SOFLEX NT CLEAR 8 KG` ,SUM(`SOFLEX NT HARDENER 0.8 KG`) as `SOFLEX NT HARDENER 0.8 KG`,SUM(`SOFLEX NT PRIMER THINNER`) as `SOFLEX NT PRIMER THINNER`,SUM(`SOFLEX NT CLEAR THINNER`) as`SOFLEX NT CLEAR THINNER` ,paintformplanning.Model,paintformplanning.Sub_Model,paintformplanning.Mat_Required
                     FROM `nismo_kbhbumper_ay4mudguard`
                     INNER JOIN paintformplanning ON paintformplanning.Sub_Model = nismo_kbhbumper_ay4mudguard.Sub_Model;";
                     if($result = mysqli_query($link, $sql)){
                        
                         if(mysqli_num_rows($result) > 0){
                             
                             echo "<a href='UpdateResin.php?id=' title='Add more' data-toggle='tooltip'><button type='button' class='btn btn-info'>Nismo : AY4 (Bumper) & AY4 Mudguard</button></a>";
                             echo "<table class='table table-bordered table-striped' >";
                                 echo "<thead>";
                                     echo "<tr >";
                                        
                                         
                                         echo "<th><font  size='1pt'>SOFLEX NT 3001 PRIMER LIGHT GRAY</th>";
                                         echo "<th><font  size='1pt'>SOFLEX NT BASE THINNER 15Kg</th>";
                                         echo "<th><font  size='1pt'>SOFLEX NT NO.AY4 RED M 3.6 KG.</th>";
                                         echo "<th><font  size='1pt'>SOFLEX NT CLEAR 8 KG</th>";
                                         echo "<th><font  size='1pt'>SOFLEX NT HARDENER 0.8 KG</th>";
                                         echo "<th><font  size='1pt'>SOFLEX NT PRIMER THINNER</th>";
                                         echo "<th><font  size='1pt'>SOFLEX NT CLEAR THINNER</th>";
                                        
                                         
                                     echo "</tr>";
                                 echo "</thead>";
                                 echo "<tbody>";
                                 while($row = mysqli_fetch_array($result)){
                                         $row['SOFLEX NT 3001 PRIMER LIGHT GRAY'] =ceil( $row['Mat_Required']*$row['SOFLEX NT 3001 PRIMER LIGHT GRAY']);
                                         $row['SOFLEX NT BASE THINNER 15Kg'] =ceil( $row['Mat_Required']*$row['SOFLEX NT BASE THINNER 15Kg']);
                                         $row['SOFLEX NT NO.AY4 RED M 3.6 KG.'] =ceil( $row['Mat_Required']*$row['SOFLEX NT NO.AY4 RED M 3.6 KG.']);
                                       
                                         $row['SOFLEX NT CLEAR 8 KG'] = ceil($row['Mat_Required']*$row['SOFLEX NT CLEAR 8 KG']);
                                         $row['SOFLEX NT HARDENER 0.8 KG'] = ceil($row['Mat_Required']*$row['SOFLEX NT HARDENER 0.8 KG']);
                                         $row['SOFLEX NT PRIMER THINNER'] = ceil($row['Mat_Required']*$row['SOFLEX NT PRIMER THINNER']);
                                         $row['SOFLEX NT CLEAR THINNER'] = ceil($row['Mat_Required']*$row['SOFLEX NT CLEAR THINNER']);
                                     echo "<tr>";
                                         
                                         
                                         echo "<td><font  size='3pt'>" . $row['SOFLEX NT 3001 PRIMER LIGHT GRAY'] . "</td>";
                                         echo "<td><font  size='3pt'>" . $row['SOFLEX NT BASE THINNER 15Kg'] . "</td>";
                                         echo "<td><font  size='3pt'>" . $row['SOFLEX NT NO.AY4 RED M 3.6 KG.'] . "</td>";
                                         echo "<td><font  size='3pt'>" . $row['SOFLEX NT CLEAR 8 KG'] . "</td>";
                                         echo "<td><font  size='3pt'>" . $row['SOFLEX NT HARDENER 0.8 KG'] . "</td>";
                                         echo "<td><font  size='3pt'>" . $row['SOFLEX NT PRIMER THINNER'] . "</td>";
                                         echo "<td><font  size='3pt'>" . $row['SOFLEX NT CLEAR THINNER'] . "</td>";
 
                                         echo "</td>";
                                     echo "</tr>";
                                 
                                 }
                                 echo "</tbody>";                            
                             echo "</table>";
                             // Free result set
                             mysqli_free_result($result);
                         } else{
                             echo "<p class='lead'><em>No records were found.</em></p>";
                         }
                     
                     } else{
                         echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                     }
                     ?>
                     <?php
                     
                     $sql = "SELECT SUM(`RM-AU-PNT-NT-PRI-3001`) as `RM-AU-PNT-NT-PRI-3001`,SUM(`RM-AU-PNT-NT-00-297-545`) as `RM-AU-PNT-NT-00-297-545`,SUM(`RM-AU-PNT-NT-55-608-571-KBH`) as `RM-AU-PNT-NT-55-608-571-KBH`,SUM(`RM-AU-PNT-NT-BASE-THINNER`) as `RM-AU-PNT-NT-BASE-THINNER`,SUM(`RM-AU-PNT-NT-CLEAR`) as`RM-AU-PNT-NT-CLEAR` ,SUM(`RM-AU-PNT-NT-HARDENER`) as `RM-AU-PNT-NT-HARDENER`,SUM(`RM-AU-PNT-NT-00-297-547`) as `RM-AU-PNT-NT-00-297-547`,paintformplanning.Model,paintformplanning.Sub_Model,paintformplanning.Mat_Required
                     FROM `nismo_kbhbumper_kbhmudguard`
                     INNER JOIN paintformplanning ON paintformplanning.Sub_Model = paintformplanning.Sub_Model;";
                     if($result = mysqli_query($link, $sql)){
                        
                         if(mysqli_num_rows($result) > 0){
                             
                             echo "<a href='UpdateResin.php?id=' title='Add more' data-toggle='tooltip'><button type='button' class='btn btn-info'>Nismo : KBH (Bumper) & KBH (Mudguard)</button></a>";
                             echo "<table class='table table-bordered table-striped' >";
                                 echo "<thead>";
                                     echo "<tr >";
                                        
                                         
                                         echo "<th><font  size='1pt'>RM-AU-PNT-NT-PRI-3001</th>";
                                         echo "<th><font  size='1pt'>RM-AU-PNT-NT-00-297-545</th>";
                                         echo "<th><font  size='1pt'>RM-AU-PNT-NT-55-608-571-KBH</th>";
                                         echo "<th><font  size='1pt'>RM-AU-PNT-NT-BASE-THINNER</th>";
                                         echo "<th><font  size='1pt'>RM-AU-PNT-NT-CLEAR</th>";
                                         echo "<th><font  size='1pt'>RM-AU-PNT-NT-HARDENER</th>";
                                         echo "<th><font  size='1pt'>RM-AU-PNT-NT-00-297-547</th>";
                                        
                                         
                                     echo "</tr>";
                                 echo "</thead>";
                                 echo "<tbody>";
                                 while($row = mysqli_fetch_array($result)){
                                         $row['RM-AU-PNT-NT-PRI-3001'] =ceil( $row['Mat_Required']*$row['RM-AU-PNT-NT-PRI-3001']);
                                         $row['RM-AU-PNT-NT-00-297-545'] =ceil( $row['Mat_Required']*$row['RM-AU-PNT-NT-00-297-545']);
                                         $row['RM-AU-PNT-NT-55-608-571-KBH'] =ceil( $row['Mat_Required']*$row['RM-AU-PNT-NT-55-608-571-KBH']);
                                       
                                         $row['RM-AU-PNT-NT-BASE-THINNER'] = ceil($row['Mat_Required']*$row['RM-AU-PNT-NT-BASE-THINNER']);
                                         $row['RM-AU-PNT-NT-CLEAR'] = ceil($row['Mat_Required']*$row['RM-AU-PNT-NT-CLEAR']);
                                         $row['RM-AU-PNT-NT-HARDENER'] = ceil($row['Mat_Required']*$row['RM-AU-PNT-NT-HARDENER']);
                                         $row['RM-AU-PNT-NT-00-297-547'] = ceil($row['Mat_Required']*$row['RM-AU-PNT-NT-00-297-547']);
                                     echo "<tr>";
                                         
                                         
                                         echo "<td><font  size='3pt'>" . $row['RM-AU-PNT-NT-PRI-3001'] . "</td>";
                                         echo "<td><font  size='3pt'>" . $row['RM-AU-PNT-NT-00-297-545'] . "</td>";
                                         echo "<td><font  size='3pt'>" . $row['RM-AU-PNT-NT-55-608-571-KBH'] . "</td>";
                                         echo "<td><font  size='3pt'>" . $row['RM-AU-PNT-NT-BASE-THINNER'] . "</td>";
                                         echo "<td><font  size='3pt'>" . $row['RM-AU-PNT-NT-CLEAR'] . "</td>";
                                         echo "<td><font  size='3pt'>" . $row['RM-AU-PNT-NT-HARDENER'] . "</td>";
                                         echo "<td><font  size='3pt'>" . $row['RM-AU-PNT-NT-00-297-547'] . "</td>";
 
                                         echo "</td>";
                                     echo "</tr>";
                                 
                                 }
                                 echo "</tbody>";                            
                             echo "</table>";
                             // Free result set
                             mysqli_free_result($result);
                         } else{
                             echo "<p class='lead'><em>No records were found.</em></p>";
                         }
                     
                     } else{
                         echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                     }
                     ?>
                     <?php
                     
                     $sql = "SELECT SUM(`RB-170 CD (KAI) GRAY PRIMER-L (16/KG)`) as `RB-170 CD (KAI) GRAY PRIMER-L (16/KG)`,SUM(`R-303 Brilliant Black(A3F) TSAC 16KG`) as `R-303 Brilliant Black(A3F) TSAC 16KG`,SUM(`R-261-301 Clear 16Kg`) as `R-261-301 Clear 16Kg`,SUM(`T-522 Thinner FS 15Kg`) as `T-522 Thinner FS 15Kg`,SUM(`T-506 YK THINNER 15 KG`) as `T-506 YK THINNER 15 KG`,SUM(`T-527T Thinner Clear 15Kg`) as `T-527T Thinner Clear 15Kg`,SUM(`R-271 Hardener 3Kg`) as `R-271 Hardener 3Kg`,paintformplanning.Model,paintformplanning.Sub_Model,paintformplanning.Mat_Required
                     FROM paintformplanning
                     INNER JOIN nismo_j03a_spoiler_endpiece ON paintformplanning.Sub_Model = nismo_j03a_spoiler_endpiece.Sub_Model;";
                     if($result = mysqli_query($link, $sql)){
                        
                         if(mysqli_num_rows($result) > 0){
                             
                             echo "<a href='UpdateResin.php?id=' title='Add more' data-toggle='tooltip'><button type='button' class='btn btn-info'>Nismo : J03A Spoiler & J03A End Piece</button></a>";
                             echo "<table class='table table-bordered table-striped' >";
                                 echo "<thead>";
                                     echo "<tr >";
                                        
                                         
                                         echo "<th><font  size='1pt'>RB-170 CD (KAI) GRAY PRIMER-L (16/KG)</th>";
                                         echo "<th><font  size='1pt'>R-303 Brilliant Black(A3F) TSAC 16KG</th>";
                                         echo "<th><font  size='1pt'>R-261-301 Clear 16Kg</th>";
                                         echo "<th><font  size='1pt'>T-522 Thinner FS 15Kg</th>";
                                         echo "<th><font  size='1pt'>T-506 YK THINNER 15 KG</th>";
                                         echo "<th><font  size='1pt'>T-527T Thinner Clear 15Kg</th>";
                                         echo "<th><font  size='1pt'>R-271 Hardener 3Kg</th>";
                                        
                                         
                                     echo "</tr>";
                                 echo "</thead>";
                                 echo "<tbody>";
                                 while($row = mysqli_fetch_array($result)){
                                         $row['RB-170 CD (KAI) GRAY PRIMER-L (16/KG)'] =ceil( $row['Mat_Required']*$row['RB-170 CD (KAI) GRAY PRIMER-L (16/KG)']);
                                         $row['R-303 Brilliant Black(A3F) TSAC 16KG'] =ceil( $row['Mat_Required']*$row['R-303 Brilliant Black(A3F) TSAC 16KG']);
                                         $row['R-261-301 Clear 16Kg'] =ceil( $row['Mat_Required']*$row['R-261-301 Clear 16Kg']);
                                       
                                         $row['T-522 Thinner FS 15Kg'] = ceil($row['Mat_Required']*$row['T-522 Thinner FS 15Kg']);
                                         $row['T-506 YK THINNER 15 KG'] = ceil($row['Mat_Required']*$row['T-506 YK THINNER 15 KG']);
                                         $row['T-527T Thinner Clear 15Kg'] = ceil($row['Mat_Required']*$row['T-527T Thinner Clear 15Kg']);
                                         $row['R-271 Hardener 3Kg'] = ceil($row['Mat_Required']*$row['R-271 Hardener 3Kg']);
                                     echo "<tr>";
                                         
                                         
                                         echo "<td><font  size='3pt'>" . $row['RB-170 CD (KAI) GRAY PRIMER-L (16/KG)'] . "</td>";
                                         echo "<td><font  size='3pt'>" . $row['R-303 Brilliant Black(A3F) TSAC 16KG'] . "</td>";
                                         echo "<td><font  size='3pt'>" . $row['R-261-301 Clear 16Kg'] . "</td>";
                                         echo "<td><font  size='3pt'>" . $row['T-522 Thinner FS 15Kg'] . "</td>";
                                         echo "<td><font  size='3pt'>" . $row['T-506 YK THINNER 15 KG'] . "</td>";
                                         echo "<td><font  size='3pt'>" . $row['T-527T Thinner Clear 15Kg'] . "</td>";
                                         echo "<td><font  size='3pt'>" . $row['R-271 Hardener 3Kg'] . "</td>";
 
                                         echo "</td>";
                                     echo "</tr>";
                                 
                                 }
                                 echo "</tbody>";                            
                             echo "</table>";
                             // Free result set
                             mysqli_free_result($result);
                         } else{
                             echo "<p class='lead'><em>No records were found.</em></p>";
                         }
                     
                     } else{
                         echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                     }
                     ?>
                     <?php
                     
                     $sql = "SELECT SUM(`R-303 NO. (U25) SILVER`) as `R-303 NO. (U25) SILVER`,SUM(`R-303 NO.AC11169 SILVER  VTC`) as `R-303 NO.AC11169 SILVER  VTC`,SUM(`R-160 HS NO.CMX10037 BLACK(P)`) as `R-160 HS NO.CMX10037 BLACK(P)`,SUM(`R-160 HS NO.U17`) as `R-160 HS NO.U17`,SUM(`R-359 CD L-40 PRIMER-L`) as `R-359 CD L-40 PRIMER-L`,SUM(`R-261-301 CLEAR`) as `R-261-301 CLEAR`,SUM(`R-271 HARDENER`) as `R-271 HARDENER`,SUM(`T-506 YK THINNER`) as `T-506 YK THINNER`,SUM(`T-522 THINNER BASE`) as `T-522 THINNER BASE`,SUM(`T-527T THINNER CLEAR`) as `T-527T THINNER CLEAR`,SUM(`RB-170 CD  GRAY PRIMER-L`) as `RB-170 CD  GRAY PRIMER-L`,SUM(`T-508 CD THINNER`) as `T-508 CD THINNER`,SUM(`Thinner AAA`) as `Thinner AAA`,SUM(`WASHING THINNER`) as `WASHING THINNER`,SUM(`Thinner #6000  FB385YA`) as `Thinner #6000  FB385YA`,SUM(`Gray Primer  131SR`) as `Gray Primer  131SR`,paintformplanning.Mat_Required,paintformplanning.Model,paintformplanning.Sub_Model
                     FROM othermodel_paint
                     INNER JOIN paintformplanning ON paintformplanning.Sub_Model = othermodel_paint.Sub_Model;";
                     if($result = mysqli_query($link, $sql)){
                        
                         if(mysqli_num_rows($result) > 0){
                             
                             echo "<a href='UpdateResin.php?id=' title='Add more' data-toggle='tooltip'><button type='button' class='btn btn-info'>Flare</button></a>";
                             echo "<table class='table table-bordered table-striped' >";
                                 echo "<thead>";
                                     echo "<tr >";
                                        
                                         
                                         echo "<th><font  size='1pt'>R-303 NO. (U25) SILVER</th>";
                                         echo "<th><font  size='1pt'>R-303 NO.AC11169 SILVER  VTC</th>";
                                         echo "<th><font  size='1pt'>R-160 HS NO.CMX10037 BLACK(P)</th>";
                                         echo "<th><font  size='1pt'>R-160 HS NO.U17</th>";
                                         echo "<th><font  size='1pt'>R-359 CD L-40 PRIMER-L</th>";
                                         echo "<th><font  size='1pt'>R-261-301 CLEAR</th>";
                                         echo "<th><font  size='1pt'>R-271 HARDENER</th>";
                                         echo "<th><font  size='1pt'>T-506 YK THINNER</th>";
                                         echo "<th><font  size='1pt'>T-522 THINNER BASE</th>";
                                         echo "<th><font  size='1pt'>T-527T THINNER CLEAR</th>";
                                         echo "<th><font  size='1pt'>RB-170 CD  GRAY PRIMER-L</th>";
                                         echo "<th><font  size='1pt'>T-508 CD THINNER</th>";
                                         echo "<th><font  size='1pt'>Thinner AAA</th>";
                                         echo "<th><font  size='1pt'>WASHING THINNER</th>";
                                         echo "<th><font  size='1pt'>Thinner #6000  FB385YAR</th>";
                                         echo "<th><font  size='1pt'>Gray Primer  131SR</th>";
                                         
                                     echo "</tr>";
                                 echo "</thead>";
                                 echo "<tbody>";
                                 while($row = mysqli_fetch_array($result)){
                                         $row['R-303 NO. (U25) SILVER'] =ceil( $row['Mat_Required']*$row['R-303 NO. (U25) SILVER']);
                                         $row['R-303 NO.AC11169 SILVER  VTC'] =ceil( $row['Mat_Required']*$row['R-303 NO.AC11169 SILVER  VTC']);
                                         $row['R-160 HS NO.CMX10037 BLACK(P)'] =ceil( $row['Mat_Required']*$row['R-160 HS NO.CMX10037 BLACK(P)']);
                                       
                                         $row['R-160 HS NO.U17'] = ceil($row['Mat_Required']*$row['R-160 HS NO.U17']);
                                         $row['R-359 CD L-40 PRIMER-L'] = ceil($row['Mat_Required']*$row['R-359 CD L-40 PRIMER-L']);
                                         $row['R-261-301 CLEAR'] = ceil($row['Mat_Required']*$row['R-261-301 CLEAR']);
                                         $row['R-271 HARDENER'] = ceil($row['Mat_Required']*$row['R-271 HARDENER']);
                                         $row['T-506 YK THINNER'] = ceil($row['Mat_Required']*$row['T-506 YK THINNER']);
                                         $row['T-522 THINNER BASE'] = ceil($row['Mat_Required']*$row['T-522 THINNER BASE']);
                                         $row['T-527T THINNER CLEAR'] = ceil($row['Mat_Required']*$row['T-527T THINNER CLEAR']);
                                         $row['RB-170 CD  GRAY PRIMER-L'] = ceil($row['Mat_Required']*$row['RB-170 CD  GRAY PRIMER-L']);
                                         $row['T-508 CD THINNER'] = ceil($row['Mat_Required']*$row['T-508 CD THINNER']);
                                         $row['Thinner AAA'] = ceil($row['Mat_Required']*$row['Thinner AAA']);
                                         $row['WASHING THINNER'] = ceil($row['Mat_Required']*$row['WASHING THINNER']);
                                         $row['Thinner #6000  FB385YA'] = ceil($row['Mat_Required']*$row['Thinner #6000  FB385YA']);
                                         $row['Gray Primer  131SR'] = ceil($row['Mat_Required']*$row['Gray Primer  131SR']);
                                     echo "<tr>";
                                         
                                         
                                         echo "<td><font  size='3pt'>" . $row['R-303 NO. (U25) SILVER'] . "</td>";
                                         echo "<td><font  size='3pt'>" . $row['R-303 NO.AC11169 SILVER  VTC'] . "</td>";
                                         echo "<td><font  size='3pt'>" . $row['R-160 HS NO.CMX10037 BLACK(P)'] . "</td>";
                                         echo "<td><font  size='3pt'>" . $row['R-160 HS NO.U17'] . "</td>";
                                         echo "<td><font  size='3pt'>" . $row['R-359 CD L-40 PRIMER-L'] . "</td>";
                                         echo "<td><font  size='3pt'>" . $row['R-261-301 CLEAR'] . "</td>";
                                         echo "<td><font  size='3pt'>" . $row['R-271 HARDENER'] . "</td>";
                                         echo "<td><font  size='3pt'>" . $row['T-506 YK THINNER'] . "</td>";
                                         echo "<td><font  size='3pt'>" . $row['T-522 THINNER BASE'] . "</td>";
                                         echo "<td><font  size='3pt'>" . $row['T-527T THINNER CLEAR'] . "</td>";
                                         echo "<td><font  size='3pt'>" . $row['RB-170 CD  GRAY PRIMER-L'] . "</td>";
                                         echo "<td><font  size='3pt'>" . $row['T-508 CD THINNER'] . "</td>";
                                         echo "<td><font  size='3pt'>" . $row['Thinner AAA'] . "</td>";
                                         echo "<td><font  size='3pt'>" . $row['WASHING THINNER'] . "</td>";
                                         echo "<td><font  size='3pt'>" . $row['Thinner #6000  FB385YA'] . "</td>";
                                         echo "<td><font  size='3pt'>" . $row['Gray Primer  131SR'] . "</td>";

 
                                         echo "</td>";
                                     echo "</tr>";
                                 
                                 }
                                 echo "</tbody>";                            
                             echo "</table>";
                             // Free result set
                             mysqli_free_result($result);
                         } else{
                             echo "<p class='lead'><em>No records were found.</em></p>";
                         }
                     
                     } else{
                         echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                     }
                     ?>
                     <?php
                     
                     $sql = "SELECT SUM(`RB-116 CD L-50 PRIMER-T 16KG`) as `RB-116 CD L-50 PRIMER-T 16KG`, SUM(`R-301 NH-883P C/B PAS8 BASE 16KG`) as `R-301 NH-883P C/B PAS8 BASE 16KG`,SUM(`R-301 NH-883P M/B PAS8 BASE 16KG`) as `R-301 NH-883P M/B PAS8 BASE 16KG`,SUM(`R-290 CLEAR-TH 16KG`) as `R-290 CLEAR-TH 16KG`,SUM(`T-506 YK THINNER 15 KG`) as `T-506 YK THINNER 15 KG`,SUM(`T-522 Thinner FS 15Kg`) as `T-522 Thinner FS 15Kg`,SUM(`T-527T Thinner Clear 15Kg`) as `T-527T Thinner Clear 15Kg`,SUM(`R-271 Hardener 3Kg`) as `R-271 Hardener 3Kg`,SUM(`R-301 NH-578 PAS8 BASE 16KG`) as `R-301 NH-578 PAS8 BASE 16KG`,SUM(`R-301 NH-731P PAS8 BASE 16KG`) as `R-301 NH-731P PAS8 BASE 16KG`,SUM(`R-301 NH-547 TSAC BASE 16KG`) as `R-301 NH-547 TSAC BASE 16KG`,paintformplanning.Model,paintformplanning.Sub_Model,paintformplanning.Mat_Required
                     FROM tone
                     INNER JOIN paintformplanning ON paintformplanning.Model =tone.Model where paintformplanning.Sub_Model =tone.Sub_Model;";
                     if($result = mysqli_query($link, $sql)){
                        
                         if(mysqli_num_rows($result) > 0){
                             
                             echo "<a href='UpdateResin.php?id=' title='Add more' data-toggle='tooltip'><button type='button' class='btn btn-info'>883(2Tone) 578(2Tone) 731 883(547) 578(547)</button></a>";
                             echo "<table class='table table-bordered table-striped' >";
                                 echo "<thead>";
                                     echo "<tr >";
                                        
                                         
                                         echo "<th><font  size='1pt'>RB-116 CD L-50 PRIMER-T 16KG</th>";
                                         echo "<th><font  size='1pt'>R-301 NH-883P C/B PAS8 BASE 16KG</th>";
                                         echo "<th><font  size='1pt'>R-301 NH-883P M/B PAS8 BASE 16KG</th>";
                                         echo "<th><font  size='1pt'>R-290 CLEAR-TH 16KG</th>";
                                         echo "<th><font  size='1pt'>T-506 YK THINNER 15 KG</th>";
                                         echo "<th><font  size='1pt'>T-522 Thinner FS 15Kg</th>";
                                         echo "<th><font  size='1pt'>T-527T Thinner Clear 15Kg</th>";
                                         echo "<th><font  size='1pt'>R-271 Hardener 3Kg</th>";
                                         echo "<th><font  size='1pt'>R-301 NH-578 PAS8 BASE 16KG</th>";
                                         echo "<th><font  size='1pt'>R-301 NH-731P PAS8 BASE 16KG</th>";
                                         echo "<th><font  size='1pt'>R-301 NH-547 TSAC BASE 16KG</th>";
                                       
                                         
                                     echo "</tr>";
                                 echo "</thead>";
                                 echo "<tbody>";
                                 while($row = mysqli_fetch_array($result)){
                                         $row['RB-116 CD L-50 PRIMER-T 16KG'] =ceil( $row['Mat_Required']*$row['RB-116 CD L-50 PRIMER-T 16KG']);
                                         $row['R-301 NH-883P C/B PAS8 BASE 16KG'] =ceil( $row['Mat_Required']*$row['R-301 NH-883P C/B PAS8 BASE 16KG']);
                                         $row['R-301 NH-883P M/B PAS8 BASE 16KG'] =ceil( $row['Mat_Required']*$row['R-301 NH-883P M/B PAS8 BASE 16KG']);
                                       
                                         $row['R-290 CLEAR-TH 16KG'] = ceil($row['Mat_Required']*$row['R-290 CLEAR-TH 16KG']);
                                         $row['T-506 YK THINNER 15 KG'] = ceil($row['Mat_Required']*$row['T-506 YK THINNER 15 KG']);
                                         $row['T-522 Thinner FS 15Kg'] = ceil($row['Mat_Required']*$row['T-522 Thinner FS 15Kg']);
                                         $row['T-527T Thinner Clear 15Kg'] = ceil($row['Mat_Required']*$row['T-527T Thinner Clear 15Kg']);

                                         $row['R-271 Hardener 3Kg'] = ceil($row['Mat_Required']*$row['R-271 Hardener 3Kg']);
                                         $row['R-301 NH-578 PAS8 BASE 16KG'] = ceil($row['Mat_Required']*$row['R-301 NH-578 PAS8 BASE 16KG']);
                                         $row['R-301 NH-731P PAS8 BASE 16KG'] = ceil($row['Mat_Required']*$row['R-301 NH-731P PAS8 BASE 16KG']);
                                         $row['R-301 NH-547 TSAC BASE 16KG'] = ceil($row['Mat_Required']*$row['R-301 NH-547 TSAC BASE 16KG']);
                                         
                                     echo "<tr>";
                                         
                                         
                                         echo "<td><font  size='3pt'>" . $row['RB-116 CD L-50 PRIMER-T 16KG'] . "</td>";
                                         echo "<td><font  size='3pt'>" . $row['R-301 NH-883P C/B PAS8 BASE 16KG'] . "</td>";
                                         echo "<td><font  size='3pt'>" . $row['R-301 NH-883P M/B PAS8 BASE 16KG'] . "</td>";
                                         echo "<td><font  size='3pt'>" . $row['R-290 CLEAR-TH 16KG'] . "</td>";

                                         echo "<td><font  size='3pt'>" . $row['T-506 YK THINNER 15 KG'] . "</td>";
                                         echo "<td><font  size='3pt'>" . $row['T-522 Thinner FS 15Kg'] . "</td>";
                                         echo "<td><font  size='3pt'>" . $row['T-527T Thinner Clear 15Kg'] . "</td>";

                                         echo "<td><font  size='3pt'>" . $row['R-271 Hardener 3Kg'] . "</td>";
                                         echo "<td><font  size='3pt'>" . $row['R-301 NH-578 PAS8 BASE 16KG'] . "</td>";
                                         echo "<td><font  size='3pt'>" . $row['R-301 NH-731P PAS8 BASE 16KG'] . "</td>";
                                         echo "<td><font  size='3pt'>" . $row['R-301 NH-547 TSAC BASE 16KG'] . "</td>";
                                         

 
                                         echo "</td>";
                                     echo "</tr>";
                                 
                                 }
                                 echo "</tbody>";                            
                             echo "</table>";
                             // Free result set
                             mysqli_free_result($result);
                         } else{
                             echo "<p class='lead'><em>No records were found.</em></p>";
                         }
                     
                     } else{
                         echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                     }
                     ?>
                </div>
                <!-- ***** Pricing Item End ***** -->
            </div>
        </div>
    </section>
    <!-- ***** Pricing Plans End ***** -->

    <!-- ***** Counter Parallax Start ***** -->
   
    <!-- ***** Counter Parallax End ***** -->   

    <!-- ***** Blog Start ***** -->

    <!-- ***** Contact Us End ***** -->
    
    <!-- ***** Footer Start ***** -->
   
    
    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script> 
    
    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>

  </body>
  <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $('.search-box input[type="text"]').on("keyup input", function(){
        /* Get input value on change */
        var inputVal = $(this).val();
        var resultDropdown = $(this).siblings(".result");
        if(inputVal.length){
            $.get("backend-search.php", {term: inputVal}).done(function(data){
                // Display the returned data in browser
                resultDropdown.html(data);
            });
        } else{
            resultDropdown.empty();
        }
    });
    
    // Set search input value on click of result item
    $(document).on("click", ".result p", function(){
        $(this).parents(".search-box").find('input[type="text"]').val($(this).text());
        $(this).parent(".result").empty();
    });
});
</script>
<script type="text/javascript">
$(document).ready(function(){
    $('.search-box-component input[type="text"]').on("keyup input", function(){
        /* Get input value on change */
        var inputVal = $(this).val();
        var resultDropdown = $(this).siblings(".result_1");
        if(inputVal.length){
            $.get("backend-search-component.php", {term: inputVal}).done(function(data){
                // Display the returned data in browser
                resultDropdown.html(data);
            });
        } else{
            resultDropdown.empty();
        }
    });
    
    // Set search input value on click of result item
    $(document).on("click", ".result_1 p", function(){
        $(this).parents(".search-box-component").find('input[type="text"]').val($(this).text());
        $(this).parent(".result_1").empty();
    });
});
</script>
  <script src="//code.jquery.com/jquery-1.9.1.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
    <script type="text/javascript">
      var ctx = document.getElementById("chartjs_line").getContext('2d');
                var myChart = new Chart(ctx, {
                    type: 'line',
                    data: {
                        labels:<?php echo json_encode($month); ?>,
                        datasets: [{
                            backgroundColor: [
                               "#5969ff",
                                "#ff407b",
                                "#25d5f2",
                                "#ffc750",
                                "#2ec551",
                                "#7040fa",
                                "#ff004e"
                            ],
                            data:<?php echo json_encode($sales); ?>,
                        }]
                    },
                    options: {
                           legend: {
                        display: true,
                        position: 'bottom',
 
                        labels: {
                            fontColor: '#71748d',
                            fontFamily: 'Circular Std Book',
                            fontSize: 14,
                        }
                    },
 
 
                }
                });
                var ctx = document.getElementById("chartjs_line1").getContext('2d');
                var myChart = new Chart(ctx, {
                    type: 'line',
                    data: {
                        labels:<?php echo json_encode($month1); ?>,
                        datasets: [{
                            backgroundColor: [
                               "#5969ff",
                                "#ff407b",
                                "#25d5f2",
                                "#ffc750",
                                "#2ec551",
                                "#7040fa",
                                "#ff004e"
                            ],
                            data:<?php echo json_encode($sale); ?>,
                        }]
                    },
                    options: {
                           legend: {
                        display: true,
                        position: 'bottom',
 
                        labels: {
                            fontColor: '#71748d',
                            fontFamily: 'Circular Std Book',
                            fontSize: 14,
                        }
                    },
 
 
                }
                });
                var ctx = document.getElementById("chartjs_line2").getContext('2d');
                var myChart = new Chart(ctx, {
                    type: 'line',
                    data: {
                        labels:<?php echo json_encode($month2); ?>,
                        datasets: [{
                            backgroundColor: [
                               "#5969ff",
                                "#ff407b",
                                "#25d5f2",
                                "#ffc750",
                                "#2ec551",
                                "#7040fa",
                                "#ff004e"
                            ],
                            data:<?php echo json_encode($sale2); ?>,
                        }]
                    },
                    options: {
                           legend: {
                        display: true,
                        position: 'bottom',
 
                        labels: {
                            fontColor: '#71748d',
                            fontFamily: 'Circular Std Book',
                            fontSize: 14,
                        }
                    },
 
 
                }
                });
                var ctx = document.getElementById("chartjs_line3").getContext('2d');
                var myChart = new Chart(ctx, {
                    type: 'line',
                    data: {
                        labels:<?php echo json_encode($month3); ?>,
                        datasets: [{
                            backgroundColor: [
                               "#5969ff",
                                "#ff407b",
                                "#25d5f2",
                                "#ffc750",
                                "#2ec551",
                                "#7040fa",
                                "#ff004e"
                            ],
                            data:<?php echo json_encode($sale3); ?>,
                        }]
                    },
                    options: {
                           legend: {
                        display: true,
                        position: 'bottom',
 
                        labels: {
                            fontColor: '#71748d',
                            fontFamily: 'Circular Std Book',
                            fontSize: 14,
                        }
                    },
 
 
                }
                });
                var ctx = document.getElementById("chartjs_line4").getContext('2d');
                var myChart = new Chart(ctx, {
                    type: 'line',
                    data: {
                        labels:<?php echo json_encode($month4); ?>,
                        datasets: [{
                            backgroundColor: [
                               "#5969ff",
                                "#ff407b",
                                "#25d5f2",
                                "#ffc750",
                                "#2ec551",
                                "#7040fa",
                                "#ff004e"
                            ],
                            data:<?php echo json_encode($sale4); ?>,
                        }]
                    },
                    options: {
                           legend: {
                        display: true,
                        position: 'bottom',
 
                        labels: {
                            fontColor: '#71748d',
                            fontFamily: 'Circular Std Book',
                            fontSize: 14,
                        }
                    },
 
 
                }
                });
                var ctx = document.getElementById("chartjs_line5").getContext('2d');
                var myChart = new Chart(ctx, {
                    type: 'line',
                    data: {
                        labels:<?php echo json_encode($month5); ?>,
                        datasets: [{
                            backgroundColor: [
                               "#5969ff",
                                "#ff407b",
                                "#25d5f2",
                                "#ffc750",
                                "#2ec551",
                                "#7040fa",
                                "#ff004e"
                            ],
                            data:<?php echo json_encode($sale5); ?>,
                        }]
                    },
                    options: {
                           legend: {
                        display: true,
                        position: 'bottom',
 
                        labels: {
                            fontColor: '#71748d',
                            fontFamily: 'Circular Std Book',
                            fontSize: 14,
                        }
                    },
 
 
                }
                });
                var ctx = document.getElementById("chartjs_line6").getContext('2d');
                var myChart = new Chart(ctx, {
                    type: 'line',
                    data: {
                        labels:<?php echo json_encode($month6); ?>,
                        datasets: [{
                            backgroundColor: [
                               "#5969ff",
                                "#ff407b",
                                "#25d5f2",
                                "#ffc750",
                                "#2ec551",
                                "#7040fa",
                                "#ff004e"
                            ],
                            data:<?php echo json_encode($sale6); ?>,
                        }]
                    },
                    options: {
                           legend: {
                        display: true,
                        position: 'bottom',
 
                        labels: {
                            fontColor: '#71748d',
                            fontFamily: 'Circular Std Book',
                            fontSize: 14,
                        }
                    },
 
 
                }
                });
                var ctx = document.getElementById("chartjs_line7").getContext('2d');
                var myChart = new Chart(ctx, {
                    type: 'line',
                    data: {
                        labels:<?php echo json_encode($month7); ?>,
                        datasets: [{
                            backgroundColor: [
                               "#5969ff",
                                "#ff407b",
                                "#25d5f2",
                                "#ffc750",
                                "#2ec551",
                                "#7040fa",
                                "#ff004e"
                            ],
                            data:<?php echo json_encode($sale7); ?>,
                        }]
                    },
                    options: {
                           legend: {
                        display: true,
                        position: 'bottom',
 
                        labels: {
                            fontColor: '#71748d',
                            fontFamily: 'Circular Std Book',
                            fontSize: 14,
                        }
                    },
 
 
                }
                });
                
                
    </script>
</html>
