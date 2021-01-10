<!--Hero_Section-->
<section id="home" class="top_cont_outer">
    @yield('hero')
</section>
<!--Hero_Section-->

<section id="aboutUs"><!--Aboutus-->
    @yield('about')
</section>
<!--Aboutus-->

<!--Service-->
<section  id="services">
    @yield('services')
</section>
<!--Service-->

<!-- Portfolio -->
<section id="Portfolio" class="content">
@yield('portfolio')


</section>
<!--/Portfolio -->

<section class="page_section" id="clients"><!--page_section-->
   @yield('clients')
</section>
<!--client_logos-->

<section class="page_section team" id="team"><!--main-section team-start-->
    @yield('team')
</section>
<!--/Team-->
<!--Footer-->
<footer class="footer_wrapper" id="contact">
    @yield('footer')
</footer>
