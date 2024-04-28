<?php

namespace FddCloud\bean\req;
class OpenId
{
    public $idType;

    public $openId;

    /**
     * @return mixed
     */
    public function getIdType()
    {
        return $this->idType;
    }

    /**
     * @param mixed $idType
     */
    public function setIdType($idType)
    {
        $this->idType = $idType;
    }

    /**
     * @return mixed
     */
    public function getOpenId()
    {
        return $this->openId;
    }

    /**
     * @param mixed $openId
     */
    public function setOpenId($openId)
    {
        $this->openId = $openId;
    }


}


class UserInfoExtend
{
    public $bankAccountNo;

    public $mobile;

    /**
     * @return mixed
     */
    public function getBankAccountNo()
    {
        return $this->bankAccountNo;
    }

    /**
     * @param mixed $bankAccountNo
     */
    public function setBankAccountNo($bankAccountNo)
    {
        $this->bankAccountNo = $bankAccountNo;
    }

    /**
     * @return mixed
     */
    public function getMobile()
    {
        return $this->mobile;
    }

    /**
     * @param mixed $mobile
     */
    public function setMobile($mobile)
    {
        $this->mobile = $mobile;
    }


}

class ActorUser
{
    public $actorUserId;

    public $userIdentInfo;

    public $userInfoExtend;

    /**
     * @return mixed
     */
    public function getActorUserId()
    {
        return $this->actorUserId;
    }

    /**
     * @param mixed $actorUserId
     */
    public function setActorUserId($actorUserId)
    {
        $this->actorUserId = $actorUserId;
    }

    /**
     * @return mixed
     */
    public function getUserIdentInfo()
    {
        return $this->userIdentInfo;
    }

    /**
     * @param mixed $userIdentInfo
     */
    public function setUserIdentInfo($userIdentInfo)
    {
        $this->userIdentInfo = $userIdentInfo;
    }

    /**
     * @return mixed
     */
    public function getUserInfoExtend()
    {
        return $this->userInfoExtend;
    }

    /**
     * @param mixed $userInfoExtend
     */
    public function setUserInfoExtend($userInfoExtend)
    {
        $this->userInfoExtend = $userInfoExtend;
    }


}

class ActorCorp
{
    public $actorCorpId;

    public $corpIdentInfo;

    public $corpInfoExtend;

    public $operatorId;

    public $operatorIdentInfo;

    public $operatorInfoExtend;

    /**
     * @return mixed
     */
    public function getActorCorpId()
    {
        return $this->actorCorpId;
    }

    /**
     * @param mixed $actorCorpId
     */
    public function setActorCorpId($actorCorpId)
    {
        $this->actorCorpId = $actorCorpId;
    }

    /**
     * @return mixed
     */
    public function getCorpIdentInfo()
    {
        return $this->corpIdentInfo;
    }

    /**
     * @param mixed $corpIdentInfo
     */
    public function setCorpIdentInfo($corpIdentInfo)
    {
        $this->corpIdentInfo = $corpIdentInfo;
    }

    /**
     * @return mixed
     */
    public function getCorpInfoExtend()
    {
        return $this->corpInfoExtend;
    }

    /**
     * @param mixed $corpInfoExtend
     */
    public function setCorpInfoExtend($corpInfoExtend)
    {
        $this->corpInfoExtend = $corpInfoExtend;
    }

    /**
     * @return mixed
     */
    public function getOperatorId()
    {
        return $this->operatorId;
    }

    /**
     * @param mixed $operatorId
     */
    public function setOperatorId($operatorId)
    {
        $this->operatorId = $operatorId;
    }

    /**
     * @return mixed
     */
    public function getOperatorIdentInfo()
    {
        return $this->operatorIdentInfo;
    }

    /**
     * @param mixed $operatorIdentInfo
     */
    public function setOperatorIdentInfo($operatorIdentInfo)
    {
        $this->operatorIdentInfo = $operatorIdentInfo;
    }

    /**
     * @return mixed
     */
    public function getOperatorInfoExtend()
    {
        return $this->operatorInfoExtend;
    }

    /**
     * @param mixed $operatorInfoExtend
     */
    public function setOperatorInfoExtend($operatorInfoExtend)
    {
        $this->operatorInfoExtend = $operatorInfoExtend;
    }


}

class Notification
{
    public $sendNotification;

    public $notifyWay;

    public $notifyAddress;

    /**
     * @return mixed
     */
    public function getSendNotification()
    {
        return $this->sendNotification;
    }

    /**
     * @param mixed $sendNotification
     */
    public function setSendNotification($sendNotification)
    {
        $this->sendNotification = $sendNotification;
    }

    /**
     * @return mixed
     */
    public function getNotifyWay()
    {
        return $this->notifyWay;
    }

    /**
     * @param mixed $notifyWay
     */
    public function setNotifyWay($notifyWay)
    {
        $this->notifyWay = $notifyWay;
    }

    /**
     * @return mixed
     */
    public function getNotifyAddress()
    {
        return $this->notifyAddress;
    }

