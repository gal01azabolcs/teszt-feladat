<?php

namespace App\JsonApi\Transactions;

use Neomerx\JsonApi\Schema\SchemaProvider;

class Schema extends SchemaProvider
{

    /**
     * @var string
     */
    protected $resourceType = 'transactions';

    /**
     * @param \App\Transaction $resource
     *      the domain record being serialized.
     * @return string
     */
    public function getId($resource)
    {
        return (string) $resource->getRouteKey();
    }

    /**
     * @param \App\Transaction $resource
     *      the domain record being serialized.
     * @return array
     */
    public function getAttributes($resource)
    {
        return [
            'result' => $resource->result,
+           'issuer' => $resource->issuer,
            'nameOnCard' => $resource->nameOnCard,
            'number' => $resource->number,
            'createdAt' => $resource->created_at,
            'updatedAt' => $resource->updated_at,
        ];
    }
}
