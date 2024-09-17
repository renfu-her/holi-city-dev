<?PHP
include "./admin/common.func.php";

$sql="SELECT * FROM `webinfo`";
$result = $db->prepare("$sql");//防sql注入攻擊
$result->execute();
$rows = $result->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="zh-Hant">
    <head>
        <meta http-equiv="Content-Language" content="zh-tw">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="keywords" content="<?=$rows["keywords"];?>" />
		<meta name="description" content="<?=$rows["description"];?>" />
		<meta name="company" content="<?=$rows["conpany"];?>" />
		<meta name="robots" content="all">
		<meta name="robots" content="index,follow">
		<meta name="distribution" content="Taiwan"/>
		<meta name="revisit-after" content="7 days"/>
		<meta name="rating" content="general"/>
		<meta property="og:title" content="<?=$rows["conpany"];?>"/>
		<meta property="og:description" content="<?=$rows["description"];?>"/>
		<meta property="og:type" content="website"/>
		<meta property="og:site_name" content="<?=$rows["conpany"];?>" />
		<meta property="og:image" content="https://<?=$_SERVER['HTTP_HOST']?>/admin/goods_pic/<?=$rows["share_pic"]; ?>"/>
		<link rel="image_src" href="https://<?=$_SERVER['HTTP_HOST']?>/admin/goods_pic/<?=$rows["share_pic"]; ?>" />	
		<title><?=$rows["conpany"];?></title>
        <link rel="icon" type="image/x-icon" href="./assets/favicon.svg" />

        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
        <!-- AOS core CSS-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet" />
        <!-- Owl Carousel CSS-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" rel="stylesheet" />
        
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
            <div class="container px-4 px-lg-5">
                <div class="d-flex justify-content-center align-items-center w-100 text-white">
                    <marquee width="100%" scrollamount="5" behavior="slice"><img class="pe-3" src="./assets/img/ico_arrow.png"><?=$rows["runtxt"];?></marquee>    
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container-fluid px-0">
                <div class="d-flex justify-content-center">
                    <div class="kv-img text-center">
                        <img class="img-fluid" src="./assets/img/bg_kv.jpg">
                    </div>
                    <div class="kv-caption row gx-3 gx-lg-5">
                        <div class="col-7" data-aos="fade-right">
                            <img class="img-fluid px-1 px-lg-4" src="./assets/img/kv_left.png"></img>
                        </div>
                        <div class="col-5">
                            <img class="img-fluid" src="./assets/img/kv_item.png" data-aos="fade-left" data-aos-delay="150" data-aos-duration="800">
                        </div>
                    </div>
                </div>
            </div>
            
        </header>
        <!-- About-->
        <section class="about-section" id="about">
            <div class="container-fluid px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center align-items-center">
                    <div class="col-lg-7" data-aos="zoom-in-up" data-aos-easing="ease-out-cubic" data-aos-duration="1000">
                        <img class="img-fluid mt-n7" src="./assets/img/img_products.png" alt="..." />
                    </div>
                    <div class="col-lg-5 text-white" data-aos="zoom-in" data-aos-delay="450" data-aos-duration="800">
                        <h2 class="fw-bold text-warning mb-3 pt-5">Retra天然食品取材全世界</h2>
                        <h4 class="mb-3">一杯飲料 ， 每天兩次 ， 令人難以置信的結果</h4>
                        <p>
                            Retra天然食品取材全世界，生產於美國德州。除部分地區因
                            無有機認證外, 其它全部原材料選取有機認證原料，無化學
                            添加。得益於美國高端的提取技術,Retra營養粉 Vi-Now富
                            含120種以上人體需要的營養元素, 小分子結構容易被人體
                            吸收。
                        </p>
                        <p>
                            越來越多的人們受益於Retra食品, 他們有豐富的營養學和
                            醫學知識，對業界的產品及趨勢有著深厚的了解；他們有靈
                            活的產品推廣經驗，為團隊發展和建設不遺餘力；他們有把
                            健康的使者推廣到世界千家萬戶的勇氣和愛心。
                            無論您想自己使用Retra產品，還是和他們一樣成為Retra
                            之家的一員, 都歡迎您和他們取得聯繫。
                        </p>
                    </div>
                </div>
            </div>
        </section>



        <!-- 20231213 設計變更修改 -->
        <!-- 20231213 設計變更修改 -->
        <!-- 20231213 設計變更修改 -->
        <!-- gallery-->
        
        <section class="gallery-section" id="gallery" data-aos="zoom-in" data-aos-easing="ease-in-out" data-aos-anchor="#about" data-aos-anchor-placement="bottom-bottom">
            <div class="container-fluid px-4 px-lg-5">
                <div class="row justify-content-center align-items-center gx-4 gx-lg-5 px-3 py-5 bg-white">
                    <div class="col-12 col-md-3 col-lg-auto py-1">
                        <h2 class="fw-bold text-dark mb-2 mb-md-4">活動相簿</h2>
                        <div class="d-flex align-items-center">
                            <div id="owl-gallery-dots" class="owl-dots">
                               
                                 <?PHP 
								$banner_o=0;
								$sql_banner="
								SELECT * FROM `album` 
								WHERE `album_hide`='1'
								ORDER BY `album_sort` ,`album_no` DESC 
								";//DESC是遞減
								$result_banner = $db->prepare("$sql_banner");//防sql注入攻擊
								$result_banner->execute();
								$total_banner=$result_banner->rowCount();//算出總筆數
								//列出內容
								if($total_banner<>0){//如果判斷結果有值才跑回圈抓資
								   while($rows_banner = $result_banner->fetch(PDO::FETCH_ASSOC))
								{ 
								?>
									<button role="button" class="owl-dot <?PHP if($banner_o==0) echo ' active';?>"><span></span></button>
								 <?PHP
								$banner_o=$banner_o+1;//判斷第一次要給li style值
								}}
								?>  
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-9 col-lg col-xxl-9 py-1">
                        <div id="gallery-owl-carousel" class="owl-carousel owl-theme owl-loaded">
                            <div class="owl-stage-outer">
                                <div class="owl-stage">
