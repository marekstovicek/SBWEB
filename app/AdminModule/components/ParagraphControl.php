<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\AdminModule\Components;

use Nette\Application\UI\Control;
/**
 * Description of ParagraphControl
 *
 * @author marek
 */
class ParagraphControl extends Control{
    
    /* Paragraph manager */
    private $paragraphManager;
    
    /* Width of control */
    private $spanWidth;
    
    /*
     * Constructor for injecting ParagraphManager
     */
    public function __construct(ParagraphManager $paragrapgManager) {
        parent::__construct();
        $this->paragraphManager= $paragrapgManager;
    }
    
    /*
     * Setter for spanWidth 
     * value for grid layout system
     */
    public function setSpanWidth($spanWidth) {
        if ($spanWidth > 12)
          $spanWidth = 12;
        $this->spanWidth = $spanWidth;
    }
    
}
