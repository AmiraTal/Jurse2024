<tr x-data="{ modalIsOpen : false }">
    <td class="">{{ $authors->firstname }}</td>
    <td class="">{{ $authors->lastname }}</td>
    <td class="">{{ $authors->organism }}</td>
    
    @if(getCrudConfig('Authors')->delete or getCrudConfig('Authors')->update)
        <td>

            @if(getCrudConfig('Authors')->update && hasPermission(getRouteName().'.authors.update', 1, 1, $authors))
                <a href="@route(getRouteName().'.authors.update', $authors->id)" class="btn text-primary mt-1">
                    <i class="icon-pencil"></i>
                </a>
            @endif

            @if(getCrudConfig('Authors')->delete && hasPermission(getRouteName().'.authors.delete', 1, 1, $authors))
                <button @click.prevent="modalIsOpen = true" class="btn text-danger mt-1">
                    <i class="icon-trash"></i>
                </button>
                <div x-show="modalIsOpen" class="cs-modal animate__animated animate__fadeIn">
                    <div class="bg-white shadow rounded p-5" @click.away="modalIsOpen = false" >
                        <h5 class="pb-2 border-bottom">{{ __('DeleteTitle', ['name' => __('Authors') ]) }}</h5>
                        <p>{{ __('DeleteMessage', ['name' => __('Authors') ]) }}</p>
                        <div class="mt-5 d-flex justify-content-between">
                            <a wire:click.prevent="delete" class="text-white btn btn-success shadow">{{ __('Yes, Delete it.') }}</a>
                            <a @click.prevent="modalIsOpen = false" class="text-white btn btn-danger shadow">{{ __('No, Cancel it.') }}</a>
                        </div>
                    </div>
                </div>
            @endif
        </td>
    @endif
</tr>
