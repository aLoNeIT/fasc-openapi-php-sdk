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

    public $fieldType;

    public $fieldTextSingleLine;

    public $fieldTextMultiLine;

    public $fieldNumber;

    public $fieldIdCard;

    public $fieldFillDate;

    public $fieldMultiRadio;

    public $fieldMultiCheckbox;

    public $fieldCheckBox;

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
    public function getFieldCheckBox()
    {
        return $this->fieldCheckBox;
    }

    /**
     * @param mixed $fieldCheckBox
     */
    public function setFieldCheckBox($fieldCheckBox)
    {
        $this->fieldCheckBox = $fieldCheckBox;
    }

}

class FieldTextSingleLine
{
    public $required;

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

class FieldTextMultiLine
{
    public $required;

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

class FieldCheckBox
{
    public $required;

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

class SignConfigInfo
{
    public $orderNo;

    public $freeDragSealId;

    public $signAllDoc;

    public $blockHere;

    public $requestVerifyFree;

    public $authorizeFreeSign;

    public $verifyMethods;

    public $audioVideoInfo;

    public $requestMemberSign;

    public $signerSignMethod;

    public $joinByLink;

    public $readingToEnd;

    public $readingTime;

    public $freeLogin;

    public $identifiedView;

    public $resizeSeal;

    public $actorAttachInfos;

    /**
     * @return mixed
     */
    public function getOrderNo()
    {
        return $this->orderNo;
    }

    /**
     * @param mixed $orderNo
     */
    public function setOrderNo($orderNo)
    {
        $this->orderNo = $orderNo;
    }

    /**
     * @return mixed
     */
    public function getFreeDragSealId()
    {
        return $this->freeDragSealId;
    }

    /**
     * @param mixed $freeDragSealId
     */
    public function setFreeDragSealId($freeDragSealId)
    {
        $this->freeDragSealId = $freeDragSealId;
    }

    /**
     * @return mixed
     */
    public function getSignAllDoc()
    {
        return $this->signAllDoc;
    }

    /**
     * @param mixed $signAllDoc
     */
    public function setSignAllDoc($signAllDoc)
    {
        $this->signAllDoc = $signAllDoc;
    }

    /**
     * @return mixed
     */
    public function getAuthorizeFreeSign()
    {
        return $this->authorizeFreeSign;
    }

    /**
     * @param mixed $authorizeFreeSign
     */
    public function setAuthorizeFreeSign($authorizeFreeSign)
    {
        $this->authorizeFreeSign = $authorizeFreeSign;
    }

    /**
     * @return mixed
     */
    public function getBlockHere()
    {
        return $this->blockHere;
    }

    /**
     * @param mixed $blockHere
     */
    public function setBlockHere($blockHere)
    {
        $this->blockHere = $blockHere;
    }

    /**
     * @return mixed
     */
    public function getRequestVerifyFree()
    {
        return $this->requestVerifyFree;
    }

    /**
     * @param mixed $requestVerifyFree
     */
    public function setRequestVerifyFree($requestVerifyFree)
    {
        $this->requestVerifyFree = $requestVerifyFree;
    }

    /**
     * @return mixed
     */
    public function getVerifyMethods()
    {
        return $this->verifyMethods;
    }

    /**
     * @param mixed $verifyMethods
     */
    public function setVerifyMethods($verifyMethods)
    {
        $this->verifyMethods = $verifyMethods;
    }

    /**
     * @return mixed
     */
    public function getAudioVideoInfo()
    {
        return $this->audioVideoInfo;
    }

    /**
     * @param mixed $audioVideoInfo
     */
    public function setAudioVideoInfo($audioVideoInfo)
    {
        $this->audioVideoInfo = $audioVideoInfo;
    }

    /**
     * @return mixed
     */
    public function getRequestMemberSign()
    {
        return $this->requestMemberSign;
    }

    /**
     * @param mixed $requestMemberSign
     */
    public function setRequestMemberSign($requestMemberSign)
    {
        $this->requestMemberSign = $requestMemberSign;
    }

    /**
     * @return mixed
     */
    public function getSignerSignMethod()
    {
        return $this->signerSignMethod;
    }

    /**
     * @param mixed $signerSignMethod
     */
    public function setSignerSignMethod($signerSignMethod)
    {
        $this->signerSignMethod = $signerSignMethod;
    }

    /**
     * @return mixed
     */
    public function getJoinByLink()
    {
        return $this->joinByLink;
    }

    /**
     * @param mixed $joinByLink
     */
    public function setJoinByLink($joinByLink)
    {
        $this->joinByLink = $joinByLink;
    }

    /**
     * @return mixed
     */
    public function getReadingToEnd()
    {
        return $this->readingToEnd;
    }