    /**
     * @param mixed $notifyAddress
     */
    public function setNotifyAddress($notifyAddress)
    {
        $this->notifyAddress = $notifyAddress;
    }


}

class Actor
{

    public $actorId;

    public $actorType;

    public $actorName;

    public $permissions;

    public $actorOpenId;

    public $actorFDDId;

    public $actorEntityId;

    public $actorCorpMembers;

    public $identNameForMatch;

    public $certType;

    public $certNoForMatch;

    public $accountName;

    public $clientUserId;

    public $authScopes;

    public $sendNotification;

    public $notifyType;

    public $notifyAddress;

    /**
     * @deprecated 过时字段
     */
    public $notification;

    /**
     * @return mixed
     */
    public function getActorId()
    {
        return $this->actorId;
    }

    /**
     * @param mixed $actorId
     */
    public function setActorId($actorId)
    {
        $this->actorId = $actorId;
    }

    /**
     * @return mixed
     */
    public function getActorType()
    {
        return $this->actorType;
    }

    /**
     * @param mixed $actorType
     */
    public function setActorType($actorType)
    {
        $this->actorType = $actorType;
    }

    /**
     * @return mixed
     */
    public function getActorName()
    {
        return $this->actorName;
    }

    /**
     * @param mixed $actorName
     */
    public function setActorName($actorName)
    {
        $this->actorName = $actorName;
    }

    /**
     * @return mixed
     */
    public function getPermissions()
    {
        return $this->permissions;
    }

    /**
     * @param mixed $permissions
     */
    public function setPermissions($permissions)
    {
        $this->permissions = $permissions;
    }

    /**
     * @return mixed
     */
    public function getActorOpenId()
    {
        return $this->actorOpenId;
    }

    /**
     * @param mixed $actorOpenId
     */
    public function setActorOpenId($actorOpenId)
    {
        $this->actorOpenId = $actorOpenId;
    }

    /**
     * @return mixed
     */
    public function getActorFDDId()
    {
        return $this->actorFDDId;
    }

    /**
     * @param mixed $actorFDDId
     */
    public function setActorFDDId($actorFDDId)
    {
        $this->actorFDDId = $actorFDDId;
    }

    /**
     * @return mixed
     */
    public function getActorEntityId()
    {
        return $this->actorEntityId;
    }

    /**
     * @param mixed $actorEntityId
     */
    public function setActorEntityId($actorEntityId)
    {
        $this->actorEntityId = $actorEntityId;
    }

    /**
     * @return mixed
     */
    public function getActorCorpMembers()
    {
        return $this->actorCorpMembers;
    }

    /**
     * @param mixed $actorCorpMembers
     */
    public function setActorCorpMembers($actorCorpMembers)
    {
        $this->actorCorpMembers = $actorCorpMembers;
    }

    /**
     * @return mixed
     */
    public function getIdentNameForMatch()
    {
        return $this->identNameForMatch;
    }

    /**
     * @param mixed $identNameForMatch
     */
    public function setIdentNameForMatch($identNameForMatch)
    {
        $this->identNameForMatch = $identNameForMatch;
    }

    /**
     * @return mixed
     */
    public function getCertType()
    {
        return $this->certType;
    }

    /**
     * @param mixed $certType
     */
    public function setCertType($certType)
    {
        $this->certType = $certType;
    }

    /**
     * @return mixed
     */
    public function getCertNoForMatch()
    {
        return $this->certNoForMatch;
    }

    /**
     * @param mixed $certNoForMatch
     */
    public function setCertNoForMatch($certNoForMatch)
    {
        $this->certNoForMatch = $certNoForMatch;
    }

    /**
     * @return mixed
     */
    public function getAccountName()
    {
        return $this->accountName;
    }

    /**
     * @param mixed $accountName
     */
    public function setAccountName($accountName)
    {
        $this->accountName = $accountName;
    }

    /**
     * @return mixed
     */
    public function getClientUserId()
    {
        return $this->clientUserId;
    }

    /**
     * @param mixed $clientUserId
     */
    public function setClientUserId($clientUserId)
    {
        $this->clientUserId = $clientUserId;
    }

    /**
     * @return mixed
     */
    public function getAuthScopes()
    {
        return $this->authScopes;
    }

    /**
     * @param mixed $authScopes
     */
    public function setAuthScopes($authScopes)
    {
        $this->authScopes = $authScopes;
    }

    /**
     * @return mixed
     */
    public function getSendNotification()
    {
        return $this->sendNotification;
    }

    /**
     * @param mixed $sendNotification
     */
    public function setSendNotification($sendNotification)
    {
        $this->sendNotification = $sendNotification;
    }

    /**
     * @return mixed
     */
    public function getNotifyType()
    {
        return $this->notifyType;
    }

    /**
     * @param mixed $notifyType
     */
    public function setNotifyType($notifyType)
    {
        $this->notifyType = $notifyType;
    }

    /**
     * @return mixed
     */
    public function getNotifyAddress()
    {
        return $this->notifyAddress;
    }

