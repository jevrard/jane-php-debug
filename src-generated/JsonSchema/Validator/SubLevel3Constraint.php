<?php

namespace Generated\JsonSchema\Validator;

class SubLevel3Constraint extends \Symfony\Component\Validator\Constraints\Compound
{
    protected function getConstraints($options): array
    {
        return [
            new \Symfony\Component\Validator\Constraints\NotNull(['message' => 'This value should not be null.']),
            new \Symfony\Component\Validator\Constraints\Collection([
                'fields' => [
                    'end' => new \Symfony\Component\Validator\Constraints\Optional([
                        new \Symfony\Component\Validator\Constraints\Regex([
                            'pattern' => '#[a-z]+#',
                            'message' => 'This value is not valid.',
                        ]),
                        new \Symfony\Component\Validator\Constraints\Type(['0' => 'string']),
                        new \Symfony\Component\Validator\Constraints\NotNull(['message' => 'This value should not be null.']),
                    ]),
                ],
                'allowExtraFields' => true,
            ]),
        ];
    }
}