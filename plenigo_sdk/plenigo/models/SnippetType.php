<?php

namespace plenigo\models;

require_once __DIR__ . '/../internal/utils/BasicEnum.php';

use \plenigo\internal\utils\BasicEnum;

/**
 * <p>
 * This class contains the parameters eeded to send the Snippet ID value to the SnippetConfig object
 * </p>
 * <p>
 * <b>IMPORTANT:</b> This class is part of the internal API, please do not use it, because it can
 * be removed in future versions of the SDK or access to such elements could
 * be changed from 'public' to 'protected' or less.
 * </p>
 *
 * @category SDK
 * @package  PlenigoModels
 * @author Sebastian Dieguez <sebastian.dieguez@plenigo.com>
 * @link     https://www.plenigo.com
 */
class SnippetType extends BasicEnum {

    /**
     * Personal profile snippet
     */
    const PERSONAL_DATA = "personal";
    
    /**
     * Order list snippet
     */
    const ORDER = "orders";
    
    /**
     * Subscription status snippet
     */
    const SUBSCRIPTION = "subscriptions";
    
    /**
     * Payment methods screen snippet
     */
    const PAYMENT_METHODS = "payments";
    
    /**
     * Address information snippet
     */
    const ADDRESS_DATA = "addresses";

}
