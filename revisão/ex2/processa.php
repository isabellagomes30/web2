<?php
function N_sal($sal, $pa){
        
        $ns = $sal + ($sal*($pa/100));
        return $ns;
}
echo 'Novo salário: R$'.N_sal($_POST['sa'], $_POST['pa']);
?>