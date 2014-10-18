<?php
/**
 * This NavBarGenerator is temporary.
 * It builds a nav bar looking at directory structure from a base folder
 * It uses the names of folders to generate link urls and names
 */

uses ("NavBarArrayGenerator");

class FolderBasedNavBarArrayGenerator implements NavBarArrayGenerator {

    protected $base_folder;
    protected $nav_array;
    protected $base_url;

    public function __construct($base_folder, $base_url = SITE_URL) {
        $this->base_folder = $base_folder;
        $this->base_url = $base_url;
    }

    public function get_nav_bar() {
        $this->nav_array = $this->build_nav_array($this->base_folder,
                                                  SITE_URL.$this->base_folder);
        return $this->nav_array;
    }

    private function build_nav_array($folder, $base_url) {
        $contents = scandir(SITE_PAGES.$folder);
        $returnArray = [];

        foreach($contents as $file) {
            $name = explode(".", $file);

            if (!starts_with($file, ".") && $name[1] == "php") {
                $returnArray[$this->namify($name[0])] = $base_url.$folder.$this->urlify($name[0]);
            } elseif (!starts_with($file, ".")) {
                $returnArray[$this->namify($name[0])] = $this->build_nav_array($folder.$name[0].'/',
                                                                               $base_url.$folder);
            }
        }
        return $returnArray;
    }

    private function urlify($file_name) {
        $url = str_replace("index", "", $file_name);
        return $url;
    }

    private function namify($file_name) {
        $name = str_replace(array("-", "_"), " ", $file_name);

        if(starts_with($name, "why")) {
            $name .= "?";
        }

        $name = str_replace("index", "home page", $name);
        return ucwords(strtolower($name));
    }

} 