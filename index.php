<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<!-- head start -->

<head>
  <?php get_header(); ?>
</head>
<!-- head end -->

<!-- body start -->

<body <?php body_class(); ?>>

  <?php wp_body_open(); ?>

  <?php get_template_part("./php/includes/header"); ?>

  <div class="c-wrapper">
    <div class="js-scroll-mv p-mv c-container relative rounded-2xl shadow-2xl">
      <h2 class="u-text__size--top absolute tracking-widest"><?php bloginfo('description'); ?></h2>
    </div>

    <section id="a-profile" class="js-scroll p-sec01 c-sec c-container__sec u-bg__color02 rounded-2xl shadow-2xl">
      <h3 class="u-text__size--main tracking-wider">profile</h3>

      <div class="p-sec01__main flex flex-col lg:flex-row items-center justify-center">
        <div class="p-sec01__main--img">
          <img class="inline-block object-cover rounded-full"
            src="<?php echo esc_url(get_template_directory_uri()); ?>/image/profile.jpg" alt="profile" />
        </div>

        <div class="p-sec01__main--prof flex items-center justify-center">
          <table class="u-bg__color01 block rounded-2xl">
            <tbody class="text-left block">
              <tr class="block">
                <th class="u-text__size--ttl inline-block">名前</th>
              </tr>
              <tr class="block">
                <td class="u-text__size--txt">shuu11</td>
              </tr>
              <tr class="block">
                <th class="u-text__size--ttl inline-block">年齢</th>
              </tr>
              <tr class="block">
                <td class="u-text__size--txt">1991年11月生まれ(29歳)</td>
              </tr>
              <tr class="block">
                <th class="u-text__size--ttl inline-block">経歴</th>
              </tr>
              <tr class="block">
                <td class="u-text__size--txt">
                  大学まで京都で暮らす<br />
                  &rarr;大学卒業後は愛知県で就職し製造業にてソフト設計・回路設計・機構設計を経験<br />
                  &rarr;転職して家電製品等のソフト設計開発を行う<br />
                  &rarr;現在はweb製作を行っています。
                </td>
              </tr>
              <tr class="block">
                <th class="u-text__size--ttl inline-block">ひと言</th>
              </tr>
              <tr class="block">
                <td class="u-text__size--txt">
                  現在までに約7年間仕事としてソフト設計開発をおこなってまいりました。<br />
                  そのノウハウを活かして安定したwebサイトをお作り致します。
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </section>

    <section id="a-skill" class="js-scroll p-sec02 c-sec c-container__sec u-bg__color02 rounded-2xl shadow-2xl">
      <h3 class="u-text__size--main tracking-wider">skill</h3>

      <div class="p-sec02__main grid grid-cols-12 gap-10">
        <div
          class="p-sec02__main--skill u-bg__color01 flex flex-col col-span-12 md:col-span-6 lg:col-span-4 space-y-10 rounded-2xl">
          <span class="u-text__size--ttl">HTML5/CSS3</span>
          <i class="c-fa__star4 fab fa-html5 fa-6x"></i>
          <p class="u-text__size--txt">
            HTML/CSSを用いた静的なWebサイトのコーディングが可能です。
          </p>
        </div>
        <div
          class="p-sec02__main--skill u-bg__color01 flex flex-col col-span-12 md:col-span-6 lg:col-span-4 space-y-10 rounded-2xl">
          <span class="u-text__size--ttl">Sass</span>
          <i class="c-fa__star4 fab fa-sass fa-6x"></i>
          <p class="u-text__size--txt">SassとFLOCSSを用いて安定で効率的なCSS設計が可能です。</p>
        </div>
        <div
          class="p-sec02__main--skill u-bg__color01 flex flex-col col-span-12 md:col-span-6 lg:col-span-4 space-y-10 rounded-2xl">
          <span class="u-text__size--ttl">JavaScript</span>
          <i class="c-fa__star3 fab fa-js-square fa-6x"></i>
          <p class="u-text__size--txt">webサイトに動きを付けるアニメーションの実装が可能です。</p>
        </div>
        <div
          class="p-sec02__main--skill u-bg__color01 flex flex-col col-span-12 md:col-span-6 lg:col-span-4 space-y-10 rounded-2xl">
          <span class="u-text__size--ttl">WordPress</span>
          <i class="c-fa__star3 fab fa-wordpress fa-6x"></i>
          <p class="u-text__size--txt">WordPressを用いてSEOに対応したサイト構築が可能です。</p>
        </div>
        <div
          class="p-sec02__main--skill u-bg__color01 flex flex-col col-span-12 md:col-span-6 lg:col-span-4 space-y-10 rounded-2xl">
          <span class="u-text__size--ttl">Git</span>
          <i class="c-fa__star4 fab fa-github fa-6x"></i>
          <p class="u-text__size--txt">Githubを用いてソースコードの管理をすることが可能です。</p>
        </div>
        <div
          class="p-sec02__main--skill u-bg__color01 flex flex-col col-span-12 md:col-span-6 lg:col-span-4 space-y-10 rounded-2xl">
          <span class="u-text__size--ttl">レスポンシブ対応</span>
          <i class="c-fa__star4 fas fa-mobile-alt fa-6x"></i>
          <p class="u-text__size--txt">レスポンシブ対応したwebサイトの設計が可能です。</p>
        </div>
      </div>
    </section>

    <section id="a-flow" class="js-scroll p-sec03 c-sec c-container__sec u-bg__color02 rounded-2xl shadow-2xl">
      <h3 class="u-text__size--main tracking-wider">flow</h3>

      <div class="p-sec03__main grid grid-cols-12 gap-10 space-y-8 lg:space-y-0">
        <div class="col-span-12 lg:col-span-4">
          <span class="u-text__size--ttl">ヒアリング</span>
          <img class="inline-block object-cover rounded-2xl"
            src="<?php echo esc_url(get_template_directory_uri()); ?>/image/flow01.jpg" alt="ヒアリング" />
          <p class="u-text__size--txt">
            お客様のご要望に合わせて最適な提案をさせていただきます。
          </p>
        </div>
        <div class="col-span-12 lg:col-span-4">
          <span class="u-text__size--ttl">コーディング</span>
          <img class="inline-block object-cover rounded-2xl"
            src="<?php echo esc_url(get_template_directory_uri()); ?>/image/flow02.jpg" alt="コーディング" />
          <p class="u-text__size--txt">
            頂いたデザインカンプをベースにwebサイトを構築していきます。
          </p>
        </div>
        <div class="col-span-12 lg:col-span-4">
          <span class="u-text__size--ttl">納品</span>
          <img class="inline-block object-cover rounded-2xl"
            src="<?php echo esc_url(get_template_directory_uri()); ?>/image/flow03.jpg" alt="納品" />
          <p class="u-text__size--txt">納品は必ず守り、期日に余裕を持って進めていきます。</p>
        </div>
      </div>
    </section>

    <section id="a-service" class="js-scroll p-sec04 c-sec c-container__sec u-bg__color02 rounded-2xl shadow-2xl">
      <h3 class="u-text__size--main tracking-wider">service</h3>

      <div class="p-sec04__main space-y-16 lg:space-y-32">
        <div class="flex flex-col lg:flex-row items-center justify-between space-y-8 lg:space-y-0 lg:space-x-10">
          <img class="p-sec04__main--img inline-block object-cover rounded-2xl"
            src="<?php echo esc_url(get_template_directory_uri()); ?>/image/service01.jpg" alt="サービス:コーディング" />

          <div class="p-sec04__main--contents">
            <table class="u-bg__color01 rounded-2xl">
              <tbody>
                <tr>
                  <th>内容</th>
                  <th>料金目安</th>
                  <th>納期目安</th>
                </tr>
                <tr>
                  <td>テンプレート<br />ページ</td>
                  <td>&yen;50,000～</td>
                  <td>2週間以内</td>
                </tr>
                <tr>
                  <td>下層ページ<br />(1P)</td>
                  <td>&yen;30,000～</td>
                  <td>2週間以内</td>
                </tr>
                <tr>
                  <td>ランディング<br />ページ</td>
                  <td>&yen;100,000～</td>
                  <td>3週間以内</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>

        <div
          class="flex flex-col lg:flex-row lg:flex-row-reverse items-center justify-between space-y-8 lg:space-y-0 lg:space-x-10 lg:space-x-reverse">
          <img class="p-sec04__main--img inline-block object-cover rounded-2xl"
            src="<?php echo esc_url(get_template_directory_uri()); ?>/image/service02.jpg" alt="サービス:WordPress" />

          <div class="p-sec04__main--contents">
            <table class="u-bg__color01 rounded-2xl">
              <tbody>
                <tr>
                  <th>内容</th>
                  <th>料金目安</th>
                  <th>納期目安</th>
                </tr>
                <tr>
                  <td>WordPress移行</td>
                  <td>&yen;100,000～</td>
                  <td>3週間以内</td>
                </tr>
                <tr>
                  <td>WordPress実装</td>
                  <td>&yen;200,000～</td>
                  <td>3週間以内</td>
                </tr>
              </tbody>
            </table>

            <span class="u-text__size--note block text-left">&#x203B;コーディングは含みません</span>
          </div>
        </div>
      </div>
    </section>

    <section id="a-contact" class="js-scroll p-sec05 c-sec c-container__sec u-bg__color02 rounded-2xl shadow-2xl">
      <h3 class="u-text__size--main tracking-wider">contact</h3>

      <div class="p-sec05__main flex items-center justify-center rounded-2xl">
        <div class="p-sec05__form rounded-2xl">
          <?php echo do_shortcode('[mwform_formkey key="10"]'); ?>
          <!-- <ul>
							<li class="space-y-8">
								<label for="form-name" class="u-text__size--ttl block text-left">お名前</label>
								<input
									id="form-name"
									type="text"
									class="block rounded-2xl"
									placeholder="例:山田 太郎"
									required
								/>
							</li>

							<li class="space-y-8">
								<label for="form-mail" class="u-text__size--ttl block text-left"
									>メールアドレス</label
								>
								<input
									id="form-mail"
									type="email"
									class="block rounded-2xl"
									placeholder="例:test@test.com"
									required
								/>
							</li>

							<li class="space-y-8">
								<label for="form-message" class="u-text__size--ttl block text-left"
									>お問い合わせ内容</label
								>
								<textarea
									id="form-message"
									type="text"
									class="block rounded-2xl"
									placeholder="こちらにお問い合わせ内容を入力してください"
								></textarea>
							</li>

							<li class="">
								<button type="submit" class="u-text__size--ttl rounded-2xl">送信</button>
							</li>
						</ul> -->
        </div>
      </div>
    </section>
  </div>

  <?php get_template_part("./php/includes/footer"); ?>

  <div id="js-mask" class="c-mask u-z-index4 hidden"></div>

  <p class="js-scroll c-page__top">
    <a href="#"><i class="fas fa-chevron-up"></i></a>
  </p>

  <?php get_footer(); ?>
</body>
<!-- body end -->

</html>

<!-- /************************************************************************/ -->
<!-- /*  END OF FILE                                       									 */ -->
<!-- /************************************************************************/ -->