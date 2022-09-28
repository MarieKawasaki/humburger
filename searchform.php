<form action="<?php echo home_url('/'); ?>" class="p-header__search-form" method="get">

                            <div class="p-header__search-box c-loupe">
                                <input type="search" placeholder="チーズバーガー"<?php if(!is_search()){ echo 'SEARCH';} ?> name="s" id="s" value="<?php if(is_search()){ echo get_search_query();} ?>"/>
                            </div>

                            <button class="p-header__search-button c-button--search">検索</button>

                        </form>