    /**
     * @param mixed $notifyAddress
     */
    public function setNotifyAddress($notifyAddress)
    {
        $this->notifyAddress = $notifyAddress;
    }

    /**
     * @return mixed
     */
    public function getNotification()
    {
        return $this->notification;
    }

    /**
     * @param mixed $notification
     */
    public function setNotification($notification)
    {
        $this->notification = $notification;
    }




}

class FieldPosition
{
    public $positionMode;

    public $positionPageNo;

    public $positionX;

    public $positionY;

    public $positionKeyword;

    public $keywordOffsetX;

    public $keywordOffsetY;

    /**
     * @return mixed
     */
    public function getPositionMode()
    {
        return $this->positionMode;
    }

    /**
     * @param mixed $positionMode
     */
    public function setPositionMode($positionMode)
    {
        $this->positionMode = $positionMode;
    }

    /**
     * @return mixed
     */
    public function getPositionPageNo()
    {
        return $this->positionPageNo;
    }

    /**
     * @param mixed $positionPageNo
     */
    public function setPositionPageNo($positionPageNo)
    {
        $this->positionPageNo = $positionPageNo;
    }

    /**
     * @return mixed
     */
    public function getPositionX()
    {
        return $this->positionX;
    }

    /**
     * @param mixed $positionX
     */
    public function setPositionX($positionX)
    {
        $this->positionX = $positionX;
    }

    /**
     * @return mixed
     */
    public function getPositionY()
    {
        return $this->positionY;
    }

    /**
     * @param mixed $positionY
     */
    public function setPositionY($positionY)
    {
        $this->positionY = $positionY;
    }

    /**
     * @return mixed
     */
    public function getPositionKeyword()
    {
        return $this->positionKeyword;
    }

    /**
     * @param mixed $positionKeyword
     */
    public function setPositionKeyword($positionKeyword)
    {
        $this->positionKeyword = $positionKeyword;
    }

    /**
     * @return mixed
     */
    public function getKeywordOffsetX()
    {
        return $this->keywordOffsetX;
    }

    /**
     * @param mixed $keywordOffsetX
     */
    public function setKeywordOffsetX($keywordOffsetX)
    {
        $this->keywordOffsetX = $keywordOffsetX;
    }

    /**
     * @return mixed
     */
    public function getKeywordOffsetY()
    {
        return $this->keywordOffsetY;
    }

    /**
     * @param mixed $keywordOffsetY
     */
    public function setKeywordOffsetY($keywordOffsetY)
    {
        $this->keywordOffsetY = $keywordOffsetY;
    }

}

class Field
{
    public $fieldId;

    public $fieldName;

    public $fieldKey;

    public $position;

    public $moveable;

    public $fieldType;

    public $fieldPersonSign;

    public $fieldCorpSeal;

    public $fieldDateSeal;

    public $fieldRemarkSign;

    public $fieldTextSingleLine;

    public $fieldTextMultiLine;

    public $fieldNumber;

    public $fieldIdCard;

    public $fieldFillDate;

    public $fieldMultiRadio;

    public $fieldMultiCheckbox;

    public $fieldPicture;

    public $fieldSelectBox;

    public $fieldTable;

    /**
     * @return mixed
     */
    public function getFieldId()
    {
        return $this->fieldId;
    }

    /**
     * @param mixed $fieldId
     */
    public function setFieldId($fieldId)
    {
        $this->fieldId = $fieldId;
    }

    /**
     * @return mixed
     */
    public function getFieldName()
    {
        return $this->fieldName;
    }

    /**
     * @param mixed $fieldName
     */
    public function setFieldName($fieldName)
    {
        $this->fieldName = $fieldName;
    }

    /**
     * @return mixed
     */
    public function getFieldKey()
    {
        return $this->fieldKey;
    }

    /**
     * @param mixed $fieldKey
     */
    public function setFieldKey($fieldKey)
    {
        $this->fieldKey = $fieldKey;
    }

    /**
     * @return mixed
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * @param mixed $position
     */
    public function setPosition($position)
    {
        $this->position = $position;
    }

    /**
     * @return mixed
     */
    public function getFieldType()
    {
        return $this->fieldType;
    }

    /**
     * @param mixed $fieldType
     */
    public function setFieldType($fieldType)
    {
        $this->fieldType = $fieldType;
    }

    /**
     * @return mixed
     */
    public function getFieldTextSingleLine()
    {
        return $this->fieldTextSingleLine;
    }

    /**
     * @param mixed $fieldTextSingleLine
     */
    public function setFieldTextSingleLine($fieldTextSingleLine)
    {
        $this->fieldTextSingleLine = $fieldTextSingleLine;
    }

    /**
     * @return mixed
     */
    public function getFieldTextMultiLine()
    {
        return $this->fieldTextMultiLine;
    }

    /**
     * @param mixed $fieldTextMultiLine
     */
    public function setFieldTextMultiLine($fieldTextMultiLine)
    {
        $this->fieldTextMultiLine = $fieldTextMultiLine;
    }

