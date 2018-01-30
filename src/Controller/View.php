<?php
namespace App\Controller;

class View
{
    private $htmlPart1;
    private $htmlPart2;
    private $myModel;

    public function __construct(Model $model)
    {
        $this->myModel = $model;
        $this->htmlPart1 = '<html><head><title>Hello World</title></head><body><a href="index.php?action=clicked">';
        $this->htmlPart2 = '</a></body></html>';
    }
    public function renderHtml()
    {
        // Get value from Model
        $message = $this->myModel->getMessage();
        // Render HTML
        $htmlPage = $this->htmlPart1.$message.$this->htmlPart2;
        return $htmlPage;
    }
}
?>
