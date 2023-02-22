<?php include 'inc/header.php'; ?>

<!-- Breadcumb -->
<section class="breadcumb bg" style="background-image: url('assets/img/breadcumb.jpg');">
    <div class="container">
        <div class="grid">
            <div class="col-12 text-center">
                <h4 class="breadcumb__title">Web Development</h4>
                <ul class="breadcumb__nav">
                    <li class="breadcumb__list"><a href="" class="breadcumb__link">Home</a></li>
                    <li class="breadcumb__list">Web Development</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="single-project">
    <div class="container">
        <div class="grid">
            <div class="col-7">
                <img class="single-project__featured" src="assets/img/project-1.jpg" alt="">
                <p class="single-project__list">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
            </div>
            <div class="col-5">
                <div class="single-project__sidebar">
                    <h4 class="single-project__title">Get a Quote</h4>
                    <form class="bannar__form">
                        <div class="bannar__input">
                            <input type="text" placeholder="Name">
                            <i class="fa-regular fa-user"></i>
                        </div>
                        <div class="bannar__input">
                            <input type="email" placeholder="Email">
                            <i class="fa-regular fa-envelope"></i>
                        </div>
                        <div class="bannar__input">
                            <input type="text" placeholder="Phone">
                            <i class="fa-solid fa-phone"></i>
                        </div>
                        <div class="bannar__input">
                            <select>
                                <option value="">Select Subject</option>
                                <option value="">Web Design / Development</option>
                                <option value="">Software Development</option>
                                <option value="">Digital Marketing</option>
                                <option value="">IT Consultancy</option>
                            </select>
                            <i class="fa-solid fa-chevron-down"></i>
                        </div>
                        <div class="bannar__input">
                            <textarea placeholder="Message"></textarea>
                        </div>
                        <input class="bannar__input-btn" type="submit" value="get quote">
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
    
<?php include 'inc/footer.php'; ?>