<?php include 'inc/header.php'; ?>

<!-- Breadcumb -->
<section class="breadcumb bg" style="background-image: url('assets/img/breadcumb.jpg');">
    <div class="container">
        <div class="grid">
            <div class="col-12 text-center">
                <h4 class="breadcumb__title">Track Order</h4>
                <ul class="breadcumb__nav">
                    <li class="breadcumb__list"><a href="" class="breadcumb__link">Home</a></li>
                    <li class="breadcumb__list">Track Order</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="dashboard">
    <div class="container">
        <div class="grid">
            <div class="col-12 col-sm-4">
                <ul class="dashboard__list">
                    <li class="dashboard__item"><a href="dashboard.php" class="dashboard__link">Dashboard</a></li>
                    <li class="dashboard__item"><a href="track-order.php" class="dashboard__link">Track Order</a></li>
                    <li class="dashboard__item"><a href="user-profile.php" class="dashboard__link">Profile</a></li>
                    <li class="dashboard__item"><a href="" class="dashboard__link">Logout</a></li>
                </ul>
            </div>
            <div class="col-12 col-sm-8">
                <div class="dashboard__single">
                    <h4 class="dashboard__title">Track Order</h4>
                    <form action="" class="dashboard__track">
                        <input type="text" class="dashboard__track-input" placeholder="Order ID">
                        <input type="submit" class="dashboard__track-btn btn btn-primary" value="Check Status">
                    </form>
                    <table class="dashboard__track-info">
                        <tr>
                            <th>ID</th>
                            <th>Project Name</th>
                            <th>Total Percentage</th>
                            <th>Expected Delivary</th>
                        </tr>
                        <tr>
                            <td>et0123454</td>
                            <td>Point of sale</td>
                            <td>78%</td>
                            <td>30 March 2023</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
    
<?php include 'inc/footer.php'; ?>