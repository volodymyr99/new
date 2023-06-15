<?php
$row[] = ['id' => '1', 'parent' => '0', 'label' => 'HOME1', 'url' => 'home1'];
$row[] = ['id' => '2', 'parent' => '1', 'label' => 'HOME1-1', 'url' => 'home11'];
$row[] = ['id' => '3', 'parent' => '1', 'label' => 'HOME1-1', 'url' => 'home11'];
$row[] = ['id' => '4', 'parent' => '0', 'label' => 'HOME2', 'url' => 'home2'];
$row[] = ['id' => '5', 'parent' => '4', 'label' => 'HOME2-2', 'url' => 'home22'];
$row[] = ['id' => '6', 'parent' => '4', 'label' => 'HOME2-2', 'url' => 'home22'];
$row[] = ['id' => '7', 'parent' => '0', 'label' => 'HOME3', 'url' => 'home3'];
$row[] = ['id' => '8', 'parent' => '7', 'label' => 'HOME3-3', 'url' => 'home33'];
$row[] = ['id' => '9', 'parent' => '7', 'label' => 'HOME3-3', 'url' => 'home33'];

$i = 1;
foreach($row as $r){
   $rows[$r['parent']][] = $r;

   echo '<pre>';
   echo $i.'<br>';
   echo 'r_parent:  '.$r['parent'].'<br>';
   print_r($rows);
   echo '<pre>';
   $i++;

}
/*echo '<pre>';
print_r($rows);
echo '<pre>';*/

function tree($rows, $parent){

    $tre = '';
    if(isset($rows[$parent])){
        $tre = '<ul>';
        foreach($rows[$parent] as $row){

            $tre .= '<li>';
            $tre .= '<a href="' . $row['url'] . '">' . $row['label'];
            $tre .= tree($rows, $row['id']);
            $tre .= '</a>';
            $tre .= '</li>';

        }
        $tre .= '</ul>';
    }
    return $tre;
}


echo '<pre>';
echo tree($rows, 0);
echo '</pre>';
?>