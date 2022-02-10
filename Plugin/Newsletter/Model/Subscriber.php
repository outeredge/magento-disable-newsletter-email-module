<?php

namespace OuterEdge\NewsletterDisableEmail\Plugin\Newsletter\Model;

use Magento\Newsletter\Model\Subscriber as SubscriberModel;
use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Store\Model\ScopeInterface;

class Subscriber
{
    private $scopeConfig;

    public function __construct(ScopeConfigInterface $scopeConfig)
    {
        $this->scopeConfig = $scopeConfig;
    }

    /**
     * Check if newsletter confirmation request email is disabled
     *
     * @param SubscriberModel $subject
     */
    public function beforeSendConfirmationRequestEmail(SubscriberModel $subject)
    {
        if (!$this->isEnabled('confirmation_request')) {
            $subject->setImportMode(true);
        }
    }

    /**
     * Check if newsletter confirmation success email is disabled
     *
     * @param SubscriberModel $subject
     */
    public function beforeSendConfirmationSuccessEmail(SubscriberModel $subject)
    {
        if (!$this->isEnabled('confirmation_success')) {
            $subject->setImportMode(true);
        }
    }

    /**
     * Check if newsletter unsubscribe email is disabled
     *
     * @param SubscriberModel $subject
     */
    public function beforeSendUnsubscriptionEmail(SubscriberModel $subject)
    {
        if (!$this->isEnabled('unsubscribe')) {
            $subject->setImportMode(true);
        }
    }

    /**
     * Get config value
     * @param string $type
     */
    private function isEnabled($type) {
        return $this->scopeConfig->getValue('newletteroptions/email/' . $type, ScopeInterface::SCOPE_STORE);
    }
}
