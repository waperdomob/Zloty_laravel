    <div class="container">

        <article class="cuadrofundacion">
                <p class="fundacion">Si desea donar su grano de arena a la Fundación aqui tiene sus Redes Sociales</p>
                <a class="iconos" href="https://www.facebook.com/fundacionbellaflor"><i class="fab fa-facebook"></i></a>
                <a class="iconos" href="https://twitter.com/bellaflortw"><i class="fab fa-twitter"></i></a>
                <a class="iconos" href="https://www.instagram.com/fundacion_bella_flor/"><i class="fab fa-instagram"></i></a>
        </article>
        <br><br>
    </div>

      <!-------------- footer------------ -->
    <div>
      <footer class="content-footer">

        <a href="https://www.facebook.com/fundacionbellaflor">
            <img src="{{  asset('img/logoBellaFlor.png')}}" alt="" width="190px" height="100px">
        </a>
        <div>
            <h2 class="titulo-final">&copy; Fundación Bella Flor | Grup-Zloty</h2>
            <div class="diseñotime">
                <script src="{{ asset('js/time.js') }}"></script>
            </div>
        </div>
        <img src="{{  asset('img/logo.png')}}" alt="" width="15%" >
    </footer>

    <!------- js de bootstrap------------------- -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
        </script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
        </script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
        </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
            integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
        </script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script>

    <!---- js de iconos---------------- -->
    <script src="https://kit.fontawesome.com/437f265f51.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>

    <script>
        $(window).scroll(function () {
            if ($("#menu").offset().top > 190) {
                $("#menu").addClass("main");
            } else {
                $("#menu").removeClass("main");
            }
        });
        $(function () {
            $('[data-toggle="popover"]').popover()
        })
    </script>
    </div>
