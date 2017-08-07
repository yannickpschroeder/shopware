<?php declare(strict_types=1);

namespace Shopware\Product\Writer\Field\ProductConfiguratorOption;

use Shopware\Framework\Validation\ConstraintBuilder;
use Shopware\Product\Writer\Api\IntField;

class GroupIdField extends IntField
{
    public function __construct(ConstraintBuilder $constraintBuilder)
    {
        parent::__construct('groupId', 'group_id', 'product_configurator_option', $constraintBuilder);
    }
}