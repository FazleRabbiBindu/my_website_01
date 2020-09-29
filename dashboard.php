<html>
<head>
<title>Dashboard</title>
<link rel="stylesheet" href="styledashboard.css">
<link rel="stylesheet" href="styleprofile.css">
</head>
<body>

         <!-- dashboard head staets -->
    
    <header id="header">
        notification
    </header>
    
        <!-- dashboard head ends -->
        <!-- main dashboard starts -->
    <main id="main">
        <!-- dashboard option menu starts -->
        <div class="dashboard-option">
            <form action="" method="get">
                
                <div><input type="submit" name="details"  value="Profile"></div>
                <div><input type="submit" name="details"  value="Projects"   ></div>
                <div><input type="submit" name="details"  value="Tutorials"  ></div>
                <div><input type="submit" name="details"  value="Developers" ></div>
                <div><input type="submit" name="details"  value="Designers"  ></div>
                <div><input type="submit" name="details"  value="Chat"       ></div>

            </form>
        </div>
        <!-- dashboard option menu ends -->
        <!-- dashboard option menu details starts -->
        <div class="dashboard-details">
            <?php
            if(isset($_GET['details']))
            {
                if($_GET['details'] === 'Profile')
                {
                    include 'profile.html';
                }
                elseif($_GET['details'] === 'Projects')
                {
                    
                }
                elseif($_GET['details'] === 'Tutorials')
                {
                    
                }
                elseif($_GET['details'] === 'Developers')
                {
                    
                }
                elseif($_GET['details'] === 'Designers')
                {
                    
                }
                elseif($_GET['details'] === 'Chat')
                {
                    
                }
                else
                {
                    //invalid request
                }
            }
            else
            {
                echo "Dashboard details";
            }
            ?>
        </div>
        <!-- dashboard option menu details ends -->
    
    </main>
    <!-- main dashboard ends -->

    <!-- dashboard footer starts -->
    <footer id="footer">
        <div>
            copyright
        </div>

    </footer>
    <!-- dashboard footer ends -->

</body>

</html>