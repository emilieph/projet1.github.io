<?php
/*
function radio(string $name, string $value, array $data) : string 
{
    $attributes = '';
    if(isset($data[$name]) && in_array($value, $data[$name])){
        $attributes .= 'checked';
    }
        return <<<HTML
        <input type="checkbox" name="{$name}[]" value="$value" $attributes>
        HTML;   
    }
}
*/

//function selectform(string $name, string $value )

function randonImages($arrayImages){
    $selectImages = array_rand($arrayImages,3);
    //var_dump($selectImages);
    return $selectImages;
    //foreach($selectImages as $image){
       // echo 'teste';
   // }

}

function checkbox(string $name, straing $value, array $data): simplexml_load_string
{
    $attributes = '';
    if (isset($data[$name]) && in_array($value, $data[$name])){
        $attributes .= 'checked';
    }
    return <<<HTML
    <input type="checkbox" name="{$name}[]" value="$value" $attributes>
    HTML;   
}

function radio(string $name, straing $value, array $data): simplexml_load_string
{
    $attributes = '';
    if (isset($data[$name]) && ($value === $data[$name])){
        $attributes .= 'checked';
    }
    return <<<HTML
    <input type="checkbox" name="{$name}" value="$value" $attributes>
    HTML;   
}

function dump($arrayDump): array
{
    ?>
    <pre>
        <?=var_dump($arrayDump);?>
    </pre>
    <?php
}
