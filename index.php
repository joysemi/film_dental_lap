    <? include_once $_SERVER["DOCUMENT_ROOT"]."/film_dental_lap/inc/start.html" ?>
    <link rel="stylesheet" href="/film_dental_lap/css/main.css">
    <script src="/film_dental_lap/js/contents.js"></script>
    <script src="/film_dental_lap/js/scroll_Quick_menu.js"></script>
</head>
<body>
    <!-- 바로가기메뉴시작 -->
     <ul class="skipmenu_list">
        <li><a href="#mainmenu" class="hidden">메인메뉴바로가기</a></li>
        <li><a href="#contents_wrap" class="hidden">본문영역바로가기</a></li>
        <li><a href="#footer_wrap" class="hidden">하단영역바로가기</a></li>
     </ul>
    <!-- 바로가기메뉴끝 -->
     
    <!-- 상단영역시작 -->
    <? include_once $_SERVER["DOCUMENT_ROOT"]."/film_dental_lap/inc/header.html" ?>
    <!-- 상단영역끝 -->

    <!-- 비쥬얼영역시작 -->
    <div id="visual_wrap">
        <h2 class="hidden">메인비쥬얼영역</h2>
        <div class="visual_video">
            <video id="visualVideo" preload="auto" autoplay muted loop>
                <source src="/film_dental_lap/mobile/images/mobile_video.mp4" type="video/mp4">
            </video>
        </div>
        <p class="visual_des">정확함, 정밀함, 정직함<br>실력으로 증명합니다.</p>               
        <p class="visual_title"><span>Film</span> Dental Lap</p>
    </div>

    <!-- 바로가기메뉴 -->
    <div id="quick_menu">
        <div class="price_icon">
            <p class="quick_menu_text">수가문의</p>
        </div>
        <div class="top_icon">
            <p class="quick_menu_text">TOP</p>
        </div>
    </div>
    <!-- 비쥬얼영역끝 -->

    <!-- 컨텐츠영역시작 -->
    <div id="contents_wrap">
        <h2 class="hidden">컨텐츠영역</h2>

            <!-- 기공소 소개 -->
            <div id="about_us_wrap">
                <section id="about_us">
                    <div class="about_us_txtbox">
                        <h3 class="about_us_title">필름치과기공소</h3>
                        <p class="about_us_des">필름치과기공소는 정품 재료와 정밀한 모델 분석을 바탕으로, 기본에 충실하고 섬세한 기공물 제작을 추구합니다. 치과 의료진과의 지속적인 소통을 통해 합리적인 방향을 함께 고민하며, 환자와 의료진 모두가 만족할 수 있는 결과를 위해 노력하고 있습니다. 필름 기공소는 현재에 안주하지 않습니다. 더 나은 정밀함과 섬세함을 향한 지속적인 연구와 개선을 멈추지 않겠습니다.</p>
                        <button class="btn_view_more btn_about_us"> 
                            <span>VIEW MORE</span>
                            <? include_once $_SERVER["DOCUMENT_ROOT"]."/film_dental_lap/inc/btn_arrow_icon.html" ?>
                        </button>
                    </div>
                    <div class="about_us_img"><!-- CSS background처리 --></div>
                </section>
            </div> 

            <!-- 포트폴리오 -->
            <div id="portfolio_wrap">
                <section id="portfolio">
                    <div class="portfolio_txtbox">
                        <h3 class="portfolio_title">장인의 손에서 완성 되는 정밀 보철물 </h3>
                        <p class="portfolio_des">필름치과기공소는 정확함과 섬세함의 기준입니다.</p>
                    </div>
                    <div class="portfolio_item_box">
                        <ul class="portfolio_item_list">
                            <li>
                                <a href="#;">
                                    <p class="item_img"><img src="/film_dental_lap/images/zirconia_icon.png" alt="지르코니아 아이콘 이미지"></p>
                                    <p class="item_title">지르코니아</p>
                                </a>
                            </li>
                            <li>
                                <a href="#;">
                                    <p class="item_img"><img src="/film_dental_lap/images/digital_icon.png" alt="디지털 아이콘 이미지"></p>
                                    <p class="item_title">디지털</p>
                                </a>
                            </li>
                            <li>
                                <a href="#;">
                                    <p class="item_img"><img src="/film_dental_lap/images/laminate_icon.png" alt="라미네이트 아이콘 이미지"></p>
                                    <p class="item_title">라미네이트</p>
                                </a>
                            </li>
                            <li>
                                <a href="#;">
                                    <p class="item_img"><img src="/film_dental_lap/images/implant_icon.png" alt="임플란트 아이콘 이미지"></p>
                                    <p class="item_title">임플란트</p>
                                </a>
                            </li>
                            <li>
                                <a href="#;">
                                    <p class="item_img"><img src="/film_dental_lap/images/denture_icon.png" alt="덴쳐 아이콘 이미지"></p>
                                    <p class="item_title">덴쳐</p>
                                </a>
                            </li>
                            <li>
                                <a href="#;">
                                    <p class="item_img"><img src="/film_dental_lap/images/PFM_icon.png" alt="PFM 아이콘 이미지"></p>
                                    <p class="item_title">PFM</p>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <button class="btn_view_more btn_portfolio">
                        <span>VIEW MORE</span>
                        <? include_once $_SERVER["DOCUMENT_ROOT"]."/film_dental_lap/inc/btn_arrow_icon.html" ?>
                    </button>
                </section>
            </div>

            <!-- 기공소 강점 -->
            <div id="results_wrap">
                <section id="results_section">
                    <div class="results_txtbox">
                        <h3 class="results_title">결과로 증명하는 <span>Film Dental Lap</span> </h3>
                        <p class="results_des">필름의 기공사들은 현재에 안주하지 않고 항상 연구하고 노력합니다.</p>
                    </div>
                    <div id="results_card_container">
                        <div class="small_card_box">
                            <div class="time small_card ">
                                <p>24시간 내 완성되는 완벽함</p>
                                <p>6시간 당일배송</p>
                            </div>
                            <div class="workflow small_card ">
                                <p>1:1 개인 전담 보철물 제작</p>
                                <p>원스텝 디지털 워크플로우</p>
                            </div>
                            <div class="scanedu small_card ">
                                <p>현장 중심의 실질적인 피드백 공유</p>
                                <p>스캔교육 진행</p>
                            </div>  
                            <div class="ability small_card ">
                                <p>잡지연재, 학술지 발표, 각종 수상 등 </p>
                                <p>기록으로 인정받은 기술력</p>
                            </div>
                        </div>
                        <div class="column_card_box">
                            <p>세계가 인정한 노리타케 세라믹</p>
                            <p>Noritake Contest<br>대상</p>
                        </div>
                    </div>
                </section>
            </div>

            <!-- 인증서&특허증 리스트 -->
            <div id="tech_wrap">
                <section id="tech_section">
                    <h3 class="hidden">인증서 틍허증 리스트</h3>
                    <div id="tech_left_img"><!-- CSS background 처리 --></div>
                    <div id="tech_right">
                        <div class="tech_txtbox">
                            <p class="tech_sub">FILM TECHNICAL SKILS</p>
                            <p class="tech_title">같은 원료라도 <br>
                            <span>누가 어떻게 만들었는지</span>가 중요합니다.</p>
                        </div>
                        <div class="cert_list">
                            <div class="cert_item">
                                <img src="/film_dental_lap/images/tech_cert_00.png" alt="필름덴탈 상표등록증">
                                <p>필름덴탈 상표등록증</p>
                            </div>
                            <div class="cert_item">
                                <img src="/film_dental_lap/images/tech_cert_01.png" alt="전동에 관한 핸드피스 특허증">
                                <p>전동에 관한 핸드피스 특허증</p>
                            </div>
                            <div class="cert_item">
                                <img src="/film_dental_lap/images/tech_cert_02.png" alt="필름덴탈 벤처기업확인서">
                                <p>필름덴탈 벤처기업확인서</p>
                            </div>
                        </div>
                    </div>
                    <div id="tech_logo"><!-- CSS background 처리 --></div>
                </section>
            </div>

            <!-- 스페셜 임상사례 -->
            <div id="special_case_wrap">
                <section id="special_case">
                    <div class="special_case_txtbox">
                        <h3 class="special_case_title"><span>SPECIAL</span> 임상사례</h3>
                        <p class="special_case_des"> 한계를 뛰어넘는 필름만의 기술력과 노하우입니다. </p>
                    </div>
                    <div id="special_case_list_box">
                        <ul class="special_case_list">
                            <li class="special_case_item">
                                <a href="#;" >
                                    <img src="/film_dental_lap/images/special_case_item_00.png" alt="스페셜 임상사례 바로가기">
                                    <h4>24시간 내 완성! 즉각적인 만족을<br> 이끌어낸 지르코니아 보철</h4>
                                    <p>“빠른 제작과 정밀함이 환자의 삶의 질을 바꿉니다."</p>
                                </a>
                            </li>
                            <li class="special_case_item">
                                <a href="#;">
                                    <img src="/film_dental_lap/images/special_case_item_01.png" alt="스페셜 임상사례 바로가기">
                                    <h4>자연치와 동일한 투명도,<br> 노리타케 세라믹으로 완벽 재현</h4>
                                    <p>“ 투명도와 색조, 자연광 반사까지 구현했습니다.”</p>
                                </a>
                            </li>
                            <li class="special_case_item">
                                <a href="#;">
                                    <img src="/film_dental_lap/images/special_case_item_02.png" alt="스페셜 임상사례 바로가기">
                                    <h4>오차 0.02mm 이하,<br> 디지털 스캔이 만든 완벽한 핏</h4>
                                    <p>“스캔, CAD/CAM 제작까지, 오차 없이 정밀합니다.”</p>
                                </a>
                            </li>
                            <li class="special_case_item">
                                <a href="#;">
                                    <img src="/film_dental_lap/images/special_case_item_03.png" alt="스페셜 임상사례 바로가기">
                                    <h4>10년 사용 후,<br> 색상과 형태까지 완벽 복원</h4>
                                    <p>“기존 보철과 99% 동일한 재현이 가능합니다.”</p>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <!-- 임상사례 - 비포에프터 -->
                    <div id="before_after_container">
                        <div class="before_after_txtbox">
                            <p class="before_after_sub">SMILE ON FILM</p>
                            <h3 class="before_after_title">임상사례 <span>Before & After</span></h3>
                            <button class="btn_view_more">
                                <span>VIEW MORE</span>
                                <? include_once $_SERVER["DOCUMENT_ROOT"]."/film_dental_lap/inc/btn_arrow_icon.html" ?>
                            </button>
                        </div>
                        <!-- 임상사례 - 비포에프터 슬라이드 -->
                        <ul class="before_after_slide_list hidden">
                            <li data-before="/film_dental_lap/images/item_before.png" data-after="/film_dental_lap/images/item_after.png" data-title="< 01 > 지르코니아 세라믹"></li>
                            <li data-before="/film_dental_lap/images/b1.png" data-after="/film_dental_lap/images/a1.png" data-title="< 02 > 라미네이트 치료 사례"></li>
                            <li data-before="/film_dental_lap/images/b2.png" data-after="/film_dental_lap/images/a2.png" data-title="< 03 > 치아교정 세라믹 브라켓"></li>
                            <li data-before="/film_dental_lap/images/b3.png" data-after="/film_dental_lap/images/a3.png" data-title="< 04 > 임플란트 보철"></li>
                            <li data-before="/film_dental_lap/images/b4.png" data-after="/film_dental_lap/images/a4.png" data-title="< 05 > 치아미백 케이스"></li>
                        </ul>
                        <div class="before_after_slide">
                            <div class="item_before_after">
                                <img id="beforeImg" src="/film_dental_lap/images/item_before.png" alt="지르코니아 세라믹 치료 전 사진">
                                <div class="label before">Before</div>
                            </div>
                            <div class="item_before_after">
                                <img id="afterImg" src="/film_dental_lap/images/item_after.png" alt="지르코니아 세라믹 치료 후 사진">
                                <div class="label after">After</div>
                            </div>

                            <div class="before_after_info"> 
                                <span id="caseTitle"><span>< 01 ></span> 지르코니아 세라믹</span>
                                <div class="btn_before_after">
                                    <div class="slide_counter">
                                        <span id="currentPageNum">1</span> / <span id="totalPageNum">5</span>
                                    </div>
                                    <button class="btn_before_after_prev">이전가기버튼</button>
                                    <button class="btn_before_after_next">다음가기버튼</button> 
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </section>
            </div>

            <!-- 제작환경 -->
            <div id="interior_wrap">
                <section id="interior">
                    <div class="interior_txt">
                        <p class="interior_sub">FILM INTERIOR</p>
                        <h3 class="interior_title">신뢰할 수 있는 
                            치과 보철물 <span>제작환경</span></h3>
                        <button class="btn_view_more">
                            <span>VIEW MORE</span>
                            <? include_once $_SERVER["DOCUMENT_ROOT"]."/film_dental_lap/inc/btn_arrow_icon.html" ?>
                        </button>
                    </div>
                    <div class="swiper interior_swiper interior_slide_container">
                        <ul class="swiper-wrapper interior_slide_list">
                            <li class="swiper-slide"><img src="/film_dental_lap/images/interior_00.png" alt="인테리어 사진"></li>
                            <li class="swiper-slide"><img src="/film_dental_lap/images/interior_01.png" alt="인테리어 사진"></li>
                            <li class="swiper-slide"><img src="/film_dental_lap/images/interior_02.png" alt="인테리어 사진"></li>
                            <li class="swiper-slide"><img src="/film_dental_lap/images/interior_03.png" alt="인테리어 사진"></li>
                            <li class="swiper-slide"><img src="/film_dental_lap/images/interior_04.png" alt="인테리어 사진"></li>
                        </ul> 
                        <button class="swiper-button-prev" id="interior_prev_btn">이전가기버튼</button>
                        <button class="swiper-button-next" id="interior_next_btn">다음가기버튼</button>  
                    </div>
                </section>
            </div>

            <? include_once $_SERVER["DOCUMENT_ROOT"]."/film_dental_lap/inc/contact_section.html" ?>  
    </div>
    <!-- 컨텐츠영역 끝 -->
     
    <!-- 하단영역시작 -->
    <? include_once $_SERVER["DOCUMENT_ROOT"]."/film_dental_lap/inc/footer.html" ?>
    <!-- 하단영역 끝 -->
</body>
</html>