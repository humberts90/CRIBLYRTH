<?php
$this->breadcrumbs=array(
	'Inicio'=>array('index'),
	'Oferta TAP'
);
echo $this->renderPartial('menu', array('usu'=>$Usuario));


?>



<h1>Oferta TAP</h1>


<br></br>
<div id = "pasantias" >
<div class="pasantias">
<?php

$this->widget('zii.widgets.CListView', array(
    'dataProvider'=>$pasantias,
    'itemView'=>'_viewp',   // refers to the partial view named '_post'
/*    'sortableAttributes'=>array(
        'Titulo',
    ),*/
));?>
</div><?php
$this->widget('CLinkPager', array(
	'header' => '',
	'firstPageLabel' => '&lt;&lt;',
	'prevPageLabel' => '&lt;',
	'nextPageLabel' => '&gt;',
	'lastPageLabel' => '&lt;&lt;',
	'pages' => $pagesP,
));
?>
</div>