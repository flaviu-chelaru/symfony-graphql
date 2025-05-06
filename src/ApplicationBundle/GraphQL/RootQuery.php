<?php

namespace App\ApplicationBundle\GraphQL;

use Overblog\GraphQLBundle\Annotation as GQL;
use Symfony\Component\DependencyInjection\Attribute\Autoconfigure;

#[GQL\Type(name: 'RootQuery')]
#[Autoconfigure(public: true)]
class RootQuery
{
    #[GQL\Field(name: 'ping', type: 'Int!')]
    public int $ping = 1;
}
