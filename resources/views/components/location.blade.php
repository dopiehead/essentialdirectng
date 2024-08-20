<!-- Map Section -->
 <input type="hidden" id="location" value="no 1 iyalla street alausa ikeja,Lagos state">
 <a id="view-on-map">View on map</a>
<div class="map-section" id="map-section" style="">
                <iframe id="map-frame" width="600" height="450" style="border:0;" allowfullscreen></iframe>
            </div>

            <script>
                document.addEventListener('DOMContentLoaded', () => {
                    const locationText = document.getElementById('location').innerText.trim();
                    const viewOnMapLink = document.getElementById('view-on-map');
                    const mapSection = document.getElementById('map-section');
                    const mapFrame = document.getElementById('map-frame');

                    // Check if locationText is not empty
                    if (locationText) {
                        // Encode the location text for the URL
                        const encodedLocation = encodeURIComponent(locationText);

                        // Set the href attribute to open the location in Google Maps
                        viewOnMapLink.href = https://www.google.com/maps/search/?api=1&query=${encodedLocation};

                        // Set the iframe src to show the map directly on the page
                        const apiKey = 'YOUR_GOOGLE_MAPS_API_KEY'; // Replace with your actual API key
                        const mapUrl = https://www.google.com/maps/embed/v1/search?key=${apiKey}&q=${encodedLocation};
                        mapFrame.src = mapUrl;

                        // Optionally show the map section if needed
                        mapSection.style.display = 'block'; // Show the map section
                    } else {
                        console.error('Location text is empty. Please check the content of #hotel-location.');
                    }
                });
            </script>