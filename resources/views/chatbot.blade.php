<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AI Medical Screening Chatbot</title>
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">

    <div class="row justify-content-center">

        <div class="col-md-5">

        <div class="card chat-card">

    <div class="chat-header">
        <h4>
            <i class="fa-solid fa-stethoscope"></i>
            AI Medical Screening Chatbot
        </h4>
        <small>Describe your symptoms and get an AI assessment</small>
    </div>

    <div class="card-body">

        <form id="chatForm">

            @csrf

            <div class="mb-3">
                <label class="form-label fw-bold">
                    Symptoms
                </label>

                <input
                    type="text"
                    class="form-control"
                    name="symptoms"
                    placeholder="Fever, cough, sore throat"
                    required>
            </div>

            <div class="mb-3">
                <label class="form-label fw-bold">
                    Duration
                </label>

                <input
                    type="text"
                    class="form-control"
                    name="duration"
                    placeholder="3 days"
                    required>
            </div>

            <button type="submit"
                    class="btn btn-primary btn-analyze w-100">
                <i class="fa-solid fa-robot"></i>
                Analyze 
            </button>

        </form>

    </div>

</div>

<div class="loading">
    <div class="spinner-border text-light"></div>
    <p class="text-white mt-2">Analyzing symptoms...</p>
</div>

<div id="result" class="mt-4"></div>
        </div>

    </div>

</div>



</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
$('#chatForm').submit(function(e){

    e.preventDefault();

    $('.loading').show();
    $('#result').html('');

    $.ajax({
        url:'/analyze',
        type:'POST',
        data:$(this).serialize(),

        success:function(res){

            $('.loading').hide();

            if(!res.possible_conditions){

                $('#result').html(`
                    <div class="alert alert-danger">
                        No matching condition found.
                    </div>
                `);

                return;
            }

            let html = `
            <div class="result-card">

                <div class="result-section">
                    <h5>
                        <i class="fa-solid fa-virus"></i>
                        Possible Conditions
                    </h5>
                    <ul>
            `;

            res.possible_conditions.forEach(function(item){
                html += `<li>${item}</li>`;
            });

            html += `
                    </ul>
                </div>

                <div class="result-section">
                    <h5>
                        <i class="fa-solid fa-triangle-exclamation"></i>
                        Severity Assessment
                    </h5>
                    <p>${res.severity_assessment}</p>
                </div>

                <div class="result-section">
                    <h5>
                        <i class="fa-solid fa-ambulance"></i>
                        Emergency Warning Signs
                    </h5>
                    <ul>
            `;

            res.emergency_warning_signs.forEach(function(item){
                html += `<li>${item}</li>`;
            });

            html += `
                    </ul>
                </div>

                <div class="disclaimer">
                    <strong>Disclaimer:</strong><br>
                    ${res.disclaimer}
                </div>

            </div>
            `;

            $('#result').html(html);
        },

        error:function(){

            $('.loading').hide();

            $('#result').html(`
                <div class="alert alert-danger">
                    Something went wrong. Please try again.
                </div>
            `);
        }
    });
});

</script>
</html>