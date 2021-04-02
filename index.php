<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

<link href="<?php echo plugin_dir_url( __DIR__ ).'slide-mini-fiche/css/main.css';?>" rel="stylesheet">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>


<?php
include plugin_dir_path( __FILE__ ) . '/int.php';
include plugin_dir_path( __FILE__ ) . '/function.php';
include plugin_dir_path( __FILE__ ) . '/src/component.php';


$data=get_data(['post_type'=>'mini_fiche', 'post_in'=>array(get_field("lien_de_la_mini_fiche")[0])]);

include plugin_dir_path( __FILE__ ) . '/src/bs-slide.php';
;?>

