<div class="container text-center my-5">
  <!-- 一番大きなカード(outWrap)の直上にh2を配置 -->
  <h2 class="fw-bold mb-4 text-dark">制作実績・ギャラリー</h2>
  <div class="outWrap p-4 p-md-5 bg-white bg-opacity-75 rounded-4 shadow-custom">
    <div class="row g-4 justify-content-center text-start">
      <div class="p-2 mt-2 bg-light rounded-2">
        <div class="techArea mb-1 d-flex align-items-center gap-1 fw-bold">
          <span style="background: linear-gradient(transparent 65%, rgba(255, 220, 0, 0.6) 65%);">
            Tech Note
          </span>
        </div>
        <p class="lh-sm mb-0 text-start">
          GitHub API連携でリポジトリ内の言語使用率(バイト数)を自動計算し、プログレスバー(作品詳細内)で表示。表示崩れ防止のため2重の対策を行っています。
          <br>1.通信エラーの場合にはローカルストレージから情報を取得
          <br>2.タイムスタンプ機能を利用して最初の通信から24時間以内はローカルストレージから情報を取得
        </p>
      </div>
      <!--  RPG Battle System  -->
      <div class="col-12 col-md-6 col-lg-4">
        <div class="card-hover-wrapper h-100">
          <button type="button" class="btn text-start p-0 w-100 h-100 card border-0 shadow-custom card-hover-inner rounded-3" data-bs-toggle="modal" data-bs-target="#modal-rpg">
            <img src="images/battle.png" class="card-img-top img-fluid rounded-top-3" alt="RPG Demo Pic" onerror="this.src='https://placehold.co/600x350/e2e8f0/475569?text=RPG+Battle+System'">
            <div class="card-body p-3 p-md-4 w-100">
              <span class="badge bg-secondary-subtle text-secondary-emphasis fs-6 py-2 px-3 fw-semibold mb-3">Game</span>
              <h5 class="card-title fw-bold text-dark mb-3">RPG Battle System</h5>
              <p>使用言語</p>
              <div id="RPGLang" class="langCharaArea"></div>
            </div>
          </button>
        </div>
      </div>

      <!--  Shooting Game  -->
      <div class="col-12 col-md-6 col-lg-4">
        <div class="card-hover-wrapper h-100">
          <button type="button" class="btn text-start p-0 w-100 h-100 card border-0 shadow-custom card-hover-inner rounded-3" data-bs-toggle="modal" data-bs-target="#modal-shooting">
            <img src="images/shooting.png" class="card-img-top img-fluid rounded-top-3" alt="Shooting Demo Pic" onerror="this.src='https://placehold.co/600x350/e2e8f0/475569?text=Shooting+Game'">
            <div class="card-body p-3 p-md-4 w-100">
              <span class="badge bg-secondary-subtle text-secondary-emphasis fs-6 py-2 px-3 fw-semibold mb-3">Game</span>
              <h5 class="card-title fw-bold text-dark mb-3">Shooting Game</h5>
              <p>使用言語</p>
              <div id="STGLang" class="langCharaArea"></div>
            </div>
          </button>
        </div>
      </div>

      <!--  How To Drive?  -->
      <div class="col-12 col-md-6 col-lg-4">
        <div class="card-hover-wrapper h-100">
          <button type="button" class="btn text-start p-0 w-100 h-100 card border-0 shadow-custom card-hover-inner rounded-3" data-bs-toggle="modal" data-bs-target="#modal-howtodrive">
            <img src="images/howToDrive.png" class="card-img-top img-fluid rounded-top-3" alt="How To Drive Demo Pic" onerror="this.src='https://placehold.co/600x350/e0f2fe/0369a1?text=How+To+Drive%3F'">
            <div class="card-body p-3 p-md-4 w-100">
              <span class="badge bg-info-subtle text-info-emphasis fs-6 py-2 px-3 fw-semibold mb-3">デモHP</span>
              <h5 class="card-title fw-bold text-dark mb-3">How To Drive? (デモ)</h5>
              <p>使用言語</p>
              <div id="HowToDriveLang" class="langCharaArea"></div>
            </div>
          </button>
        </div>
      </div>

      <!--  新作映画  -->
      <div class="col-12 col-md-6 col-lg-4">
        <div class="card-hover-wrapper h-100">
          <button type="button" class="btn text-start p-0 w-100 h-100 card border-0 shadow-custom card-hover-inner rounded-3" data-bs-toggle="modal" data-bs-target="#modal-movie">
            <img src="images/movie.png" class="card-img-top img-fluid rounded-top-3" alt="Movie Demo Pic" onerror="this.src='https://placehold.co/600x350/e0f2fe/0369a1?text=新作映画+(デモ)'">
            <div class="card-body p-3 p-md-4 w-100">
              <span class="badge bg-info-subtle text-info-emphasis fs-6 py-2 px-3 fw-semibold mb-3">デモHP</span>
              <h5 class="card-title fw-bold text-dark mb-3">新作映画 (デモ)</h5>
              <p>使用言語</p>
              <div id="MovieLang" class="langCharaArea"></div>
            </div>
          </button>
        </div>
      </div>

      <!--  HTML/CSS個人製作課題  -->
      <div class="col-12 col-md-6 col-lg-4">
        <div class="card-hover-wrapper h-100">
          <button type="button" class="btn text-start p-0 w-100 h-100 card border-0 shadow-custom card-hover-inner rounded-3" data-bs-toggle="modal" data-bs-target="#modal-lesson">
            <img src="images/lesson.png" class="card-img-top img-fluid rounded-top-3" alt="Lesson Demo Pic" onerror="this.src='https://placehold.co/600x350/e0f2fe/0369a1?text=HTML%2FCSS個人製作'">
            <div class="card-body p-3 p-md-4 w-100">
              <span class="badge bg-info-subtle text-info-emphasis fs-6 py-2 px-3 fw-semibold mb-3">デモHP</span>
              <h5 class="card-title fw-bold text-dark mb-3">HTML/CSS個人製作課題</h5>
              <p>使用言語</p>
              <div id="DesighHouseRenovationLang" class="langCharaArea"></div>
            </div>
          </button>
        </div>
      </div>

      <!--  PHP個人製作課題  -->
      <div class="col-12 col-md-6 col-lg-4">
        <div class="card-hover-wrapper h-100">
          <button type="button" class="btn text-start p-0 w-100 h-100 card border-0 shadow-custom card-hover-inner rounded-3" data-bs-toggle="modal" data-bs-target="#modal-donuts">
            <img src="images/donuts.png" class="card-img-top img-fluid rounded-top-3" alt="PHP Demo Pic" onerror="this.src='https://placehold.co/600x350/e0f2fe/0369a1?text=C.C.Donuts+(PHP)'">
            <div class="card-body p-3 p-md-4 w-100">
              <span class="badge bg-info-subtle text-info-emphasis fs-6 py-2 px-3 fw-semibold mb-3">デモHP</span>
              <h5 class="card-title fw-bold text-dark mb-3">PHP個人製作課題 (C.C.Donuts)</h5>
              <p>使用言語</p>
              <div id="ccdonutsLang" class="langCharaArea"></div>
            </div>
          </button>
        </div>
      </div>

    </div>
  </div>
