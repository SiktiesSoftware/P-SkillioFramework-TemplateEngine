<?php
/**
 * Manage the views
 */
class View
{
    private string $viewContent;                                // Content of the view
    public string $view;                                        // Name of the view
    protected array $datas;                                     // Datas sended to the view
    private const PATH = __DIR__."/../Views";          // Path of the views
    private const EXTENSION = ".skiliox.php";                    // Extensions of the views
    private const PATTERNS = 
    [
        "foreach" => "/\[foreach\s.*?\].+\[\/foreach\]/s",
        "if" => "/\[if\s.*?\].+\[\/if\]/s"
    ];

    /**
     * View class constructor
     * 
     * @param path => Path of the view
     */
    public function __construct(string $view, ?array $datas = null)
    {
        $this->view = $view;
    }

    /**
     * Set datas to the view
     * 
     * @param datas => Array of datas
     */
    public function WithDatas(array $datas)
    {
        $this->datas = $datas;
        return $this;
    }

    /**
     * Parse the datas and display the view
     * 
     * @return string => return the view content
     */
    public function Parse() : string
    {
        // Get the view
        $viewContent = $this->Get();

        $string = "Le carré de 2 est 4, le carré de 3 est 9, le carré de 4 est 16.";

        $new_string = preg_replace_callback('/\d+/', function($match) 
        {
            foreach ($match as $key => $value) 
            {
                $squared = pow($value, 2);
                $match[$key] = $squared;
            }
            return implode($match);
        }, $string);

        echo $new_string;

        echo "<pre>";
        var_dump($viewContent);
        echo "</pre>";

        preg_replace_callback(self::PATTERNS["foreach"], function($matches)
        {
            foreach ($matches as $key => $match) 
            {
                $matches[$key] = "test";
            }
            var_dump($matches);
            return $matches;

        }, $viewContent);

        // Replace variables
        ob_start();
        eval('?>' . $viewContent);
        $content = ob_get_clean();

        // Return the view content
        return $content;
    }

    /**
     * Get a view file
     * 
     * @return string => Content of a page
     */
    private function Get() : string
    {
        // Set the path of the file
        $path = null;
        foreach (explode("->", $this->view) as $key => $file) 
        {
            $path .= "/".$file;
        }
        
        // Return the content of a view
        return file_get_contents(self::PATH . $path . self::EXTENSION);
    }
}
?>