    /**
     * @param mixed $readingToEnd
     */
    public function setReadingToEnd($readingToEnd)
    {
        $this->readingToEnd = $readingToEnd;
    }

    /**
     * @return mixed
     */
    public function getReadingTime()
    {
        return $this->readingTime;
    }

    /**
     * @param mixed $readingTime
     */
    public function setReadingTime($readingTime)
    {
        $this->readingTime = $readingTime;
    }

    /**
     * @return mixed
     */
    public function getFreeLogin()
    {
        return $this->freeLogin;
    }

    /**
     * @param mixed $freeLogin
     */
    public function setFreeLogin($freeLogin)
    {
        $this->freeLogin = $freeLogin;
    }

    /**
     * @return mixed
     */
    public function getIdentifiedView()
    {
        return $this->identifiedView;
    }

    /**
     * @param mixed $identifiedView
     */
    public function setIdentifiedView($identifiedView)
    {
        $this->identifiedView = $identifiedView;
    }

    /**
     * @return mixed
     */
    public function getResizeSeal()
    {
        return $this->resizeSeal;
    }

    /**
     * @param mixed $resizeSeal
     */
    public function setResizeSeal($resizeSeal)
    {
        $this->resizeSeal = $resizeSeal;
    }

    /**
     * @return mixed
     */
    public function getActorAttachInfos()
    {
        return $this->actorAttachInfos;
    }

    /**
     * @param mixed $actorAttachInfos
     */
    public function setActorAttachInfos($actorAttachInfos)
    {
        $this->actorAttachInfos = $actorAttachInfos;
    }


}

class ActorAttachInfo
{
    public $actorAttachName;
    public $required;

    /**
     * @return mixed
     */
    public function getActorAttachName()
    {
        return $this->actorAttachName;
    }

    /**
     * @param mixed $actorAttachName
     */
    public function setActorAttachName($actorAttachName)
    {
        $this->actorAttachName = $actorAttachName;
    }

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


}

class AbolishedInitiator
{
    public $initiatorId;
    public $actorId;

    /**
     * @return mixed
     */
    public function getInitiatorId()
    {
        return $this->initiatorId;
    }

    /**
     * @param mixed $initiatorId
     */
    public function setInitiatorId($initiatorId)
    {
        $this->initiatorId = $initiatorId;
    }

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

}

class Watermark
{
    public $type;
    public $content;
    public $fontSize;
    public $fontColor;
    public $picBase64;
    public $picWidth;
    public $picHeight;
    public $rotation;
    public $transparency;
    public $position;
    public $density;

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return mixed
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param mixed $content
     */
    public function setContent($content)
    {
        $this->content = $content;
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
    public function getFontColor()
    {
        return $this->fontColor;
    }

    /**
     * @param mixed $fontColor
     */
    public function setFontColor($fontColor)
    {
        $this->fontColor = $fontColor;
    }

    /**
     * @return mixed
     */
    public function getPicBase64()
    {
        return $this->picBase64;
    }

    /**
     * @param mixed $picBase64
     */
    public function setPicBase64($picBase64)
    {
        $this->picBase64 = $picBase64;
    }

    /**
     * @return mixed
     */
    public function getPicWidth()
    {
        return $this->picWidth;
    }

    /**
     * @param mixed $picWidth
     */
    public function setPicWidth($picWidth)
    {
        $this->picWidth = $picWidth;
    }

    /**
     * @return mixed
     */
    public function getPicHeight()
    {
        return $this->picHeight;
    }

    /**
     * @param mixed $picHeight
     */
    public function setPicHeight($picHeight)
    {
        $this->picHeight = $picHeight;
    }

    /**
     * @return mixed
     */
    public function getRotation()
    {
        return $this->rotation;
    }

    /**
     * @param mixed $rotation
     */
    public function setRotation($rotation)
    {
        $this->rotation = $rotation;
    }

    /**
     * @return mixed
     */
    public function getTransparency()
    {
        return $this->transparency;
    }

    /**
     * @param mixed $transparency
     */
    public function setTransparency($transparency)
    {
        $this->transparency = $transparency;
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
    public function getDensity()
    {
        return $this->density;
    }

    /**
     * @param mixed $density
     */
    public function setDensity($density)
    {
        $this->density = $density;
    }

}

class DocFieldFillValue
{
    public $fieldId;

    public $fieldName;

    public $fieldValue;

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
    public function getFieldValue()
    {
        return $this->fieldValue;
    }

    /**
     * @param mixed $fieldValue
     */
    public function setFieldValue($fieldValue)
    {
        $this->fieldValue = $fieldValue;
    }

}