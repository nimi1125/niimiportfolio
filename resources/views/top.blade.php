@include('inc.head')
<body>
    @include('inc.header')
    <main class="preload">
        <div class="topCv">
            <img src="{{ asset('img/top_cv.jpg') }}" alt="トップカバー" class="topCvImg">
            <h1 class="titH1">Niimi Portfolio</h1>
        </div>
        <section id="about" class="wow fadeInUp about sec">
            <div class="container">
                <div class="titBox">
                    <h2 class="titH2">
                        About
                    </h2>
                    <p class="ja">
                        私について
                    </p>
                </div>
                <div class="row">
                    <div class="col-md-4 col-12 mb-5 mb-md-0">
                        <div class="aboutImgBox">
                            <img src="{{ asset('img/top_about.png') }}" alt="プロフィール画像" class="aboutImg">
                        </div>
                    </div>
                    <div class="aboutTxtBox col-md-8 col-12">
                        <dl>
                            <dt class="aboutTit mb-4">
                                Niimi<span class="ja">新見</span>
                            </dt>
                            <dd>
                                4年間事務として働いている際に作業効率化などを目的に、Excelのマクロ・VBAなどの勉強を始めた<br>
                                ことをきっかけにプログラミングに興味を持ち、<br>
                                興味があるとこを仕事にするために退職。<br>
                                <br>
                                そのあと、web制作会社に入社し、2年ほどサイトの改修作業を担当。<br>
                                制作会社に勤めながら、php(Laravel)などを学習。
                            </dd>
                        </dl>
                    </div>
                </div>
            </div>
        </section>
        <section id="works" class="wow fadeInUp works sec">
            <div class="container">
                <div class="titBox">
                    <h2 class="titH2">
                        works
                    </h2>
                    <p class="ja">
                        制作実績
                    </p>
                </div>
                <article class="workArticle pt-0">
                    <div class="row">
                        <div class="worksImgBox col-md-6 col-12 mb-5 mb-md-0">
                            <img src="{{ asset('img/works_01.jpg') }}" alt="制作実績画像">
                        </div>
                        <div class="worksTxtBox col-md-6 col-12">
                            <dl>
                                <dt class="workDt mb-4">
                                    Nail Idea Factory
                                </dt>
                                <dd class="workDd mb-4">
                                    ネイルデザインのメモ帳として使えるWebアプリを作成しました。
                                    通っていたスクールの課題の一環で作成しました。
                                </dd>
                                <dd class="workDd mb-4">
                                    制作期間<br>
                                    デザイン、DB設計からアプリ作成完成まで:約1ヶ月
                                </dd>
                                <dd class="workDd mb-4">
                                    <a href="https://github.com/nimi1125/NailIdeaFactory" class="worksLink" target="_blank">
                                        github:https://github.com/nimi1125/NailIdeaFactory
                                    </a>
                                </dd>
                            </dl>
                            <a href="https://nailideafactory-app-119276a88e28.herokuapp.com/" class="btn01">
                                View More
                            </a>
                        </div>
                    </div>
                </article>
                <article class="workArticle">
                    <div class="row">
                        <div class="worksImgBox col-md-6 col-12 mb-5 mb-md-0">
                            <img src="{{ asset('img/works_02.jpg') }}" alt="制作実績画像">
                        </div>
                        <div class="worksTxtBox col-md-6 col-12">
                            <dl>
                                <dt class="workDt mb-4">
                                    ポートフォリオサイト
                                </dt>
                                <dd class="workDd mb-4">
                                    自身のポートフォリオサイトを制作しました。
                                    シンプルで分かりやすいように、また制作事例を増やしていきやすいように今後調整予定です。
                                </dd>
                                <dd class="workDd mb-4">
                                    制作期間<br>
                                    デザイン:2日<br>
                                    コーディング:1週間
                                </dd>
                            </dl>
                            <a href="https://niimiportfolio-e59a7e7430cd.herokuapp.com/" class="btn01">
                                View More
                            </a>
                        </div>
                    </div>
                </article>
            </div>
        </section>
    </main>
    @include('inc.footer')
</body>
</html>