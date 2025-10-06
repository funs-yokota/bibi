<?php
global $siteUrl;
global $astUrl;
?>
<?php get_header(); ?>

<div class="l-wrapper p-page p-business">
  <?php get_file('headmenu'); ?>
  <main id="main" class="l-main l-main-page l-main-business">

    <div class="l-mv-page l-mv-business">
      <div class="l-mv-page__inner">
        <div class="l-mv-page__title">
          <h1 class="l-mv-page__titleJp">事業内容</h1>
          <p class="l-mv-page__titleEn">BUSINESS</p>
        </div>
      </div>
    </div>

    <!-- パンくず -->
    <?php echo custom_breadcrumbs(); ?>
    <!-- /パンくず -->

    <section class="p-business-lead">
      <div class="l-container">
        <h2><span>こんな方におすすめ！</span></h2>
        <div class="p-business-lead__grid">
          <div class="p-business-lead__gridItem">
            <p class="yellow">医療機関</p>
            <ul>
              <li>医療分野で、信頼できる人材を採用したい企業様</li>
              <li>専門性の高い人材と効率的に出会いたい企業様</li>
              <li>良い人材を確保し、組織の成長を支えたい経営者様</li>
              <li>入職後の定着まで見据えた採用を考える採用担当者様</li>
            </ul>
          </div>
          <div class="p-business-lead__gridItem">
            <p class="pink">求職者</p>
            <ul>
              <li>医療分野で自分に合った職場を見つけたい方</li>
              <li>専門性を活かしてキャリアアップを目指したい方</li>
              <li>多様な働き方やキャリアの選択肢を検討したい方</li>
              <li>入職後も安心して長く働ける職場を求めている方</li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <section class="p-business-service">
      <div class="p-business-service__bg">
        <img src="<?php echo $astUrl; ?>assets/img/business/bg.jpg" alt="">
      </div>
      <div class="p-business-service__title">
        <hgroup class="l-title-center">
          <h2 translate="no">SERVICE</h2>
          <p>主な事業内容</p>
        </hgroup>
      </div>
      <div class="p-business-service__main">
        <div class="l-container">
          <h3 class="l-title-sub"><span>医療関係専門の<br class="u-only--sp">人材紹介事業を展開</span></h3>
          <div class="p-business-service__mainImg">
            <picture>
              <source srcset="<?php echo $astUrl; ?>assets/img/business/figure-sp.png" media="(max-width: 768px)" type="image/png">
              <img src="<?php echo $astUrl; ?>assets/img/business/figure.png" alt="">
            </picture>
          </div>
          <p class="p-business-service__mainText">BiBiキャリアは、医療・美容・訪問看護といった専門性の高い分野に特化した人材紹介サービスです。<br>医療機関には「必要な人材との出会い」を、求職者には「自分らしいキャリア選択」を。<br>双方にとって価値あるマッチングを実現し、医療業界を支えるための持続的な成長を支援します。</p>
        </div>
      </div>
    </section>

    <section class="p-business-difference">
      <div class="l-container">
        <h3 class="l-title-sub"><span>BiBiキャリアと他社の違い</span></h3>
        <div class="p-business-difference__grid">
          <div class="p-business-difference__gridItem">
            <img src="<?php echo $astUrl; ?>assets/img/business/img01.png" alt="">
          </div>
          <div class="p-business-difference__gridItem">
            <div class="p-business-difference__flex">
              <div class="p-business-difference__flexItem">
                <p class="p-business-difference__flexItemNum">01</p>
                <p class="p-business-difference__flexItemTitle">医療領域に精通した専門性</p>
                <p class="p-business-difference__flexItemText">看護師を始めとした医療人材に特化し、<br class="u-only--pc">美容医療・訪問看護にも精通しています。<br class="u-only--pc">人材紹介事業の他にもクリニック経営やスクール運営を展開し、<br class="u-only--pc">現場の課題やニーズを深く理解しているからこそ、的確な人材紹介が可能です。</p>
              </div>
              <div class="p-business-difference__flexItem">
                <p class="p-business-difference__flexItemNum">02</p>
                <p class="p-business-difference__flexItemTitle">豊富な求人と確かなマッチング力</p>
                <p class="p-business-difference__flexItemText">豊富な求人と提携企業を有しているからこそ、<br class="u-only--pc">最適なマッチングを実現可能です。<br class="u-only--pc">医療機関と求職者のお互いが求めるニーズを正確にくみ取り、<br class="u-only--pc">双方にとって最適な人材・環境の出会いを提供させていただきます。</p>
              </div>
              <div class="p-business-difference__flexItem">
                <p class="p-business-difference__flexItemNum">03</p>
                <p class="p-business-difference__flexItemTitle">入職後の定着支援による安心感</p>
                <p class="p-business-difference__flexItemText">医療機関も・医療人材のどちらも長期的に<br class="u-only--pc">安心できる関係づくりをサポートします。<br class="u-only--pc">入社前はもちろんですが、入職後も定期的なフォローができる環境をご用意。<br class="u-only--pc">双方が安心して働き・採用できる体制を整えている点が、<br class="u-only--pc">私たちの大きな強みです。</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


  </main>
  <?php get_file('footmenu'); ?>
</div>
<?php get_footer(); ?>