<?PHP 
$album_o=0;
$sql_album="
SELECT * FROM `album` 
WHERE `album_hide`='1'
ORDER BY `album_sort` ,`album_no` DESC 
";//DESC是遞減
$result_album = $db->prepare("$sql_album");//防sql注入攻擊
$result_album->execute();
$total_album=$result_album->rowCount();//算出總筆數
//列出內容
if($total_album<>0){//如果判斷結果有值才跑回圈抓資
   while($rows_album = $result_album->fetch(PDO::FETCH_ASSOC))
{ 
$album_o=$album_o+1;//判斷第一次要給li style值
?> 
                                    <div class="owl-item" data-aos="fade-left" data-aos-easing="ease-in-out" data-aos-delay="150" data-aos-duration="1500" data-aos-anchor="#gallery">
                                        <div class="card p-3">
                                            <div class="card-img">
                                                <a class="hover-img" role="button" data-bs-toggle="modal" data-bs-target="#galleryModal_<?=$album_o?>">
                                                    <img class="card-img-top" src="./admin/goods_pic/<?=$rows_album["album_pic_b"]; ?>" alt="<?=$rows_album["album_title"]; ?>">
                                                </a>
                                            </div>
                                            <div class="card-body px-0">
                                                <a role="button" data-bs-toggle="modal" data-bs-target="#galleryModal_<?=$album_o?>">
                                                    <h4 class="tag mb-0"><?=$rows_album["album_title"]; ?></h4>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
<?PHP
}}
?>									 
                                  
                                   
                                  
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- 20231213 設計變更修改 -->
        <!-- 20231213 設計變更修改 -->
        <!-- 20231213 設計變更修改 -->



        <!-- Projects-->
        <section class="projects-section bg-light" id="projects">
            <div class="container px-4 px-lg-5">
                <!-- Project Row-->
                <div class="row gx-0 mb-4 mb-lg-5 align-items-center">
                    <div class="col-lg-auto col-12" data-aos="zoom-in-right" data-aos-delay="300" data-aos-anchor="#gallery" data-aos-anchor-placement="top-center"><!-- 20231213 新增錨點 -->
                        <div class="d-flex flex-column">
                            <div class="d-flex flex-row align-items-center w-100 min-h-86 rounded-pill mb-4 px-4 py-4 bg-primary-gradient">
                                <h4 class="text-white mb-0 ps-3"><b>R-Zip能量減脂蔬果粉</b></h4>
                            </div>
                            <div class="d-flex flex-row align-items-center w-100 rounded-pill mb-4 px-4 py-3 bg-white borders">
                                <img class="float-start h-100" src="./assets/img/ico_check.png">
                                <h5 class="mb-0">純素飲品</h5>
                            </div>
                            <div class="d-flex flex-row align-items-center w-100 rounded-pill mb-4 px-4 py-3 bg-white borders">
                                <img class="float-start h-100" src="./assets/img/ico_check.png">
                                <h5 class="mb-0">健康 . 燃脂 . 能量</h5>
                            </div>
                            <div class="d-flex flex-row  align-items-start w-100 rounded-pill mb-4 px-4 py-3 bg-white borders">
                                <img class="float-start h-100" src="./assets/img/ico_check.png">
                                <h5 class="mb-0">有機米糠 + 斯蘭達科 (Slendacor) <br> +更多生命支持基礎營養</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg col-12 border-md-end p-md-5 p-0" data-aos="zoom-in-up" data-aos-delay="450" data-aos-anchor="#gallery" data-aos-anchor-placement="top-center"><!-- 20231213 新增錨點 -->
                        <div class="row d-flex flex-xl-column flex-row justify-content-center align-items-center gx-3">
                            <div class="col-md-12 col-4 text-center my-4">
                                <img class="img-fluid mb-4" src="./assets/img/ico_badge01.png">
                                <h4><b>素食</b></h4>
                            </div>
                            <div class="col-md-12 col-4 text-center my-4">
                                <img class="img-fluid mb-4" src="./assets/img/ico_badge02.png">
                                <h4><b>不含麩質</b></h4>
                            </div>
                            <div class="col-md-12 col-4 text-center my-4">
                                <img class="img-fluid mb-4" src="./assets/img/ico_badge03.png">
                                <h4><b>不含大豆</b></h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg col-12 border-md-end p-md-5 p-0" data-aos="zoom-in-up" data-aos-delay="600" data-aos-anchor="#gallery" data-aos-anchor-placement="top-center"><!-- 20231213 新增錨點 -->
                        <div class="row d-flex flex-xl-column flex-row justify-content-center align-items-center gx-3">
                            <div class="col-md-12 col-4 text-center my-4">
                                <img class="img-fluid mb-4" src="./assets/img/ico_badge04.png">
                                <h4><b>不含乳製品</b></h4>
                            </div>
                            <div class="col-md-12 col-4 text-center my-4">
                                <img class="img-fluid mb-4" src="./assets/img/ico_badge05.png">
                                <h4><b>非基因<br>改造產品</b></h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg col-12 p-md-5 p-0" data-aos="zoom-in-up" data-aos-delay="750" data-aos-anchor="#gallery" data-aos-anchor-placement="top-center"><!-- 20231213 新增錨點 -->
                        <div class="row d-flex flex-xl-column flex-row justify-content-center align-items-center gx-3">
                            <div class="col-md-12 col-4 text-center my-4">
                                <img class="img-fluid mb-4" src="./assets/img/ico_badge06.png">
                                <h4><b>優良生產<br>標準廠商</b></h4>
                            </div>
                            <div class="col-md-12 col-4 text-center my-4">
                                <img class="img-fluid mb-4" src="./assets/img/ico_badge07.png">
                                <h4><b>美國製造</b></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- OurTeam-->
       <section class="teams-section" id="teams" data-aos="zoom-in" data-aos-easing="ease-in-out" data-aos-delay="300" data-aos-anchor-placement="top-center">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5">
                    <div class="col-md-3 col-12 py-1">
                        <h3 style="color: #2EA6DF;">Our Team</h3>
                        <h2 class="text-dark mb-md-3 mb-2"><b>我們的團隊</b></h2>
                        <div class="d-flex align-items-center">
                            <div id="owl-custom-dots" class="owl-dots">
                               <?PHP 
								$banner_o=0;
								$sql_banner="
								SELECT * FROM `banner` 
								WHERE `banner_hide`='1'
								ORDER BY `banner_sort`  
								";//DESC是遞減
								$result_banner = $db->prepare("$sql_banner");//防sql注入攻擊
								$result_banner->execute();
								$total_banner=$result_banner->rowCount();//算出總筆數
								//列出內容
								if($total_banner<>0){//如果判斷結果有值才跑回圈抓資
								   while($rows_banner = $result_banner->fetch(PDO::FETCH_ASSOC))
								{ 
								?>
									<button role="button" class="owl-dot <?PHP if($banner_o==0) echo ' active';?>"><span></span></button>
								 <?PHP
								$banner_o=$banner_o+1;//判斷第一次要給li style值
								}}
								?>  
                                
								
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9 col-12 py-1">
                        <div id="teams-owl-carousel" class="owl-carousel owl-theme owl-loaded">
                            <div class="owl-stage-outer">
                                <div class="owl-stage">
                               <?PHP 
