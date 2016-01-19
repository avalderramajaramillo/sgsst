<?php
// app/views/categorias/getnodes.ctp
$data = array();
foreach ($nodes as $node)
{   $data[] = array(      "text" => $node['Organigrama']['cargo'],      "id" => $node['Organigrama']['id']   );
}
echo $javascript->object($data);
?>