<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href= "{{asset('css/styles.css')}}" rel="stylesheet"/>
    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
</head>
<body>
    <x-header/>

    {{$slot}}

    <section class="wrapper__section p-0">
      <div class="wrapper__section__components">
          <x-footer/>
      </div>
    </section>

  <a href="javascript:" id="return-to-top"><i class="fa fa-chevron-up"></i></a>

  <script type="text/javascript" src= "{{asset('js/index.bundle.js')}}""></script>

  
</body>

</html>