</div>

<!-- モーダルエリア -->
<!-- RPG -->
<div class="modal fade" id="modal-rpg" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content text-start rounded-4 border-0 shadow-custom">
      <div class="modal-header border-bottom-0 pb-0">
        <h5 class="modal-title fw-bold">RPG Battle System</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body p-4">
        <div class="row g-4 align-items-center">
          <div class="col-12 col-md-5">
            <img src="images/battle.png" class="img-fluid rounded-3 w-100 shadow-sm" alt="RPG" onerror="this.src='https://placehold.co/600x350/e2e8f0/475569?text=RPG+Battle+System'">
            <div id="RPG" class="languageBar mt-2 mb-2"></div>
            <div id="RPGLangDetail" class="barCharaArea"></div>
          </div>
          <div class="col-12 col-md-7">
            <p class="mb-2"><strong>制作時間：</strong> 10~20h</p>
            <p class="mb-2"><strong>対応端末：</strong> ※PCのみ動作</p>
            <p class="mb-2"><strong>ゲーム内容：</strong> マップを歩き回るとモンスターと遭遇してバトルを開始します。</p>
            <p class="mb-2"><strong>工夫した点・こだわり【要差し替え】：</strong><br>
              <span class="text-danger fw-bold">★★★ 【FIXME: ここに工夫点を記述】 例: キャラクターの移動判定ロジックとエンカウント確率の調整にこだわりました。 ★★★</span>
            </p>
            <hr class="my-3">
            <p class="mb-1"><strong>GitHubリンク【要差し替え】：</strong></p>
            <a href="https://github.com/FIXME_YOUR_ACCOUNT/FIXME_REPO" target="_blank" class="text-break text-danger fw-bold">
              ★★★ https://github.com/FIXME_YOUR_ACCOUNT/FIXME_REPO ★★★
            </a>
          </div>
        </div>
      </div>
      <div class="modal-footer border-top-0 pt-0">
        <a href="../RPG/RPG/index.html" target="_blank" class="btn btn-primary rounded-3 px-4">作品をプレイする</a>
        <button type="button" class="btn btn-secondary rounded-3" data-bs-dismiss="modal">閉じる</button>
      </div>
    </div>
  </div>
