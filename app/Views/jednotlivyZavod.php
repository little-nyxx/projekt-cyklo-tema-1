<?= $this->extend('layout/sablona'); ?>

<?= $this->section('content'); ?>

<h1>Závody</h1>
<!-- název závodu, rok, datum (upravený), logo, kategorie, vlajka, ročník, počet etap -->
 <?php
 $table = new \CodeIgniter\View\Table();
 $table->setHeading('Název', "Rok", "Datum", "Logo", "Kategorie", "Vlajka", "Ročník", "Počet etap");
 $poradi = 1;

 foreach ($zavodyYear as $row) {
     $table->addRow($row->real_name, $row->year, "datum = udělat aby bylo pěkné", "načíst obrázek", $row->category, "vlajka", $row->year, "sečíst počet kilometrů z tabulky stage :)))");
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

<?= $this->endSection() ?>