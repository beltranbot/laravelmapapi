<h5>INFORMACIÓN</h5>
<div class="form-row">
    <div class="form-group col-md-12">
        
        <label for="address">Address</label>
        <input
            class="form-control input-sm"
            style="width:100%"
            type="text"
            name="address"
            value='{{isset($place) ? $place->address : ""}}'
            {{isset($disabled) ? 'disabled' : ''}}
        >
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-6">
        
        <label for="latitude">Latitude</label>
        <input
            class="form-control input-sm"
            style="width:100%"
            type="text"
            name="latitude"
            value='{{isset($place) ? $place->latitude : ""}}'
            {{isset($disabled) ? 'disabled' : ''}}
        >
    </div>
    <div class="form-group col-md-6">
        
        <label for="longitude">Longitude</label>
        <input
            class="form-control input-sm"
            style="width:100%"
            type="text"
            name="longitude"
            value='{{isset($place) ? $place->longitude : ""}}'
            {{isset($disabled) ? 'disabled' : ''}}
        >
    </div>
</div>