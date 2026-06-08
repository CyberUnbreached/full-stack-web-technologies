<?php
include("functions.php");
?>

<!-- RESULTS SECTION -->
<h2 class="text-center">Contact Form Submissions</h2>
<hr>

<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Comments</th>
        </tr>
    </thead>
    <tbody id="results">
    </tbody>
</table>


<script src="assets/js/jquery-3.5.1.js"></script>

<script>

function refresh_data() {
    $.ajax({
        type: 'post',
        url: 'contact_query.php',
        success: function(data) {
            $('#results').html(data);
        }
    });
}

refresh_data();
setInterval(refresh_data, 1000);
</script>
