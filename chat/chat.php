

                   
                        <?php

                             $conn=mysqli_connect("localhost","root","","chat_info");

                            if(!$conn)
                             {
                             die("connection failed.." .mysqli_connect_error());
                               }

                           $query="SELECT * FROM `chat`";
                    $query_run= mysqli_query($conn,$query);
//                    $query_run =$con -> query($query);
                
//                    $query_array = mysql_fetch_assoc($query_run)
                    
                    while($query_row = mysqli_fetch_assoc($query_run)):?>
                
                <div id ="chat_data">
                </div>
               
               <div style="background: #a5aba5; margin-bottom: 10px; border-radius: 7px 7px 0px 7px; height: auto; width: 100%;padding: 7px;">
                <span style="color:red;font-style: italic; font-size: 20px; font-family: serif;"><?php echo $query_row['uname'].' : '; ?></span>
                <span  style="font-family:cursive;"><?php echo $query_row['msg']; ?></span>
                <span style = "font-family:cursive;float:right; "><?php echo $query_row['ts']; ?></span>
            </div>
<!--            
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
-->
                
                <?php endwhile; ?>

                        
                    