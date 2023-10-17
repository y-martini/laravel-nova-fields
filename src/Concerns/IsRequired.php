<?php

namespace YuriyMartini\Laravel\Nova\Fields\Concerns;

use Laravel\Nova\Fields\HandlesValidation;
use Laravel\Nova\Http\Requests\NovaRequest;

trait IsRequired
{
    use HandlesValidation {
        getRules as HandlesValidationGetRules;
    }

    public function getRules(NovaRequest $request): array
    {
        return [
            $this->attribute
                => $this->HandlesValidationGetRules($request)[$this->attribute] ?: $this->defaultRules($request),
        ];
    }

    public function isRequired(NovaRequest $request): bool
    {
        return !$this->isNullable();
    }

    /**
     * @return string[]
     */
    protected function defaultRules(NovaRequest $request): array
    {
        return $this->isRequired($request) ? ['required'] : [];
    }
}
