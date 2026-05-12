# LP構築プロジェクト：グローバルルール（※常に厳守）

1. **ファイル構成:** HTMLは `ai-career-academy.php` へ追記。CSSは `assets/css/{セクション名}.css` として分割。
2. **CSSの読み込み【超重要】:** 分割したCSSファイルは、必ず `ai-career-academy.php` の `<head>` 内で `<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/ファイル名.css">` 等を用いて読み込む記述を追加し、デザインが反映されるようにすること。
3. **画像パス:** すべて `images/` 配下を参照。ダミー画像は `images/dammy/noimage_01.png` を使用。
4. **実装方針:** 私（ユーザー）が提供する「正解コード（HTML/CSS）」を絶対とし、独自解釈によるレイアウト変更は厳禁。
5. **トークン節約:** 指示されたセクション【のみ】を作業し、関係のない過去のコード全体を再出力しないこと。

---

# 今回のタスク：SECTION 02（問題提起セクション）の実装

FVの下に続く「問題提起セクション」を実装せよ。
外部CSSファイルとして `assets/css/problem.css` を新規作成し、以下の正解コードを移植すること。

## 【正解コード】HTML（ai-career-academy.php の FVの下に追記）

```html
<section class="problem-section">
  <div class="problem-bg-text">ISSUE</div>

  <div class="lp-container problem-container">
    <h2 class="problem-title">
      このまま今の会社にいて、<br />
      5年後も「選ばれる側」でいられますか？
    </h2>
    <p class="problem-subtitle">
      40代・50代になると、ふとした瞬間に、こんな不安が頭をよぎることはありませんか。
    </p>

    <ul class="problem-list">
      <li class="problem-item">
        <div class="problem-img-area">
          <span class="issue-badge">ISSUE<br />01</span>
          <img src="images/dammy/noimage_01.png" alt="ダミー画像" />
        </div>
        <div class="problem-text-area">
          <p>
            転職サイトに登録しても、<br />届くのは「<span class="text-highlight"
              >今回は見送らせていただきます</span
            >」の通知ばかり。<br />届く求人は、今より年収が下がるものばかり。
          </p>
        </div>
      </li>
      <li class="problem-item">
        <div class="problem-img-area">
          <span class="issue-badge">ISSUE<br />02</span>
          <img src="images/dammy/noimage_01.png" alt="ダミー画像" />
        </div>
        <div class="problem-text-area">
          <p>
            気づけば同期は役職についている。<br />自分は、<span
              class="text-highlight"
              >誰でもできる仕事を任され続けている</span
            >気がする。
          </p>
        </div>
      </li>
      <li class="problem-item">
        <div class="problem-img-area">
          <span class="issue-badge">ISSUE<br />03</span>
          <img src="images/dammy/noimage_01.png" alt="ダミー画像" />
        </div>
        <div class="problem-text-area">
          <p>
            会議で若手が「AI」の話をしている。<br />正直よく分からないが、<span
              class="text-highlight"
              >分かったフリをして話を合わせている。</span
            >
          </p>
        </div>
      </li>
      <li class="problem-item">
        <div class="problem-img-area">
          <span class="issue-badge">ISSUE<br />04</span>
          <img src="images/dammy/noimage_01.png" alt="ダミー画像" />
        </div>
        <div class="problem-text-area">
          <p>
            <span class="text-highlight">「55歳役職定年」「60歳再雇用」</span
            ><br />その言葉が、いよいよ他人事ではなくなってきた。
          </p>
        </div>
      </li>
    </ul>
  </div>
</section>
```
