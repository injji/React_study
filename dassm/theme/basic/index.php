<?php
if (!defined('_INDEX_')) define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

if(G5_COMMUNITY_USE === false) {
    include_once(G5_THEME_SHOP_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');
?>

<div class="main_visual">

    <div id="main_txt">
        <svg viewBox="0 0 280 300">
            <text x="50%" y="38%" dy=".35em" text-anchor="middle">
                전하지 못한
            </text>
        </svg>

        <svg viewBox="0 0 280 300">
            <text x="50%" y="50%" dy=".35em" text-anchor="middle">
                우리 이야기
            </text>
        </svg>

        <svg viewBox="0 0 280 300">
            <text x="47%" y="62%" dy=".35em" text-anchor="middle">
                다씀: 닿음
            </text>
        </svg>
    </div>

    <div class="p-catchcopy__sub">이제야 전하는 이야기</div>

    <div class="p-scrollDown ">
        <div class="p-scrollDown__bar"></div>
        <p class="p-scrollDown__txt">SCROLL</p>
    </div>

    <script>
        setTimeout(function () {
            $('#main_txt').addClass('is-load');
            $('.p-catchcopy__sub').addClass('is-load');
            $('.p-scrollDown').addClass('is-load');
        }, 3000);
    </script>
</div>

<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />

<div class="latter">
    <h3 class="main_tit">마음을 전하는 편지집</h3>
    <p class="main_t_p">너에게 다가가는 최고의 마음 전달법</p>
    <?php
    echo latest('theme/basic', 'free', 10, 23);
    ?>

</div>

<script>
    $(document).ready(function () {
        $('.slider-div').slick({
            dots: false,
            infinite: true,
            speed: 300,
            slidesToShow: 1,
            centerMode: true,
            variableWidth: true,
            prevArrow: '<button class="slide-arrow prev-arrow"><img src="https://meta0316.cafe24.com/theme/basic/img/nimg/angle-left.svg"></button>',
            nextArrow: '<button class="slide-arrow next-arrow"><img src="https://meta0316.cafe24.com/theme/basic/img/nimg/angle-right.svg"></button>',
            responsive: [{
                    breakpoint: 768,
                    settings: {
                        arrows: true,
                        centerMode: true,
                        centerPadding: '40px',
                        slidesToShow: 3
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        arrows: true,
                        centerMode: true,
                        centerPadding: '40px',
                        slidesToShow: 1
                    }
                }
            ]
        });


    })
</script>

<div class="main_video">
    <h3>
        <img style="max-width: 100%; height: auto;"
            src="https://drive.google.com/uc?export=view&id=1cj27Kna8BnaYuDoFcYUI-yOSItsmx8Ph" />
    </h3>

    <div>
        <h2>다씀:이란?</h2>
        <p>이곳에 다씀에 대한 소개글이 들어갑니다 어쩌구저쩌구이곳에 다씀에 대한 소개글이 들어갑니다 어쩌구저쩌구이곳에 다씀에 대한 소개글이 들어갑니다 어쩌구저쩌구이곳에 다씀에 대한 소개글이 들어갑니다
            어쩌구저쩌구이곳에 다씀에 대한 소개글이 들어갑니다 어쩌구저쩌구이곳에 다씀에 대한 소개글이 들어갑니다 어쩌구저쩌구이곳에 다씀에 대한 소개글이 들어갑니다 어쩌구저쩌구이곳에 다씀에 대한 소개글이
            들어갑니다 어쩌구저쩌구</p>

        <a href="https://meta0316.cafe24.com/page/about.php">다씀: 자세히 알아보기</a>
    </div>

</div>


<div class="mid_banner">
    <div class="per60">
        <h3>
            <span>[공지]</span> 익명의 편지가 도착했습니다.
        </h3>

        <p>
            인천 지역을 중심으로 누군가의 익명의 편지를 직접 전달하고 간단한 인터뷰를 요청하고자 합니다.
            원활한 앱 제작을 위한 인터뷰이니 많은 참여 부탁드리며 참여하신 분들중 원하시는 분들에게 소정의 선물을 드릴 예정입니다. <br><br>

            그 외의 편지 내용은 다씀:의 앱에서 보실 수 있습니다. 절대 익명을 요청한 편지의 발신자는 공개되지 않으며 앱의 특성인만큼 양해부탁드립니다.
            편지 내용에 비속어, 욕설, 성희롱 등 상대방을 기분 나쁘게 하는 내용에 대한 법적 절차에 대해서는 다씀:에서 책임지지 않습니다.
        </p>
    </div>

</div>

<div class="notice_main">
    <h3 class="main_tit">공지사항</h3>
    <p class="main_t_p">현재 이벤트 진행 중입니다. 많은 참여 부탁드립니다.</p>
    <div class="notice_list">
        <?php
    echo latest('theme/pic_list', 'notice', 3, 80);
    ?>
    </div>
    
</div>
<?/*

<div class="latest_top_wr">
    <?php
    // 이 함수가 바로 최신글을 추출하는 역할을 합니다.
    // 사용방법 : latest(스킨, 게시판아이디, 출력라인, 글자수);
    // 테마의 스킨을 사용하려면 theme/basic 과 같이 지정
   
	echo latest('theme/pic_list', 'qa', 4, 23);			// 최소설치시 자동생성되는 질문답변게시판
	echo latest('theme/pic_list', 'notice', 4, 23);		// 최소설치시 자동생성되는 공지사항게시판
    ?>
</div>
<div class="latest_wr">
    <!-- 사진 최신글2 { -->
    <?php
    // 이 함수가 바로 최신글을 추출하는 역할을 합니다.
    // 사용방법 : latest(스킨, 게시판아이디, 출력라인, 글자수);
    // 테마의 스킨을 사용하려면 theme/basic 과 같이 지정
    echo latest('theme/pic_block', 'gallery', 4, 23);		// 최소설치시 자동생성되는 갤러리게시판
    ?>
    <!-- } 사진 최신글2 끝 -->
</div>

<div class="latest_wr">
    <!-- 최신글 시작 { -->
    <?php
    //  최신글
    $sql = " select bo_table
                from `{$g5['board_table']}` a left join `{$g5['group_table']}` b on (a.gr_id=b.gr_id)
                where a.bo_device <> 'mobile' ";
    if(!$is_admin)
	$sql .= " and a.bo_use_cert = '' ";
    $sql .= " and a.bo_table not in ('notice', 'gallery') ";     //공지사항과 갤러리 게시판은 제외
    $sql .= " order by b.gr_order, a.bo_order ";
    $result = sql_query($sql);
    for ($i=0; $row=sql_fetch_array($result); $i++) {
		$lt_style = '';
    	if ($i%3 !== 0 ) $lt_style = "margin-left:2%";
    ?>
    <div style="float:left;<?php echo $lt_style ?>" class="lt_wr">
        <?php
        // 이 함수가 바로 최신글을 추출하는 역할을 합니다.
        // 사용방법 : latest(스킨, 게시판아이디, 출력라인, 글자수);
        // 테마의 스킨을 사용하려면 theme/basic 과 같이 지정
        echo latest('theme/basic', $row['bo_table'], 6, 24);
        ?>
    </div>
    <?php
    }
    ?>
    <!-- } 최신글 끝 -->
</div>
*/?>
<?php
include_once(G5_THEME_PATH.'/tail.php');