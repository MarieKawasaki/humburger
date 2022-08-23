<?php get_header(); ?>


<?php
    if( have_posts() ) :
        while( have_posts() ) :
            the_post(); ?>
            <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <h2 class="post__ttl"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <ul class="post__meta">
                    <li class="post__meta__item">
                        <date class="post__meta__date"><?php echo get_the_date(); ?></date>
                    </li>
                    <li class="post__meta__item"><i class="fa fa-folder" aria-hidden="true"><?php the_category( ', ' ); ?></i></li>
                    <li class="post__meta__item"><i class="fa fa-tag" aria-hidden="true"><?php the_tags( '' ); ?></i></li>
                </ul>
                <?php the_post_thumbnail(); ?>
                <?php the_content( '続きを読む' ); ?>
            </div>
        <?php endwhile;
    else :
        ?><p>表示する記事がありません</p><?php
    endif;
?>


                <div class="l-main-visual p-single-main-visual">

                    <img class="p-single-main-visual__img" src="img/single-mainvisual.jpg" alt="singleページメイン画像">

                    <h1 class="p-single-main-visual__title c-mv-title">h1 チーズバーガー</h1>

                </div>


                <div class="p-single">
                    <section class="p-single-summary">

                        <h2 class="p-single-summary__detail-title">
                            見出しh2
                        </h2>

                        <p class="p-single-summary__detail-text">
                            Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。
                            Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。
                            Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。
                            Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。
                            Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。
                            Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。
                        </p>

                        <h3 class="p-single-summary__detail-h3">見出しh3</h3>

                        <h4 class="p-single-summary__detail-h4">見出しh4</h4>

                        <h5 class="p-single-summary__detail-h5">見出しh5</h5>

                        <h6 class="p-single-summary__detail-h6">見出しh6</h6>

                        <div class="p-single-summary__info">

                            <p class="p-single-summary__info-text">
                                Blockquote 引用タグ引用タグ引用タグ引用タグ引用タグ
                                引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ
                                引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ
                                引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ
                                引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ
                                引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ
                                引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ
                                引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ
                                引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引
                            </p>

                            <div class="p-single-summary__info-flex">

                                <span class="p-single-summary__info-note">
                                    出典元：
                                </span>

                                <a class="p-single-summary__info-source" href="#">
                                    ○○○○○○○○○○○○
                                </a>
                            </div>
                        </div>
                    </section>


                    <section class="p-single-photo">

                        <img class="p-single-photo__main" src="<?php echo get_template_directory_uri(); ?>/img/single-burger-potato.jpg" alt="">

                        <div class="p-single-photo__flex">

                            <img class="p-single-photo__sub" src="<?php echo get_template_directory_uri(); ?>/img/single-burger-potato.jpg" alt="">

                            <p class="p-single-photo__text">
                                テキストが入ります テキストが入ります テキストが入ります 
                                テキストが入ります テキストが入ります テキストが入ります 
                                テキストが入ります テキストが入ります テキストが入ります 
                                テキストが入ります テキストが入ります テキストが入ります 
                                テキストが入ります テキストが入ります テキストが入ります 
                                テキストが入ります テキストが入ります テキストが入ります 
                                テキストが入ります テキストが入ります テキストが入ります 
                                テキストが入ります テキストが入ります テキストが入ります 
                                テキストが入ります テキストが
                            </p>
                        </div>

                        <div class="p-single-photo__flex">

                            <p class="p-single-photo__text reverse">
                                テキストが入ります テキストが入ります テキストが入ります 
                                テキストが入ります テキストが入ります テキストが入ります 
                                テキストが入ります テキストが入ります テキストが入ります 
                                テキストが入ります テキストが入ります テキストが入ります 
                                テキストが入ります テキストが入ります テキストが入ります 
                                テキストが入ります テキストが入ります テキストが入ります 
                                テキストが入ります テキストが入ります テキストが入ります 
                                テキストが入ります テキストが入ります テキストが入ります 
                                テキストが入ります テキストが
                            </p>

                            <img class="p-single-photo__sub" src="<?php echo get_template_directory_uri(); ?>/img/single-burger-potato.jpg" alt="">

                        </div>

                        <img class="p-single-photo__second" src="<?php echo get_template_directory_uri(); ?>/img/single-burger-potato.jpg" alt="">

                        <ul class="p-single-photo__list">

                            <li class="p-single-photo__item"><img src="<?php echo get_template_directory_uri(); ?>/img/single-burger-potato.jpg" alt=""></li>
                            <li class="p-single-photo__item"><img src="<?php echo get_template_directory_uri(); ?>/img/single-burger-potato.jpg" alt=""></li>
                            <li class="p-single-photo__item"><img src="<?php echo get_template_directory_uri(); ?>/img/single-burger-potato.jpg" alt=""></li>
                            <li class="p-single-photo__item"><img src="<?php echo get_template_directory_uri(); ?>/img/single-burger-potato.jpg" alt=""></li>
                            <li class="p-single-photo__item"><img src="<?php echo get_template_directory_uri(); ?>/img/single-burger-potato.jpg" alt=""></li>
                            <li class="p-single-photo__item"><img src="<?php echo get_template_directory_uri(); ?>/img/single-burger-potato.jpg" alt=""></li>
                            <li class="p-single-photo__item"><img src="<?php echo get_template_directory_uri(); ?>/img/single-burger-potato.jpg" alt=""></li>
                            <li class="p-single-photo__item"><img src="<?php echo get_template_directory_uri(); ?>/img/single-burger-potato.jpg" alt=""></li>
                            <li class="p-single-photo__item"><img src="<?php echo get_template_directory_uri(); ?>/img/single-burger-potato.jpg" alt=""></li>

                        </ul>
                    </section>


                    <section class="p-single-list">

                        <p class="p-single-list__left">1.リストリストリスト <br>2.リストリストリスト</p>

                        <p class="p-single-list__second">1.リスト2リスト2リスト2 <br>2.リスト2リスト2リスト2</p>

                        <p class="p-single-list__left">1.リストリストリスト <br>2.リストリストリスト</p>

                        <p class="p-single-list__left">リストリストリスト <br>リストリストリスト</p>

                        <p class="p-single-list__second">リスト2リスト2リスト2 <br>リスト2リスト2リスト2</p>

                        <p class="p-single-list__left">リストリストリスト <br>リストリストリスト</p>

                    </section>
                    

                    <section class="p-single-html">

                        <code class="p-single-html__content">
                            <pre>&lt;html&gt;
        &lt;head&gt;
        &lt;/head&gt;
        &lt;body&gt;
        &lt;/body&gt;
&lt;/html&gt;</pre>
                        </code>

                    </section>


                    <section class="p-single-order">

                        <ul class="p-single-order__table">

                            <li class="p-single-order__table-left">
                                <ul class="p-single-order__table-group">
                                    <li class="p-single-order__table-item">テーブル</li>
                                    <li class="p-single-order__table-item">テーブル</li>
                                    <li class="p-single-order__table-item">テーブル</li>
                                    <li class="p-single-order__table-item">テーブル</li>
                                </ul>
                            </li>

                            <li class="p-single-order__table-right">
                                <ul class="p-single-order__table-group">
                                    <li class="p-single-order__table-item">テーブル</li>
                                    <li class="p-single-order__table-item">テーブル</li>
                                    <li class="p-single-order__table-item">テーブル</li>
                                    <li class="p-single-order__table-item">テーブル</li>
                                </ul>
                            </li>
                        </ul>

                        <button class="p-single-order__button c-button--buy">ボタン</button>

                        <p class="p-single-order__message">
                            boldboldboldboldboldboldbold
                        </p>

                    </section>
                </div>
            </div>



            <?php get_sidebar(); ?>
        </div>


        <?php get_footer(); ?>