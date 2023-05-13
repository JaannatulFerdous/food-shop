<?php include('partials/menu.php'); ?>

<div class="main-content">
    <div class="wrapper">
        <h1>Change Password</h1>
        <br><br>

        <?php 
            if(isset($_GET['id']));
            {
                $id=$_GET['id'];


            }
        ?>


        <form action="" method="POST">
            <table class="tbl-30">
                <tr>
                    <td>Current Password: </td>
                    <td>
                        <input type="password" name="current_password" placeholder="Current Password">
                    </td>
                </tr>

                <tr>
                    <td>New Password: </td>
                    <td>
                        <input type="password" name="new_password" placeholder="New Password">
                    </td>
                </tr>

                <tr>
                    <td>Confirm Password: </td>
                    <td>
                        <input type="password" name="confirm_password" placeholder="Confirm Password">
                    </td>
                </tr>

                <tr>
                    <td colspan="2">
                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                        <input type="submit" name="submit" value="change password"class="btn-secondary">

                    </td>
                </tr>
            </table>

        </form>


    </div>
</div>



<?php 

            //check submib btn clicked or not
            if(isset($_POST['submit']))
            {
                //echo "Clicked";

                //1. get the data from form
                $id=$_POST['id'];
                $current_password = md5($_POST['current_password']);
                $new_password = md5($_POST['new_password']);
                $confirm_password = md5($_POST['confirm_password']);


                //2. check whether the user with current id and current password exist or not
                $sql = "SELECT * FROM tbl_admin WHERE id=$id AND password='$current_password'";

                //execute the query
                 $res = mysqli_query($conn, $sql);

                if($res==true)
                {
                    //check whether data is available or not
                    $count=mysqli_num_rows($res);

                    if($count==1)
                    {
                        //user exist and password can be changed
                        //echo "User Found";
                        //check whether the new password and confirm match or not
                        if($new_password==$confirm_password)
                        {
                            //update the password
                            echo "Password match"
                        }
                        else
                        {
                            //redirect to manage admin page with error message
                            $_SESSION['pwd-not-match'] = "<div class='error'>Password Did Not Match. </div>";
                            //redirect the user 
                            header('location:' .SITEURL. 'admin/manage-admin.php');
                        }
                    }
                    else
                    {
                        //user does not exist set message and redirct
                        $_SESSION['use-not-found'] = "<div class='error'>User Not Found. </div>";
                        //redirect the user 
                        header('location:' .SITEURL. 'admin/manage-admin.php');
                    }

                }

                //3. check whether the new password and confirm passsword match or not

                //4. change password if all above is true
            }

?>

<?php include('partials/footer.php');  ?>