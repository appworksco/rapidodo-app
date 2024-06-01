<!-- address modal -->
<div class="modal fade" id="addMerchantModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-fullscreen">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Merchant</h5>
                <button type="button" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="municipality-city" method="post">
                <input type="hidden" name="user_id" value="<?= $userId ?>">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label class="form-label">Logo</label>
                                <input type="file" placeholder="Enter Logo" class="form-control" name="logo" required>
                            </div>
                            <div class="form-group mb-3">
                                <label class="form-label">Merchant Name</label>
                                <input type="text" placeholder="Enter Merchant Name" class="form-control" name="merchant_name" required>
                            </div>
                            <div class="form-group mb-3">
                                <label class="form-label">Mobile Number</label>
                                <input type="text" placeholder="Enter Mobile Number" class="form-control" name="mobile_number" required>
                            </div>
                            <div class="form-group mb-3">
                                <label class="form-label">Username</label>
                                <input type="text" placeholder="Enter Username" class="form-control" name="username" required>
                            </div>
                            <div class="form-group mb-3">
                                <label class="form-label">Password</label>
                                <input type="text" placeholder="Enter Password" class="form-control" name="password" required>
                            </div>
                        </div>
                        <div class="col-md-6">

                            <div id="map"></div>
                            <div class="form-group my-3">
                                <label class="form-label">Municipality / City</label>
                                <select class="form-select" name="municipality_city" required>
                                    <?php
                                    $fetchMunicipalityCity = $municipalityCityFacade->fetchMunicipalityCity();
                                    foreach ($fetchMunicipalityCity as $fetchMunicipalityCity) { ?>
                                        <option value="<?= $fetchMunicipalityCity["municipality_city"] ?>"><?= $fetchMunicipalityCity["municipality_city"] ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group mb-3">
                                <label class="form-label">Location</label>
                                <input type="text" placeholder="Enter Location" class="form-control my-1" id="autocomplete">
                            </div>
                            <!-- Hidden values -->
                            <input type="hidden" id="latitude" name="location_latitude">
                            <input type="hidden" id="longitude" name="location_longitude">
                        </div>
                    </div>
                </div>
                <div class="modal-footer p-0 border-0">
                    <div class="col-6 m-0 p-0">
                        <button type="button" class="btn border-top btn-lg w-100" data-bs-dismiss="modal">Close</button>
                    </div>
                    <div class="col-6 m-0 p-0">
                        <button type="submit" class="btn bg-primary btn-lg w-100" name="add_municipality_city">Add Municipality / City</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    var marker; // Define marker variable in a wider scope
    var map;

    function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
            center: {
                lat: 7.8554,
                lng: 125.0565
            },
            zoom: 10,
            disableDefaultUI: true,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        });

        // Initialize the search functionality
        var input = document.getElementById('autocomplete');
        var autocomplete = new google.maps.places.Autocomplete(input);
        autocomplete.bindTo('bounds', map);

        // Get the search input and the button
        var searchInput = document.getElementById('autocomplete');
        var searchButton = document.getElementById('setLocation');

        // Event listener for when the search input changes
        searchInput.addEventListener('input', function() {
            // Disable the button if the input field is empty
            if (searchInput.value.trim() === '') {
                searchButton.disabled = true;
            } else {
                searchButton.disabled = false;
            }
        });

        // Event listener for when a place is selected
        autocomplete.addListener('place_changed', function() {
            var place = autocomplete.getPlace();
            if (!place.geometry) {
                window.alert("No details available for input: '" + place.name + "'");
                return;
            }

            if (place.geometry.viewport) {
                map.fitBounds(place.geometry.viewport);
            } else {
                map.setCenter(place.geometry.location);
                map.setZoom(17);
            }

            // Move the marker to the searched place
            if (!marker) {
                marker = new google.maps.Marker({
                    map: map,
                    draggable: true,
                    animation: google.maps.Animation.DROP,
                    position: place.geometry.location
                });

                // Event listener for marker dragend
                marker.addListener('dragend', function() {
                    // Update the latitude and longitude hidden inputs
                    document.getElementById('latitude').value = marker.getPosition().lat();
                    document.getElementById('longitude').value = marker.getPosition().lng();
                });
            } else {
                marker.setPosition(place.geometry.location);
            }

            // Update the latitude and longitude hidden inputs for the initial position
            document.getElementById('latitude').value = place.geometry.location.lat();
            document.getElementById('longitude').value = place.geometry.location.lng();
        });

        // Add a draggable marker for the initial position
        marker = new google.maps.Marker({
            map: map,
            draggable: true,
            animation: google.maps.Animation.DROP,
            position: map.getCenter()
        });

        // Event listener for marker dragend
        marker.addListener('dragend', function() {
            // Update the latitude and longitude hidden inputs
            document.getElementById('latitude').value = marker.getPosition().lat();
            document.getElementById('longitude').value = marker.getPosition().lng();
        });

        // Initially disable the button since the input is empty
        searchButton.disabled = true;
    }
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcX-e3_IzAQX0oFYEblWVOh6izY8m6rk4&libraries=places&callback=initMap&loading=async" async defer></script>