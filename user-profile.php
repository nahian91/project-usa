<?php include 'inc/header.php'; ?>

<!-- Breadcumb -->
<section class="breadcumb bg" style="background-image: url('assets/img/breadcumb.jpg');">
    <div class="container">
        <div class="grid">
            <div class="col-12 text-center">
                <h4 class="breadcumb__title">Profile : Makhal Doe</h4>
                <ul class="breadcumb__nav">
                    <li class="breadcumb__list"><a href="" class="breadcumb__link">Home</a></li>
                    <li class="breadcumb__list">Profile : Makhal Doe</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="dashboard">
    <div class="container">
        <div class="grid">
            <div class="col-4">
                <ul class="dashboard__list">
                    <li class="dashboard__item"><a href="dashboard.php" class="dashboard__link">Dashboard</a></li>
                    <li class="dashboard__item"><a href="user-profile.php" class="dashboard__link">Profile</a></li>
                    <li class="dashboard__item"><a href="" class="dashboard__link">Logout</a></li>
                </ul>
            </div>
            <div class="col-8">
                <div class="dashboard__single">
                    <div class="dashboard__count">
                        <h4 class="dashboard__title">Hi, Makhal Doe</h4>
                        <form action="">
                            <div class="grid">
                                <div class="col-6">
                                    <div class="dashboard__profile-input">
                                        <label for="">Name</label>
                                        <input type="text" placeholder="Your Name">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="dashboard__profile-input">
                                        <label for="">Email</label>
                                        <input type="text" placeholder="Your Email">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="dashboard__profile-input">
                                        <label for="">Current Password</label>
                                        <input type="password" placeholder="Current Password">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="dashboard__profile-input">
                                        <label for="">New Password</label>
                                        <input type="password" placeholder="New Password">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <input type="submit" class="btn btn-primary" value="Save Changes">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    
<?php include 'inc/footer.php'; ?>