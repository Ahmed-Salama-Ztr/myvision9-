<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form 3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>
    <div class="container mt-5">
        {{-- @dump($errors) --}}
        {{-- @dump($errors->any()) --}}
        {{-- @dump($errors->all())

        @if ($errors->any())
        <div class="alert alert-danger">
            <p>There is an error</p>
        </div>
        @endif --}}

        {{-- @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                       <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>

        @endif --}}


        <h1 style="text-align: center">Form 1</h1>
        <form  action="{{ route('form3_data') }}" method="post">
            {{-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> --}}
            {{-- {{ csrf_field() }} --}}
            @csrf
            <div class="mb-3">
                <label for="">Name</label>
                <input name="name" type="text" class="form-control @error('name') is-invalid  @enderror" placeholder="Name">
                @error('name')
                    <small class="invalid-feedback">{{ $message }}</small>
                @enderror
            </div>
            <div class="mb-3">
                <label for="">Email</label>
                <input type="text" name="email" class="form-control @error('email') is-invalid  @enderror" placeholder="Email ">
                @error('email')
                    <small class="invalid-feedback">{{ $message }}</small>
                @enderror
            </div>
            <div class="mb-3">  
                <label for="">Age</label>
                <input type="text" name="age" class="form-control  @error('age') is-invalid  @enderror" placeholder="age ">
                @error('age')
                    <small class="invalid-feedback">{{ $message }}</small>
                @enderror
            </div>
            <button class="btn btn-success btn-lg w-25 mt-5">Send</button>

        </form>
        </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>
