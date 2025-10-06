<?php
global $siteUrl;
global $astUrl;
?>
<?php get_header(); ?>

<div class="l-wrapper p-page p-about">
  <?php get_file('headmenu'); ?>
  <main id="main" class="l-main l-main-page l-main-about">

    <div class="l-mv-page l-mv-about">
      <div class="l-mv-page__inner">
        <div class="l-mv-page__title">
          <h1 class="l-mv-page__titleJp">私たちについて</h1>
          <p class="l-mv-page__titleEn">ABOUT US</p>
        </div>
      </div>
    </div>

    <!-- パンくず -->
    <?php echo custom_breadcrumbs(); ?>
    <!-- /パンくず -->

    <section class="p-about-philosophy">
      <div class="l-container">
        <div class="p-about-philosophy__grid">
          <div class="p-about-philosophy__gridItem">
            <hgroup class="l-title-left">
              <h2 translate="no">PHILOSOPHY</h2>
              <p>経営理念</p>
            </hgroup>
            <div class="p-about-philosophy__textArea u-font-bold">
              <p>私たちBiBiキャリアは、医療現場で働くすべての方が<br>「安心して長く、誇りを持って働ける環境」を手に入れられるよう、<br class="u-only--pc">キャリア形成と人材マッチングの支援を行っています。 </p>
              <p>医療業界の発展無くして、人々の安心は難しいと考えております。<br>そのためには、まず医療業界で働く方々が安心して働くことができる、<br class="u-only--pc">そして良い人材と出会うことができる環境を用意する必要があります。 </p>
              <p>医療機関と医療人材の双方に価値のある出会いを提供し、<br class="u-only--pc">現場を支える方々が働きやすい社会を実現することが、私たちの役割です。 </p>
            </div>
          </div>
          <div class="p-about-philosophy__gridItem">
            <img src="<?php echo $astUrl; ?>assets/img/aboutus/img01.jpg" alt="">
          </div>
        </div>
      </div>
    </section>

    <section class="p-about-mission">
      <div class="l-container">
        <hgroup class="l-title-left">
          <h2 translate="no">OUR Mission Vision Value</h2>
          <p>ミッション・ビジョン・バリュー</p>
        </hgroup>
        <div class="p-about-mission__list">
          <div class="p-about-mission__listItem">
            <div class="p-about-mission__main">
              <p class="p-about-mission__mainTitle">Mission</p>
              <p class="p-about-mission__mainText">果たす使命</p>
            </div>
            <p class="p-about-mission__listText">キャリアを輝かせるために、幅広い選択肢と質の高い出会いを創出する。</p>
          </div>
          <div class="p-about-mission__listItem">
            <div class="p-about-mission__main">
              <p class="p-about-mission__mainTitle">Vision</p>
              <p class="p-about-mission__mainText">ありたい未来像</p>
            </div>
            <p class="p-about-mission__listText">医療人材に、もっと“輝く舞台”を。</p>
          </div>
          <div class="p-about-mission__listItem">
            <div class="p-about-mission__main">
              <p class="p-about-mission__mainTitle">Value</p>
              <p class="p-about-mission__mainText">大切にしたい価値観</p>
            </div>
            <p class="p-about-mission__listText">医療現場と人材、そして人と人の間に信頼と強い絆を育む。</p>
          </div>
        </div>
      </div>
    </section>

    <section id="feature" class="p-about-feature">
      <div class="l-container">
        <hgroup class="l-title-center">
          <h2 translate="no">FEATURE</h2>
          <p>BiBiキャリアの特徴</p>
        </hgroup>
        <div class="p-about-feature__grid">
          <div class="p-about-feature__gridItem">
            <div class="p-about-feature__thumbnail">
              <img src="<?php echo $astUrl; ?>assets/img/aboutus/img02.jpg" alt="医療分野に特化した人材紹介">
            </div>
            <p class="p-about-feature__title">医療分野に特化した人材紹介</p>
            <p class="p-about-feature__text">BiBiキャリアは医療業界に特化した<br>人材紹介を行っています。<br>専門性の高い分野だからこそ、現場を理解した上で最適な人材と環境を結び付け、医療機関と求職者の双方にとって価値ある出会いを実現します。</p>
          </div>
          <div class="p-about-feature__gridItem">
            <div class="p-about-feature__thumbnail">
              <img src="<?php echo $astUrl; ?>assets/img/aboutus/img03.jpg" alt="多様なキャリアの選択肢">
            </div>
            <p class="p-about-feature__title">多様なキャリアの選択肢</p>
            <p class="p-about-feature__text">医療・美容・訪問看護など幅広いキャリアの<br>可能性を提案します。<br>医療機関には多様な人材の確保を支援し、<br>求職者には自分らしい働き方を、<br>新しい選択肢を広げることが私たちの役割です。</p>
          </div>
          <div class="p-about-feature__gridItem">
            <div class="p-about-feature__thumbnail">
              <img src="<?php echo $astUrl; ?>assets/img/aboutus/img04.jpg" alt="現場で培った確かな知見">
            </div>
            <p class="p-about-feature__title">現場で培った確かな知見</p>
            <p class="p-about-feature__text">クリニックやスクール運営を通じて培った<br>実務経験を活かし、<br>机上の理論ではない「現場目線の理解・知見」に<br>基づくマッチングを実現します。<br>医療機関と医療人材の双方が長期的に<br>信頼できる関係づくりを支援します。</p>
          </div>
        </div>
      </div>
    </section>

    <section class="p-about-faq">
      <div class="l-container">
        <hgroup class="l-title-center">
          <h2 translate="no">FAQ</h2>
          <p>よくあるご質問</p>
        </hgroup>
        <details class="faq__accordion">
          <summary>
            <div class="faq__accordion-title"><span><img src="<?php echo $astUrl; ?>assets/img/aboutus/q.png" alt=""></span>相談だけでも大丈夫ですか？</div>
          </summary>
          <p>もちろん、大丈夫です。まずはご相談いただき、現状況やお悩みをヒアリングいたします。お気軽にご相談ください。</p>
        </details>
        <details class="faq__accordion">
          <summary>
            <div class="faq__accordion-title"><span><img src="<?php echo $astUrl; ?>assets/img/aboutus/q.png" alt=""></span>料金について教えてください。</div>
          </summary>
          <p>求職者は無料です。採用を考える企業様は内容により変動しますので、詳しい料金はお問い合わせください。</p>
        </details>
      </div>
    </section>

  </main>
  <?php get_file('footmenu'); ?>
</div>
<?php get_footer(); ?>