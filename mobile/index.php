<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

include_once(G5_THEME_MOBILE_PATH.'/head.php');
?>

<!-- 배너 최신글 -->
<?php
// 이 함수가 바로 최신글을 추출하는 역할을 합니다.
// 사용방법 : latest(스킨, 게시판아이디, 출력라인, 글자수);
// 테마의 스킨을 사용하려면 theme/basic 과 같이 지정
echo latest('theme/banner', 'banner', 4, 33);
?>
   <div id="sh_wrapper">
        <!-- sh_container [s] -->
        <main id="sh_container">
            <!-- sh_container_wrapper [s] -->
            <div id="sh_container_wrapper">

                <!-- sh_section [s] -->
                <section id="sh_section">
                    <div>
                    <img src="<?php echo G5_THEME_IMG_URL ?>/mobile/main/main01.jpg" alt="">
                    <div class="main_txt">
                        <p>함께하며 희망의 빛이 되는 복지관<br>안성시노인복지관</p>
                        안성시노인복지관 홈페이지에 방문해 주신 여러분을 진심으로 환영합니다.
                    </div>
                    </div>
                    <!-- inc01 [s] -->
                    <section id="section01">
                        <article id="inc01">
                            <div class="top_box">
                                <div class="box_inner">
                                    <div class="left pl"><p>안성시노인복지관은,</p>
                                        안성시노인복지관은 대한불교조계종사회복지재단의 설립이념과 사회복지 철학을 바탕으로 지역사회를 위한 자비실천을 하고 있습니다.
                                        안성시노인복지관은 어르신 중심의 사회복지서비스를 제공하고, 지역사회의 자원연계를 통해 어르신들이 건강하고 행복한 노년 생활을 지원하며, 더불어 사는 풍요로운 안성시민을 위한 안성맞춤 노인복지서비스 실천에 정성을 다하겠습니다.안성시노인복지관은 언제나 활기차고 즐거운 어르신이 주인공이 되는 따뜻한 지역공동체를 만들어가기 위해 세대통합 및 어르신 맞춤돌봄서비스는 물론 복지생태계 구축으로 안성맞춤 노인복지를 구현하겠습니다.
                                        <div class="more"><a href="">복지관 소개 <i data-feather="chevron-right"></i></a></div>
                                    </div>
                                    <div class="right">
                                        <div class="ko_tit">    
                                            <p class="p"><span>민원 해결</span>을 도와드립니다.</p>
                                            여러분의 민원업무를 친절하게 해결 해 드리겠습니다.
                                        </div>
                                        <div class="call_num">
                                            <div class="call_left">
                                                <p>대표전화</p>
                                                <div class="icon"><img src="<?php echo G5_THEME_IMG_URL ?>/mobile/main/inc01/icon01.png" alt="아이콘"></div>
                                            </div>
                                            <div class="call_right">
                                                <p>031)674-0794~6 </p>    
                                            </div>
                                        </div>
                                        <div class="call_txt">
                                            <ul>
                                                <li>
                                                    <div class="day">월-금</div>
                                                    AM 09:00 - PM 18:00 
                                                </li>
                                                <li>
                                                    <div class="day">주말 및 공휴일</div>
                                                    휴무 
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="bot_box">
                                <ul>
                                    <li>
                                        <div class="img_box"><a href=""><img src="<?php echo G5_THEME_IMG_URL ?>/mobile/main/inc01/bt_icon01.png" alt="아이콘01"></a></div>
                                        <p>이용안내</p>
                                    </li>
                                    <li>
                                        <div class="img_box"><a href=""><img src="<?php echo G5_THEME_IMG_URL ?>/mobile/main/inc01/bt_icon02.png" alt="아이콘02"></a></div>
                                        <p>공지사항</p>
                                    </li>
                                    <li>
                                        <div class="img_box"><a href=""><img src="<?php echo G5_THEME_IMG_URL ?>/mobile/main/inc01/bt_icon03.png" alt="아이콘03"></a></div>
                                        <p>후원신청</p>
                                    </li>
                                    <li>
                                        <div class="img_box"><a href=""><img src="<?php echo G5_THEME_IMG_URL ?>/mobile/main/inc01/bt_icon04.png" alt="아이콘04"></a></div>
                                        <p>이달의 행사</p>
                                    </li>
                                    <li>
                                        <div class="img_box"><a href=""><img src="<?php echo G5_THEME_IMG_URL ?>/mobile/main/inc01/bt_icon05.png" alt="아이콘05"></a></div>
                                        <p>복지관 소개</p>
                                    </li>
                                </ul>
                            </div>
                        </article>
                    </section>
                    <!-- inc01 [e] -->
                    <!-- inc02 [s] -->
                    <section id="section02">
                        <article id="inc02">
                            <div class="inner">
                                <div class="l_box" data-aos="fade-right">
                                    <div class="latest">
                                        <div class="tit">
                                            <p>복지관 소식</p>
                                            <ul class="late_tabs">
                                                <li class="on" rel="tab1">공지사항</li>
                                                <li rel="tab2">자료실</li>
                                                <li rel="tab3">소식지</li>
                                                <li rel="tab4">행사정보</li>
                                            </ul>
                                            <a href="" class="more"><span class="sound_only">복지관 소식</span><i data-feather="plus"></i></a>
                                        </div>
                                    </div>
                                    <div id="tabs">
                                        <div class="late_box">
                                            <div id="tab1" class="late_cont">
                                                <div class="late">
                                                    <ul class=" n_lt">
                                                        <li class="first">
                                                            <a href="">   
                                                                <div class="lt_cont_f">
                                                                    <p class="cate">공지사항</p>
                                                                    <p class="subj">안성시노인복지관 2025년 8월 업무추진비 사용내역 공개</p>
                                                                    <p class="pc subt">안성시노인복지관 2025년 8월 업무추진비사용내역을 공개합니다.</p>
                                                                    <p class="semi_pc subt">안성시노인복지관 2025년 8월 업무추진비사용내역을 공개합니다.</p>
                                                                    <span class="date">2025.09.02</span>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="">   
                                                                <div class="lt_cont">
                                                                    <p class="subj">안성시안성시노인복지관 2025년 8월 업무추진비 사용내역 공개</p>
                                                                    <span class="date">2024.07.19</span>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="">   
                                                                <div class="lt_cont">
                                                                    <p class="subj">안성시노인복지관 2025년 7월 업무추진비 사용내역 공개</p>
                                                                    <span class="date">2024.07.19</span>
                                                                </div>
                                                                        
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="">   
                                                                <div class="lt_cont">
                                                                    <p class="subj">안성시노인복지관 2025년 6월 업무추진비 사용내역 공개</p>
                                                                    <span class="date">2024.07.19</span>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="">   
                                                                <div class="lt_cont">
                                                                    <p class="subj">안성시노인복지관 2025년 5월 업무추진비 사용내역 공개</p>
                                                                    <span class="date">2024.07.19</span>
                                                                </div>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div id="tab2" class="late_cont">
                                                <div class="late">
                                                    <ul class=" n_lt">
                                                        <li class="first">
                                                            <a href="">   
                                                                <div class="lt_cont_f">
                                                                    <p class="cate">자료실</p>
                                                                    <p class="subj">안성시노인복지관 자료실입니다.</p>
                                                                    <p class="pc subt">안성시노인복지관 자료실입니다.&nbsp;</p>
                                                                    <p class="semi_pc subt">안성시노인복지관 자료실입니다.&nbsp;</p>
                                                                    <span class="date">2024.07.24</span>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="">   
                                                                <div class="lt_cont">
                                                                    <p class="subj">안성시노인복지관 자료실입니다.</p>
                                                                    <span class="date">2024.07.24</span>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="">   
                                                                <div class="lt_cont">
                                                                    <p class="subj">안성시노인복지관 자료실입니다.</p>
                                                                    <span class="date">2024.07.24</span>
                                                                </div>
                                                                        
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="">   
                                                                <div class="lt_cont">
                                                                    <p class="subj">안성시노인복지관 자료실입니다.</p>
                                                                    <span class="date">2024.07.24</span>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="">   
                                                                <div class="lt_cont">
                                                                    <p class="subj">안성시노인복지관 자료실입니다.</p>
                                                                    <span class="date">2024.07.22</span>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="">   
                                                                <div class="lt_cont">
                                                                    <p class="subj">안성시노인복지관 자료실입니다.</p>
                                                                    <span class="date">2024.07.22</span>
                                                                </div>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div id="tab3" class="late_cont">
                                                <div class="late">
                                                    <ul class=" n_lt">
                                                        <li class="first">
                                                            <a href="">   
                                                                <div class="lt_cont_f">
                                                                    <p class="cate">복지관소식</p>
                                                                    <p class="subj">복지관 소식 안내입니다.</p>
                                                                    <p class="pc subt">복지관 소식 안내입니다.</p>
                                                                    <p class="semi_pc subt">복지관 소식 안내입니다.</p>
                                                                    <span class="date">2024.07.24</span>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="">   
                                                                <div class="lt_cont">
                                                                    <p class="subj">복지관 소식 안내입니다.</p>
                                                                    <span class="date">2024.07.24</span>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="">   
                                                                <div class="lt_cont">
                                                                    <p class="subj">복지관 소식 안내입니다.</p>
                                                                    <span class="date">2024.07.24</span>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="">   
                                                                <div class="lt_cont">
                                                                    <p class="subj">복지관 소식 안내입니다.</p>
                                                                    <span class="date">2024.07.24</span>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="">   
                                                                <div class="lt_cont">
                                                                    <p class="subj">복지관 소식 안내입니다.</p>
                                                                    <span class="date">2024.07.24</span>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="">   
                                                                <div class="lt_cont">
                                                                    <p class="subj">복지관 소식 안내입니다.</p>
                                                                    <span class="date">2024.07.24</span>
                                                                </div>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div id="tab4" class="late_cont">
                                                <div class="late">
                                                    <ul class=" n_lt">
                                                        <li class="first">
                                                            <a href="">   
                                                                <div class="lt_cont_f">
                                                                    <p class="cate">행사정보</p>
                                                                    <p class="subj">복지관 행사정보 소식입니다.</p>
                                                                    <p class="pc subt">복지관 행사정보 소식입니다.</p>
                                                                    <p class="semi_pc subt">복지관 행사정보 소식입니다.</p>
                                                                    <span class="date">2024.07.24</span>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="">   
                                                                <div class="lt_cont">
                                                                    <p class="subj">복지관 행사정보 소식입니다.</p>
                                                                    <span class="date">2024.07.24</span>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="">   
                                                                <div class="lt_cont">
                                                                    <p class="subj">복지관 행사정보 소식입니다.</p>
                                                                    <span class="date">2024.07.24</span>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="">   
                                                                <div class="lt_cont">
                                                                    <p class="subj">복지관 행사정보 소식입니다.</p>
                                                                    <span class="date">2024.07.24</span>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="">   
                                                                <div class="lt_cont">
                                                                    <p class="subj">복지관 행사정보 소식입니다.</p>
                                                                    <span class="date">2024.07.24</span>
                                                                </div>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="r_box" data-aos="fade-left">
                                    <div class="tit">
                                        <p>웹진</p>  
                                        <a href="" class="more"><span class="sound_only">웹진</span><i data-feather="plus"></i></a>
                                    </div>
                                    <div class="pop_up">
                                        <div class="arrow_box">
                                            <div class="arrow_btn">
                                                <span class="prev"><i data-feather="chevron-left"></i></span>
                                                <span class="next"><i data-feather="chevron-right"></i></span>
                                            </div>
                                        </div>
                                        <div class="swiper-container pop_silder">
                                            <ul class="swiper-wrapper">
                                                <li class="swiper-slide item">
                                                    <a href="">
                                                        <div class="img"><img src="<?php echo G5_THEME_IMG_URL ?>/mobile/main/inc02/img01.jpg" alt="사랑의 나눔 음악회"></div>
                                                    </a>
                                                </li>
                                                <li class="swiper-slide item">
                                                    <a href="">
                                                        <div class="img"><img src="<?php echo G5_THEME_IMG_URL ?>/mobile/main/inc02/img02.jpg" alt="해바라기 축제"></div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <script>
                            $(function() { 
                                $(".late_cont").hide(); $(".late_cont:first").show();
                                $(".late_tabs li").click(function() {$(".late_tabs li").removeClass("on");
                                $(this).addClass("on"); $(".late_cont").hide() 
                                var activeTab = $(this).attr("rel"); $("#"+activeTab).show()
                            }); });
                            
                            var incSwiper = new Swiper("#inc02 .pop_silder", {
                                loop: true,
                                speed:1000,
                                slidesPerView: "1.5",
                                spaceBetween : 15,
                                slideActiveClass: 'on',
                                centeredSlides: true,
                                autoplay: {
                                    delay: 3500,
                                    disableOnInteraction:false,
                                },
                                navigation: {
                                    nextEl: '#inc02 .next',
                                    prevEl: '#inc02 .prev',
                                },
                                breakpoints:{
                                    1025:{
                                        slidesPerView: "1",
                                        spaceBetween : 0,
                                        centeredSlides: true,
                                    },
                                    769:{
                                        slidesPerView: "3",
                                        spaceBetween : 20,
                                        centeredSlides: true,
                                    },
                                    481:{
                                        slidesPerView: "2",
                                        spaceBetween : 15,
                                        centeredSlides: false,
                                    }
                                }
                            });
                        </script>
                    </section>
                    <!-- inc02 [e] -->
                    <!-- inc04 [s] -->
                    <section id="section04">
                        <article id="inc04">
                            <div class="inner">
                                <div class="tit">
                                    <p>함께 하는 더 좋은 세상</p>
                                    여러분의 작은 손길이 모여 만들어지는 큰 힘, 더 나은 미래를 함께 만들어주세요.
                                </div>
                                <div class="cont_box">
                                    <div class="left box" data-aos="fade-right">
                                        <p>자원봉사</p>
                                        함께하면 행복한 세상을 만들 수 있습니다.<br>
                                        
                                        <div class="more">
                                            <a href="">바로가기 <i data-feather="chevron-right"></i></a>
                                        </div>
                                    </div>
                                    <div class="right box" data-aos="fade-left">
                                        <p>후원안내</p>
                                        나누는 기쁨 작은 실천으로 시작됩니다.<br>
                                        
                                        <div class="more">
                                            <a href="">바로가기 <i data-feather="chevron-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <script>
                            var logoSwiper = new Swiper(".logo_slide", {
                                effect: "horizontal",
                                loop: true,
                                speed: 1000,
                                slidesPerView: 2,
                                spaceBetween: 10,
                                centeredSlides: true,
                                autoplay: {
                                    delay: 3500,
                                    disableOnInteraction: false,
                                },
                                navigation: {
                                    nextEl: '.logo_control .next',
                                    prevEl: '.logo_control .prev',
                                    },
                                pagination: {
                                    el: '.logo_control .pager',
                                    type: 'fraction',
                                    renderFraction: function (currentClass, totalClass) {
                                        return '<span>0</span>' + '<span class="' + currentClass + '"></span>' + ' <span class="slash">/</span> ' + '<span>0</span>' + '<span class="' + totalClass + '"></span>';
                                    },
                                },
                                breakpoints:{
                                    769:{
                                        slidesPerView: 5,
                                        spaceBetween: 20,
                                        centeredSlides: true,
                                    },
                                    481:{
                                        slidesPerView: 3,
                                        spaceBetween: 15,
                                        centeredSlides: true,
                                    }
                                }
                            });
                        </script>
                    </section>
                    <!-- inc04 [e] -->
                </section> 
                <!-- sh_section [e] -->
            </div>
            <!-- sh_container_wrapper [e] --> 
        </main>
        <!-- sh_container [e] -->


    </div>


<?php
include_once(G5_THEME_MOBILE_PATH.'/tail.php');
?>