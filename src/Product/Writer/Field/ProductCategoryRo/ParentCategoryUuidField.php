<?php declare(strict_types=1);

namespace Shopware\Product\Writer\Field\ProductCategoryRo;

use Shopware\Framework\Validation\ConstraintBuilder;
use Shopware\Product\Writer\Api\ReferenceField;

class ParentCategoryUuidField extends ReferenceField
{
    public function __construct(ConstraintBuilder $constraintBuilder)
    {
        parent::__construct('parentCategoryUuid', 'parent_category_uuid', 'product_category_ro', $constraintBuilder);
    }
}