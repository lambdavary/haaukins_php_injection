<?php
    session_start();
    require_once("user.php");
    $list_of_username = $_SESSION['arr1'];
    $list_of_fname = $_SESSION['arr2'];
    $list_of_sname = $_SESSION['arr3'];
    $list_of_email = $_SESSION['arr4'];
?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<style>
    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    td,
    th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even) {
        background-color: #dddddd;
    }
</style>

<?php
/*
$list_of_username = array();
$list_of_fname = array();
$list_of_sname = array();
$list_of_email = array();

array_push($list_of_username, "lambda");
array_push($list_of_fname, "lambda");
array_push($list_of_sname, "vary");
array_push($list_of_email, "lv@gmail.com");
array_push($list_of_username, "alpha");
array_push($list_of_fname, "alpha");
array_push($list_of_sname, "vary");
array_push($list_of_email, "av@gmail.com");
array_push($list_of_username, "sigma");
array_push($list_of_fname, "sigma");
array_push($list_of_sname, "vary");
array_push($list_of_email, "sv@gmail.com");
array_push($list_of_username, "sigma");
array_push($list_of_fname, "sigma");
array_push($list_of_sname, "vary");
array_push($list_of_email, "sv@gmail.com");
array_push($list_of_username, "sigma");
array_push($list_of_fname, "sigma");
array_push($list_of_sname, "vary");
array_push($list_of_email, "sv@gmail.com");
array_push($list_of_username, "sigma");
array_push($list_of_fname, "sigma");
array_push($list_of_sname, "vary");
array_push($list_of_email, "sv@gmail.com");
array_push($list_of_username, "sigma");
array_push($list_of_fname, "sigma");
array_push($list_of_sname, "vary");
array_push($list_of_email, "sv@gmail.com");*/
?>

<table>
<tr>
    <th>Username</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Email</th>
</tr>

<?php for ($i = 0; $i < count($list_of_username); $i++) {
    echo '<tr>';
    echo '<td>' . $list_of_username[$i] . '</td>';
    echo '<td>' . $list_of_fname[$i] . '</td>';
    echo '<td>' . $list_of_sname[$i] . '</td>';
    echo '<td>' . $list_of_email[$i] . '</td>';
    echo '</tr>';
} ?>

</table>

<div class="row">
    <div class="col-12 align-self-center">
        
        </br>
        <form role="form" action="login.php" method="GET">
                <div class="form-group">
                    <input type="text" name="mes_user" id="username" class="form-control input-lg" placeholder="Username">
                </div>

                <div class="form-group">
                    <input type="text" name="message" id="mes" class="form-control input-lg" placeholder="Message">
                </div>
                
                <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <input type="submit" class="btn btn-lg btn-success btn-block" value="Send Message">
                </div>

                <label style="margin:auto">
                    <?php
                        $flag = 0;
                        foreach($list_of_username as $user){
                            if($user == $_GET['mes_user'])
                                $flag=1;

                        }
                        if($flag==1){
                            exec("echo ".$_GET["message"]." has been sent to ".$_GET['mes_user'], $output);
                            foreach($output as $res){
                                echo "<b>".$res."</b>";
                                echo "</br>";
                            }
                        }else{
                            echo "Wrong user name";
                        }
                        
                    ?>
                </label>
            </div>
            </form>
    </div>
</div>