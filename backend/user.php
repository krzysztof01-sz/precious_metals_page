<?php
require_once "DatabaseControl.php";

$gold = $db->getGoldExchangeRate();
$silver = $db->getSilverExchangeRate();
$platinum = $db->getPlatniumExchangeRate();
$palladium = $db->getPalladiumExchangeRate();

echo<<<END
    <script>
        localStorage.setItem('gold', '$gold');
        localStorage.setItem('silver', '$silver');
        localStorage.setItem('platinum', '$platinum');
        localStorage.setItem('palladium', '$palladium');
    </script>
END;

?>