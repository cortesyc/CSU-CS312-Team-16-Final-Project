<?php
use \Model\MilestoneModel;

class Controller_milestone extends Controller_Template {

    public $template = "milestoneTemplate.php";

    public function action_index() {
        $data = array();
        $this->template->title = "Homepage";
        $this->template->content = View::forge("milestone/index.php", $data);
        $this->template->css = "index.css";
    }

    public function action_about() {
        $data = array();
        $this->template->title = "About";
        $this->template->content = View::forge("milestone/about.php", $data);
        $this->template->css = "about.css";
    }

    public function action_generator() {
        $data = array('colorCount' => MilestoneModel::colorCount(), 'colorInfo' => MilestoneModel::colorsInfo());
        $this->template->title = "Color Generator";
        $this->template->content = View::forge("milestone/generator.php", $data);   
        $this->template->css = "generator.css";
    }

    public function get_index() { //Function called when the HTTP method is GET.      
        $numRowsCols = Input::get('rowsCols');
        $numColors = Input::get('colors');
        if(isset($numRowsCols) && isset($numColors)) {    
            if(($numRowsCols && $numColors)
            && in_array($numRowsCols,range(1,26))
            && in_array($numColors,range(1,10))) 
            {   
                $data = array("numRowsCols" => $numRowsCols, 
                "numColors" => $numColors, 
                'colorCount' => MilestoneModel::colorCount(), 
                'colorInfo' => MilestoneModel::colorsInfo());
                $this->template->title = "Color generator tables";
                $this->template->content = View::forge('milestone/tables.php', $data);
                $this->template->css = "generator.css";
            }
            else{
                $failView = View::forge('milestone/failure.php');
                $data = array('failView' => $failView);
                return Response::forge(View::forge("milestone/generator.php", $data));
            }
        } else {   
            $data = array();
            $this->template->title = "Homepage";
            $this->template->content = View::forge("milestone/index.php", $data);
            $this->template->css = "index.css";
        }
    }

}
?>
