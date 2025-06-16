<?php
namespace FddCloud\bean\req\seal;
class SealListFilterInfo
{
    public $categoryType;

    public $sealTags;

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

    /**
     * @return mixed
     */
    public function getSealTags()
    {
        return $this->sealTags;
    }

    /**
     * @param mixed $sealTags
     */
    public function setSealTags($sealTags) 
    {
        $this->sealTags = $sealTags;
    }



}