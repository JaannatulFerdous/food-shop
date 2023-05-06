<?php include('partials/menu.php'); ?>

        <!-- Main content section starts-->
        <div class="main-content">
            <div class="wrapper">
                <h1>Manage Admin</h1>
                <br /> <br />

                <?php 
                    if(isset($_SESSION['add']))
                    {
                        echo $_SESSION['add'];
                    }
                ?>
                

                <!--button to add admin--> 
                <a href="add-admin.php" class="btn-primary">Add Admin</a>

                <br /> <br />
                

                <table class="tbl-full">
                    <tr>
                        <th>SL.N.</th>
                        <th>Full Name</th>
                        <th>Username</th>
                        <th>Actions</th>
                    </tr>

                    <tr>
                        <td>1.</td>
                        <td>Jannatul Ferdous</td>
                        <td>jannatulferdous</td>
                        <td>
                            <a href="#" class="btn-secondary">Update Admin</a>
                            <a href="#" class="btn-danger">Delete Admin</a>
                           
                        </td>
                    </tr>
                    <tr>
                        <td>2.</td>
                        <td>Jannatul Ferdous</td>
                        <td>jannatulferdous</td>
                        <td>
                        <a href="#" class="btn-secondary">Update Admin</a>
                        <a href="#" class="btn-danger">Delete Admin</a>
                        </td>
                    </tr>
                    <tr>
                        <td>3.</td>
                        <td>Jannatul Ferdous</td>
                        <td>jannatulferdous</td>
                        <td>
                        <a href="#" class="btn-secondary">Update Admin</a>
                        <a href="#" class="btn-danger">Delete Admin</a>
                        </td>
                    </tr>

                </table>

            </div>

        </div>
        <!-- Menu content ends-->

<?php include('partials/footer.php'); ?>