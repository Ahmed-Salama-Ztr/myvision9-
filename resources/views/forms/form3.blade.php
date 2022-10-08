<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form 3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <style>
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
                -webkit-appearance: none;
                margin: 0;
        }
        input[type=number] {
                -moz-appearance: textfield;

        }
        .loading{
            position: fixed;
            background:#666;
            width: 100%;
            height: 100%;
            top: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 999;
        }
        .prog-bar{
            width: 400px;
            height: 3px;
            background: #222;
            margin-top: 20px;
            border-radius: 5px;
            overflow: hidden;
        }
        .prog-bar div{
            width: 0%;
            background: #ffff;
            height: 3px;
            transition: all 0.3s ease;
        }

    </style>

  </head>
  <body>
    <div class="loading text-center">
        <div>
        <img src="{{ 'assets\img\Horse_gif.gif' }}" alt="horse">
        <div class="prog-bar">
            <div></div>
        </div>
        </div>
    </div>
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


        <h1 style="text-align: center">Form 3</h1>
        <form  action="{{ route('form3_data') }}" method="post">
            {{-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> --}}
            {{-- {{ csrf_field() }} --}}
            @csrf
            <div class="mb-3">
                <label>Name</label>
                <input type="text" name="name"  class="form-control @error('name') is-invalid  @enderror" placeholder="Name" value="{{ old('name') }}">
                @error('name')
                    <small class="invalid-feedback">{{ $message }}</small>
                @enderror
            </div>
            <div class="mb-3">
                <label>Email</label>
                <input type="email" name="email"  class="form-control @error('email') is-invalid  @enderror" placeholder="Email " value="{{ old('email') }}">
                @error('email')
                    <small class="invalid-feedback">{{ $message }}</small>
                @enderror
            </div>
            <div class="mb-3">
                <label>Age</label>
                <input type="number" name="age" class="form-control  @error('age') is-invalid  @enderror" placeholder="age "
                value="{{ old('age') }}">
                @error('age')
                    <small class="invalid-feedback">{{ $message }}</small>
                @enderror
            </div>
            <div class="mb-3">
                <label>Age</label>
                <input type="number" name="age2" class="form-control  @error('age2') is-invalid  @enderror" placeholder="age2 "
                value="{{ old('age2') }}">
                @error('age2')
                    <small class="invalid-feedback">{{ $message }}</small>
                @enderror
            </div>
            <div class="mb-3">
                <label>Age</label>
                <input type="number" name="age3" class="form-control  @error('age3') is-invalid  @enderror" placeholder="age3 "
                value="{{ old('age3') }}">
                @error('age3')
                    <small class="invalid-feedback">{{ $message }}</small>
                @enderror
            </div>
            <button class="btn btn-success btn-lg w-25 mt-5" disabled>Send</button>

        </form>
        </div>

        <script>//Real time entering script
            let inputs = document.querySelectorAll('input');
            let btn = document.querySelector('.btn');

            inputs.forEach(element => {
                element.onkeyup = ()=>{
                let error = [];
                    // console.log(element.value);
                    if (element.value.length > 0) {
                            element.classList.remove('is-invalid');
                            element.classList.add('is-valid');
                    }else{
                        element.classList.remove('is-valid');
                        element.classList.add('is-invalid');
                    }

                    inputs.forEach(element => {
                        if (element.value.length == 0) {
                                error.push(1)
                        }
                    });
                    // console.log(error);
                    if (error.length == 0) {
                        btn.disabled = false;
                    }else{
                        btn.disabled = true;
                    }


                }
            });
        </script>

        <script> //loading page and progress bar animation
            let loading = document.querySelector('.loading');
            let body = document.querySelector('body');
            let bar = document.querySelector('.prog-bar div');

            body.onload = () => {
                setTimeout(() => {
                    loading.style.display = 'none';
                }, 2000);

                let i = 1;
                setInterval(() => {
                    bar.style.width = 25*i + '%';
                    i++;
                }, 500);
                // console.log('hello');
        }
        </script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>
