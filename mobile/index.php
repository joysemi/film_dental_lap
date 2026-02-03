    <? include_once $_SERVER["DOCUMENT_ROOT"]."/film_dental_lap/mobile/inc/start.html" ?>
    <link rel="stylesheet" href="/film_dental_lap/mobile/css/main.css">

</head>
<body>
    <!-- 상단영역시작 -->
    <? include_once $_SERVER["DOCUMENT_ROOT"]."/film_dental_lap/mobile/inc/header.html" ?>
    <!-- 상단영역끝 -->

    <main>
        <!-- 비쥬얼영역시작 -->
        <section id="visual">
            <h2 class="hidden">메인비쥬얼영역</h2>
            <div class="visual_video">
                <video id="visualVideo" preload="auto" autoplay muted loop>
                    <source src="/film_dental_lap/mobile/images/mobile_video.mp4" type="video/mp4">
                </video>
            </div>
            <div class="visual_txtbox">
                <p class="visual_text">정확함, 정밀함, 정직함</p>               
                <p class="visual_title"><span>FILM</span> DENTAL LAP</p>
            </div>
        </section>
        <!-- 비쥬얼영역끝 -->

        <!-- 컨텐츠영역시작 -->
        <!-- 기공소 소개 -->
        <section id="about_us">
            <div class="about_us_txtbox">
                <h2 class="about_us_title">필름치과기공소</h2>
                <p class="about_us_text">
                    정품 재료와 정밀 분석으로, 섬세하고 모두가 만족하는 믿을 수 있는 기공물을 만듭니다.
                </p>
                <button class="btn_view_more">자세히보기</button>
            </div>
            <div class="about_us_img"><!-- background처리 --></div>
        </section>
        <!-- 포트폴리오 -->
        <section id="portfolio">
            <div class="portfolio_txtbox">
                <h2 class="portfolio_title"><span>장인</span>의 손에서 완성 되는 <span>정밀 보철물</span></h2>
                <p class="portfolio_text">필름덴탈랩은 정확함과 섬세함의 기준입니다.</p>
                <button class="btn_view_more">자세히보기</button>
            </div>
            <div class="portfolio_item_box">
                <ul class="portfolio_item_list">
                    <li class="portfolio_item">
                        <a href="#;">
                            <p><img src="/film_dental_lap/mobile/images/Zirconia.png" alt="지르코니아 아이콘 이미지"></p>
                            <p>지르코니아</p>
                        </a>
                    </li>
                    <li class="portfolio_item">
                        <a href="#;">
                            <p><img src="/film_dental_lap/mobile/images/Digital.png" alt="디지털 아이콘 이미지"></p>
                            <p>디지털</p>
                        </a>
                    </li>
                    <li class="portfolio_item">
                        <a href="#;">
                            <p><img src="/film_dental_lap/mobile/images/Laminate.png" alt="라미네이트 아이콘 이미지"></p>
                            <p>라미네이트</p>
                        </a>
                    </li>
                    <li class="portfolio_item">
                        <a href="#;">
                            <p><img src="/film_dental_lap/mobile/images/Implant.png" alt="임플란트 아이콘 이미지"></p>
                            <p>임플란트</p>
                        </a>
                    </li>
                    <li class="portfolio_item">
                        <a href="#;">
                            <p><img src="/film_dental_lap/mobile/images/Denture.png" alt="덴쳐 아이콘 이미지"></p>
                            <p>덴쳐</p>
                        </a>
                    </li>
                    <li class="portfolio_item">
                        <a href="#;">
                            <p><img src="/film_dental_lap/mobile/images/PFM.png" alt="PFM 아이콘 이미지"></p>
                            <p>PFM</p>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="portfolio_decotext">FILM DENTAL LAP</div>
        </section>
        <!-- 특별함/결과물 -->
        <section id="results">
            <div class="results_txtbox">
                <h2 class="results_title">결과로 증명하는 <span>Film Dental Lap</span></h2>
                <p class="results_text">필름의 기공사들은 현재에 안주하지 않고<br> 항상 연구하고 노력합니다.</p>
            </div>
            <div class="results_grid_box">
                <div class="time_card grid_item">
                    <p class="card_text">24시간 내 완성되는 완벽함</p>
                    <p class="card_title">6시간 당일배송</p>
                </div>
                <div class="scanedu_card grid_item">
                    <p class="card_text">실질적인 피드백 공유</p>
                    <p class="card_title">스캔교육 진행</p>
                </div>  
                <div class="workflow_card grid_item">
                    <p class="card_text">1:1 개인 전담 보철물 제작</p>
                    <p class="card_title">원스텝 디지털<br>워크플로우</p>
                </div>
                <div class="ability_card grid_item">
                    <p class="card_text">잡지연재, 학술지 발표 등</p>
                    <p class="card_title">기록으로 인정받은<br>기술력</p>
                </div>
                <div class="noritake_card grid_item_full">     
                    <img src="/film_dental_lap/mobile/images/noritake.png" alt="노리타케 세라믹 포스터">
                    <div class="noritake_card_text">    
                        <p class="card_text">세계가 인정한 노리타케 세라믹</p>
                        <p class="card_title">Noritake Contest<br>대상</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- 특허증 -->
        <section id="tech_wrap">
            <div class="tech_txtbox">
                <p class="tech_text">FILM TECHNICAL SKILS</p>
                <h2 class="tech_title">같은 원료라도<br><span>누가 어떻게 만들었는지</span>가 중요합니다.</h2>
            </div>
            <div class="cert_list">
                <div class="cert_item">
                    <img src="/film_dental_lap/images/tech_cert_00.png" alt="필름덴탈 상표등록증">
                    <p>상표등록증</p>
                </div>
                <div class="cert_item">
                    <img src="/film_dental_lap/images/tech_cert_01.png" alt="전동에 관한 핸드피스 특허증">
                    <p>특허증</p>
                </div>
                <div class="cert_item">
                    <img src="/film_dental_lap/images/tech_cert_02.png" alt="필름덴탈 벤처기업확인서">
                    <p>벤처기업확인서</p>
                </div>
            </div>
        </section>
        <!-- 임상사례 -->
        <section id="special_case">
            <div class="special_case_txtbox">
                <h2 class="special_case_title"><span>SPECIAL</span> 임상사례</h2>
                <p class="special_case_text">한계를 뛰어넘는 필름만의 기술력과 노하우입니다. </p>
            </div>
            <div class="swiper special_case_swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <a href="#" class="special_case_item">
                            <img src="/film_dental_lap/mobile/images/case_00.png" alt="스페셜 임상사례 바로가기">
                            <h3>24시간 내 완성! 즉각적인 만족을<br> 이끌어낸 지르코니아 보철</h3>
                            <p>“빠른 제작과 정밀함이 삶의 질을 바꿉니다."</p>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="#" class="special_case_item">
                            <img src="/film_dental_lap/mobile/images/case_01.png" alt="스페셜 임상사례 바로가기">
                            <h3>자연치와 동일한 투명도,<br> 노리타케 세라믹으로 완벽 재현</h3>
                            <p>“투명도와 색조, 자연광 반사까지 구현했습니다.”</p>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="#" class="special_case_item">
                            <img src="/film_dental_lap/mobile/images/case_02.png" alt="스페셜 임상사례 바로가기">
                            <h3>오차 0.02mm 이하,<br> 디지털 스캔이 만든 완벽한 핏</h3>
                            <p>“스캔, CAD/CAM 제작까지, 오차없이 정밀합니다.”</p>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="#" class="special_case_item">
                            <img src="/film_dental_lap/mobile/images/case_03.png" alt="스페셜 임상사례 바로가기">
                            <h3>10년 사용 후,<br> 색상과 형태까지 완벽 복원</h3>
                            <p>“기존 보철과 99% 동일한 재현이 가능합니다.”</p>
                        </a>
                    </div>
                </div>
                <div class="swiper-pagination special-case-swiper-pagination"></div>
            </div>
        </section>
        <!-- 임상사례 - 비포에프터 -->
        <section id="before_after_container">
            <div class="before_after_txtbox">
                <p class="before_after_sub">SMILE ON FILM</p>
                <h2 class="before_after_title">임상사례 <span>Before & After</span></h2>
                <button class="btn_view_more">자세히보기</button>
            </div>
            <div class="swiper before_after_swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="before_after_item">
                            <div class="before before_after">
                                <img src="/film_dental_lap/mobile/images/before.png" alt="지르코니아 세라믹 치료 전">
                                <p>Before</p>
                            </div>
                            <div class="after before_after">
                                <img src="/film_dental_lap/mobile/images/after.png" alt="지르코니아 세라믹 치료 후">
                                <p>After</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="before_after_item">
                            <div class="before before_after">
                                <img src="/film_dental_lap/images/b1.png" alt="라미네이트 치료 사례 치료 전">
                                <p>Before</p>
                            </div>
                            <div class="after before_after">
                                <img src="/film_dental_lap/images/a1.png" alt="라미네이트 치료 사례 치료 후">
                                <p>After</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="before_after_item">
                            <div class="before before_after">
                                <img src="/film_dental_lap/images/b2.png" alt="치아교정 세라믹 브라켓 치료 전">
                                <p>Before</p>
                            </div>
                            <div class="after before_after">
                                <img src="/film_dental_lap/images/a2.png" alt="치아교정 세라믹 브라켓 치료 후">
                                <p>After</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="before_after_item">
                            <div class="before before_after">
                                <img src="/film_dental_lap/images/b3.png" alt="임플란트 보철 치료 전">
                                <p>Before</p>
                            </div>
                            <div class="after before_after">
                                <img src="/film_dental_lap/images/a3.png" alt="임플란트 보철 치료 후">
                                <p>After</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="before_after_item">
                            <div class="before before_after">
                                <img src="/film_dental_lap/images/b4.png" alt="치아미백 케이스 치료 전">
                                <p>Before</p>
                            </div>
                            <div class="after before_after">
                                <img src="/film_dental_lap/images/a4.png" alt="치아미백 케이스 치료 후">
                                <p>After</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination before-after-swiper-pagination"></div>
            </div>
        </section>
        <!-- 제작환경 -->
        <section id="interior">
            <div class="interior_txtbox">
                <p class="interior_sub">FILM INTERIOR</p>
                <h3 class="interior_title">신뢰할 수 있는 치과 보철물 <span>제작환경</span></h3>
                <button class="btn_view_more">자세히보기</button>
            </div>
            <div class="interior_img">
                <img src="/film_dental_lap/images/interior_00.png" alt="제작환경사진">
            </div>
        </section>
        <!-- 지도 -->
        <section id="contact">
            <div class="map">
                <img src="/film_dental_lap/mobile/images/map.png" alt="지도, 주소">
            </div>
            <div class="contact_txtbox">
                <p class="contact_adress">Film Dental Lap<br>서울특별시 경인로 134-72</p>
                <p class="contact_phone">010.1346.2288</p>
                <div class="contact_sns">
                    <a href="#;">
                        <img src="/film_dental_lap/mobile/images/kakao.png" alt="KakaoTalk">
                    </a>
                    <a href="#;">
                        <img src="/film_dental_lap/mobile/images/insta.png" alt="Instagram">
                    </a>
                    <a href="#;">   
                        <img src="/film_dental_lap/mobile/images/youtube.png" alt="YouTube">
                    </a>
                    <a href="#;">
                        <img src="/film_dental_lap/mobile/images/blog.png" alt="Blog">
                    </a>
                </div>
            </div>
        </section>
    </main>
    <!-- 컨텐츠영역끝 -->
     
    <!-- 하단영역시작 -->
    <? include_once $_SERVER["DOCUMENT_ROOT"]."/film_dental_lap/mobile/inc/footer.html" ?>
    <!-- 하단영역 끝 -->
</body>
</html>