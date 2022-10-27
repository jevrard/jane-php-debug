<?php

namespace Generated\JsonSchema\Validator;

class RootLevelConstraint extends \Symfony\Component\Validator\Constraints\Compound
{
    protected function getConstraints($options): array
    {
        return [
            new \Symfony\Component\Validator\Constraints\NotNull(['message' => 'This value should not be null.']),
            new \Symfony\Component\Validator\Constraints\Collection([
                'fields' => [
                    'subLevel-1' => new \Symfony\Component\Validator\Constraints\Optional([
                        new \SubLevel2Constraint([]),
                        new \Symfony\Component\Validator\Constraints\NotNull(['message' => 'This value should not be null.']),
                        new \Generated\JsonSchema\Validator\SubLevel1Constraint([]),
                    ]),
                ],
                'allowExtraFields' => true,
            ]),
        ];
    }
}