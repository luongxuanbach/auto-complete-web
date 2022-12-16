<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>


    <div class="py-12">
        <div class="container ">
            <div class="panel panel-primary">
              <div class="panel-heading">
                <h2 class="panel-title">Add your Address</h2>
              </div>
              <div class="panel-body">
                <input id="autocomplete" placeholder="Enter your address" onFocus="geolocate()" type="text" class="form-control">
                <div id="address">
                  <div class="row">
                    <div class="col-md-6">
                      <label class="control-label">Street address</label>
                      <input class="form-control" id="street_number" disabled="true">
                    </div>
                    <div class="col-md-6">
                      <label class="control-label">Route</label>
                      <input class="form-control" id="route" disabled="true">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <label class="control-label">City</label>
                      <input class="form-control field" id="locality" disabled="true">
                    </div>
                    <div class="col-md-6"> 
                      <label class="control-label">State</label>
                      <input class="form-control" id="administrative_area_level_1" disabled="true">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <label class="control-label">Zip code</label>
                      <input class="form-control" id="postal_code" disabled="true">
                    </div>
                    <div class="col-md-6">
                      <label class="control-label">Country</label>
                      <input class="form-control" id="country" disabled="true">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCxmtcqg9OemiC2Ul-8RpumMJHS187XL2A&libraries=places&callback=initAutocomplete" async defer></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
          <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
          <script src="{{ asset('js/auto-complete.js') }}"></script>
        </div>
        {{-- <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    
                </div>
            </div>
        </div> --}}
    </div>
</x-app-layout>
