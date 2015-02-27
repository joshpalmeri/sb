<article>
    <section class="clearfix inside-header courses-books">
        <div class="border-box no-pad-wrapper clearfix">
            
            <h3 class="wrapper clearfix">Summer Courses</h3>

            <section class="clearfix inside-content inside-page-section-nav">
                <div class="border-box wrapper clearfix overflow-visible">
                    <header class="section-header clearfix">
                        <?php
                            $selected_sub_nav = 3;
                            $file = "summer-session/courses/courses-nav.php";
                            include($path . $content . $secLv . $file);
                        ?>
                    </header>
                </div>
            </section>
        </div>
    </section>

    <?php
        $file = "summer-session/inside-copy.php";
        //include($path . $content . $secLv . $file);
    ?>

    <?php
        $coursesLabel = 'courses';
        $filterPlaceholder = 'Filter Results';
        $searchDirections = '<span class="search-directions">or <a class="modify-search nivo-lightbox-summer-form" href="#modify-search" data-lightbox-type="inline">modify your search</a></span>';
        $modifySearchAfter = '<li><a class="modify-search-after nivo-lightbox-summer-form" href="#modify-search" data-lightbox-type="inline">Modify search</a></li>';

        if($search_response['number_of_results'] == 1) {
            $coursesLabel = 'course';
        }
        $coursesLabel = $search_response['number_of_results'] . ' ' . $coursesLabel;

        //If no query applied, showing all courses
        if(count($search_response['query']) == 0) {
            $coursesLabel = 'Showing all ' . $coursesLabel;
            $filterPlaceholder = 'Filter Courses';
            $searchDirections = '<span class="search-directions">or perform an <a class="nivo-lightbox-summer-form" href="#modify-search" data-lightbox-type="inline">advanced search</a></span>';
            $modifySearchAfter = '';
        }
    ?>

    <section id="summer-courses" class="clearfix inside-content alt-headers wrapper search-results-wrapper">

        <div id="modify-search" class="clearfix">
            <?php
                $file = "summer-session/widgets/course-search-form.php";
                include($path . $content . $secLv . $file);
            ?>
        </div>

        <h4>Course Results</h4>

        <div class="filter-wrapper border-box content clearfix sticky">
            <span class="query-result-text">
                <span><?=$render->displaySearchQuery($search_response['query'])?></span>
                <span><?=$coursesLabel?></span>
            </span>
            <input id="live-filter-search" type="text" class="rounded-input text-filter" placeholder="<?=$filterPlaceholder?>" />
            <div class="filter-controls clearfix">
                <div class="filter-status"></div>
                <div class="clear-filter hide-accessible border-box">Clear filter</div>
            <?=$searchDirections?>
            </div>
        </div>

        <div id="live-filter-list" class="border-box content clearfix">

            <ul id="search_result_list" class="course-list">
                <?=$render->displaySearchResults($search_response['search_results'])?>
                <?=$modifySearchAfter?>
            </ul>

        </div>

    </section>

    <?php
        $file = "summer-session/widgets/course-circles.php";
        include($path . $content . $secLv . $file);
    ?>

</article>