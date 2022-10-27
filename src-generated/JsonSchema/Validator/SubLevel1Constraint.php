<?php

namespace Generated\JsonSchema\Validator;

class SubLevel1Constraint extends \Symfony\Component\Validator\Constraints\Compound
{
    protected function getConstraints($options): array
    {
        return [
            new \Symfony\Component\Validator\Constraints\NotNull(['message' => 'This value should not be null.']),
            new \Symfony\Component\Validator\Constraints\Collection([
                'fields' => [
                    'subLevel-2' => new \Symfony\Component\Validator\Constraints\Optional([
                        new \SubLevel3Constraint([]),
                        new \Symfony\Component\Validator\Constraints\NotNull(['message' => 'This value should not be null.']),
                        new \Generated\JsonSchema\Validator\SubLevel2Constraint([]),
                    ]),
                ],
                'allowExtraFields' => true,
            ]),
        ];
    }
}