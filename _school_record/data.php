<?php
    include_once 'db.php';
    if (!($_REQUEST['student_name'] == '' || $_REQUEST['student_subject'] == '' || $_REQUEST['student_fee'] == '')) {
        $student_name = $_REQUEST['student_name'];
        $student_subject = $_REQUEST['student_subject'];
        $student_fee = $_REQUEST['student_fee'];

        $ins_sql = "INSERT INTO student_data (student_name, student_subject, student_fee) VALUES ('$student_name', '$student_subject', '$student_fee')";
        $run_sql = mysqli_query($connection, $ins_sql);
    }
       
        $del_sql = "DELETE FROM student_data WHERE id ='$id'";
        $run_sql = mysqli_query($connection, $del_sql);
        

    $sql = "SELECT * FROM student_data";
    $run = mysqli_query($connection, $sql);
    while ($rows = mysqli_fetch_assoc($run)){?>
        <tr>
            <td><?php echo $rows['id'];?></td>
            <td><?php echo $rows['student_name'];?></td>
            <td><?php echo $rows['student_subject'];?></td>
            <td><?php echo $rows['student_fee'];?></td>
            <td>
                <div class="dropdown">
                    <button class="btn btn-primary" data-toggle="dropdown">Actions <span class="caret"></span></button>
                    <!-- <ul class="dropdown-menu"> -->
                    <ul class="">
                        <li><a href="javascript:void(0);" >Edit</a></li>
                        <li><a href="javascript:void(0);" onclick="ajax_request('delete_record',<?php echo $rows['id'];?>)";>Delete</a></li>
                    </ul>    
                </div>
            </td>
        </tr>
<?php        
    }
?>