    /**
     * @return mixed
     */
    public function getFieldNumber()
    {
        return $this->fieldNumber;
    }

    /**
     * @param mixed $fieldNumber
     */
    public function setFieldNumber($fieldNumber)
    {
        $this->fieldNumber = $fieldNumber;
    }

    /**
     * @return mixed
     */
    public function getFieldIdCard()
    {
        return $this->fieldIdCard;
    }

    /**
     * @param mixed $fieldIdCard
     */
    public function setFieldIdCard($fieldIdCard)
    {
        $this->fieldIdCard = $fieldIdCard;
    }

    /**
     * @return mixed
     */
    public function getFieldFillDate()
    {
        return $this->fieldFillDate;
    }

    /**
     * @param mixed $fieldFillDate
     */
    public function setFieldFillDate($fieldFillDate)
    {
        $this->fieldFillDate = $fieldFillDate;
    }

    /**
     * @return mixed
     */
    public function getFieldMultiRadio()
    {
        return $this->fieldMultiRadio;
    }

    /**
     * @param mixed $fieldMultiRadio
     */
    public function setFieldMultiRadio($fieldMultiRadio)
    {
        $this->fieldMultiRadio = $fieldMultiRadio;
    }

    /**
     * @return mixed
     */
    public function getFieldMultiCheckbox()
    {
        return $this->fieldMultiCheckbox;
    }

    /**
     * @param mixed $fieldMultiCheckbox
     */
    public function setFieldMultiCheckbox($fieldMultiCheckbox)
    {
        $this->fieldMultiCheckbox = $fieldMultiCheckbox;
    }

    /**
     * @return mixed
     */
    public function getFieldSelectBox()
    {
        return $this->fieldSelectBox;
    }

    /**
     * @param mixed $fieldSelectBox
     */
    public function setFieldSelectBox($fieldSelectBox)
    {
        $this->fieldSelectBox = $fieldSelectBox;
    }

    /**
     * @return mixed
     */
    public function getMoveable()
    {
        return $this->moveable;
    }

    /**
     * @param mixed $moveable
     */
    public function setMoveable($moveable)
    {
        $this->moveable = $moveable;
    }

    /**
     * @return mixed
     */
    public function getFieldPersonSign()
    {
        return $this->fieldPersonSign;
    }

    /**
     * @param mixed $fieldPersonSign
     */
    public function setFieldPersonSign($fieldPersonSign)
    {
        $this->fieldPersonSign = $fieldPersonSign;
    }

    /**
     * @return mixed
     */
    public function getFieldCorpSeal()
    {
        return $this->fieldCorpSeal;
    }

    /**
     * @param mixed $fieldCorpSeal
     */
    public function setFieldCorpSeal($fieldCorpSeal)
    {
        $this->fieldCorpSeal = $fieldCorpSeal;
    }

    /**
     * @return mixed
     */
    public function getFieldDateSeal()
    {
        return $this->fieldDateSeal;
    }

    /**
     * @param mixed $fieldDateSeal
     */
    public function setFieldDateSeal($fieldDateSeal)
    {
        $this->fieldDateSeal = $fieldDateSeal;
    }

    /**
     * @return mixed
     */
    public function getFieldRemarkSign()
    {
        return $this->fieldRemarkSign;
    }

    /**
     * @param mixed $fieldRemarkSign
     */
    public function setFieldRemarkSign($fieldRemarkSign)
    {
        $this->fieldRemarkSign = $fieldRemarkSign;
    }

    /**
     * @return mixed
     */
    public function getFieldPicture()
    {
        return $this->fieldPicture;
    }

    /**
     * @param mixed $fieldPicture
     */
    public function setFieldPicture($fieldPicture)
    {
        $this->fieldPicture = $fieldPicture;
    }

    /**
     * @return mixed
     */
    public function getFieldTable()
    {
        return $this->fieldTable;
    }

    /**
     * @param mixed $fieldTable
     */
    public function setFieldTable($fieldTable)
    {
        $this->fieldTable = $fieldTable;
    }

}

class FieldPersonSign
{
    public $width;
    public $height;

    /**
     * @return mixed
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * @param mixed $width
     */
    public function setWidth($width)
    {
        $this->width = $width;
    }

    /**
     * @return mixed
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @param mixed $height
     */
    public function setHeight($height)
    {
        $this->height = $height;
    }

}

class FieldCorpSeal
{
    public $width;
    public $height;
    public $categoryType;

    /**
     * @return mixed
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * @param mixed $width
     */
    public function setWidth($width)
    {
        $this->width = $width;
    }

    /**
     * @return mixed
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @param mixed $height
     */
    public function setHeight($height)
    {
        $this->height = $height;
    }

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

class FieldDateSign
{
    public $dateFormat;
    public $fontSize;

    /**
     * @return mixed
     */
    public function getDateFormat()
    {
        return $this->dateFormat;
    }

    /**
     * @param mixed $dateFormat
     */
    public function setDateFormat($dateFormat)
    {
        $this->dateFormat = $dateFormat;
    }

