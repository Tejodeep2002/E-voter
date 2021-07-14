<?php
include("connection.php");
$name=$_POST['name'];
$mobilenumber=$_POST['mobilenumber'];
$voterid=$_POST['voterid'];
$password=$_POST['password'];
$conpassword=$_POST['conpassword'];
$address=$_POST['address'];
?>
<table class="table" border="1">
    <tr>
        <th class="head" colspan="2">Registration Form</th>
    </tr>
    <tr>
        <td class="inner">Name</td>
        <td><?php echo$name;?></td>
    </tr>
    <tr>
        <td class="inner">Mobile Number</td>
        <td><?php echo$mobilenumber;?></td>
    </tr>
    <tr>
        <td class="inner">Voter ID</td>
        <td><?php echo$voterid;?></td>
    </tr>
    <tr>
        <td class="inner">Password</td>
        <td><?php echo$password;?></td>
    </tr>
    <tr>
        <td class="inner">Confirm Password</td>
        <td><?php echo$conpassword;?></td>
    </tr>
    <tr>
        <td class="inner">Adress</td>
        <td><?php echo$address;?></td>
    </tr>
</table>
<a href="."><input type="submit" name="submit" class="submit" value="go back"></a>
<?php
    if($con)
    {
        echo"Connected Successfully to the Database";
    }
    $sql="insert into form(name,mobilenumber,voterid,password,conpassword,adress)
        values('$name','$mobilenumber','$voterid','$password','$conpassword','$address')";
    $query=mysql_quarry($con,$sql);
    if($query)
    {
        echo"Data has been successfully inserted";
    }
?>    