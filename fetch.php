<?php
//action.php
include 'db_connion/db.php';

if(isset($_POST["action"]))
{

                if($_POST["action"] == "fetch")
                {
                
                $output = '
                <table class="table table-bordered table-striped">  
                    <tr>
                    <th width="10%">ID</th>
                    <th width="70%">Image</th>
                    <th width="70%">info</th>
                    <th width="10%">Change</th>
                    <th width="10%">Remove</th>
                    </tr>
                ';
                echo $output;
                }
}
 ?>