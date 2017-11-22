<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\CoreModule\Model;

use App\Model\BaseManager;
use Nette\Database\Context;

/**
 * Manager of paragraphs for webpages
 *
 * @author marek
 */
class ParagraphManager extends BaseManager{
    
    
    const 
        TABLE_NAME = 'paragraph',
        COLUMN_ID = 'id',
        COLUMN_URL = 'url';
            
    /*
     * Constructor for set databse
     */
    public function __construct(Context $database) {
        parent::__construct($database);
    }
    
    /* width (columns) of paragraph */
    protected $width;
    
    /*
     * Get all paragraphs by url
     * @param $url
     * @return IRow paragraphs
     */
    public function getParagraphs ($url) {
        return $this->database->table(self::TABLE_NAME)->where(self::COLUMN_URL, $url);
    }
    
    /*
     * Get paragraph by id (for edit)
     * @param $id
     * @return paragraph
     */
    public function getParagraph ($id) {
        return $this->database->table(self::TABLE_NAME)->where(self::COLUMN_ID, $id);
    }
    
    
    
    
}
