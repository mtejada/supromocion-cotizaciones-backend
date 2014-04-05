<?php $this->beginContent('//layouts/main'); ?>
<div class="container">
    <div id="content" style="padding:0">
        <div class="tabs_izquierda">
            <div class="menu">
                <ul class="listaopciones">
                    <li <?php echo (isset($this->paginaactual) && $this->paginaactual == "Clientes" ? "class=\"selected\"" : ""); ?>>

                        <a href="<?php echo Yii::app()->createUrl('clientes/admin') ?>">
                            ABM Clientes
                        </a>
                    </li>
                    <li <?php echo (isset($this->paginaactual) && $this->paginaactual == "ProductosTipos" ? "class=\"selected\"" : ""); ?>>

                        <a href="<?php echo Yii::app()->createUrl('productosTipos/admin') ?>">
                            ABM Categorias de productos
                        </a>
                    </li>
                    <li <?php echo (isset($this->paginaactual) && $this->paginaactual == "ImpresionesTipos" ? "class=\"selected\"" : ""); ?>>

                        <a href="<?php echo Yii::app()->createUrl('impresionestipos/admin') ?>">
                            ABM Tipos de Impresion
                        </a>
                    </li>
                    <li <?php echo (isset($this->paginaactual) && $this->paginaactual == "Materiales" ? "class=\"selected\"" : ""); ?>>
                        <a href="<?php echo Yii::app()->createUrl('materiales/admin') ?>">
                            ABM Materiales
                        </a>
                    </li>

                </ul>
            </div>
            <div class="datos">
                <?php echo $content; ?>
            </div>
        </div>
        <div class="clear"></div>
    </div><!-- content -->
</div>
<?php $this->endContent(); ?>