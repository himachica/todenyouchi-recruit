<div class="item-wrap">

  <!-- 氏名 -->
  <dl class="item -required">
    <dt><span>氏名</span></dt>
    <dd>
      <div class="name">
        <p class="name-item"><span class="name-txt">姓</span>[text* last-name class:input placeholder "山田"]</p>
        <p class="name-item"><span class="name-txt">名</span>[text* first-name class:input placeholder "花子"]</p>
      </div>
    </dd>
  </dl>

  <!-- 氏名（フリガナ） -->
  <dl class="item -required">
    <dt><span>氏名（フリガナ）</span></dt>
    <dd>
      <div class="name">
        <p class="name-item"><span class="name-txt">セイ</span>[text* last-name-kana class:input placeholder "ヤマダ"]</p>
        <p class="name-item"><span class="name-txt">メイ</span>[text* first-name-kana class:input placeholder "ハナコ"]</p>
      </div>
    </dd>
  </dl>

  <!-- 生年月日（年・月・日をセレクトで） -->
  <dl class="item -required">
    <dt><span>生年月日</span></dt>
    <dd>
      <div class="birth">
        <p class="birth-select">[select* birth-year class:birth-year default:36 "1955年" "1956年" "1957年" "1958年" "1959年" "1960年" "1961年" "1962年" "1963年" "1964年" "1965年" "1966年" "1967年" "1968年" "1969年" "1970年" "1971年" "1972年" "1973年" "1974年" "1975年" "1976年" "1977年" "1978年" "1979年" "1980年" "1981年" "1982年" "1983年" "1984年" "1985年" "1986年" "1987年" "1988年" "1989年" "1990年" "1991年" "1992年" "1993年" "1994年" "1995年" "1996年" "1997年" "1998年" "1999年" "2000年" "2001年" "2002年" "2003年" "2004年" "2005年" "2006年" "2007年" "2008年" "2009年" "2010年" "2011年" "2012年" "2013年" "2014年" "2015年" "2016年" "2017年" "2018年" "2019年" "2020年" "2021年" "2022年" "2023年" "2024年" "2025年"]</p>
        <p class="birth-select">[select* birth-month class:birth-month default:1 "1月" "2月" "3月" "4月" "5月" "6月" "7月" "8月" "9月" "10月" "11月" "12月"]</p>
        <p class="birth-select">[select* birth-day class:birth-day default:1 "1日" "2日" "3日" "4日" "5日" "6日" "7日" "8日" "9日" "10日" "11日" "12日" "13日" "14日" "15日" "16日" "17日" "18日" "19日" "20日" "21日" "22日" "23日" "24日" "25日" "26日" "27日" "28日" "29日" "30日" "31日"]</p>
      </div>
    </dd>
  </dl>

  <!-- 性別 -->
  <dl class="item -required">
    <dt><span>性別</span></dt>
    <dd>
      <div class="radio">[radio gender use_label_element "男" "女"]</div>
    </dd>
  </dl>

  <!-- 電話番号 -->
  <dl class="item -required">
    <dt><span>電話番号</span></dt>
    <dd>[tel* phone placeholder "090-1234-5678"]</dd>
  </dl>

  <!-- メールアドレス -->
  <dl class="item -required">
    <dt><span>メールアドレス</span></dt>
    <dd>[email* your-email placeholder "sample@example.com"]</dd>
  </dl>

  <!-- 住所 -->
  <dl class="item -required">
    <dt><span>住所</span></dt>
    <dd>
      <div class="address">
        <p class="address-postcode"><span class="address-mark">〒</span>[text* postcode placeholder "123-4567"]</p>
        <p class="address-line">[text* address placeholder "東京都渋谷区渋谷1-2-3 ○○マンション101号"]</p>
      </div>
    </dd>
  </dl>

  <!-- 希望職種 -->
  <dl class="item -required">
    <dt><span>希望職種</span></dt>
    <dd>[select* job-type class:select-change first_as_label "選択してください" "職種A" "職種B" "職種C"]</dd>
  </dl>

  <!-- 現在の勤務状況 -->
  <dl class="item -required">
    <dt><span>現在の勤務状況</span></dt>
    <dd>[select* work-status class:select-change first_as_label "選択してください" "在職中" "離職中" "その他"]</dd>
  </dl>

  <!-- 最終学歴 -->
  <dl class="item -required">
    <dt><span>最終学歴</span></dt>
    <dd>[select* education class:select-change first_as_label "選択してください" "高卒" "短大・専門卒" "大卒" "大学院卒"]</dd>
  </dl>

  <!-- 応募書類 -->
  <dl class="item -required">
    <dt><span>応募書類</span></dt>
    <dd>[file* resume filetypes:pdf/*|doc/*|docx/*|image/* limit:5mb]</dd>
  </dl>

  <!-- 備考 -->
  <dl class="item -required">
    <dt><span>備考欄</span></dt>
    <dd>[textarea* message placeholder "不明点の質問やアピールポイントなどありましたらご記入ください"]</dd>
  </dl>

</div>

<div class="privacy">[acceptance privacy-check]<span class="privacy-txt"><a href="https://tepco-youchi.co.jp/privacy.html" target="_blank" rel="noopener">プライバシーポリシー</a>に同意する</span>[/acceptance]</div>

<div class="submit">[submit "送信する"]</div>
