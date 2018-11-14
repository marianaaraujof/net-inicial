<!DOCTYPE html>
<html lang="en">
   <head>
       @include('templates/common-head')
   </head>
  <body>
    <section id="menu">
    @include('templates/menu-preto')

    </section>
    <section id="box-geral">

      @yield('cfg_section_geral')
      @include('templates/footer')
      
    </section>

  <div id="mask"> </div>
  </body>
</html>