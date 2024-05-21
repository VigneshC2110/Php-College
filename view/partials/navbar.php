<div class="header">
    <div class="minidiv">
            <div class="logo">HOGWARTS UNIVERSITY</div>
            <div class='login'>
            <?php 
        session_start(); 

        if(isset($_SESSION['email'])){
            echo "<a href='logout'><span>Logout</span></a><img class='imgwidth' src='view/src/pro.webp'>";
        } else {
            echo "<a href='login'>LOGIN</a>";
        }
    ?>
    </div>
            </div>
        </div>