</div>

<!-- Shooting -->
<div class="modal fade" id="modal-shooting" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content text-start rounded-4 border-0 shadow-custom">
      <div class="modal-header border-bottom-0 pb-0">
        <h5 class="modal-title fw-bold">Shooting Game</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body p-4">
        <div class="row g-4 align-items-center">
          <div class="col-12 col-md-5">
            <!-- 画像下に mb-3 を付与して下部要素との隙間を確保 -->
            <img src="images/shooting.png" class="img-fluid rounded-3 w-100 shadow-sm mb-3" alt="Shooting" onerror="this.src='https://placehold.co/600x350/e2e8f0/475569?text=Shooting+Game'">
            <div id="STG" class="languageBar mt-2 mb-2"></div>
            <div id="STGLangDetail" class="barCharaArea"></div>
          </div>
          <div class="col-12 col-md-7">
            <p class="mb-2"><strong>制作時間：</strong> 7h</p>
            <p class="mb-2"><strong>対応端末：</strong> ※PCのみ動作</p>
            <p class="mb-2"><strong>ゲーム内容：</strong> 敵を撃破して最高記録を目指すシューティングゲーム。</p>
            <p class="mb-2"><strong>工夫した点・こだわり【要差し替え】：</strong><br>
              <span class="text-danger fw-bold">★★★ 【FIXME: ここに工夫点を記述】 例: Canvasを用いた描画処理の軽量化と、スコア保持ロジックを実装。 ★★★</span>
            </p>
            <hr class="my-3">
            <p class="mb-1"><strong>GitHubリンク【要差し替え】：</strong></p>
            <a href="https://github.com/FIXME_YOUR_ACCOUNT/FIXME_REPO" target="_blank" class="text-break text-danger fw-bold">
              ★★★ https://github.com/FIXME_YOUR_ACCOUNT/FIXME_REPO ★★★
            </a>
          </div>
        </div>
      </div>
      <div class="modal-footer border-top-0 pt-0">
        <a href="http://www.gredchilipepper.shop/creates/shooting/index.php" target="_blank" class="btn btn-primary rounded-3 px-4">作品をプレイする</a>
        <button type="button" class="btn btn-secondary rounded-3" data-bs-dismiss="modal">閉じる</button>
      </div>
    </div>
  </div>
</div>

