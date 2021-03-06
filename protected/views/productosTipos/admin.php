<?php

/* @var $this ProductosTiposController */
/* @var $model ProductosTipos */

$this->breadcrumbs = array(
    'Tipo de producto' => array('admin'),
    'Manage',
);
?>
<h1>ABM Categorias de producto</h1>
<?php

$this->widget('zii.widgets.grid.CGridView', array(
    'id' => 'productos-tipos-grid',
    'dataProvider' => $model->search(),
    'filter' => $model,
    'columns' => array(
        'descripcion',
        array(
            'class' => 'CButtonColumn',
            'template' => '{abm_material}', /* {delete} */
            'buttons' => array
                (
                'abm_material' => array(
                    'label' => 'Agregar posibles materiales al tipo de producto',
                    'imageUrl' => $this->createUrl('../../images/silk/pencil.png'),
                    'url' => 'Yii::app()->createUrl("productostiposmateriales/admin", array("id"=>$data->idproducto_tipo))',
                ),
            )
        ),
    ),
));
?>