    /**
     * @return mixed
     */
    public function getFontSize()
    {
        return $this->fontSize;
    }

    /**
     * @param mixed $fontSize
     */
    public function setFontSize($fontSize)
    {
        $this->fontSize = $fontSize;
    }

}

class FieldRemarkSign
{
    public $defaultValue;
    public $tips;
    public $editable;
    public $width;
    public $height;
    public $fontType;
    public $fontSize;

    /**
     * @return mixed
     */
    public function getDefaultValue()
    {
        return $this->defaultValue;
    }

    /**
     * @param mixed $defaultValue
     */
    public function setDefaultValue($defaultValue)
    {
        $this->defaultValue = $defaultValue;
    }

    /**
     * @return mixed
     */
    public function getTips()
    {
        return $this->tips;
    }

    /**
     * @param mixed $tips
     */
    public function setTips($tips)
    {
        $this->tips = $tips;
    }

    /**
     * @return mixed
     */
    public function getEditable()
    {
        return $this->editable;
    }

    /**
     * @param mixed $editable
     */
    public function setEditable($editable)
    {
        $this->editable = $editable;
    }

    /**
     * @return mixed
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * @param mixed $width
     */
    public function setWidth($width)
    {
        $this->width = $width;
    }

    /**
     * @return mixed
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @param mixed $height
     */
    public function setHeight($height)
    {
        $this->height = $height;
    }

    /**
     * @return mixed
     */
    public function getFontType()
    {
        return $this->fontType;
    }

    /**
     * @param mixed $fontType
     */
    public function setFontType($fontType)
    {
        $this->fontType = $fontType;
    }

    /**
     * @return mixed
     */
    public function getFontSize()
    {
        return $this->fontSize;
    }

    /**
     * @param mixed $fontSize
     */
    public function setFontSize($fontSize)
    {
        $this->fontSize = $fontSize;
    }

}

class FieldTextSingleLine
{
    public $required;
    public $defaultValue;
    public $autofill;
    public $autofillInfo;
    public $tips;
    public $width;
    public $height;
    public $fontType;
    public $fontSize;
    public $alignment;

    /**
     * @return mixed
     */
    public function getRequired()
    {
        return $this->required;
    }

    /**
     * @param mixed $required
     */
    public function setRequired($required)
    {
        $this->required = $required;
    }

    /**
     * @return mixed
     */
    public function getDefaultValue()
    {
        return $this->defaultValue;
    }

    /**
     * @param mixed $defaultValue
     */
    public function setDefaultValue($defaultValue)
    {
        $this->defaultValue = $defaultValue;
    }

    /**
     * @return mixed
     */
    public function getAutofill()
    {
        return $this->autofill;
    }

    /**
     * @param mixed $autofill
     */
    public function setAutofill($autofill)
    {
        $this->autofill = $autofill;
    }

    /**
     * @return mixed
     */
    public function getAutofillInfo()
    {
        return $this->autofillInfo;
    }

    /**
     * @param mixed $autofillInfo
     */
    public function setAutofillInfo($autofillInfo)
    {
        $this->autofillInfo = $autofillInfo;
    }

    /**
     * @return mixed
     */
    public function getTips()
    {
        return $this->tips;
    }

    /**
     * @param mixed $tips
     */
    public function setTips($tips)
    {
        $this->tips = $tips;
    }

    /**
     * @return mixed
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * @param mixed $width
     */
    public function setWidth($width)
    {
        $this->width = $width;
    }

    /**
     * @return mixed
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @param mixed $height
     */
    public function setHeight($height)
    {
        $this->height = $height;
    }

    /**
     * @return mixed
     */
    public function getFontType()
    {
        return $this->fontType;
    }

    /**
     * @param mixed $fontType
     */
    public function setFontType($fontType)
    {
        $this->fontType = $fontType;
    }

    /**
     * @return mixed
     */
    public function getFontSize()
    {
        return $this->fontSize;
    }

    /**
     * @param mixed $fontSize
     */
    public function setFontSize($fontSize)
    {
        $this->fontSize = $fontSize;
    }

    /**
     * @return mixed
     */
    public function getAlignment()
    {
        return $this->alignment;
    }

    /**
     * @param mixed $alignment
     */
    public function setAlignment($alignment)
    {
        $this->alignment = $alignment;
    }

}

class FieldTextMultiLine
{
    public $required;
    public $defaultValue;
    public $tips;
    public $width;
    public $height;
    public $fontType;
    public $fontSize;
    public $alignment;

    /**
     * @return mixed
     */
    public function getRequired()
    {
        return $this->required;
    }

    /**
     * @param mixed $required
     */
    public function setRequired($required)
    {
        $this->required = $required;
    }

    /**
     * @return mixed
     */
    public function getDefaultValue()
    {
        return $this->defaultValue;
    }

    /**
     * @param mixed $defaultValue
     */
    public function setDefaultValue($defaultValue)
    {
        $this->defaultValue = $defaultValue;
    }

    /**
     * @return mixed
     */
    public function getTips()
    {
        return $this->tips;
    }

