<?php get_header(); ?>


<?php if (have_posts()): ?>
<?php
  if (isset($_GET['s']) && empty($_GET['s'])) {
    echo '検索キーワード未入力'; // 検索キーワードが未入力の場合のテキストを指定
  } else {
    echo '“'.$_GET['s'] .'”の検索結果：'.$wp_query->found_posts .'件'; // 検索キーワードと該当件数を表示
  }
?>
<ul>
<?php while(have_posts()): the_post(); ?>


    <div class="l-main-visual p-archive-main-visual">

        <h2 class="p-archive-main-visual__title--first c-mv-title">Menu:</h2>
        <h3 class="p-archive-main-visual__title--second"><?php echo $_GET['s']; ?></h3>

    </div>


    <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <h2 class="post__ttl"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <?php the_post_thumbnail(); ?>
        <ul class="post__meta">
            <li class="post__meta__item">
                <date class="post__meta__date"><?php echo get_the_date(); ?></date>
            </li>
            <li class="post__meta__item"><i class="fa fa-folder" aria-hidden="true"><?php the_category( ', ' ); ?></i></li>
            <li class="post__meta__item"><i class="fa fa-tag" aria-hidden="true"><?php the_tags( '' ); ?></i></li>
        </ul>
                
    </div>
<li>
<a href="<?php the_permalink(); ?>"><?php echo get_the_title(); ?></a>
</li>
<?php endwhile; ?>
</ul>
<?php else: ?>
検索されたキーワードにマッチする記事はありませんでした
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