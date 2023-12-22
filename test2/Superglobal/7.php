
<?php
//------------------------------------------------------------
// VISITORS ONLINE COUNTER (السؤال قصدها فيه زي تبع الريفرش)
//------------------------------------------------------------
if (!isset($_SESSION)) {
  session_start();
}
function visitorsOnline()
{
    $session_path = session_save_path();
    $visitors = 0;
    $handle = opendir($session_path);

    while(( $file = readdir($handle) ) != false)
    {
        if($file != "." && $file != "..")
        {
            if(preg_match('/^sess/', $file))
            {
                $visitors++;
            }
        }
    }

    return $visitors;
}
echo visitorsOnline();
?>