    /**
     * @param mixed $tips
     */
    public function setTips($tips)
    {
        $this->tips = $tips;
    }

    /**
     * @return mixed
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * @param mixed $width
     */
    public function setWidth($width)
    {
        $this->width = $width;
    }

    /**
     * @return mixed
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @param mixed $height
     */
    public function setHeight($height)
    {
        $this->height = $height;
    }

    /**
     * @return mixed
     */
    public function getFontType()
    {
        return $this->fontType;
    }

    /**
     * @param mixed $fontType
     */
    public function setFontType($fontType)
    {
        $this->fontType = $fontType;
    }

    /**
     * @return mixed
     */
    public function getFontSize()
    {
        return $this->fontSize;
    }

    /**
     * @param mixed $fontSize
     */
    public function setFontSize($fontSize)
    {
        $this->fontSize = $fontSize;
    }

    /**
     * @return mixed
     */
    public function getAlignment()
    {
        return $this->alignment;
    }

    /**
     * @param mixed $alignment
     */
    public function setAlignment($alignment)
    {
        $this->alignment = $alignment;
    }

}

class FieldNumber
{
    public $required;
    public $defaultValue;
    public $tips;
    public $width;
    public $height;
    public $fontType;
    public $fontSize;
    public $alignment;

    /**
     * @return mixed
     */
    public function getRequired()
    {
        return $this->required;
    }

    /**
     * @param mixed $required
     */
    public function setRequired($required)
    {
        $this->required = $required;
    }

    /**
     * @return mixed
     */
    public function getDefaultValue()
    {
        return $this->defaultValue;
    }

    /**
     * @param mixed $defaultValue
     */
    public function setDefaultValue($defaultValue)
    {
        $this->defaultValue = $defaultValue;
    }

    /**
     * @return mixed
     */
    public function getTips()
    {
        return $this->tips;
    }

    /**
     * @param mixed $tips
     */
    public function setTips($tips)
    {
        $this->tips = $tips;
    }

    /**
     * @return mixed
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * @param mixed $width
     */
    public function setWidth($width)
    {
        $this->width = $width;
    }

    /**
     * @return mixed
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @param mixed $height
     */
    public function setHeight($height)
    {
        $this->height = $height;
    }

    /**
     * @return mixed
     */
    public function getFontType()
    {
        return $this->fontType;
    }

    /**
     * @param mixed $fontType
     */
    public function setFontType($fontType)
    {
        $this->fontType = $fontType;
    }

    /**
     * @return mixed
     */
    public function getFontSize()
    {
        return $this->fontSize;
    }

    /**
     * @param mixed $fontSize
     */
    public function setFontSize($fontSize)
    {
        $this->fontSize = $fontSize;
    }

    /**
     * @return mixed
     */
    public function getAlignment()
    {
        return $this->alignment;
    }

    /**
     * @param mixed $alignment
     */
    public function setAlignment($alignment)
    {
        $this->alignment = $alignment;
    }

}

class FieldIdCard
{
    public $required;
    public $defaultValue;
    public $autofill;
    public $tips;
    public $width;
    public $height;
    public $fontType;
    public $fontSize;
    public $alignment;

    /**
     * @return mixed
     */
    public function getRequired()
    {
        return $this->required;
    }

    /**
     * @param mixed $required
     */
    public function setRequired($required)
    {
        $this->required = $required;
    }

    /**
     * @return mixed
     */
    public function getDefaultValue()
    {
        return $this->defaultValue;
    }

    /**
     * @param mixed $defaultValue
     */
    public function setDefaultValue($defaultValue)
    {
        $this->defaultValue = $defaultValue;
    }

    /**
     * @return mixed
     */
    public function getAutofill()
    {
        return $this->autofill;
    }

    /**
     * @param mixed $autofill
     */
    public function setAutofill($autofill)
    {
        $this->autofill = $autofill;
    }

    /**
     * @return mixed
     */
    public function getTips()
    {
        return $this->tips;
    }

    /**
     * @param mixed $tips
     */
    public function setTips($tips)
    {
        $this->tips = $tips;
    }

    /**
     * @return mixed
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * @param mixed $width
     */
    public function setWidth($width)
    {
        $this->width = $width;
    }

    /**
     * @return mixed
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @param mixed $height
     */
    public function setHeight($height)
    {
        $this->height = $height;
    }

    /**
     * @return mixed
     */
    public function getFontType()
    {
        return $this->fontType;
    }

    /**
     * @param mixed $fontType
     */
    public function setFontType($fontType)
    {
        $this->fontType = $fontType;
    }

    /**
     * @return mixed
     */
    public function getFontSize()
    {
        return $this->fontSize;
    }

    /**
     * @param mixed $fontSize
     */
    public function setFontSize($fontSize)
    {
        $this->fontSize = $fontSize;
    }

    /**
     * @return mixed
     */
    public function getAlignment()
    {
        return $this->alignment;
    }

