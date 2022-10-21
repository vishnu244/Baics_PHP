<?php 

interface a {
    public function abc();
}

interface b {
    public function pqr();
}

class a, b {
function abc()
{
    echo "ABC";
}

}
class b extends a {
    function pqr()
{
    echo "PQR";
}
}
$obj = new b();

$obj ->abc()

?>