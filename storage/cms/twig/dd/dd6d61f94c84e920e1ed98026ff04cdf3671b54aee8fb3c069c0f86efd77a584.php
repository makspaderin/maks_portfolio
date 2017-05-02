<?php

/* /var/www/html/themes/demo/layouts/default.htm */
class __TwigTemplate_a7a0c759871ea38d7a8e6f849483ed54f93cb4dda17a0dfc97f2a4c0f8d98a69 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array()), "title", array()), "html", null, true);
        echo "</title>

    <meta name=\"description\" content=\"My name is Maksim Paderin and I'm a beginning full-stack web developer (and a designer) based in Finland. I'm always interested in new projects.\">
\t<meta name=\"google-site-verification\" content=\"MAYXn9DNB39VQJNYm1uPmghbPx6fknF0FEl5n4DPAMg\" />
\t<meta name=\"google-site-verification\" content=\"1iqrFitnvDOCVb_okGYr5wtMZxWeVPZZ-t-t6yRGBgw\" />
\t<meta http-equiv=\"Cache-control\" content=\"public\">

    <!-- Bootstrap -->
    <link rel=\"alternate\" href=\"http://mvpaderin.com\" hreflang=\"en-us\" />
    <link href=\"";
        // line 17
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/css/bootstrap.min.css");
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 18
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/css/style.css");
        echo "\" rel=\"stylesheet\">
    <link rel=\"icon\"
      type=\"image/ico\"
      href=\"";
        // line 21
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/img/icons/favicon.ico");
        echo "\">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js' | theme}}\"></script>
      <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js' | theme}}\"></script>
    <![endif]-->
  </head>
  
  ";
        // line 31
        echo $this->env->getExtension('CMS')->pageFunction();
        // line 32
        echo "  
        <footer>
          <p> &copy; 2016 Maksim Paderin</p>
      \t</footer>


      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
      <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>
      <!-- Include all compiled plugins (below), or include individual files as needed -->
      <script src=\"";
        // line 41
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/jqueryease.min.js");
        echo "\"></script>
      <script src=\"";
        // line 42
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/bootstrap.min.js");
        echo "\"></script>
      <script type=\"text/javascript\" src=\"";
        // line 43
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/custom.js");
        echo "\"></script>
  </body>
</html>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/themes/demo/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 43,  80 => 42,  76 => 41,  65 => 32,  63 => 31,  50 => 21,  44 => 18,  40 => 17,  28 => 8,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>{{ this.page.title }}</title>

    <meta name=\"description\" content=\"My name is Maksim Paderin and I'm a beginning full-stack web developer (and a designer) based in Finland. I'm always interested in new projects.\">
\t<meta name=\"google-site-verification\" content=\"MAYXn9DNB39VQJNYm1uPmghbPx6fknF0FEl5n4DPAMg\" />
\t<meta name=\"google-site-verification\" content=\"1iqrFitnvDOCVb_okGYr5wtMZxWeVPZZ-t-t6yRGBgw\" />
\t<meta http-equiv=\"Cache-control\" content=\"public\">

    <!-- Bootstrap -->
    <link rel=\"alternate\" href=\"http://mvpaderin.com\" hreflang=\"en-us\" />
    <link href=\"{{'assets/css/bootstrap.min.css' | theme}}\" rel=\"stylesheet\">
    <link href=\"{{'assets/css/style.css' | theme}}\" rel=\"stylesheet\">
    <link rel=\"icon\"
      type=\"image/ico\"
      href=\"{{'assets/img/icons/favicon.ico' | theme}}\">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js' | theme}}\"></script>
      <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js' | theme}}\"></script>
    <![endif]-->
  </head>
  
  {%page%}
  
        <footer>
          <p> &copy; 2016 Maksim Paderin</p>
      \t</footer>


      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
      <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>
      <!-- Include all compiled plugins (below), or include individual files as needed -->
      <script src=\"{{'assets/js/jqueryease.min.js' | theme}}\"></script>
      <script src=\"{{'assets/js/bootstrap.min.js' | theme}}\"></script>
      <script type=\"text/javascript\" src=\"{{'assets/js/custom.js' | theme}}\"></script>
  </body>
</html>", "/var/www/html/themes/demo/layouts/default.htm", "");
    }
}
