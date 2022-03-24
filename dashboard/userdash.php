<?php
session_start();
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Admin - Free Bulma template</title>
        <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> -->
        
        
        
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
        
    </head>
    <body>
        <style>
        body{
            background-image: linear-gradient(to right top, #d16ba5, #c777b9, #ba83ca, #aa8fd8, #9a9ae1, #8aa7ec, #79b3f4, #69bff8, #52cffe, #41dfff, #46eefa, #5ffbf1);background-image: linear-gradient(to right top, #d16ba5, #c777b9, #ba83ca, #aa8fd8, #9a9ae1, #8aa7ec, #79b3f4, #69bff8, #52cffe, #41dfff, #46eefa, #5ffbf1);
        
        /*background-image: linear-gradient(to right top, #020101, #040202, #050305, #060407, #05050a, #161a21, #1e2a36, #233c4b, #2e677b, #3496a8, #41c7d0, #5ffbf1);*/
        /*background-image: linear-gradient(to right top, #020101, #040202, #050305, #060407, #05050a, #161a21, #1e2a36, #233c4b, #2e677b, #3496a8, #41c7d0, #5ffbf1);*/
        /*background-image: linear-gradient(to right top, #051937, #171228, #190a1a, #12040d, #000000);*/
        /*background-image: linear-gradient(to left bottom, #18273f, #12233f, #0c1f3e, #051b3e, #00173d);*/
        /*height: 1170vh;*/
        }
        *{
        margin: 0;
        padding: 0;
        }


        .navbar{
            color: #011627;
        }
        </style>
        <!-- START NAV -->
        <nav class="navbar has-background-success-light" style="">
            <div class="container">
                <div class="navbar-brand">
                    <a class="navbar-item brand-text has-text-weight-semibold" href="../index.html">
                        Blog.com
                    </a>
                    <div class="navbar-burger burger" data-target="navMenu">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
                <div id="navMenu" class="navbar-menu">
                    <div class="navbar-start">
                        <a class="navbar-item" href="\blog.com/Database/notifications/notification.php">
                            Notifications
                        </a>
                        <a class="navbar-item" href="\blog.com/Database/sentmessage/send.php">
                            Sent Messages
                        </a>
                        <!--   <a class="navbar-item" href="admin.html">
                            Draft
                        </a>
                        -->
                        <a href="logout/logoutuser.php" class="button is-dark is-small mt-3 ml-6">
                            Logout
                        </a>
                        
                    </div>
                </div>
            </div>
        </nav>
        <!-- END NAV -->
        <div class="container">
            <div class="columns">
                <div class="column is-3 ">
                    
                </div>
            </div>
        </section>
        <div class="columns">
            <div class="column is-8">
                <div class="card events-card">
                    <header class="card-header"><?php
                        echo "<h2 class='title is-size-5 has-text-weight-semibold pl-6 pt-3 pb-4'>
                        username:
                        ".$_SESSION['username']."</h2>"
                    ?></header>
                    <header class="card-header"><?php
                        echo "<h2 class='title is-size-5 has-text-weight-semibold pl-6 pt-3 pb-4'>
                        Email:
                        ".$_SESSION['email']."</h2>"
                    ?></header>
                    <header class="card-header">
                        <p class="card-header-title pl-6">
                            ALL UPLOADS
                        </p>
                        <a href="#" class="card-header-icon" aria-label="more options">
                            <span class="icon">
                                <i class="fa fa-angle-down" aria-hidden="true"></i>
                            </span>
                        </a>
                    </header>
                    <div class="card-content">
                        <a href="\blog.com/dashboard/UploadSomething/uploadsomething.php" class="button is-success  mb-6 ml-5">
                            Upload Something  !!
                        </a>
                        <div>
                            <?php
                            include $_SERVER['DOCUMENT_ROOT'].'\blog.com/Database/connection/conn.php';
                            $sql_statement = "SELECT time,date,blogtitle,blogcontent,author from uploadblog where email = '".$_SESSION['email']."'  ";
                            $querybase = mysqli_query($conn,$sql_statement);
                            
                            while($row =   mysqli_fetch_assoc($querybase)){
                            $_SESSION['blogtitle'] = $row['blogtitle'];
                            $_SESSION['blogcontent'] = $row['blogcontent'];
                            $_SESSION['time'] = $row['time'];
                            $_SESSION['date'] = $row['date'];
                            $_SESSION['author'] = $row['author'];
                            // echo $_SESSION['blogtitle'];
                            echo "
                            <div class='has-text-weight-semibold '>
                                
                                <p class='pl-4'>Type:  Blog</p>
                                <div class='card-header'><div class='card-header-title'>Title: "   .$_SESSION['blogtitle'].  "  Wirte By ".$_SESSION['author']."</div></div>
                                <div class='card-content'>
                                    <p class='has-text-weight-semibold   pb-4'>Content</p>
                                    ".$_SESSION['blogcontent']."
                                    <div class='is-flex mt-5'>
                                        <p class='has-text-weight-semibold'>Date Uploaded:   " .$_SESSION['date']."</p>
                                        <p class='has-text-weight-semibold pl-6'>Time Uploaded:    " .$_SESSION['time']."</p>
                                    </div>
                                </div>
                            </div>
                            
                            ";
                            
                            }
                            ?>
                        </div>
                        <!--  -->
                        <h3 class="title is-size-4 pt-4 pl-5">Story Content</h3>
                        <div>
                            <?php
                            include $_SERVER['DOCUMENT_ROOT'].'\blog.com/Database/connection/conn.php';
                            $sql_statement = "SELECT time,date,storytitle,storycontent from uploadstory where email = '".$_SESSION['email']."'  ";
                            $querybase = mysqli_query($conn,$sql_statement);
                            
                            while($row =   mysqli_fetch_assoc($querybase)){
                            
                            $_SESSION['storycontent'] = $row['storycontent'];
                            $_SESSION['time'] = $row['time'];
                            $_SESSION['date'] = $row['date'];
                            $_SESSION['storytitle'] = $row['storytitle'];
                            
                            echo "
                            <div class='has-text-weight-semibold '>
                                
                                <p class='pl-4'>Type:  Story</p>
                                <div class='card-header  mt-3'><div class='card-header-title'>Title: "   .$_SESSION['storytitle'].  "  </div></div>
                                <div class='card-content'>
                                    <p class='has-text-weight-semibold   pb-4'>Content</p>
                                    ".$_SESSION['storycontent']."
                                    <div class='is-flex mt-5'>
                                    <hr class='has-background-black'>
                                        <p class='has-text-weight-semibold'> <br>

                                        Date Uploaded:   " .$_SESSION['date']."</p>
                                        <p class='has-text-weight-semibold pl-6 pt-5'>Time Uploaded:    " .$_SESSION['time']."</p>
                                    </div>
                                </div>
                            </div>
                            
                            ";
                            
                            }
                            ?>
                        </div>
                    </div>
                    
                    
                </div>
            </div>
            <div class="column is-5 mr-6">
              <!--   <div class="card">
                    <header class="card-header">
                        <p class="card-header-title mt-4">
                            Blog Search
                        </p>
                        <input type="submit" href="#" class=" button mt-4" value="Blog Search " aria-label="more options">
                        <span class="icon">
                            <i class="fa fa-angle-down" aria-hidden="true"></i>
                        </span>
                    </a>
                </header>
                <div class="card-content">
                    <div class="content">
                        <div class="control has-icons-left has-icons-right">
                            <input class="input is-normal" type="text" placeholder="">
                            <span class="icon is-medium is-left">
                                <i class="fa fa-search"></i>
                            </span>
                            <span class="icon is-medium is-right">
                                <i class="fa fa-check"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <header class="card-header">
                    <p class="card-header-title">
                        Story  Search
                    </p>
                    <input type="submit" href="#" class="button" value="Story Search " aria-label="more options">
                    <span class="icon">
                        <i class="fa fa-angle-down" aria-hidden="true"></i>
                    </span>
                </a>
            </header>
            <div class="card-content">
                <div class="content">
                    <div class="control has-icons-left has-icons-right">
                        <input class="input is-normal" type="text" placeholder="">
                        <span class="icon is-medium is-left">
                            <i class="fa fa-search"></i>
                        </span>
                        <span class="icon is-medium is-right">
                            <i class="fa fa-check"></i>
                        </span>
                    </div>
                </div>
            </div>
          
        </div> -->
            <form action="\blog.com/Database/message/messagesend.php" method="post">
                
                <div class="add"></div>
                <div class="card">
                    <div class="card-header">
                        <div class="card-header-title">Send Message </div>
                    </div>
                    <div  class="card-content  con">
                        <span class="shower"></span>
                        <textarea class="textarea mb-5 is-9-desktop note" rows="4" cols="4" id="textM"></textarea>
                        <label for="" class="has-text-weight-semibold">  Email </label>
                        <input type="text" id="sendM" class="input column is-9-desktop  is-primary email " placeholder="Email ">
                        <div class="spining mt-4"></div>
                        <div class="s"></div>
                        <button class="transfer-btn button is-primary mt-3 px-6 has-text-weight-bold" id="sender" type="submit">send</button>
                    </div>
                    
                </form>
                
            </div>
        </div>
    </div>
</div>
</div>
</div>
<script src="jquery-3.6.0.min.js"></script>
<script src="send.js"></script>
</body>
</html>