<?php
require_once "DatabaseControl.php";

$db = new DatabaseControl;

$gold = $db->getGoldExchangeRate();
$silver = $db->getSilverExchangeRate();
$platinum = $db->getPlatinumExchangeRate();
$palladium = $db->getPalladiumExchangeRate();

echo<<<END
    <script>
    localStorage.setItem("myElement", "Przykładowa wartość");
        localStorage.setItem("gold", "$gold");
        localStorage.setItem("silver", "$silver");
        localStorage.setItem("platinum", "$platinum");
        localStorage.setItem("palladium", "$palladium");
    </script>
END;

?>