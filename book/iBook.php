<?php
/**
 * Created by PhpStorm.
 * User: Rizayev Elsevar
 * Date: 30.12.16
 * Time: 11:04
 * File: iBook.php
 */

namespace book;


interface iBook {

    public function getName();
    public function setName();
    public function getId();
    public function getType();
    public function getAuthor();
    public function getYear();
    public function getPage();
    public function getCondition();
}