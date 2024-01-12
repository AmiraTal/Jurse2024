<div class="card">
    <div class="card-header p-0">
        <h3 class="card-title">{{ __('UpdateTitle', ['name' => __('Authors') ]) }}</h3>
        <div class="px-2 mt-4">
            <ul class="breadcrumb mt-3 py-3 px-4 rounded">
                <li class="breadcrumb-item"><a href="@route(getRouteName().'.home')" class="text-decoration-none">{{ __('Dashboard') }}</a></li>
                <li class="breadcrumb-item"><a href="@route(getRouteName().'.authors.read')" class="text-decoration-none">{{ __(\Illuminate\Support\Str::plural('Authors')) }}</a></li>
                <li class="breadcrumb-item active">{{ __('Update') }}</li>
            </ul>
        </div>
    </div>

    <form class="form-horizontal" wire:submit.prevent="update" enctype="multipart/form-data">

        <div class="card-body">

                        <!-- Firstname Input -->
            <div class='form-group'>
                <label for='input-firstname' class='col-sm-2 control-label '> {{ __('Firstname') }}</label>
                <input type='text' id='input-firstname' wire:model.lazy='firstname' class="form-control  @error('firstname') is-invalid @enderror" placeholder='' autocomplete='on'>
                @error('firstname') <div class='invalid-feedback'>{{ $message }}</div> @enderror
            </div>
            <!-- Lastname Input -->
            <div class='form-group'>
                <label for='input-lastname' class='col-sm-2 control-label '> {{ __('Lastname') }}</label>
                <input type='text' id='input-lastname' wire:model.lazy='lastname' class="form-control  @error('lastname') is-invalid @enderror" placeholder='' autocomplete='on'>
                @error('lastname') <div class='invalid-feedback'>{{ $message }}</div> @enderror
            </div>
            <!-- Organism Input -->
            <div class='form-group'>
                <label for='input-organism' class='col-sm-2 control-label '> {{ __('Organism') }}</label>
                <input type='text' id='input-organism' wire:model.lazy='organism' class="form-control  @error('organism') is-invalid @enderror" placeholder='' autocomplete='on'>
                @error('organism') <div class='invalid-feedback'>{{ $message }}</div> @enderror
            </div>


        </div>

        <div class="card-footer">
            <button type="submit" class="btn btn-info ml-4">{{ __('Update') }}</button>
            <a href="@route(getRouteName().'.authors.read')" class="btn btn-default float-left">{{ __('Cancel') }}</a>
        </div>
    </form>
</div>
