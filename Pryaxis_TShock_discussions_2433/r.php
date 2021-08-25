<?php // Hide ip addr

function main($i)
{
    $o = $i;

    $i_content = file_get_contents($i);
    
    $string = $i_content;
    $pattern = '/\(\d+\.\d+\.\d+\.\d+\)/';
    $replacement = '(*.*.*.*)';
    
    $o_r = preg_replace($pattern, $replacement, $string);
    
    file_put_contents($o, $o_r);
}

foreach (glob('./*.log') as $key => $value)
{
    main($value);
}

?>
