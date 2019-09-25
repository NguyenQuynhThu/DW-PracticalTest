<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Survey Form</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</head>

<body>
<div class="row">
    <div class="col-sm-3"></div>
    <div class="col-sm-6">
        <h1 class="p-3 text-center">FPT-APTECH STUDENTS SURVEY</h1>
        <div id="form-notify"></div>
        <form method="post">
            <div class="field form-group">
                <label for="name">Name:</label>
                <input class="form-control" type="text" id="name" name="name" required>
            </div>

            <div class="field form-group">
                <label for="email">Email:</label>
                <input class="form-control" type="email" id="email" name="email" required>
            </div>

            <div class="field form-group">
                <label for="phone">Telephone:</label>
                <input class="form-control" type="phone" id="phone" name="phone" required>
            </div>

            <div class="field form-group">
                <label for="message">Feedback:</label>
                <textarea class="form-control" id="feedback" name="feedback" required></textarea>
            </div>

            <div class="field form-group text-right">
                <button type="submit" class="btn btn-info" id="submit">Submit</button>
            </div>
        </form>
    </div>
    <div class="col-sm-3"></div>
</div>

<script>
    $('form').submit(false);
    $('#submit').click(function () {
        let name = $('#name').val();
        let email = $('#email').val();
        let phone = $('#phone').val();
        let feedback = $('#feedback').val();
        $.ajax({
            url: '/survey-submit',
            method: 'post',
            data: {
                '_token': $('meta[name=csrf-token]').attr("content"),
                'name': name,
                'email': email,
                'phone': phone,
                'feedback': feedback
            },
            success: function () {
                alert("Thank for your feedback!");
            },
            error: function () {
                alert("Submit error!");
            }
        });
    })
</script>
</body>
</html>
