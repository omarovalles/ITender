<?php
class plantilla{
    static $instancia = null;

    public static function aplicar()
    {
        if(self::$instancia == null){
            self::$instancia == new plantilla();
        }
        return self::$instancia;
    }
    
    function __construct()
    {
    
    }

    function __destruct()
    {
    }
}
?>