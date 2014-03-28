<?php

$total_a = null;
$total_b = null;
$total_c = null;

if(!empty($_POST['id_number']))
{
    $id = $_POST['id_number'];
    
    $id_matchkey = substr($id, -1, 1);
    $id_length = strlen($id);

    if($id_length != 13) {
        echo "Error: ID number must have 13 digits";
    }   
    else
    {
        for ($i = 1; $i < 13; $i += 2)
        {
            $total_a += substr($id, $i-1,1);
            $total_b .= substr($id, $i, 1);
        }
        $total_b *= 2;
        for ($i = 0; $i < strlen($total_b); $i++)
        {
            $total_c += substr($total_b, $i, 1);
        }
    
        $total_d = ($total_a + $total_c);
        $total_e = (10 - substr($total_d, -1, 1));
    
        //echo "Total A: " . $total_a . "\n";
        //echo "Total B: " . ($total_b)*2 . "\n";
        //echo "Total C: " . $total_c;
        //echo "Total D: " . $total_d;
        //echo "Total E: " .  $total_e;
    
        if($id_matchkey == $total_e)
        {
            echo "Valid ID Number";
        }
        else
        {
            echo "Invalid ID Number";
        }
    }
}
?>
