<?php declare(strict_types=1);

namespace Shopware\Product\Writer\Field\ProductSimilarShownRo;

use Shopware\Framework\Validation\ConstraintBuilder;
use Shopware\Product\Writer\Api\ReferenceField;

class RelatedProductUuidField extends ReferenceField
{
    public function __construct(ConstraintBuilder $constraintBuilder)
    {
        parent::__construct('relatedProductUuid', 'related_product_uuid', 'product_similar_shown_ro', $constraintBuilder);
    }
}