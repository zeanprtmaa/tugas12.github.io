<?php
function cetak_genap()
{
    for ($i = 0; $i <= 288; $i++) {
        if ($i % 2 == 0) {
            echo "$i, ";
        }
    }
}
cetak_genap();
