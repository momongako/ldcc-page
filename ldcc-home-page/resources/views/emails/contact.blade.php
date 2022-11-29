<?php
$view = str_replace('{{name}}',$contact['name'],$body);
$view = str_replace('{{email}}',$contact['email'],$view);
$view = str_replace('{{content}}',$contact['content'],$view);
$view = str_replace('{{phone}}',$contact['phone'],$view);

?>
{!! html_entity_decode($view) !!}
