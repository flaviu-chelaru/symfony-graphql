<?php

namespace App\ApplicationBundle\GraphQL;

use Overblog\GraphQLBundle\Annotation as GQL;

#[GQL\Type(name: 'RootQuery')]
class RootQuery
{
    #[GQL\Field(name: 'ping', type: 'Int!')]
    public int $ping = 1;
}