$banner_o=0;
$sql_banner="
SELECT * FROM `banner` 
WHERE `banner_hide`='1'
ORDER BY `banner_sort` ,`banner_date` DESC 
";//DESC是遞減
$result_banner = $db->prepare("$sql_banner");//防sql注入攻擊
$result_banner->execute();
$total_banner=$result_banner->rowCount();//算出總筆數
//列出內容
if($total_banner<>0){//如果判斷結果有值才跑回圈抓資
   while($rows_banner = $result_banner->fetch(PDO::FETCH_ASSOC))
{ 
$banner_o=$banner_o+1;//判斷第一次要給li style值
?>    
                                    <div class="owl-item" data-aos="fade-left" data-aos-easing="ease-in-out" data-aos-delay="150" data-aos-duration="1500" data-aos-anchor=".sec04">
                                        <div class="card p-0">
                                            <div class="card-img">
                                                <a class="hover-img" href="<?=$rows_banner["banner_link"]?>" role="button" target="_blank">
                                                    <img class="card-img-top" src="./admin/goods_pic/<?=$rows_banner["banner_pic_b"]; ?>" alt="person 01">
                                                </a>
                                            </div>
                                            <div class="card-body px-0">
                                                <h4 class="tag"><?=$rows_banner["banner_title"]; ?></h4>
                                                <a class="rounded-pill px-4 py-3 bg-primary-gradient text-white" href="<?=$rows_banner["banner_link"]?>" role="button" target="_blank"><b>我要購買</b></a>
                                            </div>
                                        </div>
                                    </div>
  <?PHP
}}
?>                                  
                                    
                                    
									
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Side Social Link -->
        <aside class="sidebar">
            <ul class="list-unstyled">
                <li data-aos="zoom-in-up" data-aos-easing="ease-in-out" data-aos-delay="150" data-aos-duration="1500" data-aos-anchor=".navbar"><a href="https://line.me/ti/p/@654dafzk" role="button" target="_blank"><img src="./assets/img/ic_line.png" srcset="./assets/img/ic_line.svg" class="side_ic ic_line"></a></li>
            </ul>
        </aside>
        <!-- Footer-->
        <footer class="footer bg-primary-gradient text-center">
            <div class="container px-4 px-lg-5">
                <div class="d-flex flex-md-row flex-column justify-content-center align-items-center">
                    <div class="mb-2 pe-md-4 pe-0">
                        <img class="img-fluid pe-2" src="./assets/img/ico_marker.png">
                        <a class="text-white" href="https://maps.app.goo.gl/HHevMhj9ebLdR3qp6" role="button" target="_blank">台北市文山區育英街2巷1弄11號</a>
                    </div>
                    <span class="mb-2">Copyright &copy; 2023 活力學苑 著作權所有</span>
                </div>
                
            </div>
        </footer>
        
