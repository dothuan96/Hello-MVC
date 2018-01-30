<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class Controller
{
    private $myModel;
    private $myView;
    public function __construct()
    {
        $this->myModel = new Model();
        $this->myView = new View($this->myModel);
    }
    public function onPageLoad()
    {
        // Get demanded action from user
        if ( isset($_GET['action']) && !empty($_GET['action']) )
          $getAction = $_GET['action'];
        else
          $getAction = '';
        // Update value in Model with respect to the demanded action
        switch ($getAction)
        {
            case 'clicked':
                // set updated message in Model
                $this->myModel->setMessage('Updated Hello World!');
                break;
            default:
                // do nothing
                break;
        }
        // Ask View to render HTML
        $html = $this->myView->renderHtml();
        // Return rendered HTML page
        return new Response($html);
    }
}
