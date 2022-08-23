<?php
class App
{
    protected $controller = 'Home';
    protected $method = 'index';
    protected $params = [];

    // function untuk menampilkan url
    public function __construct()
    {
        $url = $this->parseURL();

        // check controller
        if (isset($url[0])) {
            # code...
            if (file_exists('../app/controllers/' . $url[0] . '.php')) {
                $this->controller = $url[0];
                unset($url[0]);
            }
        }

        require_once '../app/controllers/' . $this->controller . '.php';
        $this->controller = new $this->controller();

        // check method
        if (isset($url[1])) {
            if (method_exists($this->controller, $url[1])) {
                $this->method = $url[1];
                unset($url[1]);
            }
        }

        // $this->params = $url ? array_values($url) : [];

        // check params
        if (!empty($url)) {
            $this->params = array_values($url);
            // var_dump($url);
        }

        // run controller, method and parameters if any
        call_user_func_array([$this->controller, $this->method], $this->params);
    }

    // function untuk menangkap url
    public function parseURL()
    {
        if (isset($_GET['url'])) {
            $url = rtrim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            return $url;
        }
    }

    // function untuk parsing atau konfigurasi url
}
?>
