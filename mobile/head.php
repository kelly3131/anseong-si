<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

include_once(G5_THEME_PATH.'/head.sub.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
include_once(G5_LIB_PATH.'/outlogin.lib.php');
include_once(G5_LIB_PATH.'/poll.lib.php');
include_once(G5_LIB_PATH.'/visit.lib.php');
include_once(G5_LIB_PATH.'/connect.lib.php');
include_once(G5_LIB_PATH.'/popular.lib.php');

?>

 <!-- sh_hd [s] -->
    <header id="sh_hd">
    	<div id="sh_hd_wrapper">
            
            <nav id="shGnb">
                <!-- 로고 -->
                <div class="sh_logo">
                    <a href="index.html"><img src="<?php echo G5_THEME_IMG_URL ?>/mobile/logo.png" alt=""></a>
                </div>
                <!-- 상단메뉴 -->
                <ul class="sh_nav">
                    <li>
                        <a href="sub1.html">복지관소개</a>
                        <ul class="sh_lnb_s">
                            <li><a href="sub1.html">회사소개</a> </li>
                            <li><a href="">법인소개</a> </li>
                            <li><a href="">인사말</a> </li>
                            <li><a href="">미션 및 비전</a> </li>
                            <li><a href="">연혁</a> </li>
                            <li><a href="">조직도</a> </li>
                            <li><a href="">이용안내</a> </li>
                            <li><a href="">시설안내</a> </li>
                            <li><a href="">오시는길</a> </li>
                        </ul>
                    </li>
                    <li>
                        <a href="sub1.html">사업안내</a>
                        <ul class="sh_lnb_s">
                            <li><a href="">운영지원팀</a>
                                <ul class="sh_lnb_3d">
                                    <li><a href=""><i class="fa fa-angle-right" aria-hidden="true"></i>건강한아침천원식당사업</a></li>
                                    <li><a href=""><i class="fa fa-angle-right" aria-hidden="true"></i>인재육성사업</a></li>
                                </ul>
                            </li>
                            <li><a href="">문화건강팀</a>
                                <ul class="sh_lnb_3d">
                                    <li><a href=""><i class="fa fa-angle-right" aria-hidden="true"></i>평생교육사업</a></li>
                                    <li><a href=""><i class="fa fa-angle-right" aria-hidden="true"></i>동아리사업</a></li>
                                    <li><a href=""><i class="fa fa-angle-right" aria-hidden="true"></i>상담사업</a></li>
                                    <li><a href=""><i class="fa fa-angle-right" aria-hidden="true"></i>건강생활지원사업</a></li>
                                    <li><a href=""><i class="fa fa-angle-right" aria-hidden="true"></i>기능회복지원사업</a></li>
                                    <li><a href=""><i class="fa fa-angle-right" aria-hidden="true"></i>노인상담사업</a></li>
                                </ul>
                            </li>
                            <li><a href="">기획홍보팀</a>
                                <ul class="sh_lnb_3d">
                                    <li><a href=""><i class="fa fa-angle-right" aria-hidden="true"></i>홍보사업</a></li>
                                    <li><a href=""><i class="fa fa-angle-right" aria-hidden="true"></i>일반자원봉사사업</a></li>
                                    <li><a href=""><i class="fa fa-angle-right" aria-hidden="true"></i>노인권익증진사업</a></li>
                                    <li><a href=""><i class="fa fa-angle-right" aria-hidden="true"></i>지역복지연계사업</a></li>
                                    <li><a href=""><i class="fa fa-angle-right" aria-hidden="true"></i>지역사회자원개발사업</a></li>
                                    <li><a href=""><i class="fa fa-angle-right" aria-hidden="true"></i>복리후생사업</a></li>
                                </ul>
                            </li>
                            <li><a href="">사례관리팀</a>
                                <ul class="sh_lnb_3d">
                                    <li><a href=""><i class="fa fa-angle-right" aria-hidden="true"></i>사례관리</a></li>
                                    <li><a href=""><i class="fa fa-angle-right" aria-hidden="true"></i>재가복지사업</a></li>
                                    <li><a href=""><i class="fa fa-angle-right" aria-hidden="true"></i>경로식당 무료급식사업</a></li>
                                    <li><a href=""><i class="fa fa-angle-right" aria-hidden="true"></i>식사배달지원사업</a></li>
                                    <li><a href=""><i class="fa fa-angle-right" aria-hidden="true"></i>이동세탁서비스사업</a></li>
                                </ul>
                            </li>
                            <li><a href="">맞춤돌봄팀</a>
                                <ul class="sh_lnb_3d">
                                    <li><a href=""><i class="fa fa-angle-right" aria-hidden="true"></i>노인맞춤돌봄서비스사업</a></li>
                                    <li><a href=""><i class="fa fa-angle-right" aria-hidden="true"></i>노인맞춤돌봄특화사업</a></li>
                                    <li><a href=""><i class="fa fa-angle-right" aria-hidden="true"></i>응급안전안심서비스사업</a></li>
                                </ul>
                            </li>
                            <li><a href="">사회참여팀</a>
                                <ul class="sh_lnb_3d">
                                    <li><a href=""><i class="fa fa-angle-right" aria-hidden="true"></i>자원봉사</a></li>
                                    <li><a href=""><i class="fa fa-angle-right" aria-hidden="true"></i>노인일자리</a></li>
                                    <li><a href=""><i class="fa fa-angle-right" aria-hidden="true"></i>사회활동지원</a></li>
                                </ul>
                            </li>
                            <!-- <li><a href="">건강한아침천원식당사업</a> </li>
                            <li><a href="">인재육성사업</a> </li>
                            <li><a href="">평생교육사업</a> </li>
                            <li><a href="">동아리사업</a> </li>
                            <li><a href="">상담사업</a> </li>
                            <li><a href="">건강생활지원사업</a> </li>
                            <li><a href="">기능회복지원사업</a> </li>
                            <li><a href="">노인상담사업</a> </li>
                            <li><a href="">홍보사업</a> </li>
                            <li><a href="">일반자원봉사사업</a> </li>
                            <li><a href="">노인권익증진사업</a> </li>
                            <li><a href="">지역복지연계사업</a> </li>
                            <li><a href="">지역사회자원개발사업</a> </li>
                            <li><a href="">복리후생사업</a> </li>
                            <li><a href="">사례관리</a> </li>
                            <li><a href="">재가복지사업</a> </li>
                            <li><a href="">경로식당 무료급식사업</a> </li>
                            <li><a href="">식사배달지원사업</a> </li>
                            <li><a href="">이동세탁서비스사업</a> </li>
                            <li><a href="">노인맞춤돌봄서비스사업</a> </li>
                            <li><a href="">노인맞춤돌봄특화사업</a> </li>
                            <li><a href="">응급안전안심서비스사업</a> </li>
                            <li><a href="">노인자원봉사사업</a> </li>
                            <li><a href="">노인일자리및사회활동지원사업</a> </li> -->
                        </ul>
                    </li>
                    <li>
                        <a href="sub1.html">후원안내</a>
                        <ul class="sh_lnb_s">
                            <li><a href="">후원안내</a> </li>
                            <li><a href="">후원신청</a> </li>
                            <li><a href="">후원소식</a> </li>
                        </ul>
                    </li>
                    <li>
                        <a href="sub1.html">봉사안내</a>
                        <ul class="sh_lnb_s">
                            <li><a href="">자원봉사안내</a> </li>
                            <li><a href="">자원봉사신청</a> </li>
                        </ul>
                    </li>
                    <li>
                        <a href="sub1.html">알림마당</a>
                        <ul class="sh_lnb_s">
                            <li><a href="">공지사항</a> </li>
                            <li><a href="">채용안내</a> </li>
                            <li><a href="">이달의행사</a> </li>
                            <li><a href="">이달의식단</a> </li>
                            <li><a href="">자료실</a> </li>
                            <li><a href="">복지관소식</a> </li>
                            <li><a href="">언론보도</a> </li>
                            <li><a href="">자유게시판</a> </li>
                        </ul>
                    </li>
                    <li>
                        <a href="sub1.html">복지관이야기</a>
                        <ul class="sh_lnb_s">
                            <li><a href="">복지관 이야기</a> </li>
                        </ul>
                    </li>
                </ul>
               
            </nav>	

            <!-- 반응형메뉴 [s] -->
            <div id="topmenuM">
                <h1 id="m_logo"><a href="index.html"><img src="<?php echo G5_THEME_IMG_URL ?>/mobile/common/logo.png" alt="Sample" /></a></h1>
                <!-- 메뉴 버튼 -->
                <div id="m_navBtn"><span></span></div>
                <!-- 오픈 메뉴 -->
                <div id="navWrap">
                    <div class="inner">
                        <ul class="m_lnb">
                            <li>
                                <button class="m_bmenu" type="button">회사소개</button>
                                <ul class="m_smenu">
                                    <li><a href="sub1.html">회사소개</a> </li>
                                    <li><a href="">소분류</a> </li>
                                    <li><a href="">소분류</a> </li>
                                </ul>
                            </li>
                            <li>
                                <button class="m_bmenu" type="button">사업안내</button>
                                <ul class="m_smenu">
                                    <li><a href="">운영지원팀</a>
                                        <ul class="m_3dmenu">
                                            <li><a href="">시설관리</a></li>
                                            <li><a href="">차량운행</a></li>
                                            <li><a href="">회계관리</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="">문화건강팀</a>
                                        <ul class="m_3dmenu">
                                            <li><a href="">여가문화프로그램</a></li>
                                            <li><a href="">건강증진프로그램</a></li>
                                            <li><a href="">평생교육</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="">기획홍보팀</a>
                                        <ul class="m_3dmenu">
                                            <li><a href="">기획조정</a></li>
                                            <li><a href="">홍보마케팅</a></li>
                                            <li><a href="">자원개발</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="">사례관리팀</a>
                                        <ul class="m_3dmenu">
                                            <li><a href="">통합사례관리</a></li>
                                            <li><a href="">상담지원</a></li>
                                            <li><a href="">복지연계</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="">맞춤돌봄팀</a>
                                        <ul class="m_3dmenu">
                                            <li><a href="">노인맞춤돌봄서비스</a></li>
                                            <li><a href="">재가복지서비스</a></li>
                                            <li><a href="">응급안전서비스</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="">사회참여팀</a>
                                        <ul class="m_3dmenu">
                                            <li><a href="">자원봉사</a></li>
                                            <li><a href="">노인일자리</a></li>
                                            <li><a href="">사회활동지원</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <button class="m_bmenu" type="button">서비스 분야</button>
                                <ul class="m_smenu">
                                    <li><a href="">소분류</a> </li>
                                    <li><a href="">소분류</a> </li>
                                    <li><a href="">소분류</a> </li>
                                </ul>
                            </li>
                            <li>
                                <button class="m_bmenu" type="button">고객센터</button>
                                <ul class="m_smenu">
                                    <li><a href="">소분류</a> </li>
                                    <li><a href="">소분류</a> </li>
                                    <li><a href="">소분류</a> </li>
                                </ul>
                            </li>
                        </ul> 
                    </div>
                </div>
            </div>
            <!-- 반응형메뉴 [e] -->
        </div>           
    </header>
    <!-- sh_hd [e] -->

<script>
$(document).ready(function(){
    // 모바일 메뉴 3depth 토글 기능 추가
    $(".m_smenu > li > a").click(function(e){
        var $subMenu = $(this).siblings('.m_3dmenu');
        if($subMenu.length > 0) {
            e.preventDefault();
            $subMenu.slideToggle(300);
            $(this).toggleClass('active');
        }
    });
    
    // PC 메뉴 호버 기능 - 개별 메뉴만 작동
    $(".sh_nav > li").each(function(){
        var $this = $(this);
        var $subMenu = $this.find('.sh_lnb_s');
        
        $this.hover(
            function(){
                // 다른 모든 메뉴의 서브메뉴 숨김
                $('.sh_nav > li').not(this).find('.sh_lnb_s').hide();
                $('.sh_nav > li').not(this).find('.sh_lnb_3d').hide();
                // 현재 메뉴의 서브메뉴만 표시
                $subMenu.stop(true, true).fadeIn(200);
            },
            function(){
                // 현재 메뉴의 서브메뉴 숨김
                $subMenu.stop(true, true).fadeOut(150);
                $this.find('.sh_lnb_3d').hide();
            }
        );
    });
    
    // PC 메뉴 3depth 호버 기능
    $(".sh_lnb_s > li").each(function(){
        var $this = $(this);
        var $subMenu3d = $this.find('.sh_lnb_3d');
        
        if($subMenu3d.length > 0) {
            $this.hover(
                function(){
                    // 같은 레벨의 다른 3depth 메뉴 숨김
                    $this.siblings().find('.sh_lnb_3d').hide();
                    $subMenu3d.stop(true, true).fadeIn(200);
                },
                function(){
                    $subMenu3d.stop(true, true).fadeOut(150);
                }
            );
        }
    });
    
    // 메뉴 영역을 벗어나면 모든 서브메뉴 숨김
    $('.sh_nav').mouseleave(function(){
        $('.sh_lnb_s, .sh_lnb_3d').stop(true, true).fadeOut(150);
    });
});
</script>

<div id="wrapper">

    <div id="container">
    <?php if (!defined("_INDEX_")) { ?><h2 id="container_title" class="top" title="<?php echo get_text($g5['title']); ?>"><?php echo get_head_title($g5['title']); ?></h2><?php } ?>
