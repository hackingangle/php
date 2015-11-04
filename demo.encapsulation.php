<?php
/**
 * 面向对象-封装
 */
class AccessSwitch {

    private $isAccess;

    /**
     * Gets the value of isAccess.
     *
     * @return mixed
     */
    public function getIsAccess()
    {
        return $this->isAccess;
    }

    /**
     * Sets the value of isAccess.
     *
     * @param mixed $isAccess the is access
     *
     * @return self
     */
    public function setIsAccess($isAccess)
    {
        $this->isAccess = $isAccess;

        return $this;
    }
}

$accessObj = new AccessSwitch;

var_dump($accessObj->setIsAccess(true)->getIsAccess());
$accessObj->isAccess = true;
