<?php

/* @var $this \yii\web\View */
/* @var $content string */


use app\assets\AppAsset;

$bundle=AppAsset::register($this);
?>
<div class="about">
    <div class="container">
        <div class="agileits_about_grids">
            <div class="col-md-6 agileits_about_grid_left">
                <h3>Chúng tôi có những gì?</h3>
                <p>Khu Nội trú Trường Đại học Tây Bắc được đầu tư xây dựng khang trang,
                    hiện đại trên khuôn viên khuôn viên rộng, bao gồm 8 tòa nhà 5 tầng với 473 phòng ở,
                    8 phòng sinh hoạt chung, đáp ứng khoảng 3.000 chỗ ở cho sinh viên.</p>
            </div>
            <div class="col-md-6 agileits_about_grid_right">
                <img src="<?=$bundle->baseUrl?>/images/khunoitru.png" alt=" " class="img-responsive" />
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<!-- //about -->
<!-- banner-bottom -->
<div class="banner-bottom">
    <div class="container">
        <div class="col-md-4 wthree_banner_bottom_left">
            <img src="<?=$bundle->baseUrl?>/images/student.png" alt=" " class="img-responsive" />
        </div>
        <div class="col-md-8 wthree_banner_bottom_right">
            <h3>Khi bạn ở đây bạn sẽ được hưởng những quyền lợi</h3>
            <p>Mỗi tòa nhà có một phòng sinh hoạt chung để sinh viên giao lưu, trao đổi, tổ chức các buổi học nhóm, hội thảo, các hoạt động ngoại khoá,...
                Diện tích mỗi phòng ở trong các toà nhà là 40m2 (chưa kể 12m2 diện tích sân phơi và nhà vệ sinh).
                Mỗi phòng riêng bố trí:  6 đến 8 sinh viên ở, 01 tủ sắt 8 ngăn, 08 giường ngủ, 08 bàn học, 2 quạt trần, 6 đèn chiếu ánh sáng,
                cửa thông thoáng, có ban công, điện, nước đầy đủ. Ngoài ra có công trình vệ sinh, nhà tắm khép kín được trang bị 1 toilet,
                nhà tắm được trang bị vòi sen, 1 bồn rửa mặt bên ngoài.</p>
            <ol>
                <li>Bảo vệ trực 24/24h, an ninh trật tự được đảm bảo</li>
                <li>Hệ thống phòng cháy, chữa cháy và cứu nạn khẩn cấp khi cần</li>
                <li>Nhân viên vệ sinh quét dọn các lối đi và khu vực sinh hoạt chung vào mỗi buổi sáng</li>
                <li>Nhà giữ xe riêng đặt ngay tại khu Ký túc xá </li>
                <li>Khu nội trú cho sinh viên nước ngoài</li>
                <li>Khu nhà ăn đạt tiêu chuẩn</li>
            </ol>
        </div>
        <div class="clearfix"> </div>
    </div>
</div>
<!-- //banner-bottom -->
<!-- banner-bottom-image-text -->
<div id="about" class="banner-bottom-image-text">
    <div class="col-md-8 banner-bottom-image-text-left">
        <h3>Hoạt động của chúng tôi.</h3>
        <p>   Ban quản lý Khu Nội trú thường xuyên kết hợp với Đoàn Thanh niên,
            Hội sinh viên, Phòng Công tác chính trị - Quản lý người học
            và các phòng ban chức năng của Nhà trường thường xuyên tổ chức các buổi giao lưu văn hóa, văn nghệ, thể dục- thể thao;
            đào tạo kỹ năng mềm; rèn luyện kỹ năng giao tiếp, ứng xử có văn hóa nhằm góp phần giúp cho các em hoàn thiện nhân cách để sau khi tốt nghiệp ra trường các em sẽ là những trí thức,
            là công dân có ích cho xã hội.</p>
        <h4 style="font-size: 10pt"> Trong các mùa thi tuyển sinh đại học, cao đẳng năm nay của Nhà trường, Ban quản lý Khu Nội trú đã phối hợp với Đoàn Thanh niên, Hội sinh viên, Phòng Công tác chính trị và Quản lý người học và các phòng ban chức năng của trường chuẩn bị chu đáo về điều kiện sinh hoạt,
            cơ sở vật chất một cách tốt nhất để phục vụ ăn, ở, sinh hoạt cho người nhà và thí sinh đến ở dự thi vào Trường Đại học Tây Bắc.</h4>
    </div>
    <div class="col-md-4 banner-bottom-image-text-right">
        <img style="    height: 469px;" src="<?=$bundle->baseUrl?>/images/action.jpg" alt=" " class="img-responsive" />
    </div>
    <div class="clearfix"> </div>
