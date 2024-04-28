<?

class Session
{
    public static function start()
    {
        session_start();
    }
    public static function unset()
    {
        session_unset();
    }
    public static function destroy()
    {
        session_destroy();
    }
    public static function set($key,$value)
    {
        //print( "\n<br>" .$key . "  " . $value['username']);
        $_SESSION[$key] = $value;
        //print_r($_SESSION);
        
    }
    
    public static function del($key)
    {
        unset($_SESSION[$key]);
    }

    public static function isset($key)
    {
        return isset($_SESSION[$key]);
    }
    public static function get($key,$default = false)
    {
        if(isset($_SESSION[$key]))
        {
            return $_SESSION[$key];   
        }
        else{
            return $default;
        }
    }
}



?>