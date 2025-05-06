<?php

namespace App\ApplicationBundle\GraphQL;

use Overblog\GraphQLBundle\Annotation as GQL;
use Symfony\Component\DependencyInjection\Attribute\Autoconfigure;

#[GQL\Type(name: 'RootMutation')]
#[Autoconfigure(public: true)]
class RootMutation
{
    #[GQL\Field(name: 'pingMutation', type: 'Int!')]
    public int $ping = 1;

    #[GQL\Field(name: "add", type: "Int")]
    #[GQL\Arg(name: "num", type: "Int")]
    #[GQL\Arg(name: "num2", type: "Int")]
    public function add(int $num, int $num2): int {
        return $num + $num2;
    }
}
