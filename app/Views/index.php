<?= $this->extend('layout/sablona'); ?>

<?= $this->section('content'); ?>

<h1> Cyklo závody </h1>
<?php

    $table = new \CodeIgniter\View\Table();
    $table->setHeading('Název');
    $poradi = 1;

    foreach ($zavod as $row) {
        $table->addRow(anchor("zavod/".$row->id, $row->default_name));
    }

    $template = array(
        'table_open'=> '<table class="table table-bordered">',
        'thead_open'=> '<thead>',
        'thead_close'=> '</thead>',
        'heading_row_start'=> '<tr>',
        'heading_row_end'=>' </tr>',
        'heading_cell_start'=> '<th>',
        'heading_cell_end' => '</th>',
        'tbody_open' => '<tbody>',
        'tbody_close' => '</tbody>',
        'row_start' => '<tr>',
        'row_end'  => '</tr>',
        'cell_start' => '<td>',
        'cell_end' => '</td>',
        'row_alt_start' => '<tr>',
        'row_alt_end' => '</tr>',
        'cell_alt_start' => '<td>',
        'cell_alt_end' => '</td>',
        'table_close' => '</table>'
        );
        
        $table->setTemplate($template);

        echo $table->generate();

        

?>

<?=$this->endSection(); ?>