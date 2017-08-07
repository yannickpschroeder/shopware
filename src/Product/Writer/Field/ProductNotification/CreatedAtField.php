<?php declare(strict_types=1);

namespace Shopware\Product\Writer\Field\ProductNotification;

use Shopware\Framework\Validation\ConstraintBuilder;
use Shopware\Product\Writer\Api\DateDefaultCreateField;

class CreatedAtField extends DateDefaultCreateField
{
    public function __construct(ConstraintBuilder $constraintBuilder)
    {
        parent::__construct('createdAt', 'created_at', 'product_notification', $constraintBuilder);
    }
}