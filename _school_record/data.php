<?php
    include_once 'db.php';
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
                    <ul class="dropdown-menu">
                        <li><a href="#">Edit</a></li>
                        <li><a href="#">Delete</a></li>
                    </ul>    
                </div>
            </td>
        </tr>
<?php        
    }
?>
<tr>
    <td>1</td>
    <td>DElAmin</td>
    <td>Computer</td>
    <td>500</td>
    <td>
        <div class="dropdown">
            <button class="btn btn-primary" data-toggle="dropdown">Actions <span class="caret"></span></button>
            <ul class="dropdown-menu">
                <li><a href="#">Edit</a></li>
                <li><a href="#">Delete</a></li>
            </ul>    
        </div>
    </td>
</tr>
<tr>
    <td>2</td>
    <td>Abdou</td>
    <td>Psychology</td>
    <td>1000</td>
    <td>
        <div class="dropdown">
            <button class="btn btn-primary" data-toggle="dropdown">Actions <span class="caret"></span></button>
            <ul class="dropdown-menu">
                <li><a href="#">Edit</a></li>
                <li><a href="#">Delete</a></li>
            </ul>    
        </div>
    </td>
</tr>
