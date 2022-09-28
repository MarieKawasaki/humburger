<?php get_header(); ?>


    <div class="l-main-visual p-archive-main-visual">

        <h2 class="p-archive-main-visual__title--first c-mv-title">Search:</h2>
        <h3 class="p-archive-main-visual__title--second"><?php echo $_GET['s']; ?></h3>

    </div>
               

    <?php if ( empty( get_search_query() ) ) : // 検索キーワードがないとき ?>
        <p>検索キーワードが未入力です。</p>
        <?php else : // 検索キーワードがあるとき ?>
            <?php echo '“'.$_GET['s'] .'”の検索結果は：'.$wp_query->found_posts .'件です。'; // 検索キーワードと該当件数を表示?>
            <?php if ( have_posts() ) :  // 該当するエントリーがあるとき ?>
                <?php while ( have_posts() ) : the_post(); ?>
                     <!-- get_template_part( 'template-parts/content' ); -->
                    <li class="p-archive-article__item">

                        <img class="p-archive-article__img" src=<?php the_post_thumbnail(); ?>

                        <div class="p-archive-article__inner">

                            <div class="p-archive-article__summary">

                                <h3 class="p-archive-article__title c-archive-title"><?php the_title(); ?></h3>

                                <h4 class="p-archive-article__subtitle c-archive-subtitle">小見出しが入ります</h4>

                                <p class="p-archive-article__text c-archive-text">
                                    テキストが入ります。テキストが入ります。
                                    テキストが入ります。テキストが入ります。
                                    テキストが入ります。テキストが入ります。
                                    テキストが入ります。テキストが入ります。
                                </p>
                            </div>

                            <button class="p-archive-article__button c-button--read">詳しく見る</button>

                        </div>
                    </li>
                <?php endwhile; ?>
                <?php else : // 該当するエントリーがないとき ?>
                    <p>検索されたキーワードにマッチする記事はありませんでした</p>
            <?php endif; ?>
    <?php endif;?>



                <section class="p-archive-pagination">

                    <div class="p-archive-pagination__sp">

                    <?php if ( $wp_query -> max_num_pages > 1 ) : //ページ数が1を超える場合に処理 ?>
                        <div class="p-archive-pagination__left">


                            <a class="p-archive-pagination__prev" href="#"><?php previous_posts_link( '&Lt;' ); ?><?php previous_posts_link( '前へ' ); ?></a>

                        </div>
                        
                        <div class="p-archive-pagination__right">

                            <a class="p-archive-pagination__next" href="#"><?php next_posts_link( '次へ' ); ?><?php next_posts_link('&Gt;'); ?></a>

                        </div>
                        

                    <?php endif; ?>
                    </div>

                    <div class="p-archive-pagination__pc">

                        <?php wp_pagenavi(); ?>

                    </div>

                    
                </section>

            </div>


            <?php get_sidebar(); ?>
        </div>


        <?php get_footer(); ?>