</div>
<!-- //banner-bottom-image-text -->
<!-- team -->
<div class="team" id="team">
    <div class="container">
        <h3>Đội ngũ của chúng tôi</h3>
        <p class="nostrud">Đội ngũ có chuyên môn cao</p>
        <div class="agile_team_grids">
            <div class="col-md-3 agile_team_grid">
                <div class="view view-sixth">
                    <img src="<?=$bundle->baseUrl?>/images/3.jpg" alt=" " class="img-responsive" />
                    <div class="mask">
                        <h5>Thông tin</h5>
                        <p>Bạn có thể liên hệ thông qua</p>
                        <div class="agileits_social_icons">
                            <a href="#" class="icon-button twitter"><i class="icon-twitter"></i><span></span></a>
                            <a href="#" class="icon-button facebook"><i class="icon-facebook"></i><span></span></a>
                            <a href="#" class="icon-button google-plus"><i class="icon-google-plus"></i><span></span></a>
                        </div>
                    </div>
                </div>
                <h4>Phan Văn Hoàn</h4>
                <p>Quản lí</p>
            </div>
            <div class="col-md-3 agile_team_grid">
                <div class="view view-sixth">
                    <img src="<?=$bundle->baseUrl?>/images/6.jpg" alt=" " class="img-responsive" />
                    <div class="mask">
                        <h5>Thông tin</h5>
                        <p>Bạn có thể liên hệ thông qua</p>
                        <div class="agileits_social_icons">
                            <a href="#" class="icon-button twitter"><i class="icon-twitter"></i><span></span></a>
                            <a href="#" class="icon-button facebook"><i class="icon-facebook"></i><span></span></a>
                            <a href="#" class="icon-button google-plus"><i class="icon-google-plus"></i><span></span></a>
                        </div>
                    </div>
                </div>
                <h4>Pòong Thành Văn</h4>
                <p>Nhân viên</p>
            </div>
            <div class="col-md-3 agile_team_grid">
                <div class="view view-sixth">
                    <img src="<?=$bundle->baseUrl?>/images/4.jpg" alt=" " class="img-responsive" />
                    <div class="mask">
                        <h5>Thông tin</h5>
                        <p>Bạn có thể liên hệ thông qua</p>
                        <div class="agileits_social_icons">
                            <a href="#" class="icon-button twitter"><i class="icon-twitter"></i><span></span></a>
                            <a href="#" class="icon-button facebook"><i class="icon-facebook"></i><span></span></a>
                            <a href="#" class="icon-button google-plus"><i class="icon-google-plus"></i><span></span></a>
                        </div>
                    </div>
                </div>
                <h4>Bùi Thanh Tùng</h4>
                <p>Nhân viên</p>
            </div>
            <div class="col-md-3 agile_team_grid">
                <div class="view view-sixth">
                    <img src="<?=$bundle->baseUrl?>/images/5.jpg" alt=" " class="img-responsive" />
                    <div class="mask">
                        <h5>Thông tin</h5>
                        <p>Bạn có thể liên hệ thông qua</p>
                        <div class="agileits_social_icons">
                            <a href="#" class="icon-button twitter"><i class="icon-twitter"></i><span></span></a>
                            <a href="#" class="icon-button facebook"><i class="icon-facebook"></i><span></span></a>
                            <a href="#" class="icon-button google-plus"><i class="icon-google-plus"></i><span></span></a>
                        </div>
                    </div>
                </div>
                <h4>Lê Văn Quảng</h4>
                <p>Nhân viên</p>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<!-- //team -->
<!-- team-bottom -->
<div class="team-bottom">
    <div class="container">
        <h3>Hãy đăng kí lịch làm việc với chúng tôi</h3>
        <p>Liên hệ vói chúng tôi.</p>
        <div class="reservation">
            <div class="w3_book_date">
                <form action="#" method="post">
                    <span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
                    <input class="date" id="datepicker" type="text" name="Date" value="Ngày" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Date';}" required="">
                </form>
            </div>
            <div class="w3_working_time">
                <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                <select id="country1" onchange="change_country(this.value)" class="frm-field required sect">
                    <option value="null">Thời gian</option>
                    <option value="null">08:00 AM - 11:00 PM</option>
                    <option value="null">02:00 PM - 5:00 PM</option>
                </select>
            </div>
            <div class="w3_working_time w3_working_time1">
                <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>
                <select id="country" onchange="change_country(this.value)" class="frm-field required sect">
                    <option value="null">Kí túc xá</option>
                    <option value="null">Kí túc xá K1</option>
                    <option value="null">Kí túc xá K2</option>
                </select>
            </div>
            <div class="clearfix"> </div>
            <form action="#" method="post">
                <input type="submit" value="Đăng kí">
            </form>
        </div>
        <!-- start-date-piker -->
        <script src="<?=$bundle->baseUrl?>/js/jquery-ui.js"></script>
        <script>
            $(function() {
                $( "#datepicker" ).datepicker();
            });
        </script>
        <!-- //End-date-piker -->
    </div>
