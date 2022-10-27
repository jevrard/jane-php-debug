<?php

namespace Generated\JsonSchema\Validator;

class SubLevel2Constraint extends \Symfony\Component\Validator\Constraints\Compound
{
    protected function getConstraints($options): array
    {
        return [
            new \Symfony\Component\Validator\Constraints\NotNull(['message' => 'This value should not be null.']),
            new \Symfony\Component\Validator\Constraints\Collection([
                'fields' => [
                    'subLevel-3' => new \Symfony\Component\Validator\Constraints\Optional([
                        new \Symfony\Component\Validator\Constraints\NotNull(['message' => 'This value should not be null.']),
                        new \Generated\JsonSchema\Validator\SubLevel3Constraint([]),
                    ]),
                ],
                'allowExtraFields' => true,
            ]),
        ];
    }
}