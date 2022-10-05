<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$latest_skin_url.'/style.css">', 0);
$list_count = (is_array($list) && $list) ? count($list) : 0;
?>


    
    <div class="slider-div">
    <?php for ($i=0; $i<$list_count; $i++) {  ?>
        <div class="latter_list">
            <?php
            if ($list[$i]['icon_secret']) echo "<i class=\"fa fa-lock\" aria-hidden=\"true\"></i><span class=\"sound_only\">비밀글</span> ";

            echo "<a href=\"".get_pretty_url($bo_table, $list[$i]['wr_id'])."\"> ";
            if ($list[$i]['is_notice'])
                echo "<strong>".$list[$i]['subject']."</strong>";
            else
                echo "<h5>".$list[$i]['subject']."</h5>";

            echo "<p>".$list[$i]['wr_content']."</p>";
            echo "</a>";
			
			// if ($list[$i]['icon_hot']) echo "<span class=\"hot_icon\"><i class=\"fa fa-heart\" aria-hidden=\"true\"></i><span class=\"sound_only\">인기글</span></span>";
			// if ($list[$i]['icon_new']) echo "<span class=\"new_icon\">N<span class=\"sound_only\">새글</span></span>";
            // if ($list[$i]['link']['count']) { echo "[{$list[$i]['link']['count']}]"; }
            // if ($list[$i]['file']['count']) { echo "<{$list[$i]['file']['count']}>"; }

            echo $list[$i]['icon_reply']." ";
           	if (isset($list[$i]['icon_file']) && $list[$i]['icon_file']) echo " <i class=\"fa fa-download\" aria-hidden=\"true\"></i>" ;
            if ($list[$i]['icon_link']) echo " <i class=\"fa fa-link\" aria-hidden=\"true\"></i>" ;

            if ($list[$i]['comment_cnt'])  echo "
            <span class=\"lt_cmt\"><span class=\"sound_only\">댓글</span>".$list[$i]['comment_cnt']."</span>";

            ?>
            <div class="lt_info">
				<span class="lt_nick"><?php echo $list[$i]['wr_1'] ?></span>
            	<!-- <span class="lt_date"><?php echo $list[$i]['datetime2'] ?></span>               -->
            </div>
        </div>
    <?php }  ?>
    <?php if ($list_count == 0) { //게시물이 없을 때  ?>
    <li class="empty_li">게시물이 없습니다.</li>
    <?php }  ?>
    </div>
    <a href="<?php echo get_pretty_url($bo_table); ?>" class="lt_more"><span class="sound_only"><?php echo $bo_subject ?></span>더 읽어보기</a>


