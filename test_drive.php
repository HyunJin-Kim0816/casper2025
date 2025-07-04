<?php
  include('./sub/header.php');
?>

  <!-- 메인콘텐츠영역 -->
  <main>
    <div class="sub_top">
      <nav>홈 &gt; 체험 &gt; <b>시승 신청</b></nav>
      <h2>시승 신청</h2>
      <p>캐스퍼가 제공하는 편리한 시승 서비스를 이용해보세요.</p>
    </div>

    <section class="online_reserve">
      <h2>시승신청 온라인 예약</h2>
      <form name="시승신청" method="post" action="./php/db_insert.php">
        <fieldset>
          <legend>시승신청 온라인 예약</legend>
          <p><label>고객명 : </label><input type="text" name="name" required></p>
          <p><label>휴대폰 : </label><input type="text" name="phone" required></p>
          <p>SMS수신여부 : 
            <label for="s01">수신</label>
            <input type="radio" name="sms" id="s01" value="Y">
            <label for="s02">수신안함</label>
            <input type="radio" name="sms" id="s02" value="N"></p>
          </p>
          <p>
            <label>이메일 주소</label><input type="email" name="email" required>
          </p>
          <p>
            <label>전시장 선택 : </label>
            <select name="region" id="region" required>
              <option value="">전시장 선택</option><option value="강남점">강남점</option>
              <option value="송파점">송파점</option><option value="한남점">한남점</option>
            </select>
          </p>
          <p>
            <label>차량 선택 : </label>
            <select name="car" id="car" required>
              <option value="">차량 선택</option><option value="캐스퍼">캐스퍼</option>
              <option value="캐스퍼 인스">캐스퍼 인스퍼레이션</option>
              <option value="소나타">소나타</option><option value="그랜저">그랜저</option>
              <option value="제네시스">제네시스</option>
            </select>
          </p>
          <p><label>보유차종 : </label><input type="text" name="my_car" required ></p>
          <p><label>시승희망일 : </label><input type="date" name="e_date" required></p>
          <p><input type="submit" value="예약하기"><input type="reset" value="취소하기"></p>
        </fieldset>
      </form>
    </section>
  </main>


<?php
  include('./sub/footer.php');
?>