    /**
     * @param mixed $alignment
     */
    public function setAlignment($alignment)
    {
        $this->alignment = $alignment;
    }

}

class FieldFillDate
{
    public $required;
    public $defaultValue;
    public $dateFormat;
    public $width;
    public $height;
    public $fontType;
    public $fontSize;
    public $alignment;

    /**
     * @return mixed
     */
    public function getRequired()
    {
        return $this->required;
    }

    /**
     * @param mixed $required
     */
    public function setRequired($required)
    {
        $this->required = $required;
    }

    /**
     * @return mixed
     */
    public function getDefaultValue()
    {
        return $this->defaultValue;
    }

    /**
     * @param mixed $defaultValue
     */
    public function setDefaultValue($defaultValue)
    {
        $this->defaultValue = $defaultValue;
    }

    /**
     * @return mixed
     */
    public function getDateFormat()
    {
        return $this->dateFormat;
    }

    /**
     * @param mixed $dateFormat
     */
    public function setDateFormat($dateFormat)
    {
        $this->dateFormat = $dateFormat;
    }

    /**
     * @return mixed
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * @param mixed $width
     */
    public function setWidth($width)
    {
        $this->width = $width;
    }

    /**
     * @return mixed
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @param mixed $height
     */
    public function setHeight($height)
    {
        $this->height = $height;
    }

    /**
     * @return mixed
     */
    public function getFontType()
    {
        return $this->fontType;
    }

    /**
     * @param mixed $fontType
     */
    public function setFontType($fontType)
    {
        $this->fontType = $fontType;
    }

    /**
     * @return mixed
     */
    public function getFontSize()
    {
        return $this->fontSize;
    }

    /**
     * @param mixed $fontSize
     */
    public function setFontSize($fontSize)
    {
        $this->fontSize = $fontSize;
    }

    /**
     * @return mixed
     */
    public function getAlignment()
    {
        return $this->alignment;
    }

    /**
     * @param mixed $alignment
     */
    public function setAlignment($alignment)
    {
        $this->alignment = $alignment;
    }

}

class FieldMultiRadio
{
    public $required;
    public $option;
    public $defaultValue;

    /**
     * @return mixed
     */
    public function getRequired()
    {
        return $this->required;
    }

    /**
     * @param mixed $required
     */
    public function setRequired($required)
    {
        $this->required = $required;
    }

    /**
     * @return mixed
     */
    public function getOption()
    {
        return $this->option;
    }

    /**
     * @param mixed $option
     */
    public function setOption($option)
    {
        $this->option = $option;
    }

    /**
     * @return mixed
     */
    public function getDefaultValue()
    {
        return $this->defaultValue;
    }

    /**
     * @param mixed $defaultValue
     */
    public function setDefaultValue($defaultValue)
    {
        $this->defaultValue = $defaultValue;
    }

}

class FieldMultiCheckbox
{
    public $required;

    public $option;

    public $defaultValue;

    /**
     * @return mixed
     */
    public function getRequired()
    {
        return $this->required;
    }

    /**
     * @param mixed $required
     */
    public function setRequired($required)
    {
        $this->required = $required;
    }

    /**
     * @return mixed
     */
    public function getOption()
    {
        return $this->option;
    }

    /**
     * @param mixed $option
     */
    public function setOption($option)
    {
        $this->option = $option;
    }

    /**
     * @return mixed
     */
    public function getDefaultValue()
    {
        return $this->defaultValue;
    }

    /**
     * @param mixed $defaultValue
     */
    public function setDefaultValue($defaultValue)
    {
        $this->defaultValue = $defaultValue;
    }

}

class FieldPicture
{
    public $required;
    public $defaultValue;
    public $width;
    public $height;

    /**
     * @return mixed
     */
    public function getRequired()
    {
        return $this->required;
    }

    /**
     * @param mixed $required
     */
    public function setRequired($required)
    {
        $this->required = $required;
    }

    /**
     * @return mixed
     */
    public function getDefaultValue()
    {
        return $this->defaultValue;
    }

    /**
     * @param mixed $defaultValue
     */
    public function setDefaultValue($defaultValue)
    {
        $this->defaultValue = $defaultValue;
    }

    /**
     * @return mixed
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * @param mixed $width
     */
    public function setWidth($width)
    {
        $this->width = $width;
    }

    /**
     * @return mixed
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @param mixed $height
     */
    public function setHeight($height)
    {
        $this->height = $height;
    }

}

class FieldSelectBox
{
    public $required;
    public $option;
    public $defaultValue;
    public $tips;
    public $width;
    public $height;
    public $fontType;
    public $fontSize;
    public $alignment;

    /**
     * @return mixed
     */
    public function getRequired()
    {
        return $this->required;
    }

    /**
     * @param mixed $required
     */
    public function setRequired($required)
    {
        $this->required = $required;
    }

    /**
     * @return mixed
     */
    public function getOption()
    {
        return $this->option;
    }

    /**
     * @param mixed $option
     */
    public function setOption($option)
    {
        $this->option = $option;
    }

    /**
     * @return mixed
     */
    public function getDefaultValue()
    {
        return $this->defaultValue;
    }

