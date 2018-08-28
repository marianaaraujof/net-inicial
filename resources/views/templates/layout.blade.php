<!DOCTYPE html>
<html lang="en">
   <head>
       @include('templates/common-head')
   </head>
  <body>
    <section id="menu">
    @include('templates/menu-branco')
    </section>
    <section id="box-geral">

      @yield('cfg_section_geral')

    </section>
    @include('templates/footer')
  <div id="mask"> </div>
  </body>
</html>