<!-- How To Drive? -->
<div class="modal fade" id="modal-howtodrive" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content text-start rounded-4 border-0 shadow-custom">
      <div class="modal-header border-bottom-0 pb-0">
        <h5 class="modal-title fw-bold">How To Drive? (デモ)</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body p-4">
        <div class="row g-4 align-items-center">
          <div class="col-12 col-md-5">
            <img src="images/howToDrive.png" class="img-fluid rounded-3 w-100 shadow-sm" alt="How To Drive" onerror="this.src='https://placehold.co/600x350/e0f2fe/0369a1?text=How+To+Drive%3F'">
            <div id="HowToDrive" class="languageBar mt-2 mb-2"></div>
            <div id="HowToDriveLangDetail" class="barCharaArea"></div>
          </div>
          <div class="col-12 col-md-7">
            <p class="mb-2"><strong>制作時期：</strong> 訓練開始直後に作成</p>
            <p class="mb-2"><strong>対応端末：</strong> レスポンシブ未対応</p>
            <p class="mb-2"><strong>工夫した点・こだわり【要差し替え】：</strong><br>
              <span class="text-danger fw-bold">★★★ 【FIXME: ここに工夫点を記述】 例: Web制作学習の初期段階で、基本タグのレイアウト検証用に制作。 ★★★</span>
            </p>
            <hr class="my-3">
            <p class="mb-1"><strong>GitHubリンク【要差し替え】：</strong></p>
            <a href="https://github.com/FIXME_YOUR_ACCOUNT/FIXME_REPO" target="_blank" class="text-break text-danger fw-bold">
              ★★★ https://github.com/FIXME_YOUR_ACCOUNT/FIXME_REPO ★★★
            </a>
          </div>
        </div>
      </div>
      <div class="modal-footer border-top-0 pt-0">
        <a href="../howtodrive/index.html" target="_blank" class="btn btn-primary rounded-3 px-4">デモサイトを見る</a>
        <button type="button" class="btn btn-secondary rounded-3" data-bs-dismiss="modal">閉じる</button>
      </div>
    </div>
  </div>
</div>

<!-- 新作映画 -->
<div class="modal fade" id="modal-movie" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content text-start rounded-4 border-0 shadow-custom">
      <div class="modal-header border-bottom-0 pb-0">
        <h5 class="modal-title fw-bold">新作映画 (デモ)</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body p-4">
        <div class="row g-4 align-items-center">
          <div class="col-12 col-md-5">
            <img src="images/movie.png" class="img-fluid rounded-3 w-100 shadow-sm" alt="Movie" onerror="this.src='https://placehold.co/600x350/e0f2fe/0369a1?text=新作映画+(デモ)'">
            <div id="Movie" class="languageBar mt-2 mb-2"></div>
            <div id="MovieLangDetail" class="barCharaArea"></div>
          </div>
          <div class="col-12 col-md-7">
            <p class="mb-2"><strong>制作時期：</strong> 訓練中期に作成</p>
            <p class="mb-2"><strong>対応端末：</strong> レスポンシブ未対応</p>
            <p class="mb-2"><strong>工夫した点・こだわり【要差し替え】：</strong><br>
              <span class="text-danger fw-bold">★★★ 【FIXME: ここに工夫点を記述】 例: 映画告知風のデザイン表現と、CSS装飾の練習として制作。 ★★★</span>
            </p>
            <hr class="my-3">
            <p class="mb-1"><strong>GitHubリンク【要差し替え】：</strong></p>
            <a href="https://github.com/FIXME_YOUR_ACCOUNT/FIXME_REPO" target="_blank" class="text-break text-danger fw-bold">
              ★★★ https://github.com/FIXME_YOUR_ACCOUNT/FIXME_REPO ★★★
            </a>
          </div>
        </div>
      </div>
      <div class="modal-footer border-top-0 pt-0">
        <a href="../movie/index.html" target="_blank" class="btn btn-primary rounded-3 px-4">デモサイトを見る</a>
        <button type="button" class="btn btn-secondary rounded-3" data-bs-dismiss="modal">閉じる</button>
      </div>
    </div>
  </div>
</div>

