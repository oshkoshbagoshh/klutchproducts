@props([
    'title' => null,
    'subtitle' => null,
    'footer' => null,
    'headerClass' => 'px-4 py-5 sm:px-6',
    'bodyClass' => 'px-4 py-5 sm:p-6',
    'headerClass' => 'px-4 py-5 sm:px-6 bg-gray-50',
])

<div {{ $attributes->merge(['class' => 'overflow-hiden bg-white shadow sm:rounded-lg']) }}>

    {{-- Card header --}}
    @if ($title || $subtitle)
        <div class="{{ $headerClass }}">
            @if ($title)
                <h3 class="text-lg font-medium leading-6 text-gray-900">
                    {{ $title }}
                </h3>
            @endif

            @if ($subtitle)
                <p class="mt-1 max-w-2xl text-sm text-gray-500">
                    {{ $subtitle }}
                </p>
            @endif



        </div>
    @endif

    {{-- Card Body --}}
    <div class="{{ $bodyClass }}">
        {{ $slot }}
    </div>


    {{-- Card Footer --}}
    @if ($footer)
        <div class="{{ $footerClass }}">
            {{ $footer }}
        </div>
    @endif
</div>