</div>
<!-- //team-bottom -->
<!-- gallery -->
<div class="gallery" id="gallery">
    <h3>Hình ảnh</h3>
    <p class="nostrud">Những hình ảnh chúng tôi có</p>
    <div class="w3agile_gallery_grids">
        <div class="col-md-3 w3agile_gallery_grid">
            <div class="w3agile_gallery_image">
                <a class="sb" href="<?=$bundle->baseUrl?>/images/8.jpg" title="">
                    <figure>
                        <img src="<?=$bundle->baseUrl?>/images/8.jpg" alt="" class="" />
                        <figcaption>
                            <h4>Kí túc xá đại học Tây Bắc</h4>
                            <p>

                            </p>
                        </figcaption>
                    </figure>
                </a>
            </div>
        </div>
        <div class="col-md-3 w3agile_gallery_grid">
            <div class="w3agile_gallery_image">
                <a class="sb" title="" href="<?=$bundle->baseUrl?>/images/9.jpg">
                    <figure>
                        <img src="<?=$bundle->baseUrl?>/images/9.jpg" alt="" class="img-responsive" />
                        <figcaption>
                            <h4>Kí túc xá đại học Tây Bắc</h4>
                            <p>

                            </p>
                        </figcaption>
                    </figure>
                </a>
            </div>
        </div>
        <div class="col-md-3 w3agile_gallery_grid">
            <div class="w3agile_gallery_image">
                <a class="sb" title="" href="<?=$bundle->baseUrl?>/images/10.jpg">
                    <figure>
                        <img src="<?=$bundle->baseUrl?>/images/10.jpg" alt="" class="img-responsive" />
                        <figcaption>
                            <h4>Kí túc xá đại học Tây Bắc</h4>
                            <p>

                            </p>
                        </figcaption>
                    </figure>
                </a>
            </div>
        </div>
        <div class="col-md-3 w3agile_gallery_grid">
            <div class="w3agile_gallery_image">
                <a class="sb" title="" href="<?=$bundle->baseUrl?>/images/11.jpg">
                    <figure>
                        <img src="<?=$bundle->baseUrl?>/images/11.jpg" alt="" class="img-responsive" />
                        <figcaption>
                            <h4>Kí túc xá đại học Tây Bắc</h4>
                            <p>

                            </p>
                        </figcaption>
                    </figure>
                </a>
            </div>
        </div>
        <div class="col-md-3 w3agile_gallery_grid">
            <div class="w3agile_gallery_image">
                <figure>
                    <img src="<?=$bundle->baseUrl?>/images/12.jpg" alt="" class="img-responsive" />
                    <figcaption>
                        <h4>Kí túc xá đại học Tây Bắc</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et Kí túc xá đại học Tây Bắc.
                        </p>
                    </figcaption>
                </figure>
                </a>
            </div>
        </div>
        <div class="col-md-3 w3agile_gallery_grid">
            <div class="w3agile_gallery_image">
                <a class="sb" title="" href="<?=$bundle->baseUrl?>/images/13.jpg">
                    <figure>
                        <img src="<?=$bundle->baseUrl?>/images/13.jpg" alt="" class="img-responsive" />
                        <figcaption>
                            <h4>Kí túc xá đại học Tây Bắc</h4>
                            <p>

                            </p>
                        </figcaption>
                    </figure>
                </a>
            </div>
        </div>
        <div class="col-md-3 w3agile_gallery_grid">
            <div class="w3agile_gallery_image">
                <a class="sb" title="" href="images/14.jpg">
                    <figure>
                        <img src="<?=$bundle->baseUrl?>/images/14.jpg" alt="" class="img-responsive" />
                        <figcaption>
                            <h4>Kí túc xá đại học Tây Bắc</h4>
                            <p>

                            </p>
                        </figcaption>
                    </figure>
                </a>
            </div>
        </div>
        <div class="col-md-3 w3agile_gallery_grid">
            <div class="w3agile_gallery_image">
                <a class="sb" title="" href="<?=$bundle->baseUrl?>/images/15.jpg">
                    <figure>
                        <img src="<?=$bundle->baseUrl?>/images/15.jpg" alt="" class="img-responsive" />
                        <figcaption>
                            <h4>Kí túc xá đại học Tây Bắc</h4>
                            <p>

                            </p>
                        </figcaption>
                    </figure>
                </a>
            </div>
        </div>
        <div class="clearfix"> </div>
    </div>
    <script type="text/javascript" src="<?=$bundle->baseUrl?>/js/smoothbox.jquery2.js"></script>
</div>
<!-- //gallery -->
<!-- testimonials -->
<div class="testimonials">
    <div class="container">
        <h3>Hãy liên hệ với chúng tôi</h3>
        <p class="nostrud">Bạn có thể liện hệ qua số điện thoại 01234545656
            email: phanvanhoan54cntt@gmail.com</p>

    </div>
</div>
<!-- //testimonials -->
<!-- contact -->
<div class="contact" id="contact">