<?php
get_header();

//
////$myName = 'Naasir';
//$names = ['Naasir', 'Uways', 'Brad', 'Faysal']; // js way
////$names1 = array('Naasir1', 'Uways', 'Brad', 'Faysal'); // php way
//print_r($names);
//
////$count = 1;
////while ($count <= 100) {
////    echo "<li>$count</li>";
////    $count++;
////}
//$count = 0;
//while($count < count($names)){
//    echo "<li>Hi, my name is $names[$count]";
//    $count++;
//}
//
//
//
//


// have_posts();
// the_post();
// the_title();
// the_content();
while (have_posts()) {
    the_post(); ?>
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <?php the_content(); ?>
    <?php
}

get_footer();
?>