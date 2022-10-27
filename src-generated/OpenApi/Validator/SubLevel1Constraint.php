<?php

namespace Generated\OpenApi\Validator;

class SubLevel1Constraint extends \Symfony\Component\Validator\Constraints\Compound
{
    protected function getConstraints($options): array
    {
        return [
            new \Symfony\Component\Validator\Constraints\Count([
                'min' => 0,
                'minMessage' => 'This array has not enough properties. It should have {{ limit }} properties or more.',
            ]),
            new \Symfony\Component\Validator\Constraints\NotNull(['message' => 'This value should not be null.']),
            new \Symfony\Component\Validator\Constraints\Collection([
                'fields' => [
                    'subLevel-2' => new \Symfony\Component\Validator\Constraints\Optional([
                        new \SubLevel3Constraint([]),
                        new \Symfony\Component\Validator\Constraints\Count([
                            'min' => 0,
                            'minMessage' => 'This array has not enough properties. It should have {{ limit }} properties or more.',
                        ]),
                        new \Symfony\Component\Validator\Constraints\NotNull(['message' => 'This value should not be null.']),
                        new \Generated\OpenApi\Validator\SubLevel2Constraint([]),
                    ]),
                ],
                'allowExtraFields' => false,
            ]),
        ];
    }
}