<div class="card shadow @if ($key % 2 == 0) bg-white @else bg-force-primary @endif">
    <div class="card-body">
        <h5 class=" @if ($key % 2 == 0) text-force-primary @else text-force-secondary @endif"
            style="font-weight: 300;">{{ $plan->name }}</h5>
        @if ($plan->getSavingsPercentage($planType) > 0)
            <s class="text-danger" style="font-weight: 600;">
                {{ display_currency($plan->getRegularCost($planType)) }}</s>
        @endif
        <h1 class="" style="font-weight: 600;">
            {{ display_currency($plan->prices[$planType]) }}
        </h1>
        @if ($plan->getSavingsPercentage($planType) > 0)
            <h4 class="text-success" style="font-weight: 200;">
                Save {{ number_format($plan->getSavingsPercentage($planType)) }}%</h4>
        @endif
        <p class="card-text">{{ $plan->description }}</p>

        <div class="mb-3">
            <ul class="list-unstyled row">
                @foreach (config('features') as $feature)
                    <li class="col-md-12 " style="font-weight: 200;">
                        @if (in_array($feature, $plan->features))
                            <i class="bi bi-check-circle text-success"></i>
                        @else
                            <i class="bi bi-x-circle text-danger"></i>
                        @endif
                        {{ str_replace('_', ' ', $feature) }}
                    </li>
                @endforeach
            </ul>
        </div>
        @if ($checkoutButton)
            <button wire:click="selectPlan({{ $plan->id }})"
                class="btn @if ($key % 2 == 0) bg-force-primary @else bg-white @endif w-100 mt-4">
                Select Plan
            </button>
        @endif
    </div>
</div>
