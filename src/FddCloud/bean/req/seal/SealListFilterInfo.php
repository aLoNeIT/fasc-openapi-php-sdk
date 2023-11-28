<?php


namespace FddCloud\bean\req\seal;
class SealListFilterInfo
{
    public $categoryType;

    /**
     * @return mixed
     */
    public function getCategoryType()
    {
        return $this->categoryType;
    }

    /**
     * @param mixed $categoryType
     */
    public function setCategoryType($categoryType)
    {
        $this->categoryType = $categoryType;
    }

}