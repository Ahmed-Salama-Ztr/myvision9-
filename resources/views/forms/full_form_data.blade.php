<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form 4</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body>
    {{-- <b>Your name is {{ $name }}, your email is {{ $email }} and your age is {{ $age }}</b> --}}
    {{-- <h2>{{"Your name is $name, your email is $email and your age is $age"}}</h2> --}}

    <div class="container mt-5">
        <table class="table table-striped table-bordered table-hover">
            <tr class="table-dark" style="text-align: center;">
                <th>name</th>
                <th>Gender</th>
                <th>Email</th>
                <th>Country</th>
                <th>Phone</th>
                <th>Interset</th>
                <th>Age</th>
                <th>Image</th>
                <th>Bio</th>
            </tr>
            <tr>
            <tr>
                <td>Ahmed Salama</td>
                <td>Male</td>
                <td>Ahmed@outloo.com</td>
                <td>Palestine</td>
                <td>0576214755</td>
                <td>Programming</td>
                <td>21</td>
                <td>AAAAA</td>
                <td>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Magni voluptatem quo nihil, error mollitia molestiae!</td>
            </tr>
            <td>{{ $name }}</td>
            <td>{{ $gender }}</td>
            <td>{{ $email }}</td>
            <td>{{ $country }}</td>
            <td>{{ $phone }}</td>

            <td>@foreach ( $intersets as $interset ) {{$interset}} <br> @endforeach</td>
            <td>{{ $age }}</td>
            <td><img width="100" height="80" src="{{ asset("uploads/$img_name") }}" alt="img"></td>
            <td>{{ $bio }}</td>
            </tr>
            <tr>
                <td>Ahmed Salama</td>
                <td>Male</td>
                <td>Ahmed@outloo.com</td>
                <td>Palestine</td>
                <td>0576214755</td>
                <td>Walking</td>
                <td>21</td>
                <td>AAAAA</td>
                <td>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Magni voluptatem quo nihil, error mollitia molestiae!</td>
            </tr>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>
