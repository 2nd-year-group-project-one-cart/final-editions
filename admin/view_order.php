<div class="scroll" id="bodyright">
    <h2>View All Orders From Here</h2>
    <form method="post" enctype="multipart/form-data">
        <table>
            <tr>
                <!-- <th>No.</th> -->
                <th>Order ID</th>     <!--increment---->
                <th>User ID</th>
                <th>User Name</th>      <!--user---->
                <th>cart ID</th>      <!--cart---->
                <th>Product ID</th>
                <th>Added Date</th>
                <th>Product Name</th> <!--products---->
                <th>Image</th>        <!--products---->
                <th>Weight</th>       <!--products---->
                <th>Price (RS)</th>    <!--products---->
                <th>Quantity</th>     <!--cart---->
                <th>Urgent Order</th>  <!--cart---->
                <th>Sub Total (RS)</th>
            </tr>

            <?php include("include/adminfunction.php");
                  // echo no_order();
                  echo view_order();

            ?>


        </table>
    </form>
</div>
