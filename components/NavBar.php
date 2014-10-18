<?php

class NavBar {

    protected $bar;

    function __construct() {
        $this->bar = simplexml_load_file(COMPONENTS.'NavBar.xml');
    }

    public function to_html() {
        $string = '';

        foreach ($this->bar->item as $item) {
            $string .= '<li>
                <img src="'.IMAGES.'navBar/nav_off.png" id="'.$item->name.'">
                <a href="'.SITE_URL.$item->name.'" onMouseOver="MM_swapImage(\''.$item->name.'\',\'\',\''.IMAGES.'navBar/nav_on.png\',1)" onMouseOut="MM_swapImgRestore()">
                    <img src="'.IMAGES.'navBar/'.$item->name.'.png" alt="'.$item->alt.'" />
                    <h3 class="mobile_text">'.$item->alt.'</h3>
                </a>
            </li>';
        }
        return $string;
    }
}
