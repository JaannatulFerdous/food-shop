<?php include('partials/menu.php'); ?>

<div class="main-content">
    <div class="wrapper">
        <h1>Add Admin</h1>
        <br />

        <?php 
            if(isset($_SESSION['add']))// checking  the session is set or not
            {
                echo $_SESSION['add'];
                unset($_SESSION['add']);
            }
        ?>


        <form action="" method="POST">
            <table class="tbl-30">
                <tr>
                    <td>Full Name: </td>
                    <td>
                        <input type="text" name="full_name" placeholder="Enter Your Name">
                    </td>
                </tr>
                <tr>
                    <td>Username: </td>
                    <td>
                        <input type="text" name="username" placeholder="Your Username">
                    </td>
                </tr>
                <tr>
                    <td>Password: </td>
                    <td>
                        <input type="password" name="password" placeholder="Your Password">
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="Submit" name="submit" value="Add Admin" class="btn-secondary">
                    </td>
                </tr>
            </table>
        </form>
    </div>
</div>

<?php include('partials/footer.php'); ?>

<?php 
 //process the value from form & save it in database

 //check whether the submit button is clicked or not

 if(isset($_POST['submit']))
 {
    //Button clicked
    //echo"Button Clicked";

    //1. get the data from form

    $full_name = $_POST['full_name'];
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    //2. $SQL Query to save the data into database
    $sql = "INSERT INTO tbl_admin SET
        full_name='$full_name',
        username='$username',
        password='$password'
    
    ";
    //3. Executing Query and Saving data into database

    $res = mysqli_query($conn, $sql) or die(mysqli_error());

    //4. check whether the data is inserted or not and display appropriate message
    if($res==TRUE)
    {
        //Data Inserted
        //echo"Data Inserted";
        //Create a session variable to display message
        $_SESSION['add'] = "Admin Added Successfully";
        //Redirect Page to manage admin
        header("location:".SITEURL.'admin/manage-admin.php');
    }
    else
    {
        //failed to inserted data
        //echo"failed to insert data";
         //Create a session variable to display message
         $_SESSION['add'] = "Failed to add admin";
         //Redirect Page to manage admin
         header("location:".SITEURL.'admin/add-admin.php');

    }
 }
 
?>
