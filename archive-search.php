<?php get_header(); ?>


    <div class="l-main-visual p-archive-main-visual">

        <h2 class="p-archive-main-visual__title--first c-mv-title">Menu:</h2>
        <h3 class="p-archive-main-visual__title--second"><?php echo $_GET['s']; ?></h3>

    </div>

    <?php if (have_posts()): ?> 
        <?php
            if (isset($_GET['s']) && empty($_GET['s'])) {
                echo '検索キーワード未入力'; // 検索キーワードが未入力の場合のテキストを指定
            } else {
                echo '“'.$_GET['s'] .'”の検索結果は：'.$wp_query->found_posts .'件です。'; // 検索キーワードと該当件数を表示
            }
        ?>

        <ul>
    <?php while(have_posts()): the_post(); ?>


        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    

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
    </div>
        
    <?php endwhile; ?>
    </ul>
    <?php else: ?>
    <p>検索されたキーワードにマッチする記事はありませんでした</p>
    <?php endif; ?>
               
            




                <section class="p-archive-pagination">

                    <div class="p-archive-pagination__sp">

                    <?php if ( $wp_query -> max_num_pages > 1 ) : //ページ数が1を超える場合に処理 ?>
                        <div class="p-archive-pagination__left">

                            <div class="p-archive-pagination__arrow c-pagination--left"></div>

                            <a class="p-archive-pagination__prev" href="#"><?php next_posts_link( '前へ' ); ?></a>

                        </div>
                        
                        <div class="p-archive-pagination__right">

                            <a class="p-archive-pagination__next" href="#"><?php previous_posts_link( '次へ' ); ?></a>

                            <div class="p-archive-pagination__arrow c-pagination--right"></div>

                        </div>
                        

                    <?php endif; ?>
                    </div>

                    <div class="p-archive-pagination__pc">

                        <span class="p-archive-pagination__info">page 1/10</span>

                        <div class="p-archive-pagination__arrow c-pagination--left"></div>

                        <div class="p-archive-pagination__list">
                            <a class="p-archive-pagination__num active" href="#">1</a>
                            <a class="p-archive-pagination__num" href="#">2</a>
                            <a class="p-archive-pagination__num" href="#">3</a>
                            <a class="p-archive-pagination__num" href="#">4</a>
                            <a class="p-archive-pagination__num" href="#">5</a>
                            <a class="p-archive-pagination__num" href="#">6</a>
                            <a class="p-archive-pagination__num" href="#">7</a>
                            <a class="p-archive-pagination__num" href="#">8</a>
                            <a class="p-archive-pagination__num" href="#">9</a>
                        </div>
                        

                        <div class="p-archive-pagination__arrow c-pagination--right"></div>

                    </div>
                </section>

            </div>


            <?php get_sidebar(); ?>
        </div>


        <?php get_footer(); ?>