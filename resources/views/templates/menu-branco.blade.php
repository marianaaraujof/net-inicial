<nav class="menuPrincipal fixed-top" id="colorchange">
<script>
    window.onscroll = function() {myFunction()};

    function myFunction() {
        if (document.body.scrollTop > 10 || document.documentElement.scrollTop > 10) {
            document.getElementById("colorchange").className = "estilizaMenuRolagem fixed-top";
        } else {
            document.getElementById("colorchange").className = "";
        }
    }
</script>


    <div class="menuPrincipal-container">

        <div class="menuPrincipalLogo">    

            <img src="{{ asset('imgs/EP_logo_03.svg') }}" width="80" height="80" alt="logo_ep">

        </div>


        <ul class="menuPrincipalContent-list">

            <li class="menuPrincipalContent-list-link">

                <a href="/">Início</a>

            </li>

            <li class="menuPrincipalContent-list-link">

                <a href="/equipe">Equipe</a>

            </li>

            <li class="menuPrincipalContent-list-link">

                <a href="/projetos">Projetos</a>

            </li>

        </ul>

    </div>
</nav>