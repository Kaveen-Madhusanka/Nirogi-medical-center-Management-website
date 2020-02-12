<?php

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `appoiment` WHERE CONCAT(`nic`, `case`) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
    
}
 else {
    $query = "SELECT * FROM `appoiment`";
    $search_result = filterTable($query);
}

// function to connect and execute the query
function filterTable($query)
{
    $connect = mysqli_connect("localhost", "root", "", "medical");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}

?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/index.css">
        <title>view</title>
        <style>

            #but {

                position: absolute;
                padding: 10px 15px;
                border: 2px solid #000;
                background:#fff;
                text-transform: uppercase;
                text-decoration: none;
                letter-spacing: 2px;
                box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);

            }
            #but:hover {
                background-color: red;
            }



            input[type=text]{
                width:100%;
                border:2px solid #aaa;
                border-radius:4px;
                margin:8px 0;
                outline:none;
                padding:10px;
                box-sizing:border-box;
                transition:.3s;
              }

              input[type=text]:focus{
                border-color:dodgerBlue;
                box-shadow:0 0 8px 0 dodgerBlue;
              }

            
            table {
                  border-collapse: collapse;
                  margin: 25px 0;
                  font-size: 0.9em;
                  min-width: 400px;
                  border-radius: 5px 5px 0 0;
                  overflow: hidden;
                  box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
                  width: 100%;

            }
            

            table thead tr {
              background-color: #009879;
              color: #ffffff;
              text-align: left;
              font-weight: bold;
            }

            table th,
            table td {
                 padding: 12px 15px;
            }

            body tr {
              border-bottom: 1px solid #dddddd;
            }

            table tbody tr:last-of-type {
              border-bottom: 2px solid #009879;
            }

           







            form{
              background-color: white;
            }
        </style>
    </head>
    <body>
            
            <div class="all">
        <div class="topbar clearfix">
            <div class="topBarLinks">
                <ul>
                    <li><a href="singup.php">Sign up</a></li>
                    <li><a href="about.php">About us</a></li>
                    <li><a href="contact.php">contact</a></li>
                    <li><a href="logadmin.php">Admin</a></li>
                    <li><a style="margin-left: 400px;" href="index.php">HOME</a></li>
                </ul>
            </div><!--topBarLinks-->
            
        </div><!--topbar-->


        <header class="clearfix">
            <div class="logo">
                <img style="width: 300px" src="img/niroga.png">
                
            </div><!--logo-->
            <div class="socialmedia">
                <ul>
                    <li><a href="https://www.facebook.com/Nirogi-Medical-Center-297664291138200/"><img src="img/fb.png"></i></a></li>
                    <li><a href="https://www.instagram.com/nirogimedicalcenter/?hl=en&fbclid=IwAR3tl1o1spP2rrsiUT3oMdXIbYI5eCnQP8eOJ7CKzfkafn77Y0kNQUi3-wA"><img src="img/insta.jpg"></i></a></li>
                    <li><a href="https://twitter.com/CenterNirogi?fbclid=IwAR0rdmocN8cGTvSpJv7f6GWncdsfiUb9pfo_iio5L5duOmGRPKNi6enKFYQ"><img src="img/twitter.png"></i></a></li>
                    <li><a href="https://plus.google.com/108626736288103864338"><img src="img/gp.png"></i></a></li>
                    <li><a href="https://www.youtube.com/channel/UCiPesfrP9o0VW_TOgQpW0Hg"><img src="img/ytd.png"></i></a></li>
                </ul>
                
            </div><!--socialmedia-->
    </header>

    <nav>
            <ul>
                <li><a href="gallery.php"></a></li>
                <li style="font-size: 25px; color: white; " >APPOINTMENT DETAILS</li>
                <li><a href="login.php"></a></li>
                    
                
            </ul>
    </nav>


        <form action="view.php" method="post">
            <input type="text" name="valueToSearch" placeholder="Value To Search"><br><br>
            <input type="submit" name="search" id="but" value="Filter"><br><br>
            
            <table>
                <thead>
                <tr>
                    <th>NIC</th>
                    <th>case</th>
                    <th>date</th>
                    <th>gender</th>
                    
                    <th>Tp</th>
                </tr>
            </thead>

      <!-- populate table from mysql database -->
                <?php while($row = mysqli_fetch_array($search_result)):?>
                <tbody>
                <tr>
                    <td><?php echo $row['nic'];?></td>
                    <td><?php echo $row['case'];?></td>
                    <td><?php echo $row['date'];?></td>
                    <td><?php echo $row['gender'];?></td>
                    
                    <td><?php echo $row['tp'];?></td>
                </tr>
                <?php endwhile;?>
            </tbody>
            </table>
        </form>

        <div class="bottom clearfix">
            

            
        <div class="partnars clearfix">
            
            <div class="item clearfix" style="background-color: maroon;">
                <marquee behavior=scroll direction="right" scrollamount="12">
                <img src="img/mar.png">
                </marquee>
                <marquee behavior=scroll direction="right" scrollamount="12">
                <h2 style="color: white;"></h2>
                </marquee>
            </div>
            

        </div><!--partnars-->
        <hr>
            
        <div class="bottomdown">
            
            <div class="object">
                <h1>Nirogi Medical <br> center</h1>
                <p><b>Nirogi Medical Center and <br>channeling  center<b> <br>
                    No: 278/5, Kurunagala Road, <br>Kondadeniya Street, Katugastota, <br>Sri Lanka.
                    
                </p>
            </div>
            <div class="object clearfix">
                <h1>Contacts</h1>
                Hotline Numbers
                +94 115 321 000 - 30, +94 117 321 000 <br>  
                Emergency Case
                +94 112 667 769 <br>
                work place , Asiri 
                +94 112 685 806 <br>
                Lanka Hospital
                +94 115 650 666 <br>
                General Numbers
                +94 112 693 404, +94 112 692 272, +94 112 685 805 <br>
            </div>
            <div class="object clearfix">
                <h1>Linked Hospitals</h1>
                Lanka Hospital <br> <br>
                Nawaloka Hospital <br> <br>
                Asiri Hospital <br> <br>
                Suwasewana Hospital <br> <br>
                
            </div>

        </div><!--bottomdown-->

    </div><!--all-->

        
    </body>
</html>