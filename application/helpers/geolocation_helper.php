<?php
defined('BASEPATH') or exit('No direct script access allowed');

function get_location_by_ip($ip)
{
    $api_key = 'AIzaSyBFLYsOeylfb2ygj97HNYv6U-6qk6DuwLA'; // Replace with your actual Google Maps API key

    $api_url = 'https://maps.googleapis.com/maps/api/geocode/json?address=' . $ip . '&key=' . $api_key;

    // Initialize cURL
    $ch = curl_init();

    // Set cURL options
    curl_setopt($ch, CURLOPT_URL, $api_url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    // Execute the request
    $response = curl_exec($ch);

    // Close cURL
    curl_close($ch);

    // Parse the JSON response
    $location_data = json_decode($response, true);

    // Check if the response was successful
    if ($location_data['status'] == 'OK') {
        // Extract relevant location information
        $location = array(
            'country' => '',
            'region' => '',
            'city' => '',
            'latitude' => '',
            'longitude' => ''
        );

        // Iterate through the address components
        foreach ($location_data['results'][0]['address_components'] as $component) {
            if (in_array('country', $component['types'])) {
                $location['country'] = $component['long_name'];
            }
            if (in_array('administrative_area_level_1', $component['types'])) {
                $location['region'] = $component['long_name'];
            }
            if (in_array('locality', $component['types'])) {
                $location['city'] = $component['long_name'];
            }
        }

        // Extract latitude and longitude
        $location['latitude'] = $location_data['results'][0]['geometry']['location']['lat'];
        $location['longitude'] = $location_data['results'][0]['geometry']['location']['lng'];

        return $location;
    }

    return null; // Return null if the response was not successful
}

/* End of file geolocation_helper.php */
?>