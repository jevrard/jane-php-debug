<?php

namespace Generated\OpenApi\Validator;

class SubLevel3Constraint extends \Symfony\Component\Validator\Constraints\Compound
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
                    'end' => new \Symfony\Component\Validator\Constraints\Optional([
                        new \Symfony\Component\Validator\Constraints\Length([
                            'min' => 0,
                            'minMessage' => 'This value is too short. It should have {{ limit }} characters or more.',
                        ]),
                        new \Symfony\Component\Validator\Constraints\Regex([
                            'pattern' => '#[a-z]+#',
                            'message' => 'This value is not valid.',
                        ]),
                        new \Symfony\Component\Validator\Constraints\Type(['0' => 'string']),
                        new \Symfony\Component\Validator\Constraints\NotNull(['message' => 'This value should not be null.']),
                    ]),
                ],
                'allowExtraFields' => false,
            ]),
        ];
    }
}