<!-- HTML/CSS個人製作課題 -->
<div class="modal fade" id="modal-lesson" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content text-start rounded-4 border-0 shadow-custom">
      <div class="modal-header border-bottom-0 pb-0">
        <h5 class="modal-title fw-bold">HTML/CSS個人製作課題 (デモ)</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body p-4">
        <div class="row g-4 align-items-center">
          <div class="col-12 col-md-5">
            <img src="images/lesson.png" class="img-fluid rounded-3 w-100 shadow-sm" alt="Lesson" onerror="this.src='https://placehold.co/600x350/e0f2fe/0369a1?text=HTML%2FCSS個人製作'">
            <div id="DesighHouseRenovation" class="languageBar mt-2 mb-2"></div>
            <div id="DesighHouseRenovationLangDetail" class="barCharaArea"></div>
          </div>
          <div class="col-12 col-md-7">
            <p class="mb-2"><strong>区分：</strong> HTML/CSS修了課題</p>
            <p class="mb-2"><strong>対応端末：</strong> レスポンシブ対応済</p>
            <p class="mb-2"><strong>工夫した点・こだわり【要差し替え】：</strong><br>
              <span class="text-danger fw-bold">★★★ 【FIXME: ここに工夫点を記述】 例: Flexbox/Gridを用いたレスポンシブ配置とピクセーパーフェクトな再現。 ★★★</span>
            </p>
            <hr class="my-3">
            <p class="mb-1"><strong>GitHubリンク【要差し替え】：</strong></p>
            <a href="https://github.com/FIXME_YOUR_ACCOUNT/FIXME_REPO" target="_blank" class="text-break text-danger fw-bold">
              ★★★ https://github.com/FIXME_YOUR_ACCOUNT/FIXME_REPO ★★★
            </a>
          </div>
        </div>
      </div>
      <div class="modal-footer border-top-0 pt-0">
        <a href="../lessonPage/index.html" target="_blank" class="btn btn-primary rounded-3 px-4">デモサイトを見る</a>
        <button type="button" class="btn btn-secondary rounded-3" data-bs-dismiss="modal">閉じる</button>
      </div>
    </div>
  </div>
</div>

<!-- PHP個人製作課題 -->
<div class="modal fade" id="modal-donuts" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content text-start rounded-4 border-0 shadow-custom">
      <div class="modal-header border-bottom-0 pb-0">
        <h5 class="modal-title fw-bold">PHP個人製作課題 (C.C.Donuts)</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body p-4">
        <div class="row g-4 align-items-center">
          <div class="col-12 col-md-5">
            <img src="images/donuts.png" class="img-fluid rounded-3 w-100 shadow-sm" alt="Donuts" onerror="this.src='https://placehold.co/600x350/e0f2fe/0369a1?text=C.C.Donuts+(PHP)'">
            <div id="ccdonuts" class="languageBar mt-2 mb-2"></div>
            <div id="ccdonutsLangDetail" class="barCharaArea"></div>
          </div>
          <div class="col-12 col-md-7">
            <p class="mb-2"><strong>区分：</strong> PHP修了課題 (制作期間 2週間)</p>
            <p class="mb-2"><strong>対応端末：</strong> レスポンシブ対応済（※制作補助としてAIを使用）</p>
            <p class="mb-2"><strong>内容：</strong> EC風ショッピングサイト機能の構築</p>
            <p class="mb-2"><strong>工夫した点・こだわり【要差し替え】：</strong><br>
              <span class="text-danger fw-bold">★★★ 【FIXME: ここに工夫点を記述】 例: ログインセッション管理とDB接続・カート機能のロジック構築。 ★★★</span>
            </p>
            <hr class="my-3">
            <p class="mb-1"><strong>GitHubリンク【要差し替え】：</strong></p>
            <a href="https://github.com/FIXME_YOUR_ACCOUNT/FIXME_REPO" target="_blank" class="text-break text-danger fw-bold">
              ★★★ https://github.com/FIXME_YOUR_ACCOUNT/FIXME_REPO ★★★
            </a>
          </div>
        </div>
      </div>
      <div class="modal-footer border-top-0 pt-0">
        <a href="http://www.gredchilipepper.shop/creates/ccdonuts/index.php" target="_blank" class="btn btn-primary rounded-3 px-4">デモサイトを見る</a>
        <button type="button" class="btn btn-secondary rounded-3" data-bs-dismiss="modal">閉じる</button>
      </div>
    </div>
  </div>
</div>