    /**
     * @param mixed $defaultValue
     */
    public function setDefaultValue($defaultValue)
    {
        $this->defaultValue = $defaultValue;
    }

    /**
     * @return mixed
     */
    public function getTips()
    {
        return $this->tips;
    }

    /**
     * @param mixed $tips
     */
    public function setTips($tips)
    {
        $this->tips = $tips;
    }

    /**
     * @return mixed
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * @param mixed $width
     */
    public function setWidth($width)
    {
        $this->width = $width;
    }

    /**
     * @return mixed
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @param mixed $height
     */
    public function setHeight($height)
    {
        $this->height = $height;
    }

    /**
     * @return mixed
     */
    public function getFontType()
    {
        return $this->fontType;
    }

    /**
     * @param mixed $fontType
     */
    public function setFontType($fontType)
    {
        $this->fontType = $fontType;
    }

    /**
     * @return mixed
     */
    public function getFontSize()
    {
        return $this->fontSize;
    }

    /**
     * @param mixed $fontSize
     */
    public function setFontSize($fontSize)
    {
        $this->fontSize = $fontSize;
    }

    /**
     * @return mixed
     */
    public function getAlignment()
    {
        return $this->alignment;
    }

    /**
     * @param mixed $alignment
     */
    public function setAlignment($alignment)
    {
        $this->alignment = $alignment;
    }

}

class FieldTable
{
    public $required;
    public $header;
    public $requiredCount;
    public $fontType;
    public $fontSize;
    public $alignment;
    public $headerPosition;
    public $rows;
    public $cols;
    public $rowHeight;
    public $widths;
    public $dynamicFilling;
    public $defaultValue;
    public $hideHeader;

    /**
     * @return mixed
     */
    public function getRequired()
    {
        return $this->required;
    }

    /**
     * @param mixed $required
     */
    public function setRequired($required)
    {
        $this->required = $required;
    }

    /**
     * @return mixed
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * @param mixed $header
     */
    public function setHeader($header)
    {
        $this->header = $header;
    }

    /**
     * @return mixed
     */
    public function getRequiredCount()
    {
        return $this->requiredCount;
    }

    /**
     * @param mixed $requiredCount
     */
    public function setRequiredCount($requiredCount)
    {
        $this->requiredCount = $requiredCount;
    }

    /**
     * @return mixed
     */
    public function getFontType()
    {
        return $this->fontType;
    }

    /**
     * @param mixed $fontType
     */
    public function setFontType($fontType)
    {
        $this->fontType = $fontType;
    }

    /**
     * @return mixed
     */
    public function getFontSize()
    {
        return $this->fontSize;
    }

    /**
     * @param mixed $fontSize
     */
    public function setFontSize($fontSize)
    {
        $this->fontSize = $fontSize;
    }

    /**
     * @return mixed
     */
    public function getAlignment()
    {
        return $this->alignment;
    }

    /**
     * @param mixed $alignment
     */
    public function setAlignment($alignment)
    {
        $this->alignment = $alignment;
    }

    /**
     * @return mixed
     */
    public function getHeaderPosition()
    {
        return $this->headerPosition;
    }

    /**
     * @param mixed $headerPosition
     */
    public function setHeaderPosition($headerPosition)
    {
        $this->headerPosition = $headerPosition;
    }

    /**
     * @return mixed
     */
    public function getRows()
    {
        return $this->rows;
    }

    /**
     * @param mixed $rows
     */
    public function setRows($rows)
    {
        $this->rows = $rows;
    }

    /**
     * @return mixed
     */
    public function getCols()
    {
        return $this->cols;
    }

    /**
     * @param mixed $cols
     */
    public function setCols($cols)
    {
        $this->cols = $cols;
    }

    /**
     * @return mixed
     */
    public function getRowHeight()
    {
        return $this->rowHeight;
    }

    /**
     * @param mixed $rowHeight
     */
    public function setRowHeight($rowHeight)
    {
        $this->rowHeight = $rowHeight;
    }

    /**
     * @return mixed
     */
    public function getWidths()
    {
        return $this->widths;
    }

    /**
     * @param mixed $widths
     */
    public function setWidths($widths)
    {
        $this->widths = $widths;
    }

    /**
     * @return mixed
     */
    public function getDynamicFilling()
    {
        return $this->dynamicFilling;
    }

    /**
     * @param mixed $dynamicFilling
     */
    public function setDynamicFilling($dynamicFilling)
    {
        $this->dynamicFilling = $dynamicFilling;
    }

    /**
     * @return mixed
     */
    public function getDefaultValue()
    {
        return $this->defaultValue;
    }

    /**
     * @param mixed $defaultValue
     */
    public function setDefaultValue($defaultValue)
    {
        $this->defaultValue = $defaultValue;
    }

    /**
     * @return mixed
     */
    public function getHideHeader()
    {
        return $this->hideHeader;
    }

    /**
     * @param mixed $hideHeader
     */
    public function setHideHeader($hideHeader)
    {
        $this->hideHeader = $hideHeader;
    }

}