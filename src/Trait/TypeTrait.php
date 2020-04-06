<?php
trait TypeTrait {

    public function getTypeLabel($type)
    {
        switch ($type)
        {
            case self::TYPE_FIRE:
                return "Feu";
                break;
            case self::TYPE_WATER:
                return "Eau";
                break;
            case self::TYPE_PLANT:
                return "Plante";
                break;
            default:
                return false;
                break;
        }
    }
}