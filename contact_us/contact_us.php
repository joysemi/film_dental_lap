    <? include_once $_SERVER["DOCUMENT_ROOT"]."/film_dental_lap/inc/start.html" ?>
    <link rel="stylesheet" href="/film_dental_lap/contact_us/css/contact_us.css">
    <script src="/film_dental_lap/js/toggle.js"></script>
</head>
<body>

  <!-- 바로가기메뉴시작 -->
  <ul class="skipmenu_list">
    <li><a href="#" class="hidden">메인메뉴바로가기</a></li>
    <li><a href="#" class="hidden">본문영역바로가기</a></li>
    <li><a href="#" class="hidden">하단영역바로가기</a></li>
  </ul>
  <!-- 바로가기메뉴끝 -->

  <!-- 상단영역시작 -->
  <? include_once $_SERVER["DOCUMENT_ROOT"]."/film_dental_lap/inc/header.html" ?>
  <!-- 상단영역끝 -->


  <!-- 서브비쥬얼영역시작 -->
  <div id="sub_visual_wrap">
    <h2 class="hidden">서브비쥬얼영역</h2>
      <section class="sub_visual_section">
        <!-- background 처리 -->
      </section>
  </div>
  <!-- 서브비쥬얼영역끝 -->

  <!-- 컨텐츠영역시작 -->
  <div id="contents_wrap">
    <h2 class="hidden">컨텐츠영역</h2>
    <section id="contact_us">

      <!-- 서브제목 영역 -->
      <div id="title_container">
        <h3 class="section_title">문의사항</h3>
        <p class="section_desc">확인 후 입력하신 연락처로 연락 드리겠습니다.</p>
        <p class="section_desc">수가표 및 제안서를 이메일로 보내드립니다.</p>
      </div>
  
      <!-- 문의폼 영역 -->
      <form id="contact_form" method="post" action="#">

        <!-- 문의유형 -->
        <div id="category">  
            <h2 class="category_title">
                <p>문의 유형을 선택해주세요.</p>
                <button></button>
            </h2>
            <ul class="category_list">
                <li>제휴 문의</li>
                <li>수가 문의</li>
                <li>샘플 문의</li>
                <li>기타 문의</li>
            </ul>
        </div>

        <!-- 개인정보작성 -->
        <div class="form_name_company">
          <div>
            <label>
              <p>성함 <span class="required">*</span></p>
              <input class="line" type="text" name="name" required placeholder="성함을 입력해 주세요.">
            </label>
          </div>
          <div>
            <label>
              <p>소속(업체명) <span class="required">*</span></p>
              <input class="line" type="text" name="company" required placeholder="소속명을 입력해 주세요.">
            </label>
          </div>
        </div>

        <div class="form_phone_email">
          <div>
            <label>
              <p>연락처 <span class="required">*</span></p>
              <input class="line" type="tel" name="phone" required placeholder="연락처를 입력해 주세요. (010-0000-0000)">
            </label>
          </div>
          <div>
            <label>
              <p>이메일 <span class="required">*</span></p>
              <input class="line" type="email" name="email" required placeholder="이메일을 입력해 주세요. (example@email.com)">
            </label>
          </div>
        </div>

        <!-- 문의내용작성 -->
        <div class="form_message">
          <label>
            <p>문의사항 <span class="required">*</span></p>
            <textarea name="message" required placeholder="문의사항을 입력해 주세요."></textarea>
          </label>
        </div>

        <!-- 개인정보동의 -->
        <div class="form_agree">
          <label class="agree_label">
            <input type="checkbox" name="agree" required>
            <span>개인정보 수집/이용에 동의합니다.(필수) <span class="required">*</span></span>
          </label>
          <button class="more_agree" type="button">&gt;</button>
        </div> 

        <!-- 문의하기 버튼 -->
        <button class="btn_submit" type="submit">문의하기</button>
      </form>
    </section>

    <? include_once $_SERVER["DOCUMENT_ROOT"]."/film_dental_lap/inc/contact_section.html" ?>  
  <!-- 컨텐츠영역 끝 -->

  <!-- 하단영역시작 -->
  <? include_once $_SERVER["DOCUMENT_ROOT"]."/film_dental_lap/inc/footer.html" ?>
  <!-- 하단영역 끝 -->

</body>
</html>
