<?php get_header(); ?>



                <div class="l-main-visual p-archive-main-visual">

                    <h2 class="p-archive-main-visual__title--first c-mv-title">Menu:</h2>
                    <h3 class="p-archive-main-visual__title--second"><?php the_category(); ?></h3>
                    
                </div>



                <section class="p-archive-content">

                    <h2 class="p-archive-content__title">小見出しが入ります</h2>

                    <p class="p-archive-content__text">テキストが入ります。テキストが入ります。
                       テキストが入ります。テキストが入ります。
                       テキストが入ります。テキストが入ります。
                       テキストが入ります。テキストが入ります。
                       テキストが入ります。テキストが入ります。
                       テキストが入ります。テキストが入ります。
                       テキストが入ります。テキストが入ります。
                       テキストが入ります。テキストが入ります。
                       テキストが入ります。テキストが入ります。
                       テキストが入ります。テキストが入ります。
                       テキストが入ります。テキストが入ります。
                       テキストが入ります。テキストが入ります。
                    </p>

                </section>


                <section class="p-archive-article">

                    <ul class="p-archive-article__list">


                    <?php
                        if( have_posts() ) : //1.投稿データがあるかの条件分岐。
                            while( have_posts() ) : // 2.表示する投稿データがあれば繰り返し処理開始
                                the_post(); //3.ループ処理に必要なカウント処理等 ?>
                                
                            

                                <li class="p-archive-article__item">

                                    <!-- <img class="p-archive-article__img" src="<?php echo get_template_directory_uri(); ?>/img/archive-article-image.jpg" alt=""> -->
                                    <img class="p-archive-article__img" src="<?php the_post_thumbnail(); ?>

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

                                
                            <?php endwhile; // 5.繰り返し処理ここまで。投稿データがまだあればwhileに戻る。なければ終了
                        else : //6.投稿データがなければ
                            ?><p>表示する記事がありません</p><?php //7.ない時の処理
                        endif; ?> 
                    


                        

                        


                        

                    </ul>
                </section>


                <section class="p-archive-pagination">

                    <div class="p-archive-pagination__sp">

                        <?php if ( $wp_query -> max_num_pages > 1 ) : //ページ数が1を超える場合に処理 ?>
                            <div class="p-archive-pagination__left">

                                <div class="p-archive-pagination__arrow c-pagination--left"></div>

                                <a class="p-archive-pagination__prev" href="#"><?php previous_post_link('« %link','前へ'); ?></a>

                            </div>
                            
                            <div class="p-archive-pagination__right">

                                <a class="p-archive-pagination__next" href="#"><?php next_post_link( '次へ' ); ?></a>

                                <div class="p-archive-pagination__arrow c-pagination--right"></div>

                            </div>
                            

                        <?php endif; ?>
                    </div>

                    <div class="p-archive-pagination__pc">

                        <?php if ( $wp_query -> max_num_pages > 1 ) :  ?>
                        
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

                        
                        <?php endif; ?>
                    </div>

                    <?php wp_pagenavi(); ?>
                </section>

            </div>


            <?php get_sidebar(); ?>
        </div>


        <?php get_footer(); ?>