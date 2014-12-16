<?php
/**
 * Created by PhpStorm.
 * User: SonChuoi
 * Date: 12/15/2014
 * Time: 11:17 AM
 */

class Form_User extends Zend_Form{
    public function init(){
        $this->setAction('')->setMethod('post');
        $name=$this->createElement("text","name",array(
            "label" => "Full Name",
            "size" => "30",
        ));
        $email=$this->createElement("text","email",array(
            "label" => "Email",
            "size"  => "30",
        ));
        $gender=$this->createElement("radio","gender",array(
            "label" => "Gender",
            "multioptions"=> array(
                "1" => "Male",
                "2" => "Female",
            )
        ));
        $country=$this->createElement("select","country",array(
            "label" => "Country",
            "multioptions"=> array(
                "1" => "VietNam",
                "2" => "Cambodia",
                "3" => "Thai Lan",
            )
        ));
        $note=$this->createElement("textarea","note",array(
            "label" => "Note",
            "cols"    => "30",
            "rows"  => "5",
        ));
        $submit=$this->createElement("submit","submit");
        $this->addElements(array($name,$email,$gender,$country,$note,$submit));
    }
}