<?PHP 
$album_o=0;
$sql_album="
SELECT * FROM `album` 
WHERE `album_hide`='1'
ORDER BY `album_sort` ,`album_no` DESC 
";//DESC是遞減
$result_album = $db->prepare("$sql_album");//防sql注入攻擊
$result_album->execute();
$total_album=$result_album->rowCount();//算出總筆數
//列出內容
if($total_album<>0){//如果判斷結果有值才跑回圈抓資
   while($rows_album = $result_album->fetch(PDO::FETCH_ASSOC))
{ 
$album_o=$album_o+1;//判斷第一次要給li style值
?> 
<!-- Modal -->
<div class="modal fade" id="galleryModal_<?=$album_o?>" tabindex="-1" aria-labelledby="galleryModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-xl">
		<div class="modal-content">
			<div class="modal-body">
				<div class="container-fluid">
					<div class="row">
						<h2 class="text-dark text-center py-3 py-lg-5"><?=$rows_album["album_title"]; ?></h2>
						<div class="col-md-12 mb-3" id="img-responsive">
							<?=$rows_album["album_content"]; ?>
						</div>
						<?PHP
$uppics_class = 'album';//所屬類別						
$album_no=$rows_album["album_no"];//no
	
$sql_uppics="
SELECT * FROM `uppics` 
WHERE `uppics_class` =:uppics_class && `uppics_ing` =:album_no
ORDER BY  `uppics_sort` ASC 
";//sql語法


$result_uppics = $db->prepare("$sql_uppics");//防sql注入攻擊
// 數值PDO::PARAM_INT  字串PDO::PARAM_STR
$result_uppics->bindValue(':album_no', $album_no, PDO::PARAM_INT);
$result_uppics->bindValue(':uppics_class', $uppics_class, PDO::PARAM_STR);
$result_uppics->execute();
$counts_uppics=$result_uppics->rowCount();//算出總筆數

if($counts_uppics<>0){//如果判斷結果有值才跑回圈抓資料
   while($rows_uppics = $result_uppics->fetch(PDO::FETCH_ASSOC)) {
$no_id=$no_id+1;
?>	
						
						<div class="col-md-6 mb-3">
							<img class="img-fluid" src="./admin/goods_pic/<?=$rows_uppics["uppics_pic_b"]; ?>" width="100%" alt="">
						</div>
<?PHP
}
?>	
<?PHP
}
?>							
					</div>
				</div>
			</div>
			<div class="modal-footer justify-content-center border-0">
				<button type="button" class="btn btn-secondary rounded-pill" data-bs-dismiss="modal"><h5 class="fw-semibold mb-0 px-4">關閉</h5></button>
			</div>
		</div>
	</div>
</div>
<!-- Modal -->     
<?PHP
}}
?>	


        <!-- Jquery JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- AOS core JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
        <!-- Owl Carousel JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
        <!-- Iconify core JavaScript -->
        <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>
        <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
        <!-- Core theme JS-->
        <script>
            $(document).ready(function(){
                AOS.init({
                    offset: 120,
                    once: true,
                });



                // 20231213 設計變更修改
                // 20231213 設計變更修改
                // 20231213 設計變更修改
                var owl1 = $('#gallery-owl-carousel');
                owl1.owlCarousel({
                    loop: false, // 是否循環播放
                    nav: true, // 顯示控制箭頭
                    rewind: true,
                    navText: ['<iconify-icon icon="iconamoon:arrow-left-2-light" style="color: #b5b5b6;" width="64"></iconify-icon>','<iconify-icon icon="iconamoon:arrow-right-2-light" style="color: #b5b5b6;" width="64"></iconify-icon>'],
                    dotsEach: true, // 顯示點點
                    dotsContainer: '#owl-gallery-dots',
                    autoplay: true,
                    autoplaySpeed: 500,
                    lazyLoad: true,
                    responsive:{
                        0:{
                            items:1, // 螢幕大小為 0~575 顯示 1 個項目
                            stagePadding: 20, // 物件內距
                            margin: 25, // 物件外距
                        },
                        576: {
                            items: 2, // 螢幕大小為 576~767 顯示 2 個項目
                            stagePadding: 20, // 物件內距
                            margin: 25, // 物件外距   
                        },
                        768:{
                            items:2, // 螢幕大小為 768~991 顯示 3 個項目
                            stagePadding: 30, // 物件內距
                            margin: 25, // 物件外距
                        },
                        992:{
                            items:3, // 螢幕大小為 992 以上 顯示 5 個項目
                            stagePadding: 30, // 物件內距
                            margin: 35, // 物件外距
                        },
                        1600:{
                            items:4, // 螢幕大小為 992 以上 顯示 5 個項目
                            stagePadding: 40, // 物件內距
                            margin: 40, // 物件外距
                        }
                    }
                });
    
                // Go to the next item
                $('.owl-control-next').click(function() {
                    owl1.trigger('next.owl.carousel');
                })
                // Go to the previous item
                $('.owl-control-prev').click(function() {
                    // With optional speed parameter
                    // Parameters has to be in square bracket '[]'
                    owl1.trigger('prev.owl.carousel', [300]);
                })


                var owl2 = $('#teams-owl-carousel');
                owl2.owlCarousel({

                    loop: false, // 是否循環播放
                    nav: true, // 顯示控制箭頭
                    rewind: true,
                    navText: ['<iconify-icon icon="iconamoon:arrow-left-2-light" style="color: #b5b5b6;" width="64"></iconify-icon>','<iconify-icon icon="iconamoon:arrow-right-2-light" style="color: #b5b5b6;" width="64"></iconify-icon>'],
                    dotsEach: true, // 顯示點點
                    dotsContainer: '#owl-team-dots',
                    autoplay: true,
                    autoplaySpeed: 500,
                    lazyLoad: true,
                    responsive:{
                        0:{
                            items:1, // 螢幕大小為 0~575 顯示 1 個項目
                            stagePadding: 20, // 物件內距
                            margin: 25, // 物件外距
                        },
                        576: {
                            items: 2, // 螢幕大小為 576~767 顯示 2 個項目
                            stagePadding: 0, // 物件內距
                            margin: 25, // 物件外距   
                        },
                        768:{
                            items:3, // 螢幕大小為 768~991 顯示 3 個項目
                            stagePadding: 0, // 物件內距
                            margin: 35, // 物件外距
                        },
                        1200:{
                            items:4, // 螢幕大小為 992 以上 顯示 5 個項目
                            stagePadding: 0, // 物件內距
                            margin: 35, // 物件外距
                        }
                    }
                });
    
                // Go to the next item
                $('.owl-control-next').click(function() {
                    owl2.trigger('next.owl.carousel');
                })
                // Go to the previous item
                $('.owl-control-prev').click(function() {
                    // With optional speed parameter
                    // Parameters has to be in square bracket '[]'
                    owl2.trigger('prev.owl.carousel', [300]);
                })

                // 20231213 設計變更修改
                // 20231213 設計變更修改
                // 20231213 設計變更修改
    
            });
        </script>
<!--變更圖片和frame ID成為響應式大小-->
<script type="text/javascript">
	$(document).ready(function() {
		$("#img-responsive img")
			.addClass("img-responsive")//增加bootstrap內健RWD寬度
			.css("height",'');//高度清除
		
	});
</script>
<!--變更圖片和frame ID成為響應式大小-->
<style>
#img-responsive,#img-responsive>img,#img-responsive a>img{display:block;max-width:100%;height:auto}
#img-responsive iframe {  width: 100%; height: auto; aspect-ratio: 16/9;}/*youtube崁入自動100%*/
</style>
    </body>
</html>
