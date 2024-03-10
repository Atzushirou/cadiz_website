$(document).ready(function() {
    // Load provinces for the Philippines by default
    loadPhilippineProvinces();

    // Handle province selection
    $('#province').change(function() {
        var province_name = $(this).val();
        loadPhilippineCities(province_name);
    });

    // Handle city selection
    $('#cityMunicipality').change(function() {
        var city_name = $(this).val();
        loadPhilippineBarangays(city_name);
    });

    function loadPhilippineProvinces() {
        $('#province').empty(); // Clear existing options
        $('#province').append('<option selected disabled>Select Province</option>'); // Add default option
        $.getJSON('philippines.json', function(data) {
            $.each(data, function(region_code, region) {
                $.each(region.province_list, function(province_name, province_data) {
                    $('#province').append('<option value="' + province_name + '">' + province_name + '</option>');
                });
            });
        });
    }

    function loadPhilippineCities(province_name) {
        $('#cityMunicipality').empty(); // Clear existing options
        $('#cityMunicipality').append('<option selected disabled>Select City</option>'); // Add default option
        $.getJSON('philippines.json', function(data) {
            $.each(data, function(region_code, region) {
                $.each(region.province_list, function(province, province_data) {
                    if (province === province_name) {
                        $.each(province_data.municipality_list, function(city_name, city_data) {
                            $('#cityMunicipality').append('<option value="' + city_name + '">' + city_name + '</option>');
                        });
                    }
                });
            });
        });
    }

    function loadPhilippineBarangays(city_name) {
        $('#barangay').empty(); // Clear existing options
        $('#barangay').append('<option selected disabled>Select Barangay</option>'); // Add default option
        $.getJSON('philippines.json', function(data) {
            $.each(data, function(region_code, region) {
                $.each(region.province_list, function(province, province_data) {
                    $.each(province_data.municipality_list, function(city, city_data) {
                        if (city === city_name) {
                            $.each(city_data.barangay_list, function(index, barangay) {
                                $('#barangay').append('<option value="' + barangay + '">' + barangay + '</option>');
                            });
                        }
                    });
                });
            });
        });
    }
});